@extends('layouts.app')

@section('title', 'Certification | Diaspora')

@section('content')

<section class="ds-hero ds-certification-hero">
    <div class="ds-container">
        <div class="ds-hero-content">
            <span class="ds-badge ds-badge-dark">CERTIFICATION</span>

            <h1>
                Certified to internationally
                <span class="ds-accent-word">recognised standards.</span>
            </h1>

            <p>
                Our certifications reflect our commitment to information
                security best practices and continuous compliance with
                recognised international and national standards.
            </p>
        </div>
    </div>

    <!-- Certification Visual -->
    <div class="ds-cert-visual" aria-hidden="true">
        <div class="ds-cert-frame ds-cert-frame-1"></div>
        <div class="ds-cert-frame ds-cert-frame-2"></div>
        <div class="ds-cert-frame ds-cert-frame-3"></div>
        <div class="ds-cert-orbit"></div>
        <div class="ds-cert-core"></div>
        <span class="ds-cert-dot ds-cert-dot-1"></span>
        <span class="ds-cert-dot ds-cert-dot-2"></span>
        <span class="ds-cert-dot ds-cert-dot-3"></span>
        <span class="ds-cert-dot ds-cert-dot-4"></span>
    </div>
</section>

<section class="section section-light">
    <div class="container">

        <div class="section-heading reveal">
            <div class="section-label">Why It Matters</div>
            <h2>Built on trust, not claims.</h2>
            <p>Certification isn't just a badge, it's proof of an ongoing commitment to recognised standards.</p>
        </div>

        <div class="cert-reasons-list reveal-stagger">

            <div class="cert-reason-row">
                <span class="cert-reason-index">01</span>
                <div class="cert-reason-text">
                    <h3>Independently Verified</h3>
                    <p>Our certifications are audited and issued by recognised third-party 
                        certification bodies. Not self-declared claims.</p>
                </div>
            </div>

            <div class="cert-reason-row">
                <span class="cert-reason-index">02</span>
                <div class="cert-reason-text">
                    <h3>Actively Maintained</h3>
                    <p>Certification isn't a one-time badge, it requires ongoing compliance and periodic 
                    reassessment to remain valid.</p>
                </div>
            </div>

            <div class="cert-reason-row">
                <span class="cert-reason-index">03</span>
                <div class="cert-reason-text">
                    <h3>A Signal of Trust</h3>
                    <p>Working with a certified provider gives your organisation confidence 
                        that our practices meet recognised industry standards.</p>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="section">
    <div class="container">

        <div class="section-heading reveal">
            <div class="section-label">Our Certifications</div>
            <h2>Verified & Accredited</h2>
            <p>
                Diaspora Sdn Bhd holds the following certifications,
                each independently audited and issued by recognised
                certification bodies.
            </p>
        </div>

        <div class="cert-page-grid reveal-stagger">

          <div class="cert-page-card">
            <div class="cert-page-badge">
                <img src="{{ asset('images/logo-cert_csm27001.png') }}" alt="ISO/IEC 27001:2022">
            </div>
            <h3>ISO/IEC 27001:2022</h3>
            <p class="cert-page-meta">Certificate No. 004-IS006</p>
            <p>
                The global benchmark for Information Security Management
                Systems (ISMS), ensuring the confidentiality, integrity and
                availability of information across our organisation.
            </p>
            <a
                href="{{ asset('images/Cert-ISMS-ISO-27001-2022.png') }}"
                target="_blank"
                rel="noopener noreferrer"
                class="btn btn-secondary"
            >
                View Certificate
            </a>
        </div>

        <div class="cert-page-card">
            <div class="cert-page-badge">
                <img src="{{ asset('images/logo-cert_csm27001.png') }}" alt="Penetration Test Service Provider">
            </div>
            <h3>Penetration Test Service Provider</h3>
            <p class="cert-page-meta">CyberSecurity Malaysia — ISCB</p>
            <p>
                Recognised under CyberSecurity Malaysia's PTSP Scheme,
                confirming our penetration testing services meet national
                standards of professionalism and assurance.
            </p>
            <a
                href="{{ asset('images/Cert-PTSP.png') }}"
                target="_blank"
                rel="noopener noreferrer"
                class="btn btn-secondary"
            >
                View Certificate
            </a>
        </div>
    </div>
</section>

<section class="cta-band">
    <div class="container">
        <h2>Have questions about our certifications?</h2>
        <p>Reach out and our team will be happy to provide more information.</p>
        <a href="{{ url('/contact') }}" class="btn btn-primary">Contact Us</a>
    </div>
</section>

@endsection