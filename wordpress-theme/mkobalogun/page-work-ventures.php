<?php
/**
 * Template for "Work & Ventures" page (slug: work-ventures). Ported from pages/ventures.html.
 */
if (!defined('ABSPATH')) exit;
$contact = esc_url(home_url('/contact/'));
get_header();
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <span class="hero-tag">Work &amp; Ventures</span>
  <h1>Four Pillars of<br><em>Enterprise &amp; Impact</em></h1>
  <div class="divider"></div>
  <p class="page-hero-sub">From a leading real estate and facilities management group with operations across 8 African countries, to a philanthropic foundation shaping the next generation &mdash; Dr. MKO Balogun's work spans business, consulting, and community across Africa and beyond.</p>
</section>

<!-- STICKY VENTURE NAV -->
<div class="venture-nav">
  <a class="vnav-item active" href="#gpfi"      onclick="smoothScroll(event,'gpfi')">GPFI Group</a>
  <a class="vnav-item"        href="#dmbgroup"  onclick="smoothScroll(event,'dmbgroup')">DMB Group</a>
  <a class="vnav-item"        href="#csm"       onclick="smoothScroll(event,'csm')">CSM</a>
  <a class="vnav-item"        href="#consulting" onclick="smoothScroll(event,'consulting')">DMB Consulting</a>
  <a class="vnav-item"        href="#foundation" onclick="smoothScroll(event,'foundation')">DMB Foundation</a>
  <a class="vnav-item"        href="#globalpfi"  onclick="smoothScroll(event,'globalpfi')">Global PFI</a>
</div>

<!-- GPFI GROUP -->
<div class="split-light" id="gpfi">
  <div class="split-left">
    <span class="section-tag">Venture 01</span>
    <h2 class="section-title">GPFI Group</h2>
    <div class="divider"></div>
    <p class="body-text">Global Property &amp; Facilities International Limited (GPFI) is one of Nigeria's foremost integrated real estate services firms, specialising in facilities management, property development, and urban infrastructure solutions.</p>
    <p class="body-text">Under the leadership of Dr. MKO Balogun as Group MD/CEO, GPFI has grown from a local Nigerian company to one with operations across <strong>8 African countries</strong> &mdash; making it a benchmark organisation for facilities management excellence across the continent. Dr. Balogun also serves as a board member of Premier Paints Plc and Chairman of its Strategy Committee.</p>
    <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:8px;">
      <a href="https://globalpfi.com" target="_blank" rel="noopener" class="btn-primary">Visit GPFI Group &rarr;</a>
      <a href="<?php echo $contact; ?>" class="btn-outline-dark">Consult Dr. Balogun</a>
    </div>
    <div style="margin-top:44px;">
      <span class="section-tag">Countries of Operation</span>
      <div class="countries-grid">
        <div class="country-tag hq">Nigeria (HQ)</div>
        <div class="country-tag">Ghana</div>
        <div class="country-tag">South Africa</div>
        <div class="country-tag">Kenya</div>
        <div class="country-tag">Tanzania</div>
        <div class="country-tag">Uganda</div>
        <div class="country-tag">Rwanda</div>
        <div class="country-tag">Cameroon</div>
      </div>
    </div>
  </div>
  <div class="split-right-navy">
    <span class="section-tag" style="color:var(--gold);">GPFI by the Numbers</span>
    <h2 class="section-title" style="color:var(--white);">Real Impact,<br>Real Scale</h2>
    <div class="divider"></div>
    <div class="gpfi-stats-grid">
      <div class="gpfi-stat-card"><span class="gpfi-stat-num">$2.3<span>M</span></span><span class="gpfi-stat-label">Revenue (2017)</span></div>
      <div class="gpfi-stat-card"><span class="gpfi-stat-num">0.8<span>M m&sup2;</span></span><span class="gpfi-stat-label">Sq. metres managed</span></div>
      <div class="gpfi-stat-card"><span class="gpfi-stat-num">8</span><span class="gpfi-stat-label">African countries</span></div>
      <div class="gpfi-stat-card"><span class="gpfi-stat-num">242</span><span class="gpfi-stat-label">Global workforce</span></div>
      <div class="gpfi-stat-card"><span class="gpfi-stat-num">15<span>+</span></span><span class="gpfi-stat-label">Years operating</span></div>
      <div class="gpfi-stat-card"><span class="gpfi-stat-num">6</span><span class="gpfi-stat-label">Service divisions</span></div>
    </div>
    <div class="svc-list" style="margin-top:32px;">
      <div class="svc-item"><div class="svc-dot"></div><div><div class="svc-title">Integrated Facilities Management</div><div class="svc-desc">End-to-end FM solutions for commercial, residential and industrial properties across Africa.</div></div></div>
      <div class="svc-item"><div class="svc-dot"></div><div><div class="svc-title">Real Estate Development &amp; Advisory</div><div class="svc-desc">Strategic property development, valuation, and investment advisory services.</div></div></div>
      <div class="svc-item"><div class="svc-dot"></div><div><div class="svc-title">Smart Building &amp; Urban Infrastructure</div><div class="svc-desc">Technology-driven solutions for sustainable cities and smart built environments.</div></div></div>
      <div class="svc-item"><div class="svc-dot"></div><div><div class="svc-title">Energy Management &amp; Sustainability</div><div class="svc-desc">Building energy management systems (BEMs/BMS), lifecycle costing, and green building compliance.</div></div></div>
      <div class="svc-item"><div class="svc-dot"></div><div><div class="svc-title">Project Management</div><div class="svc-desc">Full project lifecycle delivery &mdash; from feasibility through to commissioning and handover.</div></div></div>
    </div>
  </div>
