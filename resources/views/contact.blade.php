<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact us - JAYALAKSHMI MUTUALLY AIDED COOPERATIVE</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}?v=contact-5">
</head>
<body class="contact-page">

<!-- ========== NAVBAR ========== -->
<header class="navbar">
    <a href="{{ url('/') }}" class="nav-logo">
        <img src="{{ asset('images/jk.png') }}" alt="Jayalakshmi Cooperative" class="nav-logo-img" onerror="this.style.display='none'; this.nextElementSibling.classList.add('show');">
        <span class="nav-logo-placeholder"></span>
    </a>

    <ul class="menu">
        <li><a href="{{ url('/') }}" class="menu-link">Home</a></li>
        <li><a href="{{ url('/about') }}" class="menu-link">About</a></li>
        <li><a href="{{ url('/services') }}" class="menu-link">Services</a></li>
        <li><a href="{{ url('/') }}#our-scheme" class="menu-link">Our Scheme</a></li>
        <li><a href="{{ url('/') }}#careers" class="menu-link">Careers</a></li>
        <li><a href="{{ url('/') }}#faq" class="menu-link">FAQ</a></li>
        <li><a href="{{ url('/gallery') }}" class="menu-link">Gallery</a></li>
    </ul>

    <a href="{{ url('/contact') }}" class="contact-btn" aria-current="page">Contact us</a>
</header>

<!-- ========== CONTACT — STARTING SECTION (hero) ========== -->
<section class="contact-hero" aria-labelledby="contact-hero-heading">
    <div class="contact-hero-grid" aria-hidden="true"></div>
    <div class="contact-hero-inner">
        <h1 id="contact-hero-heading" class="contact-hero-title">Contact us</h1>
        <p class="contact-hero-lead">
            We&rsquo;re here to help. Reach out to our team for any questions about accounts, deposits, or financial services.
        </p>
    </div>
</section>

<!-- ========== CONTACT — FORM + OFFICE + HOURS ========== -->
<section class="contact-main" id="get-in-touch" aria-label="Contact details and form">
    <div class="contact-main-inner">
        @if (session('contact_status'))
            <p class="contact-flash" role="status">{{ session('contact_status') }}</p>
        @endif

        <div class="contact-card contact-form-card">
            <h2 class="contact-card-title">Get in Touch</h2>
            <div class="contact-card-rule" aria-hidden="true"></div>
            <form class="contact-form" action="{{ route('contact.submit') }}" method="post" novalidate>
                @csrf
                <div class="contact-form-row contact-form-row--2">
                    <div class="contact-field">
                        <label class="contact-label" for="contact-name">Name</label>
                        <input class="contact-input" type="text" id="contact-name" name="name" placeholder="Enter Your Name" autocomplete="name">
                    </div>
                    <div class="contact-field">
                        <label class="contact-label" for="contact-phone">Phone Number</label>
                        <input class="contact-input" type="tel" id="contact-phone" name="phone" placeholder="Enter your number" autocomplete="tel">
                    </div>
                </div>
                <div class="contact-field">
                    <label class="contact-label" for="contact-email">Email</label>
                    <input class="contact-input" type="email" id="contact-email" name="email" placeholder="Enter your email" autocomplete="email">
                </div>
                <div class="contact-field">
                    <label class="contact-label" for="contact-message">Your message</label>
                    <textarea class="contact-textarea" id="contact-message" name="message" rows="6" placeholder="Type your message here"></textarea>
                </div>
                <div class="contact-form-actions">
                    <button type="submit" class="contact-send-btn">Send message</button>
                </div>
            </form>
        </div>

        <div class="contact-sidebar">
            <div class="contact-card contact-office-card">
                <h2 class="contact-card-title">Head office</h2>
                <div class="contact-card-rule" aria-hidden="true"></div>
                <ul class="contact-info-list">
                    <li class="contact-info-item">
                        <span class="contact-info-icon contact-info-icon--phone" aria-hidden="true">📞</span>
                        <div class="contact-info-body">
                            <span class="contact-info-label">Phone</span>
                            <a href="tel:08912544434" class="contact-info-value">08912544434</a>
                        </div>
                    </li>
                    <li class="contact-info-item">
                        <span class="contact-info-icon contact-info-icon--email" aria-hidden="true">✉</span>
                        <div class="contact-info-body">
                            <span class="contact-info-label">Email</span>
                            <a href="mailto:jayalakshmivizagbank@gmail.com" class="contact-info-value">jayalakshmivizagbank@gmail.com</a>
                        </div>
                    </li>
                    <li class="contact-info-item contact-info-item--address">
                        <span class="contact-info-icon contact-info-icon--pin" aria-hidden="true">📍</span>
                        <div class="contact-info-body">
                            <span class="contact-info-label">Address</span>
                            <p class="contact-info-value contact-info-address">50-1-16 Seethammadhara, eenadu main road, near Sivaalayam, Visakhapatnam 530013</p>
                        </div>
                    </li>
                </ul>
                <div class="contact-office-actions">
                    <a href="https://www.google.com/maps/search/?api=1&amp;query=50-1-16+Seethammadhara+Visakhapatnam+530013" class="contact-map-btn" target="_blank" rel="noopener noreferrer">View on Map</a>
                </div>
            </div>

            <div class="contact-card contact-hours-card">
                <h2 class="contact-card-title">Business Hours</h2>
                <div class="contact-card-rule" aria-hidden="true"></div>
                <div class="contact-hours-grid">
                    <div class="contact-hours-block">
                        <span class="contact-hours-icon" aria-hidden="true">🕐</span>
                        <div class="contact-hours-text">
                            <span class="contact-hours-title">Monday - Saturday</span>
                            <span class="contact-hours-time">10:00 am - 5:00 pm</span>
                        </div>
                    </div>
                    <div class="contact-hours-block">
                        <span class="contact-hours-icon contact-hours-icon--lunch" aria-hidden="true">🍽</span>
                        <div class="contact-hours-text">
                            <span class="contact-hours-title">Lunch</span>
                            <span class="contact-hours-time">2:00 pm - 3:00 pm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== BRANCH LOCATIONS ========== -->
