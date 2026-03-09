<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Services - JAYALAKSHMI MUTUALLY AIDED COOPERATIVE</title>
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
        <li><a href="{{ url('/about') }}" class="menu-link">About</a></li>
        <li class="active"><a href="{{ url('/services') }}" class="menu-link">Services</a></li>
        <li><a href="{{ url('/') }}#our-scheme" class="menu-link">Our Scheme</a></li>
        <li><a href="{{ url('/') }}#careers" class="menu-link">Careers</a></li>
        <li><a href="{{ url('/') }}#faq" class="menu-link">FAQ</a></li>
        <li><a href="{{ url('/') }}#gallery" class="menu-link">Gallery</a></li>
    </ul>

    <a href="#" class="contact-btn">Contact us</a>
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
                    <a href="#" class="services-hero-btn services-hero-btn-primary">Explore Products</a>
                    <a href="#" class="services-hero-btn services-hero-btn-secondary">Apply for Loan</a>
                </div>
            </div>
            <div class="services-hero-image">
                <img src="{{ asset('images/services.png') }}" alt="Financial Services">
            </div>
        </div>
    </div>

    <!-- ========== OUR SERVICES SECTION ========== -->
    <section class="services-our-services-section">
        <div class="services-our-services-inner">
            <h2 class="services-our-services-title">Our Services</h2>
            <div class="services-our-services-cards">
                <div class="services-our-services-card">
                    <div class="services-our-services-icon">
                        <img src="{{ asset('images/budget.png') }}" alt="Main Products">
                    </div>
                    <h3 class="services-our-services-card-title">Main Products</h3>
                    <p class="services-our-services-card-desc">Savings & deposit services to grow your money.</p>
                    <a href="#" class="services-our-services-btn">Explore Products</a>
                </div>

                <div class="services-our-services-card">
                    <div class="services-our-services-icon">
                        <img src="{{ asset('images/loans.png') }}" alt="Loans">
                    </div>
                    <h3 class="services-our-services-card-title">Loans</h3>
                    <p class="services-our-services-card-desc">Flexible loans for personal and business needs.</p>
                    <a href="#" class="services-our-services-btn">Explore Loans</a>
                </div>

                <div class="services-our-services-card">
                    <div class="services-our-services-icon">
                        <img src="{{ asset('images/value.png') }}" alt="Premium Products">
                    </div>
                    <h3 class="services-our-services-card-title">Premium Products</h3>
                    <p class="services-our-services-card-desc">Advanced digital banking and specialized financial solutions.</p>
                    <a href="#" class="services-our-services-btn">Explore Products</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== MAIN PRODUCTS SECTION ========== -->
    <section class="services-main-products-section">
        <div class="services-main-products-inner">
            <h2 class="services-main-products-title">Main Products</h2>
            <span class="services-main-products-line"></span>
            <p class="services-main-products-desc">A range of essential banking services including savings accounts, deposit schemes, and investment options designed to help you save, manage, and grow your money securely.</p>
            
            <div class="services-main-products-scroll-wrap">
                <div class="services-main-products-scroll">
                    <div class="services-main-product-card">
                        <div class="services-main-product-icon">
                            <img src="{{ asset('images/sb-icon.png') }}" alt="Saving Account" onerror="this.style.display='none';">
                        </div>
                        <h3 class="services-main-product-title">Saving Account - SB</h3>
                        <p class="services-main-product-desc">Designed to help members save money while earning interest on their deposits. It offers flexibility with easy access to funds.</p>
                    </div>

                    <div class="services-main-product-card">
                        <div class="services-main-product-icon">
                            <img src="{{ asset('images/ac-icon.png') }}" alt="Current Account" onerror="this.style.display='none';">
                        </div>
                        <h3 class="services-main-product-title">Current Account - AC</h3>
                        <p class="services-main-product-desc">Designed for businesses and professionals that allows frequent and unlimited transactions for daily financial operations.</p>
                    </div>

                    <div class="services-main-product-card">
                        <div class="services-main-product-icon">
                            <img src="{{ asset('images/fd-icon.png') }}" alt="Fixed Deposit" onerror="this.style.display='none';">
                        </div>
                        <h3 class="services-main-product-title">Fixed Deposit - FD</h3>
                        <p class="services-main-product-desc">A secure investment where money is deposited for a fixed period at a fixed interest rate, offering guaranteed returns.</p>
                    </div>

                    <div class="services-main-product-card">
                        <div class="services-main-product-icon">
                            <img src="{{ asset('images/mis-icon.png') }}" alt="Monthly Income Scheme" onerror="this.style.display='none';">
                        </div>
                        <h3 class="services-main-product-title">Monthly Income Scheme - MIS</h3>
                        <p class="services-main-product-desc">MIS is a deposit plan where you invest a lump sum and receive fixed monthly income through interest.</p>
                    </div>

                    <div class="services-main-product-card">
                        <div class="services-main-product-icon">
                            <img src="{{ asset('images/dds-icon.png') }}" alt="Daily Deposit Scheme" onerror="this.style.display='none';">
                        </div>
                        <h3 class="services-main-product-title">Daily Deposit Scheme - DDS</h3>
                        <p class="services-main-product-desc">DDS allows customers to deposit small amounts daily and earn interest, helping them build savings gradually.</p>
                    </div>

                    <div class="services-main-product-card">
                        <div class="services-main-product-icon">
                            <img src="{{ asset('images/rd-icon.png') }}" alt="Recurring Deposit" onerror="this.style.display='none';">
                        </div>
                        <h3 class="services-main-product-title">Recurring Deposit - RD</h3>
                        <p class="services-main-product-desc">A Recurring Deposit allows you to save a fixed amount monthly and earn guaranteed interest until maturity.</p>
                    </div>
                </div>
            </div>

            <!-- ========== LOANS CONTENT ========== -->
            <h2 class="services-loans-title">Loans</h2>
            <span class="services-loans-line"></span>
            <p class="services-loans-desc">Flexible loan options designed to support your personal, business, and financial needs. Our loans provide quick access to funds with convenient repayment options to help you achieve your goals.</p>
            
            <div class="services-loans-scroll-wrap">
                <div class="services-loans-scroll">
                    <div class="services-loan-card">
                        <div class="services-loan-icon">
                            <img src="{{ asset('images/personal-loan-icon.png') }}" alt="Personal Loan" onerror="this.style.display='none';">
                        </div>
                        <h3 class="services-loan-title">Personal Loan</h3>
                        <p class="services-loan-desc">An unsecured loan that helps individuals meet personal financial needs and is repaid in fixed monthly installments.</p>
                    </div>

                    <div class="services-loan-card">
                        <div class="services-loan-icon">
                            <img src="{{ asset('images/home-loan-icon.png') }}" alt="Home Loan" onerror="this.style.display='none';">
                        </div>
                        <h3 class="services-loan-title">Home Loan</h3>
                        <p class="services-loan-desc">A Home Loan helps individuals finance the purchase or construction of a house and repay the amount in monthly installments.</p>
                    </div>

                    <div class="services-loan-card">
                        <div class="services-loan-icon">
                            <img src="{{ asset('images/auto-loan-icon.png') }}" alt="Auto Loan" onerror="this.style.display='none';">
                        </div>
                        <h3 class="services-loan-title">Auto Loan</h3>
                        <p class="services-loan-desc">An Auto Loan helps individuals finance the purchase of a vehicle and repay the amount in monthly installments over a fixed period.</p>
                    </div>

                    <div class="services-loan-card">
                        <div class="services-loan-icon">
                            <img src="{{ asset('images/business-loan-icon.png') }}" alt="Business Loan" onerror="this.style.display='none';">
                        </div>
                        <h3 class="services-loan-title">Business Loan</h3>
                        <p class="services-loan-desc">Money borrowed from a bank or financial institution to start, or expand a business, and it is repaid over time with interest.</p>
                    </div>

                    <div class="services-loan-card">
                        <div class="services-loan-icon">
                            <img src="{{ asset('images/agricultural-loan-icon.png') }}" alt="Agricultural Loan" onerror="this.style.display='none';">
                        </div>
                        <h3 class="services-loan-title">Agricultural Loan</h3>
                        <p class="services-loan-desc">An Agricultural Loan provides financial support to farmers for cultivation, equipment, and other farming activities.</p>
                    </div>

                    <div class="services-loan-card">
                        <div class="services-loan-icon">
                            <img src="{{ asset('images/gold-loan-icon.png') }}" alt="Gold Loan" onerror="this.style.display='none';">
                        </div>
                        <h3 class="services-loan-title">Gold Loan</h3>
                        <p class="services-loan-desc">A Gold Loan allows you to borrow money by pledging your gold as security and repay the amount with interest within a fixed tenure.</p>
                    </div>

                    <div class="services-loan-card">
                        <div class="services-loan-icon">
                            <img src="{{ asset('images/rd-loan-icon.png') }}" alt="Recurring Deposit Loan" onerror="this.style.display='none';">
                        </div>
                        <h3 class="services-loan-title">Recurring Deposit Loan</h3>
                        <p class="services-loan-desc">A Recurring Deposit Loan allows you to borrow money against your RD savings without closing the deposit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</section>

</body>
</html>
