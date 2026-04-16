<!DOCTYPE html>
<html lang="en" class="dds-page-root">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personal Loan - JAYALAKSHMI MUTUALLY AIDED COOPERATIVE</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}?v=personal-loan-v1">
    <script src="{{ asset('js/site-nav.js') }}" defer></script>
</head>
<body class="dds-page">

@include('partials.site-nav', ['navActive' => 'services'])

<main class="dds-main">
    <div class="dds-inner">
        <a href="{{ url('/services#loans') }}" class="dds-back">
            <span class="dds-back-icon" aria-hidden="true">&lt;</span>
            Back
        </a>

        <p class="dds-badge"><span class="dds-badge-dot" aria-hidden="true"></span> Loans</p>

        <section class="dds-hero" aria-labelledby="pl-hero-heading">
            <div class="dds-hero-text">
                <h1 id="pl-hero-heading" class="dds-hero-title">Personal Loan</h1>
                <p class="dds-hero-desc">A Personal Loan is money borrowed from a bank for personal needs, which you repay in fixed monthly installments with interest.</p>
                <div class="dds-hero-actions">
                    <a href="{{ url('/contact') }}" class="dds-btn dds-btn-primary">Apply Now</a>
                    <a href="{{ url('/contact') }}" class="dds-btn dds-btn-outline">Contact us</a>
                </div>
            </div>
            <div class="dds-hero-visual">
                <img src="{{ asset('images/women.png') }}" alt="Personal loan" class="dds-hero-img" loading="eager" decoding="async" width="520" height="420" onerror="this.src='{{ asset('images/money.jpg') }}';">
            </div>
        </section>

        <hr class="dds-rule" aria-hidden="true">

        <section class="dds-terms" aria-labelledby="pl-terms-heading">
            <h2 id="pl-terms-heading" class="dds-terms-title">Terms and Conditions:</h2>
            <ol class="dds-terms-list">
                <li>
                    <strong>Loan Nature &amp; Eligibility:</strong>
                    <ul class="dds-terms-sublist">
                        <li>A Personal Loan is an unsecured loan that does not require collateral or security.</li>
                        <li>Loans are offered to salaried or self-employed individuals based on income, credit profile, and repayment capacity.</li>
                        <li>The institution reserves the right to approve or reject applications based on internal credit policies.</li>
                    </ul>
                </li>
                <li>
                    <strong>Documentation &amp; KYC:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Applicants must submit valid KYC documents (ID proof, address proof, PAN, income proof, etc.).</li>
                        <li>All details must be accurate and verifiable; incorrect information may lead to rejection or cancellation.</li>
                    </ul>
                </li>
                <li>
                    <strong>Loan Amount &amp; Tenure:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Loan amount and tenure are determined based on eligibility, income, and credit score.</li>
                        <li>The tenure typically ranges from short-term to medium-term, depending on the lender&apos;s policy.</li>
                        <li>Loan approval is subject to internal assessment and regulatory compliance.</li>
                    </ul>
                </li>
                <li>
                    <strong>Interest Rate:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Interest rates are determined by the lender based on risk assessment and market conditions.</li>
                        <li>Rates are typically fixed or floating and are clearly disclosed before loan approval.</li>
                        <li>Interest is calculated on the outstanding loan balance.</li>
                    </ul>
                </li>
                <li>
                    <strong>Repayment (EMI):</strong>
                    <ul class="dds-terms-sublist">
                        <li>The loan shall be repaid in Equated Monthly Installments (EMIs), including principal and interest.</li>
                        <li>The repayment schedule will be shared in advance in the loan agreement.</li>
                        <li>Timely payment is mandatory to maintain a good credit record.</li>
                    </ul>
                </li>
                <li>
                    <strong>Charges &amp; Fees:</strong> The borrower shall pay applicable charges, including:
                    <ul class="dds-terms-sublist">
                        <li>Processing fees</li>
                        <li>Documentation charges</li>
                        <li>Late payment / penal charges</li>
                        <li>Prepayment / foreclosure charges (if applicable)</li>
                    </ul>
                    All charges must be clearly disclosed upfront as per RBI transparency norms.
                </li>
                <li>
                    <strong>Prepayment &amp; Foreclosure:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Borrowers may prepay or foreclose the loan, subject to terms specified by the lender.</li>
                        <li>Any applicable charges or conditions will be mentioned in the loan agreement.</li>
                    </ul>
                </li>
                <li>
                    <strong>Credit Assessment:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Loan approval depends on: income stability; employment/business profile; credit score/history.</li>
                        <li>A strong credit profile improves approval chances and may result in better interest rates.</li>
                    </ul>
                </li>
                <li>
                    <strong>Default &amp; Penalties:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Delay or non-payment of EMI may attract penal charges and additional interest.</li>
                        <li>Continuous default may lead to: negative credit score impact; legal recovery proceedings; classification as Non-Performing Asset (NPA) as per RBI norms.</li>
                    </ul>
                </li>
                <li><strong>Transparency &amp; Fair Practices:</strong> The lender shall provide a Key Facts Statement (KFS) with complete loan details, including interest, charges, and repayment schedule. All terms must be clearly communicated, ensuring fair and transparent lending practices.</li>
                <li><strong>Data Privacy &amp; Consent:</strong> Customer information shall be used only for loan processing and compliance purposes. Data will be handled in accordance with applicable privacy and regulatory guidelines.</li>
                <li><strong>Amendments &amp; Regulatory Compliance:</strong> All Personal Loans are governed by RBI guidelines and applicable laws. Terms and conditions may be revised from time to time as per regulatory updates.</li>
            </ol>
        </section>

        @include('partials.loan-explore-loans')
    </div>
</main>

@include('partials.loan-page-footer')

</body>
</html>
