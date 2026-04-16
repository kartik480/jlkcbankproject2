<!DOCTYPE html>
<html lang="en" class="dds-page-root">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fixed Deposit - JAYALAKSHMI MUTUALLY AIDED COOPERATIVE</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}?v=fixed-deposit-v1">
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

        <section class="dds-hero" aria-labelledby="fd-hero-heading">
            <div class="dds-hero-text">
                <h1 id="fd-hero-heading" class="dds-hero-title">Fixed Deposit</h1>
                <p class="dds-hero-desc">Fixed deposits are term deposits that offer higher interest rates than savings accounts, for a fixed period.</p>
                <div class="dds-hero-actions">
                    <a href="{{ url('/contact') }}" class="dds-btn dds-btn-primary">Apply Now</a>
                    <a href="{{ url('/contact') }}" class="dds-btn dds-btn-outline">Contact us</a>
                </div>
            </div>
            <div class="dds-hero-visual">
                <img src="{{ asset('images/boy.png') }}" alt="Fixed deposit member" class="dds-hero-img" loading="eager" decoding="async" width="520" height="420" onerror="this.src='{{ asset('images/money.jpg') }}';">
            </div>
        </section>

        <hr class="dds-rule" aria-hidden="true">

        <section class="dds-terms" aria-labelledby="fd-terms-heading">
            <h2 id="fd-terms-heading" class="dds-terms-title">Terms and Conditions:</h2>
            <ol class="dds-terms-list">
                <li><strong>Interest on Premature Withdrawals:</strong> If withdrawn before maturity, the applicable interest will be based on completed tenure and policy norms.</li>
                <li><strong>Fixed Deposit Maturing After 12 Months:</strong> Withdrawals before 12 months may not earn interest as per product rules.</li>
                <li><strong>Fixed Deposit Maturing After 12 Months and Above:</strong> If withdrawn after 12 months but before maturity, lower/premature rates may apply.</li>
                <li><strong>Premature Withdrawal Charges:</strong> A standard penalty (for example, 1.00%) may be deducted from member returns on premature closure.</li>
                <li><strong>Minimum Deposit Amount:</strong> The minimum opening amount for a Fixed Deposit is Rs. 1,000.</li>
                <li><strong>Deposit Tenure:</strong> Deposit terms can generally be opened from 1 year and up to 10 years.</li>
                <li><strong>Renewal of Fixed Deposits:</strong> On maturity, deposits are renewed according to member instruction or prevailing renewal policy.</li>
                <li><strong>Tax Implications:</strong> Interest earned on fixed deposits may be taxable as per applicable laws.</li>
                <li><strong>Nomination Facility:</strong> Nomination is available and strongly recommended for settlement convenience.</li>
                <li><strong>Early Closure:</strong> In case of early closure, reduced interest and/or penalty may be applied as per policy.</li>
                <li><strong>Contact Information:</strong> For support, contact customer service for FD-related assistance and current rates.</li>
                <li><strong>Changes in Terms:</strong> Terms and rates can be revised from time to time to stay aligned with regulation and policy.</li>
                <li><strong>Governing Law:</strong> Fixed Deposit terms are governed by laws of India and applicable cooperative banking regulations.</li>
            </ol>

            <div class="dds-rate-table-wrap" role="region" aria-label="Fixed deposit interest table">
                <table class="dds-rate-table">
                    <thead>
                        <tr>
                            <th>Deposit Amount</th>
                            <th>12 Month (9.5%)</th>
                            <th>24 Month (9.5%)</th>
                            <th>36 Month (10.0%)</th>
                            <th>48 Month (12.0%)</th>
                            <th>60 Month (11.0%)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>1000</td><td>1095</td><td>1202</td><td>1348</td><td>1518</td><td>1720</td></tr>
                        <tr><td>3000</td><td>3285</td><td>3606</td><td>4044</td><td>4554</td><td>5160</td></tr>
                        <tr><td>5000</td><td>5475</td><td>6010</td><td>6740</td><td>7590</td><td>8600</td></tr>
                        <tr><td>10000</td><td>10950</td><td>12020</td><td>13480</td><td>15180</td><td>17200</td></tr>
                        <tr><td>50000</td><td>54750</td><td>60100</td><td>67400</td><td>75900</td><td>86000</td></tr>
                        <tr><td>100000</td><td>109500</td><td>120200</td><td>134800</td><td>151800</td><td>172000</td></tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="dds-explore" aria-labelledby="fd-explore-heading">
            <h2 id="fd-explore-heading" class="dds-explore-title">Explore Our Products</h2>
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
                    <a href="{{ route('services.fixed-deposit') }}" class="dds-product-card-link">Explore</a>
                </article>
                <article class="dds-product-card">
                    <div class="dds-product-icon">
                        <img src="{{ asset('images/cal2.png') }}" alt="" onerror="this.style.display='none';">
                    </div>
                    <h3 class="dds-product-card-title">Daily Deposit Scheme - DDS</h3>
                    <p class="dds-product-card-desc">DDS allows customers to deposit small amounts daily and earn interest, helping them build savings gradually.</p>
                    <a href="{{ route('services.daily-deposit-scheme') }}" class="dds-product-card-link">Explore</a>
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
