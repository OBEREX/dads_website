<?php
/**
 * Template for the "About" page (slug: about). Ported from pages/about.html.
 */
if (!defined('ABSPATH')) exit;
get_header();
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="about-hero-grid">
    <div>
      <span class="hero-tag">About Dr. MKO Balogun</span>
      <h1>Engineer. Leader.<br><em>Nation Builder.</em></h1>
      <div class="divider"></div>
      <p class="page-hero-sub">Born in Ibadan in 1967, Dr. Muhammad Kassim Olatunde Balogun has spent over three decades building institutions, shaping policy, mentoring the next generation of African leaders, and establishing himself as one of Africa's foremost voices in Facilities Management and Sustainable Urban Development.</p>
    </div>
    <div>
      <?php
      $about_img  = has_post_thumbnail() ? get_the_post_thumbnail_url(get_queried_object_id(), 'large') : '';
      $card_style = $about_img ? ' style="background-image:url(\'' . esc_url($about_img) . '\');background-size:cover;background-position:center top;"' : '';
      ?>
      <div class="photo-card"<?php echo $card_style; ?>>
        <?php if (!$about_img) : ?>
          <div class="photo-placeholder"><div class="photo-silhouette"></div></div>
        <?php endif; ?>
        <div class="photo-badge">
          <p>Dr. MKO Balogun</p>
          <span>Group MD/CEO &middot; GPFI Group</span>
        </div>
      </div>
      <div class="creds-strip">
        <div class="cred-pill">B.Eng (Hons) &middot; MBA &middot; PhD (Hons)</div>
        <div class="cred-pill">CFM &middot; FCMI &middot; FMP &middot; FNSE</div>
      </div>
    </div>
  </div>
</section>

<!-- BIO + PHILOSOPHY -->
<div class="bio-section" id="biography">
  <div class="bio-left">
    <span class="section-tag">Biography</span>
    <h2 class="section-title">The Man Behind<br>the Mission</h2>
    <div class="divider"></div>
    <p class="body-text">Born on July 5, 1967, in Ibadan, Oyo State, Nigeria, to the late Dr. Abdul Ghani Kola Balogun &mdash; a trade unionist, politician, sports administrator and civil administrator &mdash; and the late Alhaja Memunat Balogun, Muhammad Kassim Olatunde Balogun attended various primary schools in Ibadan between 1973 and 1979, including Ratibi Muslim School, St. Patrick Primary School and Muslim Primary School, Oke Ibadan.</p>
    <p class="body-text">He proceeded to the famous St. Thomas Aquinas College, Akure (1979&ndash;1984), then Apostolic Teachers College, Ilesa (1984&ndash;1988), and was among the pioneering students at Wesley College of Science, Ibadan in 1988. In 1989 he entered Federal University of Technology Owerri, graduating in 1995 with a B.Eng (Hons).</p>
    <p class="body-text">He pursued an Executive MBA at the prestigious Lagos Business School, Pan Atlantic University (2004&ndash;2006), followed by a PhD in Entrepreneurship commenced at Walden University, USA (2012), and was honoured with a PhD in Management by Commonwealth University, Belize in December 2012.</p>
    <p class="body-text">Today, Dr. Balogun is the Group MD/CEO of Global Property &amp; Facilities International Limited (GPFI), Founder of DMB Group of companies, namely DMB Consulting, DMB Smart and Sustainable Cities Ltd, DMB Aviation and Hospitality Solutions, DMB Technology, Professional Leadership Academy, Africa Golf Tours, Convoride, DMB Integrated Hospitality Management Ltd and Founder of the DMB Foundation. He is an Adjunct Lecturer at the University of Lagos Masters in Facilities Management programme, a board member of Premier Paints Plc, and the Chairman of its Strategy Committee. He has five sons: Abdulrasaq, Kassim, Ali, Idris and Abdulmuiid.</p>
    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-primary">Get in Touch &rarr;</a>
  </div>
  <div class="bio-right">
    <span class="section-tag">Philosophy &amp; Values</span>
    <h2 class="section-title">What Drives<br>Dr. Balogun</h2>
    <div class="divider"></div>
    <div class="philosophy-block">
      <span class="phil-label">His Philosophy</span>
      <blockquote class="phil-quote">"Life is an adventure, Life is a school, Life is a sports field, Life is a place where you meet people &mdash; and what impression you leave after the meeting makes a lasting impression in the world and the mind of the people you meet."</blockquote>
    </div>
    <div class="philosophy-block">
      <span class="phil-label">His Resolution</span>
      <blockquote class="phil-quote">"On my honour, I promise to do my best, to do my duty to God and my country, to help other people at all times with all the resources at my disposal, to abide by all God's laws and laws of my nation. So help me God. Amen."</blockquote>
    </div>
    <div class="philosophy-block">
      <span class="phil-label">His Focus</span>
      <blockquote class="phil-quote">"Sustainability and Smart City Development &mdash; building institutions and infrastructure that outlast any one individual."</blockquote>
    </div>
  </div>
