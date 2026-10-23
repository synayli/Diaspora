@extends('layouts.app')

@section('title', 'Cyber Security Assessment and Testing | Diaspora')

@section('content')

@php
    $contactUrl = url('/') . '?service=' . urlencode(
        'Cyber Security Assessment and Testing'
    ) . '#contact';

    $services = [
        [
            'id' => 'spa',
            'name' => 'Security Posture Assessment (SPA)',
            'text' => [
                'Assess infrastructure, systems, applications, and relevant security controls to identify vulnerabilities and weaknesses that could be exploited by attackers.',
            ],
            'icon' => '<path d="M3 12s3.3-6 9-6 9 6 9 6-3.3 6-9 6-9-6-9-6z"/><circle cx="12" cy="12" r="2.5"/>',
        ],
        [
            'id' => 'compromise-assessment',
            'name' => 'Compromise Assessment',
            'text' => [
                'Examine systems and networks for indicators of compromise and evidence of malicious activity to identify potential security breaches.',
            ],
            'icon' => '<circle cx="11" cy="11" r="7"/><path d="m16 16 4 4"/><path d="M11 8v3l2 2"/>',
        ],
        [
            'id' => 'cyber-drill',
            'name' => 'Cyber Drill',
            'text' => [
                'Simulate realistic cyber incident scenarios to evaluate incident response readiness, decision-making, coordination, and recovery capabilities.',
            ],
            'icon' => '<path d="M12 3 4.5 6v5.5c0 4.2 3 7.5 7.5 9.5 4.5-2 7.5-5.3 7.5-9.5V6L12 3z"/><path d="m9 12 2 2 4-4"/>',
        ],
    ];

    $steps = [
        [
            'title' => 'Assess',
            'text' => 'Evaluate systems, applications and security controls to identify weaknesses and potential exposure.',
        ],
        [
            'title' => 'Investigate',
            'text' => 'Look for indicators of compromise and examine readiness to respond to realistic cyber incidents.',
        ],
        [
            'title' => 'Strengthen',
            'text' => 'Translate findings into clear recommendations and practical improvements to your security posture.',
        ],
    ];
@endphp

{{-- HERO --}}
<section class="ds-detail-hero">
    <div class="ds-container ds-detail-hero-inner">

        <div class="ds-detail-hero-copy">
            <div class="ds-detail-hero-top">
                <a href="{{ url('/#services') }}" class="ds-back-link">
                    <svg viewBox="0 0 24 24"
                        width="18"
                        height="18"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        aria-hidden="true">
                        <path d="M19 12H5"/>
                        <path d="m12 19-7-7 7-7"/>
                    </svg>
                    Back to Our Services
                </a>

                <span class="ds-badge ds-badge-dark">
                    OUR SERVICES · 01
                </span>
            </div>

            <h1>
                Cyber Security
                <span class="ds-accent-word">Assessment and Testing</span>
            </h1>

            <p class="ds-detail-tagline">
                Identify security gaps. Detect potential compromises.
                Test your readiness.
            </p>

            <p class="ds-detail-intro">
                How confident are you that your cybersecurity controls
                can withstand a real attack?
            </p>

            <p class="ds-detail-intro">
                Diaspora Sdn. Bhd. helps organizations understand their
                security exposure, identify vulnerabilities, and evaluate
                their ability to detect and respond to cyber incidents.
                Our Cyber Security Assessment and Testing services provide
                practical insights to help you prioritize improvements and
                strengthen the protection of your information assets,
                systems, and applications.
            </p>

            <a href="{{ $contactUrl }}" class="ds-detail-button">
                Discuss Your Security Assessment
                <svg viewBox="0 0 24 24"
                    width="18"
                    height="18"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    aria-hidden="true">
                    <path d="M7 17 17 7"/>
                    <path d="M7 7h10v10"/>
                </svg>
            </a>
        </div>

        <aside class="ds-detail-hero-panel" aria-label="Services included">
            <p class="ds-panel-title">What's included</p>

            <ul class="ds-panel-list">
                @foreach ($services as $service)
                    <li>
                        <a href="#{{ $service['id'] }}">
                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.7"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                aria-hidden="true"
                            >
                                {!! $service['icon'] !!}
                            </svg>

                            <span>{{ $service['name'] }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </aside>

    </div>
</section>

{{-- THREE-STEP STRIP --}}
<section class="ds-detail-steps">
    <div class="ds-container">
        <ol class="ds-steps-list">
            @foreach ($steps as $step)
                <li>
                    <span class="ds-step-num" aria-hidden="true">
                        {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                    </span>

                    <div>
                        <h3>{{ $step['title'] }}</h3>
                        <p>{{ $step['text'] }}</p>
                    </div>
                </li>
            @endforeach
        </ol>
    </div>
</section>

{{-- SERVICES --}}
<section class="ds-detail-content">
    <div class="ds-container">

        <div class="ds-section-heading">
            <span class="ds-eyebrow">WHAT WE DO</span>

            <h2>
                Understand your exposure. Strengthen your defences.
            </h2>

            <p>
                Our services help identify security weaknesses, investigate
                potential compromises, and evaluate your organisation's
                preparedness for cyber incidents.
            </p>
        </div>

        <div class="ds-detail-grid ds-detail-grid--two">
            @foreach ($services as $service)
                <article class="ds-detail-card" id="{{ $service['id'] }}">
                    <span class="ds-detail-icon">
                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true"
                        >
                            {!! $service['icon'] !!}
                        </svg>
                    </span>

                    <h3>{{ $service['name'] }}</h3>

                    @foreach ($service['text'] as $paragraph)
                        <p>{{ $paragraph }}</p>
                    @endforeach
                </article>
            @endforeach
        </div>

    </div>
</section>

{{-- OUR APPROACH --}}
<section class="ds-detail-approach">
    <div class="ds-container ds-detail-approach-inner">

        <div>
            <span class="ds-eyebrow">OUR APPROACH</span>

            <h2>
                Turn assessment findings into actionable improvements.
            </h2>
        </div>

        <div class="ds-detail-approach-text">
            <p>
                Our assessments draw on recognized security standards,
                frameworks, and testing guidance appropriate to the
                agreed scope.
            </p>

            <p>
                We translate technical findings into clear recommendations,
                helping your organization address security gaps and make
                informed cybersecurity decisions.
            </p>
        </div>

    </div>
</section>

{{-- CALL TO ACTION --}}
<section class="ds-detail-cta">
    <div class="ds-container">

        <span class="ds-eyebrow">TAKE THE NEXT STEP</span>

        <h2>
            Find out where your organization is exposed.
        </h2>

        <p>
            Talk to Diaspora about your assessment needs and explore
            practical ways to strengthen your cybersecurity posture.
        </p>

        <a href="{{ $contactUrl }}" class="ds-detail-button">
            Discuss Your Security Assessment
            <span aria-hidden="true">↗</span>
        </a>

    </div>
</section>

@endsection