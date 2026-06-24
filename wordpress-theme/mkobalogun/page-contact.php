<?php
/**
 * Template for the "Contact" page (slug: contact). Ported from pages/contact.html.
 * The form submits via Formspree (id in inc/config.php). To use WPForms instead,
 * replace the <form> block with: echo do_shortcode('[wpforms id="123"]');
 */
if (!defined('ABSPATH')) exit;
$cfg = mko_config();
$formspree = $cfg['site']['forms']['formspree_id'] ?? '';
get_header();
?>

<section class="page-hero">
  <span class="hero-tag">Contact</span>
  <h1>Let's Start a<br><em>Conversation</em></h1>
  <div class="divider"></div>
  <p class="page-hero-sub">Whether you're looking to consult Dr. Balogun, book a speaking engagement, explore a business partnership, or connect with the DMB Foundation &mdash; reach out below.</p>
</section>

<!-- ENQUIRY TABS -->
<div class="eq-strip">
  <button class="eq-tab active" data-type="General Enquiry"><svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>General Enquiry</button>
  <button class="eq-tab" data-type="Business & Consulting"><svg viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="1"/><path d="M16 7V5a2 2 0 0 0-4 0v2"/></svg>Business &amp; Consulting</button>
  <button class="eq-tab" data-type="Speaking Engagement"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>Speaking Engagement</button>
  <button class="eq-tab" data-type="DMB Foundation"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>DMB Foundation</button>
  <button class="eq-tab" data-type="Media & Press"><svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>Media &amp; Press</button>
</div>

<!-- FORM + INFO -->
<div class="contact-main">
  <div class="form-side">
    <span class="section-tag">Send a Message</span>
    <h2 class="section-title">Get in Touch</h2>
    <div class="divider"></div>
    <form id="contact-form" onsubmit="handleSubmit(event)">
      <div class="form-row">
        <div class="form-group" style="margin-bottom:0;"><label>First name</label><input class="form-input" type="text" name="firstName" placeholder="e.g. Adewale" required></div>
        <div class="form-group" style="margin-bottom:0;"><label>Last name</label><input class="form-input" type="text" name="lastName" placeholder="e.g. Okafor" required></div>
      </div>
      <div class="form-row" style="margin-top:18px;">
        <div class="form-group" style="margin-bottom:0;"><label>Email address</label><input class="form-input" type="email" name="email" placeholder="your@email.com" required></div>
        <div class="form-group" style="margin-bottom:0;"><label>Phone number</label><input class="form-input" type="tel" name="phone" placeholder="+234 ..."></div>
      </div>
      <div class="form-group" style="margin-top:18px;"><label>Organisation / Company</label><input class="form-input" type="text" name="org" placeholder="Your company or institution (optional)"></div>
      <div class="form-group">
        <label>Nature of enquiry</label>
        <select class="form-select" name="enquiryType" id="enquiry-select">
          <option value="" disabled selected>Select a category...</option>
          <option>General Enquiry</option><option>Business &amp; Consulting</option>
          <option>Speaking Engagement</option><option>DMB Foundation</option>
          <option>Media &amp; Press</option><option>Partnership Opportunity</option><option>Other</option>
        </select>
      </div>
      <div class="form-group"><label>Subject</label><input class="form-input" type="text" name="subject" placeholder="Brief subject of your message" required></div>
      <div class="form-group"><label>Your message</label><textarea class="form-textarea" name="message" placeholder="Please provide as much detail as possible..." required></textarea></div>
      <div class="form-group">
        <label>How did you hear about Dr. Balogun?</label>
        <select class="form-select" name="source"><option value="" disabled selected>Select an option...</option><option>LinkedIn</option><option>YouTube</option><option>Referral / Word of mouth</option><option>Press / Media</option><option>Conference or Event</option><option>Search Engine</option><option>Other</option></select>
      </div>
      <div class="submit-row">
        <button type="submit" class="btn-submit">Send Message &rarr;</button>
        <p class="form-note">Your message will be reviewed by Dr. Balogun's team and responded to within 2&ndash;3 business days.</p>
      </div>
      <div class="success-msg" id="success-msg">Thank you! Your message has been received. Dr. Balogun's team will be in touch within 2&ndash;3 business days.</div>
    </form>
  </div>
  <div class="info-side">
    <span class="section-tag">Contact Details</span>
    <h2 class="section-title" style="font-size:28px;">Reach Us<br>Directly</h2>
    <div class="divider"></div>
    <div class="info-block"><span class="info-label">Email</span><div class="info-value"><a href="mailto:<?php echo antispambot($cfg['site']['email']); ?>"><?php echo esc_html($cfg['site']['email']); ?></a></div></div>
    <div class="info-block"><span class="info-label">Phone</span><div class="info-value"><a href="tel:<?php echo esc_attr($cfg['site']['phone1']); ?>"><?php echo esc_html($cfg['site']['phone1']); ?></a><br><a href="tel:<?php echo esc_attr($cfg['site']['phone2']); ?>"><?php echo esc_html($cfg['site']['phone2']); ?></a></div></div>
    <div class="info-block"><span class="info-label">Office Address</span><div class="info-value">80 Norman Williams Street<br>Off Awolowo Road, Ikoyi<br>Lagos, Nigeria</div></div>
    <div class="info-divider"></div>
    <div class="info-block">
      <span class="info-label">Office Hours</span>
      <div>
        <div class="hours-row"><span class="hours-day">Monday &ndash; Friday</span><span class="hours-time">8:00 AM &ndash; 5:00 PM</span></div>
        <div class="hours-row"><span class="hours-day">Saturday</span><span class="hours-closed">Closed</span></div>
        <div class="hours-row"><span class="hours-day">Sunday</span><span class="hours-closed">Closed</span></div>
      </div>
    </div>
    <div class="info-divider"></div>
    <div class="info-block"><span class="info-label">Response Time</span><div class="info-value" style="font-size:13px;color:#666;font-weight:300;line-height:1.8;">All enquiries reviewed by Dr. Balogun's team. Expect a response within <strong style="color:var(--navy);font-weight:500;">2&ndash;3 business days</strong>. For urgent matters, please call directly.</div></div>
  </div>
