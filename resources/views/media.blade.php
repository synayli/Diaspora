@extends('layouts.app')

@section('title', 'Media & Insights | Diaspora')

@section('content')

<style>
/* =========================================================
   MEDIA & INSIGHTS - BALANCED HYBRID PALETTE (LIGHT & DARK)
========================================================= */
.media-page {
    /* Brand Colors */
    --ds-dark-navy: #09130e;
    --ds-dark-surface: #102017;
    --ds-accent-lime: #b7ed4b;
    --ds-accent-teal: #0284c7;

    /* Light Theme Tokens */
    --ds-light-bg: #f8faf6;
    --ds-light-card: #ffffff;
    --ds-light-sage: #eef5ea;
    --ds-light-border: #dde8d7;
    --ds-light-text-main: #142019;
    --ds-light-text-muted: #526357;

    /* Dark Theme Tokens */
    --ds-dark-text-main: #f8fafc;
    --ds-dark-text-muted: #94a3b8;
    --ds-dark-border: rgba(255, 255, 255, 0.08);

    font-family: inherit;
    color: var(--ds-light-text-main);
    background-color: #ffffff;
    overflow-x: hidden;
}

.media-page * {
    box-sizing: border-box;
}

/* =========================================================
   GLOBAL SECTION SCAFFOLDING
========================================================= */
.media-section {
    position: relative;
    padding: clamp(75px, 8vw, 110px) 0;
}

.media-section .container {
    max-width: 1220px;
    margin: 0 auto;
    padding: 0 clamp(20px, 4vw, 36px);
}

.media-heading {
    max-width: 680px;
    margin-bottom: clamp(36px, 5vw, 54px);
}

.media-heading.is-center {
    margin-left: auto;
    margin-right: auto;
    text-align: center;
}

.media-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    margin-bottom: 12px;
}

.media-heading h2 {
    font-size: clamp(2rem, 3.4vw, 2.7rem);
    font-weight: 700;
    line-height: 1.18;
    letter-spacing: -0.025em;
    margin: 0 0 16px;
}

.media-heading-line {
    width: 44px;
    height: 3px;
    border-radius: 2px;
    margin-bottom: 16px;
}

.media-heading.is-center .media-heading-line {
    margin-left: auto;
    margin-right: auto;
}

.media-heading p {
    font-size: 1.02rem;
    line-height: 1.65;
    margin: 0;
}

