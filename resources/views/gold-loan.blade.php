<!DOCTYPE html>
<html lang="en" class="dds-page-root">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gold Loan - JAYALAKSHMI MUTUALLY AIDED COOPERATIVE</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}?v=gold-loan-v1">
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

        <section class="dds-hero" aria-labelledby="gl-hero-heading">
            <div class="dds-hero-text">
                <h1 id="gl-hero-heading" class="dds-hero-title">Gold Loan</h1>
                <p class="dds-hero-desc">A Gold Loan allows you to borrow money by pledging your gold as security and repay the amount with interest within a fixed tenure.</p>
                <div class="dds-hero-actions">
                    <a href="{{ url('/contact') }}" class="dds-btn dds-btn-primary">Apply Now</a>
                    <a href="{{ url('/contact') }}" class="dds-btn dds-btn-outline">Contact us</a>
                </div>
            </div>
            <div class="dds-hero-visual">
                <img src="{{ asset('images/women.png') }}" alt="Gold loan" class="dds-hero-img" loading="eager" decoding="async" width="520" height="420" onerror="this.src='{{ asset('images/money.jpg') }}';">
            </div>
        </section>

        <hr class="dds-rule" aria-hidden="true">

        <section class="dds-terms" aria-labelledby="gl-terms-heading">
            <h2 id="gl-terms-heading" class="dds-terms-title">Terms and Conditions:</h2>
            <ol class="dds-terms-list">
                <li><strong>Nature of Loan:</strong> A secured loan against pledge of gold jewellery/ornaments; gold remains in custody of the institution as per policy.</li>
                <li><strong>Valuation:</strong> Loan amount is based on purity and weight assessed at approved rates; valuation norms may be revised periodically.</li>
                <li><strong>Nomination &amp; KYC:</strong> Borrowers must complete KYC and may register nomination as per rules.</li>
                <li><strong>Tenure &amp; Interest:</strong> Tenure and interest rate are fixed as per product; interest is payable as per agreed frequency.</li>
                <li><strong>Repayment &amp; Closure:</strong> Loan may be closed on repayment of principal and interest; gold is released upon full settlement.</li>
                <li><strong>Charges:</strong> Processing, appraisal, and other charges (if any) are disclosed before sanction.</li>
                <li><strong>NPA &amp; Auction:</strong> In case of default, pledged gold may be liquidated as per policy and applicable law after due notice.</li>
                <li><strong>Transparency:</strong> Key terms, charges, and repayment obligations are communicated in writing.</li>
                <li><strong>Contact:</strong> <a href="tel:+919640942443">+91 9640942443</a>, <a href="tel:+918142851404">+91 8142851404</a>, <a href="mailto:jayalakshmicooperativebankltd@gmail.com">jayalakshmicooperativebankltd@gmail.com</a>.</li>
                <li><strong>Governing Law:</strong> Governed by India laws and applicable RBI/cooperative norms.</li>
            </ol>
        </section>

        @include('partials.loan-explore-loans')
    </div>
</main>

@include('partials.loan-page-footer')

</body>
</html>
