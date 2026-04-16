(function () {
    'use strict';

    var toggle = document.querySelector('.nav-toggle');
    var panel = document.querySelector('.navbar-end');
    if (!toggle || !panel) return;

    /* Hamburger hidden (inline mobile nav): skip drawer/backdrop */
    if (window.getComputedStyle(toggle).display === 'none') return;

    var mq = window.matchMedia('(max-width: 992px)');
    var backdrop = document.createElement('div');
    backdrop.className = 'site-nav-backdrop';
    backdrop.hidden = true;
    document.body.appendChild(backdrop);

    function setOpen(open) {
        document.body.classList.toggle('site-nav-open', open);
        toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
        backdrop.hidden = !open;
        document.body.style.overflow = open ? 'hidden' : '';
    }

    toggle.addEventListener('click', function () {
        setOpen(!document.body.classList.contains('site-nav-open'));
    });

    backdrop.addEventListener('click', function () {
        setOpen(false);
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') setOpen(false);
    });

    panel.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
            setOpen(false);
        });
    });

    function onMqChange() {
        if (!mq.matches) setOpen(false);
    }

    if (typeof mq.addEventListener === 'function') {
        mq.addEventListener('change', onMqChange);
    } else {
        mq.addListener(onMqChange);
    }

    window.addEventListener('resize', function () {
        if (window.innerWidth > 992) setOpen(false);
    });
})();