/* Typography per Section Mood */
.section-theme-light .media-eyebrow { color: #53753b; }
.section-theme-light .media-heading h2 { color: var(--ds-light-text-main); }
.section-theme-light .media-heading-line { background: #53753b; }
.section-theme-light .media-heading p { color: var(--ds-light-text-muted); }

.section-theme-dark .media-eyebrow { color: var(--ds-accent-lime); }
.section-theme-dark .media-heading h2 { color: #ffffff; }
.section-theme-dark .media-heading-line { background: var(--ds-accent-lime); }
.section-theme-dark .media-heading p { color: var(--ds-dark-text-muted); }

/* =========================================================
   1. HERO: FITS 100% IN ONE SCREEN & FULLY RESPONSIVE
========================================================= */
.ds-media-hero {
    position: relative;
    /* Locks the container to the visible window height minus navbar */
    height: calc(100vh - 72px);
    height: calc(100dvh - 72px);
    min-height: 480px;

    /* Flawless vertical and horizontal centering */
    display: flex;
    align-items: center;
    justify-content: center;

    /* Zero out padding so flex centering controls equal top/bottom distribution */
    padding: 0;
    margin: 0;

    background: radial-gradient(circle at 80% 20%, #14281c 0%, #08120c 70%);
    border-bottom: none;
    overflow: hidden;
    box-sizing: border-box;
}

.hero-aurora {
    position: absolute;
    border-radius: 50%;
    filter: blur(80px);
    pointer-events: none;
    z-index: 0;
    opacity: 0.55;
}

.hero-aurora-1 {
    width: min(440px, 80vw);
    height: min(440px, 80vw);
    top: -60px;
    left: 10%;
    background: radial-gradient(circle, rgba(183, 237, 75, 0.22), transparent 70%);
}

.hero-aurora-2 {
    width: min(500px, 85vw);
    height: min(500px, 85vw);
    bottom: -80px;
    right: 5%;
    background: radial-gradient(circle, rgba(34, 211, 238, 0.15), transparent 70%);
}

/* Ensure the layout block takes full width within container bounds */
.ds-hero-layout {
    display: grid;
    grid-template-columns: minmax(0, 1.45fr) minmax(290px, 350px);
    align-items: center;
    gap: clamp(24px, 4vw, 44px);
    position: relative;
    z-index: 2;
    width: 100%;
    margin: 0;
}

/* Reset default heading & text margins to prevent vertical drift */
.ds-hero-content {
    margin: 0;
    padding: 0;
}

.ds-badge-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 4px 11px;
    margin-top: 0;
    margin-bottom: 12px;
    border-radius: 999px;
    background: rgba(183, 237, 75, 0.08);
    border: 1px solid rgba(183, 237, 75, 0.25);
    backdrop-filter: blur(8px);
}

.ds-badge-pill .badge-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: var(--ds-accent-lime);
    box-shadow: 0 0 8px var(--ds-accent-lime);
    animation: badgePulse 2s infinite ease-in-out;
}

@keyframes badgePulse {
    0%, 100% { transform: scale(1); opacity: 0.7; }
    50% { transform: scale(1.35); opacity: 1; }
}

.ds-badge-pill .badge-text {
    color: #e6f7c8;
    font-size: 10.5px;
    font-weight: 700;
    letter-spacing: 0.12em;
    text-transform: uppercase;
}

/* Compact, proportional headline fitting in 2 lines */
.hero-headline {
    margin-top: 0;
    margin-bottom: 12px;
    font-size: clamp(1.4rem, 2.3vw, 2.15rem);
    font-weight: 800;
    line-height: 1.18;
    letter-spacing: -0.025em;
    color: #ffffff;
}

.hero-line {
    display: block;
    white-space: nowrap; /* Locks "Discover our work," & "activities & insights." in one line each */
}

.hero-headline .gradient-text {
    background: linear-gradient(120deg, #ffffff 30%, var(--ds-accent-lime) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.hero-subtext {
    color: var(--ds-dark-text-muted);
    font-size: clamp(0.85rem, 1vw, 0.95rem);
    line-height: 1.55;
    margin-top: 0;
    margin-bottom: 18px;
    max-width: 490px;
}

.media-hero-links {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin: 0;
    padding: 0;
}

.hero-pill-btn {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    padding: 8px 16px;
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.14);
    color: #f1f5f9;
    font-size: 12.5px;
    font-weight: 600;
    text-decoration: none;
    backdrop-filter: blur(8px);
    transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
}

.hero-pill-btn svg {
    color: var(--ds-accent-lime);
    transition: transform 0.25s ease;
}

.hero-pill-btn:hover {
    background: var(--ds-accent-lime);
    border-color: var(--ds-accent-lime);
    color: #08120c;
    transform: translateY(-2px);
    box-shadow: 0 8px 18px rgba(183, 237, 75, 0.25);
}

.hero-pill-btn:hover svg {
    color: #08120c;
    transform: scale(1.1);
}

/* Glass Card Showcase */
.ds-hero-visual {
    position: relative;
    width: 100%;
    max-width: 340px;
    margin-left: auto;
}

.hero-glass-card {
    background: rgba(16, 32, 24, 0.65);
    border: 1px solid rgba(183, 237, 75, 0.22);
    border-radius: 16px;
    padding: 20px;
    backdrop-filter: blur(16px);
    box-shadow: 0 18px 40px rgba(0, 0, 0, 0.55);
}

.glass-card-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 14px;
}

.glass-card-dots {
    display: flex;
    gap: 5px;
}

.glass-card-dots span {
    width: 7px;
    height: 7px;
    border-radius: 50%;
}
.glass-card-dots span:nth-child(1) { background: #ff5f57; }
.glass-card-dots span:nth-child(2) { background: #febc2e; }
.glass-card-dots span:nth-child(3) { background: #28c840; }

.glass-card-tag {
    color: var(--ds-accent-lime);
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
}

.radar-circle-wrap {
    position: relative;
    width: 90px;
    height: 90px;
    margin: 4px auto 16px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.radar-core {
    position: relative;
    z-index: 2;
    width: 42px;
    height: 42px;
    border-radius: 50%;
    background: rgba(183, 237, 75, 0.1);
    border: 1px solid rgba(183, 237, 75, 0.4);
    display: flex;
    align-items: center;
    justify-content: center;
}

.radar-pulse {
    position: absolute;
    inset: 0;
    border-radius: 50%;
    border: 1px solid rgba(183, 237, 75, 0.35);
    animation: radarRipple 3s cubic-bezier(0.2, 0.8, 0.2, 1) infinite;
}

.radar-pulse-delay {
    animation-delay: 1.5s;
}

@keyframes radarRipple {
    0% { transform: scale(0.6); opacity: 1; }
    100% { transform: scale(1.6); opacity: 0; }
}

.glass-stat-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 8px;
}

.stat-bubble {
    padding: 8px 6px;
    border-radius: 8px;
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.07);
    text-align: center;
}

.stat-number {
    display: block;
    color: #ffffff;
    font-size: 15px;
    font-weight: 700;
}

.stat-label {
    display: block;
    color: var(--ds-dark-text-muted);
    font-size: 10px;
    margin-top: 2px;
}

.floating-mini-card {
    position: absolute;
    bottom: -10px;
    left: -12px;
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 8px 12px;
    border-radius: 10px;
    background: #0f1c16;
    border: 1px solid rgba(183, 237, 75, 0.3);
    box-shadow: 0 12px 26px rgba(0, 0, 0, 0.55);
    animation: floatAnim 4s ease-in-out infinite alternate;
    z-index: 3;
}

@keyframes floatAnim {
    0% { transform: translateY(0); }
    100% { transform: translateY(-5px); }
}

.mini-card-icon-wrap {
    width: 24px;
    height: 24px;
    border-radius: 6px;
    background: rgba(183, 237, 75, 0.12);
    display: flex;
    align-items: center;
    justify-content: center;
}

.floating-mini-card strong {
    display: block;
    color: #ffffff;
    font-size: 11px;
}

.floating-mini-card small {
    display: block;
    color: var(--ds-accent-lime);
    font-size: 9.5px;
}

/* =========================================================
   DEVICE-SPECIFIC RESPONSIVE OVERRIDES
========================================================= */

/* 1. Large & Standard Laptops (Default state) */
@media (min-width: 993px) {
    .ds-media-hero {
        height: calc(100vh - 72px);
        height: calc(100dvh - 72px);
        min-height: 520px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0;
    }
}

/* 2. Tablets & Small Laptops (992px and below) */
@media (max-width: 992px) {
    .ds-media-hero {
        /* Release the rigid 100vh lock so content never gets crushed */
        height: auto;
        min-height: calc(100vh - 72px);
        padding: clamp(48px, 8vh, 80px) 0;
        display: flex;
        align-items: center;
    }

    .ds-hero-layout {
        grid-template-columns: 1fr; /* Switch to single-column stack */
        gap: 40px;
        text-align: left;
    }

    .ds-hero-visual {
        max-width: 360px;
        margin: 0 auto; /* Center the radar card underneath the text */
    }

    .hero-subtext {
        max-width: 100%;
    }
}

/* 3. Mobile Devices (640px and below) */
@media (max-width: 640px) {
    .ds-media-hero {
        height: auto;
        min-height: auto;
        padding: 36px 0 48px;
    }

    /* Prevent text cutoff on narrow screens */
    .hero-line {
        white-space: normal; /* Allows natural wrapping on narrow phone screens */
    }

    .hero-headline {
        font-size: clamp(1.6rem, 7vw, 2rem);
        line-height: 1.22;
    }

    .hero-subtext {
        font-size: 0.9rem;
    }

    /* Stack buttons full-width for effortless finger taps */
    .media-hero-links {
        display: grid;
        grid-template-columns: 1fr;
        width: 100%;
        gap: 10px;
    }

    .hero-pill-btn {
        width: 100%;
        justify-content: center;
        padding: 11px 16px;
    }

    /* Anchor the floating card safely inside the layout without overflow */
    .floating-mini-card {
        position: static;
        margin-top: 14px;
        width: 100%;
        justify-content: center;
        animation: none;
    }
}

/* =========================================================
   2. VIDEO (LIGHT CLEAN WHITE)
========================================================= */

.media-video-section {
    background: #ffffff;
    border-bottom: 1px solid var(--ds-light-border);
}

.media-video-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: clamp(16px, 3vw, 32px);
    max-width: 1100px;
    margin: 0 auto;
}

.media-video-wrap {
    position: relative;
    min-width: 0;
    border-radius: 18px;
    background: #ffffff;
    border: 1px solid #dbe5d8;
    box-shadow: 0 20px 48px rgba(15, 23, 42, 0.08);
    overflow: hidden;
}

.media-video-topbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    padding: 12px 18px;
    background: #f8faf6;
    border-bottom: 1px solid #e5ede2;
}

.media-video-topbar-title {
    min-width: 0;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    font-size: 12px;
    color: #68796c;
    font-family: monospace;
    letter-spacing: 0.04em;
}

.media-video-wrap video {
    display: block;
    width: 100%;
    height: auto;
    aspect-ratio: 16 / 9;
    max-height: 70vh;
    object-fit: contain;      /* shows the whole video, never crops it */
    background: #09130d;
}

/* ---------- Responsive ---------- */

/* Ultrawide */
@media (min-width: 1600px) {
    .media-video-grid {
        max-width: 1280px;
        gap: 40px;
    }
    .media-video-topbar-title {
        font-size: 13px;
    }
}

/* Small laptops and tablets landscape: keep side by side, tighter */
@media (max-width: 1100px) {
    .media-video-grid {
        gap: 20px;
    }
    .media-video-wrap {
        border-radius: 16px;
    }
}

/* Tablets portrait and below: stack, centred */
@media (max-width: 900px) {
    .media-video-grid {
        grid-template-columns: 1fr;
        max-width: 640px;
    }
}

/* Phones */
@media (max-width: 600px) {
    .media-video-grid {
        max-width: 100%;
        gap: 18px;
    }
    .media-video-topbar {
        padding: 10px 14px;
    }
    .media-video-topbar-title {
        font-size: 11.5px;
    }
    .media-video-wrap {
        border-radius: 14px;
        box-shadow: 0 12px 28px rgba(15, 23, 42, 0.08);
    }
}

/* Small phones */
@media (max-width: 400px) {
    .media-video-topbar {
        padding: 8px 12px;
    }
    .media-video-topbar-title {
        font-size: 11px;
    }
    .media-video-wrap {
        border-radius: 12px;
    }
}

/* Landscape phones: keep the video from taking more than the screen height */
@media (max-height: 500px) and (orientation: landscape) {
    .media-video-wrap video {
        max-height: 85vh;
    }
}

/* =========================================================
   3. ACTIVITIES (LIGHT SOFT SAGE)
========================================================= */

.media-activities-section {
    background: var(--ds-light-bg);
    border-bottom: 1px solid var(--ds-light-border);
}

/* Update the activity grid to either 4 columns or auto-fit */
.media-activity-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
    gap: 26px;
}

