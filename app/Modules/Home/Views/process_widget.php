<?php
/**
 * Interlocking Chevron Pipeline 5-Step Process Widget - Radhika Thakre Packers and Movers
 * Zero Inline Styles - Bootstrap 5 Responsive Architecture
 * Exact match to user reference image with 5 gapless interlocking chevron cards & 3D folded ribbons
 */

$steps = [
    [
        'num'   => '01',
        'title' => 'Request a Quote',
        'desc'  => 'Share your moving<br class="d-none d-md-inline"> details and get a free,<br class="d-none d-md-inline"> no-obligation quote<br class="d-none d-md-inline"> instantly.',
        // Clipboard checklist with green pen
        'icon'  => '<svg width="44" height="44" viewBox="0 0 48 48" fill="none"><rect x="10" y="8" width="28" height="34" rx="4" fill="#fff" stroke="#ea580c" stroke-width="2.5"/><rect x="18" y="4" width="12" height="7" rx="2" fill="#ffedd5" stroke="#ea580c" stroke-width="2.2"/><path d="M16 20h16M16 26h11M16 32h7" stroke="#64748b" stroke-width="2" stroke-linecap="round"/><path d="M28 29l3 3 7-7" stroke="#16a34a" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
    ],
    [
        'num'   => '02',
        'title' => 'Free Consultation',
        'desc'  => 'Our experts understand<br class="d-none d-md-inline"> your needs and suggest<br class="d-none d-md-inline"> the best moving<br class="d-none d-md-inline"> solution for you.',
        // Customer specialist with headset
        'icon'  => '<svg width="44" height="44" viewBox="0 0 48 48" fill="none"><circle cx="24" cy="20" r="8" fill="#fff" stroke="#ea580c" stroke-width="2.5"/><path d="M14 38c0-5.5 4.5-10 10-10s10 4.5 10 10" stroke="#ea580c" stroke-width="2.5" stroke-linecap="round"/><path d="M13 22v-3c0-6 5-11 11-11s11 5 11 11v3" stroke="#e11d48" stroke-width="2.2" stroke-linecap="round"/><rect x="10" y="20" width="5" height="9" rx="2.5" fill="#ea580c"/><rect x="33" y="20" width="5" height="9" rx="2.5" fill="#ea580c"/><path d="M35 27v4c0 3-2 5-5 5h-4" stroke="#e11d48" stroke-width="2.2" stroke-linecap="round"/><circle cx="26" cy="36" r="2.5" fill="#e11d48"/></svg>',
    ],
    [
        'num'   => '03',
        'title' => 'Packing & Preparation',
        'desc'  => 'We use high-quality<br class="d-none d-md-inline"> packing materials to<br class="d-none d-md-inline"> pack your items safely<br class="d-none d-md-inline"> and securely.',
        // 3D Corrugated box with red packing tape
        'icon'  => '<svg width="44" height="44" viewBox="0 0 48 48" fill="none"><path d="M24 6l16 8v18l-16 10L8 32V14l16-8z" fill="#fff" stroke="#ea580c" stroke-width="2.5" stroke-linejoin="round"/><path d="M24 6v18M40 14L24 24 8 14" stroke="#ea580c" stroke-width="2.2"/><path d="M24 24v18" stroke="#ea580c" stroke-width="2.2"/><path d="M16 10l16 9" stroke="#e11d48" stroke-width="3" stroke-linecap="round"/><path d="M20 22l8 4.5" stroke="#e11d48" stroke-width="3" stroke-linecap="round"/></svg>',
    ],
    [
        'num'   => '04',
        'title' => 'Safe Transportation',
        'desc'  => 'Your belongings are<br class="d-none d-md-inline"> transported safely and<br class="d-none d-md-inline"> on time to your new<br class="d-none d-md-inline"> destination.',
        // Fast container truck with speed lines
        'icon'  => '<svg width="44" height="44" viewBox="0 0 48 48" fill="none"><rect x="6" y="14" width="22" height="18" rx="2" fill="#fff" stroke="#ea580c" stroke-width="2.5"/><path d="M28 20h8l6 6v6h-14v-12z" fill="#fff" stroke="#ea580c" stroke-width="2.5" stroke-linejoin="round"/><circle cx="13" cy="34" r="4" fill="#fff" stroke="#e11d48" stroke-width="2.5"/><circle cx="34" cy="34" r="4" fill="#fff" stroke="#e11d48" stroke-width="2.5"/><path d="M1 18h2M0 24h3M1 30h2" stroke="#ea580c" stroke-width="2.5" stroke-linecap="round"/></svg>',
    ],
    [
        'num'   => '05',
        'title' => 'Unloading & Settle In',
        'desc'  => 'We unload, unpack, and<br class="d-none d-md-inline"> help you settle in<br class="d-none d-md-inline"> comfortably in<br class="d-none d-md-inline"> your new space.',
        // House with heart badge
        'icon'  => '<svg width="44" height="44" viewBox="0 0 48 48" fill="none"><path d="M24 6L6 20v20a2 2 0 0 0 2 2h32a2 2 0 0 0 2-2V20L24 6z" fill="#fff" stroke="#ea580c" stroke-width="2.5" stroke-linejoin="round"/><path d="M24 21c-2.5-3-6-1-6 2 0 3.5 6 7 6 7s6-3.5 6-7c0-3-3.5-5-6-2z" fill="#fecdd3" stroke="#e11d48" stroke-width="2"/></svg>',
    ],
];

