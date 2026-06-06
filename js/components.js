/**
 * Shared Components — injected into every page via data-component attributes
 * Usage: <div data-component="topbar"></div>
 *        <div data-component="navbar"></div>
 *        <div data-component="footer"></div>
 */

function getCurrentPage() {
  const path = window.location.pathname;
  if (path.includes("about"))        return "about";
  if (path.includes("ventures"))     return "ventures";
  if (path.includes("publications")) return "publications";
  if (path.includes("media"))        return "media";
  if (path.includes("connect"))      return "connect";
  if (path.includes("contact"))      return "contact";
  if (path.includes("blog"))         return "publications";
  return "home";
}

function renderTopbar() {
  const socials = Object.entries(CONFIG.social).map(([name, url]) =>
    `<a href="${url}" target="_blank" rel="noopener">${name.charAt(0).toUpperCase() + name.slice(1)}</a>`
  ).join("");
  return `
    <div class="topbar">
      <span>${CONFIG.site.address.split(",").slice(-3).join(",").trim()} — <a href="mailto:${CONFIG.site.email}" style="color:#c8b97a;text-decoration:none;">${CONFIG.site.email}</a></span>
      <div class="topbar-socials">${socials}</div>
    </div>`;
}

function renderNavbar() {
  const current = getCurrentPage();
  const links = CONFIG.nav.map(item => {
    const key = item.label.toLowerCase().replace(/[^a-z]/g, "");
    const isActive = current === key.replace("workventures","ventures").replace("publicationsblog","publications") ? "active" : "";
    return `<li><a href="${item.href}" class="${isActive}">${item.label}</a></li>`;
  }).join("");
  return `
    <nav class="navbar" id="navbar">
      <a href="/index.html" class="nav-logo">MK<span>O</span> Balogun</a>
      <button class="nav-toggle" onclick="toggleMobileNav()" aria-label="Toggle menu">
        <span></span><span></span><span></span>
      </button>
      <ul class="nav-links" id="navLinks">
        ${links}
        <li><a href="/pages/contact.html" class="nav-cta${current === "contact" ? " active" : ""}">Contact</a></li>
      </ul>
    </nav>`;
}

function renderFooter() {
  const year = new Date().getFullYear();
  const navLinks = CONFIG.nav.map(item =>
    `<li><a href="${item.href}">${item.label}</a></li>`
  ).join("");
  const ventureLinks = [
    { label: "GPFI Group",       href: "/pages/ventures.html#gpfi" },
    { label: "DMB Consulting",   href: "/pages/ventures.html#consulting" },
    { label: "DMB Foundation",   href: "/pages/ventures.html#foundation" },
    { label: "Global PFI",       href: "https://globalpfi.com", external: true },
  ].map(v => `<li><a href="${v.href}"${v.external ? ' target="_blank" rel="noopener"' : ""}>${v.label}</a></li>`).join("");

  return `
    <footer class="footer">
      <div class="footer-top">
        <div>
          <div class="footer-logo">MK<span>O</span> Balogun</div>
          <p class="footer-desc">Engineer, Entrepreneur, Mentor, and Community Developer — focused on Sustainable Smart Cities and Urban Renewal across Africa.</p>
        </div>
        <div class="footer-col"><h4>Navigate</h4><ul>${navLinks}<li><a href="/pages/contact.html">Contact</a></li></ul></div>
        <div class="footer-col"><h4>Ventures</h4><ul>${ventureLinks}</ul></div>
        <div class="footer-col">
          <h4>Contact</h4>
          <ul>
            <li><a href="mailto:${CONFIG.site.email}">${CONFIG.site.email}</a></li>
            <li><a href="tel:${CONFIG.site.phone1}">${CONFIG.site.phone1}</a></li>
            <li><a href="/pages/contact.html">80 Norman Williams St,<br>Ikoyi, Lagos, Nigeria</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <span class="footer-copy">© ${year} Dr. MKO Balogun. All rights reserved.</span>
        <span class="footer-copy">Designed with purpose.</span>
      </div>
    </footer>`;
}

function toggleMobileNav() {
  const links = document.getElementById("navLinks");
  const toggle = document.querySelector(".nav-toggle");
  links.classList.toggle("open");
  // Animate hamburger to X
  toggle.classList.toggle("open");
}

function closeMobileNav() {
  document.getElementById("navLinks").classList.remove("open");
  const toggle = document.querySelector(".nav-toggle");
  if(toggle) toggle.classList.remove("open");
}

// Sticky navbar shadow on scroll
window.addEventListener("scroll", () => {
  const nav = document.getElementById("navbar");
  if (nav) nav.classList.toggle("scrolled", window.scrollY > 20);
});

// Inject all components
document.addEventListener("DOMContentLoaded", () => {
  // Close mobile nav on outside click
  document.addEventListener("click", (e) => {
    const nav = document.getElementById("navLinks");
    const toggle = document.querySelector(".nav-toggle");
    if(nav && nav.classList.contains("open")) {
      if(!nav.contains(e.target) && e.target !== toggle && !toggle.contains(e.target)) {
        closeMobileNav();
      }
    }
  });

  document.querySelectorAll("[data-component]").forEach(el => {
    switch (el.dataset.component) {
      case "topbar":  el.innerHTML = renderTopbar();  break;
      case "navbar":  el.innerHTML = renderNavbar();  break;
      case "footer":  el.innerHTML = renderFooter();  break;
    }
  });
});
