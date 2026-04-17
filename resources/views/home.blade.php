<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JAYALAKSHMI MUTUALLY AIDED COOPERATIVE</title>

    <!-- CSS LINK -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <script src="{{ asset('js/site-nav.js') }}" defer></script>
</head>
<body class="home-page">

@include('partials.site-nav', ['navActive' => 'home'])

<!-- ========== HERO SECTION ========== -->
<section class="hero">
    <div class="hero-watermark" aria-hidden="true">
        <img src="{{ asset('images/cow.png') }}" alt="" decoding="async">
    </div>
    <div class="hero-content">
        <div class="hero-logo">
            <img src="{{ asset('images/jk.png') }}" alt="Jayalakshmi Cooperative" class="hero-logo-img" onerror="this.style.display='none';">
        </div>

        <h1><span class="hero-title-line1">JAYALAKSHMI MUTUALLY <span class="hero-title-keep">AIDED COOPERATIVE</span></span><span class="hero-title-line2">THRIFT AND CREDIT SOCIETY LTD</span></h1>

        <div class="reg"><span class="reg-dot"></span> REG NO: AMC/VSP/DCO/2013/3010</div>

        <p><span class="hero-sub-line1">For the cooperative sector in India to grow and provide a substantial financial alternative to the general public,</span><br><span class="hero-sub-line2">access to enterprise-class technology is essential.</span></p>

        <a href="{{ url('/contact') }}" class="hero-btn">Contact us</a>

    </div>
</section>
<!-- ========== ABOUT SECTION ========== -->
<section class="about-section">

    <div class="about-wrapper">

        <!-- LEFT: picture first in DOM so it shows on the left -->
        <div class="about-left">
            <span class="about-tag">
                <span class="dot"></span> About Us
            </span>

            <div class="about-image">
                <img src="{{ asset('images/about.png') }}" alt="About us">
            </div>
        </div>

        <!-- RIGHT: description second so it shows on the right -->
        <div class="about-right">
            <p>
                <strong>JAYALAKSHMI MUTUALLY AIDED COOPERATIVE THRIFT AND CREDIT SOCIETY LTD</strong>,
                established in 2013 and headquartered in Visakhapatnam, has consistently worked hard
                to achieve its current position. We utilize streamlined technologies that support
                the growth and sustainability of our business.
            </p>

            <p>
                Our adoption of modern technology has enabled us to introduce new features and
                products that enhance our business development. This dedication has contributed
                to JAYALAKSHMI becoming one of the most successful cooperative societies.
            </p>

            <p>
                At <strong>JAYALAKSHMI MUTUALLY AIDED COOPERATIVE THRIFT AND CREDIT SOCIETY LTD</strong>,
                we employ advanced technology and tools for core financial and mobility solutions.
                This commitment has made us a leader in reliability and sustainability among our members. Since our inception, we have continuously expanded our membership base, ensuring our systems operate around the clock to meet their needs.
            </p>

            <div class="about-btn-wrap">
                <a href="#" class="about-btn">Read more</a>
            </div>
        </div>

    </div>

</section>

