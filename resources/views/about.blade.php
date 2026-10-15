
@extends('layouts.app')

@section('title', 'About Us | Diaspora')

@section('content')

<!-- About Hero -->
<section class="ds-hero about-hero">
    <div class="ds-container about-hero-container">
        <div class="ds-hero-content about-hero-content">
            <span class="ds-badge ds-badge-dark">ABOUT DIASPORA</span>

            <h1>
                Building trust through
                <span class="ds-accent-word">secure technology.</span>
            </h1>

            <p>
                Diaspora is an information security and technology company
                committed to helping organisations strengthen their digital
                security, manage information risks, and build a more
                resilient technology environment.
            </p>
        </div>

        <div class="about-hero-visual" aria-hidden="true">
            <div class="hero-orbit orbit-one"></div>
            <div class="hero-orbit orbit-two"></div>
            <div class="hero-orbit orbit-three"></div>

            <div class="hero-shield">
                <svg viewBox="0 0 24 24" fill="none">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"/>
                    <path d="m9 12 2 2 4-4"/>
                </svg>
            </div>

            <span class="hero-node node-one"></span>
            <span class="hero-node node-two"></span>
            <span class="hero-node node-three"></span>
        </div>
    </div>
</section>

<!-- Who We Are -->
<section class="about-section">
    <div class="container">
        <div class="about-grid reveal">

            <div class="about-text">
                <span class="section-label">WHO WE ARE</span>

                <h2>
                    Security-minded technology for
                    <span class="accent-word">modern organisations.</span>
                </h2>

                <p>
                    In an increasingly connected world, organisations face
                    growing challenges in protecting information, systems,
                    and digital infrastructure.
                </p>

                <p>
                    At Diaspora, we combine information security knowledge
                    with technology expertise to help organisations identify
                    risks, improve their security posture, and establish
                    practical solutions that support their business needs.
                </p>

                <p>
                    Our approach focuses on understanding each organisation's
                    environment and delivering solutions that are practical,
                    structured, and aligned with security best practices.
                </p>
            </div>

            <div class="about-image-card">
                <div class="about-icon">
                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"/>
                        <path d="m9 12 2 2 4-4"/>
                    </svg>
                </div>

                <span class="about-card-eyebrow">SECURITY FIRST</span>
                <h3>Information Security</h3>

                <p>
                    Protecting information, systems, and digital assets
                    through structured security practices.
                </p>

                <div class="about-card-decoration" aria-hidden="true">
                    <span></span><span></span><span></span>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- What We Do -->
<section class="about-services-section">
    <div class="container">

        <div class="about-services-heading reveal">
            <span class="section-label">WHAT WE DO</span>

            <h2>
                Security and technology
                <span class="accent-word">with purpose.</span>
            </h2>

            <p>
                Our services are designed to help organisations understand,
                manage, and strengthen their information security environment.
            </p>
        </div>

        <div class="about-services-grid reveal-stagger">

            <div class="about-service-card">
                <div class="service-card-top">
                    <span class="service-number">01</span>
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"/>
                            <path d="m9 12 2 2 4-4"/>
                        </svg>
                    </div>
                </div>

                <h3>Information Security</h3>
                <p>
                    Helping organisations establish and improve information
                    security practices to protect critical information and
                    business assets.
                </p>
            </div>

            <div class="about-service-card">
                <div class="service-card-top">
                    <span class="service-number">02</span>
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8Z"/>
                            <path d="M14 2v6h6M8 13h8M8 17h8"/>
                        </svg>
                    </div>
                </div>

                <h3>ISO/IEC 27001</h3>
                <p>
                    Supporting organisations in developing and strengthening
                    their Information Security Management System (ISMS).
                </p>
            </div>

            <div class="about-service-card">
                <div class="service-card-top">
                    <span class="service-number">03</span>
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none">
                            <circle cx="11" cy="11" r="7"/>
                            <path d="m16 16 5 5M8 11h6M11 8v6"/>
                        </svg>
                    </div>
                </div>

                <h3>Penetration Testing</h3>
                <p>
                    Identifying potential security weaknesses and
                    vulnerabilities to help organisations better understand
                    their security risks.
                </p>
            </div>

            <div class="about-service-card">
                <div class="service-card-top">
                    <span class="service-number">04</span>
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none">
                            <rect x="2" y="3" width="20" height="14" rx="2"/>
                            <path d="M8 21h8M12 17v4M6 7h12"/>
                        </svg>
                    </div>
                </div>

                <h3>Technology Solutions</h3>
                <p>
                    Developing practical technology solutions that support
                    operational needs while keeping security considerations
                    at the forefront.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Our Approach: Visual Timeline -->