</div>

<!-- DMB GROUP -->
<div class="split-light" id="dmbgroup" style="background:var(--cream);">
  <div class="split-left" style="background:var(--cream);">
    <span class="section-tag">Venture 02</span>
    <h2 class="section-title">DMB Group</h2>
    <div class="divider"></div>
    <p class="body-text">DMB Group is the parent company encompassing Dr. MKO Balogun's diverse business interests across real estate, consulting, investment, and urban development. The Group provides strategic oversight, shared services, and governance across all DMB entities operating in Nigeria and across Africa.</p>
    <p class="body-text">Through its portfolio of companies, DMB Group serves as the umbrella under which Dr. Balogun's vision for sustainable, smart African cities is systematically pursued &mdash; combining enterprise with impact.</p>
    <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:8px;"><a href="<?php echo $contact; ?>" class="btn-primary">Enquire About DMB Group &rarr;</a></div>
  </div>
  <div class="split-right-cream" style="padding:79px 44px;background:var(--white);border-left:1px solid var(--border);">
    <span class="section-tag">Group Portfolio</span>
    <h2 class="section-title" style="font-size:28px;">Companies Under<br>the DMB Umbrella</h2>
    <div class="divider"></div>
    <div class="fact-list">
      <div class="fact-item"><div class="fact-dot"></div><div class="fact-text"><strong>GPFI Group</strong> &mdash; Integrated real estate and facilities management, 8 African countries.</div></div>
      <div class="fact-item"><div class="fact-dot"></div><div class="fact-text"><strong>CSM</strong> &mdash; City Smart Management, smart building and urban infrastructure solutions.</div></div>
      <div class="fact-item"><div class="fact-dot"></div><div class="fact-text"><strong>DMB Consulting</strong> &mdash; Advisory services in FM, engineering, and sustainable development.</div></div>
      <div class="fact-item"><div class="fact-dot"></div><div class="fact-text"><strong>DMB Foundation</strong> &mdash; Philanthropic arm supporting youth, women entrepreneurs, and communities across Africa.</div></div>
      <div class="fact-item"><div class="fact-dot"></div><div class="fact-text"><strong>Global PFI</strong> &mdash; International platform for cross-border FM knowledge and advisory.</div></div>
    </div>
  </div>
</div>

