@extends('layouts.app')

@section('title', 'Diaspora | Information Security & Technology')

@section('content')

{{-- HERO SECTION --}}
<section class="hero" id="home">
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
        @for ($i = 0; $i < 10; $i++)
            <div class="particle"></div>
        @endfor
    </div>

    <div class="container hero-main">
        <div class="hero-grid">

            <div class="hero-content reveal">
                <div class="hero-label">
                    YOUR NEXT MOVE. MORE SECURE.
                </div>

                <h1 class="hero-title">
                    <span id="typewriterLine1"></span><span id="typewriterCursor1" class="typewriter-cursor"></span>
                    <br>
                    <span id="typewriterLine2"></span><span id="typewriterCursor2" class="typewriter-cursor"></span>
                </h1>

                <p>
                    Understand your risks. Strengthen your defences.
                    Keep your organisation moving forward.
                </p>

                <div class="hero-actions">
                    <a href="{{ url('/#contact') }}" class="btn btn-primary">
                        Discuss Your Requirements
                    </a>

                    <a href="#services" class="btn btn-secondary">
                        Explore Our Services
                    </a>
                </div>
            </div>

            <div class="hero-visual reveal">
                <div class="rd-stage">
                    <svg class="rd-svg" viewBox="0 0 420 440">
                        <circle class="rd-ring rd-ring-dash" cx="210" cy="200" r="190" />
                        <circle class="rd-ring" cx="210" cy="200" r="150" />
                        <circle class="rd-ring" cx="210" cy="200" r="100" />
                        <circle class="rd-ring" cx="210" cy="200" r="50" />
                        <line class="rd-axis" x1="20" y1="200" x2="400" y2="200" />
                        <line class="rd-axis" x1="210" y1="10" x2="210" y2="390" />
                        <polygon class="rd-triangle" points="210,50 340,275 80,275" />
                    </svg>

                    <div class="rd-sweep"></div>
                    <div class="rd-hub">
                        <i class="fa-solid fa-lock"></i>
                    </div>

                    <div class="rd-node rd-node-1">
                        <span class="rd-num">01</span>
                        <div class="rd-label">
                            <small>Assess</small>
                            <strong>Know your exposure</strong>
                        </div>
                    </div>

                    <div class="rd-node rd-node-2">
                        <span class="rd-num">02</span>
                        <div class="rd-label">
                            <small>Strengthen</small>
                            <strong>Build with confidence</strong>
                        </div>
                    </div>

                    <div class="rd-node rd-node-3">
                        <span class="rd-num">03</span>
                        <div class="rd-label">
                            <small>Recover</small>
                            <strong>Be ready to respond</strong>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- TRUST STRIP: REMAINS INSIDE THE HERO --}}
    <div class="hero-stats">
        <div class="container">
            <div class="hero-stat">
                <span>Malaysian Expertise</span>
            </div>

            <div class="hero-stat">
                <span>Established 2007</span>
            </div>

            <div class="hero-stat">
                <span>Business-Focused Security</span>
            </div>

            <div class="hero-stat-note">
                Resilience starts with readiness
            </div>
        </div>
    </div>
</section>

{{-- CREDENTIALS STRIP: NOW OUTSIDE THE HERO --}}
<section class="ds-credentials-strip reveal" aria-label="Our expertise">
    <div class="ds-credentials-inner">

        <div class="ds-credentials-intro">
            Built around your<br>priorities
        </div>

        <div class="ds-credential">
            <strong>ISO/IEC 27001</strong>
            <span>ISMS</span>
        </div>

        <div class="ds-credential">
            <strong>ISO 22301</strong>
            <span>BCMS</span>
        </div>

        <div class="ds-credential">
            <strong>NCII</strong>
            <span>AKTA 854</span>
        </div>

        <div class="ds-credential">
            <strong>ICT</strong>
            <span>RESILIENCE</span>
        </div>

    </div>
</section>

