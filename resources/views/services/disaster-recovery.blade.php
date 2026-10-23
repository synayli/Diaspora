@extends('layouts.app')

@section('title', 'Disaster Recovery Plan and Simulation Exercise | Diaspora')

@section('content')

{{-- Contact buttons send the service name so the form can pre-fill it --}}
@php
    $contactUrl = url('/') . '?service=' . urlencode(
        'Disaster Recovery Plan and Simulation Exercise'
    ) . '#contact';

    $services = [
        [
            'id'   => 'drp',
            'name' => 'DRP Development and Review',
            'text' => 'Develop or refine recovery plans with clear roles, escalation procedures, and recovery steps.',
            'icon' => '<path d="M7 3h7l4 4v14H7z"/><path d="M14 3v4h4"/><path d="M10 12h5M10 16h5"/>',
        ],
        [
            'id'   => 'dependencies',
            'name' => 'Critical Systems and Dependency Identification',
            'text' => 'Identify the applications, infrastructure, data, and supporting services needed for recovery.',
            'icon' => '<circle cx="12" cy="5" r="2"/><circle cx="5" cy="19" r="2"/><circle cx="19" cy="19" r="2"/><path d="M12 7v4M12 11l-6 6M12 11l6 6"/>',
        ],
        [
            'id'   => 'strategy',
            'name' => 'Recovery Strategy Design',
            'text' => 'Define recovery approaches aligned with Recovery Time Objectives (RTOs) and Recovery Point Objectives (RPOs).',
            'icon' => '<path d="M20 12a8 8 0 1 1-2.5-5.8"/><path d="M20 4v5h-5"/>',
        ],
        [
            'id'   => 'simulation',
            'name' => 'Simulation Exercises',
            'text' => 'Test recovery procedures, team coordination, and decision-making through structured disruption scenarios.',
            'icon' => '<circle cx="12" cy="12" r="9"/><path d="M10 8.5l5 3.5-5 3.5z"/>',
        ],
    ];

    $steps = [
        [
            'title' => 'Plan',
            'text' => 'Define recovery priorities, responsibilities, and procedures aligned with your business needs.',
        ],
        [
            'title' => 'Practise',
            'text' => 'Test recovery procedures, team coordination, and decision-making through structured disruption scenarios.',
        ],
        [
            'title' => 'Restore',
            'text' => 'Strengthen your ability to restore critical ICT services during a disruption.',
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

                <span class="ds-badge ds-badge-dark">OUR SERVICES · 03</span>
            </div>

            <h1>
                Disaster Recovery Plan
                <span class="ds-accent-word">and Simulation Exercise</span>
            </h1>

            <p class="ds-detail-tagline">
                Plan your recovery. Practise your response.
                Restore critical ICT services with greater confidence.
            </p>

            <p class="ds-detail-intro">
                If your critical ICT systems became unavailable today, would
                your team know what to restore first&mdash;and how?
            </p>

            <p class="ds-detail-intro">
                Diaspora Sdn. Bhd. helps organisations develop, review, and test
                Disaster Recovery Plans (DRPs) for disruptions caused by cyber
                incidents, system failures, and other emergencies. We work with
                your team to define recovery priorities, responsibilities, and
                procedures aligned with your business needs and agreed recovery
                objectives.
            </p>

            <a href="{{ $contactUrl }}" class="ds-detail-button">
                Plan Your Recovery Exercise
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

        <aside class="ds-detail-hero-panel" aria-label="Services in this offering">
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
                        {{ $loop->iteration }}
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

            <h2>Prepare your team to recover when it matters.</h2>

            <p>
                Build a structured recovery approach and test whether
                your plans, people and supporting systems are ready.
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
                    <p>{{ $service['text'] }}</p>
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
            <h2>Move from written plans to tested readiness.</h2>
        </div>

        <div class="ds-detail-approach-text">
            <p>
                Through planning and exercises, we help your organisation
                identify recovery gaps, improve team preparedness, and
                strengthen its ability to restore critical ICT services
                during a disruption.
            </p>
        </div>
    </div>
</section>

{{-- CALL TO ACTION --}}
<section class="ds-detail-cta">
    <div class="ds-container">
        <span class="ds-eyebrow">TAKE THE NEXT STEP</span>

        <h2>Put your recovery plan to the test.</h2>

        <p>
            Speak to Diaspora about your DRP and simulation needs.
        </p>

        <a href="{{ $contactUrl }}" class="ds-detail-button">
            Plan Your Recovery Exercise
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