<!-- CSM -->
<div class="split-light" id="csm">
  <div class="split-left">
    <span class="section-tag">Venture 03</span>
    <h2 class="section-title">CSM</h2>
    <div class="divider"></div>
    <p class="body-text">City Smart Management (CSM) is Dr. Balogun's dedicated smart city and technology venture &mdash; delivering intelligent building management systems, smart urban infrastructure, and technology-driven facility solutions to cities, estates, and commercial developments across Africa.</p>
    <p class="body-text">CSM bridges the gap between the built environment and digital technology &mdash; bringing world-class smart city capabilities to the African context, aligned with Dr. Balogun's long-standing focus on Sustainable Smart Cities and Urban Renewal.</p>
    <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:8px;"><a href="<?php echo $contact; ?>" class="btn-primary">Enquire About CSM &rarr;</a></div>
  </div>
  <div class="split-right-navy">
    <span class="section-tag" style="color:var(--gold);">What CSM Delivers</span>
    <h2 class="section-title" style="color:var(--white);">Smart Solutions<br>for African Cities</h2>
    <div class="divider"></div>
    <div class="svc-list">
      <div class="svc-item"><div class="svc-dot"></div><div><div class="svc-title">Building Management Systems (BMS/BEMs)</div><div class="svc-desc">Intelligent monitoring and control of building energy, environment, and infrastructure.</div></div></div>
      <div class="svc-item"><div class="svc-dot"></div><div><div class="svc-title">Smart City Infrastructure</div><div class="svc-desc">Technology frameworks for connected, data-driven urban environments across Africa.</div></div></div>
      <div class="svc-item"><div class="svc-dot"></div><div><div class="svc-title">Energy Management Technology</div><div class="svc-desc">Smart metering, energy analytics, and automated efficiency systems for commercial buildings.</div></div></div>
      <div class="svc-item"><div class="svc-dot"></div><div><div class="svc-title">Digital FM Platforms</div><div class="svc-desc">Technology-driven facilities management tools, CAFM systems, and predictive maintenance solutions.</div></div></div>
    </div>
  </div>
</div>

<!-- DMB CONSULTING -->
<section style="background:var(--cream);padding:79px 44px;" id="consulting">
  <span class="section-tag">Venture 04</span>
  <h2 class="section-title">DMB Consulting</h2>
  <div class="divider"></div>
  <div style="display:grid;grid-template-columns:1fr 1fr;gap:66px;align-items:start;" class="split-light" >
    <div>
      <p class="body-text">DMB Consulting is Dr. Balogun's specialist advisory practice, providing expert guidance in facilities management, engineering strategy, and sustainable urban development to corporations, institutions, and government bodies across Nigeria and Africa.</p>
      <p class="body-text">The firm draws directly on Dr. Balogun's decades of hands-on engineering and executive leadership &mdash; from managing assembly plants for General Motors and UBA Plc, to building GPFI into an 8-country operation.</p>
      <a href="<?php echo $contact; ?>" class="btn-primary" style="margin-bottom:44px;display:inline-block;">Enquire About Consulting &rarr;</a>
      <div class="approach-list">
        <div class="approach-item"><div class="approach-num">01</div><div><div class="approach-title">Assess &amp; Diagnose</div><div class="approach-desc">Deep-dive audit of your facilities, infrastructure, or organisational structure to identify gaps and opportunities.</div></div></div>
        <div class="approach-item"><div class="approach-num">02</div><div><div class="approach-title">Strategise &amp; Design</div><div class="approach-desc">Bespoke roadmap and implementation strategy aligned to your goals, budget, and timeline.</div></div></div>
        <div class="approach-item"><div class="approach-num">03</div><div><div class="approach-title">Implement &amp; Optimise</div><div class="approach-desc">Hands-on support through execution, with ongoing performance monitoring and optimisation.</div></div></div>
      </div>
    </div>
    <div>
      <span class="section-tag">Areas of Expertise</span>
      <div class="expertise-grid">
        <div class="exp-card"><div class="exp-icon"><svg viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="1"/><path d="M16 7V5a2 2 0 0 0-4 0v2"/></svg></div><div class="exp-title">Facilities Management</div><div class="exp-desc">Strategy, operations, and standards for complex built environments.</div></div>
        <div class="exp-card"><div class="exp-icon"><svg viewBox="0 0 24 24"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg></div><div class="exp-title">Smart Cities &amp; Urban Planning</div><div class="exp-desc">Technology-forward frameworks for sustainable urban environments.</div></div>
        <div class="exp-card"><div class="exp-icon"><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div><div class="exp-title">Property Development</div><div class="exp-desc">End-to-end advisory for real estate projects from concept to completion.</div></div>
        <div class="exp-card"><div class="exp-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><div class="exp-title">Energy Management</div><div class="exp-desc">BEMs, lifecycle costing (LCC), sustainability frameworks, and green building compliance.</div></div>
        <div class="exp-card"><div class="exp-icon"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/></svg></div><div class="exp-title">Leadership &amp; Mentorship</div><div class="exp-desc">Executive coaching, board advisory, and institutional capacity building.</div></div>
        <div class="exp-card"><div class="exp-icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div class="exp-title">Engineering Advisory</div><div class="exp-desc">Technical guidance for infrastructure, building systems, and safety compliance.</div></div>
      </div>
    </div>
  </div>
