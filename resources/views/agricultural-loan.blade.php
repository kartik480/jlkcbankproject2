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
                <li>
                    <strong>Loan Nature &amp; Eligibility:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Agricultural Loans are offered to farmers, agriculturists, and allied activity workers for farming and related purposes.</li>
                        <li>Eligibility depends on:
                            <ul class="dds-terms-sublist">
                                <li>Ownership or lease of agricultural land</li>
                                <li>Farming experience and activity type</li>
                                <li>Credit history and repayment capacity</li>
                            </ul>
                        </li>
                        <li>Loans may also be extended to Joint Liability Groups (JLGs) or Self-Help Groups (SHGs).</li>
                    </ul>
                </li>
                <li>
                    <strong>Purpose of Loan:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Loans are granted for agriculture and allied activities such as:
                            <ul class="dds-terms-sublist">
                                <li>Crop cultivation and seasonal expenses</li>
                                <li>Purchase of seeds, fertilizers, and equipment</li>
                                <li>Farm mechanization (tractors, irrigation systems)</li>
                                <li>Post-harvest and storage activities</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <strong>Types of Agricultural Loans:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Crop Loan (Kisan Credit Card - KCC)</li>
                        <li>Term Loan (long-term investment)</li>
                        <li>Working Capital Loan</li>
                        <li>Farm Equipment / Machinery Loan</li>
                        <li>Horticulture / Allied Activities Loan</li>
                    </ul>
                </li>
                <li>
                    <strong>Loan Amount &amp; Margin:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Loan amount depends on:
                            <ul class="dds-terms-sublist">
                                <li>Land holding</li>
                                <li>Crop type and scale of operations</li>
                                <li>Repayment capacity</li>
                            </ul>
                        </li>
                        <li>Margin requirements may apply based on loan size (e.g., nil for small loans, increasing for higher amounts)</li>
                    </ul>
                </li>
                <li>
                    <strong>Interest Rate:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Interest rates are determined as per:
                            <ul class="dds-terms-sublist">
                                <li>RBI priority sector lending norms</li>
                                <li>Government subsidy schemes (if applicable)</li>
                            </ul>
                        </li>
                        <li>Rates may vary depending on loan type and borrower category.</li>
                        <li>Interest is calculated on the outstanding loan amount.</li>
                    </ul>
                </li>
                <li>
                    <strong>Documentation &amp; Verification:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Applicants must submit:
                            <ul class="dds-terms-sublist">
                                <li>KYC documents (Aadhaar, PAN)</li>
                                <li>Land ownership or lease documents</li>
                                <li>Crop details / farming proof</li>
                                <li>Income or bank statements</li>
                            </ul>
                        </li>
                        <li>Applications are subject to verification and field inspection.</li>
                    </ul>
                </li>
                <li>
                    <strong>Charges &amp; Fees:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Applicabe charges may include:
                            <ul class="dds-terms-sublist">
                                <li>Processing fees</li>
                                <li>Documentation charges</li>
                                <li>Inspection charges</li>
                                <li>Penal charges for delayed payment</li>
                            </ul>
                        </li>
                        <li>Some schemes may offer zero or subsidized charges for small farmers.</li>
                    </ul>
                </li>
                <li>
                    <strong>Subsidies &amp; Government Schemes:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Agricultural Loans may be eligible for:
                            <ul class="dds-terms-sublist">
                                <li>Interest subvention schemes</li>
                                <li>Government subsidies for specific activities</li>
                            </ul>
                        </li>
                        <li>Benefits depend on applicable central/state schemes.</li>
                    </ul>
                </li>
                <li>
                    <strong>Security &amp; Collateral:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Loans may be:
                            <ul class="dds-terms-sublist">
                                <li>Secured (against land, crops, or assets)</li>
                                <li>Unsecured (for small-value loans under specific schemes)</li>
                            </ul>
                        </li>
                        <li>Land records may be hypothecated or mortgaged as security.</li>
                    </ul>
                </li>
                <li>
                    <strong>Default &amp; Recovery:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Delay or non-payment may result in:
                            <ul class="dds-terms-sublist">
                                <li>Penal intrest</li>
                                <li>Impact on credit score</li>
                                <li>Legal recovery proceedings</li>
                            </ul>
                        </li>
                        <li>Accounts may be clasified as NPA (Non-Performing Asset) as per RBI norms.</li>
                    </ul>
                </li>
                <li>
                    <strong>Transparency &amp; Fair Practices:</strong>
                    <ul class="dds-terms-sublist">
                        <li>The lender shall provide:
                            <ul class="dds-terms-sublist">
                                <li>Sanction letter with loan details</li>
                                <li>Repayment schedule</li>
                                <li>Complete disclosure of charges and terms</li>
                            </ul>
                        </li>
                        <li>Borrowers must accept terms before loan disbursement.</li>
                    </ul>
                </li>
                <li>
                    <strong>Amendments &amp; Regulatory Compliance:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Agricultural Loans are governed by:
                            <ul class="dds-terms-sublist">
                                <li>RBI priority sector lending guidelines</li>
                                <li>Government agricultural finance policies</li>
                            </ul>
                        </li>
                        <li>Terms may be revised from to time as per regulatory updates.</li>
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