<!-- ========== SERVICES SECTION ========== -->
<section class="services-section" id="financial-offerings">
    <div class="services-header">
        <div class="services-header-text">
            <h2 class="services-title">Explore Our Financial Service Offerings</h2>
            <p class="services-subtitle">Find the right solutions for investments, savings, tax planning, and more — all personalized for you.</p>
        </div>
        <a href="#" class="services-cta-btn">Explore Services</a>
    </div>

    <div class="services-scroll-wrap">
        <div class="services-scroll">
            <article class="service-card-new">
                <div class="service-card-img">
                    <img src="{{ asset('images/fd.png') }}" alt="Fixed Deposit">
                </div>
                <div class="service-card-body">
                    <h3>Fixed Deposit</h3>
                    <p>FD is a type of investment in which an individual invests a lump sum amount for a specific period of time with a bank.</p>
                    <a href="{{ route('services.fixed-deposit') }}" class="service-card-btn">Explore more</a>
                </div>
            </article>

            <article class="service-card-new">
                <div class="service-card-img">
                    <img src="{{ asset('images/rd.png') }}" alt="Recurring Deposit">
                </div>
                <div class="service-card-body">
                    <h3>Recurring Deposit</h3>
                    <p>RD is a popular investment option where an investor deposits a fixed sum of money at periodic intervals for a fixed tenure.</p>
                    <a href="{{ route('services.recurring-deposit') }}" class="service-card-btn">Explore more</a>
                </div>
            </article>

            <article class="service-card-new">
                <div class="service-card-img">
                    <img src="{{ asset('images/mi.png') }}" alt="Monthly Income">
                </div>
                <div class="service-card-body">
                    <h3>Monthly Income</h3>
                    <p>MIS is designed to offer a guaranteed monthly income as per the interest rate ranging from 3% to 5.60% pa.</p>
                    <a href="{{ route('services.monthly-income-scheme') }}" class="service-card-btn">Explore more</a>
                </div>
            </article>

            <article class="service-card-new">
                <div class="service-card-img">
                    <img src="{{ asset('images/dd.jpeg') }}" alt="Daily Deposit">
                </div>
                <div class="service-card-body">
                    <h3>Daily Deposit</h3>
                    <p>DDS is a scheme to help daily savers build a habit of saving with flexible deposit options and competitive returns.</p>
                    <a href="{{ route('services.daily-deposit-scheme') }}" class="service-card-btn">Explore more</a>
                </div>
            </article>

            <article class="service-card-new">
                <div class="service-card-img">
                    <img src="{{ asset('images/pf.jpeg') }}" alt="Personal Provident">
                </div>
                <div class="service-card-body">
                    <h3>Personal Provident</h3>
                    <p>Build long-term savings with our provident fund options, offering tax benefits and steady growth for your future.</p>
                    <a href="{{ url('/services#main-products') }}" class="service-card-btn">Explore more</a>
                </div>
            </article>

            <article class="service-card-new">
                <div class="service-card-img">
                    <img src="{{ asset('images/sa.jpeg') }}" alt="Saving Account">
                </div>
                <div class="service-card-body">
                    <h3>Saving Account</h3>
                    <p>Open a savings account with us for secure, accessible funds and interest on your balance with minimal paperwork.</p>
                    <a href="{{ route('services.savings-account') }}" class="service-card-btn">Explore more</a>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- ========== CTA SECTION ========== -->
<section class="cta-section">
    <div class="cta-container">
        <h2>Join Our Financial Community</h2>
        <p class="cta-subtitle">Connect with Experts, Grow Your Wealth, and Build Your Future</p>

        <div class="cta-actions">
            <a class="cta-btn primary" href="{{ route('membership.form') }}">Join as a member</a>
            <a class="cta-btn secondary" href="{{ route('advisor.form') }}">Become an Advisor</a>
        </div>

        <div class="cta-panels">
            <div class="cta-panel">
                <h3>Member Benefits</h3>
                <ul>
                    <li>Invitation to quarterly wealth webinars.</li>
                    <li>Priority support from certified financial planners.</li>
                    <li>Advanced portfolio tracking &amp; optimization tools.</li>
                </ul>
            </div>
            <div class="cta-panel">
                <h3>Advisor Perks</h3>
                <ul>
                    <li>Premium CRM &amp; analytics dashboard suite.</li>
                    <li>Networking with top-tier industry experts.</li>
                    <li>Secure, compliant communication channels.</li>
                    <li>Co-branded marketing materials &amp; support.</li>
                    <li>Direct access to a pool of high-intent clients.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ========== VIDEO / UNLOCK SECTION ========== -->
<section class="unlock-section">
    <div class="unlock-wrap">
        <div class="unlock-content">
            <h2 class="unlock-title">Unlock Financial Growth and Stability with JAYALAKSHMI MUTUALLY AIDED COOPERATIVE THRIFT AND CREDIT SOCIETY LTD</h2>
            <p class="unlock-desc">Delivering reliable and sustainable financial support through diverse products like FD, RD, MIS, and personal and business loans.</p>
            <a href="#" class="unlock-btn">Know more</a>
        </div>
        <div class="unlock-media">
            <video class="unlock-video" src="{{ asset('videos/video1.mp4') }}" autoplay loop muted playsinline></video>
        </div>
    </div>
</section>