</div>

<!-- QUICK CARDS -->
<section class="quick-section">
  <span class="section-tag" style="color:var(--gold);">Prefer a Direct Line?</span>
  <h2 style="font-family:var(--serif);font-size:38px;font-weight:700;color:#fff;line-height:1.15;margin:0;">Other Ways to<br><em style="font-style:italic;color:var(--gold);">Reach Dr. Balogun</em></h2>
  <div class="divider"></div>
  <div class="quick-grid">
    <div class="quick-card"><div class="q-icon"><svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.18h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.72a16 16 0 0 0 6 6l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.73 16z"/></svg></div><div class="q-title">Call Directly</div><p class="q-desc">For urgent enquiries during business hours.</p><div class="q-value"><a href="tel:<?php echo esc_attr($cfg['site']['phone1']); ?>"><?php echo esc_html($cfg['site']['phone1']); ?></a><br><a href="tel:<?php echo esc_attr($cfg['site']['phone2']); ?>"><?php echo esc_html($cfg['site']['phone2']); ?></a></div></div>
    <div class="quick-card"><div class="q-icon"><svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div><div class="q-title">Send an Email</div><p class="q-desc">For detailed enquiries, proposals, or media correspondence.</p><div class="q-value"><a href="mailto:<?php echo antispambot($cfg['site']['email']); ?>"><?php echo esc_html($cfg['site']['email']); ?></a></div></div>
    <div class="quick-card"><div class="q-icon"><svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div class="q-title">Visit the Office</div><p class="q-desc">Meetings by appointment only.</p><div class="q-value">80 Norman Williams St,<br>Off Awolowo Rd, Ikoyi,<br>Lagos, Nigeria</div></div>
  </div>
</section>

