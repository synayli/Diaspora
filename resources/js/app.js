//navbar scroll effect
document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.querySelector('.navbar');
    if (!navbar) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 10) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
});

// Certification modal functionality
window.openCertModal = function (imageSrc) {
    const modal = document.getElementById('certModal');
    const modalImage = document.getElementById('certModalImage');
    modalImage.src = imageSrc;
    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
};

window.closeCertModal = function () {
    const modal = document.getElementById('certModal');
    modal.classList.remove('active');
    document.body.style.overflow = '';
};

document.addEventListener('click', (e) => {
    const modal = document.getElementById('certModal');
    if (e.target === modal) {
        window.closeCertModal();
    }
});

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        window.closeCertModal();
    }
});

// media pages for gallery functionality
let galleryPhotos = [];
let galleryIndex = 0;

window.openGallery = function (photos) {
    galleryPhotos = photos;
    galleryIndex = 0;
    updateGalleryImage();
    document.getElementById('galleryModal').classList.add('active');
    document.body.style.overflow = 'hidden';
};

window.closeGallery = function () {
    document.getElementById('galleryModal').classList.remove('active');
    document.body.style.overflow = '';
};

window.galleryNext = function () {
    galleryIndex = (galleryIndex + 1) % galleryPhotos.length;
    updateGalleryImage();
};

window.galleryPrev = function () {
    galleryIndex = (galleryIndex - 1 + galleryPhotos.length) % galleryPhotos.length;
    updateGalleryImage();
};

function updateGalleryImage() {
    document.getElementById('galleryModalImage').src = galleryPhotos[galleryIndex];
    document.getElementById('galleryCounter').textContent = `${galleryIndex + 1} / ${galleryPhotos.length}`;
}

document.addEventListener('click', (e) => {
    const modal = document.getElementById('galleryModal');
    if (e.target === modal) closeGallery();
});

document.addEventListener('keydown', (e) => {
    const modal = document.getElementById('galleryModal');
    if (!modal.classList.contains('active')) return;
    if (e.key === 'Escape') closeGallery();
    if (e.key === 'ArrowRight') galleryNext();
    if (e.key === 'ArrowLeft') galleryPrev();
});

// Intersection Observer for reveal animations
document.addEventListener('DOMContentLoaded', () => {
    const targets = document.querySelectorAll(
        '.reveal, .reveal-stagger'
    );

    if (!targets.length) return;

    const reduceMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    ).matches;

    // Show everything immediately if animations are disabled
    // or Intersection Observer is unsupported.
    if (reduceMotion || !('IntersectionObserver' in window)) {
        targets.forEach((element) => {
            element.classList.add('is-visible');
        });

        return;
    }

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;

            entry.target.classList.add('is-visible');
            obs.unobserve(entry.target);
        });
    }, {
        threshold: 0.12,
        rootMargin: '0px 0px -30px 0px'
    });

    targets.forEach((element) => {
        observer.observe(element);
    });
});

// Card glow effect
document.addEventListener('DOMContentLoaded', () => {
    const cardSelectors = [
        '.service-card',
        '.cert-page-card',
        '.ds-clean-card',
        '.ds-training-card',
        '.media-activity-card',
        '.media-poster-card',
        '.media-insight-card',
        '.home-about-step'
    ].join(', ');

    const cards = document.querySelectorAll(cardSelectors);

    cards.forEach((card) => {
        card.classList.add('has-glow');

        const glow = document.createElement('div');
        glow.className = 'card-glow';
        card.appendChild(glow);

        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            glow.style.left = (e.clientX - rect.left) + 'px';
            glow.style.top = (e.clientY - rect.top) + 'px';
        });
    });
});

// Back to top button
document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('backToTop');
    if (!btn) return;

    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const showAfter = 500;   // pixels scrolled before the button appears

    const toggle = () => {
        btn.classList.toggle('is-visible', window.scrollY > showAfter);
    };

    window.addEventListener('scroll', toggle, { passive: true });
    toggle();   // handle pages that load already scrolled (e.g. after a refresh)

    btn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: reduceMotion ? 'auto' : 'smooth' });
    });
});

// Typewriter effect for hero section
document.addEventListener('DOMContentLoaded', () => {
    const line1 = document.getElementById('typewriterLine1');
    const line2 = document.getElementById('typewriterLine2');
    const cursor1 = document.getElementById('typewriterCursor1');
    const cursor2 = document.getElementById('typewriterCursor2');

    if (!line1 || !line2 || !cursor1 || !cursor2) return;

    const text1 = 'Confidence in a';
    const text2 = 'connected world.';

    let index = 0;

    // Show only the first cursor initially
    cursor1.style.display = 'inline-block';
    cursor2.style.display = 'none';

    function typeFirstLine() {
        if (index < text1.length) {
            line1.textContent += text1.charAt(index);
            index++;
            setTimeout(typeFirstLine, 75);
        } else {
            // Move the visible cursor to the second line
            cursor1.style.display = 'none';
            cursor2.style.display = 'inline-block';

            index = 0;
            setTimeout(typeSecondLine, 300);
        }
    }

    function typeSecondLine() {
        if (index < text2.length) {
            line2.textContent += text2.charAt(index);
            index++;
            setTimeout(typeSecondLine, 75);
        }
        // Cursor remains beside the final full stop.
    }

    setTimeout(typeFirstLine, 500);
});
