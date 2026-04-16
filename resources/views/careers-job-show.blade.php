<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $job['hero_title'] }} — Careers | JAYALAKSHMI MUTUALLY AIDED COOPERATIVE</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}?v=careers-jobs-1">
    <script src="{{ asset('js/site-nav.js') }}" defer></script>
</head>
<body class="careers-page job-detail-page">

@include('partials.site-nav', ['navActive' => 'careers'])

<section class="job-detail-hero" aria-labelledby="job-detail-title">
    <div class="job-detail-hero-inner">
        <div class="job-detail-hero-top">
            <a href="{{ route('careers') }}#apply-now" class="job-detail-back">&lsaquo; Back</a>
            <a href="{{ route('careers') }}#apply-now" class="job-detail-close" aria-label="Back to job list">&times;</a>
        </div>
        <h1 id="job-detail-title" class="job-detail-title">{{ $job['hero_title'] }}</h1>
        <p class="job-detail-location">{{ $job['location'] }}</p>
        <div class="job-detail-hero-actions">
            <a href="#apply-now" class="careers-btn careers-btn-primary job-detail-hero-btn">Apply Now</a>
            <a href="{{ url('/services') }}" class="job-detail-btn-outline">Explore Opportunity</a>
        </div>
    </div>
</section>

<main class="job-detail-main">
    <div class="job-detail-inner">
        <section class="job-detail-block" aria-labelledby="job-summary-heading">
            <h2 id="job-summary-heading" class="job-detail-block-title">Job Summary</h2>
            <p class="job-detail-text">{{ $job['summary'] }}</p>
        </section>

        <hr class="job-detail-divider" aria-hidden="true">

        <section class="job-detail-block" aria-labelledby="job-resp-heading">
            <h2 id="job-resp-heading" class="job-detail-block-title">Key Responsibilities</h2>
            <ol class="job-detail-ol">
                @foreach ($job['responsibilities'] as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ol>
        </section>

        <section class="job-detail-block" aria-labelledby="job-skills-heading">
            <h2 id="job-skills-heading" class="job-detail-block-title">Skills Required</h2>
            <ol class="job-detail-ol">
                @foreach ($job['skills'] as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ol>
        </section>

        <section class="job-detail-block" aria-labelledby="job-exp-heading">
            <h2 id="job-exp-heading" class="job-detail-block-title">Experience &amp; Qualification</h2>
            @if (!empty($job['experience_ordered']))
                <ol class="job-detail-ol">
                    @foreach ($job['experience'] as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ol>
            @else
                <ul class="job-detail-ul job-detail-ul--plain">
                    @foreach ($job['experience'] as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            @endif
        </section>

        <section class="job-detail-block" aria-labelledby="job-details-heading">
            <h2 id="job-details-heading" class="job-detail-block-title">Job Details</h2>
            <ul class="job-detail-ul">
                <li><strong>Timing:</strong> {{ $job['timing'] ?? 'Full-time (10:00 AM – 7:00 PM)' }}</li>
                <li><strong>Location:</strong> On-site</li>
            </ul>
        </section>

        <section class="job-detail-block" aria-labelledby="job-salary-heading">
            <h2 id="job-salary-heading" class="job-detail-block-title">Salary Range</h2>
            <ul class="job-detail-ul">
                <li>{{ $job['salary'] }}</li>
            </ul>
        </section>

        <hr class="job-detail-divider job-detail-divider--bottom" aria-hidden="true">
    </div>
</main>

@include('partials.careers-apply-section', ['defaultPosition' => $job['position']])

<footer class="site-footer">
    <div class="footer-inner">
        <div class="footer-top">
            <div class="footer-col footer-about">
                <div class="footer-brand">
                    <div class="footer-logo">
                        <img src="{{ asset('images/jk.png') }}" alt="Jayalakshmi Cooperative" class="footer-logo-img" onerror="this.style.display='none'; this.nextElementSibling.classList.add('show');">
                        <span class="footer-logo-placeholder"></span>
                    </div>
                    <h3 class="footer-company-name">
                        JAYALAKSHMI MUTUALLY AIDED<br>
                        COOPERATIVE THRIFT AND<br>
                        CREDIT SOCIETY LTD
                    </h3>
                </div>
                <p class="footer-about-text">In 2013, we received the status of a State Cooperative Society from the Department of Cooperative, Government of Andhra Pradesh. JAYALAKSHMI operates on a mutual status, meaning we are owned by and run for the benefit of our members.</p>
            </div>

            <div class="footer-col footer-contact">
                <h4 class="footer-heading">Contact us</h4>
                <span class="footer-heading-line"></span>
                <div class="footer-contact-list">
                    <p class="footer-contact-item"><span class="footer-icon">📞</span> +91 9640942443</p>
                    <p class="footer-contact-item"><span class="footer-icon">📞</span> +91 8142851404</p>
                    <p class="footer-contact-item"><span class="footer-icon">✉</span> jayalakshmicooperativebankltd@gmail.com</p>
                    <p class="footer-contact-item"><span class="footer-icon">📍</span> Flat no.101, Madhapur, Ayyappa Society Building (Sahiti Ramkuteer), Hyderabad, Telangana 500081</p>
                </div>
            </div>

            <div class="footer-col footer-actions">
                <h4 class="footer-heading">Quick Action</h4>
                <span class="footer-heading-line"></span>
                <div class="footer-buttons">
                    <a href="{{ route('advisor.form') }}" class="footer-btn">Become a Advisor</a>
                    <a href="{{ route('membership.form') }}" class="footer-btn">Become a membership</a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-bottom-left">
                <div class="footer-social">
                    <a href="#" class="footer-social-link" aria-label="Facebook">f</a>
                    <a href="#" class="footer-social-link" aria-label="X">X</a>
                    <a href="#" class="footer-social-link yt" aria-label="YouTube">▶</a>
                    <a href="#" class="footer-social-link in" aria-label="LinkedIn">in</a>
                </div>
                <nav class="footer-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms and Conditions</a>
                    <a href="{{ url('/contact') }}">Contact Us</a>
                    <a href="#">Application Status</a>
                </nav>
            </div>
            <div class="footer-bottom-right">
                <a href="#" class="footer-app-btn play">GET IT ON <span>Google Play</span></a>
                <a href="#" class="footer-app-btn appstore">Available on the <span>App Store</span></a>
            </div>
        </div>
    </div>
</footer>

<script>
(function () {
    var input = document.querySelector('.careers-apply-file-input');
    if (!input) return;
    input.addEventListener('change', function () {
        var text = this.closest('.careers-apply-file') && this.closest('.careers-apply-file').querySelector('.careers-apply-file-text');
        if (text && this.files && this.files.length) text.textContent = this.files[0].name;
    });
})();
</script>
</body>
</html>
