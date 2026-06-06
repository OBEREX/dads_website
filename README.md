# MKO Balogun Website — Developer Handoff
## Project Structure

```
mkobalogun/
├── index.html                  ← Homepage
├── css/
│   └── main.css                ← Global design system (all pages share this)
├── js/
│   ├── config.js               ← ⭐ EDIT THIS FIRST — API keys, handles, site info
│   ├── components.js           ← Shared nav, topbar, footer (auto-injected)
│   ├── youtube.js              ← YouTube Data API v3 integration
│   └── instagram.js            ← Instagram Basic Display API integration
├── data/
│   └── content.js              ← All articles, blog posts, speeches, book reviews
├── pages/
│   ├── about.html
│   ├── ventures.html
│   ├── publications.html
│   ├── media.html
│   ├── connect.html
│   ├── contact.html
│   └── blog/
│       ├── post.html           ← Single post template (dynamic, reads from content.js)
│       ├── [slug].html         ← One file per post (redirects to post.html#slug)
│       └── ...
└── images/                     ← Add Dr. Balogun's photos here
```

---

## Setup Instructions

### 1. Edit `js/config.js` first
This is the single source of truth for the entire site.

```js
CONFIG.site.email    = "mko.balogun@mkobalogun.com"   // ✅ Already set
CONFIG.site.phone1   = "+2348058840888"                // ✅ Already set
CONFIG.social.*      = { linkedin, twitter, ... }      // ✅ Already set — update handles if needed
CONFIG.youtube.apiKey     = "YOUR_KEY"                 // ⚠️ Add real key
CONFIG.youtube.channelId  = "YOUR_CHANNEL_ID"          // ⚠️ Add real channel ID
CONFIG.instagram.accessToken = "YOUR_TOKEN"            // ⚠️ Add real token
CONFIG.stats.*       = { totalFollowers, awards, ... } // ✅ Set — update as needed
```

### 2. YouTube API Setup
1. Go to [console.cloud.google.com](https://console.cloud.google.com)
2. Create a project → Enable **YouTube Data API v3**
3. Create an API key → Paste into `CONFIG.youtube.apiKey`
4. Find your channel ID:
   - Go to YouTube Studio → Settings → Channel → Advanced Settings
   - Copy the Channel ID → Paste into `CONFIG.youtube.channelId`

### 3. Instagram API Setup
1. Go to [developers.facebook.com](https://developers.facebook.com)
2. Create an app → Add **Instagram Basic Display** product
3. Add `@mkobalogun` as a test user
4. Generate a **long-lived access token** (valid for 60 days, refresh monthly)
5. Paste into `CONFIG.instagram.accessToken`

> **Note:** The site falls back to placeholder content automatically if API keys are not set.

### 4. Adding Profile Photos
Replace the silhouette placeholders by adding images:
- Hero photo: set background-image on `.hero-img-box` or use an `<img>` tag
- About photo: set background-image on `.photo-card`
- Any section can use a CSS `background-image` for fast loading

### 5. Contact Form
The contact form currently logs submissions to the console.
To make it live, choose one of:
- **Formspree** (free): Replace the `handleSubmit` function with a fetch to `https://formspree.io/f/YOUR_ID`
- **EmailJS** (free tier): Use EmailJS SDK to send directly from the browser
- **WordPress**: When migrating, use the **WPForms** or **Contact Form 7** plugin instead

### 6. Adding New Blog Posts
Open `data/content.js` and add to the `CONTENT.blogPosts` array:
```js
{
  id:      "unique-id",
  tag:     "Blog · Topic",
  title:   "Your Post Title",
  excerpt: "Short preview text...",
  date:    "Month Year",
  dateISO: "2024-01-01",
  slug:    "your-post-slug",        // Must match the .html filename in pages/blog/
  featured: false,
  content: `<p>Full HTML content here...</p>`,
}
```
Then create `pages/blog/your-post-slug.html` with the redirect template.

---

## WordPress Migration Notes
When implementing in WordPress:
- **Theme:** Kadence, Astra, or GeneratePress (all support custom CSS)
- `main.css` → Add to theme's Additional CSS or child theme stylesheet
- `content.js` data → Becomes WordPress posts/custom post types
- YouTube feed → **Feeds for YouTube** plugin (free)
- Instagram feed → **Smash Balloon Instagram Feed** plugin
- Contact form → **WPForms** or **Contact Form 7**
- Nav/footer → WordPress menus + widget areas

---

## Design Tokens
| Token | Value |
|-------|-------|
| Navy (primary) | `#0f1c2e` |
| Gold (accent) | `#c8b97a` |
| Cream (background) | `#f5f2ec` |
| Heading font | Cormorant Garamond |
| Body font | DM Sans |
| Base font size | 15.4px |
| Border radius | 2px (flat/editorial aesthetic) |

---

*Generated for mkobalogun.com redesign project — 2025*