{{-- SERVICES --}}
<section class="ds-expertise-section" id="services">
    <div class="ds-expertise-container">

        <!-- Section heading -->
        <div class="ds-expertise-header reveal">
            <span class="ds-expertise-eyebrow">01 / OUR EXPERTISE</span>

            <h2>
                Stronger security.<br>
                From strategy to action.
            </h2>

            <div class="ds-expertise-heading-line"></div>

            <p>
                One connected approach to understanding your exposure,
                building effective governance and preparing for disruption.
            </p>
        </div>

        <!-- Three service cards -->
        <div class="ds-expertise-grid reveal-stagger">

            <!-- 01 Assessment & Testing -->
            <article class="ds-expertise-card">
                <div class="ds-expertise-card-top">
                    <span class="ds-expertise-icon" aria-hidden="true">
                        <i class="fa-solid fa-crosshairs"></i>
                    </span>
                    <span class="ds-expertise-number">01</span>
                </div>

                <h3>Cyber Security<br>Assessment & Testing</h3>

                <p class="ds-expertise-description">
                    Find the gaps. Detect potential compromises. Put your
                    incident readiness to the test.
                </p>

                <ul class="ds-expertise-list">
                    <li>Security Posture Assessment</li>
                    <li>Compromise Assessment</li>
                    <li>Cyber Drill</li>
                </ul>

                <a href="{{ route('services.assessment') }}" class="ds-expertise-link">
                    Explore assessment services
                    <span aria-hidden="true">↗</span>
                </a>
            </article>

            <!-- 02 Governance & Compliance -->
            <article class="ds-expertise-card">
                <div class="ds-expertise-card-top">
                    <span class="ds-expertise-icon" aria-hidden="true">
                        <i class="fa-solid fa-scale-balanced"></i>
                    </span>
                    <span class="ds-expertise-number">02</span>
                </div>

                <h3>Governance<br>& Compliance</h3>

                <p class="ds-expertise-description">
                    Turn complex requirements into practical policies,
                    clear responsibilities and effective controls.
                </p>

                <ul class="ds-expertise-list">
                    <li>ISMS & BCMS implementation</li>
                    <li>NCII readiness under Akta 854</li>
                    <li>Cyber Security Audit</li>
                </ul>

               <a href="{{ route('services.governance') }}" class="ds-expertise-link">
                    Explore governance services
                    <span aria-hidden="true">↗</span>
                </a>
            </article>

            <!-- 03 Disaster Recovery & Simulation -->
            <article class="ds-expertise-card">
                <div class="ds-expertise-card-top">
                    <span class="ds-expertise-icon" aria-hidden="true">
                        <i class="fa-solid fa-arrows-rotate"></i>
                    </span>
                    <span class="ds-expertise-number">03</span>
                </div>

                <h3>Disaster Recovery<br>& Simulation</h3>

                <p class="ds-expertise-description">
                    Build a recovery plan your team can use and test it
                    before you need it.
                </p>

                <ul class="ds-expertise-list">
                    <li>DRP development & review</li>
                    <li>Recovery strategy design</li>
                    <li>Simulation exercises</li>
                </ul>

                <a href="{{ route('services.disaster-recovery') }}" class="ds-expertise-link">
                    Explore recovery services
                    <span aria-hidden="true">↗</span>
                </a>
            </article>

        </div>
    </div>
</section>

{{-- NCII READINESS --}}
<section class="ds-ncii-dark" id="ncii-readiness">
    <div class="ds-ncii-container">

        {{-- LEFT COLUMN --}}
        <div class="ds-ncii-left reveal">

            <span class="ds-ncii-eyebrow">
                02 / NCII READINESS
            </span>

            <h2>
                Critical infrastructure.<br>
                Clearer direction.
            </h2>

            <p class="ds-ncii-description">
                Addressing cybersecurity requirements under
                <strong>Akta 854</strong>? Bring structure to your next
                steps with practical support for National Critical
                Information Infrastructure entities.
            </p>

            <a href="{{ url('/#contact') }}" class="ds-ncii-cta">
                <span>Discuss your NCII priorities</span>
                <span class="ds-ncii-arrow" aria-hidden="true">↗</span>
            </a>

            <div class="ds-ncii-tagline">
                GOVERNANCE · RISK · COMPLIANCE · ASSURANCE
            </div>

        </div>

        {{-- RIGHT COLUMN --}}
        <div class="ds-ncii-right reveal-stagger">

            <article class="ds-ncii-item">
                <span class="ds-ncii-number">01</span>

                <div class="ds-ncii-item-content">
                    <h3>Understand your requirements</h3>

                    <p>
                        Awareness and gap assessments against applicable
                        regulations, Arahan Ketua Eksekutif and sector
                        Tataamalan.
                    </p>
                </div>
            </article>

            <article class="ds-ncii-item">
                <span class="ds-ncii-number">02</span>

                <div class="ds-ncii-item-content">
                    <h3>Build the foundations</h3>

                    <p>
                        Governance structures, roles, policies,
                        documentation and cybersecurity risk assessments.
                    </p>
                </div>
            </article>

            <article class="ds-ncii-item">
                <span class="ds-ncii-number">03</span>

                <div class="ds-ncii-item-content">
                    <h3>Assess and improve</h3>

                    <p>
                        Cybersecurity audit, clear findings and compliance
                        action planning to guide improvement.
                    </p>
                </div>
            </article>

        </div>

    </div>
