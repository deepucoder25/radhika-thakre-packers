<?php
/**
 * Modern Client Reviews Widget - Radhika Thakre Packers and Movers
 * Zero Inline Styles - Bootstrap 5 Responsive Architecture
 * Single Horizontal Row with Slide & Side Scroll
 */
$reviews = [
    [
        'name'     => 'Priya Sharma',
        'initials' => 'PS',
        'route'    => 'Indore Local',
        'type'     => 'Household Moving',
        'rating'   => 5,
        'comment'  => 'We moved to a house in Indore last month. I was concerned about how my furniture and kitchenware would be packed however the staff were good at this. They were also very courteous.',
    ],
    [
        'name'     => 'Amit Verma',
        'initials' => 'AV',
        'route'    => 'Indore → Bhopal',
        'type'     => 'Household Relocation',
        'rating'   => 5,
        'comment'  => 'After moving from Indore to Bhopal, we had a large volume of possessions. Staff assisted with both packing and loading. All of our goods arrived in good condition so this was reassuring.',
    ],
    [
        'name'     => 'Neha Singh',
        'initials' => 'NS',
        'route'    => 'Indore → Pune',
        'type'     => 'Intercity Shifting',
        'rating'   => 5,
        'comment'  => 'My husband has been offered a new job in Pune so we have had to move. Staff provided information and were happy to answer our queries. It was good to receive assistance at such a hectic period.',
    ],
    [
        'name'     => 'Rahul Mehta',
        'initials' => 'RM',
        'route'    => 'Indore → Ahmedabad',
        'type'     => 'Car Transportation',
        'rating'   => 5,
        'comment'  => 'I had to move my car from Indore. The staff informed me of how to book and what I should do prior to delivering my car. The procedure was simple.',
    ],
    [
        'name'     => 'Sneha Das',
        'initials' => 'SD',
        'route'    => 'Indore → Kolkata',
        'type'     => 'Family Relocation',
        'rating'   => 5,
        'comment'  => 'Our whole family is relocating to Kolkata. As well as numerous boxes there was also a significant amount of glass and kitchen goods to pack. Staff were thorough and good at packing.',
    ],
    [
        'name'     => 'Vikram Patel',
        'initials' => 'VP',
        'route'    => 'Indore → Mumbai',
        'type'     => 'Office Relocation',
        'rating'   => 5,
        'comment'  => 'They were engaged by us to move our office from Indore to Mumbai. As we had a large quantity of computer and furniture goods, we were particularly anxious about how these would be packed. Staff assisted us and so made the process simpler.',
    ],
    [
        'name'     => 'Anjali Gupta',
        'initials' => 'AG',
        'route'    => 'Indore → Jaipur',
        'type'     => 'Bike Transportation',
        'rating'   => 5,
        'comment'  => 'I used their removal service to move my bike to Jaipur. Staff provided good information regarding the procedure and aided me with my booking. They were good at communicating.',
    ],
    [
        'name'     => 'Pooja Nair',
        'initials' => 'PN',
        'route'    => 'Indore → Bengaluru',
        'type'     => 'Domestic Shifting',
        'rating'   => 5,
        'comment'  => 'For us, relocating to Bengaluru represented a major life event. We had numerous possessions including furniture, electricals and boxes. Staff supported us well in organising both the packing and the removal process. There was therefore not too much disorder.',
    ],
];
?>
<!-- Client Testimonials Section -->
<section class="section-reviews py-5 bg-light position-relative border-top border-bottom overflow-hidden">
    <div class="container py-2 py-lg-4">
        <!-- Section Header -->
        <div class="text-center mx-auto mb-4 section-header-wrap">
            <span class="section-badge mb-2">Verified Feedback</span>
            <h2 class="section-title mb-3">Loved by 1,850+ Families &amp; Businesses</h2>
            <p class="section-subtitle text-muted">Read genuine experiences from customers who chose Radhika Thakre Packers and Movers for safe relocation nationwide.</p>
        </div>

        <!-- Top Bar: Google Rating Trust Badge & Desktop Slide Navigation Controls -->
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-between gap-3 mb-4">
            <!-- Google Rating Trust Badge -->
            <div class="d-inline-flex align-items-center gap-3 px-4 py-2 rounded-pill bg-white shadow-sm border text-start">
                <div class="review-google-icon rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
                    <i class="bi bi-google text-danger fs-5"></i>
                </div>
                <div>
                    <div class="d-flex align-items-center gap-2">
                        <strong class="text-dark">4.9 / 5.0 Rating</strong>
                        <div class="review-stars-group text-warning small">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                    </div>
                    <div class="small text-muted">Based on 1,850+ Verified Client Reviews</div>
                </div>
            </div>

            <!-- Desktop Slide Navigation Controls (Visible on md and up) -->
            <div class="reviews-nav-controls d-none d-md-inline-flex">
                <button type="button" class="btn-review-nav btn-review-prev" aria-label="Previous Reviews" title="Previous">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </button>
                <button type="button" class="btn-review-nav btn-review-next" aria-label="Next Reviews" title="Next">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Single Horizontal Row Reviews Slider Track with Side Scroll -->
        <div class="reviews-slider-wrapper">
            <div class="reviews-slider-track" id="reviewsSliderTrack">
                <?php foreach ($reviews as $rev): ?>
                    <div class="review-slide-card">
                        <div class="card h-100 border-0 shadow-sm rounded-4 review-card-v2 p-4 d-flex flex-column bg-white">
                            <!-- Card Header: Stars & Route Pill -->
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="review-stars text-warning small">
                                    <?php for ($i = 0; $i < $rev['rating']; $i++): ?>
                                        <i class="bi bi-star-fill"></i>
                                    <?php endfor; ?>
                                </div>
                                <span class="badge bg-light text-danger border small">
                                    <i class="bi bi-geo-alt-fill me-1"></i><?= esc($rev['route']) ?>
                                </span>
                            </div>

                            <!-- Review Text -->
                            <div class="review-quote-text text-muted small mb-4 flex-grow-1 lh-base">
                                <i class="bi bi-quote text-danger opacity-25 fs-3 d-block mb-1"></i>
                                "<?= esc($rev['comment']) ?>"
                            </div>

                            <!-- Client Info Footer -->
                            <div class="d-flex align-items-center gap-3 pt-3 border-top mt-auto">
                                <div class="review-avatar rounded-circle d-flex align-items-center justify-content-center fw-bold text-white flex-shrink-0">
                                    <?= esc($rev['initials']) ?>
                                </div>
                                <div class="overflow-hidden">
                                    <div class="h6 fw-bold text-dark mb-0 text-truncate"><?= esc($rev['name']) ?></div>
                                    <div class="small text-muted text-truncate"><?= esc($rev['type']) ?></div>
                                    <span class="badge bg-success-subtle text-success p-0 mt-1 small fw-semibold">
                                        <i class="bi bi-patch-check-fill me-1"></i>Verified Relocation
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Mobile Slide Navigation Controls (Centered Below Review Cards on Mobile) -->
        <div class="d-flex d-md-none justify-content-center align-items-center gap-3 reviews-mobile-nav">
            <button type="button" class="btn-review-nav btn-review-prev" aria-label="Previous Reviews" title="Previous">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </button>
            <button type="button" class="btn-review-nav btn-review-next" aria-label="Next Reviews" title="Next">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </button>
        </div>

        <!-- Trust Highlights Strip -->
        <div class="row g-3 mt-4 pt-3 text-center">
            <div class="col-md-4">
                <div class="p-3 bg-white rounded-3 border d-flex align-items-center justify-content-center gap-2">
                    <i class="bi bi-shield-check text-success fs-5"></i>
                    <span class="fw-semibold small text-dark">100% Safe Transit Guarantee</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 bg-white rounded-3 border d-flex align-items-center justify-content-center gap-2">
                    <i class="bi bi-clock-history text-primary fs-5"></i>
                    <span class="fw-semibold small text-dark">99.8% On-Time Delivery Track Record</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 bg-white rounded-3 border d-flex align-items-center justify-content-center gap-2">
                    <i class="bi bi-wallet2 text-warning fs-5"></i>
                    <span class="fw-semibold small text-dark">Transparent Upfront Pricing</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Review Slider Scroll & Drag Script -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const track = document.getElementById('reviewsSliderTrack');
    if (!track) return;

    function getStep() {
        const card = track.querySelector('.review-slide-card');
        return card ? card.offsetWidth + 24 : 380;
    }

    document.querySelectorAll('.btn-review-prev').forEach(function (btn) {
        btn.addEventListener('click', function () {
            track.scrollBy({ left: -getStep(), behavior: 'smooth' });
        });
    });

    document.querySelectorAll('.btn-review-next').forEach(function (btn) {
        btn.addEventListener('click', function () {
            track.scrollBy({ left: getStep(), behavior: 'smooth' });
        });
    });

    // Mouse drag support for smooth desktop scrolling
    let isDown = false;
    let startX = 0;
    let scrollLeft = 0;

    track.addEventListener('mousedown', function (e) {
        isDown = true;
        startX = e.pageX - track.offsetLeft;
        scrollLeft = track.scrollLeft;
    });

    track.addEventListener('mouseleave', function () { isDown = false; });
    track.addEventListener('mouseup', function () { isDown = false; });

    track.addEventListener('mousemove', function (e) {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - track.offsetLeft;
        const walk = (x - startX) * 1.5;
        track.scrollLeft = scrollLeft - walk;
    });
});
</script>
