@extends('layouts.app')

@section('title', 'Certification | Diaspora')

@section('content')

<style>

/* ========================================================
   1. HERO SECTION (TIGHT, FULL-VIEWPORT, RESPONSIVE)
======================================================== */

.ds-certification-hero {
    position: relative;
    width: 100%;
    height: calc(100vh - 75px);
    max-height: 850px;
    min-height: 580px;
    display: flex;
    align-items: center;
    background: #0d120e;
    overflow: hidden;
    padding: 0;
    box-sizing: border-box;
}

.hero-glow-bg {
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
    filter: blur(100px);
    opacity: 0.45;
}

.glow-1 {
    width: 360px;
    height: 360px;
    top: -40px;
    right: 15%;
    background: rgba(183, 237, 75, 0.14);
}

.glow-2 {
    width: 300px;
    height: 300px;
    bottom: -20px;
    left: -20px;
    background: rgba(37, 51, 41, 0.4);
}

.hero-grid-pattern {
    position: absolute;
    inset: 0;
    background-image: 
        linear-gradient(rgba(183, 237, 75, 0.035) 1px, transparent 1px),
        linear-gradient(90deg, rgba(183, 237, 75, 0.035) 1px, transparent 1px);
    background-size: 38px 38px;
    mask-image: radial-gradient(ellipse at 50% 50%, black 40%, transparent 80%);
    pointer-events: none;
}

.hero-shell {
    width: 100%;
    max-width: 1140px;
    margin: 0 auto;
    padding: 0 32px;
    display: grid;
    grid-template-columns: 1.1fr 0.9fr;
    align-items: center;
    gap: 32px;
    z-index: 2;
    box-sizing: border-box;
}

.hero-text-col {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.hero-pill-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(183, 237, 75, 0.08);
    border: 1px solid rgba(183, 237, 75, 0.28);
    padding: 4px 12px;
    border-radius: 999px;
    font-size: 0.72rem;
    font-weight: 700;
    color: #b7ed4b;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    margin-bottom: 12px;
}

.live-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #b7ed4b;
    box-shadow: 0 0 8px #b7ed4b;
    animation: dot-pulse 1.8s infinite;
}

@keyframes dot-pulse {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.35; transform: scale(0.85); }
}

.hero-heading {
    color: #ffffff;
    font-size: clamp(1.8rem, 2.7vw, 2.45rem);
    line-height: 1.18;
    font-weight: 800;
    margin: 0 0 12px;
    letter-spacing: -0.02em;
}

.hero-heading .ds-accent-word {
    color: #b7ed4b;
}

.hero-desc {
    color: #9cb09a;
    font-size: 0.9rem;
    line-height: 1.55;
    max-width: 480px;
    margin: 0 0 16px;
}

.hero-trust-bar {
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 8px 16px;
    border-radius: 10px;
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(8px);
    margin-bottom: 18px;
}

.trust-stat strong {
    display: block;
    color: #ffffff;
    font-size: 0.95rem;
    font-weight: 700;
}

.trust-stat span {
    font-size: 0.68rem;
    color: #83947f;
    text-transform: uppercase;
    letter-spacing: 0.03em;
}

.stat-divider {
    width: 1px;
    height: 24px;
    background: rgba(255, 255, 255, 0.1);
}

/* Explore Button (High Contrast + Explicit Color Enforcement) */
.hero-explore-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 22px;
    background-color: #b7ed4b !important;
    color: #111512 !important;
    font-weight: 700 !important;
    font-size: 0.88rem;
    border-radius: 8px;
    text-decoration: none !important;
    transition: all 0.22s ease;
    border: none;
}

.hero-explore-btn span {
    color: #111512 !important;
    font-weight: 700 !important;
}

.hero-explore-btn svg {
    stroke: #111512 !important;
    fill: none !important;
    flex-shrink: 0;
}

