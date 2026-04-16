<!DOCTYPE html>
<html lang="en" class="dds-page-root">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Loan - JAYALAKSHMI MUTUALLY AIDED COOPERATIVE</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}?v=home-loan-v1">
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

        <section class="dds-hero" aria-labelledby="hl-hero-heading">
            <div class="dds-hero-text">
                <h1 id="hl-hero-heading" class="dds-hero-title">Home Loan</h1>
                <p class="dds-hero-desc">A Home Loan is money borrowed from a bank to buy or build a house, which is repaid in monthly installments with interest.</p>
                <div class="dds-hero-actions">
                    <a href="{{ url('/contact') }}" class="dds-btn dds-btn-primary">Apply Now</a>
                    <a href="{{ url('/contact') }}" class="dds-btn dds-btn-outline">Contact us</a>
                </div>
            </div>
            <div class="dds-hero-visual">
                <img src="{{ asset('images/women.png') }}" alt="Home loan" class="dds-hero-img" loading="eager" decoding="async" width="520" height="420" onerror="this.src='{{ asset('images/money.jpg') }}';">
            </div>
        </section>

        <hr class="dds-rule" aria-hidden="true">

        <section class="dds-terms" aria-labelledby="hl-terms-heading">
            <h2 id="hl-terms-heading" class="dds-terms-title">Terms and Conditions:</h2>
            <ol class="dds-terms-list">
                <li>
                    <strong>Loan Nature &amp; Eligibility:</strong>
                    <ul class="dds-terms-sublist">
                        <li>The loan is a secured loan for purchase, construction, or renovation of residential property.</li>
                        <li>Eligibility criteria include income, credit score, age, and employment stability.</li>
                        <li>The institution reserves the right to approve or reject applications based on internal policies.</li>
                    </ul>
                </li>
                <li>
                    <strong>Loan-to-Value (LTV) &amp; Margin:</strong>
                    <ul class="dds-terms-sublist">
                        <li>The loan is a percentage of the property value as per sanction norms.</li>
                        <li>Typically, institutions finance a substantial portion of the property cost, with the borrower contributing the balance as down payment.</li>
                    </ul>
                </li>
                <li>
                    <strong>Documentation &amp; Verification:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Required documents include KYC (Aadhaar, PAN), income proof (salary slips/ITR), and property documents.</li>
                        <li>The property will undergo legal and technical verification as per policy.</li>
                    </ul>
                </li>
                <li>
                    <strong>Interest Rate:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Rates can be fixed or floating.</li>
                        <li>Floating rates may be linked to benchmarks as applicable.</li>
                        <li>Lenders must inform borrowers of rate changes as per regulatory requirements.</li>
                    </ul>
                </li>
                <li>
                    <strong>Loan Tenure &amp; Repayment:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Tenure may typically range from a longer period as per eligibility and sanction.</li>
                        <li>Repayment is via EMIs (principal + interest).</li>
                        <li>Borrowers may choose to increase EMI or extend tenure if rates change, subject to agreement.</li>
                    </ul>
                </li>
                <li>
                    <strong>Prepayment &amp; Foreclosure:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Partial or full prepayment may be allowed as per policy.</li>
                        <li>Per RBI guidelines, there are generally no charges for prepayment of floating-rate home loans for individuals.</li>
                    </ul>
                </li>
                <li>
                    <strong>Charges &amp; Fees:</strong>
                    <ul class="dds-terms-sublist">
                        <li>May include processing fees, legal/valuation charges, documentation charges, and late payment penalties.</li>
                        <li>All charges are disclosed before sanctioning.</li>
                    </ul>
                </li>
                <li>
                    <strong>Insurance (Optional but Recommended):</strong>
                    <ul class="dds-terms-sublist">
                        <li>Insurance may be recommended to protect the borrower&apos;s family; terms depend on product.</li>
                    </ul>
                </li>
                <li>
                    <strong>Default &amp; Recovery:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Non-payment may lead to penal charges, credit score impact, and NPA classification.</li>
                        <li>Legal recovery proceedings may be initiated as per law.</li>
                    </ul>
                </li>
                <li><strong>Transparency &amp; Borrower Rights:</strong> Lenders provide a loan agreement and Key Facts Statement (KFS) with rates and schedules. Borrowers receive periodic updates on balance and interest where applicable.</li>
                <li>
                    <strong>Property Ownership &amp; Security:</strong>
                    <ul class="dds-terms-sublist">
                        <li>The property is mortgaged to the lender until full repayment.</li>
                        <li>Original documents may be held as security as per policy.</li>
                    </ul>
                </li>
                <li><strong>Amendments &amp; Regulatory Compliance:</strong> Home loans are governed by RBI guidelines and applicable Indian law. Terms are subject to change based on regulations.</li>
            </ol>
        </section>

        @include('partials.loan-explore-loans')
    </div>
</main>

@include('partials.loan-page-footer')

</body>
</html>