.media-activity-card {
    display: flex;
    flex-direction: column;
    border-radius: 14px;
    background: #ffffff;
    border: 1px solid var(--ds-light-border);
    box-shadow: 0 4px 18px rgba(16, 32, 22, 0.04);
    overflow: hidden;
    cursor: pointer;
    text-align: left;
    transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), 
                box-shadow 0.3s ease, 
                border-color 0.3s ease;
}

.media-activity-card:hover {
    transform: translateY(-7px);
    border-color: #bad3ab;
    box-shadow: 0 18px 36px rgba(16, 32, 22, 0.1);
}

.media-activity-image {
    position: relative;
    aspect-ratio: 16 / 10;
    overflow: hidden;
    background: #e2ecd9;
}

.media-activity-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1);
}

.media-activity-card:hover .media-activity-image img {
    transform: scale(1.06);
}

.media-activity-count {
    position: absolute;
    top: 14px;
    left: 14px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 5px 12px;
    border-radius: 999px;
    background: rgba(14, 25, 18, 0.8);
    backdrop-filter: blur(6px);
    color: #ffffff;
    font-size: 11.5px;
    font-weight: 600;
}

.media-activity-content {
    display: flex;
    flex-direction: column;
    flex: 1;
    padding: 24px;
}

.media-tag-light {
    align-self: flex-start;
    padding: 4px 10px;
    margin-bottom: 12px;
    border-radius: 5px;
    background: var(--ds-light-sage);
    border: 1px solid #d7e4cf;
    color: #4b6b36;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.06em;
    text-transform: uppercase;
}

.media-activity-content h3 {
    color: var(--ds-light-text-main);
    font-size: 1.25rem;
    font-weight: 700;
    margin: 0 0 10px;
    line-height: 1.35;
}

.media-activity-content p {
    color: var(--ds-light-text-muted);
    font-size: 0.94rem;
    line-height: 1.6;
    margin: 0 0 22px;
}

.media-activity-foot {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: auto;
    padding-top: 16px;
    border-top: 1px solid #edf2e8;
    color: #172a20;
    font-size: 13px;
    font-weight: 600;
}

.media-card-link-icon {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background: var(--ds-light-sage);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: #172a20;
    transition: all 0.25s ease;
}

.media-activity-card:hover .media-card-link-icon {
    background: #172a20;
    color: #ffffff;
    transform: translateX(3px);
}

/* =========================================================
   4. RESOURCES / POSTERS (DEEP CYBER SLATE)
========================================================= */

.media-resources-section {
    background: #09130e;
    border-bottom: 1px solid var(--ds-dark-border);
}

.media-poster-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 30px;
}

.media-poster-card {
    position: relative;
    display: flex;
    flex-direction: column;
    border-radius: 14px;
    background: #0f1c16;
    border: 1px solid rgba(255, 255, 255, 0.08);
    overflow: hidden;
    text-decoration: none;
    transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), 
                box-shadow 0.3s ease, 
                border-color 0.3s ease;
}

.media-poster-card:hover {
    transform: translateY(-7px);
    border-color: rgba(183, 237, 75, 0.35);
    box-shadow: 0 20px 42px rgba(0, 0, 0, 0.55), 0 0 20px rgba(183, 237, 75, 0.12);
}

.media-poster-thumb {
    position: relative;
    aspect-ratio: 4 / 5;
    padding: 22px;
    background: #050a07;
    display: flex;
    align-items: center;
    justify-content: center;
}

.media-poster-thumb img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    border-radius: 6px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.45);
    transition: transform 0.4s ease;
}

.media-poster-card:hover .media-poster-thumb img {
    transform: scale(1.03);
}

