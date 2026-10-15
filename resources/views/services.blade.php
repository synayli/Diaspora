@extends('layouts.app')

@section('title', 'Our Services | Diaspora - ISO/IEC 27001 & Penetration Testing')

@section('content')

<!-- Services Hero Section -->
<section class="ds-hero ds-services-hero">
    <div class="ds-container">
        <div class="ds-hero-content">
            <span class="ds-badge ds-badge-dark">OUR SERVICES</span>

            <h1>
                Comprehensive security to
                <span class="ds-accent-word">protect what matters.</span>
            </h1>

            <p>
                Diaspora provides structured information security, management system,
                and infrastructure services designed to help organisations strengthen
                their security, compliance, and technology capabilities.
            </p>
        </div>
    </div>

    <!-- Background Concentric Radar Rings -->
    <div class="ds-hero-radar" aria-hidden="true">
        <div class="ds-radar-ring ds-ring-1"></div>
        <div class="ds-radar-ring ds-ring-2"></div>
        <div class="ds-radar-ring ds-ring-3"></div>
        <div class="ds-radar-ring ds-ring-4"></div>
    </div>
</section>


<!-- Trust / Standards Bar -->
<section class="ds-trust-bar">
    <div class="ds-container">
        <div class="ds-trust-grid reveal-stagger">
            <div class="ds-trust-col">
                <div class="ds-trust-value ds-text-cyan">MS ISO/IEC 27001</div>
                <div class="ds-trust-label">Primary Benchmark Standard</div>
            </div>
            <div class="ds-trust-col">
                <div class="ds-trust-value">CSM PTSP</div>
                <div class="ds-trust-label">Registered Service Provider</div>
            </div>
            <div class="ds-trust-col">
                <div class="ds-trust-value ds-text-cyan">Zero Impact</div>
                <div class="ds-trust-label">Disruption-Free Testing</div>
            </div>
            <div class="ds-trust-col">
                <div class="ds-trust-value">CVSS v3.1</div>
                <div class="ds-trust-label">Risk Severity Scoring</div>
            </div>
        </div>
    </div>
</section>

