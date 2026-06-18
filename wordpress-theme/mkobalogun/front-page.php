<?php
/**
 * Homepage. (WordPress version of index.html.)
 */
if (!defined('ABSPATH')) exit;
$cfg = mko_config();
get_header();
?>

<!-- HERO -->
<section class="hero">
  <div class="hero-text">
    <span class="hero-tag">Engineer &middot; Entrepreneur &middot; Mentor</span>
    <h1>Building <em>Smarter</em><br>Cities &amp; Stronger<br>Communities</h1>
    <p class="hero-desc">Dr. MKO Balogun is a PhD-holding engineer, facilities management expert, and serial entrepreneur driving sustainable urban development across Africa and beyond.</p>
    <div class="hero-actions">
      <a href="<?php echo esc_url(home_url('/about/')); ?>" class="btn-primary">View Profile</a>
      <a href="<?php echo esc_url($cfg['social']['youtube']); ?>" target="_blank" rel="noopener" class="btn-ghost">Watch on YouTube &rarr;</a>
    </div>
  </div>
  <div class="hero-img-panel">
    <div class="hero-img-box">
      <div class="hero-img-placeholder"><div class="hero-silhouette"></div></div>
      <div class="hero-img-caption">
        <p>"Life is an adventure &mdash; what impression you leave makes a lasting mark in the world."</p>
        <span>&mdash; Dr. MKO Balogun</span>
      </div>
    </div>
  </div>
</section>

<!-- STATS BAR -->
<div class="stats-bar" style="grid-template-columns:repeat(4,1fr);">
  <div class="stat-item"><span class="stat-num"><?php echo esc_html(str_replace(',000', '', $cfg['stats']['total_followers'])); ?><span>,000</span></span><span class="stat-label">Social followers</span></div>
  <div class="stat-item"><span class="stat-num"><?php echo esc_html($cfg['stats']['awards']); ?></span><span class="stat-label">Awards &amp; honours</span></div>
  <div class="stat-item"><span class="stat-num"><?php echo esc_html($cfg['stats']['companies']); ?></span><span class="stat-label">Companies led</span></div>
  <div class="stat-item"><span class="stat-num"><?php echo esc_html($cfg['stats']['years_experience']); ?><span>+ yrs</span></span><span class="stat-label">Industry experience</span></div>
</div>

<!-- ABOUT STRIP -->
<div class="about-strip">
  <div class="about-left">
    <span class="section-tag">Who is Dr. MKO Balogun</span>
    <h2 class="section-title">A Legacy of<br>Leadership &amp; Impact</h2>
    <div class="divider"></div>
    <p class="body-text">Born in Ibadan, Dr. Muhammad Kassim Olatunde Balogun holds a B.Eng (Hons), MBA, and PhD (Hons) alongside globally recognised certifications in Facilities Management. He is the Group MD/CEO of GPFI and founder of the DMB Foundation.</p>
    <p class="body-text">His career spans engineering, entrepreneurship, mentorship, and community development across Nigeria, Africa, and the global stage.</p>
    <a href="<?php echo esc_url(home_url('/about/')); ?>" class="btn-primary">Full Biography &rarr;</a>
  </div>
  <div class="about-right">
    <span class="section-tag">Areas of expertise</span>
    <h2 class="section-title">What He<br>Stands For</h2>
    <div class="divider"></div>
    <div class="about-pills">
      <span class="pill">Facilities Management</span><span class="pill">Engineering</span>
      <span class="pill">Smart Cities</span><span class="pill">Real Estate</span>
      <span class="pill">Urban Renewal</span><span class="pill">Leadership</span>
      <span class="pill">Entrepreneurship</span><span class="pill">Mentorship</span>
      <span class="pill">Community Development</span><span class="pill">Sustainability</span>
    </div>
    <blockquote class="about-quote">"On my honour, I promise to do my best &mdash; to help other people at all times with all the resources at my disposal."</blockquote>
  </div>
</div>

