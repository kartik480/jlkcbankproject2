<!DOCTYPE html>
<html lang="en" class="dds-page-root">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fixed Deposit - JAYALAKSHMI MUTUALLY AIDED COOPERATIVE</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}?v=fixed-deposit-v2">
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
            <h2 id="fd-terms-heading" class="dds-terms-title dds-terms-title--with-rule">Terms and Conditions:</h2>
            <hr class="dds-rule dds-terms-title-rule" aria-hidden="true">
            <ol class="dds-terms-list">
                <li>
                    <strong>Interest on Premature Withdrawals:</strong>
                    <ul class="dds-terms-sublist">
                        <li><strong>Before Maturity:</strong> If withdrawals are made before the fixed deposit&apos;s maturity date, the interest payable on the amount withdrawn will be equivalent to the interest rate of a savings account.</li>
                    </ul>
                </li>
                <li>
                    <strong>Fixed Deposits Maturing After 12 Months:</strong>
                    <ul class="dds-terms-sublist">
                        <li><strong>Withdrawals Before 12 Months:</strong> If withdrawals are made before 12 months, no interest will be payable on the amount withdrawn.</li>
                        <li><strong>Withdrawals After 12 Months but Before Maturity:</strong> If withdrawals are made after 12 months but before the fixed deposit matures, the interest payable will be equivalent to the interest rate of a savings account.</li>
                    </ul>
                </li>
                <li><strong>Premature Withdrawal Charges:</strong> A stationary charge of Rs. 100 will be deducted from the member&apos;s account for any premature withdrawal.</li>
                <li><strong>Minimum Deposit Amount:</strong> The minimum amount required to open a fixed deposit account is 1000.</li>
                <li><strong>Deposit Tenure:</strong> Fixed deposits can be opened for a minimum period of 1 year and a maximum period of 10 years.</li>
                <li><strong>Renewal of Fixed Deposits:</strong> Fixed deposits will be automatically renewed at maturity unless instructions are given to the contrary. The renewal will be at the prevailing interest rates.</li>
                <li><strong>Tax Implications:</strong> Interest earned on fixed deposits may be subject to tax as per the applicable laws. Members are advised to consult with a tax advisor for details.</li>
                <li><strong>Nomination Facility:</strong> A nomination facility is available for fixed deposit accounts. Members are encouraged to appoint a nominee to ensure smooth transfer of the deposit in the event of the account holder&apos;s death.</li>
                <li><strong>Early Closure:</strong> In case of early closure of the fixed deposit, apart from the applicable interest changes, an additional penalty may be applied as per the society&apos;s policy.</li>
                <li><strong>Interest Payment:</strong> Interest on fixed deposits will be paid on maturity or as per the chosen payout frequency (monthly, quarterly, or annually).</li>
                <li><strong>Contact Information:</strong> For any queries related to fixed deposits, members may contact our customer service department at [contact information].</li>
                <li><strong>Changes in Terms:</strong> The terms and conditions related to fixed deposits are subject to change at the discretion of <strong>JAYALAKSHMI MUTUALLY AIDED COOPERATIVE THRIFT AND CREDIT SOCIETY LTD.</strong> Members will be notified of any changes in writing.</li>
                <li><strong>Governing Law:</strong> The terms and conditions of the fixed deposit account are governed by the laws of India. Any disputes arising from these terms will be subject to the jurisdiction of the courts in <strong>Visakhapatnam.</strong></li>
            </ol>

            <div class="dds-rate-table-wrap dds-rate-table-wrap--fd" role="region" aria-label="Fixed deposit interest table">
                <table class="dds-rate-table dds-rate-table--fd">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Deposit amount</th>
                            <th scope="col">12 month (09.50%)</th>
                            <th scope="col">24 month (09.50%)</th>
                            <th scope="col">36 month (10.00%)</th>
                            <th scope="col">36 month (10.50%)</th>
                            <th scope="col">60 month (11.00%)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td>1000</td><td>1093</td><td>1206</td><td>1344</td><td>1513</td><td>1720</td></tr>
                        <tr><td>2</td><td>5000</td><td>5465</td><td>6032</td><td>6724</td><td>7568</td><td>8602</td></tr>
                        <tr><td>3</td><td>10000</td><td>10930</td><td>12065</td><td>13448</td><td>15137</td><td>17204</td></tr>
                        <tr><td>4</td><td>20000</td><td>21861</td><td>24131</td><td>26897</td><td>30274</td><td>34408</td></tr>
                        <tr><td>5</td><td>30000</td><td>32792</td><td>36197</td><td>40346</td><td>45412</td><td>57612</td></tr>
                        <tr><td>6</td><td>50000</td><td>54654</td><td>60328</td><td>67244</td><td>75686</td><td>86021</td></tr>
                        <tr><td>7</td><td>100000</td><td>109308</td><td>120656</td><td>134488</td><td>151373</td><td>172042</td></tr>
                        <tr><td>8</td><td>500000</td><td>546541</td><td>603283</td><td>672444</td><td>756869</td><td>860214</td></tr>
                        <tr><td>9</td><td>1000000</td><td>1093083</td><td>1206566</td><td>1344888</td><td>1513738</td><td>1720428</td></tr>
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
