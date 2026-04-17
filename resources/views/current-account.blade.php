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
                <li>
                    <strong>Account Opening &amp; Eligibility:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Current Accounts may be opened by individuals, proprietorships, partnerships, companies, and other business entities.</li>
                        <li>The account shall be opened only after completion of KYC (Know Your Customer) verification and submission of required documents.</li>
                        <li>The institution reserves the right to accept or reject any application based on internal policies and due diligence.</li>
                    </ul>
                </li>
                <li>
                    <strong>Nature &amp; Purpose of Account:</strong>
                    <ul class="dds-terms-sublist">
                        <li>A Current Account is a non-interest-bearing demand deposit account primarily designed for business transactions and high-volume fund flows.</li>
                        <li>It allows unlimited deposits and withdrawals, subject to available balance.</li>
                    </ul>
                </li>
                <li>
                    <strong>Minimum Balance Requirement:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Customers are required to maintain a Minimum Average Balance (MAB) or Quarterly Average Balance (QAB) as specified by the institution.</li>
                        <li>Non-maintenance of the required balance may attract applicable penalties or service charges.</li>
                    </ul>
                </li>
                <li>
                    <strong>Deposits &amp; Withdrawals:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Deposits can be made through cash, cheque, NEFT/RTGS, or other approved channels.</li>
                        <li>Withdrawals can be made via cheque, withdrawal slip, ATM, or digital banking.</li>
                        <li>There is generally no restriction on the number of transactions, making it suitable for business operations.</li>
                    </ul>
                </li>
                <li>
                    <strong>Interest on Current Account:</strong>
                    <ul class="dds-terms-sublist">
                        <li>No interest is payable on Current Account balances, as per standard banking practice.</li>
                    </ul>
                </li>
                <li>
                    <strong>Charges &amp; Fees:</strong>
                    <ul class="dds-terms-sublist">
                        <li>The institution may levy charges for:</li>
                        <li>
                            <ul class="dds-terms-sublist">
                                <li>Non-maintenance of minimum balance</li>
                                <li>Cash handling beyond limits</li>
                                <li>Cheque book issuance</li>
                                <li>Transaction services</li>
                            </ul>
                        </li>
                        <li>Charges are subject to revision and will be communicated as per policy.</li>
                    </ul>
                </li>
                <li>
                    <strong>Account Operations:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Accounts may be operated:</li>
                        <li>
                            <ul class="dds-terms-sublist">
                                <li>Individually or jointly</li>
                                <li>By authorized signatories in case of firms/companies</li>
                            </ul>
                        </li>
                        <li>Mode of operation (e.g., Jointly, Either/Survivor) must be specified at the time of account opening.</li>
                    </ul>
                </li>
                <li>
                    <strong>Regulatory Guidelines (RBI Compliance):</strong>
                    <ul class="dds-terms-sublist">
                        <li>Opening and operation of Current Accounts are subject to RBI guidelines on credit exposure and account monitoring.</li>
                        <li>Banks may restrict opening of current accounts for customers having existing Cash Credit (CC) or Overdraft (OD) facilities with other banks.</li>
                        <li>For large borrowers, accounts may be operated under escrow or monitoring mechanisms to ensure financial discipline.</li>
                    </ul>
                </li>
                <li>
                    <strong>Transaction Monitoring &amp; Compliance:</strong>
                    <ul class="dds-terms-sublist">
                        <li>All transactions are subject to monitoring as per regulatory norms to prevent misuse and ensure compliance with applicable laws (e.g., AML, FEMA).</li>
                    </ul>
                </li>
                <li>
                    <strong>Dormant / Inactive Accounts:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Accounts with no transactions for a specified period may be classified as inactive or dormant.</li>
                        <li>Reactivation requires proper verification and customer request.</li>
                    </ul>
                </li>
                <li value="10">
                    <strong>Account Closure:</strong>
                    <ul class="dds-terms-sublist">
                        <li>The account holder may close the account by submitting a written request.</li>
                        <li>The institution reserves the right to close accounts in case of:</li>
                        <li>
                            <ul class="dds-terms-sublist">
                                <li>Policy violations</li>
                                <li>Suspicious transactions</li>
                                <li>Regulatory non-compliance</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <strong>Amendments &amp; Governing Law:</strong>
                    <ul class="dds-terms-sublist">
                        <li>These terms are governed by applicable banking laws and RBI regulations.</li>
                        <li>The institution reserves the right to modify terms and conditions from time to time.</li>
                    </ul>
                </li>
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