.hero-explore-btn:hover {
    background-color: #cbf96c !important;
    color: #111512 !important;
    transform: translateY(-2px);
    box-shadow: 0 6px 18px rgba(183, 237, 75, 0.35);
}

/* Radar & Center Shield */
.hero-graphic-col {
    position: relative;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.radar-wrapper {
    position: relative;
    width: 340px;
    height: 290px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.pulse-ring {
    position: absolute;
    border-radius: 50%;
    border: 1px solid rgba(183, 237, 75, 0.18);
    pointer-events: none;
}

.ring-inner {
    width: 130px;
    height: 130px;
    animation: ring-scale 4.5s ease-out infinite;
}

.ring-outer {
    width: 200px;
    height: 200px;
    animation: ring-scale 4.5s ease-out 2.25s infinite;
}

.dashed-orbit {
    position: absolute;
    width: 240px;
    height: 240px;
    border-radius: 50%;
    border: 1px dashed rgba(183, 237, 75, 0.22);
    animation: radar-rotate 22s linear infinite;
}

@keyframes ring-scale {
    0% { transform: scale(0.75); opacity: 0.8; }
    100% { transform: scale(1.35); opacity: 0; }
}

@keyframes radar-rotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

.center-shield {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    background: linear-gradient(135deg, #1b241c, #101511);
    border: 2px solid #b7ed4b;
    box-shadow: 0 0 20px rgba(183, 237, 75, 0.32);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 3;
}

/* Floating Badges */
.badge-float {
    position: absolute;
    display: flex;
    align-items: center;
    gap: 8px;
    background: rgba(18, 24, 19, 0.94);
    border: 1px solid rgba(183, 237, 75, 0.25);
    backdrop-filter: blur(10px);
    padding: 7px 12px;
    border-radius: 8px;
    box-shadow: 0 10px 24px rgba(0, 0, 0, 0.5);
    z-index: 4;
    white-space: nowrap;
}

.badge-info strong {
    display: block;
    color: #ffffff;
    font-size: 0.78rem;
    font-weight: 600;
}

.badge-info small {
    display: block;
    color: #8ea18c;
    font-size: 0.67rem;
}

.badge-dot {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    flex-shrink: 0;
}
.dot-lime { background: #b7ed4b; box-shadow: 0 0 7px #b7ed4b; }
.dot-gold { background: #eab308; box-shadow: 0 0 7px #eab308; }
.dot-cyan { background: #2dd4bf; box-shadow: 0 0 7px #2dd4bf; }

.badge-top-left {
    top: 10px;
    left: 10px;
    animation: float-y 5s ease-in-out infinite;
}

.badge-mid-right {
    top: 48%;
    right: 5px;
    animation: float-x 6s ease-in-out infinite;
}

.badge-bottom-left {
    bottom: 12px;
    left: 20px;
    animation: float-y 5.5s ease-in-out 1s infinite;
}

@keyframes float-y {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-5px); }
}

@keyframes float-x {
    0%, 100% { transform: translateX(0); }
    50% { transform: translateX(5px); }
}

/* Mouse Scroll Indicator */
.hero-scroll-cue {
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
    opacity: 0.5;
    transition: opacity 0.2s ease;
    z-index: 5;
}

.hero-scroll-cue:hover {
    opacity: 0.9;
}

.scroll-mouse {
    width: 18px;
    height: 28px;
    border: 2px solid rgba(183, 237, 75, 0.4);
    border-radius: 9px;
    display: block;
    position: relative;
}

.mouse-wheel {
    position: absolute;
    top: 4px;
    left: 50%;
    width: 2.5px;
    height: 5px;
    background: #b7ed4b;
    border-radius: 2px;
    transform: translateX(-50%);
    animation: wheel-down 1.6s infinite;
}

@keyframes wheel-down {
    0% { transform: translate(-50%, 0); opacity: 1; }
    100% { transform: translate(-50%, 7px); opacity: 0; }
}

/* ========================================================
   2. SVG & ICON HARDENING (PREVENTS EMOJI FALLBACK)
======================================================== */
svg.icon-vector,
.hero-explore-btn svg,
.cert-action-btn svg,
.center-shield svg {
    display: inline-block;
    vertical-align: middle;
    flex-shrink: 0;
    pointer-events: none;
    shape-rendering: geometricPrecision;
    font-family: initial !important;
}

/* ========================================================
   3. CONTENT SECTIONS BELOW HERO
======================================================== */
/* Section 1: Why It Matters */
.section-light-olive {
    background-color: #f1f4eb;
    padding: 85px 0;
    border-bottom: 1px solid #e1e7da;
}

.section-label {
    color: #687d50;
    font-size: 0.8rem;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-bottom: 8px;
}

.section-heading h2 {
    color: #20251f;
    font-size: clamp(1.8rem, 3vw, 2.3rem);
    margin: 0 0 10px;
    font-weight: 700;
}

.section-heading p {
    color: #596157;
    font-size: 1rem;
    max-width: 650px;
    margin: 0;
}

.cert-reasons-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 32px;
    margin-top: 48px;
}

.cert-reason-row {
    background: #ffffff;
    border: 1px solid #dfe5d8;
    padding: 28px 24px;
    border-radius: 12px;
    display: flex;
    flex-direction: column;
    gap: 14px;
    box-shadow: 0 4px 12px rgba(32, 37, 31, 0.02);
}

.cert-reason-index {
    font-family: monospace;
    font-size: 1.35rem;
    font-weight: 700;
    color: #687d50;
    line-height: 1;
}

.cert-reason-text h3 {
    color: #20251f;
    font-size: 1.15rem;
    margin: 0 0 8px;
    font-weight: 600;
}

.cert-reason-text p {
    color: #596157;
    font-size: 0.92rem;
    line-height: 1.6;
    margin: 0;
}

/* Section 2: Cards Directory */
.section-clean-white {
    background-color: #fafbfa;
    padding: 95px 0 110px;
}

.category-group {
    margin-top: 55px;
}

.category-header {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 24px;
}

.category-header h3 {
    color: #20251f;
    font-size: 1.25rem;
    font-weight: 700;
    margin: 0;
    white-space: nowrap;
}

.category-line {
    width: 100%;
    height: 1px;
    background: #dce3d5;
}

.cert-grid-3 {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
}

.cert-grid-2 {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
}

.cert-item-card {
    background: #ffffff;
    border: 1px solid #dfe5d8;
    border-radius: 14px;
    padding: 24px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
    box-shadow: 0 4px 14px rgba(0, 0, 0, 0.02);
}

.cert-item-card:hover {
    transform: translateY(-4px);
    border-color: #829966;
    box-shadow: 0 14px 28px rgba(32, 37, 31, 0.08);
}

.cert-item-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
}

.cert-logo-box {
    width: 80px;
    height: 54px;
    flex: 0 0 80px;
    background: #f7f9f5;
    border: 1px solid #dfe5d8;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 4px;
    box-sizing: border-box;
    overflow: hidden;
}

.cert-logo-box img {
    display: block;
    width: 100%;
    height: 100%;
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}

/* All boxes stay the same size */
.cert-logo-box-wide {
    width: 80px;
    height: 54px;
    flex: 0 0 80px;
    padding: 4px;
}

/* Enlarge logos with excess transparent space */
.cert-logo-box img[src*="MOF-removebg"] {
    transform: scale(1.8);
}

.cert-logo-box img[src*="ISCB-removebg"] {
    transform: scale(1.8);
}

.cert-logo-box img[src*="ISO-removebg"] {
    transform: scale(2.4);
}

/* Keep the NACSA logo at its normal size */
.cert-logo-box-wide img[src*"Licensed_Cybersecurity_Service_Providers_PenTest_Service_removebg"] {
    transform: none;
}

.cert-logo-box svg {
    stroke: #687d50;
}

.cert-pill-badge {
    background: #f1f4eb;
    color: #4b5e39;
    font-size: 0.72rem;
    font-weight: 700;
    padding: 4px 10px;
    border-radius: 999px;
    border: 1px solid #dfe5d8;
    text-transform: uppercase;
    letter-spacing: 0.03em;
}

.cert-item-body h4 {
    color: #20251f;
    font-size: 1.15rem;
    font-weight: 600;
    margin: 0 0 6px;
    line-height: 1.35;
}

.cert-submeta {
    font-size: 0.84rem;
    color: #687d50;
    margin-bottom: 12px;
    display: block;
}

.cert-submeta strong {
    color: #354c27;
}

.cert-item-body p {
    color: #596157;
    font-size: 0.9rem;
    line-height: 1.55;
    margin: 0 0 24px;
}

.cert-action-btn {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    box-sizing: border-box;
    padding: 10px 16px;
    border-radius: 8px;
    font-size: 0.85rem;
    font-weight: 600;
    color: #354c27;
    background: transparent;
    border: 1px solid #687d50;
    text-decoration: none;
    transition: all 0.2s ease;
}

.cert-action-btn svg {
    stroke: #354c27 !important;
    fill: none !important;
    transition: transform 0.2s ease;
}

.cert-action-btn:hover {
    background: #b7ed4b;
    border-color: #b7ed4b;
    color: #171c18;
}

.cert-action-btn:hover svg {
    stroke: #171c18 !important;
    transform: translate(2px, -2px);
}

/* Section 3: CTA Band */
.cta-band {
    background: linear-gradient(120deg, #171c18 0%, #202821 50%, #171c18 100%);
    padding: 80px 0;
    text-align: center;
    border-top: 1px solid rgba(183, 237, 75, 0.2);
}

.cta-band h2 {
    color: #f4f5ef;
    font-size: 2rem;
    margin-bottom: 12px;
    font-weight: 700;
}

.cta-band p {
    color: #c5cec3;
    font-size: 1.05rem;
    margin-bottom: 24px;
}

.cta-band .btn-primary {
    display: inline-block;
    padding: 12px 28px;
    color: #171c18;
    background: #b7ed4b;
    border: 1px solid #b7ed4b;
    border-radius: 8px;
    font-weight: 600;
    text-decoration: none;
    transition: background 0.2s ease, transform 0.2s ease;
}

.cta-band .btn-primary:hover {
    background: #c7f576;
    border-color: #c7f576;
    transform: translateY(-2px);
}

/* ========================================================
   4. RESPONSIVE BREAKPOINTS
======================================================== */
@media (max-width: 992px) {
    .ds-certification-hero {
        height: auto;
        min-height: auto;
        padding: 50px 0;
    }
    .hero-shell {
        grid-template-columns: 1fr;
        gap: 28px;
        text-align: center;
    }
    .hero-text-col {
        align-items: center;
    }
    .hero-desc {
        margin-left: auto;
        margin-right: auto;
    }
    .br-desktop {
        display: none;
    }
    .hero-scroll-cue {
        display: none;
    }
    .cert-reasons-grid,
    .cert-grid-3 {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 680px) {
    .hero-trust-bar {
        flex-direction: column;
        width: 100%;
        gap: 10px;
    }
    .stat-divider {
        width: 100%;
        height: 1px;
    }
    .radar-wrapper {
        width: 100%;
        height: 250px;
    }
    .badge-top-left { left: 0; top: 0; }
    .badge-mid-right { right: 0; top: 40%; }
    .badge-bottom-left { left: 0; bottom: 0; }
    
    .cert-reasons-grid,
    .cert-grid-3,
    .cert-grid-2 {
        grid-template-columns: 1fr;
    }
}

@media (prefers-reduced-motion: reduce) {
    .live-dot,
    .ring-inner,
    .ring-outer,
    .dashed-orbit,
    .badge-float,
    .mouse-wheel {
        animation: none !important;
    }
}

/* CTA (deep forest dark), matches the Media page */
.media-cta-section {
    position: relative;
    padding: 95px 0;
    background: radial-gradient(circle at 50% 50%, #12241a 0%, #08120c 100%);
    text-align: center;
}

.media-cta-container {
    max-width: 720px;
    margin: 0 auto;
    padding: 0 24px;
}

.media-cta-eyebrow {
    display: block;
    margin-bottom: 14px;
    color: #b7ed4b;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.16em;
    text-transform: uppercase;
}

.media-cta-container h2 {
    margin: 0 0 16px;
    color: #ffffff;
    font-size: clamp(2.1rem, 3.8vw, 3rem);
    font-weight: 800;
    line-height: 1.15;
    letter-spacing: -0.03em;
}

.media-cta-container p {
    margin: 0 0 36px;
    color: #94a3b8;
    font-size: 1.05rem;
    line-height: 1.7;
}

.media-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 13px 28px;
    border-radius: 6px;
    background: #b7ed4b;
    border: 1px solid #b7ed4b;
    color: #08120c;
    font-size: 14.5px;
    font-weight: 700;
    text-decoration: none;
    cursor: pointer;
    transition: all 0.28s cubic-bezier(0.16, 1, 0.3, 1);
}

.media-btn:hover {
    background: #c7f859;
    border-color: #c7f859;
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(183, 237, 75, 0.32);
}

</style>

<!-- FULL-VIEWPORT HERO SECTION -->
<section class="ds-hero ds-certification-hero">
    <div class="hero-glow-bg glow-1"></div>
    <div class="hero-glow-bg glow-2"></div>
    <div class="hero-grid-pattern"></div>

    <div class="hero-shell">
        <!-- Left: Text Content -->
        <div class="hero-text-col">
            <div class="hero-pill-badge">
                <span class="live-dot"></span>
                <span>Statutory Compliance & Standards</span>
            </div>

            <h1 class="hero-heading">
                Certified to internationally <br class="br-desktop">
                <span class="ds-accent-word">recognised standards.</span>
            </h1>

            <p class="hero-desc">
                Our enterprise certifications and statutory licenses reflect an unwavering commitment to data governance, rigorous security postures, and strict adherence to global compliance frameworks.
            </p>

            <!-- Metrics Bar -->
            <div class="hero-trust-bar">
                <div class="trust-stat">
                    <strong>100%</strong>
                    <span>Third-Party Audited</span>
                </div>
                <div class="stat-divider"></div>
                <div class="trust-stat">
                    <strong>5+</strong>
                    <span>Core Accreditations</span>
                </div>
                <div class="stat-divider"></div>
                <div class="trust-stat">
                    <strong>NACSA & CSM</strong>
                    <span>Licensed & Verified</span>
                </div>
            </div>

            <!-- Button Anchor -->
            <a href="#credentials-list" class="hero-explore-btn">
                <span>Explore All Certifications</span>
                <svg 
                    class="icon-vector" 
                    width="16" 
                    height="16" 
                    viewBox="0 0 24 24" 
                    fill="none" 
                    stroke="currentColor" 
                    stroke-width="2.5" 
                    stroke-linecap="round" 
                    stroke-linejoin="round" 
                    aria-hidden="true" 
                    focusable="false"
                >
                    <path d="M7 13l5 5 5-5"></path>
                    <path d="M7 6l5 5 5-5"></path>
                </svg>
            </a>
        </div>

        <!-- Right: Responsive Cyber Visual Hub -->
        <div class="hero-graphic-col" aria-hidden="true">
            <div class="radar-wrapper">
                <div class="pulse-ring ring-inner"></div>
                <div class="pulse-ring ring-outer"></div>
                <div class="dashed-orbit"></div>

                <div class="center-shield">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#b7ed4b" stroke-width="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        <polyline points="9 11.5 11.5 14 15.5 9.5"></polyline>
                    </svg>
                </div>

                <!-- Floating Hologram Badges -->
                <div class="badge-float badge-top-left">
                    <span class="badge-dot dot-lime"></span>
                    <div class="badge-info">
                        <strong>ISO/IEC 27001:2022</strong>
                        <small>ISMS Certified • 004-IS006</small>
                    </div>
                </div>

                <div class="badge-float badge-mid-right">
                    <span class="badge-dot dot-gold"></span>
                    <div class="badge-info">
                        <strong>CSM — PTSP Scheme</strong>
                        <small>Accredited Service Provider</small>
                    </div>
                </div>

                <div class="badge-float badge-bottom-left">
                    <span class="badge-dot dot-cyan"></span>
                    <div class="badge-info">
                        <strong>NACSA Licensed</strong>
                        <small>Penetration Testing Service</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mouse Scroll Indicator -->
    <a href="#why-it-matters" class="hero-scroll-cue" aria-label="Scroll down">
        <span class="scroll-mouse"><span class="mouse-wheel"></span></span>
    </a>
</section>

<!-- SECTION 1: WHY IT MATTERS (Muted Warm Olive #f1f4eb) -->
<section id="why-it-matters" class="section-light-olive">
    <div class="container">
        <div class="section-heading reveal">
            <div class="section-label">Why It Matters</div>
            <h2>Built on trust, not claims.</h2>
            <p>Certification isn't just a badge, it's proof of an ongoing commitment to recognised standards.</p>
        </div>

        <div class="cert-reasons-grid reveal-stagger">
            <div class="cert-reason-row">
                <span class="cert-reason-index">01</span>
                <div class="cert-reason-text">
                    <h3>Independently Verified</h3>
                    <p>Our certifications are audited and issued by recognised third-party certification bodies, never self-declared claims.</p>
                </div>
            </div>

            <div class="cert-reason-row">
                <span class="cert-reason-index">02</span>
                <div class="cert-reason-text">
                    <h3>Actively Maintained</h3>
                    <p>Certification requires continuous compliance audits, annual surveillance, and periodic reassessments to remain valid.</p>
                </div>
            </div>

            <div class="cert-reason-row">
                <span class="cert-reason-index">03</span>
                <div class="cert-reason-text">
                    <h3>A Signal of Trust</h3>
                    <p>Gives your organisation confidence that our operations, penetration testing, and governance meet stringent national standards.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 2: VERIFIED CREDENTIALS (Crisp Light Background #fafbfa) -->
<section id="credentials-list" class="section-clean-white">
    <div class="container">
        
        <div class="section-heading reveal">
            <div class="section-label">Our Certifications & Licenses</div>
            <h2>Verified & Accredited</h2>
            <p>Diaspora Sdn Bhd holds the following certifications and official statutory licenses, each independently audited and approved.</p>
        </div>

        <!-- Group A: Cyber & Technical Security (3 Columns) -->
        <div class="category-group reveal">
            <div class="category-header">
                <h3>Cyber Security & Management Standards</h3>
                <div class="category-line"></div>
            </div>

            <div class="cert-grid-3 reveal-stagger">
                
                {{-- 1. ISO 27001 --}}
                <div class="cert-item-card">
                    <div>
                        <div class="cert-item-top">
                            <div class="cert-logo-box">
                                <img src="{{ asset('images/ISO-removebg.png') }}" alt="ISO/IEC 27001:2022">
                            </div>
                            <span class="cert-pill-badge">ISO Standard</span>
                        </div>
                        <div class="cert-item-body">
                            <h4>ISO/IEC 27001:2022</h4>
                            <span class="cert-submeta">Certificate No. <strong>004-IS006</strong></span>
                            <p>The global benchmark for Information Security Management Systems (ISMS), certifying enterprise-wide confidentiality, integrity, and asset security.</p>
                        </div>
                    </div>
                    
                    <a href="{{ asset('images/Cert-ISMS-ISO-27001-2022.png') }}" target="_blank" rel="noopener noreferrer" class="cert-action-btn">
                        <span>View Certificate</span>
                        <svg 
                            class="icon-vector" 
                            width="15" 
                            height="15" 
                            viewBox="0 0 24 24" 
                            fill="none" 
                            stroke="currentColor" 
                            stroke-width="2" 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            aria-hidden="true" 
                            focusable="false"
                        >
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            <polyline points="15 3 21 3 21 9"></polyline>
                            <line x1="10" y1="14" x2="21" y2="3"></line>
                        </svg>
                    </a>
                </div>

                {{-- 2. PTSP --}}
                <div class="cert-item-card">
                    <div>
                        <div class="cert-item-top">
                            <div class="cert-logo-box">
                                <img src="{{ asset('images/ISCB-removebg.png') }}" alt="PTSP Scheme">
                            </div>
                            <span class="cert-pill-badge">Assurance</span>
                        </div>
                        <div class="cert-item-body">
                            <h4>Penetration Test Provider</h4>
                            <span class="cert-submeta">CyberSecurity Malaysia — <strong>ISCB</strong></span>
                            <p>Accredited under CyberSecurity Malaysia's PTSP Scheme, confirming our penetration testing services meet national standards of technical assurance.</p>
                        </div>
                    </div>
                    <a href="{{ asset('images/Cert-PTSP.png') }}" target="_blank" rel="noopener noreferrer" class="cert-action-btn">
                        <span>View Certificate</span>
                        <svg 
                            class="icon-vector" 
                            width="15" 
                            height="15" 
                            viewBox="0 0 24 24" 
                            fill="none" 
                            stroke="currentColor" 
                            stroke-width="2" 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            aria-hidden="true" 
                            focusable="false"
                        >
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            <polyline points="15 3 21 3 21 9"></polyline>
                            <line x1="10" y1="14" x2="21" y2="3"></line>
                        </svg>
                    </a>
                </div>

                {{-- 3. NACSA License --}}
                <div class="cert-item-card">
                    <div>
                        <div class="cert-item-top">
                            <div class="cert-logo-box cert-logo-box-wide">
                                <img 
                                    src="{{ asset('images/Licensed_Cybersecurity_Service_Providers_PenTest_Service_removebg.png') }}" 
                                    alt="Licensed Cybersecurity Service Provider - Penetration Testing Service (NACSA)"
                                    loading="lazy"
                                >
                            </div>
                            <span class="cert-pill-badge">Statutory License</span>
                        </div>
                        <div class="cert-item-body">
                            <h4>NACSA Cyber License</h4>
                            <span class="cert-submeta">National Cyber Security Agency — <strong>NACSA</strong></span>
                            <p>Official operational service license granted by NACSA under Malaysia's cybersecurity framework, authorizing delivery of enterprise defense services.</p>
                        </div>
                    </div>
                    <a href="{{ asset('documents/Cert-Licence(NACSA).pdf') }}" target="_blank" rel="noopener noreferrer" class="cert-action-btn">
                        <span>View License (PDF)</span>
                        <svg 
                            class="icon-vector" 
                            width="15" 
                            height="15" 
                            viewBox="0 0 24 24" 
                            fill="none" 
                            stroke="currentColor" 
                            stroke-width="2" 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            aria-hidden="true" 
                            focusable="false"
                        >
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            <polyline points="15 3 21 3 21 9"></polyline>
                            <line x1="10" y1="14" x2="21" y2="3"></line>
                        </svg>
                    </a>
                </div>

            </div>
        </div>

        <!-- Group B: Corporate & Governance Accreditations (2 Columns) -->
        <div class="category-group reveal">
            <div class="category-header">
                <h3>Corporate Registrations & Accreditations</h3>
                <div class="category-line"></div>
            </div>

            <div class="cert-grid-2 reveal-stagger">
                
                {{-- 4. Bumiputera Status --}}
                <div class="cert-item-card">
                    <div>
                        <div class="cert-item-top">
                            <div class="cert-logo-box cert-logo-box-wide">
                                <img
                                    src="{{ asset('images/MOF-removebg.png') }}"
                                    alt="Ministry of Finance Malaysia (MOF)"
                                    loading="lazy"
                                >
                            </div>
                            <span class="cert-pill-badge">Bumiputera Status</span>
                        </div>
                        <div class="cert-item-body">
                            <h4>Sijil Pengiktirafan Bumiputera</h4>
                            <span class="cert-submeta">Kementerian Kewangan Malaysia (MOF)</span>
                            <p>Officially acknowledged as a registered Bumiputera-status company, certified to participate in national institutional procurement and contracts.</p>
                        </div>
                    </div>
                    <a href="{{ asset('documents/Cert-Bumiputera.pdf') }}" target="_blank" rel="noopener noreferrer" class="cert-action-btn">
                        <span>View Sijil (PDF)</span>
                        <svg 
                            class="icon-vector" 
                            width="15" 
                            height="15" 
                            viewBox="0 0 24 24" 
                            fill="none" 
                            stroke="currentColor" 
                            stroke-width="2" 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            aria-hidden="true" 
                            focusable="false"
                        >
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            <polyline points="15 3 21 3 21 9"></polyline>
                            <line x1="10" y1="14" x2="21" y2="3"></line>
                        </svg>
                    </a>
                </div>

                {{-- 5. SSM Registration --}}
                <div class="cert-item-card">
                    <div>
                        <div class="cert-item-top">
                            <div class="cert-logo-box cert-logo-box-wide">
                                <img
                                    src="{{ asset('images/MOF-removebg.png') }}"
                                    alt="Ministry of Finance Malaysia (MOF)"
                                    loading="lazy"
                                >
                            </div>
                            <span class="cert-pill-badge">SSM Perakuan</span>
                        </div>
                        <div class="cert-item-body">
                            <h4>Perakuan Pendaftaran Syarikat</h4>
                            <span class="cert-submeta">Suruhanjaya Syarikat Malaysia (SSM)</span>
                            <p>Statutory company registration certifying Diaspora Sdn Bhd as an incorporated legal corporate entity under the Companies Act 2016.</p>
                        </div>
                    </div>
                    <a href="{{ asset('documents/Cert-Pendaftaran-Syarikat.pdf') }}" target="_blank" rel="noopener noreferrer" class="cert-action-btn">
                        <span>View Registration (PDF)</span>
                        <svg 
                            class="icon-vector" 
                            width="15" 
                            height="15" 
                            viewBox="0 0 24 24" 
                            fill="none" 
                            stroke="currentColor" 
                            stroke-width="2" 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            aria-hidden="true" 
                            focusable="false"
                        >
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            <polyline points="15 3 21 3 21 9"></polyline>
                            <line x1="10" y1="14" x2="21" y2="3"></line>
                        </svg>
                    </a>
                </div>

            </div>
        </div>

    </div>
</section>

<!-- SECTION 3: CTA BAND (Deep Forest Dark) -->
<section class="media-cta-section section-theme-dark">
    <div class="media-cta-container">
        <span class="media-cta-eyebrow">Certifications &amp; Compliance</span>
        <h2>Have questions about our certifications?</h2>
        <p>Reach out and our team will be happy to provide more information or formal compliance packs.</p>
        <div>
            <a href="{{ url('/#contact') }}" class="media-btn">
                <span>Contact Us</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
        </div>
    </div>
</section>

@endsection