.media-poster-overlay {
    position: absolute;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    background: rgba(9, 19, 14, 0.78);
    backdrop-filter: blur(4px);
    color: #ffffff;
    font-size: 13px;
    font-weight: 600;
    opacity: 0;
    transition: opacity 0.25s ease;
}

.media-poster-card:hover .media-poster-overlay {
    opacity: 1;
}

.media-poster-caption {
    padding: 18px 20px;
    font-size: 14.5px;
    font-weight: 600;
    text-align: center;
    color: #ffffff;
    border-top: 1px solid rgba(255, 255, 255, 0.08);
    background: #0f1c16;
}

/* =========================================================
   5. INSIGHTS (PURE WHITE MODERN LIGHT)
========================================================= */

.media-insights-section {
    background: #ffffff;
    border-bottom: 1px solid var(--ds-light-border);
}

.media-insight-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 28px;
}

.media-insight-card {
    position: relative;
    display: flex;
    flex-direction: column;
    padding: 28px;
    background: #ffffff;
    border: 1px solid #dbe5d8;
    border-radius: 14px;
    box-shadow: 0 4px 14px rgba(16, 32, 22, 0.03);
    text-decoration: none;
    transition: transform 0.28s ease, box-shadow 0.28s ease, border-color 0.28s ease;
    overflow: hidden;
}

.media-insight-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, #6b8852, #b7ed4b);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.3s ease;
}

.media-insight-card:hover {
    transform: translateY(-6px);
    border-color: #bad3ab;
    box-shadow: 0 18px 36px rgba(16, 32, 22, 0.08);
}

.media-insight-card:hover::before {
    transform: scaleX(1);
}

.media-insight-card h3 {
    color: var(--ds-light-text-main);
    font-size: 1.15rem;
    font-weight: 700;
    line-height: 1.4;
    margin: 0 0 10px;
}

.media-insight-card p {
    color: var(--ds-light-text-muted);
    font-size: 0.92rem;
    line-height: 1.6;
    margin: 0 0 24px;
}

.media-insight-source {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: auto;
    padding-top: 16px;
    border-top: 1px solid #edf2e8;
    font-size: 12.5px;
    color: #6d7e72;
}

.media-insight-source strong {
    color: #172a20;
}

.media-insight-arrow {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background: var(--ds-light-sage);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: #172a20;
    transition: all 0.25s ease;
}

.media-insight-card:hover .media-insight-arrow {
    background: #172a20;
    color: #ffffff;
    transform: translate(2px, -2px);
}

.media-insights-action {
    margin-top: 50px;
    text-align: center;
}

/* Insights Empty State */
.media-insights-empty {
    grid-column: 1 / -1;
    max-width: 500px;
    margin: 0 auto;
    padding: 44px 30px;
    text-align: center;
    background: #ffffff;
    border: 1px dashed #c0d3b6;
    border-radius: 14px;
}

.media-insights-empty-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 44px;
    height: 44px;
    margin-bottom: 16px;
    border-radius: 50%;
    background: var(--ds-light-sage);
    color: #53753b;
    font-weight: 700;
}

/* link button */
.media-insights-action {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 22px;
    margin-top: 36px;
}

.media-insights-text-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 5px 0;
    color: #263b2b;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    transition: color 0.2s ease;
}

.media-insights-text-link svg {
    width: 15px;
    height: 15px;
    fill: none;
    stroke: #6b8852;
    stroke-width: 1.8;
    stroke-linecap: round;
    stroke-linejoin: round;
    transition: transform 0.2s ease;
}

.media-insights-text-link:hover {
    color: #6b8852;
}

.media-insights-text-link:hover svg {
    transform: translate(2px, -2px);
}

.media-insights-link-divider {
    width: 1px;
    height: 18px;
    background: #dce5d5;
}

@media (max-width: 480px) {
    .media-insights-action {
        gap: 14px;
    }

    .media-insights-link-divider {
        height: 14px;
    }

    .media-insights-text-link {
        font-size: 13px;
    }
}

/* =========================================================
   6. CTA (DEEP FOREST DARK)
========================================================= */

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
    color: var(--ds-accent-lime);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.16em;
    text-transform: uppercase;
    display: block;
    margin-bottom: 14px;
}

.media-cta-container h2 {
    color: #ffffff;
    font-size: clamp(2.1rem, 3.8vw, 3rem);
    font-weight: 800;
    line-height: 1.15;
    letter-spacing: -0.03em;
    margin: 0 0 16px;
}

.media-cta-container p {
    color: var(--ds-dark-text-muted);
    font-size: 1.05rem;
    line-height: 1.7;
    margin: 0 0 36px;
}

/* =========================================================
   7. BUTTONS
========================================================= */
.media-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 13px 28px;
    border-radius: 6px;
    background: var(--ds-accent-lime);
    border: 1px solid var(--ds-accent-lime);
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

/* Light Section Button Alternative */
.media-btn-dark {
    background: #172a20;
    border: 1px solid #172a20;
    color: #ffffff;
}

.media-btn-dark:hover {
    background: #254232;
    border-color: #254232;
    color: #ffffff;
    box-shadow: 0 8px 24px rgba(23, 42, 32, 0.2);
}

/* =========================================================
   8. LIGHTBOX MODAL
========================================================= */
.media-lightbox {
    position: fixed;
    inset: 0;
    z-index: 9999;
    background: rgba(4, 8, 6, 0.95);
    backdrop-filter: blur(12px);
    display: none;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.media-lightbox.is-open {
    display: flex;
}

.media-lightbox-dialog {
    width: 100%;
    max-width: 1000px;
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.media-lightbox-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.media-lightbox-title {
    color: #ffffff;
    font-size: 1.25rem;
    margin: 0 0 4px;
}

.media-lightbox-counter {
    color: var(--ds-accent-lime);
    font-size: 13px;
    font-weight: 600;
}

.media-lightbox-close {
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.15);
    color: #ffffff;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.2s;
}

.media-lightbox-close:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: scale(1.05);
}

.media-lightbox-stage {
    position: relative;
    width: 100%;
    aspect-ratio: 16 / 10;
    max-height: 65vh;
    background: #000000;
    border-radius: 14px;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.media-lightbox-image {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    transition: opacity 0.2s ease;
}

.media-lightbox-image.is-loading {
    opacity: 0.3;
}

.media-lightbox-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(13, 26, 19, 0.7);
    border: 1px solid rgba(255, 255, 255, 0.15);
    color: #ffffff;
    width: 44px;
    height: 44px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.2s;
}