<section class="approach-section about-timeline-section">
    <div class="container">

        <div class="timeline-heading reveal">
            <span class="section-label">OUR APPROACH</span>

            <h2>
                Practical. Structured.
                <span class="accent-word">Security-focused.</span>
            </h2>

            <p>
                A structured approach to understanding risks, strengthening
                security, and supporting resilient operations.
            </p>
        </div>

        <div class="about-timeline">

            <article class="timeline-step reveal">
                <div class="timeline-marker">
                    <span>01</span>
                </div>

                <div class="timeline-card">
                    <span class="timeline-kicker">DISCOVER</span>
                    <h3>Understand</h3>
                    <p>
                        We begin by understanding the organisation, its
                        environment, systems, processes, and security
                        requirements.
                    </p>
                </div>
            </article>

            <article class="timeline-step reveal">
                <div class="timeline-marker">
                    <span>02</span>
                </div>

                <div class="timeline-card">
                    <span class="timeline-kicker">EVALUATE</span>
                    <h3>Assess</h3>
                    <p>
                        We identify security risks, vulnerabilities, and
                        areas where improvements can strengthen the
                        organisation's security posture.
                    </p>
                </div>
            </article>

            <article class="timeline-step reveal">
                <div class="timeline-marker">
                    <span>03</span>
                </div>

                <div class="timeline-card">
                    <span class="timeline-kicker">STRENGTHEN</span>
                    <h3>Improve</h3>
                    <p>
                        We help organisations implement practical
                        improvements that support stronger security
                        and more resilient operations.
                    </p>
                </div>
            </article>

        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="section about-mission-section">
    <div class="container">

        <div class="mission-vision-grid reveal-stagger">

            <div class="mv-card">
                <div class="mv-icon">
                    <svg viewBox="0 0 24 24" fill="none">
                        <circle cx="12" cy="12" r="9"/>
                        <circle cx="12" cy="12" r="5"/>
                        <circle cx="12" cy="12" r="1"/>
                    </svg>
                </div>

                <div class="section-label">OUR MISSION</div>
                <h3>Managing with greatness and untamed strength</h3>
                <p>Improving everything, daily.</p>
            </div>

            <div class="mv-card">
                <div class="mv-icon">
                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="m12 3 2.8 5.7 6.2.9-4.5 4.4 1.1 6.2-5.6-3-5.6 3 1.1-6.2L3 9.6l6.2-.9L12 3Z"/>
                    </svg>
                </div>

                <div class="section-label">OUR VISION</div>
                <h3>Leading with inspiration and courage</h3>
                <p>
                    Obsessed with future possibility, and in a love affair
                    with change.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- CTA -->
<section class="about-cta">
    <div class="container">
        <div class="cta-content reveal">

            <span class="section-label">LET'S WORK TOGETHER</span>

            <h2>
                Strengthen your organisation's
                <span class="accent-word">security.</span>
            </h2>

            <p>
                Discover how Diaspora can support your information security
                and technology needs.
            </p>

            <a href="{{ url('/contact') }}" class="cta-button">
                Get in Touch
                <span>→</span>
            </a>

        </div>
    </div>
</section>

@endsection
