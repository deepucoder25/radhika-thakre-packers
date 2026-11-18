<?php
/**
 * Modern Why Choose Us Widget - Radhika Thakre Packers and Movers
 * Zero Inline Styles - Bootstrap 5 Responsive Architecture
 */
$advantages = [
    [
        'icon'  => 'fa-shield-halved',
        'title' => '100% Insured Transit',
        'desc'  => 'Comprehensive goods transit insurance policy protecting your belongings against all transit risks.',
    ],
    [
        'icon'  => 'fa-clock',
        'title' => 'On-Time Guarantee',
        'desc'  => 'Strict schedule compliance with committed delivery deadlines and continuous GPS updates.',
    ],
    [
        'icon'  => 'fa-tags',
        'title' => 'Transparent Rates',
        'desc'  => 'Upfront transparent quotes with zero hidden charges, toll surprises, or last-minute fee increments.',
    ],
    [
        'icon'  => 'fa-user-tie',
        'title' => 'Trained & Verified Crew',
        'desc'  => 'Background-verified in-house moving crew trained for fragile glass, electronics, and heavy furniture.',
    ],
    [
        'icon'  => 'fa-truck-fast',
        'title' => 'All-Weather Container Fleet',
        'desc'  => 'Modern fleet of weatherproof enclosed container trucks connecting Indore with 500+ Indian cities.',
    ],
    [
        'icon'  => 'fa-headset',
        'title' => '24x7 Dedicated Support',
        'desc'  => 'A personal relocation manager assigned to guide you step-by-step from survey to doorstep unboxing.',
    ],
];
?>
<!-- Why Choose Us Section -->
<section class="section-advantages py-5 bg-white position-relative">
    <div class="container py-2 py-lg-4">
        <!-- Section Header -->
        <div class="text-center mx-auto mb-5 section-header-wrap">
            <span class="section-badge mb-2">Core Advantages</span>
            <h2 class="section-title mb-3">Why Choose Radhika Thakre Packers?</h2>
            <p class="section-subtitle text-muted">We combine 8+ years of proven moving expertise with modern logistics standards for complete safety.</p>
        </div>

        <!-- 6 Advantage Cards Grid -->
        <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
            <?php foreach ($advantages as $w): ?>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 advantage-card-v2 d-flex flex-row align-items-start gap-3 bg-white">
                        <div class="advantage-icon-box rounded-3 d-flex align-items-center justify-content-center flex-shrink-0">
                            <i class="fa-solid <?= esc($w['icon']) ?>"></i>
                        </div>
                        <div>
                            <h3 class="h6 fw-bold text-dark mb-1"><?= esc($w['title']) ?></h3>
                            <p class="text-muted small mb-0 lh-base"><?= esc($w['desc']) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
