/**
 * MKO Balogun Website — Central Configuration
 * Update this file with real API keys and handles before going live.
 */
const CONFIG = {

  site: {
    name: "Dr. MKO Balogun",
    tagline: "Engineer. Entrepreneur. Mentor. Nation Builder.",
    email: "mko.balogun@mkobalogun.com",
    phone1: "+2348058840888",
    phone2: "+2348033327649",
    address: "80 Norman Williams Street, Off Awolowo Road, Ikoyi, Lagos, Nigeria",
    baseUrl: "https://mkobalogun.com",
  },

  social: {
    linkedin:  "https://linkedin.com/in/mkobalogun",
    twitter:   "https://twitter.com/mkobalogun",
    facebook:  "https://www.facebook.com/mko.balogun.5",
    instagram: "https://instagram.com/mkobalogun",
    youtube:   "https://youtube.com/@mkobalogun",
    pinterest: "https://pinterest.com/mkobalogun",
  },

  youtube: {
    // Replace with real API key from Google Cloud Console
    apiKey:    "YOUR_YOUTUBE_API_KEY",
    channelId: "YOUR_YOUTUBE_CHANNEL_ID",
    maxResults: 6,
  },

  // Contact form — Formspree
  // 1. Sign up at https://formspree.io and create a new form.
  // 2. Copy the form's ID (the part after /f/ in the endpoint URL).
  // 3. Paste it below. Until then, submissions log to the console.
  forms: {
    formspreeId: "xwvjjnkw",
  },

  instagram: {
    // Instagram oEmbed works without a key for public posts.
    // For a live feed, replace with a valid Instagram Basic Display access token.
    accessToken: "YOUR_INSTAGRAM_ACCESS_TOKEN",
    username:    "mkobalogun",
    maxResults:  12,
  },

  stats: {
    totalFollowers: "175,000",
    awards:         69,
    companies:      4,
    yearsExperience: 30,
    linkedinConnections: "50K+",
    youtubeSubscribers:  "45K+",
    facebookFollowers:   "40K+",
    twitterFollowers:    "20K+",
    instagramFollowers:  "20K+",
  },

  // Navigation links — update href values if folder structure changes
  nav: [
    { label: "Home",                href: "/index.html" },
    { label: "About",               href: "/pages/about.html" },
    { label: "Work & Ventures",     href: "/pages/ventures.html" },
    { label: "Publications & Blog", href: "/pages/publications.html" },
    { label: "Media",               href: "/pages/media.html" },
    { label: "Connect",             href: "/pages/connect.html" },
  ],
};
