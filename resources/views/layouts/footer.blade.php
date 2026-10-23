<footer class="site-footer">
    <div class="container">

        <div class="footer-grid">

            <div class="footer-brand">
                <img src="{{ asset('images/LOGO-DSB.png') }}" alt="Diaspora Sdn Bhd">
                <p>
                    Diaspora Sdn Bhd is an information security and
                    technology company helping organisations strengthen
                    their digital environment through practical,
                    professional solutions.
                </p>
                <div class="footer-social">
                    <a href="https://www.linkedin.com/company/diaspora-sdn-bhd/posts/" target="_blank" aria-label="LinkedIn" class="icon-linkedin">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                    <a href="https://www.instagram.com/diasporasb/" target="_blank" aria-label="X" class="icon-x">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
            </div>

            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="{{ url('/#services') }}">Our Expertise</a></li>
                    <li><a href="{{ url('/#ncii-readiness') }}">NCII & Akta 584</a></li>
                    <li><a href="{{ url('/#about') }}">About Us</a></li>
                    <li><a href="{{ url('/#training') }}">Training</a></li>
                    <li><a href="{{ url('/media') }}">Media</a></li>
                    <li><a href="{{ url('/#contact') }}">Contact</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Get In Touch</h4>

                <div class="footer-contact-item">
                    <div class="footer-contact-icon">📍</div>
                    <p>
                        Block TG1-5, UPM-MTDC Technology Centre,<br>
                        Universiti Putra Malaysia,<br>
                        43400 Serdang, Selangor Darul Ehsan
                    </p>
                </div>

                <div class="footer-contact-item">
                    <div class="footer-contact-icon">📞</div>
                    <p>+603-8958 5858</p>
                </div>

                <div class="footer-contact-item">
                    <div class="footer-contact-icon">✉️</div>
                    <p>info@diaspora-tech.com</p>
                </div>
            </div>

        </div>

        <div class="footer-bottom">
            <div>&copy; {{ date('Y') }} Diaspora Sdn Bhd. All rights reserved.</div>
            <div>ISO/IEC 27001:2022 Certified</div>
        </div>

    </div>
</footer>