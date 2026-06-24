<?php
/**
 * Generic page template — used for any Page that doesn't have its own page-{slug}.php yet.
 */
if (!defined('ABSPATH')) exit;
get_header();
while (have_posts()) : the_post(); ?>
  <section class="page-hero">
    <span class="hero-tag"><?php bloginfo('name'); ?></span>
    <h1><?php the_title(); ?></h1>
    <div class="divider"></div>
  </section>
  <section style="background:var(--cream);padding:66px 44px;">
    <div class="body-text" style="max-width:760px;"><?php the_content(); ?></div>
  </section>
<?php endwhile;
get_footer();
