/**
 * Nav toggle + sticky-shadow on scroll. (From the static js/components.js.)
 */
function toggleMobileNav() {
  var links = document.getElementById("navLinks");
  var toggle = document.querySelector(".nav-toggle");
  if (links) links.classList.toggle("open");
  if (toggle) toggle.classList.toggle("open");
}

function closeMobileNav() {
  var links = document.getElementById("navLinks");
  var toggle = document.querySelector(".nav-toggle");
  if (links) links.classList.remove("open");
  if (toggle) toggle.classList.remove("open");
}

window.addEventListener("scroll", function () {
  var nav = document.getElementById("navbar");
  if (nav) nav.classList.toggle("scrolled", window.scrollY > 20);
});

document.addEventListener("click", function (e) {
  var nav = document.getElementById("navLinks");
  var toggle = document.querySelector(".nav-toggle");
  if (nav && nav.classList.contains("open")) {
    if (!nav.contains(e.target) && e.target !== toggle && (!toggle || !toggle.contains(e.target))) {
      closeMobileNav();
    }
  }
});
