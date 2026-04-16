<!DOCTYPE html>
<html lang="en" class="dds-page-root">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Business Loan - JAYALAKSHMI MUTUALLY AIDED COOPERATIVE</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}?v=business-loan-v1">
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

        <section class="dds-hero" aria-labelledby="bl-hero-heading">
            <div class="dds-hero-text">
                <h1 id="bl-hero-heading" class="dds-hero-title">Business Loan</h1>
                <p class="dds-hero-desc">A Business Loan is money borrowed from a bank or lender to support business needs like growth, operations, or expansion, which is repaid over time with interest.</p>
                <div class="dds-hero-actions">
                    <a href="{{ url('/contact') }}" class="dds-btn dds-btn-primary">Apply Now</a>
                    <a href="{{ url('/contact') }}" class="dds-btn dds-btn-outline">Contact us</a>
                </div>
            </div>
            <div class="dds-hero-visual">
                <img src="{{ asset('images/women.png') }}" alt="Business loan" class="dds-hero-img" loading="eager" decoding="async" width="520" height="420" onerror="this.src='{{ asset('images/money.jpg') }}';">
            </div>
        </section>

        <hr class="dds-rule" aria-hidden="true">

        <section class="dds-terms" aria-labelledby="bl-terms-heading">
            <h2 id="bl-terms-heading" class="dds-terms-title">Terms and Conditions:</h2>
            <ol class="dds-terms-list">
                <li>
                    <strong>Loan Nature &amp; Eligibility:</strong>
                    <ul class="dds-terms-sublist">
                        <li>A Business Loan is offered to proprietorships, partnerships, companies, and MSMEs for business-related financial needs.</li>
                        <li>Loans may be secured (with collateral) or unsecured (based on creditworthiness).</li>
                        <li>Eligibility is determined based on: business vintage and turnover; financial statements and repayment capacity; credit history of the business and promoters.</li>
                    </ul>
                </li>
                <li>
                    <strong>Purpose of Loan:</strong> Business Loans are granted for legitimate business purposes such as: working capital requirements; business expansion; purchase of equipment or inventory; cash flow management.
                </li>
                <li>
                    <strong>Documentation &amp; KYC:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Applicants must submit: KYC documents (PAN, Aadhaar, etc.); business proof (GST, registration certificate, licenses); financial documents (ITR, bank statements, balance sheet).</li>
                        <li>All applications are subject to verification and due diligence.</li>
                    </ul>
                </li>
                <li>
                    <strong>Loan Amount &amp; Tenure:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Loan amount and tenure are based on: business performance; credit profile; nature of the loan (term loan / working capital).</li>
                        <li>The sanction terms will be clearly mentioned in the loan agreement.</li>
                    </ul>
                </li>
                <li>
                    <strong>Interest Rate:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Interest rates may be fixed or floating, depending on lender policy.</li>
                        <li>Rates are determined based on risk assessment, credit profile, and market conditions.</li>
                        <li>RBI allows lenders flexibility in setting spreads, with provisions for revisions over time.</li>
                    </ul>
                </li>
                <li>
                    <strong>Repayment Terms:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Loans are repaid through: EMIs (term loans); Overdraft/Cash Credit (working capital).</li>
                        <li>The repayment schedule will be shared in the sanction letter and agreement.</li>
                        <li>Timely repayment is mandatory to maintain a good credit profile.</li>
                    </ul>
                </li>
                <li>
                    <strong>Charges &amp; Fees:</strong> Applicable charges may include: processing fees; documentation charges; penal interest for delayed payments; foreclosure/prepayment charges (if applicable). All charges must be disclosed upfront as per RBI transparency norms.
                </li>
                <li>
                    <strong>Prepayment &amp; Foreclosure:</strong> As per recent RBI directions: no prepayment charges on floating-rate loans for individuals and MSMEs (from 2024 onwards). Terms for other categories will be specified in the loan agreement.
                </li>
                <li>
                    <strong>Collateral &amp; Security:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Secured loans may require: property, machinery, or other assets as collateral.</li>
                        <li>Unsecured loans are granted based on business cash flow and creditworthiness.</li>
                        <li>The lender may create a charge on assets until full repayment.</li>
                    </ul>
                </li>
                <li>
                    <strong>Default &amp; Asset Classification:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Delay or non-payment may result in: penal charges; negative credit impact; legal recovery proceedings.</li>
                        <li>As per RBI norms: accounts may be classified as SMA (Special Mention Account) or NPA (Non-Performing Asset) in case of default.</li>
                    </ul>
                </li>
                <li>
                    <strong>Transparency &amp; Fair Practices:</strong> Lenders must: provide a sanction letter with all terms and conditions; clearly disclose interest rates, charges, and repayment schedule. Borrowers must formally accept the terms before disbursement.
                </li>
                <li>
                    <strong>Regulatory Compliance:</strong> Business Loans are governed by: RBI guidelines; Banking Regulation Act, 1949; applicable financial and digital lending laws. Lenders must follow fair lending, transparency, and data protection practices.
                </li>
            </ol>
        </section>

        @include('partials.loan-explore-loans')
    </div>
</main>

@include('partials.loan-page-footer')

</body>
</html>
