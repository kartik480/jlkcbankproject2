<!DOCTYPE html>
<html lang="en" class="dds-page-root">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Current Account - JAYALAKSHMI MUTUALLY AIDED COOPERATIVE</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}?v=current-account-v1">
    <script src="{{ asset('js/site-nav.js') }}" defer></script>
</head>
<body class="dds-page">

@include('partials.site-nav', ['navActive' => 'services'])

<main class="dds-main">
    <div class="dds-inner">
        <a href="{{ url('/services#main-products') }}" class="dds-back">
            <span class="dds-back-icon" aria-hidden="true">&lt;</span>
            Back
        </a>

        <p class="dds-badge"><span class="dds-badge-dot" aria-hidden="true"></span> Main Products</p>

        <section class="dds-hero" aria-labelledby="ca-hero-heading">
            <div class="dds-hero-text">
                <h1 id="ca-hero-heading" class="dds-hero-title">Current Account</h1>
                <p class="dds-hero-desc">Mainly used for daily business transactions, allowing frequent deposits and withdrawals without limits, usually without earning interest.</p>
                <div class="dds-hero-actions">
                    <a href="{{ url('/contact') }}" class="dds-btn dds-btn-primary">Apply Now</a>
                    <a href="{{ url('/contact') }}" class="dds-btn dds-btn-outline">Contact us</a>
                </div>
            </div>
            <div class="dds-hero-visual">
                <img src="{{ asset('images/boy.png') }}" alt="Current account member" class="dds-hero-img" loading="eager" decoding="async" width="520" height="420" onerror="this.src='{{ asset('images/money.jpg') }}';">
            </div>
        </section>

        <hr class="dds-rule" aria-hidden="true">

        <section class="dds-terms" aria-labelledby="ca-terms-heading">
            <h2 id="ca-terms-heading" class="dds-terms-title">Terms and Conditions:</h2>
            <ol class="dds-terms-list">
                <li><strong>Account Opening &amp; Eligibility:</strong> Current Accounts may be opened by individuals, proprietorships, partnerships, companies, and other eligible business entities. KYC norms are mandatory.</li>
                <li><strong>Nature &amp; Purpose of Account:</strong> A Current Account is intended for high-volume business transactions and not for personal savings.</li>
                <li><strong>Minimum Balance Requirement:</strong> Customers are required to maintain the prescribed minimum average balance and non-maintenance may attract applicable penalties.</li>
                <li><strong>Deposits &amp; Withdrawals:</strong> Deposits can be made via cash, cheque, NEFT/RTGS, or digital modes. Withdrawals are allowed through cheque, withdrawal slips, ATM (if enabled), and digital channels.</li>
                <li><strong>Interest on Current Account:</strong> No interest is paid on Current Account balances as per standard banking practice.</li>
                <li><strong>Charges &amp; Fees:</strong> Charges may apply for non-maintenance of balance, cash handling beyond limits, cheque book issuance, and value-added services.</li>
                <li><strong>Account Operations:</strong> Accounts may be operated individually or jointly and by authorized signatories in firms/companies based on submitted mandate.</li>
                <li><strong>Regulatory Guidelines (RBI Compliance):</strong> Opening and operation are subject to RBI directions, periodic KYC updates, and compliance with anti-money laundering norms.</li>
                <li><strong>Transaction Monitoring &amp; Governance:</strong> Transactions are monitored as per regulatory norms to prevent misuse and ensure lawful operation.</li>
                <li><strong>Dormant / Inactive Accounts:</strong> Accounts with no transaction for the prescribed period may be treated as inactive or dormant and reactivation may require verification.</li>
                <li><strong>Account Closure:</strong> The account holder may close the account by written request. The institution reserves the right to close accounts in case of policy violations, suspicious transactions, or legal non-compliance.</li>
                <li><strong>Amendments &amp; Governing Law:</strong> Terms are governed by applicable banking laws and may be revised from time to time.</li>
            </ol>
        </section>

        <section class="dds-explore" aria-labelledby="ca-explore-heading">
            <h2 id="ca-explore-heading" class="dds-explore-title">Explore Our Products</h2>
            <div class="dds-explore-grid">
                <article class="dds-product-card">
                    <div class="dds-product-icon">
                        <img src="{{ asset('images/sasb.png') }}" alt="" onerror="this.style.display='none';">
                    </div>
                    <h3 class="dds-product-card-title">Saving Account - SB</h3>
                    <p class="dds-product-card-desc">Designed to help members save money while earning interest on their deposits. It offers flexibility with easy access to funds.</p>
                    <a href="{{ route('services.savings-account') }}" class="dds-product-card-link">Explore</a>
                </article>
                <article class="dds-product-card">
                    <div class="dds-product-icon">
                        <img src="{{ asset('images/ca.png') }}" alt="" onerror="this.style.display='none';">
                    </div>
                    <h3 class="dds-product-card-title">Current Account - CA</h3>
                    <p class="dds-product-card-desc">Designed for businesses and professionals that allows frequent and unlimited transactions for daily financial operations.</p>
                    <a href="{{ route('services.current-account') }}" class="dds-product-card-link">Explore</a>
                </article>
                <article class="dds-product-card">
                    <div class="dds-product-icon">
                        <img src="{{ asset('images/fxd.png') }}" alt="" onerror="this.style.display='none';">
                    </div>
                    <h3 class="dds-product-card-title">Fixed Deposit - FD</h3>
                    <p class="dds-product-card-desc">A secure investment where money is deposited for a fixed period at a fixed interest rate, offering guaranteed returns.</p>
                    <a href="{{ url('/services') }}#main-products" class="dds-product-card-link">Explore</a>
                </article>
                <article class="dds-product-card">
                    <div class="dds-product-icon">
                        <img src="{{ asset('images/cal.png') }}" alt="" onerror="this.style.display='none';">
                    </div>
                    <h3 class="dds-product-card-title">Monthly Income Scheme - MIS</h3>
                    <p class="dds-product-card-desc">MIS is a deposit plan where you invest a lump sum and receive fixed monthly income through interest.</p>
                    <a href="{{ url('/services') }}#main-products" class="dds-product-card-link">Explore</a>
                </article>
            </div>
        </section>
    </div>
</main>

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

</body>
</html>