.media-lightbox-prev { left: 16px; }
.media-lightbox-next { right: 16px; }

.media-lightbox-nav:hover {
    background: var(--ds-accent-lime);
    color: #08120c;
}

.media-lightbox-thumbs {
    display: flex;
    gap: 10px;
    overflow-x: auto;
    padding-bottom: 6px;
}

.media-lightbox-thumb {
    width: 70px;
    height: 50px;
    border-radius: 6px;
    overflow: hidden;
    flex-shrink: 0;
    border: 2px solid transparent;
    cursor: pointer;
    background: #000;
    padding: 0;
}

.media-lightbox-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0.6;
    transition: opacity 0.2s;
}

.media-lightbox-thumb.is-active,
.media-lightbox-thumb:hover img {
    opacity: 1;
}

.media-lightbox-thumb.is-active {
    border-color: var(--ds-accent-lime);
}

.media-lightbox-video {
    display: none;
    width: 100%;
    height: 100%;
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    background: #000;
}

.media-lightbox-stage.is-video .media-lightbox-video { display: block; }
.media-lightbox-stage.is-video .media-lightbox-image { display: none; }

/* Video thumbnail with a play icon */
.media-lightbox-thumb.is-video {
    display: flex;
    align-items: center;
    justify-content: center;
    background: #102017;
    color: var(--ds-accent-lime);
}

.media-lightbox-thumb.is-video svg {
    width: 20px;
    height: 20px;
    fill: currentColor;
}

/* =========================================================
   RESPONSIVE BREAKPOINTS
========================================================= */
@media (max-width: 992px) {
    .ds-hero-layout {
        grid-template-columns: 1fr;
        gap: 48px;
    }
    
    .ds-hero-visual {
        max-width: 100%;
        margin-left: 0;
    }
    
    .media-activity-grid,
    .media-poster-grid,
    .media-insight-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 640px) {
    .media-activity-grid,
    .media-poster-grid,
    .media-insight-grid {
        grid-template-columns: 1fr;
    }
    
    .media-hero-links {
        flex-direction: column;
    }
    
    .hero-pill-btn {
        width: 100%;
        justify-content: center;
    }
    
    .floating-mini-card {
        position: static;
        margin-top: 16px;
        width: 100%;
    }
}
</style>

@php
    $activities = [
        [
            'tag'    => 'Vacation',
            'title'  => 'Company Trip',
            'alt'    => 'Diaspora company trip',
            'desc'   => "Highlights and memorable moments from Diaspora's team annual retreat and company trip.",
            'photos' => [
                asset('video/vacation.mp4'),
                asset('images/DSB-trip/trip-1.png'),
                asset('images/DSB-trip/trip-2.png'),
                asset('images/DSB-trip/trip-3.jpeg'),
                asset('images/DSB-trip/trip-4.jpeg'),
                asset('images/DSB-trip/trip-5.jpeg'),
                asset('images/DSB-trip/trip-6.jpeg'),
                asset('images/DSB-trip/trip-7.jpeg'),
                asset('images/DSB-trip/trip-8.jpeg'),
                asset('images/DSB-trip/trip-9.jpeg'),
                asset('images/DSB-trip/trip-10.jpeg'),
                asset('images/DSB-trip/trip-11.jpeg'),
                asset('images/DSB-trip/trip-12.JPG'),
                asset('images/DSB-trip/trip-13.jpeg'),
            ],
        ],
        [
            'tag'    => 'Activity',
            'title'  => 'ANGKASA',
            'alt'    => 'ANGKASA activity',
            'desc'   => "Highlights from Diaspora's activities and engagement with ANGKASA.",
            'photos' => [
                asset('images/media/ANGKASA 3.jpeg'),
                asset('images/media/ANGKASA 6.jpeg'),
                asset('images/media/ANGKASA 8.jpeg'),
            ],
        ],
        [
            'tag'    => 'Workshop',
            'title'  => 'Bengkel NCII JDN',
            'alt'    => 'Bengkel NCII JDN',
            'desc'   => 'Highlights from the Bengkel NCII JDN programme and related activities.',
            'photos' => [
                asset('images/media/bengkel-ncii-jdn-1.jpg'),
                asset('images/media/bengkel-ncii-jdn-2.jpg'),
                asset('images/media/bengkel-ncii-jdn-3.jpg'),
                asset('images/media/bengkel-ncii-jdn-4.jpg'),
                asset('images/media/bengkel-ncii-jdn-5.jpg'),
                asset('images/media/bengkel-ncii-jdn-6.jpg'),
                asset('images/media/bengkel-ncii-jdn-7.jpg'),
                asset('images/media/bengkel-ncii-jdn.jpg'),
            ],
        ],
        [
            'tag'    => 'Activity',
            'title'  => 'MyDIDSB',
            'alt'    => 'MyDIDSB activity',
            'desc'   => "Highlights from Diaspora's activities and engagement related to MyDIDSB.",
            'photos' => [
                asset('images/media/mydidsb.jpeg'),
                asset('images/media/mydidsb-1.jpeg'),
                asset('images/media/mydidsb-2.jpeg'),
                asset('images/media/mydidsb-3.jpeg'),
            ],
        ],
        [
            'tag'    => 'Training',
            'title'  => 'Kursus Pelaksanaan ISMS PPTGWP',
            'alt'    => 'Kursus Pelaksanaan ISMS PPTGWP',
            'desc'   => 'Training and implementation session on Information Security Management Systems (ISMS) for PPTGWP.',
            'photos' => [
                asset('images/kursus-ISMS(PPTGWP)/kursus-pelaksanaan-ISMS(pptgwp)-6.jpeg'),
                asset('images/kursus-ISMS(PPTGWP)/kursus-pelaksanaan-ISMS(pptgwp)-1.jpeg'),
                asset('images/kursus-ISMS(PPTGWP)/kursus-pelaksanaan-ISMS(pptgwp)-2.jpeg'),
                asset('images/kursus-ISMS(PPTGWP)/kursus-pelaksanaan-ISMS(pptgwp)-3.jpeg'),
                asset('images/kursus-ISMS(PPTGWP)/kursus-pelaksanaan-ISMS(pptgwp)-4.jpeg'),
                asset('images/kursus-ISMS(PPTGWP)/kursus-pelaksanaan-ISMS(pptgwp)-5.jpeg'),
            ],
        ],
        [
            'tag'    => 'Workshop',
            'title'  => 'Bengkel Security Matrix',
            'alt'    => 'Bengkel Security Matrix',
            'desc'   => 'Collaborative workshop session analyzing threat matrices, compliance, and cyber posture readiness.',
            'photos' => [
                asset('images/RARTP-SM/bengkel-rartp-sm-2.jpeg'),
                asset('images/RARTP-SM/bengkel-rartp-sm-1.jpeg'),
                asset('images/RARTP-SM/bengkel-rartp-sm-3.jpeg'),
            ],
        ],
    ];

    $posters = [
        ['file' => 'images/cyber-awareness.jpg',   'title' => 'Stay Safe Online: Cybersecurity Awareness'],
        ['file' => 'images/wangiri_scam.png',      'title' => 'Beware of Wangiri Scam'],
        ['file' => 'images/safe-laptop-usage.png', 'title' => 'Safe Laptop Usage for Windows'],
    ];

        $videos = [
        ['file' => 'CyberSecurity_Awareness (1).mp4', 'label' => 'diaspora-cyber-awareness.mp4'],
        ['file' => 'Awareness_Cyberbully.mp4',        'label' => 'diaspora-cyberbully-awareness.mp4'],
    ];
