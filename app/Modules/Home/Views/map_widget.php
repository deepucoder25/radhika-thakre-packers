<?php
/**
 * Modern Google Map Location Widget - Radhika Thakre Packers and Movers
 * Zero Inline Styles - Bootstrap 5 Responsive Architecture
 * Exact Google Map Embed from radhikathakrepackersmovers.com
 */
$address = $comp['address'] ?? 'Shop No. 100 first floor Katariya complex Dewas Naka Indore 452001';
$phone   = $comp['phone'] ?? '+91 98261 25421';
?>
<!-- Google Map Location Section -->
<section class="section-home-map position-relative border-top">
    <!-- Floating Info Card -->
    <div class="map-floating-card shadow-sm d-flex align-items-center gap-3">
        <div class="map-icon-bubble rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
            </svg>
        </div>
        <div class="overflow-hidden">
            <div class="h6 fw-bold mb-1 text-dark text-truncate">Radhika Thakre Packers &amp; Movers</div>
            <p class="small text-muted mb-0 lh-sm text-truncate"><?= esc($address) ?></p>
            <div class="d-flex align-items-center gap-2 mt-2">
                <span class="badge bg-success-subtle text-success small fw-semibold">Open 24/7</span>
                <a href="https://www.google.com/maps/dir//Radhika+Thakre+Packers+And+Movers+56+Bapu+Gandhi+Nagar,+Pipliya+Kumar+Indore,+Madhya+Pradesh+452010/@22.770231,75.906231,16z/data=!4m8!4m7!1m0!1m5!1m1!1s0x39631d4967a98273:0x15d213701ada2484!2m2!1d75.906231!2d22.770231?entry=ttu" target="_blank" rel="noopener" class="small text-danger fw-bold text-decoration-none d-inline-flex align-items-center gap-1">
                    <span>Get Directions</span>
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                        <polyline points="15 3 21 3 21 9"></polyline>
                        <line x1="10" y1="14" x2="21" y2="3"></line>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Google Map Iframe from radhikathakrepackersmovers.com -->
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.8182847911967!2d75.9062774!3d22.772123999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39631d4967a98273%3A0x15d213701ada2484!2sRadhika%20Thakre%20Packers%20and%20Movers!5e0!3m2!1sen!2sin!4v1751090128678!5m2!1sen!2sin" 
        class="home-map-iframe" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade"
        title="Radhika Thakre Packers and Movers Head Office Location">
    </iframe>
</section>