// Bottom Dark Navy Trust Features Strip (Exact match to reference image)
$trust_features = [
    [
        'title' => 'Safe & Secure',
        'desc'  => 'Your belongings are 100% safe & insured with us.',
        // Shield with golden checkmark
        'icon'  => '<svg width="24" height="24" viewBox="0 0 32 32" fill="none"><path d="M16 3L5 7.5V15C5 22.5 9.7 29.5 16 31C22.3 29.5 27 22.5 27 15V7.5L16 3Z" stroke="#0e2038" stroke-width="2.2" stroke-linejoin="round"/><path d="M11 16L14.5 19.5L21.5 12.5" stroke="#ea580c" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
    ],
    [
        'title' => 'On-Time Delivery',
        'desc'  => 'We value your time and always deliver on time.',
        // Clock with golden hands
        'icon'  => '<svg width="24" height="24" viewBox="0 0 32 32" fill="none"><circle cx="16" cy="16" r="12" stroke="#0e2038" stroke-width="2.2"/><path d="M16 9V16L21 18.5" stroke="#ea580c" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
    ],
    [
        'title' => 'Experienced Team',
        'desc'  => 'Our trained professionals handle everything with care.',
        // 3 Users with center gold leader
        'icon'  => '<svg width="26" height="26" viewBox="0 0 32 32" fill="none"><circle cx="8" cy="12" r="4" stroke="#0e2038" stroke-width="1.8"/><path d="M2 24C2 20.7 4.7 18 8 18C9.5 18 10.9 18.5 12 19.4" stroke="#0e2038" stroke-width="1.8" stroke-linecap="round"/><circle cx="24" cy="12" r="4" stroke="#0e2038" stroke-width="1.8"/><path d="M20 19.4C21.1 18.5 22.5 18 24 18C27.3 18 30 20.7 30 24" stroke="#0e2038" stroke-width="1.8" stroke-linecap="round"/><circle cx="16" cy="11" r="5" stroke="#ea580c" stroke-width="2.2"/><path d="M9 25C9 21.1 12.1 18 16 18C19.9 18 23 21.1 23 25" stroke="#0e2038" stroke-width="2.2" stroke-linecap="round"/></svg>',
    ],
    [
        'title' => '24/7 Support',
        'desc'  => 'We are always here to assist you anytime.',
        // Headset with golden mic
        'icon'  => '<svg width="24" height="24" viewBox="0 0 32 32" fill="none"><path d="M5 16C5 9.9 9.9 5 16 5C22.1 5 27 9.9 27 16" stroke="#0e2038" stroke-width="2.2" stroke-linecap="round"/><rect x="4" y="15" width="4" height="9" rx="2" fill="#0e2038"/><rect x="24" y="15" width="4" height="9" rx="2" fill="#0e2038"/><path d="M26 21V25C26 26.7 24.7 28 23 28H19" stroke="#ea580c" stroke-width="2.2" stroke-linecap="round"/><circle cx="17.5" cy="28" r="2" fill="#ea580c"/></svg>',
    ],
    [
        'title' => 'Customer Satisfaction',
        'desc'  => 'Your happiness is our top priority.',
        // Thumbs up with golden cuff
        'icon'  => '<svg width="24" height="24" viewBox="0 0 32 32" fill="none"><path d="M8 14V26H4C3.4 26 3 25.6 3 25V15C3 14.4 3.4 14 4 14H8Z" fill="#ea580c" stroke="#ea580c" stroke-width="1.5"/><path d="M8 26H22C23.6 26 25 24.8 25.3 23.2L27 15.2C27.3 13.8 26.2 12.5 24.7 12.5H18V7C18 5.3 16.7 4 15 4C14.2 4 13.6 4.5 13.3 5.2L10 13V26" stroke="#0e2038" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
    ],
];
?>
<!-- Moving Process Section -->
<section class="section-process py-5 bg-white position-relative overflow-hidden">
    <div class="container-fluid container-xxl py-2 py-lg-4 px-2 px-sm-3 px-lg-4">
        <!-- Section Header -->
        <div class="text-center mx-auto mb-5 section-header-wrap">
            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-2">
                How It Works
            </span>
            <h2 class="section-title fw-bolder mb-3">Our Seamless Moving Process</h2>
            <p class="section-subtitle text-muted">
                Experience hassle-free relocation from start to finish with our 5-step interlocking workflow.
            </p>
        </div>

        <!-- Chevron Arrow Pipeline Track -->
        <div class="chevron-track-wrapper">
            <div class="chevron-process-track">
                <?php foreach ($steps as $index => $step): ?>
                    <div class="chevron-card-item">
                        <!-- Top Floating Step Number Badge -->
                        <div class="chevron-badge">
                            <?= esc($step['num']) ?>
                        </div>

                        <!-- SVG Chevron Background Frame with 3D Folded Ribbon -->
                        <svg class="chevron-svg-bg" viewBox="0 0 250 250" preserveAspectRatio="none">
                            <defs>
                                <linearGradient id="ribbonGrad_<?= $index ?>" x1="0" y1="0" x2="1" y2="1">
                                    <stop offset="0%" stop-color="#ff8c00"/>
                                    <stop offset="100%" stop-color="#ea580c"/>
                                </linearGradient>
                                <linearGradient id="ribbonDark_<?= $index ?>" x1="0" y1="0" x2="0" y2="1">
                                    <stop offset="0%" stop-color="#c2410c"/>
                                    <stop offset="100%" stop-color="#7c2d12"/>
                                </linearGradient>
                            </defs>

                            <!-- Main White Chevron Card Body -->
                            <path d="M 16 12 L 220 12 Q 224 12 227 16 L 241 121 Q 243 125 241 129 L 227 234 Q 224 238 220 238 L 16 238 Q 13 238 12 234 L 30 129 Q 32 125 30 121 L 12 16 Q 13 12 16 12 Z" fill="#ffffff" stroke="#f1f5f9" stroke-width="1.5"/>

                            <?php if ($index === 0 || $index === 2 || $index === 4): ?>
                                <!-- Starting 3D orange ribbon tab (Card 1 always; On mobile for Row 2 Card 3 and Row 3 Card 5) -->
                                <g class="<?= $index > 0 ? 'd-lg-none' : '' ?>">
                                    <path d="M 12 16 L 30 121 Q 32 125 30 129 L 12 234 L 6 232 L 24 125 L 6 18 Z" fill="url(#ribbonGrad_<?= $index ?>)"/>
                                    <path d="M 6 18 L 12 16 L 12 24 Z" fill="url(#ribbonDark_<?= $index ?>)"/>
                                    <path d="M 6 232 L 12 234 L 12 226 Z" fill="url(#ribbonDark_<?= $index ?>)"/>
                                </g>
                            <?php endif; ?>

                            <!-- 3D Ribbon Fold on right edge (connecting into next card) -->
                            <path d="M 220 12 L 243 125 L 220 238 L 228 240 L 250 125 L 228 10 Z" fill="url(#ribbonGrad_<?= $index ?>)"/>
                            <path d="M 220 12 L 228 10 L 220 18 Z" fill="url(#ribbonDark_<?= $index ?>)"/>
                            <path d="M 220 238 L 228 240 L 220 232 Z" fill="url(#ribbonDark_<?= $index ?>)"/>
                        </svg>

                        <!-- Card Content Overlay -->
                        <div class="chevron-card-content">
                            <!-- Illustrated SVG Icon -->
                            <div class="chevron-icon">
                                <?= $step['icon'] ?>
                            </div>

                            <!-- Step Title -->
                            <h3 class="chevron-title"><?= esc($step['title']) ?></h3>

                            <!-- Description (formatted with balanced lines) -->
                            <p class="chevron-desc"><?= $step['desc'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Bottom Dark Navy Trust Features Strip (Exact Match to Reference Image) -->
        <div class="mt-4 mt-lg-5">
            <div class="process-trust-strip">
                <div class="row g-2 g-lg-0 row-cols-1 row-cols-sm-2 row-cols-lg-5 align-items-center">
                    <?php foreach ($trust_features as $tf): ?>
                        <div class="col">
                            <div class="process-trust-item">
                                <div class="process-trust-badge">
                                    <?= $tf['icon'] ?>
                                </div>
                                <div class="process-trust-text">
                                    <div class="process-trust-title"><?= esc($tf['title']) ?></div>
                                    <p class="process-trust-desc"><?= esc($tf['desc']) ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
