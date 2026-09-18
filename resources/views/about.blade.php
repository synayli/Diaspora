@extends('layouts.app')

@section('title', 'About Us | Diaspora')

@section('content')

<!-- About Hero -->
<section class="about-hero">
    <div class="container">
        <div class="about-hero-content">
            <span class="section-label">ABOUT DIASPORA</span>

            <h1>
                Building trust through
                <span class="accent-word">secure technology.</span>
            </h1>

            <p>
                Diaspora is an information security and technology company
                committed to helping organisations strengthen their digital
                security, manage information risks, and build a more resilient
                technology environment.
            </p>
        </div>
    </div>
</section>


<!-- Who We Are -->
<section class="about-section">
    <div class="container">
        <div class="about-grid">

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
                    🛡
                </div>

                <h3>Information Security</h3>

                <p>
                    Protecting information, systems, and digital assets
                    through structured security practices.
                </p>
            </div>

        </div>
    </div>
</section>


<!-- What We Do -->
<section class="about-services-section">
    <div class="container">

        <div class="about-services-heading">
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

        <div class="about-services-grid">

            <div class="about-service-card">
                <div class="service-number">01</div>

                <div class="service-icon">🔐</div>

                <h3>Information Security</h3>

                <p>
                    Helping organisations establish and improve information
                    security practices to protect critical information and
                    business assets.
                </p>
            </div>

            <div class="about-service-card">
                <div class="service-number">02</div>

                <div class="service-icon">📋</div>

                <h3>ISO/IEC 27001</h3>

                <p>
                    Supporting organisations in developing and strengthening
                    their Information Security Management System (ISMS).
                </p>
            </div>

            <div class="about-service-card">
                <div class="service-number">03</div>

                <div class="service-icon">🛡</div>

                <h3>Penetration Testing</h3>

                <p>
                    Identifying potential security weaknesses and
                    vulnerabilities to help organisations better understand
                    their security risks.
                </p>
            </div>

            <div class="about-service-card">
                <div class="service-number">04</div>

                <div class="service-icon">💻</div>

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


<!-- Our Approach -->
<section class="approach-section">
    <div class="container">

        <div class="approach-grid">

            <div class="approach-heading">
                <span class="section-label">OUR APPROACH</span>

                <h2>
                    Practical. Structured.
                    <span class="accent-word">Security-focused.</span>
                </h2>
            </div>

            <div class="approach-content">

                <div class="approach-item">
                    <span>01</span>

                    <div>
                        <h3>Understand</h3>

                        <p>
                            We begin by understanding the organisation,
                            its environment, systems, processes, and
                            security requirements.
                        </p>
                    </div>
                </div>


                <div class="approach-item">
                    <span>02</span>

                    <div>
                        <h3>Assess</h3>

                        <p>
                            We identify security risks, vulnerabilities,
                            and areas where improvements can strengthen
                            the organisation's security posture.
                        </p>
                    </div>
                </div>


                <div class="approach-item">
                    <span>03</span>

                    <div>
                        <h3>Improve</h3>

                        <p>
                            We help organisations implement practical
                            improvements that support stronger security
                            and more resilient operations.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>


<!-- Vision & Mission -->
<section class="vision-section">
    <div class="container">

        <div class="vision-grid">

            <div class="vision-card">
                <span class="section-label">OUR VISION</span>

                <h2>
                    A more secure
                    <span class="accent-word">digital future.</span>
                </h2>

                <p>
                    To contribute towards a digital environment where
                    organisations can operate confidently, securely,
                    and sustainably.
                </p>
            </div>


            <div class="mission-card">
                <span class="section-label">OUR MISSION</span>

                <h2>
                    Security that
                    <span class="accent-word">supports business.</span>
                </h2>

                <p>
                    To provide practical information security and technology
                    solutions that help organisations manage risks, protect
                    their information, and strengthen their digital
                    capabilities.
                </p>
            </div>

        </div>
    </div>
</section>


<!-- CTA -->
<section class="about-cta">
    <div class="container">

        <div class="cta-content">

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