@endphp

<div class="media-page">

{{-- 1. HERO SECTION (DARK CYBER) --}}
<section class="ds-hero ds-media-hero section-theme-dark">
    <div class="hero-aurora hero-aurora-1" aria-hidden="true"></div>
    <div class="hero-aurora hero-aurora-2" aria-hidden="true"></div>

    <div class="container">
        <div class="ds-hero-layout">
            
            <div class="ds-hero-content">
                <div class="ds-badge-pill">
                    <span class="badge-dot"></span>
                    <span class="badge-text">Media &amp; Insights Hub</span>
                </div>

                <h1 class="hero-headline">
                    <span class="hero-line">Discover our work,</span>
                    <span class="hero-line gradient-text">activities &amp; insights.</span>
                </h1>

                <p class="hero-subtext">
                    Explore Diaspora's field activities, cybersecurity awareness resources, community programmes, and enterprise threat intelligence.
                </p>

                <nav class="media-hero-links" aria-label="Jump to a section">
                    <a href="#activities" class="hero-pill-btn">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="3" y="3" width="7" height="7"></rect>
                            <rect x="14" y="3" width="7" height="7"></rect>
                            <rect x="14" y="14" width="7" height="7"></rect>
                            <rect x="3" y="14" width="7" height="7"></rect>
                        </svg>
                        <span>Activities</span>
                    </a>
                    <a href="#resources" class="hero-pill-btn">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                        </svg>
                        <span>Awareness Resources</span>
                    </a>
                    <a href="#insights" class="hero-pill-btn">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                        </svg>
                        <span>Latest Insights</span>
                    </a>
                </nav>
            </div>

            <div class="ds-hero-visual" aria-hidden="true">
                <div class="hero-glass-card">
                    <div class="glass-card-header">
                        <div class="glass-card-dots">
                            <span></span><span></span><span></span>
                        </div>
                        <span class="glass-card-tag">Threat Watch • Active</span>
                    </div>

                    <div class="radar-circle-wrap">
                        <div class="radar-pulse"></div>
                        <div class="radar-pulse radar-pulse-delay"></div>
                        <div class="radar-core">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#b7ed4b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            </svg>
                        </div>
                    </div>

                    <div class="glass-stat-row">
                        <div class="stat-bubble">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Security Focus</span>
                        </div>
                        <div class="stat-bubble">
                            <span class="stat-number">Active</span>
                            <span class="stat-label">Community Work</span>
                        </div>
                    </div>
                </div>

                <div class="floating-mini-card">
                    <span class="mini-card-icon-wrap">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#b7ed4b" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                        </svg>
                    </span>
                    <div>
                        <strong>Verified Advisory</strong>
                        <small>Akta 854 &amp; NCII Standard</small>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- 2. AWARENESS VIDEO (LIGHT PURE WHITE) --}}
<section class="media-section media-video-section section-theme-light">
    <div class="container">
        <div class="media-heading is-center">
            <span class="media-eyebrow">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polygon points="10 8 16 12 10 16 10 8"/></svg>
                Cybersecurity Awareness
            </span>
            <h2>Stay Informed. Stay Secure.</h2>
            <div class="media-heading-line"></div>
            <p>
                Learn essential practices and practical tips to safeguard your everyday digital footprint.
            </p>
        </div>

        <div class="media-video-grid">
            @foreach ($videos as $video)
                <div class="media-video-wrap">
                    <div class="media-video-topbar">
                        <div class="glass-card-dots">
                            <span></span><span></span><span></span>
                        </div>
                        <span class="media-video-topbar-title">{{ $video['label'] }}</span>
                    </div>
                    <video controls preload="metadata" playsinline>
                        <source src="{{ asset('video/' . rawurlencode($video['file'])) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 3. ACTIVITIES (LIGHT SOFT SAGE) --}}
<section class="media-section media-activities-section section-theme-light" id="activities">
    <div class="container">
        <div class="media-heading">
            <span class="media-eyebrow">Events &amp; Engagements</span>
            <h2>Our Activities</h2>
            <div class="media-heading-line"></div>
            <p>
                Browse recent highlights from our enterprise workshops, community initiatives, and partnerships.
            </p>
        </div>

        <div class="media-activity-grid">
            @foreach ($activities as $activity)
                @php
                    $isVideo = fn ($p) => preg_match('/\.(mp4|webm|mov)(\?.*)?$/i', $p);

                    $videoCount = collect($activity['photos'])->filter($isVideo)->count();
                    $photoCount = count($activity['photos']) - $videoCount;

                    // Cover = the first item that is not a video
                    $cover = collect($activity['photos'])->first(fn ($p) => !$isVideo($p));
                @endphp

                <div
                    class="media-activity-card"
                    role="button"
                    tabindex="0"
                    aria-haspopup="dialog"
                    aria-label="View {{ $activity['title'] }} gallery"
                    data-title="{{ $activity['title'] }}"
                    data-gallery="{{ json_encode($activity['photos']) }}"
                >
                    <div class="media-activity-image">
                        <span class="media-activity-count">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                                <circle cx="8.5" cy="8.5" r="1.5"/>
                                <polyline points="21 15 16 10 5 21"/>
                            </svg>
                            {{ $photoCount }} Photos{{ $videoCount ? ' · ' . $videoCount . ($videoCount === 1 ? ' Video' : ' Videos') : '' }}
                        </span>
                        <img src="{{ $cover }}" alt="{{ $activity['alt'] }}" loading="lazy">
                    </div>

                    <div class="media-activity-content">
                        <span class="media-tag-light">{{ $activity['tag'] }}</span>
                        <h3>{{ $activity['title'] }}</h3>
                        <p>{{ $activity['desc'] }}</p>

                        <div class="media-activity-foot">
                            <span>Browse gallery</span>
                            <span class="media-card-link-icon" aria-hidden="true">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 4. RESOURCES / POSTERS (DEEP CYBER SLATE) --}}