</div>

<!-- CAREER TIMELINE -->
<section class="timeline-section" id="timeline">
  <span class="section-tag">Career Timeline</span>
  <h2 class="section-title">A Journey of Purposeful Leadership</h2>
  <div class="timeline" id="timeline-items"></div>
</section>

<!-- CREDENTIALS -->
<section class="cred-section" id="credentials">
  <span class="section-tag" style="color:var(--gold);">Academic &amp; Professional Credentials</span>
  <h2 class="section-title" style="color:var(--white);">Qualifications &amp; Certifications</h2>
  <div class="divider"></div>
  <div class="cred-grid" id="cred-grid"></div>
</section>

<!-- AWARDS -->
<section class="awards-section" id="awards">
  <span class="section-tag">Recognition &amp; Honours</span>
  <h2 class="section-title">Awards &amp; Fellowships</h2>
  <div class="divider"></div>
  <p class="body-text" style="max-width:680px;">Dr. Balogun is a recipient of numerous personal and corporate awards across Nigeria, Africa and internationally &mdash; recognising his leadership in engineering, facilities management, entrepreneurship and community service.</p>

  <h3 class="awards-sub">Personal Awards</h3>
  <div class="awards-grid" id="personal-awards-grid"></div>

  <h3 class="awards-sub" style="margin-top:44px;">Company Awards (GPFI Group)</h3>
  <div class="awards-grid" id="company-awards-grid"></div>
</section>

<!-- PROFESSIONAL MEMBERSHIPS -->
<section class="mem-section" id="memberships">
  <span class="section-tag">Professional Memberships</span>
  <h2 class="section-title">Bodies &amp; Associations</h2>
  <div class="divider"></div>
  <div class="mem-list" id="mem-list"></div>
</section>

<!-- CTA -->
<div class="cta-strip">
  <h2>Ready to work with<br>Dr. <em>Balogun</em>?</h2>
  <div class="cta-actions">
    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-primary">Get in Touch</a>
    <a href="<?php echo esc_url(home_url('/work-ventures/')); ?>" class="btn-outline-gold">View His Ventures &rarr;</a>
  </div>
</div>