<!-- SPEAKING & MEDIA -->
<section class="speaking-section">
  <span class="section-tag">Specific Enquiries</span>
  <h2 class="section-title">Speaking &amp; Media Requests</h2>
  <div class="divider"></div>
  <div class="speaking-grid">
    <div class="sp-card">
      <div class="sp-icon"><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
      <div class="sp-title">Book a Speaking Engagement</div>
      <p class="sp-desc">Dr. Balogun is available for keynote addresses, panel discussions, conference presentations, and university lectures across Nigeria, Africa, and internationally.</p>
      <div class="sp-topics"><span class="topic-pill">Facilities Management</span><span class="topic-pill">Smart Cities</span><span class="topic-pill">Entrepreneurship</span><span class="topic-pill">Engineering</span><span class="topic-pill">Mentorship</span><span class="topic-pill">Urban Development</span></div>
      <button class="btn-primary" onclick="document.querySelector('[data-type=\'Speaking Engagement\']').click();document.getElementById('contact-form').scrollIntoView({behavior:'smooth'});">Request a Speaking Slot</button>
    </div>
    <div class="sp-card">
      <div class="sp-icon"><svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg></div>
      <div class="sp-title">Media &amp; Press Enquiries</div>
      <p class="sp-desc">For interview requests, expert commentary, press features, podcast appearances, or TV and radio engagements &mdash; please provide outlet details, deadline, and topic focus.</p>
      <div class="sp-topics"><span class="topic-pill">Print Interview</span><span class="topic-pill">TV Appearance</span><span class="topic-pill">Podcast Guest</span><span class="topic-pill">Expert Commentary</span><span class="topic-pill">Press Feature</span><span class="topic-pill">Radio</span></div>
      <button class="btn-primary" onclick="document.querySelector('[data-type=\'Media &amp; Press\']').click();document.getElementById('contact-form').scrollIntoView({behavior:'smooth'});">Submit a Media Request</button>
    </div>
  </div>
</section>

<!-- MAP -->
<div class="map-section">
  <div class="map-inner">
    <div class="map-placeholder"><div class="map-pin"><div class="map-pin-dot"></div><span class="map-pin-label">Ikoyi, Lagos</span></div></div>
    <div class="map-address">
      <span class="map-addr-tag">Office Location</span>
      <div class="map-addr-title">80 Norman Williams Street,<br>Off Awolowo Road</div>
      <div class="map-addr-detail">Ikoyi, Lagos, Nigeria<br><br><a href="tel:<?php echo esc_attr($cfg['site']['phone1']); ?>"><?php echo esc_html($cfg['site']['phone1']); ?></a><br><a href="mailto:<?php echo antispambot($cfg['site']['email']); ?>"><?php echo esc_html($cfg['site']['email']); ?></a></div>
      <a href="https://maps.google.com/?q=80+Norman+Williams+Street+Ikoyi+Lagos+Nigeria" target="_blank" rel="noopener" class="map-directions"><svg viewBox="0 0 24 24"><polygon points="3 11 22 2 13 21 11 13 3 11"/></svg>Get Directions</a>
    </div>
  </div>
</div>

<script>
const MKO_FORMSPREE_ID = <?php echo wp_json_encode($formspree); ?>;
const MKO_EMAIL = <?php echo wp_json_encode($cfg['site']['email']); ?>;

document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".eq-tab").forEach(btn => {
    btn.addEventListener("click", () => {
      document.querySelectorAll(".eq-tab").forEach(b => b.classList.remove("active"));
      btn.classList.add("active");
      const sel = document.getElementById("enquiry-select");
      const type = btn.dataset.type;
      for (let opt of sel.options) { if (opt.value === type) { sel.value = type; break; } }
    });
  });
});

async function handleSubmit(e) {
  e.preventDefault();
  const form = e.target;
  const formData = new FormData(form);
  const btn = form.querySelector(".btn-submit");
  const successMsg = document.getElementById("success-msg");

  if (!MKO_FORMSPREE_ID) {
    console.log("Form submission (Formspree not configured):", Object.fromEntries(formData));
    showSuccess(form, successMsg);
    return;
  }
  const originalText = btn.textContent;
  btn.disabled = true; btn.textContent = "Sending...";
  try {
    const res = await fetch("https://formspree.io/f/" + MKO_FORMSPREE_ID, {
      method: "POST", body: formData, headers: { "Accept": "application/json" },
    });
    if (!res.ok) {
      const err = await res.json().catch(() => ({}));
      throw new Error(err.errors ? err.errors.map(x => x.message).join(", ") : "Submission failed");
    }
    showSuccess(form, successMsg);
  } catch (err) {
    console.warn("Form submission error:", err);
    btn.disabled = false; btn.textContent = originalText;
    alert("Sorry — your message could not be sent. Please try again, or email us directly at " + MKO_EMAIL + ".");
  }
}
function showSuccess(form, successMsg) {
  form.style.opacity = "0.5"; form.style.pointerEvents = "none";
  successMsg.style.display = "block"; successMsg.scrollIntoView({ behavior: "smooth" });
}
</script>

<?php get_footer(); ?>
