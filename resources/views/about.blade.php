<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us - JAYALAKSHMI MUTUALLY AIDED COOPERATIVE</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>

<!-- ========== NAVBAR ========== -->
<header class="navbar">
    <a href="{{ url('/') }}" class="nav-logo">
        <img src="{{ asset('images/jk.png') }}" alt="Jayalakshmi Cooperative" class="nav-logo-img" onerror="this.style.display='none'; this.nextElementSibling.classList.add('show');">
        <span class="nav-logo-placeholder"></span>
    </a>

    <ul class="menu">
        <li><a href="{{ url('/') }}" class="menu-link">Home</a></li>
        <li class="active"><a href="{{ url('/about') }}" class="menu-link">About</a></li>
        <li><a href="{{ url('/') }}#services" class="menu-link">Services</a></li>
        <li><a href="{{ url('/') }}#our-scheme" class="menu-link">Our Scheme</a></li>
        <li><a href="{{ url('/') }}#careers" class="menu-link">Careers</a></li>
        <li><a href="{{ url('/') }}#faq" class="menu-link">FAQ</a></li>
        <li><a href="{{ url('/') }}#gallery" class="menu-link">Gallery</a></li>
    </ul>

    <a href="#" class="contact-btn">Contact us</a>
</header>

<!-- ========== ABOUT PAGE CONTENT ========== -->
<section class="about-page">
    <div class="about-page-hero">
        <div class="about-hero-inner">
            <div class="about-hero-left">
                <div class="about-page-badge"><span class="about-page-badge-dot"></span> About Us</div>
                <h1 class="about-page-title">
                    <span class="about-hero-title-line">JAYALAKSHMI MUTUALLY</span>
                    <span class="about-hero-title-line">AIDED COOPERATIVE THRIFT</span>
                    <span class="about-hero-title-line">AND CREDIT SOCIETY LTD</span>
                </h1>
                <p class="about-page-tagline">Empowering members since 2013 with financial and growth.</p>
                <div class="about-hero-buttons">
                    <a href="#" class="about-hero-btn">Join as a member</a>
                    <a href="#" class="about-hero-btn">Become an Advisor</a>
                </div>
            </div>
            <div class="about-hero-right">
                <div class="about-hero-grid">
                    <div class="about-hero-grid-item"><img src="{{ asset('images/abt1.png') }}" alt="Financial analysis"></div>
                    <div class="about-hero-grid-item"><img src="{{ asset('images/abt2.png') }}" alt="Savings and credit"></div>
                    <div class="about-hero-grid-item"><img src="{{ asset('images/abt3.png') }}" alt="Member success"></div>
                    <div class="about-hero-grid-item"><img src="{{ asset('images/abt4.png') }}" alt="Growth and time"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- ========== FOUNDED ON TRUST, DRIVEN BY COMMUNITY ========== -->
    <section class="about-trust-section">
        <div class="about-trust-inner">
            <h2 class="about-trust-title">Founded on Trust, Driven by Community</h2>
            <p class="about-trust-para">Established in 2013 and headquartered in the vibrant city of Visakhapatnam, Jayalakshmi Mutually Aided Cooperative Thrift and Credit Society LTD. was born with a noble mission: to uplift the weaker sections of society through financial inclusion.</p>
            <p class="about-trust-para">We utilize advanced technologies to sustain and grow our business. These modern technologies have enabled us to introduce new features and products that support our business development. This commitment to innovation has made JAYALAKSHMI one of the most successful cooperative societies.</p>
            <div class="about-trust-stats">
                <div class="about-trust-stat">
                    <span class="about-trust-stat-value">10+</span>
                    <span class="about-trust-stat-label">Years of Service</span>
                </div>
                <div class="about-trust-stat">
                    <span class="about-trust-stat-value">Vizag</span>
                    <span class="about-trust-stat-label">Headquartered in</span>
                </div>
            </div>
            <div class="about-trust-cards">
                <div class="about-trust-card about-trust-card-community">
                    <div class="about-trust-card-icon-wrap about-trust-icon-community">
                        <span class="about-trust-card-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        </span>
                    </div>
                    <h3 class="about-trust-card-heading">Community Focus</h3>
                    <p class="about-trust-card-text">Dedicated to supporting local members and fostering economic growth within the community.</p>
                </div>
                <div class="about-trust-card about-trust-card-recognized">
                    <div class="about-trust-card-icon-wrap about-trust-icon-recognized">
                        <span class="about-trust-card-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"/><path d="M15.5 13.5L12 11l-3.5 2.5"/><path d="M12 22v-6"/><path d="M8 16l2 2 2-2 2 2"/></svg>
                        </span>
                    </div>
                    <h3 class="about-trust-card-heading">Recognized Status</h3>
                    <p class="about-trust-card-text">State Cooperative Society status from Dept. of Cooperative, Govt. of Andhra Pradesh.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== TECHNOLOGICAL ADOPTION & INFRASTRUCTURE ========== -->
    <section class="about-tech-section">
        <div class="about-tech-inner">
            <h2 class="about-tech-title">Technological Adoption & Infrastructure</h2>
            <span class="about-tech-line"></span>
            <p class="about-tech-subtitle">We leverage advanced financial technologies to provide seamless, secure, and 24/7 banking experiences for our members.</p>
            <div class="about-tech-cards">
                <div class="about-tech-card about-tech-card-blue">
                    <div class="about-tech-card-icon-wrap about-tech-card-icon-blue">
                        <span class="about-tech-card-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
                        </span>
                    </div>
                    <h3 class="about-tech-card-heading">Digital Accessibility</h3>
                    <p class="about-tech-card-text">Our robust mobile app and responsive website ensure members can manage their finances anytime, anywhere, bringing the cooperative to your fingertips.</p>
                </div>
                <div class="about-tech-card about-tech-card-purple">
                    <div class="about-tech-card-icon-wrap about-tech-card-icon-purple">
                        <span class="about-tech-card-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"/><rect x="2" y="14" width="20" height="8" rx="2" ry="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/><line x1="18" y1="6" x2="18.01" y2="6"/><line x1="18" y1="18" x2="18.01" y2="18"/></svg>
                        </span>
                    </div>
                    <h3 class="about-tech-card-heading">Enterprise Infrastructure</h3>
                    <p class="about-tech-card-text">We utilize outsourced data center hosting and enterprise-class technology to guarantee data security, reliability, and high availability.</p>
                </div>
                <div class="about-tech-card about-tech-card-yellow">
                    <div class="about-tech-card-icon-wrap about-tech-card-icon-yellow">
                        <span class="about-tech-card-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/></svg>
                        </span>
                    </div>
                    <h3 class="about-tech-card-heading">24/7 Operations</h3>
                    <p class="about-tech-card-text">Our optimized server infrastructure and cost-efficient tech solutions enable continuous operations, supporting member growth without interruption.</p>
                </div>
            </div>
        </div>
    </section>
</section>

<!-- ========== FOOTER ========== -->
<footer class="site-footer">
    <div class="footer-inner">
        <div class="footer-top">
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

</body>
</html>
