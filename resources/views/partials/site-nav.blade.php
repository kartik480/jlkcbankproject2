@php
    $active = $navActive ?? '';
@endphp
<header class="navbar">
    <a href="{{ url('/') }}" class="nav-logo">
        <img src="{{ asset('images/jk.png') }}" alt="Jayalakshmi Cooperative" class="nav-logo-img" onerror="this.style.display='none'; this.nextElementSibling.classList.add('show');">
        <span class="nav-logo-placeholder"></span>
    </a>

    <button type="button" class="nav-toggle" aria-expanded="false" aria-controls="primary-navigation" aria-label="Open menu">
        <span class="nav-toggle-bar" aria-hidden="true"></span>
        <span class="nav-toggle-bar" aria-hidden="true"></span>
        <span class="nav-toggle-bar" aria-hidden="true"></span>
    </button>

    <div class="navbar-end" id="primary-navigation">
        <ul class="menu" role="list">
            <li class="{{ $active === 'home' ? 'active' : '' }}"><a href="{{ url('/') }}" class="menu-link">Home</a></li>
            <li class="{{ $active === 'about' ? 'active' : '' }}"><a href="{{ url('/about') }}" class="menu-link">About</a></li>
            <li class="{{ $active === 'services' ? 'active' : '' }}"><a href="{{ url('/services') }}" class="menu-link">Services</a></li>
            <li class="{{ $active === 'careers' ? 'active' : '' }}"><a href="{{ url('/careers') }}" class="menu-link" @if($active === 'careers') aria-current="page" @endif>Careers</a></li>
            <li class="{{ $active === 'gallery' ? 'active' : '' }}"><a href="{{ url('/gallery') }}" class="menu-link">Gallery</a></li>
        </ul>
        <a href="{{ url('/contact') }}" class="contact-btn {{ $active === 'contact' ? 'contact-btn--nav-active' : '' }}" @if($active === 'contact') aria-current="page" @endif>Contact us</a>
    </div>
</header>
