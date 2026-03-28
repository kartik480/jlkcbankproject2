<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Careers - JAYALAKSHMI MUTUALLY AIDED COOPERATIVE</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body class="careers-page">

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
        <li class="active"><a href="{{ url('/careers') }}" class="menu-link" aria-current="page">Careers</a></li>
        <li><a href="{{ url('/gallery') }}" class="menu-link">Gallery</a></li>
    </ul>

    <a href="{{ url('/contact') }}" class="contact-btn">Contact us</a>
</header>

<!-- ========== CAREERS HERO ========== -->
<section class="careers-hero" aria-labelledby="careers-hero-heading">
    <div class="careers-hero-inner">
        <div class="careers-hero-content">
            <div class="careers-hero-badge">
                <span class="careers-hero-badge-dot" aria-hidden="true"></span>
                Careers
            </div>
            <h1 id="careers-hero-heading" class="careers-hero-title">Build Your Career With Trust &amp; Growth</h1>
            <p class="careers-hero-lead">Explore secure savings, flexible loans, and premium financial solutions tailored to individuals and businesses.</p>
            <div class="careers-hero-actions">
                <a href="{{ url('/careers') }}#apply-now" class="careers-btn careers-btn-primary">Apply Now</a>
                <a href="{{ url('/services') }}" class="careers-btn careers-btn-outline">Explore Opportunity</a>
            </div>
        </div>
        <div class="careers-hero-visual">
            <img src="{{ asset('images/target.png') }}" alt="Career growth and teamwork" class="careers-hero-image">
        </div>
    </div>
</section>

