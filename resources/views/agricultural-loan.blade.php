<!DOCTYPE html>
<html lang="en" class="dds-page-root">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agricultural Loan - JAYALAKSHMI MUTUALLY AIDED COOPERATIVE</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}?v=agricultural-loan-v1">
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

        <section class="dds-hero" aria-labelledby="agl-hero-heading">
            <div class="dds-hero-text">
                <h1 id="agl-hero-heading" class="dds-hero-title">Agricultural Loan</h1>
                <p class="dds-hero-desc">An Agricultural Loan provides financial support to farmers for cultivation, equipment, and other farming activities.</p>
                <div class="dds-hero-actions">
                    <a href="{{ url('/contact') }}" class="dds-btn dds-btn-primary">Apply Now</a>
                    <a href="{{ url('/contact') }}" class="dds-btn dds-btn-outline">Contact us</a>
                </div>
            </div>
            <div class="dds-hero-visual">
                <img src="{{ asset('images/women.png') }}" alt="Agricultural loan" class="dds-hero-img" loading="eager" decoding="async" width="520" height="420" onerror="this.src='{{ asset('images/money.jpg') }}';">
            </div>
        </section>

        <hr class="dds-rule" aria-hidden="true">

        <section class="dds-terms" aria-labelledby="agl-terms-heading">
            <h2 id="agl-terms-heading" class="dds-terms-title">Terms and Conditions:</h2>
            <ol class="dds-terms-list">
                <li><strong>Eligibility &amp; Purpose:</strong> Loans are offered to farmers and agri-allied borrowers for crop production, farm development, equipment, and allied activities as per policy.</li>
                <li><strong>Documentation:</strong> Valid KYC, land/cultivation records (where applicable), income proof, and other documents as required for assessment.</li>
                <li><strong>Loan Amount &amp; Tenure:</strong> Sanctioned based on scale of finance, repayment capacity, and collateral/security as per norms.</li>
                <li><strong>Interest &amp; Charges:</strong> Rates and charges are disclosed upfront and governed by applicable policy and regulatory guidance.</li>
                <li><strong>Repayment:</strong> Structured as per crop cycle or agreed schedule; timely repayment is required to avoid penal interest.</li>
                <li><strong>Security:</strong> May include hypothecation of crops, mortgage/charge on land, or other collateral as per sanction terms.</li>
                <li><strong>Insurance:</strong> Where applicable, borrowers may be required to comply with crop/asset insurance norms as per policy.</li>
                <li><strong>Default &amp; Recovery:</strong> Non-payment may attract penal charges and recovery action as per applicable law and policy.</li>
                <li><strong>Contact:</strong> For queries, contact <a href="tel:+919640942443">+91 9640942443</a>, <a href="tel:+918142851404">+91 8142851404</a>, or <a href="mailto:jayalakshmicooperativebankltd@gmail.com">jayalakshmicooperativebankltd@gmail.com</a>.</li>
                <li><strong>Governing Law:</strong> Subject to applicable laws in India and RBI/cooperative guidelines where relevant.</li>
            </ol>
        </section>

        @include('partials.loan-explore-loans')
    </div>
</main>

@include('partials.loan-page-footer')

</body>
</html>
