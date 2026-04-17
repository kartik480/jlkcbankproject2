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

(function () {
    'use strict';

    var TRANSITION_KEY = 'jlkc_page_enter_from_bottom';
    var TRANSITION_WINDOW_MS = 8000;

    function markTransitionTarget(url, direction) {
        try {
            if (!window.sessionStorage) return;
            sessionStorage.setItem(TRANSITION_KEY, JSON.stringify({
                path: url.pathname,
                direction: direction || 'bottom',
                ts: Date.now()
            }));
        } catch (_e) {
            /* ignore storage errors */
        }
    }

    function setupOutboundTrigger() {
        document.addEventListener('click', function (e) {
            var link = e.target && e.target.closest ? e.target.closest('a.service-card-btn') : null;
            if (!link) return;

            var rawHref = link.getAttribute('href');
            if (!rawHref || rawHref === '#' || rawHref.indexOf('javascript:') === 0) return;

            try {
                var nextUrl = new URL(link.href, window.location.href);
                if (nextUrl.origin !== window.location.origin) return;
                markTransitionTarget(nextUrl, 'bottom');
            } catch (_e) {
                /* ignore invalid URLs */
            }
        });
    }

    function runInboundTransition() {
        try {
            if (!window.sessionStorage) return;

            var raw = sessionStorage.getItem(TRANSITION_KEY);
            if (!raw) return;

            var data = JSON.parse(raw);
            var isFresh = data && data.ts && (Date.now() - data.ts) <= TRANSITION_WINDOW_MS;
            var isSamePath = data && data.path && data.path === window.location.pathname;
            var direction = data && data.direction === 'top' ? 'top' : 'bottom';
            sessionStorage.removeItem(TRANSITION_KEY);

            if (!isFresh || !isSamePath || !document.body) return;

            document.body.classList.add(direction === 'top' ? 'page-enter-from-top' : 'page-enter-from-bottom');
            window.requestAnimationFrame(function () {
                document.body.classList.add('page-enter-active');
            });
        } catch (_e) {
            /* ignore malformed storage data */
        }
    }

    setupOutboundTrigger();
    runInboundTransition();
})();

(function () {
    'use strict';

    var backLinks = document.querySelectorAll('a.dds-back');
    if (!backLinks.length) return;

    function hasSameOriginReferrer() {
        if (!document.referrer) return false;
        try {
            return new URL(document.referrer).origin === window.location.origin;
        } catch (_e) {
            return false;
        }
    }

    function markTransitionTarget(url, direction) {
        try {
            if (!window.sessionStorage) return;
            sessionStorage.setItem('jlkc_page_enter_from_bottom', JSON.stringify({
                path: url.pathname,
                direction: direction || 'top',
                ts: Date.now()
            }));
        } catch (_e) {
            /* ignore storage errors */
        }
    }

    backLinks.forEach(function (link) {
        link.addEventListener('click', function (e) {
            var fallbackHref = link.getAttribute('href') || '/services';

            /* Prefer true browser back when user came from this site (e.g. Home -> Details) */
            if (window.history.length > 1 && hasSameOriginReferrer()) {
                try {
                    var referrerUrl = new URL(document.referrer);
                    if (referrerUrl.origin === window.location.origin) {
                        markTransitionTarget(referrerUrl, 'top');
                    }
                } catch (_e) {
                    /* ignore malformed referrer */
                }
                e.preventDefault();
                window.history.back();
                return;
            }

            try {
                var nextUrl = new URL(fallbackHref, window.location.href);
                if (nextUrl.origin === window.location.origin) {
                    markTransitionTarget(nextUrl, 'top');
                }
            } catch (_e) {
                /* ignore invalid fallback URL */
            }
            e.preventDefault();
            window.location.href = fallbackHref;
        });
    });
})();
