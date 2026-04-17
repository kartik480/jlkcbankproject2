<!DOCTYPE html>
<html lang="en" class="dds-page-root">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Savings Account - JAYALAKSHMI MUTUALLY AIDED COOPERATIVE</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}?v=savings-account-v1">
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

        <section class="dds-hero" aria-labelledby="sa-hero-heading">
            <div class="dds-hero-text">
                <h1 id="sa-hero-heading" class="dds-hero-title">Savings Account</h1>
                <p class="dds-hero-desc">A Savings Account is an account where you keep money safely and earn interest on it.</p>
                <div class="dds-hero-actions">
                    <a href="{{ url('/contact') }}" class="dds-btn dds-btn-primary">Apply Now</a>
                    <a href="{{ url('/contact') }}" class="dds-btn dds-btn-outline">Contact us</a>
                </div>
            </div>
            <div class="dds-hero-visual">
                <img src="{{ asset('images/boy.png') }}" alt="Savings account member" class="dds-hero-img" loading="eager" decoding="async" width="520" height="420" onerror="this.src='{{ asset('images/money.jpg') }}';">
            </div>
        </section>

        <hr class="dds-rule" aria-hidden="true">

        <section class="dds-terms" aria-labelledby="sa-terms-heading">
            <h2 id="sa-terms-heading" class="dds-terms-title">Terms and Conditions:</h2>
            <ol class="dds-terms-list">
                <li>
                    <strong>Account Opening &amp; Eligibility:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Savings Accounts may be opened by individuals, jointly by multiple individuals, or by a guardian on behalf of a minor.</li>
                        <li>The account shall be opened only after completion of KYC (Know Your Customer) verification as per regulatory guidelines.</li>
                        <li>The institution reserves the right to accept or reject any application based on internal policies.</li>
                    </ul>
                </li>
                <li>
                    <strong>Nature &amp; Usage of Account:</strong>
                    <ul class="dds-terms-sublist">
                        <li>A Savings Account is intended for personal savings purposes only and not for business or commercial transactions</li>
                        <li>Misuse of the account for business activities may result in restrictions or closure of the account.</li>
                    </ul>
                </li>
                <li>
                    <strong>Minimum Balance Requirement:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Customers must maintain a Minimum Average Balance (MAB) as specified by the institution.</li>
                        <li>The minimum balance may vary depending on account type, location, or services offered.</li>
                        <li>Non-maintenance may attract applicable charges as per the schedule of fees.</li>
                    </ul>
                </li>
                <li>
                    <strong>Deposits &amp; Withdrawals:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Deposits can be made through cash, cheque, electronic transfer, or other approved modes.</li>
                        <li>Withdrawals may be carried out via cheque, withdrawal slip, ATM, or digital banking.</li>
                        <li>The bank may impose limits on the number or value of withdrawals within a specified period.</li>
                    </ul>
                </li>
                <li>
                    <strong>Interest on Savings Account:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Interest shall be paid at rates determined by the institution, in line with regulatory guidelines.</li>
                        <li>Interest is typically calculated on daily closing balance and credited periodically.</li>
                        <li>Interest rates are subject to change from time to time.</li>
                    </ul>
                </li>
                <li>
                    <strong>Charges &amp; Fees:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Non-maintenance of minimum balance</li>
                        <li>Excess transactions</li>
                        <li>Issuance of cheque books, cards, or statements</li>
                    </ul>
                    All applicable charges will be communicated transparently and may be revised periodically.
                </li>
                <li>
                    <strong>Account Operations:</strong>
                    <ul class="dds-terms-sublist">
                        <li><strong>Accounts may be operated:</strong> Singly or jointly (as per mandate such as Either/Survivor, Joint, etc.)</li>
                        <li>Customers may authorize a third party via Power of Attorney, subject to approval.</li>
                        <li>The institution may provide debit cards, cheque books, and digital banking facilities.</li>
                    </ul>
                </li>
                <li>
                    <strong>Dormant / Inoperative Accounts:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Accounts with no customer-initiated transactions for a specified period (generally 12-24 months) may be classified as inactive or dormant.</li>
                        <li>Reactivation requires customer request and verification as per bank policy.</li>
                    </ul>
                </li>
                <li>
                    <strong>Nomination Facility:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Account holders are encouraged to register a nominee for settlement of funds in case of unforeseen events.</li>
                        <li>Nomination can be added, modified, or cancelled as per applicable procedures.</li>
                    </ul>
                </li>
                <li>
                    <strong>Account Closure:</strong>
                    <ul class="dds-terms-sublist">
                        <li>The account holder may close the account by submitting a written request.</li>
                        <li>The institution reserves the right to close accounts in case of:</li>
                        <li>
                            <ul class="dds-terms-sublist">
                                <li>Misuse</li>
                                <li>Non-compliance with regulations</li>
                                <li>Unsatisfactory account conduct</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <strong>Regulatory Compliance:</strong>
                    <ul class="dds-terms-sublist">
                        <li>All Savings Accounts are governed by rules, circulars, and directions issued by the Reserve Bank of India and applicable laws.</li>
                        <li>The institution may amend these terms from time to time to comply with regulatory changes.</li>
                    </ul>
                </li>
            </ol>
        </section>

        <section class="dds-explore" aria-labelledby="sa-explore-heading">
            <h2 id="sa-explore-heading" class="dds-explore-title">Explore Our Products</h2>
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
                    <a href="{{ url('/services') }}#main-products" class="dds-product-card-link">Explore</a>
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