</section>

{{-- ABOUT US --}}
<section class="ds-about-approach" id="about-us">
    <div class="ds-about-approach-container">

        {{-- Left: Company overview panel --}}
        <div class="ds-about-panel reveal">

            <div class="ds-about-year">2007</div>

            <div class="ds-about-year-caption">
                THE START OF OUR JOURNEY
            </div>

            <div class="ds-about-focus-grid reveal-stagger">

                <div class="ds-about-focus">
                    Information<br>
                    Security
                </div>

                <div class="ds-about-focus">
                    Governance<br>
                    &amp; Risk
                </div>

                <div class="ds-about-focus">
                    Business<br>
                    Continuity
                </div>

                <div class="ds-about-focus">
                    Cyber<br>
                    Resilience
                </div>

            </div>

            <div class="ds-about-panel-note">
                <span class="ds-about-dot"></span>
                ROOTED IN MALAYSIA. FOCUSED ON YOUR BUSINESS.
            </div>

        </div>


        {{-- Right: About Diaspora and its approach --}}
        <div class="ds-about-content reveal">

            <div class="ds-about-eyebrow">
                03 / THE DIASPORA APPROACH
            </div>

            <h2>
                Technical depth.<br>
                Practical direction.
            </h2>

            <p>
                Diaspora Sdn. Bhd. is a Malaysian Bumiputera company
                specializing in information security. Since 2007, we
                have helped organizations approach security challenges
                with a clearer understanding of their risks and priorities.
            </p>

            <p>
                We connect technical assessment with governance and
                recovery planning, so findings can become meaningful action.
            </p>

            <div class="ds-about-approach-list reveal-stagger">

                <div class="ds-about-approach-row">
                    <strong>Understand</strong>
                    <span>Your environment, objectives and scope.</span>
                </div>

                <div class="ds-about-approach-row">
                    <strong>Evaluate</strong>
                    <span>Your risks, controls and readiness.</span>
                </div>

                <div class="ds-about-approach-row">
                    <strong>Enable</strong>
                    <span>Practical decisions and improvement.</span>
                </div>

            </div>

            <a href="{{ url('/certification') }}" class="ds-about-credentials">
                View our published credentials
                <span aria-hidden="true">↗</span>
            </a>

        </div>

    </div>
</section>