</section>

<!-- DMB FOUNDATION -->
<section class="foundation-section" id="foundation">
  <div class="foundation-hero">
    <div>
      <span class="section-tag" style="color:var(--gold);">Venture 05</span>
      <h2 style="font-family:var(--serif);font-size:38px;font-weight:700;color:var(--white);line-height:1.15;margin:0 0 18px;">DMB <em style="font-style:italic;color:var(--gold);">Foundation</em></h2>
      <div class="divider"></div>
      <p style="color:rgba(255,255,255,0.55);font-size:14px;font-weight:300;line-height:1.9;margin-bottom:14px;"><strong style="color:rgba(255,255,255,0.85);">Vision:</strong> Empowering and developing the people.</p>
      <p style="color:rgba(255,255,255,0.55);font-size:14px;font-weight:300;line-height:1.9;margin-bottom:14px;"><strong style="color:rgba(255,255,255,0.85);">Mission:</strong> To enable positive social impact in our society.</p>
      <p style="color:rgba(255,255,255,0.55);font-size:14px;font-weight:300;line-height:1.9;margin-bottom:28px;">Founded on July 5, 2017 &mdash; the birthday of Dr. MKO Balogun &mdash; the Foundation was created to support women entrepreneurs, the girl child, and indigent students across Africa. It provides scholarships, mentorship, family support, and community infrastructure development.</p>
      <div style="display:flex;gap:14px;flex-wrap:wrap;">
        <a href="<?php echo $contact; ?>" class="btn-primary">Support the Foundation</a>
        <a href="<?php echo $contact; ?>" class="btn-outline-gold">Apply for Mentorship</a>
      </div>
    </div>
    <div class="foundation-stats">
      <div class="fstat"><span class="fstat-num">2017</span><span class="fstat-label">Year founded</span></div>
      <div class="fstat"><span class="fstat-num">50+</span><span class="fstat-label">Scholarships target per year</span></div>
      <div class="fstat"><span class="fstat-num">20+</span><span class="fstat-label">Families supported per year</span></div>
      <div class="fstat"><span class="fstat-num">5</span><span class="fstat-label">Startups mentored per year</span></div>
      <div class="fstat"><span class="fstat-num">12+</span><span class="fstat-label">African countries reached</span></div>
      <div class="fstat"><span class="fstat-num">5</span><span class="fstat-label">Board of trustees members</span></div>
    </div>
  </div>

  <div style="margin-bottom:66px;">
    <span class="section-tag" style="color:var(--gold);">Our Aims</span>
    <h3 style="font-family:var(--serif);font-size:28px;font-weight:700;color:var(--white);margin:0 0 28px;">What We Stand For</h3>
    <div class="aims-grid">
      <div class="aim-card"><div class="aim-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><div class="aim-title">Support the Needy</div><div class="aim-desc">A source of support for indigent students, families, homes, and individuals &mdash; no matter what.</div></div>
      <div class="aim-card"><div class="aim-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg></div><div class="aim-title">Enable Enterprise</div><div class="aim-desc">Mentor and support entrepreneurs and start-ups in their critical first years of operation.</div></div>
      <div class="aim-card"><div class="aim-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg></div><div class="aim-title">Empower Youth</div><div class="aim-desc">Mentoring, guidance, and enrolment in technical and non-technical training and development programmes.</div></div>
      <div class="aim-card"><div class="aim-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="4"/><path d="M20 21a8 8 0 1 0-16 0"/></svg></div><div class="aim-title">Girl Child Education</div><div class="aim-desc">Education, development, and protection of the girl child &mdash; including support for female prison inmates.</div></div>
    </div>
  </div>

  <div style="margin-bottom:66px;">
    <span class="section-tag" style="color:var(--gold);">Our Objectives</span>
    <h3 style="font-family:var(--serif);font-size:28px;font-weight:700;color:var(--white);margin:0 0 28px;">Measurable Goals</h3>
    <div class="objectives-list">
      <div class="obj-item"><span class="obj-num">01</span><div class="obj-text">Support <strong>20 families</strong> yearly through accommodation, business set-up, and assistance.</div></div>
      <div class="obj-item"><span class="obj-num">02</span><div class="obj-text">Grant <strong>50 scholarships</strong> yearly up to university level &mdash; covering tuition, upkeep, books, hostel, and a laptop with internet.</div></div>
      <div class="obj-item"><span class="obj-num">03</span><div class="obj-text">Mentor <strong>5 start-ups</strong> to success yearly across Africa.</div></div>
      <div class="obj-item"><span class="obj-num">04</span><div class="obj-text">Support <strong>5 youth organisations</strong> yearly through projects and skills development.</div></div>
      <div class="obj-item"><span class="obj-num">05</span><div class="obj-text">Enrol <strong>20 people</strong> in training schemes per year &mdash; technical and non-technical.</div></div>
      <div class="obj-item"><span class="obj-num">06</span><div class="obj-text">Support <strong>3 girl-child</strong> education, empowerment, and protection initiatives annually.</div></div>
      <div class="obj-item"><span class="obj-num">07</span><div class="obj-text">Support <strong>3&ndash;5 families</strong> every year through the Family Support Initiative.</div></div>
    </div>
  </div>

  <div style="margin-bottom:66px;">
    <span class="section-tag" style="color:var(--gold);">Full Scholarship Package</span>
    <h3 style="font-family:var(--serif);font-size:28px;font-weight:700;color:var(--white);margin:0 0 28px;">What Scholars Receive</h3>
    <div class="scholar-grid">
      <div class="scholar-item"><div class="scholar-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg></div><div class="scholar-label">Full Tuition</div></div>
      <div class="scholar-item"><div class="scholar-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg></div><div class="scholar-label">Hostel &amp; Housing</div></div>
      <div class="scholar-item"><div class="scholar-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg></div><div class="scholar-label">Laptop with Internet</div></div>
      <div class="scholar-item"><div class="scholar-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg></div><div class="scholar-label">Books &amp; Handouts</div></div>
      <div class="scholar-item"><div class="scholar-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></div><div class="scholar-label">Upkeep Allowance</div></div>
      <div class="scholar-item"><div class="scholar-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/></svg></div><div class="scholar-label">Personal Mentorship</div></div>
    </div>
  </div>

  <div style="margin-bottom:44px;">
    <span class="section-tag" style="color:var(--gold);">Foundation Programmes</span>
    <h3 style="font-family:var(--serif);font-size:28px;font-weight:700;color:var(--white);margin:0 0 28px;">Who We Support</h3>
    <div class="prog-arrows">
      <button class="prog-arrow" id="prog-prev">&larr;</button>
      <button class="prog-arrow" id="prog-next">&rarr;</button>
    </div>
    <div class="programs-carousel-wrap">
      <div class="programs-track" id="prog-track">
        <div class="prog-slide"><div class="prog-card"><div class="prog-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/></svg></div><div class="prog-name">Africa Mentees Initiative</div><p class="prog-desc">Connecting young Africans with experienced business leaders, engineers, and entrepreneurs. Mentees receive direct guidance, career development support, and access to Dr. Balogun's professional network across the continent.</p><a href="<?php echo $contact; ?>" class="prog-link">Apply now &rarr;</a></div></div>
        <div class="prog-slide"><div class="prog-card"><div class="prog-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg></div><div class="prog-name">Scholarship Programme</div><p class="prog-desc">Full scholarships from senior secondary to university, polytechnic, and open university level. Scholars receive tuition, upkeep, books, hostel, laptop with internet, and dedicated mentorship. Real current beneficiaries include students at Moshood Abiola Polytechnic and secondary schools across Lagos and Ibadan.</p><a href="<?php echo $contact; ?>" class="prog-link">Apply now &rarr;</a></div></div>
        <div class="prog-slide"><div class="prog-card"><div class="prog-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="4"/><path d="M20 21a8 8 0 1 0-16 0"/></svg></div><div class="prog-name">Women Entrepreneurs Initiative</div><p class="prog-desc">Supporting women-led businesses with funding pathways, business education, mentorship networks, and community support structures. Also includes targeted support for girl child education and female prison inmate rehabilitation.</p><a href="<?php echo $contact; ?>" class="prog-link">Get involved &rarr;</a></div></div>
        <div class="prog-slide"><div class="prog-card"><div class="prog-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg></div><div class="prog-name">Start-up Mentoring Initiative</div><p class="prog-desc">Supporting start-ups in their critical first 3 years. Current mentees include an agribusiness (fish and snail farming) in Akwa Ibom and an online student platform in Tanzania &mdash; connecting African entrepreneurs to Dr. Balogun's expertise and networks.</p><a href="<?php echo $contact; ?>" class="prog-link">Apply now &rarr;</a></div></div>
        <div class="prog-slide"><div class="prog-card"><div class="prog-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg></div><div class="prog-name">Community Infrastructure Projects</div><p class="prog-desc">Long-term partnerships with children's homes and schools. At Arrow of God Children's Home, Ajah: fully equipped 8-computer library with inverter, cooking equipment, classroom upgrades with whiteboards, and annual university scholarships. Also supporting Gbagada Junior Science School.</p><a href="<?php echo $contact; ?>" class="prog-link">View impact &rarr;</a></div></div>
        <div class="prog-slide"><div class="prog-card"><div class="prog-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><div class="prog-name">Family Support Initiative</div><p class="prog-desc">Direct support for vulnerable families &mdash; covering accommodation and house rent, business set-up and employment for breadwinners, and other forms of assistance. Active cases currently include widowed mothers and large families with multiple children in school.</p><a href="<?php echo $contact; ?>" class="prog-link">Learn more &rarr;</a></div></div>
      </div>
    </div>
    <div class="prog-nav" id="prog-dots">
      <button class="prog-dot active"></button><button class="prog-dot"></button><button class="prog-dot"></button>
      <button class="prog-dot"></button><button class="prog-dot"></button><button class="prog-dot"></button>
    </div>
  </div>

  <div>
    <span class="section-tag" style="color:var(--gold);">Governance</span>
    <h3 style="font-family:var(--serif);font-size:28px;font-weight:700;color:var(--white);margin:0 0 28px;">Board of Trustees</h3>
    <div class="trustees-grid" id="trustees-grid"></div>
  </div>