<!-- ========== ABOUT OUR CAREERS ========== -->
<section class="careers-about" aria-labelledby="careers-about-heading">
    <div class="careers-about-inner">
        <header class="careers-about-header">
            <h2 id="careers-about-heading" class="careers-about-title">About Our Careers</h2>
            <span class="careers-about-accent" aria-hidden="true"></span>
            <p class="careers-about-subtitle">Grow with a team committed to trust, discipline, and financial empowerment</p>
        </header>
        <div class="careers-about-grid">
            <article class="careers-about-card">
                <div class="careers-about-icon-wrap" aria-hidden="true">
                    <svg class="careers-about-icon careers-about-icon-trust" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 120" fill="none" aria-hidden="true">
                        <circle cx="22" cy="28" r="3" fill="#fb923c"/>
                        <circle cx="18" cy="48" r="2.5" fill="#fb923c" opacity="0.85"/>
                        <circle cx="28" cy="52" r="2" fill="#fb923c" opacity="0.7"/>
                        <path d="M24 30 L26 46 M20 48 L28 50" stroke="#fdba74" stroke-width="1" opacity="0.6"/>
                        <path d="M60 18 L88 28 L88 58 C88 78 60 98 60 98 C60 98 32 78 32 58 L32 28 Z" fill="#22c55e" stroke="#15803d" stroke-width="2"/>
                        <rect x="52" y="42" width="16" height="22" rx="3" fill="#facc15" stroke="#ca8a04" stroke-width="1.5"/>
                        <path d="M56 42 V38 C56 34.5 58.5 32 60 32 C61.5 32 64 34.5 64 38 V42" stroke="#ca8a04" stroke-width="1.5" fill="none"/>
                        <circle cx="60" cy="54" r="3" fill="#15803d"/>
                    </svg>
                </div>
                <h3 class="careers-about-card-title">Trust</h3>
                <p class="careers-about-card-text">Security – Advanced protection that keeps your financial data and transactions safe and secure.</p>
            </article>
            <article class="careers-about-card">
                <div class="careers-about-icon-wrap careers-about-icon-wrap-discipline" aria-hidden="true">
                    <svg class="careers-about-icon careers-about-icon-discipline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 120" fill="none" aria-hidden="true">
                        <circle cx="52" cy="60" r="34" fill="#f1f5f9" stroke="#64748b" stroke-width="3"/>
                        <circle cx="52" cy="60" r="22" fill="#ffffff" stroke="#94a3b8" stroke-width="2"/>
                        <path d="M52 44 V60 L64 68" stroke="#64748b" stroke-width="2.5" stroke-linecap="round"/>
                        <circle cx="52" cy="60" r="14" fill="#22c55e"/>
                        <path d="M46 60 L50 64 L58 54" stroke="#ffffff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <rect x="78" y="48" width="18" height="3" rx="1.5" fill="#22c55e"/>
                        <rect x="78" y="56" width="22" height="3" rx="1.5" fill="#4ade80"/>
                        <rect x="78" y="64" width="16" height="3" rx="1.5" fill="#86efac"/>
                    </svg>
                </div>
                <h3 class="careers-about-card-title">Discipline</h3>
                <p class="careers-about-card-text">Get your loan approved quickly with minimal paperwork and a simple application process.</p>
            </article>
            <article class="careers-about-card">
                <div class="careers-about-icon-wrap" aria-hidden="true">
                    <svg class="careers-about-icon careers-about-icon-empower" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 120" fill="none" aria-hidden="true">
                        <g fill="#3b82f6">
                            <path d="M52 20l1.2 2.5 2.8.4-2 2.4.5 2.8-2.5-1.3-2.5 1.3.5-2.8-2-2.4 2.8-.4z"/>
                            <path d="M60 14l1 2.2 2.4.35-1.75 2.1.4 2.45-2.05-1.1-2.05 1.1.4-2.45-1.75-2.1 2.4-.35z"/>
                            <path d="M68 20l1.2 2.5 2.8.4-2 2.4.5 2.8-2.5-1.3-2.5 1.3.5-2.8-2-2.4 2.8-.4z"/>
                        </g>
                        <path d="M38 52c0-4 3-7 7-7h4l3 2 3-2h4c4 0 7 3 7 7v18H38V52z" fill="#334155"/>
                        <path d="M52 45h6c5 0 9 4 9 9v16H52V45z" fill="#475569"/>
                        <path d="M82 52c0-4-3-7-7-7h-4l-3 2-3-2h-4c-4 0-7 3-7 7v18h28V52z" fill="#334155"/>
                        <path d="M68 45h-6c-5 0-9 4-9 9v16h15V45z" fill="#475569"/>
                        <path d="M54 62c2 2 5 3 8 3s6-1 8-3" stroke="#1e293b" stroke-width="2" stroke-linecap="round" opacity="0.35"/>
                        <ellipse cx="60" cy="78" rx="16" ry="5" fill="#1e293b" opacity="0.12"/>
                    </svg>
                </div>
                <h3 class="careers-about-card-title">Financial empowerment</h3>
                <p class="careers-about-card-text">Committed to transparency, integrity, and long-term customer relationships.</p>
            </article>
        </div>
    </div>
</section>

