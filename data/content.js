/**
 * Content Data Store — mkobalogun.com
 * All publications, blog posts, speeches, and book reviews.
 * Updated with full content from WordPress export (2026-06-04).
 */

const CONTENT = {

  articles: [
    {
      id: "nse-fellowship-2022",
      type: "press",
      tag: "Press · NSE",
      title: "21st NSE Fellowship Conferment on Engr. MKO Balogun",
      excerpt: "We rejoice with Engr. MKO Balogun for the conferment as a FELLOW of the Nigerian Society of Engineers presented by the President of NSE, Engr. T.S.G. Wudil.",
      date: "November 2022", dateISO: "2022-11-01",
      slug: "nse-fellowship-conferment", featured: false, venue: "",
    },
    {
      id: "artisans-skills-2022",
      type: "press",
      tag: "Press · Skills Development",
      title: "Experts Urge Development of Artisans' Skills in Nigeria",
      excerpt: "To reverse the dominance of the Nigerian built sector by foreign artisans and craftsmen, experts have canvassed the empowerment of more local artisans and young entrepreneurs.",
      date: "April 2022", dateISO: "2022-04-21",
      slug: "artisans-skills-development", featured: false, venue: "",
    },
    {
      id: "covid-environment-2020",
      type: "press",
      tag: "Feature · FM Expert",
      title: "COVID-19 Has Positively Impacted the Environment — MKO Balogun",
      excerpt: "At the 2020 World FM Day, Dr. Balogun presents a data-backed counterintuitive argument on how the pandemic created measurable environmental gains across Nigerian cities.",
      date: "June 2020", dateISO: "2020-06-15",
      slug: "covid-environment-impact", featured: false, venue: "",
    },
    {
      id: "fm-technology-2022",
      type: "press",
      tag: "Feature · Technology",
      title: "Facility Managers Urged to Embrace Technology",
      excerpt: "As technology continues to revolutionise the real estate sector, experts have urged facility managers to invest in security equipment that will make the environment safer for people to live and work.",
      date: "April 2022", dateISO: "2022-04-21",
      slug: "fm-embrace-technology", featured: false, venue: "",
    },
    {
      id: "sustain-business-2022",
      type: "press",
      tag: "Interview · Leadership",
      title: "'We Are Focused on Doing Everything That Will Sustain the Business Beyond Today'",
      excerpt: "Muhammad Kassim Olatunde, chief executive officer of Global Property and Facilities International, in an exclusive interview on GPFI's long-term strategy.",
      date: "April 2022", dateISO: "2022-04-05",
      slug: "sustain-business-beyond-today", featured: false, venue: "",
    },
    {
      id: "ceo-award-2018",
      type: "press",
      tag: "Award · FM",
      title: "2018 Winners — Facility Management Company CEO of the Year",
      excerpt: "Dr. MKO Balogun named Facility Management Company CEO of the Year at the annual Real Estate and FM Awards ceremony.",
      date: "April 2022", dateISO: "2022-04-27",
      slug: "ceo-award-2018", featured: false, venue: "",
    },
    {
      id: "professional-life-2022",
      type: "press",
      tag: "Profile · Career",
      title: "Professional Life of MKO Balogun",
      excerpt: "A comprehensive profile of Dr. Balogun's career journey — from his engineering roots to building one of Nigeria's foremost FM companies.",
      date: "April 2022", dateISO: "2022-04-21",
      slug: "professional-life-mko-balogun", featured: false, venue: "",
    },
    {
      id: "effective-energy-management",
      type: "press",
      tag: "Article · Energy",
      title: "Effective Energy Management Becomes More Important Than Ever Before",
      excerpt: "There are a number of steps businesses can take to enhance their energy management, such as installing systems to minimise energy usage and incorporating daylight harvesting.",
      date: "July 2017", dateISO: "2017-07-24",
      slug: "effective-energy-management-becomes-more-important-than-ever-before", featured: false, venue: "",
    },
    {
      id: "fm-services-procurement",
      type: "press",
      tag: "Article · FM Best Practice",
      title: "FM Services Procurement — Best Practice",
      excerpt: "Facilities Management has become a strategic part of any business. Organisations' view of the role of FM is changing — from an operational, back-office team to a strategic function contributing to organisational objectives.",
      date: "December 2017", dateISO: "2017-12-01",
      slug: "fm-services-procurement-best-practice", featured: false, venue: "",
    },
  ],

  speeches: [
    {
      id: "fire-prevention-2022",
      type: "speech",
      tag: "Conference Paper · Engineering",
      title: "The Role of Facility Managers in High-Rise Fire Prevention",
      venue: "Tall Building Fire Safety Conference — April 7 & 8, 2022",
      date: "April 2022", dateISO: "2022-04-07",
      slug: "fm-high-rise-fire-prevention",
      downloadUrl: "/data/ROLE-OF-FM-IN-HRB-FIRE-PREVENTION-APRIL-2022.pdf",
      featured: true,
      excerpt: "A landmark presentation exploring how facility management professionals serve as the critical first line of defence in high-rise fire safety. Includes data from international FM bodies and case studies from West African high-rises.",
    },
    {
      id: "engineering-fm-national-dev",
      type: "speech",
      tag: "NSE Speech · National Development",
      title: "Engineering – Facilities Management – National Development",
      venue: "NSE Akure Branch — Nigerian Society of Engineers",
      date: "2022", dateISO: "2022-01-01",
      slug: "engineering-fm-national-development",
      downloadUrl: null, featured: false,
      excerpt: "An address to the NSE Akure Branch examining the critical link between engineering practice, facilities management excellence, and Nigeria's national development agenda.",
    },
    {
      id: "fm-in-ppp",
      type: "speech",
      tag: "Conference Speech · Infrastructure",
      title: "FM in PPP — The Nigerian Experience",
      venue: "World Engineering Conference on Sustainable Infrastructure, Abuja — November 2014",
      date: "November 2014", dateISO: "2014-11-01",
      slug: "fm-in-ppp-the-nigerian-experience",
      downloadUrl: null, featured: false,
      excerpt: "Presentation covering the global, African and Nigerian economic outlook, infrastructural deficit, FM in Public-Private Partnerships, and lessons from the Lagos MM2 terminal experience.",
    },
    {
      id: "future-workplace-fm",
      type: "speech",
      tag: "Keynote · Future of Work",
      title: "The Future Workplace — Role of FM",
      venue: "World FM Day 2013 — TV Continental, Lagos",
      date: "June 2013", dateISO: "2013-06-27",
      slug: "the-future-workplace-role-of-fm",
      downloadUrl: null, featured: false,
      excerpt: "A live TV programme keynote on World FM Day exploring how the profession must evolve to shape the workplaces of tomorrow — covering innovation, sustainability, and the changing role of the FM professional.",
    },
    {
      id: "energy-efficiency-buildings",
      type: "speech",
      tag: "Presentation · Sustainability",
      title: "Energy Efficiency in Buildings",
      venue: "IFMA Nigeria — FM Industry Presentation",
      date: "2017", dateISO: "2017-07-21",
      slug: "energy-efficiency-in-buildings",
      downloadUrl: null, featured: false,
      excerpt: "Covering energy management and sustainability, the triple bottom line, lifecycle costing (LCC), building energy management systems (BEMs/BMS/BIM), and the strategic role of facility managers in driving energy efficiency.",
    },
    {
      id: "real-estate-sustainability-2015",
      type: "speech",
      tag: "Speech · Real Estate",
      title: "Talking Points on the Real Estate Unite Conference — Sustainability Plenary Session",
      venue: "Real Estate Unite Conference — Sustainability Plenary, Lagos — September 2015",
      date: "September 2015", dateISO: "2015-09-30",
      slug: "talking-points-on-the-real-estate-unite-conference-sustainability-plenary-session",
      downloadUrl: null, featured: false,
      excerpt: "A critique of the 'Glass Box Design' syndrome in building development, arguing for integrated design that incorporates occupant wellbeing and true building efficiency beyond energy metrics alone.",
    },
    {
      id: "hidden-treasures-real-estate",
      type: "speech",
      tag: "Speech · Real Estate Investment",
      title: "Hidden Treasures in the Nigerian Real Estate Sector",
      venue: "LBS Alumni Presentation — October 2015",
      date: "October 2015", dateISO: "2015-10-29",
      slug: "hidden-treasures-in-the-nigerian-real-estate-sector",
      downloadUrl: null, featured: false,
      excerpt: "Presented to LBS Alumni, exploring real estate investment options, industry trends, and the undervalued opportunities in Nigeria's commercial, residential, and retail property sectors.",
    },
    {
      id: "covid-fm-day-keynote",
      type: "speech",
      tag: "Keynote Address · Environment",
      title: "COVID-19 and Its Positive Impact on the Built Environment",
      venue: "IFMA Nigeria — World Facility Management Day 2020",
      date: "June 2020", dateISO: "2020-06-15",
      slug: "covid-built-environment-keynote",
      downloadUrl: null, featured: false,
      excerpt: "A counterintuitive keynote presenting evidence that the pandemic created measurable, lasting environmental improvements in Nigerian cities and the built environment.",
    },
    {
      id: "ceo-award-remarks-2018",
      type: "speech",
      tag: "Award Acceptance · Industry",
      title: "Facility Management Company CEO of the Year — Acceptance Remarks",
      venue: "Real Estate & FM Awards Ceremony — Lagos, 2018",
      date: "2018", dateISO: "2018-01-01",
      slug: "ceo-award-acceptance-2018",
      downloadUrl: null, featured: false,
      excerpt: "Acceptance remarks delivered upon receiving the Facility Management Company CEO of the Year award, reflecting on leadership, service, and the future of FM in Africa.",
    },
  ],

  blogPosts: [
    {
      id: "smart-cities-nigeria",
      tag: "Blog · Smart Cities",
      title: "Why Nigeria Must Prioritise Smart City Infrastructure in the Next Decade",
      excerpt: "With Africa's urban population set to double by 2050, the window for building future-ready cities is narrow. Dr. Balogun makes the case for policy, investment, and professional standards.",
      date: "March 2024", dateISO: "2024-03-01",
      slug: "smart-cities-nigeria-next-decade", featured: true,
      content: `
        <p>Africa's cities are growing faster than their infrastructure can support. Lagos alone adds hundreds of thousands of residents every year — and the built environment that receives them is largely unprepared for the demands of a smart, connected, sustainable future.</p>
        <p>The question is no longer whether Nigeria needs smart city infrastructure. The question is whether we are building the human capital, institutional frameworks, and policy environments to design, build, and manage it properly.</p>
        <h3>What Does a Smart City Actually Mean in the Nigerian Context?</h3>
        <p>In Western discourse, "smart cities" conjures images of sensor-laden pavements, autonomous vehicles, and AI-managed traffic systems. In the Nigerian context, smart city infrastructure must first solve foundational challenges: reliable power, clean water, functional drainage, and efficient waste management.</p>
        <p>A smart city in Lagos is one where facilities managers can monitor building systems remotely, where public infrastructure maintenance is predictive rather than reactive, and where data drives planning decisions rather than politics.</p>
        <h3>The Role of Facilities Management</h3>
        <p>Facilities management is the invisible profession that makes cities liveable. Nigeria currently has a significant deficit of trained FM professionals. Universities are not producing enough graduates. Professional bodies like IFMA Nigeria are doing important work, but the pipeline needs to be dramatically accelerated.</p>
        <h3>My Recommendations</h3>
        <p>First, the federal government should establish a national smart city framework with clear standards for urban development, FM procurement, and building management systems.</p>
        <p>Second, our universities and polytechnics must introduce dedicated facilities management and building technology programmes. We cannot build smart cities without smart managers.</p>
        <p>Third, the private sector must lead by example. At GPFI, we have invested heavily in technology-driven FM solutions. Other firms must follow. The infrastructure we build in the next decade will determine the liveability of our cities for the next century.</p>
      `,
    },
    {
      id: "engineer-nigeria-lessons",
      tag: "Blog · Mentorship",
      title: "What I Wish I Had Known Starting Out as an Engineer in Nigeria",
      excerpt: "Thirty years of engineering and entrepreneurship have taught me lessons I wish someone had shared with me at the beginning. Here are the most important ones.",
      date: "January 2024", dateISO: "2024-01-15",
      slug: "engineer-nigeria-lessons", featured: false,
      content: `
        <p>When I graduated with my engineering degree and stepped into the world of professional practice, I was equipped with technical knowledge but largely unprepared for the realities of building a career and eventually a business in Nigeria.</p>
        <p>Thirty years later, I want to share what I have learned — not as a lecture, but as a letter to the young engineer I once was.</p>
        <h3>1. Your Degree Opens the Door. Character Keeps You in the Room.</h3>
        <p>Technical competence is necessary but insufficient. The engineers and entrepreneurs who build lasting careers are those who combine skill with integrity, resilience, and the genuine desire to serve others.</p>
        <h3>2. Network Deliberately, Not Opportunistically</h3>
        <p>Every relationship you build in this industry is a seed. The young colleague you mentor today may be the CEO who refers you work tomorrow. Approach networking as an opportunity to add value, not extract it.</p>
        <h3>3. Find a Mentor — and Eventually, Become One</h3>
        <p>I was fortunate to have mentors who invested in me. The DMB Foundation exists because I believe every young African professional deserves that same investment. Seek mentorship actively, and when you are in a position to give it, do so generously.</p>
        <h3>4. Nigeria Is Not a Disadvantage</h3>
        <p>I have heard young professionals say that building a great career in Nigeria is harder than elsewhere. I disagree. The challenges are different, not greater. And the opportunity for impact here — in a country of over 200 million people, with growing cities and massive infrastructure needs — is unmatched anywhere in the world.</p>
      `,
    },
    {
      id: "hacker-facebook-plane",
      tag: "Blog · Personal",
      title: "I Was on a Plane When a Hacker Posted 'Stranded and Need Money' on My Facebook",
      excerpt: "I had once planned a trip to Dubai and made my hotel booking, only to confirm from the hotel that I could not check in until 2pm local time — and my flight arrived at 6am.",
      date: "July 2017", dateISO: "2017-07-31",
      slug: "i-was-on-a-plane-when-hacker-posted-stranded-and-need-money-on-my-facebook", featured: false,
      content: `<p>I had once planned a trip to Dubai and made my hotel booking, only to confirm from the hotel that I cannot check-in until 2 pm local time and my flight arrived at 6am. This left me with 8 hours to spend in Dubai with no hotel room.</p><p>A friend had told me about a hotel near the airport with a day rate. I booked it, arrived, checked in and settled down. After freshening up, I decided to catch up on social media and was surprised to find I had several missed messages asking if I was okay and offering to send money.</p><p>It turned out that while I was in the air — completely unreachable — someone had hacked my Facebook account and posted a message claiming I was stranded and needed money urgently. Friends and colleagues across Nigeria and beyond had been sending messages, trying to help.</p><p>The lessons from that experience shaped how I now approach digital security for myself and the companies I lead. Cybersecurity is not just an IT issue — it is a leadership issue. In an increasingly connected world, your digital presence is as much a part of your identity and reputation as anything else.</p>`,
    },
    {
      id: "fm-west-africa-assessment",
      tag: "Blog · FM Industry",
      title: "The State of Facilities Management in West Africa — An Honest Assessment",
      excerpt: "The FM profession in West Africa has made significant strides, but honest self-assessment requires acknowledging where we still fall short.",
      date: "November 2023", dateISO: "2023-11-01",
      slug: "fm-west-africa-honest-assessment", featured: false,
      content: `<p>Full post content coming soon. Check back for Dr. Balogun's in-depth assessment of the facilities management landscape across West Africa.</p>`,
    },
    {
      id: "30-years-lessons",
      tag: "Blog · Leadership",
      title: "Lessons from 30 Years of Building Companies and Communities",
      excerpt: "Three decades of entrepreneurship, engineering, and community development have shaped my worldview in ways I could never have anticipated at the start.",
      date: "September 2023", dateISO: "2023-09-01",
      slug: "30-years-building-companies-communities", featured: false,
      content: `<p>Full post content coming soon.</p>`,
    },
    {
      id: "why-dmb-foundation",
      tag: "Blog · Foundation",
      title: "Why I Started the DMB Foundation — and What It Has Taught Me",
      excerpt: "The DMB Foundation was not born from a strategic plan. It was born from a conviction that we owe something to those who will come after us.",
      date: "July 2023", dateISO: "2023-07-05",
      slug: "why-dmb-foundation", featured: false,
      content: `<p>Full post content coming soon.</p>`,
    },
  ],

  bookReviews: [
    {
      id: "fm-handbook",
      tag: "Facilities Management",
      title: "The Facility Management Handbook",
      author: "Cotts, Roper & Payant",
      review: "The definitive reference for any FM professional — essential reading for understanding global standards.",
    },
    {
      id: "good-to-great",
      tag: "Leadership",
      title: "Good to Great",
      author: "Jim Collins",
      review: "Transformative insights on what separates enduring organisations from those that plateau.",
    },
    {
      id: "death-life-cities",
      tag: "Urban Development",
      title: "The Death and Life of Great American Cities",
      author: "Jane Jacobs",
      review: "A masterclass in understanding cities as living ecosystems — still profoundly relevant for African urban planners.",
    },
    {
      id: "lean-startup",
      tag: "Entrepreneurship",
      title: "The Lean Startup",
      author: "Eric Ries",
      review: "Practical frameworks for building resilient businesses in uncertain markets — applicable far beyond Silicon Valley.",
    },
  ],
};
