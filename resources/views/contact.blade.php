@extends('layouts.app')

@section('title', 'Contact Us | Diaspora')

@section('content')

<section class="ds-hero ds-contact-hero">
    <div class="ds-container">
        <div class="ds-hero-content">
            <span class="ds-badge ds-badge-dark">CONTACT US</span>

            <h1>
                Let's talk about
                <span class="ds-accent-word">your security needs.</span>
            </h1>

            <p>
                Take the first step in protecting your organisation.
                Reach out to our team and we'll get back to you.
            </p>
        </div>
    </div>

    <!-- Communication Wave Visual -->
    <div class="ds-contact-visual" aria-hidden="true">
        <div class="ds-contact-wave ds-contact-wave-1"></div>
        <div class="ds-contact-wave ds-contact-wave-2"></div>
        <div class="ds-contact-wave ds-contact-wave-3"></div>
        <div class="ds-contact-wave ds-contact-wave-4"></div>
        <div class="ds-contact-wave ds-contact-wave-5"></div>
        <div class="ds-contact-core"></div>
    </div>
</section>


<section class="section">
    <div class="container">

        <div class="contact-grid">

            <div class="contact-info">

                <div class="section-label">Get In Touch</div>
                <h2>Quick Contact</h2>

                <div class="contact-item">
                    <div class="contact-icon">📍</div>
                    <div>
                        <h4>Address</h4>
                        <p>
                            Block TG1-5, UPM-MTDC Technology Centre,<br>
                            Universiti Putra Malaysia,<br>
                            43400 Serdang, Selangor Darul Ehsan
                        </p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">📞</div>
                    <div>
                        <h4>Phone</h4>
                        <p>+603-8958 5858</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">✉️</div>
                    <div>
                        <h4>Email</h4>
                        <p>info@diaspora-tech.com</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">🕒</div>
                    <div>
                        <h4>Business Hours</h4>
                        <p>Monday – Friday, 9:00 AM – 6:00 PM</p>
                    </div>
                </div>

            </div>


            <div class="contact-form-card">

                <h3>Send Us a Message</h3>

                @if (session('error'))
                    <div class="form-alert form-alert-error">{{ session('error') }}</div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf

                    {{-- Honeypot: hidden from real visitors --}}
                    <div class="hp-field" aria-hidden="true">
                        <label for="website">Leave this field empty</label>
                        <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                            @error('name') <span class="field-error">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                            @error('email') <span class="field-error">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}">
                            @error('phone') <span class="field-error">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject"
                                   value="{{ old('subject', request('service') ? 'Enquiry: ' . request('service') : '') }}" required>
                            @error('subject') <span class="field-error">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                        @error('message') <span class="field-error">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Send Message</button>

                </form>

            </div>

        </div>   {{-- closes .contact-grid --}}
    </div>       {{-- closes .container --}}
</section>


<section class="section section-light">
    <div class="container">
        <div class="contact-map-wrap">
            <iframe
                src="https://www.google.com/maps?q=UPM-MTDC+Technology+Centre,+Universiti+Putra+Malaysia,+43400+Serdang,+Selangor&output=embed"
                width="100%"
                height="400"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

        <div class="social-below-map">
            <h4>Follow Us</h4>
            <div class="social-icons">
                <a href="https://www.facebook.com/p/Diaspora-Sdn-Bhd-100070332791176/" target="_blank" aria-label="Facebook" class="icon-facebook">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="https://www.linkedin.com/in/diaspora-sdn-bhd-3596a223b/?originalSubdomain=my" target="_blank" aria-label="LinkedIn" class="icon-linkedin">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
                <a href="https://twitter.com/diasporadsb" target="_blank" aria-label="X" class="icon-x">
                    <i class="fa-brands fa-x-twitter"></i>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Thank-you popup: shown after a successful submission --}}
<div class="thanks-modal {{ session('success') ? 'active' : '' }}" id="thanksModal" role="dialog" aria-modal="true" aria-labelledby="thanksTitle">
    <div class="thanks-modal-content">

        <div class="thanks-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <polyline points="5 12.5 10 17.5 19 7.5"/>
            </svg>
        </div>

        <h2 id="thanksTitle">Thank you!</h2>
        <p>{{ session('success') ?: 'Your message has been sent.' }}</p>

        <button type="button" class="btn btn-primary" id="thanksClose">Close</button>
    </div>
</div>

<!-- JavaScript to handle the thank-you modal (form submission success message) -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const modal = document.getElementById('thanksModal');
        const closeBtn = document.getElementById('thanksClose');
        if (!modal) return;

        const close = () => {
            modal.classList.remove('active');
            document.body.style.overflow = '';
        };

        // lock page scroll while the popup is open
        if (modal.classList.contains('active')) {
            document.body.style.overflow = 'hidden';
            closeBtn.focus();
        }

        closeBtn.addEventListener('click', close);

        modal.addEventListener('click', (e) => {
            if (e.target === modal) close();
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') close();
        });
    });
</script>

@endsection