<!-- VENTURES -->
<section class="ventures">
  <div class="flex-between" style="margin-bottom:44px;">
    <div>
      <span class="section-tag">Work &amp; Ventures</span>
      <h2 class="section-title" style="color:var(--white);">His Companies &amp; Initiatives</h2>
      <div class="divider"></div>
    </div>
    <a href="<?php echo esc_url(home_url('/ventures/')); ?>" class="see-all-light">See all ventures &rarr;</a>
  </div>
  <div class="ventures-grid">
    <?php
    $ventures = [
        ['href' => '/ventures/#gpfi',       'icon' => '<rect x="2" y="7" width="20" height="14" rx="1"/><path d="M16 7V5a2 2 0 0 0-4 0v2"/>', 'name' => 'GPFI Group',     'desc' => 'Global Property &amp; Facilities International &mdash; a leading integrated real estate and FM firm with operations across 8 African countries.', 'link' => 'Visit GPFI &rarr;'],
        ['href' => '/ventures/#dmbgroup',   'icon' => '<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/>', 'name' => 'DMB Group',      'desc' => 'The parent group encompassing Dr. Balogun\'s business interests in real estate, consulting, and investment across Nigeria and Africa.', 'link' => 'Learn more &rarr;'],
        ['href' => '/ventures/#csm',        'icon' => '<polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/>', 'name' => 'CSM',           'desc' => 'City Smart Management &mdash; delivering smart city infrastructure solutions, building management systems, and sustainable urban technologies.', 'link' => 'Learn more &rarr;'],
        ['href' => '/ventures/#consulting', 'icon' => '<circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/>', 'name' => 'DMB Consulting', 'desc' => 'Expert advisory in facilities management, engineering, and sustainable urban development for corporations and government bodies.', 'link' => 'Learn more &rarr;'],
        ['href' => '/ventures/#foundation', 'icon' => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/>', 'name' => 'DMB Foundation', 'desc' => 'Founded 2017 to support women entrepreneurs and youth across Africa through mentorship, scholarships, and community development.', 'link' => 'Foundation work &rarr;'],
    ];
    foreach ($ventures as $v) : ?>
      <a href="<?php echo esc_url(home_url($v['href'])); ?>" class="venture-card">
        <div class="venture-icon"><svg viewBox="0 0 24 24" stroke-width="1.5"><?php echo $v['icon']; ?></svg></div>
        <div class="venture-name"><?php echo $v['name']; ?></div>
        <p class="venture-desc"><?php echo $v['desc']; ?></p>
        <span class="venture-link"><?php echo $v['link']; ?></span>
      </a>
    <?php endforeach; ?>
  </div>
</section>

<!-- PUBLICATIONS -->
<section class="publications">
  <div class="flex-between" style="margin-bottom:44px;">
    <div>
      <span class="section-tag">Publications &amp; Blog</span>
      <h2 class="section-title">Latest Articles &amp; Insights</h2>
      <div class="divider"></div>
    </div>
    <a href="<?php echo esc_url(home_url('/publications/')); ?>" class="see-all">View all &rarr;</a>
  </div>
  <div class="pub-grid">
    <?php
    $latest = new WP_Query(['posts_per_page' => 3, 'ignore_sticky_posts' => true]);
    if ($latest->have_posts()) :
        while ($latest->have_posts()) : $latest->the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="pub-card">
            <span class="pub-tag"><?php echo esc_html(get_the_category() ? get_the_category()[0]->name : 'Article'); ?></span>
            <div class="pub-title"><?php the_title(); ?></div>
            <p class="pub-excerpt"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 22)); ?></p>
            <div class="pub-footer">
              <span class="pub-date"><?php echo esc_html(get_the_date('M Y')); ?></span>
              <span class="pub-read">Read &rarr;</span>
            </div>
          </a>
        <?php endwhile;
        wp_reset_postdata();
    else : ?>
      <p class="body-text">No articles published yet.</p>
    <?php endif; ?>
  </div>
</section>

<!-- YOUTUBE TEASER -->
<div class="yt-strip">
  <div class="yt-left">
    <span class="section-tag">Media / YouTube</span>
    <h2 class="section-title">Watch Dr. Balogun<br>in Action</h2>
    <div class="divider"></div>
    <p class="body-text">From keynote addresses to mentorship sessions &mdash; the YouTube channel brings Dr. Balogun's expertise to life. Subscribe to stay updated.</p>
    <a href="<?php echo esc_url($cfg['social']['youtube']); ?>" target="_blank" rel="noopener" class="btn-primary">Subscribe to Channel</a>
  </div>
  <div class="yt-right">
    <?php // To show real videos: install "Feeds for YouTube" and paste its shortcode below.
          // echo do_shortcode('[youtube-feed]'); ?>
    <a href="<?php echo esc_url($cfg['social']['youtube']); ?>" target="_blank" rel="noopener" class="yt-thumb">
      <div class="yt-play-btn"><svg viewBox="0 0 24 24"><polygon points="5 3 19 12 5 21 5 3"/></svg></div>
      <span class="yt-label">Latest video</span>
    </a>
  </div>
</div>

<!-- SOCIAL CONNECT STRIP -->
<div class="social-strip">
  <h3>Follow &amp; Connect with Dr. Balogun</h3>
  <div class="social-icons">
    <?php
    $social_names = ['linkedin' => 'LinkedIn', 'twitter' => 'Twitter / X', 'facebook' => 'Facebook', 'instagram' => 'Instagram', 'youtube' => 'YouTube'];
    foreach ($social_names as $key => $label) : ?>
      <a href="<?php echo esc_url($cfg['social'][$key]); ?>" target="_blank" rel="noopener" class="soc-btn"><?php echo esc_html($label); ?></a>
    <?php endforeach; ?>
  </div>
</div>

<?php get_footer(); ?>
