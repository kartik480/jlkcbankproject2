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
                <li>
                    <strong>Loan Nature &amp; Eligibility:</strong>
                    <ul class="dds-terms-sublist">
                        <li>A Gold Loan is a secured loan where gold jewellery or approved gold coins are pledged as collateral.</li>
                        <li>Eligble applicants include individuals with:
                            <ul class="dds-terms-sublist">
                                <li>Ownership of gold ornaments</li>
                                <li>Valid KYC documents</li>
                            </ul>
                        </li>
                        <li>Loans are granted based on gold purity, weight, and market value.</li>
                    </ul>
                </li>
                <li>
                    <strong>Acceptable Collateral:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Only gold jewellery and approved coins are accepted as collateral.</li>
                        <li>Loans are not permitted against:
                            <ul class="dds-terms-sublist">
                                <li>Gold bars/bullion</li>
                                <li>Digital gold, ETFs, or mutual funds</li>
                            </ul>
                        </li>
                        <li>The value is calculated based on pure gold content only (stones/gems excluded)</li>
                    </ul>
                </li>
                <li>
                    <strong>Loan Amount &amp; LTV Ratio:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Loan amount is determined by the Loan-to-Value (LTV) ratio:
                            <ul class="dds-terms-sublist">
                                <li>Up to 75% of gold value (standard loans)</li>
                                <li>Up to 85% for small-ticket loans (as per RBI norms)</li>
                            </ul>
                        </li>
                        <li>Final sanctioned amount depends on:
                            <ul class="dds-terms-sublist">
                                <li>Gold valuation</li>
                                <li>Borrower profile</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <strong>Interest Rate:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Interest rates may be fixed or floating, depending on lender policy.</li>
                        <li>Rates vary based on:
                            <ul class="dds-terms-sublist">
                                <li>Loan tenure</li>
                                <li>LTV ratio</li>
                                <li>Market conditions</li>
                            </ul>
                        </li>
                        <li>Interest is charged on the outstanding loan amount.</li>
                    </ul>
                </li>
                <li>
                    <strong>Loan Tenure &amp; Repayment:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Loan tenure typically ranges from 3 months to 24 months.</li>
                        <li>Repayment options include:
                            <ul class="dds-terms-sublist">
                                <li>Bullet repayment (principal + interest at end)</li>
                                <li>EMI-based repayment</li>
                                <li>Interest-only payments with principal at maturity</li>
                            </ul>
                        </li>
                        <li>Borrowers must repay on time to avoid penalties.</li>
                    </ul>
                </li>
                <li>
                    <strong>Valuation &amp; Transparency:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Gold valuation is done using:
                            <ul class="dds-terms-sublist">
                                <li>Standardized purity testing</li>
                                <li>Market-linked pricing (based on recent gold rates)</li>
                            </ul>
                        </li>
                        <li>Loan agreements must clearly mention:
                            <ul class="dds-terms-sublist">
                                <li>Valuation method</li>
                                <li>Loan amount</li>
                                <li>Charges and repayment terms</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <strong>Charges &amp; Fees:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Applicabe charges may include:
                            <ul class="dds-terms-sublist">
                                <li>Processing fees</li>
                                <li>Valuation charges</li>
                                <li>Late payment penal charges</li>
                                <li>Auction charges (in case of default)</li>
                            </ul>
                        </li>
                        <li>All charges must be clearly disclosed upfront.</li>
                    </ul>
                </li>
                <li>
                    <strong>Prepayment &amp; Foreclosure:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Borrowers can prepay or foreclose the loan anytime.</li>
                        <li>Prepayment terms depend on:
                            <ul class="dds-terms-sublist">
                                <li>Loan type (fixed/floating)</li>
                                <li>Lender policies</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <strong>Safety &amp; Custody of Gold:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Pledged gold is stored securely by the lender.</li>
                        <li>Proper documentation and acknowledgment are provided.</li>
                        <li>The lender is responsible for safe custody and insurance of pledged gold.</li>
                    </ul>
                </li>
                <li>
                    <strong>Loan Closure &amp; Release of Gold:</strong>
                    <ul class="dds-terms-sublist">
                        <li>On full repayment:
                            <ul class="dds-terms-sublist">
                                <li>Gold must be returned within 7 working days (or earlier)</li>
                            </ul>
                        </li>
                        <li>Delay in release may attract penalties on the lender as per RBI rules.</li>
                    </ul>
                </li>
                <li value="10">
                    <strong>Default &amp; Auction:</strong>
                    <ul class="dds-terms-sublist">
                        <li>In case of non-payment:
                            <ul class="dds-terms-sublist">
                                <li>The lender may auction the pledged gold</li>
                            </ul>
                        </li>
                        <li>Before auction:
                            <ul class="dds-terms-sublist">
                                <li>Borrower must receive prior notice</li>
                            </ul>
                        </li>
                        <li>Any surplus amount after recovery must be returned to the borrower</li>
                    </ul>
                </li>
                <li value="11">
                    <strong>Transparency &amp; Borrower Rights:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Borrowers are entitled to:
                            <ul class="dds-terms-sublist">
                                <li>Clear loan agreement</li>
                                <li>Fair valuation process</li>
                                <li>Transparent charges and repayment terms</li>
                            </ul>
                        </li>
                        <li>Terms must be explained in a language understod by the borrower.</li>
                    </ul>
                </li>
                <li value="12">
                    <strong>Regulatory Compliance:</strong>
                    <ul class="dds-terms-sublist">
                        <li>Gold Loans are governed by:
                            <ul class="dds-terms-sublist">
                                <li>RBI lending guidelines (2025-2026 updates)</li>
                            </ul>
                        </li>
                        <li>Rules ensure:
                            <ul class="dds-terms-sublist">
                                <li>Borrower protection</li>
                                <li>Standardized valuation</li>
                                <li>Fair recovery practices</li>
                            </ul>
                        </li>
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
