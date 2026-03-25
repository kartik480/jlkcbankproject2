<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mobile Banking - JAYALAKSHMI MUTUALLY AIDED COOPERATIVE</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}?v=mobile-banking-v6">
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

<main class="mb-page">
    <section class="mb-hero" style="background-image: url('{{ asset('images/bmbg.jpg') }}');">
        <div class="mb-hero-inner">
            <a href="{{ url('/services') }}" class="mb-back-btn" aria-label="Back to Services">‹</a>
            <h1 class="mb-hero-title">MOBILE BANKING</h1>
            <span class="mb-hero-line"></span>
            <p class="mb-hero-desc">
                Manage your accounts, transfer funds instantly, and access secure banking services anytime, anywhere through
                our mobile banking platform
            </p>

            <div class="mb-grid">
                <article class="mb-card mb-card--normal-savings">
                    <h3 class="mb-card-title">Normal Savings Account</h3>
                    <ol class="mb-card-list">
                        <li>Minimum Balance: As per bank policy</li>
                        <li>Mobile Banking Access</li>
                        <li>Online Fund Transfer (NEFT / RTGS)</li>
                        <li>SMS &amp; Email Alerts</li>
                    </ol>
                </article>

                <article class="mb-card mb-card--primary-savings">
                    <h3 class="mb-card-title">Primary Savings Account</h3>
                    <ol class="mb-card-list">
                        <li>Low Minimum Balance Requirement</li>
                        <li>Free Mobile Banking Access</li>
                        <li>Instant Balance Check</li>
                        <li>Easy Online Transfers</li>
                        <li>Basic Banking Services for Individuals</li>
                    </ol>
                </article>

                <div class="mb-figure-wrap" aria-hidden="true">
                    <img src="{{ asset('images/girl.png') }}" alt="" class="mb-figure-img" loading="lazy" decoding="async">
                </div>

                <article class="mb-card mb-card--normal-current">
                    <h3 class="mb-card-title">Normal Current Account</h3>
                    <ol class="mb-card-list">
                        <li>Designed for Small Businesses &amp; Traders</li>
                        <li>Unlimited Transactions</li>
                        <li>Mobile Banking &amp; Internet Banking Access</li>
                        <li>NEFT / RTGS Transfer Facility</li>
                        <li>Monthly Account Statements</li>
                    </ol>
                </article>

                <article class="mb-card mb-card--express-current">
                    <h3 class="mb-card-title">Express Current Account</h3>
                    <ol class="mb-card-list">
                        <li>High Transaction Limit</li>
                        <li>Priority Banking Services</li>
                        <li>Instant Fund Transfers</li>
                        <li>Dedicated Business Banking Support</li>
                        <li>24x7 Mobile Banking Access</li>
                    </ol>
                </article>
            </div>
        </div>
    </section>

    <section class="mb-activate-section">
        <div class="mb-activate-inner" style="background-image: url('{{ asset('images/money.jpg') }}');">
            <div class="mb-activate-glass">
                <h2 class="mb-activate-title">ACTIVATE MOBILE BANKING TODAY</h2>
                <p class="mb-activate-desc">Access your account anytime, anywhere with secure mobile banking services</p>
                <a href="{{ url('/contact') }}" class="mb-activate-btn">Apply Now</a>
            </div>
        </div>
    </section>
</main>

</body>
</html>