<!-- ========== FREQUENTLY ASKED QUESTIONS ========== -->
<section class="faq-section">
    <h2 class="faq-heading">Frequently Asked Questions</h2>
    <div class="faq-layout">
        <div class="faq-accordion">
            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-1" id="faq-q-1">
                    <span>What types of financial products do you offer?</span>
                    <span class="faq-chevron" aria-hidden="true"></span>
                </button>
                <div class="faq-answer" id="faq-1" role="region" aria-labelledby="faq-q-1">
                    <p>We provide a variety of secure and high-yield savings and investment products, including Fixed Deposits (FD), Recurring Deposits (RD), Savings Accounts, Monthly Income Schemes, Daily Deposit Plans, Provident Funds, and more designed to help you grow your wealth with ease.</p>
                </div>
            </div>
            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-2" id="faq-q-2">
                    <span>Is there a minimum balance requirement?</span>
                    <span class="faq-chevron" aria-hidden="true"></span>
                </button>
                <div class="faq-answer" id="faq-2" role="region" aria-labelledby="faq-q-2">
                    <p>Minimum balance requirements vary depending on the account type. Some savings accounts offer zero-balance options as well.</p>
                </div>
            </div>
            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-3" id="faq-q-3">
                    <span>Can I withdraw my FD before maturity?</span>
                    <span class="faq-chevron" aria-hidden="true"></span>
                </button>
                <div class="faq-answer" id="faq-3" role="region" aria-labelledby="faq-q-3">
                    <p>Yes, premature withdrawal is usually allowed but may attract a penalty and lower interest depending on the bank's policy.</p>
                </div>
            </div>
            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-4" id="faq-q-4">
                    <span>Who should choose an RD?</span>
                    <span class="faq-chevron" aria-hidden="true"></span>
                </button>
                <div class="faq-answer" id="faq-4" role="region" aria-labelledby="faq-q-4">
                    <p>RDs are ideal for people with regular income who want to save consistently without a large upfront deposit.</p>
                </div>
            </div>
            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-5" id="faq-q-5">
                    <span>Who benefits from Daily Deposit Plans?</span>
                    <span class="faq-chevron" aria-hidden="true"></span>
                </button>
                <div class="faq-answer" id="faq-5" role="region" aria-labelledby="faq-q-5">
                    <p>Customers with daily or irregular income can benefit, as small daily deposits accumulate into a significant sum over time.</p>
                </div>
            </div>
        </div>

        <div class="faq-cta-card">
            <div class="faq-cta-icon">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
            </div>
            <h3 class="faq-cta-title">Do you have more questions?</h3>
            <p class="faq-cta-desc">End-to-end payments and financial management in a single solution. Meet the right platform to help realize.</p>
            <a href="mailto:jayalakshmicooperativebankltd@gmail.com" class="faq-cta-btn">Shoot a Direct Mail</a>
        </div>
    </div>
</section>

<!-- ========== EXPERT ASSISTANCE / SUPPORT BANNER ========== -->
<section class="support-banner">
    <div class="support-banner-inner">
        <div class="support-banner-left">
            <h2 class="support-banner-title">Expert assistance whenever you need it</h2>
            <p class="support-banner-desc">Quick and easy support for your loan disbursal and repayment.</p>
            <a href="{{ url('/contact') }}" class="support-banner-btn">Contact us</a>
        </div>
        <div class="support-banner-right">
            <div class="support-features">
                <div class="support-feature">
                    <div class="support-feature-icon">
                        <img src="{{ asset('images/play.png') }}" alt="">
                    </div>
                    <div class="support-feature-text">
                        <strong>Immediate support</strong>
                        <span>with video tutorials</span>
                    </div>
                </div>
                <div class="support-feature">
                    <div class="support-feature-icon">
                        <img src="{{ asset('images/msg.png') }}" alt="">
                    </div>
                    <div class="support-feature-text">
                        <strong>24/7</strong>
                        <span>chat assistance</span>
                    </div>
                </div>
                <div class="support-feature">
                    <div class="support-feature-icon">
                        <img src="{{ asset('images/download.png') }}" alt="">
                    </div>
                    <div class="support-feature-text">
                        <strong>Connect</strong>
                        <span>with our experts on phone</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="support-person">
        <img src="{{ asset('images/men.png') }}" alt="Expert support">
    </div>
</section>

