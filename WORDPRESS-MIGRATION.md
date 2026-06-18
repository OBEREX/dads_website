# Porting the Redesign into WordPress — Step-by-Step Guide

This guide turns the static redesign in this repo into a **custom WordPress theme** on the
existing mkobalogun.com install. It is written to be followed top-to-bottom. You have already
taken a backup — good. Do **all** of this on a **staging/local copy first**, never directly on live.

**Approach chosen:** custom classic theme (not a page builder). Your hand-coded HTML/CSS maps
almost 1:1 to PHP templates, so the design stays pixel-accurate and nothing is rebuilt by hand.

**File-to-template map (the whole plan in one table):**

| This repo | Becomes (WordPress) |
|---|---|
| `css/main.css` | `style.css` (enqueued) |
| `js/components.js` (topbar/nav/footer) | `header.php` + `footer.php` |
| `js/config.js` (links, stats) | ACF Options page (editable in admin) |
| `data/content.js` (articles, posts) | WordPress posts |
| `index.html` | `front-page.php` |
| `pages/about.html` … `connect.html` | `page-about.php` … `page-connect.php` |
| `pages/blog/post.html` | `single.php` |
| `js/youtube.js` | **Feeds for YouTube** plugin |
| `js/instagram.js` | **Smash Balloon Instagram Feed** plugin |
| `pages/contact.html` form (Formspree) | **WPForms** or **Contact Form 7** |

---

## Phase 0 — Set up a safe workspace (do not skip)

1. **Stand up a staging environment.** Pick one:
   - **Local:** [LocalWP](https://localwp.com) (free) — easiest. Create a new site, then import your live backup into it.
   - **Host staging:** most hosts (SiteGround, Kinsta, Cloudways) offer a one-click "staging" clone of live.
2. **Import the backup** into staging so you're working against the *real* content (2022–2023 posts, PDFs, images), not an empty site.
3. Confirm you can log into `staging-url/wp-admin`.
4. Note the PHP version (Tools → Site Health). Target **PHP 8.0+**.

> Everything below happens on **staging**. Live is only touched in Phase 10.

---

## Phase 1 — Scaffold the theme

1. In staging, create the folder: `wp-content/themes/mkobalogun/`
2. Create **`style.css`** as the very first file — WordPress identifies the theme by its header:

```css
/*
Theme Name: MKO Balogun
Author: (you)
Description: Custom theme for Dr. MKO Balogun — navy/gold editorial design.
Version: 1.0
*/
```

   Then paste the **entire contents of this repo's `css/main.css`** below that header comment.
3. Create **`index.php`** (required fallback — can be minimal at first):

```php
<?php get_header(); ?>
<main><?php /* fallback content */ ?></main>
<?php get_footer(); ?>
```

4. Create **`functions.php`** to load fonts, the stylesheet, and your scripts:

```php
<?php
function mko_assets() {
    // Google Fonts (Cormorant Garamond + DM Sans) — same as the static site
    wp_enqueue_style('mko-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=DM+Sans:wght@300;400;500&display=swap',
        [], null);
    // Main stylesheet (this is style.css = your main.css)
    wp_enqueue_style('mko-main', get_stylesheet_uri(), [], '1.0');
}
add_action('wp_enqueue_scripts', 'mko_assets');

// Enable features
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('html5', ['style', 'script']);
register_nav_menus(['primary' => 'Primary Menu']);
```

5. Go to **Appearance → Themes** in staging and **Activate "MKO Balogun."** The fonts/colors
   should already apply even before templates exist.

---

## Phase 2 — Build the global shell (header + footer)

This replaces `js/components.js`, which injected the topbar/nav/footer with JavaScript. In
WordPress these become real PHP partials so they're server-rendered (better for SEO and speed).

1. Create **`header.php`**. Translate the markup from `renderTopbar()` and `renderNavbar()` in
   `js/components.js`. Skeleton:

```php
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <!-- TOPBAR -->
  <div class="topbar">
    <span><?php echo get_field('address', 'option'); ?> —
      <a href="mailto:<?php echo antispambot(get_field('email','option')); ?>"><?php echo get_field('email','option'); ?></a>
    </span>
    <div class="topbar-socials">
      <!-- loop social links from ACF options (Phase 6) -->
    </div>
  </div>

  <!-- NAVBAR -->
  <nav class="navbar" id="navbar">
    <a href="<?php echo home_url('/'); ?>" class="nav-logo">MK<span>O</span> Balogun</a>
    <button class="nav-toggle" aria-label="Toggle menu"><span></span><span></span><span></span></button>
    <?php wp_nav_menu([
        'theme_location' => 'primary',
        'container'      => false,
        'menu_class'     => 'nav-links',
        'menu_id'        => 'navLinks',
    ]); ?>
  </nav>
```

2. Create **`footer.php`** from `renderFooter()`. End it with the two required WordPress calls:

```php
  <footer class="footer"><!-- footer markup from renderFooter() --></footer>
  <?php wp_footer(); ?>
</body>
</html>
```

3. Move the small JS behaviors (hamburger toggle, sticky-nav shadow on scroll) from
   `components.js` into a new `js/theme.js`, and enqueue it in `functions.php`:

```php
wp_enqueue_script('mko-theme', get_template_directory_uri().'/js/theme.js', [], '1.0', true);
```

4. In **Appearance → Menus**, create a menu with Home / About / Work & Ventures /
   Publications & Blog / Media / Connect / Contact, and assign it to the **Primary Menu** location.
   (This replaces the hardcoded `CONFIG.nav` array.)

---

## Phase 3 — Make site-wide data editable (ACF Options)

This replaces `js/config.js`. Install **Advanced Custom Fields** (free) so the owner can edit
social links, phone, email, and stats from the dashboard instead of editing code.

1. Install & activate **Advanced Custom Fields**.
2. Add an options page (in `functions.php`):

```php
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(['page_title' => 'Site Settings', 'menu_slug' => 'site-settings']);
}
```

3. In **Custom Fields → Add New**, create a field group "Site Settings" with fields matching
   `CONFIG`: `email`, `phone1`, `phone2`, `address`, and a sub-group for each social URL
   (`linkedin`, `twitter`, `facebook`, `instagram`, `youtube`, `pinterest`), plus the **stats**
   (`total_followers`, `awards`, `companies`, `years_experience`, `linkedin_connections`,
   `youtube_subscribers`, `facebook_followers`, `twitter_followers`). Set **Location = Options Page → Site Settings**.
4. Fill them in once with the current values from `config.js`. Now **every number lives in one
   place** — this fixes the "stats scattered across 3 files / `20K++` bug" problem we found,
   because all templates read `get_field('youtube_subscribers','option')`.

---

## Phase 4 — Homepage (`front-page.php`)

1. Copy `front-page.php` from `index.html`'s `<body>` content (hero, stats bar, about strip,
   ventures, publications, YouTube teaser, social strip).