<!-- Practice Areas -->
<section class="ds-light-catalog">
    <div class="ds-container">

        <div class="ds-light-intro reveal">
            <span class="ds-pill-badge">OUR SERVICES</span>

            <h2>
                Security & Technology <br>
                <span class="ds-text-gradient">Solutions for Organisations.</span>
            </h2>

            <p>
                Diaspora provides structured information security, management system,
                and infrastructure services to help organisations strengthen their
                security, compliance, and technology capabilities.
            </p>
        </div>

        <div class="ds-light-deck reveal-stagger">

            <!-- Card 01 -->
            <article class="ds-clean-card" onclick="openServiceModal('spa')">

                <div class="ds-clean-header">
                    <span class="ds-clean-num">01 // SECURITY</span>

                    <div class="ds-clean-icon">
                        <svg viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                    </div>
                </div>

                <h3>Security Posture Assessment (SPA)</h3>

                <p class="ds-clean-desc">
                    Assessing an organisation's current security posture to identify
                    vulnerabilities, risks, and areas for improvement.
                </p>

                <div class="ds-clean-features">
                    <span class="ds-clean-feat-title">SERVICE FOCUS</span>

                    <ul>
                        <li>
                            <span class="ds-feat-check">✓</span>
                            <div>Security posture assessment</div>
                        </li>

                        <li>
                            <span class="ds-feat-check">✓</span>
                            <div>Security assessment and testing</div>
                        </li>

                        <li>
                            <span class="ds-feat-check">✓</span>
                            <div>Identification of security risks and gaps</div>
                        </li>
                    </ul>
                </div>

                <div class="ds-clean-footer">
                    <span class="ds-clean-foot-lbl">Focus</span>

                    <div class="ds-clean-foot-val">
                        <span class="ds-dot-blue"></span>
                        Information Security
                    </div>
                </div>

            </article>


            <!-- Card 02 -->
            <article class="ds-clean-card ds-card-accent" onclick="openServiceModal('isms')">

                <div class="ds-clean-header">
                    <span class="ds-clean-num">02 // ISMS</span>

                    <div class="ds-clean-icon">
                        <svg viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16
                                     a2 2 0 0 0 2 2h12
                                     a2 2 0 0 0 2-2V8z"/>

                            <polyline points="14 2 14 8 20 8"/>
                            <line x1="16" y1="13" x2="8" y2="13"/>
                            <line x1="16" y1="17" x2="8" y2="17"/>
                        </svg>
                    </div>
                </div>

                <h3>Information Security Management System (ISMS)</h3>

                <p class="ds-clean-desc">
                    Supporting organisations in establishing and maintaining an
                    effective Information Security Management System aligned with
                    recognised information security requirements.
                </p>

                <div class="ds-clean-features">
                    <span class="ds-clean-feat-title">SERVICE FOCUS</span>

                    <ul>
                        <li>
                            <span class="ds-feat-check">✓</span>
                            <div>ISMS implementation</div>
                        </li>

                        <li>
                            <span class="ds-feat-check">✓</span>
                            <div>Information security governance</div>
                        </li>

                        <li>
                            <span class="ds-feat-check">✓</span>
                            <div>ISO/IEC 27001 related services</div>
                        </li>
                    </ul>
                </div>

                <div class="ds-clean-footer">
                    <span class="ds-clean-foot-lbl">Standard</span>

                    <div class="ds-clean-foot-val">
                        <span class="ds-dot-blue"></span>
                        ISO/IEC 27001
                    </div>
                </div>

            </article>


            <!-- Card 03 -->
            <article class="ds-clean-card" onclick="openServiceModal('infra')">

                <div class="ds-clean-header">
                    <span class="ds-clean-num">03 // INFRASTRUCTURE</span>

                    <div class="ds-clean-icon">
                        <svg viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2">

                            <rect x="2" y="2" width="20" height="8"
                                  rx="2" ry="2"/>

                            <rect x="2" y="14" width="20" height="8"
                                  rx="2" ry="2"/>

                            <line x1="6" y1="6"
                                  x2="6.01" y2="6"/>

                            <line x1="6" y1="18"
                                  x2="6.01" y2="18"/>
                        </svg>
                    </div>
                </div>

                <h3>Infrastructure Implementation Services</h3>

                <p class="ds-clean-desc">
                    Supporting organisations with the implementation of technology
                    infrastructure according to their operational and technical
                    requirements.
                </p>

                <div class="ds-clean-features">
                    <span class="ds-clean-feat-title">SERVICE FOCUS</span>

                    <ul>
                        <li>
                            <span class="ds-feat-check">✓</span>
                            <div>Infrastructure implementation</div>
                        </li>

                        <li>
                            <span class="ds-feat-check">✓</span>
                            <div>Technology environment setup</div>
                        </li>

                        <li>
                            <span class="ds-feat-check">✓</span>
                            <div>Infrastructure configuration and support</div>
                        </li>
                    </ul>
                </div>

                <div class="ds-clean-footer">
                    <span class="ds-clean-foot-lbl">Focus</span>

                    <div class="ds-clean-foot-val">
                        <span class="ds-dot-blue"></span>
                        Technology Infrastructure
                    </div>
                </div>

            </article>


            <!-- Card 04 -->
            <article class="ds-clean-card" onclick="openServiceModal('mgmt')">

                <div class="ds-clean-header">
                    <span class="ds-clean-num">04 // MANAGEMENT</span>

                    <div class="ds-clean-icon">
                        <svg viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2">

                            <circle cx="12" cy="12" r="9"/>
                            <path d="M12 8v8"/>
                            <path d="M8 12h8"/>
                        </svg>
                    </div>
                </div>

                <h3>Other Management Systems Services</h3>

                <p class="ds-clean-desc">
                    Providing support for other management system requirements to
                    help organisations establish structured and effective
                    management practices.
                </p>

                <div class="ds-clean-features">
                    <span class="ds-clean-feat-title">SERVICE FOCUS</span>

                    <ul>
                        <li>
                            <span class="ds-feat-check">✓</span>
                            <div>Management system services</div>
                        </li>

                        <li>
                            <span class="ds-feat-check">✓</span>
                            <div>Management system implementation support</div>
                        </li>

                        <li>
                            <span class="ds-feat-check">✓</span>
                            <div>Organisational compliance support</div>
                        </li>
                    </ul>
                </div>

                <div class="ds-clean-footer">
                    <span class="ds-clean-foot-lbl">Focus</span>

                    <div class="ds-clean-foot-val">
                        <span class="ds-dot-blue"></span>
                        Management Systems
                    </div>
                </div>

            </article>

        </div>

    </div>
</section>

<!-- Training -->
@php
    $trainings = [
        ['Vulnerability Assessment & Penetration Testing', 'Learn how security weaknesses are identified and tested in systems and networks.'],
        ['Web Application Security Assessment', 'Understand common web application vulnerabilities and how they are assessed.'],
        ['WiFi Security Assessment', 'Explore how wireless networks are evaluated for security weaknesses.'],
        ['Cybersecurity Awareness', 'Build awareness of common cyber threats and safe practices for everyday work.'],
        ['Disaster Recovery Plan (DRP)', 'Understand how organisations plan to restore systems and data after a disruption.'],
        ['Awareness for Information Security Management System (ISMS) ISO/IEC 27001:2022', 'An introduction to the ISO/IEC 27001:2022 standard and information security management.'],
        ['Implementing the Information Security Management System (ISMS) ISO/IEC 27001:2022', 'Practical guidance on establishing an Information Security Management System.'],
        ['Information Security Incident Management Awareness', 'Learn how security incidents are recognised, reported, and handled.'],
    ];