<!-- ========== WHY JOIN US ========== -->
<section class="careers-why" aria-labelledby="careers-why-heading">
    <div class="careers-why-inner">
        <header class="careers-why-header">
            <h2 id="careers-why-heading" class="careers-why-title">Why Join Us</h2>
            <span class="careers-why-accent" aria-hidden="true"></span>
            <p class="careers-why-subtitle">Be part of a workplace that values dedication, stability, and meaningful impact</p>
        </header>
        <div class="careers-why-grid">
            <article class="careers-why-card">
                <div class="careers-why-icon-wrap" aria-hidden="true">
                    <svg class="careers-why-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" fill="none" aria-hidden="true">
                        <rect x="14" y="70" width="9" height="16" rx="1" fill="#22c55e"/>
                        <rect x="27" y="58" width="9" height="28" rx="1" fill="#4ade80"/>
                        <rect x="40" y="44" width="9" height="42" rx="1" fill="#16a34a"/>
                        <path d="M54 44 L61 28 L68 44 H63 V52 H59 V44 Z" fill="#15803d"/>
                        <circle cx="82" cy="34" r="6" fill="#15803d"/>
                        <path d="M82 40 V54 M76 46 H88 M82 54 L76 68 H88 L82 54" stroke="#15803d" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                    </svg>
                </div>
                <h3 class="careers-why-card-title">Growth</h3>
                <p class="careers-why-card-text">Advance your career with continuous opportunities to learn, improve, and take on new responsibilities</p>
            </article>
            <article class="careers-why-card">
                <div class="careers-why-icon-wrap" aria-hidden="true">
                    <svg class="careers-why-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" fill="none" aria-hidden="true">
                        <path d="M28 36 H72" stroke="#1d4ed8" stroke-width="2.5" stroke-linecap="round"/>
                        <path d="M28 36 V42 M72 36 V42" stroke="#1d4ed8" stroke-width="2"/>
                        <path d="M28 42 L26 54 M72 42 L74 54" stroke="#1d4ed8" stroke-width="1.8"/>
                        <ellipse cx="26" cy="60" rx="8" ry="5" fill="#bfdbfe" stroke="#2563eb" stroke-width="1.5"/>
                        <ellipse cx="74" cy="60" rx="8" ry="5" fill="#bfdbfe" stroke="#2563eb" stroke-width="1.5"/>
                        <path d="M50 36 V52" stroke="#2563eb" stroke-width="2"/>
                        <circle cx="50" cy="64" r="7" fill="#3b82f6"/>
                        <path d="M50 71 V86 M44 86 H56" stroke="#2563eb" stroke-width="2.5" stroke-linecap="round"/>
                        <path d="M50 52 V58 M42 54 H58" stroke="#3b82f6" stroke-width="2.2" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="careers-why-card-title">Stability</h3>
                <p class="careers-why-card-text">Work in a secure and trusted cooperative environment focused on long-term financial services</p>
            </article>
            <article class="careers-why-card">
                <div class="careers-why-icon-wrap" aria-hidden="true">
                    <svg class="careers-why-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" fill="none" aria-hidden="true">
                        <path d="M38 88 L50 82 L62 88 V92 H38 Z" fill="#64748b"/>
                        <rect x="28" y="38" width="44" height="30" rx="3" fill="#3b82f6"/>
                        <rect x="31" y="41" width="38" height="24" rx="2" fill="#1d4ed8"/>
                        <path d="M42 58 L50 52 L58 58 V64 H42 Z" fill="#fef9c3" stroke="#eab308" stroke-width="1"/>
                        <path d="M50 52 L50 58 M46 55 H54" stroke="#ca8a04" stroke-width="1"/>
                        <path d="M44 62 H56" stroke="#ca8a04" stroke-width="1"/>
                        <circle cx="50" cy="28" r="10" fill="#facc15" stroke="#ca8a04" stroke-width="1.5"/>
                        <path d="M50 22 V26 M46 24 H54" stroke="#ca8a04" stroke-width="1.2" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="careers-why-card-title">Learning</h3>
                <p class="careers-why-card-text">Gain hands-on experience in customer service, financial operations, and real-world banking practices</p>
            </article>
            <article class="careers-why-card">
                <div class="careers-why-icon-wrap" aria-hidden="true">
                    <svg class="careers-why-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" fill="none" aria-hidden="true">
                        <circle cx="50" cy="22" r="9" fill="#3b82f6" stroke="#1d4ed8" stroke-width="1"/>
                        <circle cx="50" cy="22" r="3" fill="#93c5fd"/>
                        <path d="M44 22 H56 M50 16 V28" stroke="#1e40af" stroke-width="1.5" stroke-linecap="round"/>
                        <path d="M50 31 L52 38 H48 Z" fill="#3b82f6"/>
                        <circle cx="32" cy="58" r="9" fill="#3b82f6"/>
                        <path d="M32 67 V78 M26 78 H38" stroke="#2563eb" stroke-width="2.5" stroke-linecap="round"/>
                        <circle cx="50" cy="54" r="10" fill="#2563eb"/>
                        <path d="M50 64 V76 M43 76 H57" stroke="#1d4ed8" stroke-width="2.5" stroke-linecap="round"/>
                        <circle cx="68" cy="58" r="9" fill="#f97316"/>
                        <path d="M68 67 V78 M62 78 H74" stroke="#ea580c" stroke-width="2.5" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="careers-why-card-title">Teamwork</h3>
                <p class="careers-why-card-text">Collaborate with a supportive team dedicated to serving members and building strong community</p>
            </article>
        </div>
    </div>
