@extends('layouts.app')

@section('title', 'Diaspora | Information Security & Technology')

@section('content')

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-grid">

            <div class="hero-content">
                <div class="hero-label">Information Security & Technology</div>
                <h1>Your information security is <span class="accent-word">our priority.</span></h1>
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
                <strong>4</strong>
                <span>Core Service Categories</span>
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

        <div class="section-heading">
            <div class="section-label">What We Do</div>
            <h2>Our Services</h2>
            <p>
                Our team offers a wide range of information security
                services, divided into four core categories.
            </p>
        </div>

        <div class="services-grid">

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

        <div class="poster-preview-wrap">
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

<section class="cert-banner">
    <div class="container">

        <div class="cert-banner-badge">
            <img src="{{ asset('images/logo-cert_csm27001.png') }}" alt="ISO/IEC 27001:2022 Certified">
        </div>

        <div class="cert-banner-text">
            <div class="section-label">We Are Certified By</div>
            <h3>ISO/IEC 27001:2022</h3>
            <p>Certificate No. 004-IS006 — Information Security Management System</p>
            <a href="{{ url('/certification') }}" class="btn btn-primary">View Certificates</a>
        </div>

    </div>
</section>

<section class="section section-light">
    <div class="container">
        <div class="section-heading">
            <div class="section-label">About Diaspora</div>
            <h2>A practical approach to information security</h2>
            <p>
                We work with organisations to address information
                security, technology and management requirements
                through practical, professional solutions — not
                one-size-fits-all packages.
            </p>
        </div>
        <a href="{{ url('/about') }}" class="btn btn-primary">Learn More</a>
    </div>
</section>


<section class="cta-band">
    <div class="container">
        <h2>Ready to strengthen your security posture?</h2>
        <p>Take the first step in protecting your organisation — reach out to our team today.</p>
        <a href="{{ url('/contact') }}" class="btn btn-primary">Contact Us</a>
    </div>
</section>

@endsection