<script>
const timelineData = [
  { year: "2017 – Present", title: "Founder — DMB Foundation", org: "DMB Foundation, Lagos, Nigeria", desc: "Established the DMB Foundation to support women entrepreneurs, youth empowerment, and mentorship programmes across Africa, including the Africa Mentees Initiative and Africa Students Mentorship Programme. The Foundation provides scholarships from senior secondary to university level, with polytechnic, open university, and secondary school scholars also supported." },
  { year: "2015 – Present", title: "Group MD / CEO", org: "GPFI Group — Global Property & Facilities International Limited", desc: "Leads one of Nigeria's foremost integrated real estate and facilities management groups. Under his leadership, GPFI has grown from a local Nigerian company to one with operations across 5 African countries. He is also a board member of Premier Paints Plc and Chairman of its Strategy Committee." },
  { year: "2014 – Present", title: "Adjunct Lecturer — Masters in Facilities Management", org: "University of Lagos, Department of Estate Management", desc: "Appointed as Adjunct Lecturer in 2014 after volunteering on the programme since its commencement in 2009. Introduced innovations including guest lecturer series, practical projects, and site visits to existing buildings." },
  { year: "2012", title: "MD/CEO following merger with WSP FMC Nigeria", org: "WSP FMC Nigeria Ltd / GPFI Group", desc: "Merged Domme FM Ltd with WSP FMC Nigeria Ltd in 2012, taking over as MD/CEO and steering the combined entity through rebranding, growth, and expansion across Africa." },
  { year: "2010 – Present", title: "Founder & Principal Consultant", org: "DMB Consulting", desc: "Advisory firm specialising in facilities management, engineering solutions, and sustainable urban development for corporations, institutions, and government bodies." },
  { year: "2008 – Present", title: "Founder & MD/CEO", org: "Domme FM Ltd (now GPFI Group)", desc: "Left paid employment in 2008 to grow Domme FM Ltd, a company originally started as an MBA project. Grew the firm from a startup to one of Nigeria's leading FM companies." },
  { year: "2008 – 2009", title: "Facilities Manager", org: "MM2 Terminal, Lagos", desc: "Set the tone for proper facilities management of the terminal and reduced the cost of running the terminal by more than 12%." },
  { year: "2007 – 2008", title: "Mechanical Services Manager → Facilities Manager → Project Manager", org: "UBA Plc", desc: "Oversaw the transformation of UBA House and managed facilities and mechanical services for the banking group across its major facilities." },
  { year: "2006", title: "Project Manager → Facilities Manager", org: "UACN — Mr. Biggs", desc: "Managed projects and facilities for Mr. Biggs, reducing the cost of set-up by more than 25%." },
  { year: "2005", title: "Sales & Marketing — Mercedes Benz B-Class & VW Trucks", org: "Leventis Motors Nigeria", desc: "Worked to introduce the Mercedes Benz B-Class and Volkswagen Trucks to the Nigerian market." },
  { year: "2004 – 2005", title: "AGM — Armoured Vehicle Services", org: "Bemil Security Services", desc: "Responsible for marketing, production of armoured vehicles and related products, and maintenance of vehicles and buildings." },
  { year: "2001 – 2004", title: "Production Manager → Marketing Manager → After Sales Manager", org: "UACN / General Motors Nigeria", desc: "As Production Manager, the plant was voted one of the best managed assembly plants in the world. As Marketing Manager, expanded the company's sales network across Nigeria, winning the Best Manager Award in 2003." },
  { year: "1995 – 2001", title: "Youth Corps Member → Technical Adviser, Northern Region", org: "CFAO / Peugeot Automobile Nigeria", desc: "Rose through the ranks to become Technical Adviser for Northern Region. Won the prestigious Peugeot Automobile Nigeria Technical Adviser of the Year award (2000) and Manager of the Year twice (1999 and 2000)." },
  { year: "1984 – 1989", title: "Executive Assistant, PR Officer, Registrar & Political Assistant", org: "Various organisations", desc: "Early career roles across public relations, administration, and political support — laying the foundation for a career built on leadership and institutional building." },
];
const credData = [
  { tag:"Academic Degree", title:"Bachelor of Engineering (Hons)", detail:"B.Eng (Hons) — Federal University of Technology Owerri, 1995" },
  { tag:"Academic Degree", title:"Executive Master of Business Administration", detail:"MBA — Lagos Business School, Pan Atlantic University, 2006" },
  { tag:"Academic Degree", title:"Doctor of Philosophy (Hons)", detail:"PhD (Hons) — Walden University, USA / Commonwealth University, Belize, 2012" },
  { tag:"Professional Certification", title:"Certified Facility Manager (CFM)", detail:"IFMA International — the global gold standard in FM credentials" },
  { tag:"Professional Fellowship", title:"Fellow, Chartered Management Institute", detail:"FCMI — UK Chartered Body for management professionals" },
  { tag:"Professional Certification", title:"Facility Management Professional (FMP)", detail:"FMP — IFMA International" },
  { tag:"Professional Fellowship", title:"Fellow, Nigerian Society of Engineers", detail:"FNSE — 21st NSE Fellowship Conferment, 2022" },
  { tag:"Professional Fellowship", title:"Fellow, Institute of Brand Management of Nigeria", detail:"FIBMN" },
  { tag:"Academic Role", title:"Adjunct Lecturer", detail:"Masters in Facilities Management — University of Lagos, appointed 2014" },
];
const personalAwards = [
  { year:"2022", title:"Fellow — Nigerian Society of Engineers (FNSE)", body:"21st NSE Fellowship Conferment — one of the highest professional honours in Nigerian engineering." },
  { year:"2018", title:"AI Acquisition International UK — CEO of the Year", body:"Excellence Award — Facility Management category, recognising outstanding leadership in FM." },
  { year:"2018", title:"African FM Personality of the Year", body:"African Price For Leadership Awards — recognising continental leadership in facilities management." },
  { year:"2018", title:"Real Estate Excellence Award — FM CEO of the Year", body:"Real Estate Excellence Award Nigeria — FM sector leadership." },
  { year:"2018", title:"NSE Ikeja Branch Award of Excellence", body:"Nigerian Society of Engineers, Ikeja Branch." },
  { year:"2018", title:"NSE Akure Branch Award of Excellence", body:"Nigerian Society of Engineers, Akure Branch." },
  { year:"2018", title:"Gbagada Comprehensive Secondary School Award of Excellence", body:"In recognition of service and community leadership." },
  { year:"2018", title:"President — Pan African Direct Marketing Standards Board", body:"Elected President 2018–2020." },
  { year:"2018", title:"Leadership Award — Unified Nigerian Youth Forum", body:"In recognition of youth leadership and mentorship across Nigeria." },
  { year:"2018", title:"Award of Service to the Nation", body:"Presented by the Congress of Nigerian Youth." },
  { year:"2017", title:"Award of Excellence — University of Lagos", body:"In recognition of leadership position in the FM Industry in Nigeria." },
  { year:"2016", title:"Top 50 Nigerian Professionals", body:"Listed among the Top 50 Nigerian Professionals of 2016." },
  { year:"2016", title:"Top 50 CEOs in Nigeria", body:"Recognised among Nigeria's most influential chief executives." },
  { year:"2016", title:"NANS Leadership Award", body:"National Association of Nigerian Students." },
  { year:"2016", title:"NAPS Leadership Award", body:"National Association of Nigerian Professionals." },
  { year:"2015", title:"Nigerian Selfless Service Gold Award", body:"Awarded by Majesty Global Publications for selfless service to Nigeria." },
  { year:"2013", title:"Nigerian Top Leaders International Magazine — Global Lifetime Achievement Gold", body:"Global Lifetime Achievement International Gold Award." },
  { year:"2013", title:"Time News — Excellence Gold Award for Economic Development of Nigeria", body:"Recognising contribution to Nigeria's economic growth." },
  { year:"2012", title:"Corporate & Media Africa — Meritorious Diamond Award for National Development", body:"Meritorious Diamond Award in recognition of contribution to national development." },
  { year:"2012", title:"Honorary Doctorate Award", body:"Commonwealth University, Belize — Doctor of Management." },
  { year:"2001", title:"Peugeot Automobile Nigeria — Technical Adviser of the Year", body:"Won the prestigious PAN Technical Adviser of the Year award and Manager of the Year (1999 & 2000) at CFAO." },
];
const companyAwards = [
  { year:"2018", title:"AI Acquisition International UK — Best FM Company of the Year", body:"Property & Facility Management category — international recognition for GPFI." },
  { year:"2018", title:"Real Estate Excellence Award — Best FM Company of the Year", body:"Real Estate Excellence Award Nigeria." },
  { year:"2018", title:"2018 World Global Quality Award — FM Category Africa", body:"Global recognition for quality in facilities management across Africa." },
  { year:"2018", title:"ISO 9001:2015 Quality Standards Certification", body:"International quality management standard certification for GPFI." },
  { year:"2017", title:"Most Innovative FM Company", body:"Recognised for innovation in facilities management practice and delivery." },
  { year:"2017", title:"2017 Global Quality Award Nigeria", body:"National recognition for quality in FM services." },
  { year:"2017", title:"2017 International Quality Award", body:"International recognition for quality standards and service delivery." },
  { year:"2015", title:"European CEO — Best FM Company of the Year", body:"Best FM Company of the Year — continental recognition from European CEO publication." },
  { year:"2012", title:"Best FM Company in Africa", body:"Led GPFI to receive the Best FM Company in Africa award." },
];
const memberships = [
  "Fellow — Nigerian Society of Engineers (NSE)",
  "Fellow — Chartered Management Institute (CMI), UK",
  "Fellow — Institute of Brand Management of Nigeria",
  "Fellow — Institute of Direct Marketing Nigeria",
  "Member — Institute of Directors (IoD), Nigeria (Sep 2020 – Present)",
  "Member — Council for the Regulation of Engineering in Nigeria (COREN)",
  "Member — Nigerian Institute of Mechanical Engineers",
  "Member — Nigeria Institute of Management",
  "Member — Institute of Management Consulting",
  "Member — Institute of Training & Development",
  "Member — Institute of Administration, Nigeria",
  "Member — International Committee for ISO Standards — Global FM Industry",
  "Member — Nigeria National Committee for ISO Standards — Hotel Industry",
  "Member — Rotary International since 1986 — Paul Harris Fellow",
  "Member — Federal University of Technology, Owerri Alumni Association",
  "Member & Past Class President — LBS Alumni Association, EMBA 10-2006",
  "President — African Direct Marketing Standards Board (2018–2020)",
  "Founder — African Facilities Management (LinkedIn), since 2014",
  "Founder — African Facilities Management Institute",
  "Patron — Southern Nigeria Youth Congress (2018)",
  "National Steering Committee / Chairman, Publicity Committee — The FM Initiative (National FM Body, Nigeria)",
  "Founder & Member — Doctor Muhammad Balogun (DMB) Foundation",
  "National FM Initiative (The Nigerian FM Initiative) — Chairman, Media & Publicity Committee · Mar 2016 – Present",
  "Member — Standard Organisation of Nigeria — National Mirror Committee on TC 267 (ISO Standards) · Jul 2020 – Present",
  "Member, Governing Council — International Association of Research Scholars & Administrators (IARSA) · Oct 2019 – Present",
];

