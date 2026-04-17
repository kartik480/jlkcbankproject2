<!DOCTYPE html>
<html lang="en" class="dds-page-root">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Auto Loan - JAYALAKSHMI MUTUALLY AIDED COOPERATIVE</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}?v=auto-loan-v1">
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

        <section class="dds-hero" aria-labelledby="al-hero-heading">
            <div class="dds-hero-text">
                <h1 id="al-hero-heading" class="dds-hero-title">Auto Loan</h1>
                <p class="dds-hero-desc">An Auto Loan is money borrowed from a bank to buy a vehicle, which you repay in monthly installments with interest.</p>
                <div class="dds-hero-actions">
                    <a href="{{ url('/contact') }}" class="dds-btn dds-btn-primary">Apply Now</a>
                    <a href="{{ url('/contact') }}" class="dds-btn dds-btn-outline">Contact us</a>
                </div>
            </div>
            <div class="dds-hero-visual">
                <img src="{{ asset('images/women.png') }}" alt="Auto loan" class="dds-hero-img" loading="eager" decoding="async" width="520" height="420" onerror="this.src='{{ asset('images/money.jpg') }}';">
            </div>
        </section>

        <hr class="dds-rule" aria-hidden="true">

        <section class="dds-terms" aria-labelledby="al-terms-heading">
            <h2 id="al-terms-heading" class="dds-terms-title">Terms and Conditions:</h2>
            <ol class="dds-terms-list">
                <li>
                    <strong>Loan Nature &amp; Eligibility:</strong>
                    <ul class="dds-terms-sublist">
                        <li>An Auto Loan is a secured loan provided for the purchase of new or used vehicles.</li>
                        <li>The vehicle financed will act as security (hypothecation) to the lender until full repayment.</li>
                        <li>Eligibility depends on:
                            <ul class="dds-terms-sublist">
                                <li>Income and repayment capacity</li>
                                <li>Credit score and financial history</li>
                                <li>Employment or business stability</li>
                            </ul>
                        </li>
                        <li>The institution reserves the right to approve or reject applications as per internal credit policies.</li>
                    </ul>
                </li>
                <li>
                    <strong>Loan Amount &amp; Margin:</strong>
                    <ul class="dds-terms-sublist">
                        <li>The loan amount is sanctioned based on the on-road price of the vehicle and borrower eligibility.</li>
                        <li>Typically, banks finance 80%-90% of the vehicle cost, and the remaining amount is paid by the borrower as margin/down payment.</li>
                    </ul>
                </li>
                <li>
                    <strong>Documentation &amp; Verification:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Applicants must submit:
                            <ul class="dds-terms-sublist">
                                <li>KYC documents (Aadhaar, PAN, etc.)</li>
                                <li>Income proof (salary slips / bank statements / ITR)</li>
                                <li>Vehicle quotation/invoice</li>
                            </ul>
                        </li>
                        <li>The vehicle must be registered with the appropriate authority, and the lender&apos;s hypothecation charge must be endorsed in the RC (Registration Certificate).</li>
                    </ul>
                </li>
                <li>
                    <strong>Interest Rate:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Interest rates may be fixed or floating, depending on the lender&apos;s policy.</li>
                        <li>Rates are determined based on credit profile, loan tenure, and market conditions.</li>
                        <li>Interest is calculated on the outstanding loan amount.</li>
                    </ul>
                </li>
                <li>
                    <strong>Loan Tenure &amp; Repayment:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Loan tenure generally ranges from 1 to 7 years, depending on eligibility.</li>
                        <li>Repayment is done through Equated Monthly Instalments (EMIs) consisting of principal and interest.</li>
                        <li>Borrowers must ensure timely payment; repayment obligation continues irrespective of vehicle condition or delivery issues.</li>
                    </ul>
                </li>
                <li>
                    <strong>Charges &amp; Fees:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Applicable charges may include:
                            <ul class="dds-terms-sublist">
                                <li>Processing fees</li>
                                <li>Documentation charges</li>
                                <li>Late payment / penal charges</li>
                                <li>Prepayment / foreclosure charges</li>
                            </ul>
                        </li>
                        <li>All charges must be disclosed in the Key Facts Statement (KFS) before loan sanction.</li>
                    </ul>
                </li>
                <li>
                    <strong>Prepayment &amp; Foreclosure:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Borrowers may prepay or foreclose the loan, subject to terms specified by the lender.</li>
                        <li>Prepayment charges (if any) will be clearly mentioned in the loan agreement.</li>
                    </ul>
                </li>
                <li>
                    <strong>Insurance (Optional but Recommended):</strong>
                    <ul class="dds-terms-sublist">
                        <li>Comprehensive vehicle insurance is generally mandatory for the financed vehicle.</li>
                        <li>The insurance policy may be assigned in favor of the lender to protect against risks.</li>
                    </ul>
                </li>
                <li>
                    <strong>Ownership &amp; Security:</strong>
                    <ul class="dds-terms-sublist">
                        <li>The borrower is the owner of the vehicle; however, the lender holds a hypothecation right until the loan is fully repaid.</li>
                        <li>A No Objection Certificate (NOC) is issued after full repayment to remove hypothecation from the RC.</li>
                    </ul>
                </li>
                <li>
                    <strong>Default &amp; Recovery:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Delay or non-payment of EMIs may result in:
                            <ul class="dds-terms-sublist">
                                <li>Penal charges</li>
                                <li>Negative impact on credit score</li>
                                <li>Repossession of the vehicle (as per legal procedures)</li>
                            </ul>
                        </li>
                        <li>Continued default may lead to classification as Non-Performing Asset (NPA) and recovery proceedings.</li>
                    </ul>
                </li>
                <li>
                    <strong>Transparency &amp; Borrower Rights:</strong>
                    <ul class="dds-terms-sublist">
                        <li>The lender must provide:
                            <ul class="dds-terms-sublist">
                                <li>Loan agreement</li>
                                <li>EMI schedule</li>
                                <li>Key Facts Statement (KFS) with all charges and terms</li>
                            </ul>
                        </li>
                        <li>All terms must be communicated clearly before loan acceptance.</li>
                    </ul>
                </li>
                <li>
                    <strong>Amendments &amp; Regulatory Compliance:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Auto Loans are governed by RBI guidelines and applicable laws in India.</li>
                        <li>Terms and conditions may be revised from time to time as per regulatory changes.</li>
                    </ul>
                </li>
            </ol>
        </section>

        @include('partials.loan-explore-loans')
    </div>
</main>

@include('partials.loan-page-footer')

</body>
</html>
