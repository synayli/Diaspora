<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">

    <title>@yield('title', 'Diaspora')</title>

    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    {{-- Organisation information for search engines --}}
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@type": "Organization",
        "name": "Diaspora Sdn Bhd",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('favicon.png') }}"
    }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@500;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @include('layouts.navbar')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    <button type="button" class="back-to-top" id="backToTop" aria-label="Back to top">
        <svg viewBox="0 0 24 24" aria-hidden="true">
            <polyline points="6 14 12 8 18 14"/>
        </svg>
    </button>

    <script>
        /* === NAVIGATION MENU === */
        document.addEventListener('DOMContentLoaded', function () {
            var toggle = document.getElementById('navToggle');
            var links = document.getElementById('navLinks');

            if (!toggle || !links) return;

            function setOpen(open) {
                links.classList.toggle('open', open);
                toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
            }

            toggle.addEventListener('click', function (e) {
                e.stopPropagation();
                setOpen(!links.classList.contains('open'));
            });

            links.addEventListener('click', function (e) {
                if (e.target.closest('a')) setOpen(false);
            });

            document.addEventListener('click', function (e) {
                if (!links.contains(e.target) && !toggle.contains(e.target)) {
                    setOpen(false);
                }
            });

            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') setOpen(false);
            });

            window.addEventListener('resize', function () {
                if (window.innerWidth > 768) setOpen(false);
            });
        });

        /* === HOMEPAGE NAVIGATION SCROLL SPY === */
        document.addEventListener('DOMContentLoaded', function () {
            if (
                window.location.pathname !== '/' &&
                window.location.pathname !== ''
            ) {
                return;
            }

            var hashLinks = document.querySelectorAll(
                '.nav-links a[data-section]'
            );

            var sections = [];

            hashLinks.forEach(function (link) {
                var id = link.getAttribute('data-section');
                var section = document.getElementById(id);

                if (section) {
                    sections.push({
                        el: section,
                        link: link
                    });
                }
            });

            function updateActiveNav() {
                var scrollY = window.pageYOffset ||
                    document.documentElement.scrollTop;

                var headerOffset = 120;
                var currentActive = null;

                sections.forEach(function (item) {
                    var top = item.el.offsetTop - headerOffset;
                    var bottom = top + item.el.offsetHeight;

                    if (scrollY >= top && scrollY < bottom) {
                        currentActive = item.link;
                    }
                });

                hashLinks.forEach(function (link) {
                    link.classList.remove('active');
                });

                if (currentActive) {
                    currentActive.classList.add('active');
                }
            }

            window.addEventListener('scroll', updateActiveNav, {
                passive: true
            });

            updateActiveNav();
        });

    </script>

    {{-- Leaflet Maps --}}
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    @stack('scripts')

</body>
</html>
