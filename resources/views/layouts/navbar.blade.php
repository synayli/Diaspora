<nav class="navbar" id="navbar">
    <div class="container navbar-inner">

        {{-- Logo --}}
        <a href="{{ url('/') }}" class="logo" aria-label="Diaspora Home">
            <img src="{{ asset('images/LOGO-DSB.png') }}" alt="Diaspora Sdn Bhd">
        </a>

        {{-- Main navigation --}}
        <div class="nav-links" id="navLinks">

            <a
                href="{{ url('/#services') }}"
                data-section="services"
            >
                Our Expertise
            </a>

            <a
                href="{{ url('/#ncii-readiness') }}"
                data-section="ncii-readiness"
            >
                NCII &amp; Akta 854
            </a>

            <a
                href="{{ url('/#about-us') }}"
                data-section="about-us"
            >
                About Us
            </a>

            <a
                href="{{ url('/#training') }}"
                data-section="training"
            >
                Training
            </a>

            <a
                href="{{ url('/media') }}"
                class="{{ request()->is('media*') ? 'active' : '' }}"
                data-page="media"
            >
                Media
            </a>

        </div>

        {{-- Contact action and mobile menu --}}
        <div class="nav-actions">
            <a href="{{ url('/#contact') }}" class="btn btn-primary nav-contact">
                <span class="nav-contact-full">
                    Let's Talk
                    <svg class="nav-contact-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                        <path d="M7 17 17 7M7 7h10v10" />
                    </svg>
                </span>
                <span class="nav-contact-short">
                    Let's Talk
                    <svg class="nav-contact-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                        <path d="M7 17 17 7M7 7h10v10" />
                    </svg>
                </span>
            </a>

            <button
                class="nav-toggle"
                id="navToggle"
                type="button"
                aria-label="Toggle menu"
                aria-expanded="false"
                aria-controls="navLinks"
            >
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

    </div>
</nav>