{{-- TRAINING --}}
<section class="ds-training-section" id="training">
    <div class="ds-training-container">

        <!-- Left: Heading and introduction -->
        <div class="ds-training-intro reveal">

            <span class="ds-training-eyebrow">
                04 / BUILD YOUR TEAM'S CAPABILITY
            </span>

            <h2>
                Knowledge that<br>
                moves into practice.
            </h2>

            <div class="ds-training-heading-line"></div>

            <p>
                Help your people understand their responsibilities and practise
                the skills that support stronger security.
            </p>

        </div>

        <!-- Right: Training options -->
       <div class="ds-training-list reveal-stagger">

            <a href="{{ url('/#contact') }}" class="ds-training-item">
                <span class="ds-training-number">01</span>

                <span class="ds-training-details">
                    <span class="ds-training-title">Cybersecurity awareness</span>
                    <span class="ds-training-description">
                        People & everyday security
                    </span>
                </span>

                <span class="ds-training-arrow" aria-hidden="true">↗</span>
            </a>

            <a href="{{ url('/#contact') }}" class="ds-training-item">
                <span class="ds-training-number">02</span>

                <span class="ds-training-details">
                    <span class="ds-training-title">
                        ISMS awareness & implementation
                    </span>
                    <span class="ds-training-description">
                        Policies, risks & controls
                    </span>
                </span>

                <span class="ds-training-arrow" aria-hidden="true">↗</span>
            </a>

            <a href="{{ url('/#contact') }}" class="ds-training-item">
                <span class="ds-training-number">03</span>

                <span class="ds-training-details">
                    <span class="ds-training-title">
                        Technical security assessment
                    </span>
                    <span class="ds-training-description">
                        VAPT, web applications & Wi-Fi
                    </span>
                </span>

                <span class="ds-training-arrow" aria-hidden="true">↗</span>
            </a>

            <a href="{{ url('/#contact') }}" class="ds-training-item">
                <span class="ds-training-number">04</span>

                <span class="ds-training-details">
                    <span class="ds-training-title">
                        DRP & incident readiness
                    </span>
                    <span class="ds-training-description">
                        Preparation, response & recovery
                    </span>
                </span>

                <span class="ds-training-arrow" aria-hidden="true">↗</span>
            </a>

        </div>
    </div>
</section>

{{-- FAQ — A LITTLE CLARITY --}}
<section class="ds-detail-faq">
    <div class="ds-container ds-detail-faq-inner">

         <div class="ds-detail-faq-heading reveal">
            <span class="ds-eyebrow">A LITTLE CLARITY</span>

            <h2>
                Where should<br>
                you start?
            </h2>

            <p>
                You do not need to have every answer.
                Start with the challenge you want to address.
            </p>
        </div>

        <div class="ds-detail-faq-list reveal-stagger">

            <details class="ds-detail-faq-item">
                <summary>
                    <span>We're unsure which assessment we need.</span>
                    <span class="ds-faq-toggle" aria-hidden="true"></span>
                </summary>

                <div class="ds-detail-faq-answer">
                    <p>
                        Start with your objectives, systems in scope and any
                        known concerns. Diaspora can discuss whether a security
                        posture assessment, compromise assessment or readiness
                        exercise fits your requirements.
                    </p>
                </div>
            </details>

            <details class="ds-detail-faq-item">
                <summary>
                    <span>Can you help us prepare for NCII compliance?</span>
                    <span class="ds-faq-toggle" aria-hidden="true"></span>
                </summary>

                <div class="ds-detail-faq-answer">
                    <p>
                        Our services include awareness, gap assessment,
                        governance and documentation support, cybersecurity
                        risk assessment and audit. The engagement scope will
                        reflect the requirements applicable to your entity.
                    </p>
                </div>
            </details>

            <details class="ds-detail-faq-item">
                <summary>
                    <span>We already have a DRP. What comes next?</span>
                    <span class="ds-faq-toggle" aria-hidden="true"></span>
                </summary>

                <div class="ds-detail-faq-answer">
                    <p>
                        A review and simulation exercise can help your team
                        test recovery procedures, dependencies and coordination
                        against your agreed recovery objectives.
                    </p>
                </div>
            </details>

            <details class="ds-detail-faq-item">
                <summary>
                    <span>What information should we share initially?</span>
                    <span class="ds-faq-toggle" aria-hidden="true"></span>
                </summary>

                <div class="ds-detail-faq-answer">
                    <p>
                        Share your organisation, the service you need, a
                        high-level description of your requirements and your
                        expected timeline. Please do not include passwords
                        or sensitive system details.
                    </p>
                </div>
            </details>

        </div>

    </div>
</section>