@endphp

<section class="ds-training-section" id="training">
    <div class="ds-container">

        <div class="ds-light-intro reveal">
            <span class="ds-pill-badge">TRAINING</span>

            <h2>
                Looking for <br>
                <span class="ds-text-gradient">training services?</span>
            </h2>

            <p>
                Beyond the services we provide, we also deliver training for our
                clients, helping to guide and empower their teams. Diaspora Sdn Bhd 
                is certified as a Penetration Test Service Provider (PTSP) by CyberSecurity 
                Malaysia's Information Security Certification Body.
            </p>
        </div>

        <div class="ds-training-grid reveal-stagger">
            @foreach ($trainings as $index => [$title, $desc])
                <a href="{{ url('/contact') }}?service={{ urlencode('Training: ' . $title) }}" class="ds-training-card">
                    <span class="ds-training-num">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                    <h3>{{ $title }}</h3>
                    <p class="ds-training-desc">{{ $desc }}</p>
                    <span class="ds-training-link">Request a quote <span>→</span></span>
                </a>
            @endforeach
        </div>

        <div class="ds-training-why reveal">
            <div class="ds-training-why-heading">Why attend our training?</div>

            <div class="ds-training-why-grid reveal-stagger">
                <div class="ds-training-why-item">
                    <h4>Adaptability to Emerging Trends</h4>
                    <p>A proactive approach to staying abreast of emerging trends and technologies, giving participants a competitive edge in their fields.</p>
                </div>

                <div class="ds-training-why-item">
                    <h4>Interactive and Engaging Learning</h4>
                    <p>Training that goes beyond lectures. Participants actively apply concepts, building deeper understanding.</p>
                </div>

                <div class="ds-training-why-item">
                    <h4>Continuous Support and Follow-Up</h4>
                    <p>Your team stays connected with our experts, supporting their growth and success over the long term.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Methodology Workflow (Lifecycle Steps) -->
<section class="ds-lifecycle-section">
    <div class="ds-container">
        
        <div class="ds-lifecycle-intro reveal">
            <span class="ds-badge ds-badge-dark">ASSESSMENT WORKFLOW</span>
            <h2>The Security Posture <span class="ds-accent-word">Lifecycle.</span></h2>
            <p>Every assessment runs within strict Rules of Engagement (RoE) to safeguard business uptime while identifying real-world security risks.</p>
        </div>

        <div class="ds-lifecycle-track reveal-stagger">
            
            <div class="ds-phase-card">
                <div class="ds-phase-pill">Phase 01</div>
                <h4>Scoping & RoE</h4>
                <p>Defining target IPs, application flows, exclusions, and testing schedules with authorized approval.</p>
            </div>

            <div class="ds-phase-divider">→</div>

            <div class="ds-phase-card">
                <div class="ds-phase-pill">Phase 02</div>
                <h4>Active Testing</h4>
                <p>Automated vulnerability scanning combined with manual exploitation and privilege escalation analysis.</p>
            </div>

            <div class="ds-phase-divider">→</div>

            <div class="ds-phase-card">
                <div class="ds-phase-pill">Phase 03</div>
                <h4>Risk Reporting</h4>
                <p>Executive debriefings and comprehensive technical documentation ranked by business risk severity.</p>
            </div>

            <div class="ds-phase-divider">→</div>

            <div class="ds-phase-card">
                <div class="ds-phase-pill">Phase 04</div>
                <h4>Verification</h4>
                <p>Retesting of applied fixes to confirm gap resolution and issuance of formal security attestations.</p>
            </div>

        </div>

    </div>
</section>


<!-- FAQ Section -->
<section class="ds-inquiry-section">
    <div class="ds-container">
        <div class="ds-inquiry-layout">
            <div class="ds-inquiry-sidebar reveal">
                <span class="ds-badge ds-badge-light">FREQUENTLY ASKED</span>
                <h2>Clear answers on <span class="ds-accent-dark">our process.</span></h2>
                <p>Common questions regarding test execution, project timing, and compliance benchmarks.</p>
            </div>

            <div class="ds-inquiry-stack reveal-stagger">
                <div class="ds-faq-box">
                    <h4>Will penetration testing disrupt our daily business operations?</h4>
                    <p>No. Tests follow coordinated Rules of Engagement (RoE). Heavy scans and aggressive payloads can be scheduled during off-peak windows or on staging environments, with emergency abort protocols in place.</p>
                </div>

                <div class="ds-faq-box">
                    <h4>How long does an assessment or ISO 27001 implementation take?</h4>
                    <p>Standard Penetration Testing engagements typically run between 1 to 3 weeks depending on the number of IP targets and application complexity. ISO 27001 ISMS implementations typically take 3 to 6 months.</p>
                </div>

                <div class="ds-faq-box">
                    <h4>Do we receive support after the final report is delivered?</h4>
                    <p>Yes. Every assessment includes a technical handover session with your engineers, an executive presentation for leadership, and an included verification re-testing phase once patches are applied.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Bottom Scope CTA Section -->