2. Replace the page-specific `<style>` block at the top of `index.html` with either: paste it into
   `style.css`, or keep it inline in the template — either works.
3. Wrap it with `get_header()` / `get_footer()`:

```php
<?php get_header(); ?>
  <!-- hero, stats, about, ventures, publications, yt teaser, social strip -->
<?php get_footer(); ?>
```

4. Replace the hardcoded numbers in the stats bar with ACF:
   `<?php echo get_field('awards','option'); ?>` etc.
5. The **featured publications** grid (currently JS reading `CONTENT`) becomes a WP loop:

```php
<?php $q = new WP_Query(['posts_per_page' => 3]); while ($q->have_posts()) : $q->the_post(); ?>
  <a href="<?php the_permalink(); ?>" class="pub-card">
    <span class="pub-tag"><?php the_category(', '); ?></span>
    <div class="pub-title"><?php the_title(); ?></div>
    <p class="pub-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
  </a>
<?php endwhile; wp_reset_postdata(); ?>
```

6. **Set it as the homepage:** Settings → Reading → "Your homepage displays: A static page" →
   create a blank page called "Home" and select it. WordPress auto-uses `front-page.php`.

---

## Phase 5 — Static pages (About, Ventures, Media, Connect, Contact)

For each of `about / ventures / media / connect / contact`:

1. In admin, **Pages → Add New**, title it (e.g. "About"), publish. Note its slug.
2. In the theme, create a matching template file: `page-about.php`, `page-ventures.php`, etc.
   WordPress automatically uses `page-{slug}.php` for that page.
3. Copy the `<body>` markup from the corresponding `pages/*.html` into the template, wrapped in
   `get_header()` / `get_footer()`. Move each page's `<style>` block into `style.css`.
4. Replace dynamic bits:
   - Stats / social links → ACF (`get_field(..., 'option')`).
   - **Ventures** (5 cards) → an ACF **Repeater** field on the Ventures page so they're editable,
     or leave hardcoded in `page-ventures.php` if they rarely change.
   - **YouTube / Instagram** embeds → plugin shortcodes (Phase 7).

---

## Phase 6 — Content: articles & blog posts → WordPress posts

`data/content.js` holds your articles and blog posts. These become real WP posts (they get clean
URLs, search, RSS, and are editable in the dashboard).

1. **Reconcile with existing content first.** The live site already has posts from 2022–2023.
   Open the live site's Posts list and **keep those** — do not delete. The redesign just restyles
   them via `single.php`.
2. For any *new* articles defined only in `content.js`, recreate them as posts (Posts → Add New),
   matching title, date, category (use categories "Blog" / "Article" to mirror the `tag` field),
   and paste the `content` HTML into the block editor (Code editor mode).
