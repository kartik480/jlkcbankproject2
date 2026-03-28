<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery - JAYALAKSHMI MUTUALLY AIDED COOPERATIVE</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}?v=gallery-no-filters">
</head>
<body>

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
        <li><a href="{{ url('/careers') }}" class="menu-link">Careers</a></li>
        <li class="active"><a href="{{ url('/gallery') }}" class="menu-link">Gallery</a></li>
    </ul>

    <a href="{{ url('/contact') }}" class="contact-btn">Contact us</a>
</header>

<!-- ========== GALLERY PAGE CONTENT ========== -->
<section class="gallery-page">
    <div class="gallery-hero">
        <div class="gallery-hero-inner">
            <div class="gallery-hero-left">
                <h1 class="gallery-hero-title">Gallery</h1>
                <p class="gallery-hero-subtitle">A glimpse into our people, milestones, and moments.</p>
            </div>
            <div class="gallery-hero-right">
                <img src="{{ asset('images/emp.png') }}" alt="Our Team" class="gallery-hero-image">
            </div>
        </div>
    </div>
</section>
<!-- ========== Our Infrastructure SECTION ========== -->
<section class ="infrastructure-section">
    <h2 class ="infra-title">Our Infrastructure</h2>
    <div class="infra-line"></div>
    <p class="infra-subtitle">
    Built on strong foundations with modern facilities and secure systems to deliver reliable financial services
</p>

<div class="infra-grid">
    <div class="box small"><img src="{{ asset('images/img1.png') }}" alt="Infrastructure 1"></div>
    <div class="box small"><img src="{{ asset('images/img2.png') }}" alt="Infrastructure 2"></div>
    <div class="box small"><img src="{{ asset('images/img3.png') }}" alt="Infrastructure 3"></div>
    <div class="box tall"><img src="{{ asset('images/img4.png') }}" alt="Infrastructure 4"></div>

    <div class="box small"><img src="{{ asset('images/img5.png') }}" alt="Infrastructure 5"></div>
    <div class="box small"><img src="{{ asset('images/img6.png') }}" alt="Infrastructure 6"></div>
    <div class="box small"><img src="{{ asset('images/img7.png') }}" alt="Infrastructure 7"></div>

    <div class="box bottom-wide"><img src="{{ asset('images/img8.png') }}" alt="Infrastructure 8"></div>
    <div class="box bottom-tall"><img src="{{ asset('images/img10.png') }}" alt="Infrastructure 10"></div>
    <div class="box bottom-wide"><img src="{{ asset('images/img9.png') }}" alt="Infrastructure 9" class="infra-img9"></div>
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