{{-- LATEST CYBERSECURITY INSIGHTS --}}
<section class="ds-insights-section section section-light">
    <div class="container">

        {{-- Section heading --}}
        <div class="ds-insights-heading reveal">

            <div class="ds-insights-eyebrow">
                06 / INSIGHTS &amp; UPDATES
            </div>

            <div class="ds-insights-heading-row">
                <div>
                    <h2>
                        The latest in
                        <span>cybersecurity.</span>
                    </h2>

                    <p>
                        Explore current threats, emerging vulnerabilities
                        and developments shaping the security landscape.
                    </p>
                </div>
            </div>

        </div>

        @php
            $validInsights = collect($insights ?? [])
                ->filter(function ($article) {
                    return is_array($article)
                        && !empty($article['url'])
                        && !empty($article['title']);
                })
                ->take(6);
        @endphp

        {{-- Article grid --}}
        <div class="ds-insights-grid reveal-stagger">
            @forelse ($validInsights as $article)
                <a
                    href="{{ $article['url'] }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="ds-insights-card"
                    aria-label="Read article: {{ $article['title'] }}"
                >
                    <div class="ds-insights-card-top">
                        <span class="ds-insights-number">
                            {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                        </span>

                        <span class="ds-insights-tag">
                            {{ $article['category'] ?? 'Cybersecurity' }}
                        </span>
                    </div>

                    <div class="ds-insights-card-content">
                        <h3>{{ $article['title'] }}</h3>

                        <p>
                            {{ $article['description'] ?? 'Read the latest cybersecurity news and developments.' }}
                        </p>
                    </div>

                    <div class="ds-insights-card-footer">
                        <div class="ds-insights-source">
                            <span class="ds-insights-source-dot"></span>

                            <span>The Hacker News</span>

                            @if (!empty($article['published_at']))
                                <span class="ds-insights-date">
                                    {{ $article['published_at'] }}
                                </span>
                            @endif
                        </div>

                        <span class="ds-insights-arrow" aria-hidden="true">
                            ↗
                        </span>
                    </div>
                </a>
            @empty
                <div class="ds-insights-empty">
                    <span class="ds-insights-empty-mark">DSB / 00</span>

                    <h3>Insights are temporarily unavailable.</h3>

                    <p>
                        Please check back soon for the latest cybersecurity
                        news and developments.
                    </p>
                </div>
            @endforelse
        </div>

        {{-- View all --}}
        <div class="ds-insights-bottom reveal">
            <p>
                Independent reporting. A clearer view of the threat landscape.
            </p>

            <a
                href="https://thehackernews.com/"
                target="_blank"
                rel="noopener noreferrer"
                class="ds-insights-view-all"
            >
                <span>Explore all news</span>
                <span class="ds-insights-view-arrow" aria-hidden="true">↗</span>
            </a>
        </div>

    </div>
</section>

{{-- CONTACT --}}
<section class="ds-conversation" id="contact">
    <div class="ds-conversation-inner">

        <div class="ds-conversation-copy reveal">
            <span class="ds-conversation-eyebrow">
                LET'S MOVE FORWARD
            </span>

            <h2>
                Your next step<br>
                starts with a<br>
                <span>conversation.</span>
            </h2>

            <p class="ds-conversation-intro">
                Tell us what you are working towards.
                Let's explore how Diaspora can help.
            </p>

            <a class="ds-conversation-link" href="mailto:info@diaspora-tech.com">
                <span class="ds-contact-icon">✉</span>
                <span>info@diaspora-tech.com</span>
                <span class="ds-contact-arrow">↗</span>
            </a>

            <a class="ds-conversation-link" href="tel:+60389585858">
                <span class="ds-contact-icon">⌕</span>
                <span>+603-8958 5858</span>
                <span class="ds-contact-arrow">↗</span>
            </a>

            <div class="ds-conversation-divider"></div>

            <div class="ds-conversation-detail">
                <span class="ds-detail-icon">⌖</span>
                <div>
                    <span class="ds-detail-label">VISIT US</span>
                    <p>
                        Block TG1-5, UPM-MTDC Technology Centre<br>
                        Universiti Putra Malaysia, 43400 Serdang<br>
                        Selangor Darul Ehsan
                    </p>
                </div>
            </div>

            <div class="ds-conversation-detail">
                <span class="ds-detail-icon">◷</span>
                <div>
                    <span class="ds-detail-label">BUSINESS HOURS</span>
                    <p>Monday–Friday · 9 AM–6 PM</p>
                </div>
            </div>

            <div class="ds-conversation-signoff">
                <span></span>
                <p>STRONGER SECURITY.<br>A MORE RESILIENT TOMORROW.</p>
            </div>
        </div>

        <div class="ds-conversation-form reveal">
            @include('partials.contact-form')
        </div>

    </div>
</section>

@endsection
