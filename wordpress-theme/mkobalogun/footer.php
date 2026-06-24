<?php
/**
 * Footer. (WordPress version of renderFooter().)
 */
if (!defined('ABSPATH')) exit;
$cfg  = mko_config();
$year = date('Y');
?>
<footer class="footer">
  <div class="footer-top">
    <div>
      <div class="footer-logo">MK<span>O</span> Balogun</div>
      <p class="footer-desc">Engineer, Entrepreneur, Mentor, and Community Developer — focused on Sustainable Smart Cities and Urban Renewal across Africa.</p>
    </div>
    <div class="footer-col">
      <h4>Navigate</h4>
      <ul>
        <?php foreach ($cfg['nav'] as $item) : ?>
          <li><a href="<?php echo esc_url(home_url($item['href'])); ?>"><?php echo esc_html($item['label']); ?></a></li>
        <?php endforeach; ?>
        <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Ventures</h4>
      <ul>
        <li><a href="<?php echo esc_url(home_url('/work-ventures/#gpfi')); ?>">GPFI Group</a></li>
        <li><a href="<?php echo esc_url(home_url('/work-ventures/#consulting')); ?>">DMB Consulting</a></li>
        <li><a href="<?php echo esc_url(home_url('/work-ventures/#foundation')); ?>">DMB Foundation</a></li>
        <li><a href="https://globalpfi.com" target="_blank" rel="noopener">Global PFI</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Contact</h4>
      <ul>
        <li><a href="mailto:<?php echo antispambot($cfg['site']['email']); ?>"><?php echo esc_html($cfg['site']['email']); ?></a></li>
        <li><a href="tel:<?php echo esc_attr($cfg['site']['phone1']); ?>"><?php echo esc_html($cfg['site']['phone1']); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">80 Norman Williams St,<br>Ikoyi, Lagos, Nigeria</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <span class="footer-copy">&copy; <?php echo esc_html($year); ?> Dr. MKO Balogun. All rights reserved.</span>
    <span class="footer-copy">Designed with purpose.</span>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