</section>

<!-- GLOBAL PFI -->
<div class="split-light" id="globalpfi">
  <div class="split-left">
    <span class="section-tag">Venture 06</span>
    <h2 class="section-title">Global PFI</h2>
    <div class="divider"></div>
    <p class="body-text">Global PFI is an international platform extending Dr. Balogun's facilities management expertise beyond Nigeria &mdash; connecting African professionals and institutions with global standards, networks, and best practices in property and facilities management.</p>
    <p class="body-text">The platform serves as a gateway for cross-border collaboration, knowledge exchange, and international project advisory in the built environment sector.</p>
    <a href="https://globalpfi.com" target="_blank" rel="noopener" class="btn-primary">Visit globalpfi.com &rarr;</a>
    <div class="ext-badge"><svg viewBox="0 0 24 24"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>External site &mdash; opens globalpfi.com in a new tab</div>
  </div>
  <div class="split-right-cream">
    <span class="section-tag">What Global PFI Offers</span>
    <h2 class="section-title" style="font-size:28px;">International Reach,<br>African Expertise</h2>
    <div class="divider"></div>
    <div class="fact-list">
      <div class="fact-item"><div class="fact-dot"></div><div class="fact-text">International FM advisory and consultancy services for cross-border projects across Africa and the diaspora.</div></div>
      <div class="fact-item"><div class="fact-dot"></div><div class="fact-text">Knowledge sharing platform connecting African FM professionals with global industry standards &mdash; including IFMA, BIFM, and MEFMA networks.</div></div>
      <div class="fact-item"><div class="fact-dot"></div><div class="fact-text">Partnerships with international bodies for capacity building and professional development in Africa, including the ISO Standards Global FM Industry Committee.</div></div>
      <div class="fact-item"><div class="fact-dot"></div><div class="fact-text">Research, publications, and thought leadership on sustainable infrastructure and smart city development in emerging markets.</div></div>
      <div class="fact-item"><div class="fact-dot"></div><div class="fact-text">Pan-African marketing and direct investment standards through Dr. Balogun's role as President of the African Direct Marketing Standards Board (2018&ndash;2020).</div></div>
    </div>
  </div>
