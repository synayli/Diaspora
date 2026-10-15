@extends('layouts.app')

@section('title', 'Media | Diaspora')

@section('content')


<!-- MEDIA HERO -->
<section class="ds-hero ds-media-hero">
    <div class="ds-container">
        <div class="ds-hero-content">

            <span class="ds-badge ds-badge-dark">
                MEDIA & INSIGHTS
            </span>

            <h1>
                Discover our work,
                <span class="ds-accent-word">activities & insights.</span>
            </h1>

            <p>
                Explore Diaspora's activities, cybersecurity awareness
                resources, events and latest insights.
            </p>

        </div>
    </div>

    <!-- Connected Network Visual -->
    <div class="ds-media-network" aria-hidden="true">
        <span class="ds-network-line ds-line-1"></span>
        <span class="ds-network-line ds-line-2"></span>
        <span class="ds-network-line ds-line-3"></span>
        <span class="ds-network-line ds-line-4"></span>
        <span class="ds-network-line ds-line-5"></span>

        <span class="ds-network-node ds-node-1"></span>
        <span class="ds-network-node ds-node-2"></span>
        <span class="ds-network-node ds-node-3"></span>
        <span class="ds-network-node ds-node-4"></span>
        <span class="ds-network-node ds-node-5"></span>
        <span class="ds-network-node ds-node-6"></span>
        <span class="ds-network-node ds-node-7"></span>
    </div>
</section>

<!-- CYBERSECURITY AWARENESS -->
<section class="section">
    <div class="container">

        <div class="section-heading reveal" style="text-align: center; margin: 0 auto 40px;">

            <div class="section-label" style="justify-content: center; display: flex;">
                Cybersecurity Awareness
            </div>

            <h2>Stay Informed. Stay Secure.</h2>

            <p>
                Learn more about cybersecurity through our awareness
                resources and educational content.
            </p>

        </div>

        <div class="media-video-wrap reveal">
            <video controls preload="metadata">
                <source src="{{ asset('video/CyberSecurity_Awareness (1).mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

    </div>
</section>


<!-- FEATURED ACTIVITIES -->
<section class="section section-light">
    <div class="container">

        <div class="section-heading reveal">

            <div class="section-label">
                Activities
            </div>

            <h2>Our Activities</h2>

            <p>
                Explore some of our recent activities, engagements and
                programmes.
            </p>

        </div>

        <!-- media photos grid -->
        @php
            $angkasaPhotos = [
                asset('images/media/ANGKASA 3.jpeg'),
                asset('images/media/ANGKASA 6.jpeg'),
                asset('images/media/ANGKASA 8.jpeg'),
            ];

            $bengkelPhotos = [
                asset('images/media/bengkel-ncii-jdn-1.jpg'),
                asset('images/media/bengkel-ncii-jdn-2.jpg'),
                asset('images/media/bengkel-ncii-jdn-3.jpg'),
                asset('images/media/bengkel-ncii-jdn-4.jpg'),
                asset('images/media/bengkel-ncii-jdn-5.jpg'),
                asset('images/media/bengkel-ncii-jdn-6.jpg'),
                asset('images/media/bengkel-ncii-jdn-7.jpg'),
                asset('images/media/bengkel-ncii-jdn.jpg'),
            ];

            $mydidsbPhotos = [
                asset('images/media/mydidsb.jpeg'),
                asset('images/media/mydidsb-1.jpeg'),
                asset('images/media/mydidsb-2.jpeg'),
                asset('images/media/mydidsb-3.jpeg'),
            ];
        @endphp

        <div class="media-activity-grid reveal-stagger">

            <div class="media-activity-card" onclick='openGallery(@json($angkasaPhotos))'>
                <div class="media-activity-image">
                    <span class="media-activity-count">{{ count($angkasaPhotos) }} photos</span>
                    <img src="{{ $angkasaPhotos[0] }}" alt="ANGKASA activity">
                </div>
                <div class="media-activity-content">
                    <span>Activity</span>
                    <h3>ANGKASA</h3>
                    <p>Highlights from Diaspora's activities and engagement with ANGKASA.</p>
                </div>
            </div>

            <div class="media-activity-card" onclick='openGallery(@json($bengkelPhotos))'>
                <div class="media-activity-image">
                    <span class="media-activity-count">{{ count($bengkelPhotos) }} photos</span>
                    <img src="{{ $bengkelPhotos[0] }}" alt="Bengkel NCII JDN">
                </div>
                <div class="media-activity-content">
                    <span>Workshop</span>
                    <h3>Bengkel NCII JDN</h3>
                    <p>Highlights from the Bengkel NCII JDN programme and related activities.</p>
                </div>
            </div>

            <div class="media-activity-card" onclick='openGallery(@json($mydidsbPhotos))'>
                <div class="media-activity-image">
                    <span class="media-activity-count">{{ count($mydidsbPhotos) }} photos</span>
                    <img src="{{ $mydidsbPhotos[0] }}" alt="MyDIDSB activity">
                </div>
                <div class="media-activity-content">
                    <span>Activity</span>
                    <h3>MyDIDSB</h3>
                    <p>Highlights from Diaspora's activities and engagement related to MyDIDSB.</p>
                </div>
            </div>

        </div>


        {{-- Gallery modal — separate from the single-image cert/poster modal --}}
        <div class="cert-modal" id="galleryModal">
            <div class="cert-modal-content" style="position: relative;">
                <button type="button" class="cert-modal-close" onclick="closeGallery()">&times;</button>
                <button type="button" class="gallery-modal-nav gallery-modal-prev" onclick="galleryPrev()">‹</button>
                <img id="galleryModalImage" src="" alt="Activity photo">
                <button type="button" class="gallery-modal-nav gallery-modal-next" onclick="galleryNext()">›</button>
                <div class="gallery-modal-counter" id="galleryCounter"></div>
            </div>
        </div>

    </div>
