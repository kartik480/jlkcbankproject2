<!DOCTYPE html>
<html lang="en" class="services-page-root">
<head>
    <meta charset="UTF-8">
    <title>Services - JAYALAKSHMI MUTUALLY AIDED COOPERATIVE</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}?v=services-scroll-v1">
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
        <li><a href="{{ url('/about') }}" class="menu-link">About</a></li>
        <li class="active"><a href="{{ url('/services') }}" class="menu-link">Services</a></li>
        <li><a href="{{ url('/careers') }}" class="menu-link">Careers</a></li>
        <li><a href="{{ url('/gallery') }}" class="menu-link">Gallery</a></li>
    </ul>

    <a href="{{ url('/contact') }}" class="contact-btn">Contact us</a>
</header>

<!-- ========== SERVICES PAGE CONTENT ========== -->
<section class="about-page services-page">
    <div class="about-page-hero services-page-hero">
        <div class="about-hero-inner">
            <div class="about-hero-left">
                <h1 class="about-page-title">
                    <span class="about-hero-title-line">Financial Services Designed</span>
                    <span class="about-hero-title-line">for Your Growth</span>
                </h1>
                <p class="about-page-tagline">Explore secure savings, flexible loans, and premium financial solutions tailored to individuals and businesses.</p>
                <div class="about-hero-buttons">
                    <a href="#our-services" class="services-hero-btn services-hero-btn-primary">Explore Products</a>
                    <a href="#" class="services-hero-btn services-hero-btn-secondary">Apply for Loan</a>
                </div>
            </div>
            <div class="services-hero-image">
                <img src="{{ asset('images/services.png') }}" alt="Financial Services">
            </div>
        </div>
        <div class="services-underline-image">
            <img src="{{ asset('images/underline.png') }}" alt="Underline">
        </div>
    </div>

    <!-- ========== OUR SERVICES SECTION ========== -->
    <section class="services-our-services-section" id="our-services">
        <div class="services-our-services-inner">
            <h2 class="services-our-services-title">Our Services</h2>
            <div class="services-our-services-cards">
                <div class="services-our-services-card">
                    <div class="services-our-services-icon">
                        <img src="{{ asset('images/budget.png') }}" alt="Main Products">
                    </div>
                    <h3 class="services-our-services-card-title">Main Products</h3>
                    <p class="services-our-services-card-desc">Savings & deposit services to grow your money.</p>
                    <a href="#main-products" class="services-our-services-btn">Explore Products</a>
                </div>

                <div class="services-our-services-card">
                    <div class="services-our-services-icon">
                        <img src="{{ asset('images/loans.png') }}" alt="Loans">
                    </div>
                    <h3 class="services-our-services-card-title">Loans</h3>
                    <p class="services-our-services-card-desc">Flexible loans for personal and business needs.</p>
                    <a href="#loans" class="services-our-services-btn">Explore Loans</a>
                </div>

                <div class="services-our-services-card">
                    <div class="services-our-services-icon">
                        <img src="{{ asset('images/value.png') }}" alt="Premium Products">
                    </div>
                    <h3 class="services-our-services-card-title">Premium Products</h3>
                    <p class="services-our-services-card-desc">Advanced digital banking and specialized financial solutions.</p>
                    <a href="#premium-products" class="services-our-services-btn">Explore Products</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== MAIN PRODUCTS SECTION ========== -->
    <section class="services-main-products-section" id="main-products">
        <div class="services-main-products-inner">
            <h2 class="services-main-products-title">Main Products</h2>
            <span class="services-main-products-line"></span>
            <p class="services-main-products-desc">A range of essential banking services including savings accounts, deposit schemes, and investment options designed to help you save, manage, and grow your money securely.</p>
            
            <div class="services-main-products-scroll-wrap">
                <div class="services-main-products-scroll">
                    <div class="services-main-product-card">
                        <div class="services-main-product-icon">
                            <img src="{{ asset('images/sasb.png') }}" alt="Saving Account" onerror="this.style.display='none';">
                        </div>
                        <h3 class="services-main-product-title">Saving Account - SB</h3>
                        <p class="services-main-product-desc">Designed to help members save money while earning interest on their deposits. It offers flexibility with easy access to funds.</p>
                    </div>

                    <div class="services-main-product-card">
                        <div class="services-main-product-icon">
                            <img src="{{ asset('images/ca.png') }}" alt="Current Account" onerror="this.style.display='none';">
                        </div>
                        <h3 class="services-main-product-title">Current Account - AC</h3>
                        <p class="services-main-product-desc">Designed for businesses and professionals that allows frequent and unlimited transactions for daily financial operations.</p>
                    </div>

                    <div class="services-main-product-card">
                        <div class="services-main-product-icon">
                            <img src="{{ asset('images/fxd.png') }}" alt="Fixed Deposit" onerror="this.style.display='none';">
                        </div>
                        <h3 class="services-main-product-title">Fixed Deposit - FD</h3>
                        <p class="services-main-product-desc">A secure investment where money is deposited for a fixed period at a fixed interest rate, offering guaranteed returns.</p>
                    </div>

                    <div class="services-main-product-card">
                        <div class="services-main-product-icon">
                            <img src="{{ asset('images/cal.png') }}" alt="Monthly Income Scheme" onerror="this.style.display='none';">
                        </div>
                        <h3 class="services-main-product-title">Monthly Income Scheme - MIS</h3>
                        <p class="services-main-product-desc">MIS is a deposit plan where you invest a lump sum and receive fixed monthly income through interest.</p>
                    </div>

                    <div class="services-main-product-card">
                        <div class="services-main-product-icon">
                            <img src="{{ asset('images/cal2.png') }}" alt="Daily Deposit Scheme" onerror="this.style.display='none';">
                        </div>
                        <h3 class="services-main-product-title">Daily Deposit Scheme - DDS</h3>
                        <p class="services-main-product-desc">DDS allows customers to deposit small amounts daily and earn interest, helping them build savings gradually.</p>
                    </div>

                    <div class="services-main-product-card">
                        <div class="services-main-product-icon">
                            <img src="{{ asset('images/r1.png') }}" alt="Recurring Deposit" onerror="this.style.display='none';">
                        </div>
                        <h3 class="services-main-product-title">Recurring Deposit - RD</h3>
                        <p class="services-main-product-desc">A Recurring Deposit allows you to save a fixed amount monthly and earn guaranteed interest until maturity.</p>
                    </div>
                </div>
            </div>

            <!-- ========== LOANS CONTENT ========== -->
            <h2 class="services-loans-title" id="loans">Loans</h2>
            <span class="services-loans-line"></span>
            <p class="services-loans-desc">Flexible loan options designed to support your personal, business, and financial needs. Our loans provide quick access to funds with convenient repayment options to help you achieve your goals.</p>
            
            <div class="services-loans-scroll-wrap">
                <div class="services-loans-scroll">
                    <div class="services-loan-card">
                        <div class="services-loan-icon">
                            <img src="{{ asset('images/pl.png') }}" alt="Personal Loan" onerror="this.style.display='none';">
                        </div>
                        <h3 class="services-loan-title">Personal Loan</h3>
                        <p class="services-loan-desc">An unsecured loan that helps individuals meet personal financial needs and is repaid in fixed monthly installments.</p>
                    </div>

                    <div class="services-loan-card">
                        <div class="services-loan-icon">
                            <img src="{{ asset('images/hl.png') }}" alt="Home Loan" onerror="this.style.display='none';">
                        </div>
                        <h3 class="services-loan-title">Home Loan</h3>
                        <p class="services-loan-desc">A Home Loan helps individuals finance the purchase or construction of a house and repay the amount in monthly installments.</p>
                    </div>

                    <div class="services-loan-card">
                        <div class="services-loan-icon">
                            <img src="{{ asset('images/al.png') }}" alt="Auto Loan" onerror="this.style.display='none';">
                        </div>
                        <h3 class="services-loan-title">Auto Loan</h3>
                        <p class="services-loan-desc">An Auto Loan helps individuals finance the purchase of a vehicle and repay the amount in monthly installments over a fixed period.</p>
                    </div>

                    <div class="services-loan-card">
                        <div class="services-loan-icon">
                            <img src="{{ asset('images/bl.png') }}" alt="Business Loan" onerror="this.style.display='none';">
                        </div>
                        <h3 class="services-loan-title">Business Loan</h3>
                        <p class="services-loan-desc">Money borrowed from a bank or financial institution to start, or expand a business, and it is repaid over time with interest.</p>
                    </div>

                    <div class="services-loan-card">
                        <div class="services-loan-icon">
                            <img src="{{ asset('images/agri.png') }}" alt="Agricultural Loan" onerror="this.style.display='none';">
                        </div>
                        <h3 class="services-loan-title">Agricultural Loan</h3>
                        <p class="services-loan-desc">An Agricultural Loan provides financial support to farmers for cultivation, equipment, and other farming activities.</p>
                    </div>

                    <div class="services-loan-card">
                        <div class="services-loan-icon">
                            <img src="{{ asset('images/gold.png') }}" alt="Gold Loan" onerror="this.style.display='none';">
                        </div>
                        <h3 class="services-loan-title">Gold Loan</h3>
                        <p class="services-loan-desc">A Gold Loan allows you to borrow money by pledging your gold as security and repay the amount with interest within a fixed tenure.</p>
                    </div>

                    <div class="services-loan-card">
                        <div class="services-loan-icon">
                            <img src="{{ asset('images/cl.png') }}" alt="Recurring Deposit Loan" onerror="this.style.display='none';">
                        </div>
                        <h3 class="services-loan-title">Recurring Deposit Loan</h3>
                        <p class="services-loan-desc">A Recurring Deposit Loan allows you to borrow money against your RD savings without closing the deposit.</p>
                    </div>
                </div>
            </div>

            <!-- ========== PREMIUM PRODUCTS SECTION ========== -->
            <div class="services-pp-wrap" id="premium-products">
                <div class="services-pp-bg">
                    <img src="{{ asset('images/pp.png') }}" alt="" aria-hidden="true">
                </div>
                <div class="services-pp-stars" aria-hidden="true"></div>
                <div class="services-pp-inner">
                    <h2 class="services-pp-title">Premium Products</h2>
                    <span class="services-pp-line"></span>
                    <p class="services-pp-desc">Flexible loan options designed to support your personal, business, and financial needs. Our loans provide quick access to funds with convenient repayment options to help you achieve your goals.</p>
                    <div class="services-pp-cards">
                        <article class="services-pp-card services-pp-card--mobile">
                            <div class="services-pp-card-glow" aria-hidden="true"></div>
                            <div class="services-pp-card-body">
                                <h3 class="services-pp-card-title">Mobile Banking</h3>
                                <p class="services-pp-card-sub">Instant NEFT / RTGS Fund Transfers</p>
                                <ul class="services-pp-card-list">
                                    <li>Normal Savings Account</li>
                                    <li>Primary Savings Account</li>
                                    <li>Normal Current Account</li>
                                    <li>Express Current Account</li>
                                    <li>Real-time Account Balance, Mini Statement &amp; 24x7 Banking Access</li>
                                </ul>
                                <a href="{{ route('services.mobile-banking') }}" class="services-pp-card-btn">Explore Products</a>
                            </div>
                            <div class="services-pp-ribbon" aria-hidden="true"><span>Most Popular</span></div>
                        </article>
                        <article class="services-pp-card services-pp-card--surety">
                            <div class="services-pp-card-glow" aria-hidden="true"></div>
                            <div class="services-pp-card-body">
                                <h3 class="services-pp-card-title">Surety Bonds</h3>
                                <p class="services-pp-card-sub">Financial Guarantee Support Services</p>
                                <ul class="services-pp-card-list">
                                    <li>Member Financial Guarantee Support</li>
                                    <li>Contract Support &amp; Undertaking Letters</li>
                                    <li>Financial Undertaking Letters</li>
                                    <li>Coordination with Banks &amp; Insurance Providers</li>
                                </ul>
                                <a href="{{ route('services.surety-bonds') }}" class="services-pp-card-btn">Explore Products</a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <!-- ========== WHY CHOOSE OUR SERVICES SECTION ========== -->
            <section class="services-why-section">
                <div class="services-why-inner">
                    <h2 class="services-why-title">Why Choose Our Services</h2>
                    <p class="services-why-subtitle">Reliable financial solutions designed to provide security, convenience, and long-term financial growth</p>

                    <div class="services-why-grid">
                        <div class="services-why-item">
                            <div class="services-why-icon">
                                <img src="{{ asset('images/security.png') }}" alt="" width="72" height="72" decoding="async" loading="lazy">
                            </div>
                            <h3 class="services-why-item-title">Security</h3>
                            <p class="services-why-item-desc">Security – Advanced protection that keeps your financial data and transactions safe and secure.</p>
                        </div>

                        <div class="services-why-item">
                            <div class="services-why-icon">
                                <img src="{{ asset('images/time.png') }}" alt="" width="72" height="72" decoding="async" loading="lazy">
                            </div>
                            <h3 class="services-why-item-title">Fast Approval</h3>
                            <p class="services-why-item-desc">Get your loan approved quickly with minimal paperwork and a simple application process.</p>
                        </div>

                        <div class="services-why-item">
                            <div class="services-why-icon">
                                <img src="{{ asset('images/hands.png') }}" alt="" width="72" height="72" decoding="async" loading="lazy">
                            </div>
                            <h3 class="services-why-item-title">Trusted Partner</h3>
                            <p class="services-why-item-desc">Committed to transparency, integrity, and long-term customer relationships.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ========== CTA: START YOUR FINANCIAL JOURNEY ========== -->
            <section class="services-journey-section">
                <div class="services-journey-inner">
                    <div class="services-journey-card">
                        <h2 class="services-journey-title">Start Your Financial Journey Today</h2>
                        <p class="services-journey-subtitle">Take the first step toward secure savings, smart investments, and reliable financial solutions.</p>
                        <a href="#" class="services-journey-btn">Get Started</a>
                    </div>
                </div>
                <div class="services-journey-figure" aria-hidden="true">
                    <img
                        src="{{ asset('images/yay.png') }}"
                        alt=""
                        class="services-journey-figure-img"
                        loading="lazy"
                        decoding="async"
                    >
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
        </div>
    </section>
    
</section>

</body>
</html>