</section>

<!-- ========== JOB POSITIONS ========== -->
<section class="careers-jobs" aria-labelledby="careers-jobs-heading">
    <div class="careers-jobs-inner">
        <header class="careers-jobs-header">
            <h2 id="careers-jobs-heading" class="careers-jobs-title">Job Positions</h2>
            <span class="careers-jobs-accent" aria-hidden="true"></span>
            <p class="careers-jobs-subtitle">Explore opportunities where your skills and dedication can make a real impact</p>
        </header>
        <div class="careers-jobs-grid">
            <article class="careers-job-card">
                <h3 class="careers-job-card-title">Manager</h3>
                <p class="careers-job-card-desc">Lead branch operations, ensure financial performance, and manage team efficiency.</p>
                <ul class="careers-job-card-list">
                    <li>Team leadership &amp; supervision</li>
                    <li>Financial planning &amp; reporting</li>
                    <li>Decision-making &amp; operations control</li>
                </ul>
                <a href="{{ url('/contact') }}" class="careers-job-apply">Apply Now</a>
            </article>
            <article class="careers-job-card">
                <h3 class="careers-job-card-title">HR (Human Resources)</h3>
                <p class="careers-job-card-desc">Manage hiring, employee relations, and workplace policies.</p>
                <ul class="careers-job-card-list">
                    <li>Recruitment &amp; onboarding</li>
                    <li>Employee engagement</li>
                    <li>HR policies &amp; compliance</li>
                </ul>
                <a href="{{ url('/contact') }}" class="careers-job-apply">Apply Now</a>
            </article>
            <article class="careers-job-card">
                <h3 class="careers-job-card-title">Accountant</h3>
                <p class="careers-job-card-desc">Handle financial records, reporting, and ensure regulatory compliance.</p>
                <ul class="careers-job-card-list">
                    <li>Financial statements</li>
                    <li>Tax &amp; compliance</li>
                    <li>Budget tracking</li>
                </ul>
                <a href="{{ url('/contact') }}" class="careers-job-apply">Apply Now</a>
            </article>
            <article class="careers-job-card">
                <h3 class="careers-job-card-title">Jr. Accountant</h3>
                <p class="careers-job-card-desc">Assist in daily accounting tasks and financial data management.</p>
                <ul class="careers-job-card-list">
                    <li>Data entry &amp; bookkeeping</li>
                    <li>Invoice handling</li>
                    <li>Financial support tasks</li>
                </ul>
                <a href="{{ url('/contact') }}" class="careers-job-apply">Apply Now</a>
            </article>
            <article class="careers-job-card">
                <h3 class="careers-job-card-title">Cashier</h3>
                <p class="careers-job-card-desc">Manage daily cash transactions and customer payments.</p>
                <ul class="careers-job-card-list">
                    <li>Cash handling</li>
                    <li>Receipt &amp; payment tracking</li>
                    <li>Customer interaction</li>
                </ul>
                <a href="{{ url('/contact') }}" class="careers-job-apply">Apply Now</a>
            </article>
            <article class="careers-job-card">
                <h3 class="careers-job-card-title">Admin</h3>
                <p class="careers-job-card-desc">Ensure smooth office operations and administrative coordination.</p>
                <ul class="careers-job-card-list">
                    <li>Office management</li>
                    <li>Documentation</li>
                    <li>Coordination</li>
                </ul>
                <a href="{{ url('/contact') }}" class="careers-job-apply">Apply Now</a>
            </article>
            <article class="careers-job-card">
                <h3 class="careers-job-card-title">UI/UX Designer</h3>
                <p class="careers-job-card-desc">Design user-friendly digital experiences for web and mobile platforms.</p>
                <ul class="careers-job-card-list">
                    <li>Wireframing &amp; prototyping</li>
                    <li>User research</li>
                    <li>UI design</li>
                </ul>
                <a href="{{ url('/contact') }}" class="careers-job-apply">Apply Now</a>
            </article>
            <article class="careers-job-card">
                <h3 class="careers-job-card-title">Web Developer</h3>
                <p class="careers-job-card-desc">Develop and maintain the company's website and digital systems.</p>
                <ul class="careers-job-card-list">
                    <li>Frontend/backend development</li>
                    <li>Website maintenance</li>
                    <li>Performance optimization</li>
                </ul>
                <a href="{{ url('/contact') }}" class="careers-job-apply">Apply Now</a>
            </article>
            <article class="careers-job-card">
                <h3 class="careers-job-card-title">Office Assistant</h3>
                <p class="careers-job-card-desc">Support daily office activities and assist staff in operations.</p>
                <ul class="careers-job-card-list">
                    <li>File management</li>
                    <li>Data entry</li>
                    <li>General support</li>
                </ul>
                <a href="{{ url('/contact') }}" class="careers-job-apply">Apply Now</a>
            </article>
            <article class="careers-job-card">
                <h3 class="careers-job-card-title">Marketing Executive</h3>
                <p class="careers-job-card-desc">Promote financial schemes and attract new customers.</p>
                <ul class="careers-job-card-list">
                    <li>Lead generation</li>
                    <li>Campaign execution</li>
                    <li>Client engagement</li>
                </ul>
                <a href="{{ url('/contact') }}" class="careers-job-apply">Apply Now</a>
            </article>
            <article class="careers-job-card">
                <h3 class="careers-job-card-title">Field Executive</h3>
                <p class="careers-job-card-desc">Handle customer visits, collections, and field-level operations.</p>
                <ul class="careers-job-card-list">
                    <li>Daily deposit collection</li>
                    <li>Customer interaction</li>
                    <li>Field reporting</li>
                </ul>
                <a href="{{ url('/contact') }}" class="careers-job-apply">Apply Now</a>
            </article>
        </div>
    </div>