<section class="media-section media-resources-section section-theme-dark" id="resources">
    <div class="container">
        <div class="media-heading is-center">
            <span class="media-eyebrow">Educational Materials</span>
            <h2>Awareness Resources</h2>
            <div class="media-heading-line"></div>
            <p>
                Downloadable guides and posters to help organisations educate employees against prevalent risks.
            </p>
        </div>

        <div class="media-poster-grid">
            @foreach ($posters as $poster)
                <a
                    href="{{ asset($poster['file']) }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="media-poster-card"
                    aria-label="Open {{ $poster['title'] }} in full resolution"
                >
                    <div class="media-poster-thumb">
                        <img src="{{ asset($poster['file']) }}" alt="{{ $poster['title'] }}" loading="lazy">
                        <div class="media-poster-overlay">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="11" cy="11" r="8"/>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                                <line x1="11" y1="8" x2="11" y2="14"/>
                                <line x1="8" y1="11" x2="14" y2="11"/>
                            </svg>
                            <span>View Full Poster</span>
                        </div>
                    </div>
                    <span class="media-poster-caption">{{ $poster['title'] }}</span>
                </a>
            @endforeach
        </div>
    </div>
</section>


{{-- 5. LATEST INSIGHTS (PURE WHITE MODERN LIGHT) --}}
<section class="media-section media-insights-section section-theme-light" id="insights">
    <div class="container">
        <div class="media-heading">
            <span class="media-eyebrow">Industry Feed</span>
            <h2>Latest Cybersecurity Insights</h2>
            <div class="media-heading-line"></div>
            <p>
                Stay informed with global cybersecurity news, emerging threats,
                and official Malaysian cybersecurity advisories.
            </p>
        </div>

        <div class="media-insight-grid">
            @php
                $validInsights = collect($insights ?? [])
                    ->filter(function ($article) {
                        return is_array($article)
                            && !empty($article['url'])
                            && !empty($article['title']);
                    })
                    ->take(6);
            @endphp

            @forelse ($validInsights as $article)
                <a
                    href="{{ $article['url'] }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="media-insight-card"
                    aria-label="Read article: {{ $article['title'] }}"
                >
                    <span class="media-tag-light">
                        {{ $article['category'] ?? 'Cybersecurity' }}
                    </span>

                    <h3>{{ $article['title'] }}</h3>

                    <p>
                        {{ $article['description'] ?? 'Read the latest cybersecurity news and developments.' }}
                    </p>

                    <div class="media-insight-source">
                        <span>
                            Source:
                            <strong>
                                {{ $article['source'] ?? 'The Hacker News' }}
                            </strong>
                        </span>

                        <span class="media-insight-arrow" aria-hidden="true">
                            <svg
                                width="14"
                                height="14"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2.4"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <line x1="7" y1="17" x2="17" y2="7"></line>
                                <polyline points="7 7 17 7 17 17"></polyline>
                            </svg>
                        </span>
                    </div>
                </a>
            @empty
                <div class="media-insights-empty">
                    <span class="media-insights-empty-icon" aria-hidden="true">i</span>
                    <h3>Insights Feed Updating</h3>
                    <p>
                        Recent cybersecurity updates are temporarily unavailable.
                        Visit our news sources directly for the latest information.
                    </p>

                    <a
                        href="https://thehackernews.com/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="media-btn media-btn-dark"
                        style="margin-top: 14px;"
                    >
                        <span>Explore The Hacker News</span>
                        <svg
                            width="15"
                            height="15"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2.2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true"
                        >
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>

                    <a
                        href="https://www.nc4.gov.my/alertAdvisory"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="media-btn media-btn-dark"
                        style="margin-top: 10px;"
                    >
                        <span>Explore NC4 Advisories</span>
                    </a>
                </div>
            @endforelse
        </div>

        @if ($validInsights->isNotEmpty())
            <div class="media-insights-action">
                <a
                    href="https://thehackernews.com/"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="media-insights-text-link"
                >
                    <span>The Hacker News</span>
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M7 17 17 7M7 7h10v10" />
                    </svg>
                </a>

                <span class="media-insights-link-divider" aria-hidden="true"></span>

                <a
                    href="https://www.nc4.gov.my/alertAdvisory"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="media-insights-text-link"
                >
                    <span>NC4 Alert &amp; Advisory</span>
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M7 17 17 7M7 7h10v10" />
                    </svg>
                </a>
            </div>
        @endif
    </div>
</section>


{{-- 6. CTA (DEEP FOREST DARK) --}}
<section class="media-cta-section section-theme-dark">
    <div class="media-cta-container">
        <span class="media-cta-eyebrow">Ready to Collaborate?</span>
        <h2>Want to learn more about Diaspora?</h2>
        <p>Get in touch with our team to discover how our cybersecurity, technology consultancy, and enterprise digital solutions safeguard your organisation.</p>
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

{{-- LIGHTBOX MODAL --}}
<div class="media-lightbox" id="mediaLightbox" aria-hidden="true">
    <div class="media-lightbox-dialog" role="dialog" aria-modal="true" aria-labelledby="mediaLightboxTitle">
        <div class="media-lightbox-header">
            <div>
                <h3 class="media-lightbox-title" id="mediaLightboxTitle">Gallery</h3>
                <div class="media-lightbox-counter" id="mediaLightboxCounter" aria-live="polite"></div>
            </div>
            <button type="button" class="media-lightbox-close" data-lightbox-close aria-label="Close gallery">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>

        <div class="media-lightbox-stage" id="mediaLightboxStage">
            <button type="button" class="media-lightbox-nav media-lightbox-prev" data-lightbox-prev aria-label="Previous photo">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </button>

            <img class="media-lightbox-image" id="mediaLightboxImage" src="" alt="">
            <video class="media-lightbox-video" id="mediaLightboxVideo" controls playsinline preload="metadata"></video>

            <button type="button" class="media-lightbox-nav media-lightbox-next" data-lightbox-next aria-label="Next photo">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </button>
        </div>

        <div class="media-lightbox-thumbs" id="mediaLightboxThumbs"></div>
    </div>
