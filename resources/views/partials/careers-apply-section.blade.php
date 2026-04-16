@php
    $applyPosition = old('position', $defaultPosition ?? '');
@endphp
<!-- ========== APPLY NOW ========== -->
<section class="careers-apply" id="apply-now" aria-labelledby="careers-apply-heading">
    <div class="careers-apply-inner">
        <div class="careers-apply-card">
            <h2 id="careers-apply-heading" class="careers-apply-title">Apply Now</h2>
            <div class="careers-apply-rule" aria-hidden="true"></div>

            @if (session('careers_apply_status'))
                <p class="careers-apply-flash careers-apply-flash--success" role="status">{{ session('careers_apply_status') }}</p>
            @endif

            @if ($errors->any())
                <div class="careers-apply-flash careers-apply-flash--error" role="alert">
                    <p class="careers-apply-flash-title">Please correct the following:</p>
                    <ul class="careers-apply-flash-list">
                        @foreach ($errors->all() as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="careers-apply-form" action="{{ route('careers.apply') }}" method="post" enctype="multipart/form-data" novalidate>
                @csrf
                <div class="careers-apply-grid">
                    <div class="careers-apply-field">
                        <label class="careers-apply-label" for="careers-apply-name">Name</label>
                        <input class="careers-apply-input" type="text" id="careers-apply-name" name="name" value="{{ old('name') }}" placeholder="Enter Your Name" autocomplete="name" required>
                    </div>
                    <div class="careers-apply-field">
                        <label class="careers-apply-label" for="careers-apply-phone">Phone Number</label>
                        <input class="careers-apply-input" type="tel" id="careers-apply-phone" name="phone" value="{{ old('phone') }}" placeholder="Enter your number" autocomplete="tel" required>
                    </div>
                    <div class="careers-apply-field">
                        <label class="careers-apply-label" for="careers-apply-email">Email</label>
                        <input class="careers-apply-input" type="email" id="careers-apply-email" name="email" value="{{ old('email') }}" placeholder="Enter your email" autocomplete="email" required>
                    </div>
                    <div class="careers-apply-field">
                        <label class="careers-apply-label" for="careers-apply-city">Your current city</label>
                        <input class="careers-apply-input" type="text" id="careers-apply-city" name="city" value="{{ old('city') }}" placeholder="Enter your city" autocomplete="address-level2" required>
                    </div>
                    <div class="careers-apply-field">
                        <label class="careers-apply-label" for="careers-apply-position">Position</label>
                        <div class="careers-apply-select-wrap">
                            <select class="careers-apply-select" id="careers-apply-position" name="position" required>
                                <option value="" disabled @selected($applyPosition === '')>Select Position</option>
                                <option value="Manager" @selected($applyPosition === 'Manager')>Manager</option>
                                <option value="HR (Human Resources)" @selected($applyPosition === 'HR (Human Resources)')>HR (Human Resources)</option>
                                <option value="Accountant" @selected($applyPosition === 'Accountant')>Accountant</option>
                                <option value="Jr. Accountant" @selected($applyPosition === 'Jr. Accountant')>Jr. Accountant</option>
                                <option value="Cashier" @selected($applyPosition === 'Cashier')>Cashier</option>
                                <option value="Admin" @selected($applyPosition === 'Admin')>Admin</option>
                                <option value="UI/UX Designer" @selected($applyPosition === 'UI/UX Designer')>UI/UX Designer</option>
                                <option value="Web Developer" @selected($applyPosition === 'Web Developer')>Web Developer</option>
                                <option value="Office Assistant" @selected($applyPosition === 'Office Assistant')>Office Assistant</option>
                                <option value="Marketing Executive" @selected($applyPosition === 'Marketing Executive')>Marketing Executive</option>
                                <option value="Field Executive" @selected($applyPosition === 'Field Executive')>Field Executive</option>
                                <option value="Other" @selected($applyPosition === 'Other')>Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="careers-apply-field">
                        <span class="careers-apply-label" id="careers-apply-resume-label">Upload Resume (PDF or docx)</span>
                        <label class="careers-apply-file">
                            <input class="careers-apply-file-input" type="file" name="resume" accept=".pdf,.doc,.docx,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" aria-labelledby="careers-apply-resume-label" required>
                            <span class="careers-apply-file-ui">
                                <svg class="careers-apply-file-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg>
                                <span class="careers-apply-file-text">Upload file</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="careers-apply-field careers-apply-field--full">
                    <label class="careers-apply-label" for="careers-apply-additional">Would you like to share anything else with us?</label>
                    <textarea class="careers-apply-textarea" id="careers-apply-additional" name="additional" rows="5" placeholder="">{{ old('additional') }}</textarea>
                </div>
                <div class="careers-apply-actions">
                    <button type="submit" class="careers-apply-submit">Submit Application</button>
                </div>
            </form>
        </div>
    </div>
</section>