3. Create **`single.php`** from `pages/blog/post.html` — this styles every individual post:

```php
<?php get_header(); while (have_posts()) : the_post(); ?>
  <article class="post-single">
    <span class="pub-tag"><?php the_category(', '); ?></span>
    <h1><?php the_title(); ?></h1>
    <div class="post-date"><?php echo get_the_date(); ?></div>
    <div class="post-body"><?php the_content(); ?></div>
  </article>
<?php endwhile; get_footer(); ?>
```

4. Create **`page-publications.php`** (or `archive.php`) listing all posts with the `.pub-card`
   grid, using a `WP_Query` loop like Phase 4 but `posts_per_page => -1` with the filter tabs.

> **Preserve URLs:** check the live site's permalink structure (Settings → Permalinks). Keep it
> identical so existing Google rankings and inbound links to old posts don't break. If any URL
> must change, add a redirect (Phase 10).

---

## Phase 7 — Dynamic feeds via plugins (the easy win)

This is where being on WordPress pays off — no API keys in client code, no token juggling.

**YouTube** (replaces `js/youtube.js`):
1. Install **Feeds for YouTube** (by Smash Balloon).
2. Connect via API key (the same Google Cloud key — but now stored server-side, safe).
3. Place its shortcode where the video grid/teaser goes in `front-page.php`, `page-media.php`,
   `page-connect.php`.

**Instagram** (replaces the dead `js/instagram.js`):
1. Install **Smash Balloon Instagram Feed**.
2. Click **Connect** — it handles the Business-account Graph API connection and token refresh for
   you (the thing that was impossible on the static site).
3. Drop its shortcode into the Instagram grid spots on `page-connect.php` (and homepage if used).

**Facebook followers** (optional): Smash Balloon also has a Facebook plugin if the account is a
**Page** (not a personal profile).

> **LinkedIn connections and Twitter/X followers stay manual** — no plugin can fetch them
> (LinkedIn has no API for it; X charges $100/mo). Edit those numbers in the ACF Site Settings.

---

## Phase 8 — Contact form

Replace the Formspree form on `pages/contact.html`:

1. Install **WPForms Lite** (or **Contact Form 7**).
2. Rebuild the fields: First name, Last name, Email, Phone, Organisation, Nature of enquiry
   (dropdown), Subject, Message, "How did you hear about us."
3. Set the form to email submissions to `mko.balogun@mkobalogun.com`.
4. Embed its shortcode in `page-contact.php` where the `<form>` was.
5. Add the free reCAPTCHA/anti-spam toggle.
6. You can now retire the Formspree integration.

---

## Phase 9 — QA on staging (before going near live)

Walk every page on staging and confirm:
- [ ] All 7 pages render with correct navy/gold styling.
- [ ] Mobile: hamburger menu opens/closes, layouts stack (test at 768px and 480px).
- [ ] Stats show correct numbers from ACF (and the `20K++` bug is gone).
- [ ] YouTube + Instagram feeds load real content.
- [ ] Contact form sends a test email successfully.
- [ ] Existing 2022–2023 posts still open at their original URLs.
- [ ] No broken images (check `wp-content/uploads` paths resolved).
- [ ] Run Tools → Site Health; resolve criticals.

---

## Phase 10 — Go live

1. **Take a fresh backup of live** (again) immediately before deploying.
2. Deploy staging → live. Either:
   - **Migration plugin:** All-in-One WP Migration / Duplicator — push the staging site to live; **or**
   - **Theme-only (safer if live content changed since your backup):** zip the finished
     `mkobalogun` theme folder, upload via **Appearance → Themes → Add New → Upload**, activate,
     then redo Menus + ACF Settings + plugin connections on live (content stays untouched).
3. **Set up redirects** for any changed URLs using the **Redirection** plugin (301s).
4. Re-point **Settings → Reading** to the new Home page on live.
5. Clear any caching plugin / CDN cache.

---

## Phase 11 — Post-launch

- [ ] Resubmit the sitemap in Google Search Console; watch for 404s for 1–2 weeks.
- [ ] Add Open Graph / Twitter card meta + JSON-LD `Person` schema (Yoast or Rank Math plugin
      gives you most of this for free) — the SEO gap we flagged earlier.
- [ ] Confirm SSL still valid and all assets load over HTTPS.
- [ ] Restrict the YouTube API key to the domain in Google Cloud Console.
- [ ] Schedule automatic backups.

---

### Realistic effort

- A developer comfortable with WordPress theming: **2–4 focused days** for the theme + templates,
  plus ~half a day for plugins/forms/QA.
- The CSS design system (`main.css`) is the bulk of the visual work and it's **already done** — it
  ports in as-is. Most effort is converting 8 HTML files to PHP templates and wiring ACF.
```