document.addEventListener("DOMContentLoaded", () => {
  document.getElementById("timeline-items").innerHTML = timelineData.map(t => `
    <div class="tl-item">
      <div class="tl-year">${t.year}</div>
      <div class="tl-dot"></div>
      <div class="tl-content">
        <div class="tl-title">${t.title}</div>
        <span class="tl-org">${t.org}</span>
        <p class="tl-desc">${t.desc}</p>
      </div>
    </div>`).join("");
  document.getElementById("cred-grid").innerHTML = credData.map(c => `
    <div class="cred-card">
      <span class="cred-card-tag">${c.tag}</span>
      <div class="cred-card-title">${c.title}</div>
      <div class="cred-card-detail">${c.detail}</div>
    </div>`).join("");
  document.getElementById("personal-awards-grid").innerHTML = personalAwards.map(a => `
    <div class="award-row"><div class="award-year">${a.year}</div><div><div class="award-title">${a.title}</div><div class="award-body">${a.body}</div></div></div>`).join("");
  document.getElementById("company-awards-grid").innerHTML = companyAwards.map(a => `
    <div class="award-row"><div class="award-year">${a.year}</div><div><div class="award-title">${a.title}</div><div class="award-body">${a.body}</div></div></div>`).join("");
  document.getElementById("mem-list").innerHTML = memberships.map(m => `<span class="mem-tag">${m}</span>`).join("");

  // Upgrade awards grids to carousels
  setTimeout(() => { upgradeToCarousel("personal-awards-grid", "personal"); upgradeToCarousel("company-awards-grid", "company"); }, 100);
});