</div>

</div>

@verbatim
<script>
    (function () {
        var box = document.getElementById('mediaLightbox');
        if (!box) return;

        var imgEl     = document.getElementById('mediaLightboxImage');
        var videoEl   = document.getElementById('mediaLightboxVideo');
        var titleEl   = document.getElementById('mediaLightboxTitle');
        var counterEl = document.getElementById('mediaLightboxCounter');
        var thumbsEl  = document.getElementById('mediaLightboxThumbs');
        var stageEl   = document.getElementById('mediaLightboxStage');

        var photos = [], index = 0, lastFocus = null, touchStartX = null;

        function isVideo(src) {
            return /\.(mp4|webm|mov)(\?.*)?$/i.test(src);
        }

        function stopVideo() {
            videoEl.pause();
            videoEl.removeAttribute('src');
            videoEl.load();
        }

        function show(i) {
            if (!photos.length) return;
            index = (i + photos.length) % photos.length;
            var src = photos[index];
            var vid = isVideo(src);

            stageEl.classList.toggle('is-video', vid);

            if (vid) {
                imgEl.removeAttribute('src');
                videoEl.src = src;
                videoEl.load();
            } else {
                stopVideo();
                imgEl.classList.add('is-loading');
                imgEl.onload = function () { imgEl.classList.remove('is-loading'); };
                imgEl.src = src;
                imgEl.alt = titleEl.textContent + ' photo ' + (index + 1);
            }

            counterEl.textContent = (index + 1) + ' / ' + photos.length;

            var thumbs = thumbsEl.children;
            for (var t = 0; t < thumbs.length; t++) {
                thumbs[t].classList.toggle('is-active', t === index);
            }
            if (thumbs[index] && thumbs[index].scrollIntoView) {
                thumbs[index].scrollIntoView({ block: 'nearest', inline: 'center' });
            }

            [index + 1, index - 1].forEach(function (n) {
                var s = photos[(n + photos.length) % photos.length];
                if (!isVideo(s)) { var p = new Image(); p.src = s; }
            });
        }

        function open(list, name, trigger) {
            if (!list || !list.length) return;
            photos = list;
            lastFocus = trigger || document.activeElement;
            titleEl.textContent = name || 'Gallery';

            thumbsEl.innerHTML = '';
            photos.forEach(function (src, i) {
                var b = document.createElement('button');
                b.type = 'button';
                b.className = 'media-lightbox-thumb';
                b.setAttribute('aria-label', (isVideo(src) ? 'Show video ' : 'Show photo ') + (i + 1));

                if (isVideo(src)) {
                    b.classList.add('is-video');
                    b.innerHTML = '<svg viewBox="0 0 24 24" aria-hidden="true"><polygon points="7 4 20 12 7 20 7 4"></polygon></svg>';
                } else {
                    var im = document.createElement('img');
                    im.src = src; im.alt = ''; im.loading = 'lazy';
                    b.appendChild(im);
                }

                b.addEventListener('click', function () { show(i); });
                thumbsEl.appendChild(b);
            });
            thumbsEl.style.display = photos.length > 1 ? '' : 'none';

            var multi = photos.length > 1;
            box.querySelector('[data-lightbox-prev]').style.display = multi ? '' : 'none';
            box.querySelector('[data-lightbox-next]').style.display = multi ? '' : 'none';

            box.classList.add('is-open');
            box.setAttribute('aria-hidden', 'false');
            document.body.classList.add('media-lightbox-open');
            show(0);
            box.querySelector('[data-lightbox-close]').focus();
        }

        function close() {
            stopVideo();
            stageEl.classList.remove('is-video');
            box.classList.remove('is-open');
            box.setAttribute('aria-hidden', 'true');
            document.body.classList.remove('media-lightbox-open');
            imgEl.removeAttribute('src');
            if (lastFocus && lastFocus.focus) lastFocus.focus();
        }

        document.querySelectorAll('[data-gallery]').forEach(function (card) {
            function launch() {
                var list = [];
                try { list = JSON.parse(card.getAttribute('data-gallery')); } catch (e) {}
                open(list, card.getAttribute('data-title'), card);
            }
            card.addEventListener('click', launch);
            card.addEventListener('keydown', function (e) {
                if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); launch(); }
            });
        });

        box.querySelector('[data-lightbox-close]').addEventListener('click', close);
        box.querySelector('[data-lightbox-prev]').addEventListener('click', function () { show(index - 1); });
        box.querySelector('[data-lightbox-next]').addEventListener('click', function () { show(index + 1); });
        box.addEventListener('click', function (e) { if (e.target === box) close(); });

        document.addEventListener('keydown', function (e) {
            if (!box.classList.contains('is-open')) return;
            if (e.key === 'Escape') close();
            else if (e.key === 'ArrowRight' || e.key === 'ArrowLeft') {
                /* when the video has focus, arrows seek instead of changing slide */
                if (document.activeElement === videoEl) return;
                show(e.key === 'ArrowRight' ? index + 1 : index - 1);
            }
            else if (e.key === 'Tab') {
                var f = box.querySelectorAll('button:not([style*="display: none"])');
                if (!f.length) return;
                var first = f[0], last = f[f.length - 1];
                if (e.shiftKey && document.activeElement === first) { e.preventDefault(); last.focus(); }
                else if (!e.shiftKey && document.activeElement === last) { e.preventDefault(); first.focus(); }
            }
        });

        stageEl.addEventListener('touchstart', function (e) {
            /* don't treat scrubbing the video bar as a swipe */
            touchStartX = (e.target === videoEl) ? null : e.changedTouches[0].clientX;
        }, { passive: true });
        stageEl.addEventListener('touchend', function (e) {
            if (touchStartX === null) return;
            var dx = e.changedTouches[0].clientX - touchStartX;
            touchStartX = null;
            if (Math.abs(dx) > 45) show(dx < 0 ? index + 1 : index - 1);
        }, { passive: true });
    })();
    </script>
@endverbatim

@endsection