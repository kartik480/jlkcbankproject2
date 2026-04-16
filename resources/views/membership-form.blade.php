<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $formTitle }} - JAYALAKSHMI MUTUALLY AIDED COOPERATIVE</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}?v=membership-form-v4">
    <script src="{{ asset('js/site-nav.js') }}" defer></script>
    <script src="{{ asset('js/membership-form.js') }}" defer></script>
</head>
<body class="dds-page">

@include('partials.site-nav')

<main class="member-form-page">
    <div class="member-form-wrap">
        <a href="{{ url()->previous() }}" class="member-form-back">&lt; Back</a>

        <section class="member-form-card member-form-card--exact">
            <div class="member-form-head">
                <h1>{{ $formTitle }}</h1>
                <p>General Membership Form fields (as in the provided image).</p>
            </div>

            @if (session('application_form_status'))
                <p class="contact-flash" role="status">{{ session('application_form_status') }}</p>
            @endif

            @if ($errors->any())
                <ul class="contact-flash contact-flash--error contact-flash-list" role="alert">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form class="mf-exact-form" action="{{ $formType === 'advisor' ? route('advisor.form.submit') : route('membership.form.submit') }}" method="post" enctype="multipart/form-data" novalidate>
                @csrf

                <div class="mf-exact-top">
                    <div class="mf-exact-left">
                        <div class="mf-field">
                            <label>1. Name* (same as ID proof)</label>
                            <input type="text" name="name">
                        </div>
                        <div class="mf-field">
                            <label>2. Middle Name</label>
                            <input type="text" name="middle_name">
                        </div>
                        <div class="mf-field">
                            <label>3. Father/Spouse Name*</label>
                            <input type="text" name="father_spouse_name">
                        </div>
                        <div class="mf-field">
                            <label>4. Mother Name*</label>
                            <input type="text" name="mother_name">
                        </div>
                        <div class="mf-row-2 mf-exact-row">
                            <div class="mf-field">
                                <label>5. Date of Birth*</label>
                                <input type="date" name="dob">
                            </div>
                            <div class="mf-field">
                                <label>6. Gender*</label>
                                <div class="mf-checkbox-row">
                                    <label class="mf-choice-item"><input type="radio" name="gender" value="M" @checked(old('gender') === 'M')> M-Male</label>
                                    <label class="mf-choice-item"><input type="radio" name="gender" value="F" @checked(old('gender') === 'F')> F-Female</label>
                                </div>
                            </div>
                        </div>

                        <div class="mf-row-2 mf-exact-row">
                            <div class="mf-field">
                                <label>7. Marital Status*</label>
                                <div class="mf-checkbox-row mf-checkbox-row--multi">
                                    <label class="mf-choice-item"><input type="checkbox" name="marital_married" value="Married" @checked(old('marital_married'))> Married</label>
                                    <label class="mf-choice-item"><input type="checkbox" name="marital_unmarried" value="Unmarried" @checked(old('marital_unmarried'))> Unmarried</label>
                                    <label class="mf-choice-item"><input type="checkbox" name="marital_single" value="Single" @checked(old('marital_single'))> single</label>
                                    <label class="mf-choice-item"><input type="checkbox" name="marital_divorced" value="Divorced" @checked(old('marital_divorced'))> Divorced</label>
                                    <label class="mf-choice-item"><input type="checkbox" name="marital_widow_widower" value="Widow/Widower" @checked(old('marital_widow_widower'))> Widow/Widower</label>
                                </div>
                            </div>
                            <div class="mf-field">
                                <label>8. Citizenship*</label>
                                <div class="mf-checkbox-row">
                                    <label class="mf-choice-item"><input type="radio" name="citizenship" value="In-India" @checked(old('citizenship') === 'In-India')> In-India</label>
                                    <label class="mf-choice-item"><input type="radio" name="citizenship" value="Others" @checked(old('citizenship') === 'Others')> Others</label>
                                </div>
                            </div>
                        </div>

                        <div class="mf-field">
                            <label>9. Whether Politically Exposed Person*</label>
                            <div class="mf-checkbox-row">
                                <label class="mf-choice-item"><input type="radio" name="pep" value="YES" @checked(old('pep') === 'YES')> YES</label>
                                <label class="mf-choice-item"><input type="radio" name="pep" value="NO" @checked(old('pep') === 'NO')> NO</label>
                            </div>
                        </div>

                        <div class="mf-field">
                            <label>10. Occupation Type*</label>
                            <input type="text" name="occupation_type">
                        </div>
                    </div>

                    <div class="mf-photo-box">
                        <div class="mf-photo-box__label">Applicant Photo<br>Signature</div>
                        <img id="mf-applicant-photo-preview" class="mf-photo-preview" alt="" hidden>
                        <input type="file" name="applicant_photo_signature" accept="image/*">
                    </div>
                </div>

                <div class="mf-section">
                    <div class="mf-section-title">11. Address</div>
                    <div class="mf-field">
                        <label>Line1*</label>
                        <input type="text" name="address_line_1">
                    </div>
                    <div class="mf-field">
                        <label>Line2</label>
                        <input type="text" name="address_line_2">
                    </div>
                    <div class="mf-field">
                        <label>Line3</label>
                        <input type="text" name="address_line_3">
                    </div>

                    <div class="mf-row-3 mf-exact-row">
                        <div class="mf-field">
                            <label>City / Town / Village*</label>
                            <input type="text" name="city_town_village" value="{{ old('city_town_village') }}">
                        </div>
                        <div class="mf-field">
                            <label>District*</label>
                            <input type="text" name="district" value="{{ old('district') }}">
                        </div>
                        <div class="mf-field">
                            <label>State*</label>
                            <input type="text" name="state" value="{{ old('state') }}">
                        </div>
                    </div>

                    <div class="mf-field mf-row-2">
                        <label>Pin code*</label>
                        <input type="text" name="pincode" inputmode="numeric">
                    </div>
                </div>

                <div class="mf-section">
                    <div class="mf-section-title">12. Contact Details (All communications will be sent on provided Mobile no. / Email ID)</div>
                    <div class="mf-row-2 mf-exact-row">
                        <div class="mf-field">
                            <label>Mobile*</label>
                            <input type="tel" name="mobile">
                            <label class="mf-checkbox-under">
                                <input type="checkbox" name="mobile_banking_enabled" value="1">
                                Mobile Banking will be enabled on above Mobile Number only
                            </label>
                        </div>
                        <div class="mf-field">
                            <label>Alternate Mobile</label>
                            <input type="tel" name="alternate_mobile">
                        </div>
                    </div>
                    <div class="mf-row-2 mf-exact-row">
                        <div class="mf-field">
                            <label>Email ID*</label>
                            <input type="email" name="email">
                        </div>
                        <div class="mf-field">
                            <label>Tel (Res)</label>
                            <input type="tel" name="tel_res">
                        </div>
                    </div>
                    <div class="mf-field">
                        <label>Tel (Office)</label>
                        <input type="tel" name="tel_office">
                    </div>
                </div>

                <div class="mf-row-2 mf-exact-row">
                    <div class="mf-field">
                        <label>13. Aadhaar Number*</label>
                        <input type="text" name="aadhaar">
                    </div>
                    <div class="mf-field">
                        <label>14. PAN Number*</label>
                        <input type="text" name="pan">
                    </div>
                </div>

                <div class="mf-nominee-block">
                    <div class="mf-nominee-title">Nominee Details</div>
                    <div class="mf-nominee-grid">
                        <div class="mf-field">
                            <label>1. Name of Nominee*</label>
                            <input type="text" name="nominee_name">
                        </div>
                        <div class="mf-field">
                            <label>2. Relationship with Member*</label>
                            <input type="text" name="nominee_relation">
                        </div>
                        <div class="mf-field">
                            <label>3. Date of Birth of Nominee*</label>
                            <input type="date" name="nominee_dob">
                        </div>
                        <div class="mf-field">
                            <label>4. Contact Number of Nominee*</label>
                            <input type="tel" name="nominee_contact">
                        </div>
                    </div>

                    <div class="mf-nominee-title">Nominee Bank Details</div>
                    <div class="mf-nominee-grid mf-nominee-grid--bank">
                        <div class="mf-field">
                            <label>Bank Name*</label>
                            <input type="text" name="nominee_bank">
                        </div>
                        <div class="mf-field">
                            <label>Branch Name*</label>
                            <input type="text" name="nominee_branch">
                        </div>
                        <div class="mf-field">
                            <label>Account Number*</label>
                            <input type="text" name="nominee_account">
                        </div>
                        <div class="mf-field">
                            <label>IFSC Code (11 Digit)*</label>
                            <input type="text" name="nominee_ifsc">
                        </div>
                    </div>
                </div>

                <div class="mf-section mf-declaration-section">
                    <div class="mf-section-title">APPLICANT DECLARATION</div>
                    <div class="mf-declaration-agree">
                        <input
                            type="checkbox"
                            id="applicant_declaration_accepted"
                            name="applicant_declaration_accepted"
                            value="1"
                            class="mf-declaration-agree__check"
                            aria-describedby="applicant_declaration_text"
                            @checked(old('applicant_declaration_accepted'))
                        >
                        <div id="applicant_declaration_text" class="mf-declaration-label__body">
                            I,
                            <input
                                type="text"
                                name="applicant_declaration_name"
                                class="mf-declaration-name-input"
                                value="{{ old('applicant_declaration_name') }}"
                                autocomplete="name"
                                aria-label="Printed name for declaration"
                            >
                            (name), hereby declare that the information provided above is true and correct to the best of my knowledge.
                            <span class="mf-declaration-label__para2">
                                I agree to abide by the rules and regulations of <strong>Jayalakshmi Mutually Aided Cooperative Thrift and Credit Society Ltd.</strong>
                                @if ($formType === 'advisor')
                                    I understand that my appointment as an advisor is subject to approval by the management.
                                @else
                                    I understand that my membership is subject to approval by the management.
                                @endif
                            </span>
                        </div>
                    </div>
                </div>

                <div class="mf-actions">
                    <button type="submit">Submit Application</button>
                </div>
            </form>
        </section>
    </div>
</main>

</body>
</html>
