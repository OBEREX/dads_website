<?php
/**
 * Header — topbar + navbar. (WordPress version of renderTopbar() / renderNavbar().)
 */
if (!defined('ABSPATH')) exit;
$cfg = mko_config();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- TOPBAR -->
<div class="topbar">
  <span><?php echo esc_html(implode(', ', array_slice(array_map('trim', explode(',', $cfg['site']['address'])), -3))); ?> —
    <a href="mailto:<?php echo antispambot($cfg['site']['email']); ?>" style="color:#c8b97a;text-decoration:none;"><?php echo esc_html($cfg['site']['email']); ?></a>
  </span>
  <div class="topbar-socials">
    <?php foreach ($cfg['social'] as $name => $url) : ?>
      <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener"><?php echo esc_html(ucfirst($name)); ?></a>
    <?php endforeach; ?>
  </div>
</div>

<!-- NAVBAR -->
<nav class="navbar" id="navbar">
  <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo">MK<span>O</span> Balogun</a>
  <button class="nav-toggle" onclick="toggleMobileNav()" aria-label="Toggle menu">
    <span></span><span></span><span></span>
  </button>
  <ul class="nav-links" id="navLinks">
    <?php
    foreach ($cfg['nav'] as $item) {
        $slug = trim($item['href'], '/');                 // '' for Home, 'about', 'work-ventures', ...
        $is_active = ($slug === '') ? is_front_page() : is_page($slug);
        $class = $is_active ? ' class="active"' : '';
        printf('<li><a href="%s"%s>%s</a></li>', esc_url(home_url($item['href'])), $class, esc_html($item['label']));
    }
    $contact_active = is_page('contact') ? ' active' : '';
    ?>
    <li><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="nav-cta<?php echo $contact_active; ?>">Contact</a></li>
  </ul>
</nav>