<section class="ds-cta-section">
    <div class="ds-container">
        <div class="ds-cta-box reveal">
            <span class="ds-badge ds-badge-dark">INITIAL SCOPING</span>
            <h2>Ready to assess your <span class="ds-accent-word">security posture?</span></h2>
            <p>
                Reach out to our technical team for an initial scoping questionnaire. We will work with you to define test boundaries and provide a formal proposal.
            </p>

            <div class="ds-cta-actions">
                <a href="{{ url('/contact') }}" class="ds-btn-solid">
                    Request Scope Assessment
                    <span>→</span>
                </a>
            </div>
        </div>
    </div>
</section>


{{-- Service detail modal --}}
<div class="service-modal" id="serviceModal">
    <div class="service-modal-content">
        <button type="button" class="service-modal-close" onclick="closeServiceModal()">&times;</button>
        <div id="serviceModalBody"></div>
    </div>
</div>

<script>
    const serviceData = {
        spa: {
            num: "01 // SECURITY",
            title: "Security Posture Assessment (SPA)",
            desc: "Assessing an organisation's current security posture to identify vulnerabilities, risks, and areas for improvement.",
            youtube: "PPpNlEnmNhA",
            points: [
                "Security posture assessment",
                "Security assessment and testing",
                "Identification of security risks and gaps"
            ],
            focus: "Information Security"
        },
        isms: {
            num: "02 // ISMS",
            title: "Information Security Management System (ISMS)",
            desc: "Supporting organisations in establishing and maintaining an effective Information Security Management System aligned with recognised information security requirements.",
            youtube: "SoZSOUz6nXE",
            points: [
                "ISMS implementation",
                "Information security governance",
                "ISO/IEC 27001 related services"
            ],
            focus: "ISO/IEC 27001"
        },
        infra: {
            num: "03 // INFRASTRUCTURE",
            title: "Infrastructure Implementation Services",
            desc: "Supporting organisations with the implementation of technology infrastructure according to their operational and technical requirements.",
            youtube: null,
            points: [
                "Infrastructure implementation",
                "Technology environment setup",
                "Infrastructure configuration and support"
            ],
            focus: "Technology Infrastructure"
        },
        mgmt: {
            num: "04 // MANAGEMENT",
            title: "Other Management Systems Services",
            desc: "Providing support for other management system requirements to help organisations establish structured and effective management practices.",
            youtube: null,
            points: [
                "Management system services",
                "Management system implementation support",
                "Organisational compliance support"
            ],
            focus: "Management Systems"
        }
    };

    window.openServiceModal = function (key) {
        const data = serviceData[key];
        if (!data) return;

        let videoHtml = '';
        if (data.youtube) {
            videoHtml = `
                <div class="service-modal-video">
                    <iframe
                        src="https://www.youtube.com/embed/${data.youtube}"
                        title="${data.title}"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            `;
        }

        let pointsHtml = data.points.map(p => `<li><span style="color: var(--accent);">✓</span><div>${p}</div></li>`).join('');

        document.getElementById('serviceModalBody').innerHTML = `
            <div class="service-modal-num">${data.num}</div>
            <h2>${data.title}</h2>
            <p class="service-modal-desc">${data.desc}</p>
            ${videoHtml}
            <div class="service-modal-list-title">Service Focus</div>
            <ul class="service-modal-list">${pointsHtml}</ul>
            <div class="service-modal-foot">
                <span style="width:8px;height:8px;border-radius:50%;background:var(--accent);display:inline-block;"></span>
                ${data.focus}
            </div>
            <a href="/contact?service=${encodeURIComponent(data.title)}" class="service-modal-cta">
                Enquire About This Service <span>→</span>
            </a>
        `;

        document.getElementById('serviceModal').classList.add('active');
        document.body.style.overflow = 'hidden';
    };

    window.closeServiceModal = function () {
        document.getElementById('serviceModal').classList.remove('active');
        document.body.style.overflow = '';
    };

    document.addEventListener('click', (e) => {
        const modal = document.getElementById('serviceModal');
        if (e.target === modal) closeServiceModal();
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeServiceModal();
    });
</script>

@endsection