function upgradeToCarousel(gridId, prefix) {
  const grid = document.getElementById(gridId);
  if (!grid) return;
  const cards = Array.from(grid.children);
  if (cards.length <= 4) return;
  const wrap = document.createElement("div"); wrap.className = "award-carousel"; wrap.id = `carousel-${prefix}`;
  const track = document.createElement("div"); track.className = "award-carousel-track"; track.id = `track-${prefix}`;
  cards.forEach(card => { const slide = document.createElement("div"); slide.className = "award-slide"; slide.appendChild(card.cloneNode(true)); track.appendChild(slide); });
  const dots = document.createElement("div"); dots.className = "carousel-dots"; dots.id = `dots-${prefix}`;
  const perPage = window.innerWidth < 768 ? 1 : 2;
  const totalPages = Math.ceil(cards.length / perPage);
  for (let i = 0; i < totalPages; i++) { const dot = document.createElement("button"); dot.className = "carousel-dot" + (i === 0 ? " active" : ""); dot.addEventListener("click", () => goToPage(prefix, i, perPage)); dots.appendChild(dot); }
  const prev = document.createElement("button"); prev.className = "carousel-arrow carousel-prev"; prev.innerHTML = "←"; prev.addEventListener("click", () => shiftPage(prefix, -1, perPage, totalPages));
  const next = document.createElement("button"); next.className = "carousel-arrow carousel-next"; next.innerHTML = "→"; next.addEventListener("click", () => shiftPage(prefix, 1, perPage, totalPages));
  wrap.appendChild(prev); wrap.appendChild(track); wrap.appendChild(next);
  grid.parentNode.insertBefore(wrap, grid); grid.parentNode.insertBefore(dots, grid.nextSibling); grid.style.display = "none";
  wrap._currentPage = 0; updateCarouselView(prefix, 0, perPage);
}
function goToPage(prefix, page, perPage) { const wrap = document.getElementById(`carousel-${prefix}`); wrap._currentPage = page; updateCarouselView(prefix, page, perPage); }
function shiftPage(prefix, dir, perPage, total) { const wrap = document.getElementById(`carousel-${prefix}`); const next = (wrap._currentPage + dir + total) % total; wrap._currentPage = next; updateCarouselView(prefix, next, perPage); }
function updateCarouselView(prefix, page, perPage) {
  const track = document.getElementById(`track-${prefix}`); const dots = document.getElementById(`dots-${prefix}`);
  if (!track) return;
  track.style.transform = `translateX(-${page * 100}%)`;
  if (dots) { Array.from(dots.children).forEach((d, i) => d.classList.toggle("active", i === page)); }
}
</script>

<?php get_footer(); ?>