</div>

<!-- CTA -->
<div class="cta-strip">
  <h2>Interested in working<br>with Dr. <em>Balogun</em>?</h2>
  <div class="cta-actions">
    <a href="<?php echo $contact; ?>" class="btn-primary">Get in Touch</a>
    <a href="<?php echo esc_url(home_url('/publications-blog/')); ?>" class="btn-outline-gold">View Publications &rarr;</a>
  </div>
</div>

<script>
const trustees = [
  { name:"Mr. Olu Onakoya", role:"Chairman", tag:"Board of Trustees", initial:"OO" },
  { name:"Prof. Adeyemi Adegbemisipo Aderoba", role:"President", tag:"Board of Trustees", initial:"AA" },
  { name:"Dr. MKO Balogun", role:"Founder", tag:"DMB Foundation", initial:"MK" },
  { name:"Tolani Jemi-Alade", role:"Head of Support", tag:"Board of Trustees", initial:"TJ" },
  { name:"Abdulrasaq Balogun", role:"Secretary", tag:"Board of Trustees", initial:"AB" },
];

(function(){
  const track  = document.getElementById("prog-track");
  const slides = document.querySelectorAll(".prog-slide");
  let current  = 0;
  const total  = slides.length;
  function perView(){ return window.innerWidth < 768 ? 1 : window.innerWidth < 1100 ? 2 : 3; }
  function pages(){ return Math.ceil(total / perView()); }
  function go(page){
    const pg = pages();
    current = ((page % pg) + pg) % pg;
    track.style.transform = `translateX(-${current * 100}%)`;
    const dotsWrap = document.getElementById("prog-dots");
    Array.from(dotsWrap.children).forEach((d,i) => d.classList.toggle("active", i === current));
  }
  function rebuildDots(){
    const dotsWrap = document.getElementById("prog-dots");
    dotsWrap.innerHTML = "";
    for(let i=0;i<pages();i++){
      const d = document.createElement("button");
      d.className = "prog-dot" + (i===0?" active":"");
      d.addEventListener("click",()=>go(i));
      dotsWrap.appendChild(d);
    }
  }
  document.getElementById("prog-prev").addEventListener("click", () => go(current-1));
  document.getElementById("prog-next").addEventListener("click", () => go(current+1));
  rebuildDots();
  window.addEventListener("resize", () => { rebuildDots(); go(0); });
  let timer = setInterval(() => go(current+1), 5500);
  track.parentElement.addEventListener("mouseenter", () => clearInterval(timer));
  track.parentElement.addEventListener("mouseleave", () => { timer = setInterval(() => go(current+1), 5500); });
})();