</section>

<!-- CYBERSECURITY AWARENESS -->
<section class="section">
    <div class="container">

        <div class="section-heading reveal" style="text-align: center; margin: 0 auto 40px;">

            <div class="section-label"
                 style="justify-content: center; display: flex;">
                Resources
            </div>

            <h2>Cybersecurity Awareness</h2>

            <p>
                Practical resources to help individuals and organisations
                stay aware of common cybersecurity risks.
            </p>

        </div>


        <div class="media-poster-grid reveal-stagger">

            <!-- Poster 1 -->
            <div class="media-poster-card" onclick="openCertModal('{{ asset('images/cyber-awareness.jpg') }}')">

                <div class="media-poster-thumb">
                    <img src="{{ asset('images/cyber-awareness.jpg') }}" alt="Stay Safe Online: Cybersecurity Awareness">
                    <div class="media-poster-overlay">
                        <svg viewBox="0 0 24 24">
                            <circle cx="11" cy="11" r="7"/>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                        </svg>
                        View Full Poster
                    </div>
                </div>

                <div class="media-poster-caption">
                    Stay Safe Online: Cybersecurity Awareness
                </div>

            </div>

            <!-- Poster 2 -->
            <div class="media-poster-card" onclick="openCertModal('{{ asset('images/wangiri_scam.png') }}')">

                <div class="media-poster-thumb">
                    <img src="{{ asset('images/wangiri_scam.png') }}" alt="Beware of Wangiri Scam">
                    <div class="media-poster-overlay">
                        <svg viewBox="0 0 24 24">
                            <circle cx="11" cy="11" r="7"/>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                        </svg>
                        View Full Poster
                    </div>
                </div>

                <div class="media-poster-caption">
                    Beware of Wangiri Scam
                </div>

            </div>

            <!-- Poster 3 -->
            <div class="media-poster-card" onclick="openCertModal('{{ asset('images/safe-laptop-usage.png') }}')">
                <div class="media-poster-thumb">
                    <img src="{{ asset('images/safe-laptop-usage.png') }}" alt="Safe Laptop Usage for Windows">
                    <div class="media-poster-overlay">
                        <svg viewBox="0 0 24 24">
                            <circle cx="11" cy="11" r="7"/>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                        </svg>
                        View Full Poster
                    </div>
                </div>

                <div class="media-poster-caption">
                    Safe Laptop Usage for Windows
                </div>

            </div>

        </div>

    </div>
</section>


<!-- POSTER MODAL -->
<div class="cert-modal" id="certModal">

    <div class="cert-modal-content">

        <button type="button" class="cert-modal-close" onclick="closeCertModal()"> &times;</button>

        <img id="certModalImage" src="" alt="Cybersecurity awareness poster">

    </div>

</div>



<!-- LATEST INSIGHTS -->
<section class="section section-light">
    <div class="container">

        <div class="section-heading reveal">
            <div class="section-label">Insights</div>

            <h2>Latest Cybersecurity Insights</h2>

            <p>
                Stay informed with the latest cybersecurity news,
                threats and security developments from The Hacker News.
            </p>
        </div>

        
<div class="media-insight-grid reveal-stagger">

    @forelse ($insights as $article)

        <a
            href="{{ $article['url'] }}"
            target="_blank"
            rel="noopener noreferrer"
            class="media-insight-card"
        >
            <span class="media-insight-tag">
                {{ $article['category'] }}
            </span>

            <h3>{{ $article['title'] }}</h3>

            <p>{{ $article['description'] }}</p>

            <div class="media-insight-source">
                <span>The Hacker News</span>

                @if (!empty($article['published_at']))
                    <span>&middot; {{ $article['published_at'] }}</span>
                @endif
            </div>
        </a>

    @empty

        <p>
            Cybersecurity insights are temporarily unavailable.
            Please check back soon.
        </p>

    @endforelse

</div>


        <div style="text-align: center; margin-top: 32px;">
            <a
                href="https://thehackernews.com/"
                target="_blank"
                rel="noopener noreferrer"
                class="btn btn-primary"
            >
                View All News
            </a>
        </div>

    </div>
</section>


<!--  CTA -->
<section class="cta-band">

    <div class="container">

        <h2>Want to learn more about Diaspora?</h2>

        <p>
            Get in touch with our team to learn more about our
            information security and technology services.
        </p>

        <a href="{{ url('/contact') }}" class="btn btn-primary">
            Contact Us
        </a>

    </div>

</section>

@endsection