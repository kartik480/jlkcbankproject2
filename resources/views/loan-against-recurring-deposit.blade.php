<!DOCTYPE html>
<html lang="en" class="dds-page-root">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recurring Deposit Loan - JAYALAKSHMI MUTUALLY AIDED COOPERATIVE</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}?v=loan-against-rd-v1">
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

        <section class="dds-hero" aria-labelledby="lrd-hero-heading">
            <div class="dds-hero-text">
                <h1 id="lrd-hero-heading" class="dds-hero-title">Recurring Deposit Loan</h1>
                <p class="dds-hero-desc">A Recurring Deposit Loan allows you to borrow money against your RD savings without closing the deposit.</p>
                <div class="dds-hero-actions">
                    <a href="{{ url('/contact') }}" class="dds-btn dds-btn-primary">Apply Now</a>
                    <a href="{{ url('/contact') }}" class="dds-btn dds-btn-outline">Contact us</a>
                </div>
            </div>
            <div class="dds-hero-visual">
                <img src="{{ asset('images/women.png') }}" alt="Loan against recurring deposit" class="dds-hero-img" loading="eager" decoding="async" width="520" height="420" onerror="this.src='{{ asset('images/money.jpg') }}';">
            </div>
        </section>

        <hr class="dds-rule" aria-hidden="true">

        <section class="dds-terms" aria-labelledby="lrd-terms-heading">
            <h2 id="lrd-terms-heading" class="dds-terms-title">Terms and Conditions:</h2>
            <ol class="dds-terms-list">
                <li><strong>Eligibility:</strong> Offered to members maintaining an active Recurring Deposit with the institution, subject to minimum balance and tenure norms.</li>
                <li><strong>Loan Amount:</strong> Typically a percentage of the deposit balance or accrued value as per policy; sanction is subject to internal assessment.</li>
                <li><strong>Interest &amp; Charges:</strong> Rates and applicable charges are disclosed in the sanction letter and agreement.</li>
                <li><strong>Nature of Security:</strong> The RD is pledged as security; the deposit continues to earn interest unless terms state otherwise.</li>
                <li><strong>Repayment:</strong> Structured as EMIs or bullet repayment as per product; default may lead to adjustment against the RD.</li>
                <li><strong>Prepayment:</strong> Allowed as per policy; charges (if any) will be clearly stated.</li>
                <li><strong>Documentation:</strong> KYC, RD details, and loan agreement execution are mandatory.</li>
                <li><strong>Default:</strong> Non-payment may result in adjustment of outstanding dues from the RD proceeds and impact credit record.</li>
                <li><strong>Contact:</strong> <a href="tel:+919640942443">+91 9640942443</a>, <a href="tel:+918142851404">+91 8142851404</a>, <a href="mailto:jayalakshmicooperativebankltd@gmail.com">jayalakshmicooperativebankltd@gmail.com</a>.</li>
                <li><strong>Governing Law:</strong> Subject to applicable laws and RBI/cooperative guidelines.</li>
            </ol>
        </section>

        @include('partials.loan-explore-loans')
    </div>
</main>

@include('partials.loan-page-footer')

</body>
</html>
