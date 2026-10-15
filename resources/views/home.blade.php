@extends('layouts.app')

@section('title', 'Diaspora | Information Security & Technology')

@section('content')

<!-- Hero Section -->
<section class="hero">
    <div class="hero-network" aria-hidden="true">
        <svg viewBox="0 0 600 400" preserveAspectRatio="xMidYMid slice">
            <line x1="40" y1="60" x2="150" y2="100" />
            <line x1="150" y1="100" x2="90" y2="180" />
            <line x1="150" y1="100" x2="230" y2="50" />
            <line x1="90" y1="180" x2="40" y2="60" />
            <line x1="230" y1="50" x2="300" y2="120" />
            <line x1="90" y1="180" x2="180" y2="220" />

            <circle cx="40" cy="60" r="3" />
            <circle cx="150" cy="100" r="4" />
            <circle cx="90" cy="180" r="3" />
            <circle cx="230" cy="50" r="3" />
            <circle cx="300" cy="120" r="3" />
            <circle cx="180" cy="220" r="3" />
        </svg>
    </div>

    <div class="hero-particles" aria-hidden="true">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <div class="container">
        <div class="hero-grid">

            <div class="hero-content">
                <div class="hero-label">Information Security & Technology</div>
                <h1><span id="typewriterText"></span></h1>
                <p>
                    Diaspora Sdn Bhd helps organisations safeguard their
                    digital environment through practical, professional
                    information security and technology solutions.
                </p>
                <div class="hero-actions">
                    <a href="{{ url('/about') }}" class="btn btn-primary">Learn More</a>
                    <a href="{{ url('/services') }}" class="btn btn-secondary">Our Services</a>
                </div>
            </div>

            <div class="hero-visual">
                <div class="ring"></div>
                <div class="ring"></div>
                <div class="ring">🛡</div>
            </div>

        </div>
    </div>

    <div class="hero-stats">
        <div class="container">
            <div class="hero-stat">
                <strong>ISO 27001</strong>
                <span>Certified Since 2022</span>
            </div>
            <div class="hero-stat">
                <strong><span class="count-up" data-target="4">4</span></strong>
                <span>Core Service Categories</span>
            </div>
            <div class="hero-stat">
                <strong><span class="count-up" data-target="100" data-suffix="%">100%</span></strong>
                <span>Bumiputera Owned</span>
            </div>
        </div>
    </div>
</section>

@php
    // Default: all clients use .png
    $extensions = array_fill(1, 40, 'png');

    // Override the exceptions
    $extensions[16] = 'jpeg';
    $extensions[35] = 'jpg';
    $extensions[39] = 'jpeg';

    $clientsRow1 = collect(range(1, 20))->map(fn($i) => "client-$i.{$extensions[$i]}");
    $clientsRow2 = collect(range(21, 40))->map(fn($i) => "client-$i.{$extensions[$i]}");
@endphp

<section class="clients-strip">
    <div class="container">
        <div class="clients-label">Trusted By Organisations Across Malaysia</div>
    </div>

    {{-- Row 1 — scrolls left --}}
    <div class="clients-track-wrap">
        <div class="clients-track scroll-left">
            @foreach ($clientsRow1->concat($clientsRow1) as $logo)
                <img src="{{ asset('images/clients/' . $logo) }}" alt="Client logo">
            @endforeach
        </div>
    </div>

    {{-- Row 2 — scrolls right --}}
    <div class="clients-track-wrap">
        <div class="clients-track scroll-right">
            @foreach ($clientsRow2->concat($clientsRow2) as $logo)
                <img src="{{ asset('images/clients/' . $logo) }}" alt="Client logo">
            @endforeach
        </div>
    </div>

</section>

