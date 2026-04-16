<!DOCTYPE html>
<html lang="en" class="dds-page-root">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recurring Deposit (RD) - JAYALAKSHMI MUTUALLY AIDED COOPERATIVE</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}?v=recurring-deposit-v1">
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

        <section class="dds-hero" aria-labelledby="rd-hero-heading">
            <div class="dds-hero-text">
                <h1 id="rd-hero-heading" class="dds-hero-title">Recurring Deposit</h1>
                <p class="dds-hero-desc">A smart savings plan where you invest a fixed amount regularly and earn assured returns over time.</p>
                <div class="dds-hero-actions">
                    <a href="{{ url('/contact') }}" class="dds-btn dds-btn-primary">Apply Now</a>
                    <a href="{{ url('/contact') }}" class="dds-btn dds-btn-outline">Contact us</a>
                </div>
            </div>
            <div class="dds-hero-visual">
                <img src="{{ asset('images/boy.png') }}" alt="Recurring deposit member" class="dds-hero-img" loading="eager" decoding="async" width="520" height="420" onerror="this.src='{{ asset('images/money.jpg') }}';">
            </div>
        </section>

        <hr class="dds-rule" aria-hidden="true">

        <section class="dds-terms" aria-labelledby="rd-terms-heading">
            <h2 id="rd-terms-heading" class="dds-terms-title">Terms and Conditions:</h2>
            <ol class="dds-terms-list">
                <li>
                    <strong>Interest on Premature Withdrawals:</strong>
                    <ul class="dds-terms-sublist">
                        <li><strong>Before Maturity:</strong> If withdrawals are made before the maturity date, the interest payable on the amount withdrawn from a recurring deposit account will be equivalent to the interest rate of a savings account.</li>
                    </ul>
                </li>
                <li>
                    <strong>Recurring Deposits Maturing After 12 Months:</strong>
                    <ul class="dds-terms-sublist">
                        <li><strong>Withdrawals Before 12 Months:</strong> If withdrawals are made before 12 months, no interest will be payable on the amount withdrawn.</li>
                        <li><strong>Withdrawals After 12 Months but Before Maturity:</strong> If withdrawals are made after 12 months but before the maturity date, the interest payable on the amount withdrawn will be equivalent to the interest rate of a savings account.</li>
                    </ul>
                </li>
                <li><strong>Premature Withdrawal Charges:</strong> A stationary charge of <strong>Rs. 100</strong> will be deducted from the member&apos;s account for any premature withdrawal.</li>
                <li>
                    <strong>Deposit Amounts:</strong>
                    <ul class="dds-terms-sublist">
                        <li><strong>Monthly Deposits:</strong> Start with a minimum amount of <strong>Rs. 100</strong>.</li>
                        <li><strong>Quarterly and Half-Yearly Deposits:</strong> The minimum deposit amount is <strong>Rs. 1,000</strong>.</li>
                        <li><strong>Multiples:</strong> Deposits can be increased in multiples of <strong>Rs. 100</strong>.</li>
                    </ul>
                </li>
                <li>
                    <strong>Loan Against Recurring Deposits:</strong> Members can avail a maximum of <strong>70% loan</strong> against their recurring deposit investment. Loan applications can be made as follows:
                    <ul class="dds-terms-sublist">
                        <li><strong>Monthly Deposits:</strong> Available after six installments.</li>
                        <li><strong>Quarterly Deposits:</strong> Available after four installments.</li>
                        <li><strong>Half-Yearly Deposits:</strong> Available after two installments.</li>
                    </ul>
                </li>
                <li><strong>Interest Payment:</strong> Interest on recurring deposits will be paid <strong>quarterly</strong>.</li>
                <li><strong>Renewal of Deposits:</strong> Recurring deposits will be <strong>automatically</strong> renewed at maturity unless <strong>specified otherwise</strong> by the member. Renewal will be at the prevailing <strong>interest rates</strong>.</li>
                <li><strong>Tax Implications:</strong> Interest earned on recurring deposits may be subject to tax as per applicable laws. Members should consult a <strong>tax advisor</strong> for details.</li>
                <li><strong>Nomination Facility:</strong> Members may appoint a <strong>nominee</strong> for their <strong>recurring deposit accounts</strong> to ensure a smooth transfer in the event of the <strong>account holder&apos;s death</strong>.</li>
                <li><strong>Early Closure:</strong> Early closure of recurring deposits may attract penalties as per the <strong>society&apos;s policy</strong>, in addition to the interest adjustments mentioned.</li>
                <li><strong>Contact Information:</strong> For queries related to recurring deposits, members may contact our customer service department at <a href="tel:+919640942443">+91 9640942443</a>, <a href="tel:+918142851404">+91 8142851404</a>, or <a href="mailto:jayalakshmicooperativebankltd@gmail.com">jayalakshmicooperativebankltd@gmail.com</a>.</li>
                <li><strong>Changes in Terms:</strong> The <strong>terms and conditions</strong> related to recurring deposits are subject to change at the discretion of <strong>JAYALAKSHMI MUTUALLY AIDED COOPERATIVE THRIFT AND CREDIT SOCIETY LTD</strong>. Members will be notified of any changes in writing.</li>
                <li><strong>Governing Law:</strong> The terms and conditions of the recurring deposit account are governed by the laws of India. Any disputes arising from these terms will be subject to the <strong>jurisdiction</strong> of the courts in <strong>Visakhapatnam</strong>.</li>
            </ol>
        </section>

        <section class="dds-explore" aria-labelledby="rd-explore-heading">
            <h2 id="rd-explore-heading" class="dds-explore-title">Explore Our Products</h2>
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
                        <img src="{{ asset('images/cal.png') }}" alt="" onerror="this.style.display='none';">
                    </div>
                    <h3 class="dds-product-card-title">Monthly Income Scheme - MIS</h3>
                    <p class="dds-product-card-desc">MIS is a deposit plan where you invest a lump sum and receive fixed monthly income through interest.</p>
                    <a href="{{ route('services.monthly-income-scheme') }}" class="dds-product-card-link">Explore</a>
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