</section>

<!-- ========== OUR WORK CULTURE ========== -->
<section class="careers-culture" aria-labelledby="careers-culture-heading">
    <div class="careers-culture-inner">
        <div class="careers-culture-card">
            <div class="careers-culture-content">
                <h2 id="careers-culture-heading" class="careers-culture-title">Our Work Culture</h2>
                <p class="careers-culture-text">We foster a collaborative and inclusive work environment where every voice is valued. Our team is to mutual support, celebrating achievements, and maintaining a healthy work-life balance.</p>
            </div>
            <div class="careers-culture-visual">
                <video class="careers-culture-video" src="{{ asset('videos/video2.mp4') }}" autoplay muted loop playsinline aria-label="Our work culture"></video>
            </div>
        </div>
    </div>
</section>

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
                                <option value="" disabled {{ old('position') ? '' : 'selected' }}>Select Position</option>
                                <option value="Manager" @selected(old('position') === 'Manager')>Manager</option>
                                <option value="HR (Human Resources)" @selected(old('position') === 'HR (Human Resources)')>HR (Human Resources)</option>
                                <option value="Accountant" @selected(old('position') === 'Accountant')>Accountant</option>
                                <option value="Jr. Accountant" @selected(old('position') === 'Jr. Accountant')>Jr. Accountant</option>
                                <option value="Cashier" @selected(old('position') === 'Cashier')>Cashier</option>
                                <option value="Admin" @selected(old('position') === 'Admin')>Admin</option>
                                <option value="UI/UX Designer" @selected(old('position') === 'UI/UX Designer')>UI/UX Designer</option>
                                <option value="Web Developer" @selected(old('position') === 'Web Developer')>Web Developer</option>
                                <option value="Office Assistant" @selected(old('position') === 'Office Assistant')>Office Assistant</option>
                                <option value="Marketing Executive" @selected(old('position') === 'Marketing Executive')>Marketing Executive</option>
                                <option value="Field Executive" @selected(old('position') === 'Field Executive')>Field Executive</option>
                                <option value="Other" @selected(old('position') === 'Other')>Other</option>
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
