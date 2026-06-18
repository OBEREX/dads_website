<?php
/**
 * MKO Balogun theme — setup & asset loading.
 */
if (!defined('ABSPATH')) exit;

require_once get_template_directory() . '/inc/config.php';

function mko_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['style', 'script', 'navigation-widgets']);
    add_theme_support('automatic-feed-links');
    register_nav_menus(['primary' => 'Primary Menu']);
}
add_action('after_setup_theme', 'mko_setup');

function mko_assets() {
    // Google Fonts — same as the static site
    wp_enqueue_style(
        'mko-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=DM+Sans:wght@300;400;500&display=swap',
        [], null
    );
    // Global design system
    wp_enqueue_style('mko-main', get_template_directory_uri() . '/assets/css/main.css', [], '1.0');
    // Homepage-only styles (the <style> block that was inside index.html)
    if (is_front_page()) {
        wp_enqueue_style('mko-home', get_template_directory_uri() . '/assets/css/home.css', ['mko-main'], '1.0');
    }
    // Nav toggle + sticky-shadow behaviour
    wp_enqueue_script('mko-theme', get_template_directory_uri() . '/assets/js/theme.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'mko_assets');