<section class="section section-tight-top">
    <div class="container">

        <div class="section-heading reveal">
            <div class="section-label">What We Do</div>
            <h2>Our Services</h2>
            <p>
                Our team offers a wide range of information security
                services, divided into four core categories.
            </p>
        </div>

        <div class="services-grid reveal-stagger">

            <div class="service-card">
                <div class="service-icon-wrap">
                    <img src="{{ asset('images/SPA_LOGO3.png') }}" alt="SPA">
                </div>
                <h3>Security Posture Assessment</h3>
                <p>Understand your current security posture and identify gaps.</p>
            </div>

            <div class="service-card">
                <div class="service-icon-wrap">
                    <img src="{{ asset('images/ISMS_Logo(Latest).png') }}" alt="ISMS">
                </div>
                <h3>Information Security Management System</h3>
                <p>Establish and improve your organisation's ISMS practices.</p>
            </div>

            <div class="service-card">
                <div class="service-icon-wrap">
                    <img src="{{ asset('images/router_logo(New).png') }}" alt="Infrastructure">
                </div>
                <h3>Infrastructure Implementation Services</h3>
                <p>Reliable, secure infrastructure and technology solutions.</p>
            </div>

            <div class="service-card">
                <div class="service-icon-wrap">
                    <img src="{{ asset('images/CONDUCT_LOGO.png') }}" alt="Other Services">
                </div>
                <h3>Other Management System Services</h3>
                <p>Additional compliance and management support, tailored to you.</p>
            </div>

        </div>

        <div class="poster-preview-wrap reveal">
            <div class="poster-preview-label">Full Breakdown</div>

            <div class="poster-preview-card">
                <img src="{{ asset('images/services-poster.png') }}" alt="Services poster thumbnail">
                <div class="poster-preview-text">
                    <h4>Current Activities / Services</h4>
                    <p>See our full breakdown of governance, assurance and risk services.</p>
                    <a href="{{ asset('images/services-poster.png') }}" target="_blank" class="btn btn-secondary">View Full Poster</a>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="cert-banner reveal-stagger">
    <div class="container">

        <div class="cert-banner-badge reveal">
            <img src="{{ asset('images/logo-cert_csm27001.png') }}" alt="ISO/IEC 27001:2022 Certified">
        </div>

        <div class="cert-banner-text reveal">
            <div class="section-label">We Are Certified By</div>
            <h3>ISO/IEC 27001:2022</h3>
            <p>Certificate No. 004-IS006 — Information Security Management System</p>
            <a href="{{ url('/certification') }}" class="btn btn-primary">View Certificates</a>
        </div>

    </div>
</section>

<section class="section section-light home-about">
    <div class="container">
        <div class="home-about-grid">

            <div class="home-about-text reveal">
                <div class="section-label">About Diaspora</div>
                <h2>A practical approach to <span class="home-about-accent">information security</span></h2>
                <p>
                    We work with organisations to address information
                    security, technology and management requirements
                    through practical, professional solutions, not
                    one-size-fits-all packages.
                </p>
                <a href="{{ url('/about') }}" class="btn btn-primary">Learn More About Us</a>
            </div>

            <div class="home-about-steps reveal-stagger">

                <div class="home-about-step">
                    <span class="home-about-num">01</span>
                    <div>
                        <h3>Understand</h3>
                        <p>We begin with your organisation, its environment, systems and security requirements.</p>
                    </div>
                </div>

                <div class="home-about-step">
                    <span class="home-about-num">02</span>
                    <div>
                        <h3>Assess</h3>
                        <p>We identify risks, vulnerabilities and areas where your security posture can improve.</p>
                    </div>
                </div>

                <div class="home-about-step">
                    <span class="home-about-num">03</span>
                    <div>
                        <h3>Improve</h3>
                        <p>We help implement practical improvements for stronger, more resilient operations.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>


<section class="cta-band reveal-stagger">
    <div class="container">
        <h2>Ready to strengthen your security posture?</h2>
        <p>Take the first step in protecting your organisation. Reach out to our team today.</p>
        <a href="{{ url('/contact') }}" class="btn btn-primary">Contact Us</a>
    </div>
</section>

<script>
    // Typewriter effect for the hero section
    document.addEventListener('DOMContentLoaded', () => {
        const el = document.getElementById('typewriterText');
        const plainText = "Your information security is ";
        const accentText = "our priority.";
        let i = 0;
        let typingAccent = false;

        function type() {
            if (!typingAccent) {
                if (i < plainText.length) {
                    el.innerHTML = plainText.substring(0, i + 1);
                    i++;
                    setTimeout(type, 35);
                } else {
                    typingAccent = true;
                    i = 0;
                    setTimeout(type, 100);
                }
            } else {
                if (i < accentText.length) {
                    el.innerHTML = plainText + '<span class="accent-word">' + accentText.substring(0, i + 1) + '</span>';
                    i++;
                    setTimeout(type, 35);
                }
            }
        }

        setTimeout(type, 400);
    });

    // Count-up animation for the hero stats    
    document.addEventListener('DOMContentLoaded', () => {
        const counters = document.querySelectorAll('.count-up');
        const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        // Leave final values untouched if motion is reduced or the browser is old
        if (reduceMotion || !('IntersectionObserver' in window)) return;

        const animate = (el) => {
            const target = parseInt(el.dataset.target, 10);
            const suffix = el.dataset.suffix || '';
            const duration = 1600;
            const start = performance.now();

            const tick = (now) => {
                const progress = Math.min((now - start) / duration, 1);
                const eased = 1 - Math.pow(1 - progress, 3);   // ease-out
                el.textContent = Math.round(target * eased) + suffix;
                if (progress < 1) requestAnimationFrame(tick);
            };

            requestAnimationFrame(tick);
        };

        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    animate(entry.target);
                    obs.unobserve(entry.target);   // play once only
                }
            });
        }, { threshold: 0.6 });

        counters.forEach((el) => {
            el.textContent = '0' + (el.dataset.suffix || '');
            observer.observe(el);
        });
    });
</script>

@endsection