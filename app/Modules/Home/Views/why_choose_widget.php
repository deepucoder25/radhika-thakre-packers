<?php
/**
 * Modern Why Choose Us Widget - Radhika Thakre Packers and Movers
 * Zero Inline Styles - Bootstrap 5 Responsive Architecture
 */
$features = [
    [
        'icon'  => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/></svg>',
        'text'  => ($experience ?? '8+') . ' years of experience in moving services',
    ],
    [
        'icon'  => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
        'text'  => '25,000+ families and corporate offices served',
    ],
    [
        'icon'  => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><polyline points="16 11 18 13 22 9"/></svg>',
        'text'  => 'Trained and polite packing crew',
    ],
    [
        'icon'  => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"/><path d="m3.3 7 8.7 5 8.7-5"/><path d="M12 22V12"/></svg>',
        'text'  => '5-layer bubble packaging',
    ],
    [
        'icon'  => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"/><path d="M15 18H9"/><path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.63l-2.77-3.46A2 2 0 0 0 17.45 8H14v10"/><circle cx="7" cy="18" r="2"/><circle cx="17" cy="18" r="2"/></svg>',
        'text'  => 'Container trucks with GPS tracking',
    ],
    [
        'icon'  => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>',
        'text'  => 'Various transit insurance plans',
    ],
    [
        'icon'  => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>',
        'text'  => 'Competitive pricing and no hidden charges',
    ],
];
?>
<!-- Why Choose Us Section -->
<section class="section-advantages py-5 bg-white position-relative">
    <div class="container py-2 py-lg-4">
        <!-- Section Header -->
        <div class="text-center mx-auto mb-4 mb-lg-5 section-header-wrap">
            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-2">
                Why Choose Us
            </span>
            <h2 class="section-title fw-bolder mb-3">Why You Should Choose <?= esc($company3) ?></h2>
            <p class="section-subtitle text-muted">
                We think that a reliable and good packers and movers service requires communication and dedication. We are sure that our customers will appreciate the following services:
            </p>
        </div>

        <!-- 7 Advantage Feature Cards Grid -->
        <div class="row g-3 g-md-4 row-cols-1 row-cols-sm-2 row-cols-lg-3 justify-content-center">
            <?php foreach ($features as $f): ?>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-3 p-md-4 advantage-card-v2 d-flex flex-row align-items-center gap-3 bg-white">
                        <div class="advantage-icon-box rounded-3 d-flex align-items-center justify-content-center flex-shrink-0 text-danger">
                            <?= $f['icon'] ?>
                        </div>
                        <div>
                            <h3 class="h6 fw-bold text-dark mb-0"><?= esc($f['text']) ?></h3>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- GST Registration Callout Note -->
        <div class="mt-4 pt-3 text-center">
            <div class="d-inline-flex align-items-center gap-2 p-3 px-4 rounded-pill bg-light border border-danger border-opacity-25 shadow-sm">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-danger flex-shrink-0">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                <span class="fw-semibold text-dark">Also, we have GST registration, GSTIN: <strong class="text-danger"><?= $gst ?></strong>.</span>
            </div>
        </div>
    </div>
</section>
