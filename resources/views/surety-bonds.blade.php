<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Surety Bonds - JAYALAKSHMI MUTUALLY AIDED COOPERATIVE</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}?v=surety-bonds-v5">
</head>
<body>

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
        <li><a href="{{ url('/careers') }}" class="menu-link">Careers</a></li>
        <li><a href="{{ url('/') }}#faq" class="menu-link">FAQ</a></li>
        <li><a href="{{ url('/gallery') }}" class="menu-link">Gallery</a></li>
    </ul>

    <a href="{{ url('/contact') }}" class="contact-btn">Contact us</a>
</header>

<main class="sb-page">
    <section class="sb-hero" style="background-image: url('{{ asset('images/teamup.jpg') }}');">
        <div class="sb-hero-inner">
            <a href="{{ url('/services') }}" class="sb-back-btn" aria-label="Back to Services">‹</a>
            <h1 class="sb-hero-title">SURETY BONDS</h1>
            <span class="sb-hero-line"></span>
            <p class="sb-hero-desc">
                Reliable guarantee support and documentation assistance to help members meet financial, loan, and contractual
                obligations with confidence
            </p>

            <div class="sb-grid">
                <article class="sb-card sb-card--member-support">
                    <h3 class="sb-card-title">Member Financial Guarantee Support</h3>
                    <p class="sb-card-text">The society may provide financial guarantee support for members in relation to internal financial transactions and member-based lending activities.</p>
                </article>

                <article class="sb-card sb-card--contract-support">
                    <h3 class="sb-card-title">Contract Surety Assistance</h3>
                    <p class="sb-card-text">Assistance in issuing undertaking letters or support documentation for business agreements and contractual commitments.</p>
                </article>

                <div class="sb-figure-wrap" aria-hidden="true">
                    <img src="{{ asset('images/girl.png') }}" alt="" class="sb-figure-img" loading="lazy" decoding="async">
                </div>

                <article class="sb-card sb-card--undertaking">
                    <h3 class="sb-card-title">Financial Undertaking Letters</h3>
                    <p class="sb-card-text">Support for members who require surety documentation when applying for loans from banks or other financial institutions.</p>
                </article>

                <article class="sb-card sb-card--coordination">
                    <h3 class="sb-card-title">Coordination with Banks &amp; Insurance Providers</h3>
                    <p class="sb-card-text">The society may assist members by coordinating with banks and financial institutions for documentation and financial support processes.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="sb-note-section" aria-label="Important Note">
        <div class="sb-note-inner">
            <div class="sb-note-icon" aria-hidden="true">
                <img src="{{ asset('images/HORN.png') }}" alt="" class="sb-note-icon-img" loading="lazy" decoding="async">
            </div>
            <div class="sb-note-content">
                <h2 class="sb-note-title">Important Note</h2>
                <p class="sb-note-text">
                    The Cooperative Society provides financial support and documentation assistance to its members.<br>
                    Official Bank Guarantees or Insurance Surety Bonds are issued only by authorized banks or insurance companies as per applicable regulations.
                </p>
            </div>
        </div>
    </section>

    <section class="sb-support-section" aria-label="Surety and Guarantee Support Services">
        <div class="sb-support-inner">
            <h2 class="sb-support-title">SURETY &amp; GUARANTEE SUPPORT SERVICES</h2>
            <p class="sb-support-desc">
                Our Cooperative MACS Society provides Surety and Financial Guarantee Support Services to assist members in meeting their financial and contractual obligations. These services are designed to help members strengthen their credibility while dealing with banks, financial institutions, and business partners.
                Through our support system, members can obtain necessary documentation and assistance for financial commitments and business agreements.
            </p>

            <div class="sb-support-cards">
                <article class="sb-support-card sb-support-card--benefits">
                    <img src="{{ asset('images/security.png') }}" alt="" class="sb-support-icon" loading="lazy" decoding="async">
                    <h3 class="sb-support-card-title">Benefits</h3>
                    <ul class="sb-support-list">
                        <li>Trusted Cooperative Support</li>
                        <li>Transparent and Member-Focused Services</li>
                        <li>Efficient Documentation Assistance</li>
                        <li>Professional Financial Guidance</li>
                    </ul>
                </article>

                <article class="sb-support-card sb-support-card--eligibility">
                    <img src="{{ asset('images/time.png') }}" alt="" class="sb-support-icon" loading="lazy" decoding="async">
                    <h3 class="sb-support-card-title">Eligibility</h3>
                    <ul class="sb-support-list">
                        <li>Registered Members of the Society</li>
                        <li>Valid Identity and Address Proof</li>
                        <li>Relevant Financial or Contract Documentation</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <section class="sb-apply-section" aria-label="Apply for Surety Bond Support">
        <div class="sb-apply-inner" style="background-image: url('{{ asset('images/moneytree.jpg') }}');">
            <div class="sb-apply-glass">
                <h2 class="sb-apply-title">APPLY FOR SURETY BOND SUPPORT</h2>
                <p class="sb-apply-desc">Get trusted financial guarantee assistance and documentation support to fulfill your loan, business, or contractual obligations with confidence</p>
                <a href="{{ url('/contact') }}" class="sb-apply-btn">Apply Now</a>
            </div>
        </div>
    </section>
</main>

</body>
</html>