<!-- ========== FOOTER ========== -->
<footer class="site-footer">
    <div class="footer-inner">
        <div class="footer-top">
            <!-- Left: Logo + Company + About -->
            <div class="footer-col footer-about">
                <div class="footer-brand">
                    <div class="footer-logo">
                        <img src="{{ asset('images/jk.png') }}" alt="Jayalakshmi Cooperative" class="footer-logo-img" onerror="this.style.display='none'; this.nextElementSibling.classList.add('show');">
                        <span class="footer-logo-placeholder"></span>
                    </div>
                    <h3 class="footer-company-name">
                        JAYALAKSHMI MUTUALLY AIDED<br>
                        COOPERATIVE THRIFT AND<br>
                        CREDIT SOCIETY LTD
                    </h3>
                </div>
                <p class="footer-about-text">In 2013, we received the status of a State Cooperative Society from the Department of Cooperative, Government of Andhra Pradesh. JAYALAKSHMI operates on a mutual status, meaning we are owned by and run for the benefit of our members.</p>
            </div>

            <!-- Middle: Contact us -->
            <div class="footer-col footer-contact">
                <h4 class="footer-heading">Contact us</h4>
                <span class="footer-heading-line"></span>
                <div class="footer-contact-list">
                    <p class="footer-contact-item"><span class="footer-icon">📞</span> +91 9640942443</p>
                    <p class="footer-contact-item"><span class="footer-icon">📞</span> +91 8142851404</p>
                    <p class="footer-contact-item"><span class="footer-icon">✉</span> jayalakshmicooperativebankltd@gmail.com</p>
                    <p class="footer-contact-item"><span class="footer-icon">📍</span> Flat no.101, Madhapur, Ayyappa Society Building (Sahiti Ramkuteer), Hyderabad, Telangana 500081</p>
                </div>
            </div>

            <!-- Right: Quick Action -->
            <div class="footer-col footer-actions">
                <h4 class="footer-heading">Quick Action</h4>
                <span class="footer-heading-line"></span>
                <div class="footer-buttons">
                    <a href="{{ route('advisor.form') }}" class="footer-btn">Become a Advisor</a>
                    <a href="{{ route('membership.form') }}" class="footer-btn">Become a membership</a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-bottom-left">
                <div class="footer-social">
                    <a href="#" class="footer-social-link" aria-label="Facebook">f</a>
                    <a href="#" class="footer-social-link" aria-label="X">X</a>
                    <a href="#" class="footer-social-link yt" aria-label="YouTube">▶</a>
                    <a href="#" class="footer-social-link in" aria-label="LinkedIn">in</a>
                </div>
                <nav class="footer-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms and Conditions</a>
                    <a href="{{ url('/contact') }}">Contact Us</a>
                    <a href="#">Application Status</a>
                </nav>
            </div>
            <div class="footer-bottom-right">
                <a href="#" class="footer-app-btn play">GET IT ON <span>Google Play</span></a>
                <a href="#" class="footer-app-btn appstore">Available on the <span>App Store</span></a>
            </div>
        </div>
    </div>
</footer>

<script>
document.querySelectorAll('.faq-question').forEach(function(btn) {
    btn.addEventListener('click', function() {
        var item = this.closest('.faq-item');
        var isOpen = item.classList.contains('is-open');
        document.querySelectorAll('.faq-item').forEach(function(other) {
            other.classList.remove('is-open');
            other.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
        });
        if (!isOpen) {
            item.classList.add('is-open');
            this.setAttribute('aria-expanded', 'true');
        }
    });
});

// Navbar scroll behavior - only on home page
document.addEventListener('DOMContentLoaded', function() {
    // Only apply this behavior on home page
    if (!document.body.classList.contains('home-page')) return;
    
    const navbar = document.querySelector('.navbar');
    const hero = document.querySelector('.hero');
    const aboutSection = document.querySelector('.about-section');
    
    if (!navbar || !hero || !aboutSection) return;
    
    // Explicitly hide navbar on page load
    navbar.classList.remove('navbar-visible');
    navbar.classList.remove('navbar-sticky');
    
    // Optimize scroll handler with requestAnimationFrame
    let ticking = false;
    let lastScrollY = 0;
    
    function handleScroll() {
        if (!ticking) {
            window.requestAnimationFrame(function() {
                const windowHeight = window.innerHeight;
                const currentScroll = window.scrollY;
                
                // Only recalculate if scroll position changed significantly (performance optimization)
                if (Math.abs(currentScroll - lastScrollY) > 10) {
                    const aboutRect = aboutSection.getBoundingClientRect();
                    const aboutTopViewport = aboutRect.top;
                    const heroRect = hero.getBoundingClientRect();
                    const heroBottom = window.scrollY + heroRect.bottom;
                    
                    // Hide navbar completely during hero section (until we've scrolled past hero)
                    // Only show navbar when about section is actually visible in viewport
                    if (currentScroll < heroBottom || aboutTopViewport > windowHeight - 50) {
                        // Still in hero section or about section not yet visible - hide navbar completely
                        if (navbar.classList.contains('navbar-visible')) {
                            navbar.classList.remove('navbar-visible');
                            navbar.classList.remove('navbar-sticky');
                            navbar.style.cssText = 'position: fixed; bottom: -100px !important; top: auto !important; left: 0; right: 0; opacity: 0; pointer-events: none; visibility: hidden; transition: bottom 0.4s ease, opacity 0.4s ease;';
                        }
                    }
                    // When about section is visible in viewport, navbar appears at top
                    else {
                        // About section is visible - show navbar at top
                        if (!navbar.classList.contains('navbar-sticky')) {
                            navbar.classList.add('navbar-sticky');
                            navbar.classList.add('navbar-visible');
                            navbar.style.cssText = 'position: fixed !important; top: 0px !important; bottom: auto !important; left: 0; right: 0; opacity: 1; pointer-events: auto; visibility: visible; transition: top 0.4s ease, opacity 0.4s ease;';
                        }
                    }
                    
                    lastScrollY = currentScroll;
                }
                
                ticking = false;
            });
            
            ticking = true;
        }
    }
    
    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll(); // Initial check - navbar should be hidden at start
});
</script>

</body>
</html>