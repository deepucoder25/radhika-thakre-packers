<?php
/**
 * Clean Modern Services Section - Radhika Thakre Packers and Movers
 * Zero Inline Styles - Bootstrap 5 Responsive Architecture
 * Strictly: Unique SVG Icon + Service Name (In One Row) + 2-Line Content + 1 Button
 */

$serviceSvgs = [
    'household-moving' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/><path d="M10 7h4v4h-4z" stroke-width="1.5"/></svg>',
    
    'office-relocation' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/><circle cx="12" cy="12" r="1.5"/></svg>',
    
    'car-transportation' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><path d="M9 17h6"/><circle cx="17" cy="17" r="2"/></svg>',
    
    'bike-transportation' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="5.5" cy="17.5" r="3.5"/><circle cx="18.5" cy="17.5" r="3.5"/><path d="M15 6h-3l-3 6.5h6l3-6.5h2"/><path d="M5.5 17.5 9 12.5l3.5 5"/><circle cx="12" cy="5" r="1" fill="currentColor"/></svg>',

    'corporate-relocation' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="2" width="16" height="20" rx="2" ry="2"/><path d="M9 22v-4h6v4"/><path d="M8 6h.01M16 6h.01M8 10h.01M16 10h.01M8 14h.01M16 14h.01"/></svg>',
    
    'packing-moving' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"/><path d="m3.3 7 8.7 5 8.7-5"/><path d="M12 22V12"/><path d="m7.5 4.5 9 5.2"/></svg>',
    
    'loading-unloading' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"/><path d="M15 18H9"/><path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.63l-2.77-3.46A2 2 0 0 0 17.45 8H14v10"/><circle cx="7" cy="18" r="2"/><circle cx="17" cy="18" r="2"/></svg>',
    
    'warehouse-storage' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 8.35V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8.35A2 2 0 0 1 3.26 6.5l8-4a2 2 0 0 1 1.48 0l8 4A2 2 0 0 1 22 8.35Z"/><path d="M6 18h12"/><path d="M6 14h12"/><rect x="6" y="10" width="12" height="12"/></svg>',
    
    'transit-insurance' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>',
];

$serviceShortDesc = [
    'household-moving'     => 'Safe and dependable home relocation with premium multi-layer bubble wrap and doorstep furniture placement.',
    'office-relocation'    => 'Quick commercial office shifting, workstation dismantling, and safe IT equipment transport with zero downtime.',
    'car-transportation'   => 'Dedicated enclosed car carriers ensuring scratch-free, door-to-door vehicle delivery across India.',
    'bike-transportation'  => 'Specialized customized wooden frame crating and bubble-foam wrapped packing for total two-wheeler protection.',
    'corporate-relocation' => 'Zero-downtime enterprise relocation, IT server handling, multi-floor movement, and complete transition.',
    'packing-moving'       => '5-layer protective packing using heavy-duty corrugated cartons, bubble sheets, and moisture-proof stretch film.',
    'loading-unloading'    => 'Trained ground professionals equipped with modern hydraulic lifts, ramps, hand trucks, and safety gear.',
    'warehouse-storage'    => '24x7 CCTV-monitored, 100% moisture and pest-controlled secure warehouse storage facilities.',
    'transit-insurance'    => 'Comprehensive goods transit insurance coverage protecting your belongings against all unforeseen transit risks.',
];
?>
<!-- Professional Services Section -->
<section class="section-services-v3 py-5 position-relative border-top border-bottom">
    <div class="container py-2 py-lg-4">
        <!-- Section Header -->
        <div class="text-center mx-auto mb-5 section-header-wrap">
            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-2">
                What We Offer
            </span>
            <h2 class="section-title fw-bolder mb-3">Our Professional Relocation Services</h2>
            <p class="section-subtitle text-muted">
                Comprehensive, door-to-door relocation and storage solutions tailored to your schedule with zero-scratch assurance.
            </p>
        </div>

        <!-- Service Cards Grid (Phone: 2 per line, Tablet: 2 per line, Desktop: 3 per line) -->
        <div class="row g-2 g-sm-3 g-md-4 row-cols-2 row-cols-md-2 row-cols-lg-3 justify-content-center">
            <?php foreach ($services as $srv): ?>
                <?php 
                    $slug = $srv['slug'] ?? '';
                    $svg = $serviceSvgs[$slug] ?? $serviceSvgs['household-moving'];
                    $desc = $serviceShortDesc[$slug] ?? $srv['desc'];
                ?>
                <div class="col">
                    <div class="card h-100 border-0 service-clean-box p-3 p-md-4 d-flex flex-column text-start">
                        <!-- 1 & 2: Icon and Service Name in ONE ROW -->
                        <div class="d-flex align-items-center gap-2 gap-sm-3 mb-2 mb-sm-3">
                            <div class="service-clean-icon d-flex align-items-center justify-content-center flex-shrink-0">
                                <?= $svg ?>
                            </div>
                            <h3 class="service-clean-title mb-0"><?= esc($srv['title']) ?></h3>
                        </div>

                        <!-- 3. Exactly 2-Line Content Description -->
                        <p class="service-clean-desc text-muted mb-3 mb-sm-4 flex-grow-1"><?= esc($desc) ?></p>

                        <!-- 4. Single Clean Action Button -->
                        <a href="<?= site_url('services/' . $slug) ?>" class="btn btn-service-clean w-100 rounded-pill fw-bold d-flex align-items-center justify-content-center gap-1 gap-sm-2 py-2 mt-auto" aria-label="Explore <?= esc($srv['title']) ?> Details">
                            <span class="d-none d-sm-inline">Explore Details</span>
                            <span class="d-inline d-sm-none">Explore</span>
                            <svg class="btn-clean-arrow" width="14" height="14" viewBox="0 0 16 16" fill="none" aria-hidden="true">
                                <path d="M3.333 8h9.334M8.667 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