document.addEventListener("DOMContentLoaded", () => {
  const grid = document.getElementById("trustees-grid");
  if(grid){
    grid.innerHTML = trustees.map(t => `
      <div class="trustee-card">
        <div class="trustee-avatar">${t.initial}</div>
        <div class="trustee-name">${t.name}</div>
        <span class="trustee-role">${t.role}</span>
        <div class="trustee-tag">${t.tag}</div>
      </div>`).join("");
  }
});

function smoothScroll(e, id){
  e.preventDefault();
  const el = document.getElementById(id);
  if(!el) return;
  const offset = 130;
  const top = el.getBoundingClientRect().top + window.scrollY - offset;
  window.scrollTo({ top, behavior: "smooth" });
  document.querySelectorAll(".vnav-item").forEach(l => l.classList.remove("active"));
  document.querySelector(`[onclick*="${id}"]`).classList.add("active");
}

(function(){
  const navLinks = document.querySelectorAll(".vnav-item");
  const sections = ["gpfi","dmbgroup","csm","consulting","foundation","globalpfi"].map(id => document.getElementById(id));
  window.addEventListener("scroll", () => {
    const scrollY = window.scrollY + 200;
    sections.forEach((sec, i) => {
      if(sec && scrollY >= sec.offsetTop){
        navLinks.forEach(l => l.classList.remove("active"));
        if(navLinks[i]) navLinks[i].classList.add("active");
      }
    });
  });
})();
</script>

<?php get_footer(); ?>
