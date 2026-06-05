/**
 * Instagram Integration
 * Uses Instagram Basic Display API when an access token is provided.
 * Falls back to placeholder grid if not configured.
 *
 * To get an access token:
 * 1. Go to developers.facebook.com
 * 2. Create an app → Add Instagram Basic Display product
 * 3. Generate a long-lived access token for @mkobalogun
 * 4. Paste it into CONFIG.instagram.accessToken in config.js
 */

const InstagramAPI = {

  async fetchPosts(maxResults = CONFIG.instagram.maxResults) {
    const { accessToken } = CONFIG.instagram;
    if (!accessToken || accessToken === "YOUR_INSTAGRAM_ACCESS_TOKEN") {
      return this.placeholderPosts();
    }
    try {
      const res = await fetch(
        `https://graph.instagram.com/me/media?fields=id,caption,media_type,media_url,permalink,thumbnail_url,timestamp&limit=${maxResults}&access_token=${accessToken}`
      );
      const data = await res.json();
      if (data.error) throw new Error(data.error.message);
      return data.data
        .filter(p => p.media_type === "IMAGE" || p.media_type === "CAROUSEL_ALBUM")
        .map(p => ({
          id:        p.id,
          url:       p.permalink,
          imageUrl:  p.media_url,
          caption:   p.caption ? p.caption.substring(0, 80) + "..." : "",
          date:      new Date(p.timestamp).toLocaleDateString("en-GB", { month: "short", year: "numeric" }),
        }));
    } catch (err) {
      console.warn("Instagram API error, using placeholders:", err);
      return this.placeholderPosts();
    }
  },

  placeholderPosts() {
    const captions = [
      "NSE Fellowship Conferment — 2022",
      "World FM Day — IFMA Nigeria 2020",
      "Tall Building Fire Safety Conference",
      "CEO of the Year Award — 2018",
      "Africa Mentees Initiative Programme",
      "GPFI Group Operations — Lagos",
      "DMB Foundation Community Outreach",
      "Speaking at Engineering Conference",
      "Mentorship Session — Youth Programme",
      "Smart Cities Forum — Lagos",
      "GPFI Team Building Session",
      "DMB Foundation Graduation Ceremony",
    ];
    return captions.map((caption, i) => ({
      id: `ph-${i}`,
      url: CONFIG.social.instagram,
      imageUrl: null,
      caption,
      date: "",
    }));
  },

  renderPost(post) {
    const style = post.imageUrl
      ? `background-image:url('${post.imageUrl}');background-size:cover;background-position:center;`
      : "";
    return `
      <a href="${post.url}" target="_blank" rel="noopener" class="ig-item" title="${post.caption}">
        <div class="ig-item-inner" style="${style}">
          ${!post.imageUrl ? `<svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>` : ""}
        </div>
        <div class="ig-overlay"></div>
      </a>`;
  },

  async renderGrid(containerId, maxResults) {
    const container = document.getElementById(containerId);
    if (!container) return;
    container.innerHTML = `<div class="loading-spinner">Loading photos...</div>`;
    const posts = await this.fetchPosts(maxResults);
    container.innerHTML = posts.map(p => this.renderPost(p)).join("");
  },
};