<section class="contact-branches" aria-labelledby="contact-branches-heading">
    <div class="contact-branches-inner">
        <h2 id="contact-branches-heading" class="contact-branches-title">Prefer a Direct Approach?</h2>
        <div class="contact-branches-grid">
            <article class="branch-card">
                <h3 class="branch-card-title">Madhapur</h3>
                <div class="branch-card-rule" aria-hidden="true"></div>
                <div class="branch-card-body">
                    <div class="branch-card-row">
                        <span class="branch-row-icon branch-row-icon--phone" aria-hidden="true">📞</span>
                        <div class="branch-row-text">
                            <span class="branch-row-label">Phone</span>
                            <a href="tel:+919640942455" class="branch-row-value">9640942455</a>
                        </div>
                    </div>
                    <div class="branch-card-row">
                        <span class="branch-row-icon branch-row-icon--email" aria-hidden="true">✉</span>
                        <div class="branch-row-text">
                            <span class="branch-row-label">Email</span>
                            <a href="mailto:cooperativejayalakshmi@gmail.com" class="branch-row-value">cooperativejayalakshmi@gmail.com</a>
                        </div>
                    </div>
                    <div class="branch-card-row">
                        <span class="branch-row-icon branch-row-icon--pin" aria-hidden="true">📍</span>
                        <div class="branch-row-text">
                            <span class="branch-row-label">Address</span>
                            <p class="branch-row-value branch-row-value--multiline">Flat No. 101, Sahiti&rsquo;s Ramkuteer, Jai Hind Gandhi Rd. VIP Hills, Silicon Valley, Madhapur, Telangana 500081.</p>
                        </div>
                    </div>
                </div>
                <div class="branch-card-actions">
                    <a href="https://www.google.com/maps/search/?api=1&amp;query=Flat+No+101+Sahitis+Ramkuteer+Madhapur+Hyderabad+500081" class="contact-map-btn" target="_blank" rel="noopener noreferrer">View on Map</a>
                </div>
            </article>

            <article class="branch-card">
                <h3 class="branch-card-title">KPHB</h3>
                <div class="branch-card-rule" aria-hidden="true"></div>
                <div class="branch-card-body">
                    <div class="branch-card-row">
                        <span class="branch-row-icon branch-row-icon--phone" aria-hidden="true">📞</span>
                        <div class="branch-row-text">
                            <span class="branch-row-label">Phone</span>
                            <a href="tel:+919100046181" class="branch-row-value">9100046181</a>
                        </div>
                    </div>
                    <div class="branch-card-row">
                        <span class="branch-row-icon branch-row-icon--email" aria-hidden="true">✉</span>
                        <div class="branch-row-text">
                            <span class="branch-row-label">Email</span>
                            <a href="mailto:jlkckukatpally@gmail.com" class="branch-row-value">jlkckukatpally@gmail.com</a>
                        </div>
                    </div>
                    <div class="branch-card-row">
                        <span class="branch-row-icon branch-row-icon--pin" aria-hidden="true">📍</span>
                        <div class="branch-row-text">
                            <span class="branch-row-label">Address</span>
                            <p class="branch-row-value branch-row-value--multiline">EWS - 27, Dharmareddy Colony, Phase - 1, Shutter No.2, KPHB Colony, Hyderabad, Telangana - 500072</p>
                        </div>
                    </div>
                </div>
                <div class="branch-card-actions">
                    <a href="https://www.google.com/maps/search/?api=1&amp;query=EWS+27+Dharmareddy+Colony+KPHB+Hyderabad+500072" class="contact-map-btn" target="_blank" rel="noopener noreferrer">View on Map</a>
                </div>
            </article>

            <article class="branch-card">
                <h3 class="branch-card-title">Guntur</h3>
                <div class="branch-card-rule" aria-hidden="true"></div>
                <div class="branch-card-body">
                    <div class="branch-card-row">
                        <span class="branch-row-icon branch-row-icon--phone" aria-hidden="true">📞</span>
                        <div class="branch-row-text">
                            <span class="branch-row-label">Phone</span>
                            <a href="tel:+919100046180" class="branch-row-value">9100046180</a>
                        </div>
                    </div>
                    <div class="branch-card-row">
                        <span class="branch-row-icon branch-row-icon--email" aria-hidden="true">✉</span>
                        <div class="branch-row-text">
                            <span class="branch-row-label">Email</span>
                            <a href="mailto:gunturbranch@jlkcbank.com" class="branch-row-value">gunturbranch@jlkcbank.com</a>
                        </div>
                    </div>
                    <div class="branch-card-row">
                        <span class="branch-row-icon branch-row-icon--pin" aria-hidden="true">📍</span>
                        <div class="branch-row-text">
                            <span class="branch-row-label">Address</span>
                            <p class="branch-row-value branch-row-value--multiline">6-11-42, Ayyappa Complex, 11/1 Arundelpel, Guntur - 522002</p>
                        </div>
                    </div>
                </div>
                <div class="branch-card-actions">
                    <a href="https://www.google.com/maps/search/?api=1&amp;query=6-11-42+Ayyappa+Complex+Arundelpet+Guntur+522002" class="contact-map-btn" target="_blank" rel="noopener noreferrer">View on Map</a>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- ========== FINANCIAL ASSISTANCE CTA (glass card over desk bg) ========== -->
<section
    class="contact-financial-cta"
    aria-labelledby="contact-financial-cta-heading"
    style="background-image: url('{{ asset('images/wall.png') }}');"
>
    <div class="contact-financial-cta-scrim" aria-hidden="true"></div>
    <div class="contact-financial-cta-inner">
        <div class="contact-financial-cta-glass">
            <h2 id="contact-financial-cta-heading" class="contact-financial-cta-title">Need Financial Assistance?</h2>
            <p class="contact-financial-cta-sub">Our team is ready to guide you toward better financial growth</p>
            <a href="#get-in-touch" class="contact-financial-cta-btn">Contact us our team</a>
        </div>
    </div>
</section>

<!-- ========== FOOTER ========== -->
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
                    <a href="#" class="footer-btn">Become a Advisor</a>
                    <a href="#" class="footer-btn">Become a membership</a>
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

</body>
</html>
