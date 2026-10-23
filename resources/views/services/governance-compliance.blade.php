@extends('layouts.app')

@section('title', 'Information Security Governance and Compliance | Diaspora')

@section('content')

@php
    $contactUrl = url('/') . '?service=' . urlencode(
        'Information Security Governance and Compliance'
    ) . '#contact';

    $services = [
        [
            'id' => 'isms',
            'name' => 'Information Security Management System (ISMS)',
            'text' => [
                'Support the implementation and improvement of an ISMS aligned with ISO/IEC 27001, including risk assessment, policies, processes and security controls.',
            ],
            'icon' => '<path d="M12 3l8 3v6c0 4.5-3.2 8-8 9-4.8-1-8-4.5-8-9V6l8-3z"/><rect x="9.5" y="11" width="5" height="4" rx="1"/><path d="M10.5 11V9.8a1.5 1.5 0 0 1 3 0V11"/>',
        ],
        [
            'id' => 'bcms',
            'name' => 'Business Continuity Management System (BCMS)',
            'text' => [
                'Support the implementation and improvement of a BCMS aligned with ISO 22301 to help your organisation prepare for disruptions and maintain critical services.',
            ],
            'icon' => '<path d="M12 3l9 5-9 5-9-5 9-5z"/><path d="M3 13l9 5 9-5"/>',
        ],
        [
            'id' => 'ncii',
            'name' => 'NCII Cybersecurity Governance and Compliance',
            'text' => [
                'Help NCII entities assess readiness and address applicable requirements under the Cyber Security Act 2024 (Act 854), subsidiary regulations, relevant Chief Executive Directives (Arahan Ketua Eksekutif) and sector-specific Codes of Practice (Tataamalan).',
                'Support may include awareness sessions, gap assessments, governance structures, policies and documentation, cybersecurity risk assessments and compliance action planning.',
            ],
            'icon' => '<path d="M3 10l9-6 9 6"/><path d="M6 10v8M10 10v8M14 10v8M18 10v8"/><path d="M3 20h18"/>',
        ],
        [
            'id' => 'audit',
            'name' => 'Cyber Security Audit',
            'text' => [
                'Assess conformity against agreed audit criteria, including applicable NCII cybersecurity requirements. Evaluate control effectiveness and identify gaps requiring corrective action or improvement.',
            ],
            'icon' => '<rect x="6" y="4" width="12" height="17" rx="2"/><path d="M9 4h6v3H9z"/><path d="M9 14l2 2 4-4"/>',
        ],
    ];

    $steps = [
        [
            'title' => 'Build',
            'text' => 'Establish and improve governance and management practices aligned with your business priorities.',
        ],
        [
            'title' => 'Address',
            'text' => 'Work towards certification and address applicable NCII cybersecurity and compliance requirements.',
        ],
        [
            'title' => 'Strengthen',
            'text' => 'Identify gaps and translate requirements into practical actions and measurable improvements.',
        ],
    ];
@endphp

{{-- HERO --}}
<section class="ds-detail-hero">
    <div class="ds-container ds-detail-hero-inner">

        <div class="ds-detail-hero-copy">
            <div class="ds-detail-hero-top">
                <a href="{{ url('/#services') }}" class="ds-back-link">
                    <svg
                        viewBox="0 0 24 24"
                        width="18"
                        height="18"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        aria-hidden="true"
                    >
                        <path d="M19 12H5"/>
                        <path d="m12 19-7-7 7-7"/>
                    </svg>
                    Back to Our Services
                </a>

                <span class="ds-badge ds-badge-dark">
                    OUR SERVICES · 02
                </span>
            </div>

            <h1>
                Information Security
                <span class="ds-accent-word">Governance and Compliance</span>
            </h1>

            <p class="ds-detail-tagline">
                Build stronger governance. Address compliance requirements.
                Strengthen stakeholder confidence.
            </p>

            <p class="ds-detail-intro">
                Effective information security requires clear accountability,
                practical policies and controls that work across your organisation.
            </p>

            <p class="ds-detail-intro">
                Diaspora Sdn. Bhd. helps organisations establish and improve
                information security governance and management practices aligned
                with their business priorities and applicable requirements.
                Whether you are developing a management system, preparing for
                certification or addressing National Critical Information
                Infrastructure (NCII) cybersecurity requirements under the
                Cyber Security Act 2024 (Akta 854), we help turn complex
                requirements into practical actions.
            </p>

            <a href="{{ $contactUrl }}" class="ds-detail-button">
                Discuss Your Compliance Needs
                <svg
                    viewBox="0 0 24 24"
                    width="18"
                    height="18"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    aria-hidden="true"
                >
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
                            >{!! $service['icon'] !!}</svg>

                            <span>{{ $service['name'] }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </aside>

    </div>
</section>

{{-- THREE-STEP APPROACH --}}
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
                Make security governance work for your organisation.
            </h2>

            <p>
                Connect governance, risk management and compliance with
                day-to-day operations to protect information, strengthen
                accountability and support organisational resilience.
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
                        >{!! $service['icon'] !!}</svg>
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
                From requirements to practical improvements.
            </h2>
        </div>

        <div class="ds-detail-approach-text">
            <p>
                We help your organisation understand applicable requirements,
                assess current practices and identify areas that need attention.
            </p>

            <p>
                Our approach connects governance, risk management and compliance
                with everyday operations, providing a clearer path towards
                stronger accountability, effective controls and informed
                compliance planning.
            </p>
        </div>

    </div>
</section>

{{-- CALL TO ACTION --}}
<section class="ds-detail-cta">
    <div class="ds-container">

        <span class="ds-eyebrow">TAKE THE NEXT STEP</span>

        <h2>
            Make your governance and compliance requirements actionable.
        </h2>

        <p>
            Discuss your priorities with Diaspora and explore how to strengthen
            your information security governance and management practices.
        </p>

        <a href="{{ $contactUrl }}" class="ds-detail-button">
            Discuss Your Compliance Needs
            <svg
                viewBox="0 0 24 24"
                width="18"
                height="18"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8"
                stroke-linecap="round"
                stroke-linejoin="round"
                aria-hidden="true"
            >
                <path d="M7 17 17 7"/>
                <path d="M7 7h10v10"/>
            </svg>
        </a>

    </div>
</section>

@endsection