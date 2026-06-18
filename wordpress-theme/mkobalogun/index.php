<?php
/**
 * Generic fallback template (used for blog index / any page without a specific template).
 */
if (!defined('ABSPATH')) exit;
get_header();
?>
<section class="page-hero">
  <span class="hero-tag"><?php echo esc_html(get_the_archive_title() ?: 'Blog'); ?></span>
  <h1><?php echo esc_html(single_post_title('', false) ?: 'Latest Articles'); ?></h1>
  <div class="divider"></div>
</section>

<section class="publications" style="background:var(--cream);">
  <div class="pub-grid">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <a href="<?php the_permalink(); ?>" class="pub-card">
        <span class="pub-tag"><?php echo esc_html(get_the_category() ? get_the_category()[0]->name : 'Article'); ?></span>
        <div class="pub-title"><?php the_title(); ?></div>
        <p class="pub-excerpt"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 22)); ?></p>
        <div class="pub-footer">
          <span class="pub-date"><?php echo esc_html(get_the_date('M Y')); ?></span>
          <span class="pub-read">Read &rarr;</span>
        </div>
      </a>
    <?php endwhile; else : ?>
      <p class="body-text">Nothing here yet.</p>
    <?php endif; ?>
  </div>
  <div style="margin-top:40px;"><?php the_posts_pagination(); ?></div>
</section>

<?php get_footer(); ?>
