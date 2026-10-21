<div class="ds-enquiry-card">
    <div class="ds-enquiry-heading">
        <span class="ds-enquiry-label">DISCUSS YOUR REQUIREMENTS</span>
        <h3>Tell us about your project</h3>
        <p>We're here to help. Fill in the details below and we'll get back to you as soon as possible.</p>
    </div>

    @if (session('error'))
        <div class="form-alert form-alert-error">{{ session('error') }}</div>
    @endif

    <form action="{{ route('contact.send') }}" method="POST">
        @csrf

        <div class="ds-honeypot" aria-hidden="true">
            <label for="dsWebsite">Leave this field empty</label>
            <input type="text" id="dsWebsite" name="website"
                   tabindex="-1" autocomplete="off">
        </div>

        <div class="ds-enquiry-grid">
            <div class="ds-enquiry-field">
                <label for="dsName">Your name <span>*</span></label>
                <input type="text" id="dsName" name="name"
                       placeholder="Full name" value="{{ old('name') }}" required>
                @error('name')
                    <small class="ds-field-error">{{ $message }}</small>
                @enderror
            </div>

            <div class="ds-enquiry-field">
                <label for="dsOrganisation">Organisation</label>
                <input type="text" id="dsOrganisation" name="organisation"
                       placeholder="Company or organisation"
                       value="{{ old('organisation') }}">
                @error('organisation')
                    <small class="ds-field-error">{{ $message }}</small>
                @enderror
            </div>

            <div class="ds-enquiry-field">
                <label for="dsEmail">Work email <span>*</span></label>
                <input type="email" id="dsEmail" name="email"
                       placeholder="you@organisation.com"
                       value="{{ old('email') }}" required>
                @error('email')
                    <small class="ds-field-error">{{ $message }}</small>
                @enderror
            </div>

            <div class="ds-enquiry-field">
                <label for="dsService">I'm interested in <span>*</span></label>
                <select id="dsService" name="subject" required>
                    <option value="" disabled {{ old('subject') ? '' : 'selected' }}>
                        Select a service
                    </option>
                    <option value="Cyber Security Assessment and Testing"
                        {{ old('subject') == 'Cyber Security Assessment and Testing' ? 'selected' : '' }}>
                        Cyber Security Assessment and Testing
                    </option>
                    <option value="Information Security Governance and Compliance"
                        {{ old('subject') == 'Information Security Governance and Compliance' ? 'selected' : '' }}>
                        Information Security Governance and Compliance
                    </option>
                    <option value="NCII readiness and compliance"
                        {{ old('subject') == 'NCII readiness and compliance' ? 'selected' : '' }}>
                        NCII readiness and compliance
                    </option>
                    <option value="Disaster Recovery and Simulation"
                        {{ old('subject') == 'Disaster Recovery and Simulation' ? 'selected' : '' }}>
                        Disaster Recovery and Simulation
                    </option>
                    <option value="Training and awareness"
                        {{ old('subject') == 'Training and awareness' ? 'selected' : '' }}>
                        Training and awareness
                    </option>
                    <option value="Help choosing a service"
                        {{ old('subject') == 'Help choosing a service' ? 'selected' : '' }}>
                        Help choosing a service
                    </option>
                </select>
                @error('subject')
                    <small class="ds-field-error">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="ds-enquiry-field ds-enquiry-message">
            <label for="dsMessage">Your requirements <span>*</span></label>
            <textarea id="dsMessage" name="message" rows="5"
                      placeholder="Briefly describe what you need help with..."
                      required>{{ old('message') }}</textarea>
            @error('message')
                <small class="ds-field-error">{{ $message }}</small>
            @enderror
        </div>

        <p class="ds-enquiry-privacy">
            Please do not include passwords, confidential information or sensitive system details.
        </p>

        <button type="submit" class="ds-enquiry-submit">
            Send your enquiry <span aria-hidden="true">↗</span>
        </button>
    </form>
</div>

@if (session('success'))
    <div class="thanks-flash" id="thanksFlash"
         role="status" aria-live="polite">
        <div class="thanks-flash-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M5 12.5l4.5 4.5L19 7"></path>
            </svg>
        </div>

        <h2>Thank You!</h2>
        <p>{{ session('success') }}</p>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const flash = document.getElementById('thanksFlash');

        if (!flash) return;

        // Position the popup relative to the whole page viewport
        document.body.appendChild(flash);

        // Fade out after 2.5 seconds
        setTimeout(function () {
            flash.classList.add('is-hiding');

            setTimeout(function () {
                flash.remove();
            }, 400);
        }, 2500);
    });
    </script>
@endif
