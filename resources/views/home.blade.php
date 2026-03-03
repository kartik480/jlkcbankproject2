<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JAYALAKSHMI MUTUALLY AIDED COOPERATIVE</title>

    <!-- CSS LINK -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>

<!-- ========== NAVBAR ========== -->
<header class="navbar">
    <div class="nav-logo">
        <img src="{{ asset('images/logo.png') }}" alt="Jayalakshmi Cooperative" class="nav-logo-img" onerror="this.style.display='none'; this.nextElementSibling.classList.add('show');">
        <span class="nav-logo-placeholder"></span>
    </div>

    <ul class="menu">
        <li class="active">Home</li>
        <li>About</li>
        <li>Services</li>
        <li>Our Scheme</li>
        <li>Careers</li>
        <li>FAQ</li>
        <li>Gallery</li>
    </ul>

    <button class="contact-btn">Contact us</button>
</header>

<!-- ========== HERO SECTION ========== -->
<section class="hero">
    <div class="hero-content">

        <div class="reg"><span class="reg-dot"></span> REG NO: AMC/VSP/DCO/2013/3010</div>

        <h1>JAYALAKSHMI MUTUALLY AIDED COOPERATIVE THRIFT AND CREDIT SOCIETY LTD</h1>

        <p>For the cooperative sector in India to grow and provide a substantial financial alternative to the general public, access to enterprise-class technology is essential.</p>

        <button class="hero-btn">Contact us</button>

    </div>
</section>
<!-- ========== ABOUT SECTION ========== -->
<section class="about-section">

    <div class="about-wrapper">

        <!-- LEFT -->
        <div class="about-left">
            <span class="about-tag">
                <span class="dot"></span> About Us
            </span>

            <div class="about-image">
                <img src="{{ asset('images/about.png') }}" alt="About us">
            </div>
        </div>

        <!-- RIGHT -->
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
                This commitment has made us a leader in reliability and sustainability.
            </p>

            <div class="about-btn-wrap">
                <a href="#" class="about-btn">Read more</a>
            </div>
        </div>

    </div>

</section>

<!-- ========== SERVICES SECTION ========== -->
<section class="services-section">
    <div class="services-container">

        <div class="service-card">
            <div class="service-icon">
                <img src="{{ asset('images/income.png') }}" alt="Fixed Deposit">
            </div>
            <h4>Fixed Deposit</h4>
        </div>

        <div class="service-card">
            <div class="service-icon">
                <img src="{{ asset('images/icons/fixed-deposit.svg') }}" alt="Recurring Deposit">
            </div>
            <h4>Recurring Deposit</h4>
        </div>

        <div class="service-card">
            <div class="service-icon">
                <img src="{{ asset('images/income.png') }}" alt="Monthly Income">
            </div>
            <h4>Monthly Income</h4>
        </div>

        <div class="service-card">
            <div class="service-icon">
                <img src="{{ asset('images/icons/fixed-deposit.svg') }}" alt="Daily Deposit">
            </div>
            <h4>Daily Deposit</h4>
        </div>

        <div class="service-card">
            <div class="service-icon">
                <img src="{{ asset('images/icons/fixed-deposit.svg') }}" alt="Personal Provident">
            </div>
            <h4>Personal Provident</h4>
        </div>

        <div class="service-card">
            <div class="service-icon">
                <img src="{{ asset('images/icons/fixed-deposit.svg') }}" alt="Saving Account">
            </div>
            <h4>Saving Account</h4>
        </div>

    </div>
</section>

<!-- ========== CTA SECTION ========== -->
<section class="cta-section">
    <div class="cta-container">
        <h2>Join Our Financial Community</h2>
        <p class="cta-subtitle">Connect with Experts, Grow Your Wealth, and Build Your Future</p>

        <div class="cta-actions">
            <a class="cta-btn primary" href="#">Join as a member</a>
            <a class="cta-btn secondary" href="#">Become an Advisor</a>
        </div>

        <div class="cta-panels">
            <div class="cta-panel">
                <h3>Member Benefits</h3>
                <ul>
                    <li>Invitation to quarterly wealth webinars.</li>
                    <li>Zero-commission trading on select assets.</li>
                    <li>Access exclusive market analysis &amp; daily trends.</li>
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
                <button type="button" class="faq-question" aria-expanded="true" aria-controls="faq-1" id="faq-q-1">
                    <span>What types of financial products do you offer?</span>
                    <span class="faq-chevron" aria-hidden="true"></span>
                </button>
                <div class="faq-answer" id="faq-1" role="region" aria-labelledby="faq-q-1">
                    <p>We provide a variety of secure and high-yield savings and investment products, including Fixed Deposits (FD), Recurring Deposits (RD), Savings Accounts, Monthly Income Schemes, Daily Deposit Plans, Provident Funds, and more designed to help you grow your wealth with ease.</p>
                </div>
            </div>
            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="true" aria-controls="faq-2" id="faq-q-2">
                    <span>Is there a minimum balance requirement?</span>
                    <span class="faq-chevron" aria-hidden="true"></span>
                </button>
                <div class="faq-answer" id="faq-2" role="region" aria-labelledby="faq-q-2">
                    <p>Minimum balance requirements vary depending on the account type. Some savings accounts offer zero-balance options as well.</p>
                </div>
            </div>
            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="true" aria-controls="faq-3" id="faq-q-3">
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
                <div class="faq-answer" id="faq-4" role="region" aria-labelledby="faq-q-4" hidden>
                    <p>RDs are ideal for people with regular income who want to save consistently without a large upfront deposit.</p>
                </div>
            </div>
            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false" aria-controls="faq-5" id="faq-q-5">
                    <span>Who benefits from Daily Deposit Plans?</span>
                    <span class="faq-chevron" aria-hidden="true"></span>
                </button>
                <div class="faq-answer" id="faq-5" role="region" aria-labelledby="faq-q-5" hidden>
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
            <a href="#" class="support-banner-btn">Contact us</a>
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
            <div class="support-person">
                <img src="{{ asset('images/men.png') }}" alt="Expert support">
            </div>
        </div>
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
                        <img src="{{ asset('images/logo.png') }}" alt="Jayalakshmi Cooperative" class="footer-logo-img" onerror="this.style.display='none'; this.nextElementSibling.classList.add('show');">
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
                    <a href="#" class="footer-btn">Become a Advisor</a>
                    <a href="#" class="footer-btn">Become a membership</a>
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
                    <a href="#">Contact Us</a>
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
        var answer = item.querySelector('.faq-answer');
        var isOpen = this.getAttribute('aria-expanded') === 'true';
        document.querySelectorAll('.faq-item').forEach(function(other) {
            var otherBtn = other.querySelector('.faq-question');
            var otherAnswer = other.querySelector('.faq-answer');
            otherBtn.setAttribute('aria-expanded', 'false');
            otherAnswer.hidden = true;
        });
        if (!isOpen) {
            this.setAttribute('aria-expanded', 'true');
            answer.hidden = false;
        }
    });
});
</script>

</body>
</html>