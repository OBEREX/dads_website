/**
 * YouTube Integration
 * Fetches latest videos from Dr. Balogun's YouTube channel via YouTube Data API v3.
 * Falls back to placeholder cards if API key is not yet configured.
 */

const YouTubeAPI = {

  async fetchVideos(maxResults = CONFIG.youtube.maxResults) {
    const { apiKey, channelId } = CONFIG.youtube;
    if (!apiKey || apiKey === "YOUR_YOUTUBE_API_KEY") {
      return this.placeholderVideos();
    }
    try {
      // Step 1: Get uploads playlist ID
      const channelRes = await fetch(
        `https://www.googleapis.com/youtube/v3/channels?part=contentDetails&id=${channelId}&key=${apiKey}`
      );
      const channelData = await channelRes.json();
      const uploadsId = channelData.items[0].contentDetails.relatedPlaylists.uploads;

      // Step 2: Get videos from uploads playlist
      const videosRes = await fetch(
        `https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId=${uploadsId}&maxResults=${maxResults}&key=${apiKey}`
      );
      const videosData = await videosRes.json();
      return videosData.items.map(item => ({
        id:        item.snippet.resourceId.videoId,
        title:     item.snippet.title,
        thumb:     item.snippet.thumbnails?.high?.url || item.snippet.thumbnails?.medium?.url,
        date:      new Date(item.snippet.publishedAt).toLocaleDateString("en-GB", { month: "long", year: "numeric" }),
        url:       `https://youtube.com/watch?v=${item.snippet.resourceId.videoId}`,
        channelUrl: CONFIG.social.youtube,
      }));
    } catch (err) {
      console.warn("YouTube API error, using placeholders:", err);
      return this.placeholderVideos();
    }
  },

  placeholderVideos() {
    return [
      { id:"p1", title:"The Future of Facilities Management in a Smart Africa",             date:"March 2024",    url: CONFIG.social.youtube, thumb: null, tag: "Keynote · Smart Cities" },
      { id:"p2", title:"The State of Facilities Management in West Africa",                 date:"November 2023", url: CONFIG.social.youtube, thumb: null, tag: "Panel · FM Industry" },
      { id:"p3", title:"Advice to Young Engineers Starting Out in Nigeria",                 date:"September 2023",url: CONFIG.social.youtube, thumb: null, tag: "Mentorship · Youth" },
      { id:"p4", title:"FM Professionals as First Responders in High-Rise Safety",          date:"April 2022",    url: CONFIG.social.youtube, thumb: null, tag: "Conference · Fire Safety" },
      { id:"p5", title:"Building GPFI — Lessons from 15 Years of Growth",                  date:"February 2022", url: CONFIG.social.youtube, thumb: null, tag: "Interview · Leadership" },
      { id:"p6", title:"DMB Foundation: Five Years of Changing Lives Across Africa",        date:"July 2022",     url: CONFIG.social.youtube, thumb: null, tag: "Foundation · Impact" },
    ];
  },

  renderVideoCard(video) {
    const thumbStyle = video.thumb
      ? `background-image:url('${video.thumb}');background-size:cover;background-position:center;`
      : "";
    return `
      <a href="${video.url}" target="_blank" rel="noopener" class="video-card">
        <div class="video-thumb" style="${thumbStyle}">
          <div class="video-thumb-bg"></div>
          <div class="video-play-sm"><svg viewBox="0 0 24 24"><polygon points="5 3 19 12 5 21 5 3"/></svg></div>
        </div>
        <div class="video-info">
          <span class="video-tag">${video.tag || "Video"}</span>
          <div class="video-title">${video.title}</div>
          <div class="video-meta">
            <span class="video-date">${video.date}</span>
          </div>
        </div>
      </a>`;
  },

  async renderGrid(containerId, maxResults) {
    const container = document.getElementById(containerId);
    if (!container) return;
    container.innerHTML = `<div class="loading-spinner">Loading videos...</div>`;
    const videos = await this.fetchVideos(maxResults);
    container.innerHTML = videos.map(v => this.renderVideoCard(v)).join("");
  },

  async renderFeatured(containerId) {
    const container = document.getElementById(containerId);
    if (!container) return;
    const videos = await this.fetchVideos(1);
    if (!videos.length) return;
    const v = videos[0];
    const embedUrl = `https://www.youtube.com/embed/${v.id}?autoplay=0&rel=0`;
    if (v.id && !v.id.startsWith("p")) {
      container.innerHTML = `<iframe width="100%" height="100%" src="${embedUrl}" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border-radius:3px;display:block;"></iframe>`;
    } else {
      container.innerHTML = `
        <a href="${CONFIG.social.youtube}" target="_blank" rel="noopener" class="yt-featured-thumb">
          <div class="yt-play-btn"><svg viewBox="0 0 24 24"><polygon points="5 3 19 12 5 21 5 3"/></svg></div>
          <span class="yt-featured-label">Latest video</span>
          <div class="yt-featured-title">${v.title}</div>
        </a>`;
    }
  },
};
