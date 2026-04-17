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
            <h2 id="hl-terms-heading" class="dds-terms-title dds-terms-title--with-rule">Terms and Conditions:</h2>
            <hr class="dds-rule dds-terms-title-rule" aria-hidden="true">
            <ol class="dds-terms-list">
                <li>
                    <strong>Loan Nature &amp; Eligibility:</strong>
                    <ul class="dds-terms-sublist">
                        <li>A Home Loan is a secured loan provided for the purchase, construction, or renovation of residential property.</li>
                        <li>Eligibility is based on:
                            <ul class="dds-terms-sublist">
                                <li>Income and repayment capacity</li>
                                <li>Credit score and financial history</li>
                                <li>Age and employment/business stability</li>
                            </ul>
                        </li>
                        <li>The institution reserves the right to approve or reject any application as per internal credit policies.</li>
                    </ul>
                </li>
                <li>
                    <strong>Loan-to-Value (LTV) &amp; Margin:</strong>
                    <ul class="dds-terms-sublist">
                        <li>The loan amount is sanctioned based on the Loan-to-Value (LTV) ratio, i.e., a percentage of the property value.</li>
                        <li>Typically, banks finance 75% to 90% of the property cost, and the remaining amount must be paid by the borrower as margin/down payment.</li>
                    </ul>
                </li>
                <li>
                    <strong>Documentation &amp; Verification:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Applicants must submit valid:
                            <ul class="dds-terms-sublist">
                                <li>KYC documents (Aadhaar, PAN, etc.)</li>
                                <li>Income proof (salary slips / ITR)</li>
                                <li>Property documents (title, approvals, etc.)</li>
                            </ul>
                        </li>
                        <li>The property will be subject to legal and technical verification before loan approval.</li>
                    </ul>
                </li>
                <li>
                    <strong>Interest Rate:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Interest rates may be fixed or floating, as per the borrower&apos;s choice.</li>
                        <li>Floating rates are linked to benchmark rates and may change over time.</li>
                        <li>The lender must inform borrowers about changes in interest rates and their impact on EMI or tenure.</li>
                    </ul>
                </li>
                <li>
                    <strong>Loan Tenure &amp; Repayment:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Loan tenure generally ranges from 10 to 30 years, depending on eligibility and policy.</li>
                        <li>Repayment is made through Equated Monthly Instalments (EMIs) consisting of principal and interest.</li>
                        <li>Borrowers may choose to:
                            <ul class="dds-terms-sublist">
                                <li>Increase EMI</li>
                                <li>Extend tenure</li>
                                <li>Or both, in case of interest rate changes</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <strong>Prepayment &amp; Foreclosure:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Borrowers may prepay or foreclose the loan partially or fully.</li>
                        <li>As per RBI guidelines:
                            <ul class="dds-terms-sublist">
                                <li>No prepayment/foreclosure charges are applicable on floating rate home loans for individuals.</li>
                            </ul>
                        </li>
                        <li>Terms for fixed-rate loans will be disclosed in the loan agreement.</li>
                    </ul>
                </li>
                <li>
                    <strong>Charges &amp; Fees:</strong>
                    <ul class="dds-terms-sublist">
                        <li>The borrower shall pay applicable charges, including:
                            <ul class="dds-terms-sublist">
                                <li>Processing fees</li>
                                <li>Legal &amp; valuation charges</li>
                                <li>Documentation charges</li>
                                <li>Late payment / penal charges</li>
                            </ul>
                        </li>
                        <li>All charges will be clearly disclosed before loan sanction.</li>
                    </ul>
                </li>
                <li>
                    <strong>Insurance (Optional but Recommended):</strong>
                    <ul class="dds-terms-sublist">
                        <li>Home loan insurance is not mandatory but is recommended to protect the borrower&apos;s family in case of unforeseen events.</li>
                    </ul>
                </li>
                <li>
                    <strong>Default &amp; Recovery:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Delay or non-payment of EMIs may result in:
                            <ul class="dds-terms-sublist">
                                <li>Penal charges</li>
                                <li>Negative impact on credit score</li>
                                <li>Loan classification as Non-Performing Asset (NPA)</li>
                            </ul>
                        </li>
                        <li>In case of continued default, recovery proceedings may be initiated as per applicable laws.</li>
                    </ul>
                </li>
                <li>
                    <strong>Transparency &amp; Borrower Rights:</strong>
                    <ul class="dds-terms-sublist">
                        <li>The lender shall provide a loan agreement and Key Facts Statement (KFS) detailing:
                            <ul class="dds-terms-sublist">
                                <li>Interest rate</li>
                                <li>EMI schedule</li>
                                <li>Total repayment amount</li>
                            </ul>
                        </li>
                        <li>Borrowers must be informed periodically about:
                            <ul class="dds-terms-sublist">
                                <li>Outstanding balance</li>
                                <li>Interest paid</li>
                                <li>Remaining tenure</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <strong>Property Ownership &amp; Security:</strong>
                    <ul class="dds-terms-sublist">
                        <li>The property financed will be mortgaged to the lender until full repayment of the loan.</li>
                        <li>Original property documents will be retained by the lender as security.</li>
                    </ul>
                </li>
                <li>
                    <strong>Amendments &amp; Regulatory Compliance:</strong>
                    <ul class="dds-terms-sublist">
                        <li>All Home Loans are governed by RBI guidelines and applicable laws in India.</li>
                        <li>Terms and conditions may be revised from time to time in line with regulatory changes.</li>
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
