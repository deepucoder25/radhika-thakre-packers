<?php
/**
 * Main Site Navigation Component
 * 3-Tier Multi-Bar Header Layout for Radhika Thakre Packers and Movers
 * Strictly uses brand logo colors, CSS variables, zero inline/internal styles,
 * fully responsive with Bootstrap 5 utilities, Offcanvas drawer and Quote modal.
 */

$isAboutActive = in_array($page ?? '', ['about', 'faqs', 'reviews', 'why-choose-us']) || (strpos($page ?? '', 'gallery') !== false);
$isServicesActive = ($page ?? '') === 'services' || (isset($module) && $module === 'services');
?>
<!-- Top Utility Bar (Desktop / Tablet) -->
<div class="header-tier1 d-none d-md-block">
    <div class="container-fluid px-2 px-md-3 px-xl-4">
        <div class="d-flex align-items-center justify-content-between flex-nowrap gap-2 header-tier1-inner">
            <!-- Left Info Chips -->
            <div class="d-flex align-items-center flex-nowrap gap-2 gap-xl-3 flex-shrink-0 top-chip-group">
                <div class="top-chip">
                    <span class="top-chip-icon"><i class="bi bi-envelope-fill"></i></span>
                    <a href="<?= esc($mailhtml) ?>" title="<?= esc($mail) ?>"><?= esc($mail) ?></a>
                </div>
                <div class="top-chip d-inline-flex">
                    <span class="top-chip-icon"><i class="bi bi-geo-alt-fill"></i></span>
                    <span class="d-none d-lg-inline"><?= esc($comp['address_short'] ?? 'Dewas Naka, Indore MP') ?></span>
                    <span class="d-inline d-lg-none">Indore MP</span>
                </div>
            </div>

            <!-- Right Action Pill Buttons -->
            <div class="d-flex align-items-center flex-nowrap gap-1 gap-md-2 flex-shrink-0 top-action-group">
                <a href="<?= site_url('tracking') ?>" class="btn-tier1-payment" title="Payment Details">
                    <i class="bi bi-credit-card-fill"></i>
                    <span class="d-none d-lg-inline">Payment Details !</span>
                    <span class="d-inline d-lg-none">Payment</span>
                </a>
                <a href="<?= site_url('city') ?>" class="btn-tier1-branch" title="All States">
                    <i class="bi bi-geo-alt-fill"></i>
                    <span class="d-none d-lg-inline">All States</span>
                    <span class="d-inline d-lg-none">All States</span>
                </a>
                <a <?= $phonehtml ?> class="btn-tier1-phone" title="<?= esc($phone) ?>">
                    <i class="bi bi-telephone-fill"></i>
                    <span><?= esc($phone) ?></span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Mobile Compact Bar (Visible on mobile screens < 768px: ONLY Mail & Phone Number) -->
<div class="header-tier1 d-block d-md-none mobile-topbar">
    <div class="container-fluid px-2 px-sm-3">
        <div class="d-flex align-items-center justify-content-between gap-2 flex-nowrap mobile-topbar-inner">
            <!-- Mail Chip (Left) -->
            <a href="<?= esc($mailhtml) ?>" class="mobile-top-mail text-truncate" title="<?= esc($mail) ?>">
                <span class="mobile-top-icon mail-icon"><i class="bi bi-envelope-fill"></i></span>
                <span class="mobile-top-text text-truncate"><?= esc($mail) ?></span>
            </a>

            <!-- Phone Pill (Right) -->
            <a <?= $phonehtml ?> class="btn-tier1-phone mobile-top-phone flex-shrink-0" title="<?= esc($phone) ?>">
                <i class="bi bi-telephone-fill"></i>
                <span><?= esc($phone) ?></span>
            </a>
        </div>
    </div>
</div>

<!-- Main Sticky Header / Navbar (Fully Responsive on Every Screen Size) -->
<nav class="navbar site-navbar">
    <div class="container-fluid px-2 px-sm-3 px-md-4 px-xl-5 d-flex align-items-center justify-content-between flex-nowrap site-navbar-inner">
        <!-- Brand Logo Image (Responsive Auto-Scaling) -->
        <a class="navbar-brand py-0 me-2 d-flex align-items-center flex-shrink-0" href="<?= site_url('/') ?>">
            <img src="<?= base_url('assets/img/logo/logo.png') ?>" alt="<?= esc($company3) ?>" class="site-main-logo" loading="lazy">
        </a>

        <!-- Right Side: Call Helpline + Glowing Amber Quote Button + Animated Hamburger Button -->
        <div class="d-flex align-items-center gap-2 gap-md-3 ms-auto flex-nowrap site-actions-cluster">
            <!-- Animated Call Button (Desktop & Tablet >= 768px only) -->
            <a <?= $phonehtml ?> class="btn-navbar-call rounded-pill d-none d-md-inline-flex align-items-center flex-shrink-0">
                <span class="call-icon-bubble">
                    <i class="bi bi-telephone-fill call-icon-anim"></i>
                </span>
                <span class="call-number-text"><?= esc($phone) ?></span>
            </a>

            <!-- Big Glowing Amber Quote Button (Desktop & Tablet >= 768px only) -->
            <a href="<?= site_url('contact') ?>" class="btn-glowing-quote d-none d-md-inline-flex align-items-center flex-shrink-0" data-bs-toggle="modal" data-bs-target="#quoteModal">
                <i class="bi bi-file-earmark-text-fill"></i>
                <span>Get Free Quote</span>
            </a>

            <!-- Modern Hamburger Button (Visible on ALL devices - In Mobile View: Logo + Hamburger Only) -->
            <button class="site-hamburger-btn flex-shrink-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#siteFullscreenMenu" aria-controls="siteFullscreenMenu" aria-label="Toggle full-screen navigation menu">
                <span class="hamburger-line line-1"></span>
                <span class="hamburger-line line-2"></span>
                <span class="hamburger-line line-3"></span>
            </button>
        </div>
    </div>
</nav>

<!-- Main Site Offcanvas Mega Menu (Clean, Normal, White Themed with Bootstrap Grid System) -->
<div class="offcanvas offcanvas-top h-100 w-100 border-0 site-normal-menu" tabindex="-1" id="siteFullscreenMenu" aria-labelledby="siteFullscreenMenuLabel">
    <!-- Menu Header Bar -->
    <div class="menu-normal-header bg-white border-bottom py-3 px-3 px-md-5 d-flex align-items-center justify-content-between flex-wrap gap-3">
        <div class="d-flex align-items-center flex-wrap gap-2 gap-md-3">
            <a href="<?= site_url('/') ?>" class="d-inline-flex align-items-center text-decoration-none" aria-label="<?= esc($company3) ?> Home">
                <img src="<?= base_url('assets/img/logo/logo.png') ?>" alt="<?= esc($company3) ?>" class="site-main-logo" loading="lazy">
            </a>
            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold small d-none d-sm-inline-flex align-items-center gap-1">
                <i class="bi bi-patch-check-fill text-danger" aria-hidden="true"></i>
                <span>Govt. Regd • Est. <?= esc($comp['established'] ?? '2018') ?> | Indore</span>
            </span>
        </div>

        <!-- Clean Close Button -->
        <button type="button" class="btn btn-outline-danger rounded-pill px-3 py-2 d-inline-flex align-items-center gap-2 fw-bold" data-bs-dismiss="offcanvas" aria-label="Close menu">
            <span>Close Menu</span>
            <i class="bi bi-x-lg" aria-hidden="true"></i>
        </button>
    </div>

    <!-- Menu Body with Standard Bootstrap Container, Row & Cols -->
    <div class="menu-normal-body bg-white flex-grow-1 overflow-y-auto">
        <div class="container py-4 py-lg-5">
            <div class="row g-4 g-xl-5">
                <!-- Col 1: Quick Navigation (col-12 col-md-6 col-lg-4) -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="menu-col-header pb-2 mb-3 border-bottom d-flex align-items-center gap-2">
                        <i class="bi bi-compass-fill text-danger fs-5" aria-hidden="true"></i>
                        <div class="h5 fw-bold text-dark mb-0">Quick Links</div>
                    </div>
                    <ul class="list-unstyled menu-nav-links mb-0">
                        <li>
                            <a href="<?= site_url('/') ?>" class="menu-nav-item <?= ($page === 'home') ? 'active' : '' ?>">
                                <i class="bi bi-house-door-fill text-danger me-2" aria-hidden="true"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('about') ?>" class="menu-nav-item <?= $isAboutActive ? 'active' : '' ?>">
                                <i class="bi bi-info-circle-fill text-danger me-2" aria-hidden="true"></i>
                                <span>About Us</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('reviews') ?>" class="menu-nav-item">
                                <i class="bi bi-star-fill text-warning me-2" aria-hidden="true"></i>
                                <span>Customer Reviews</span>
                                <span class="badge bg-warning text-dark fw-bold ms-auto small">4.9 ★</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('photo-gallery') ?>" class="menu-nav-item">
                                <i class="bi bi-images text-danger me-2" aria-hidden="true"></i>
                                <span>Photo Gallery</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('faqs') ?>" class="menu-nav-item">
                                <i class="bi bi-question-circle-fill text-danger me-2" aria-hidden="true"></i>
                                <span>FAQs</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('city') ?>" class="menu-nav-item <?= ($page === 'city') ? 'active' : '' ?>">
                                <i class="bi bi-geo-alt-fill text-danger me-2" aria-hidden="true"></i>
                                <span>All States</span>
                                <span class="badge bg-danger bg-opacity-10 text-danger ms-auto small">500+ Hubs</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('tracking') ?>" class="menu-nav-item">
                                <i class="bi bi-truck-front-fill text-danger me-2" aria-hidden="true"></i>
                                <span>Live GPS Tracking</span>
                                <span class="badge bg-success-subtle text-success ms-auto small">Live</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('contact') ?>" class="menu-nav-item <?= ($page === 'contact') ? 'active' : '' ?>">
                                <i class="bi bi-envelope-paper-fill text-danger me-2" aria-hidden="true"></i>
                                <span>Contact Us</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Col 2: All Relocation Services in ONE Column (col-12 col-md-6 col-lg-4) -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="menu-col-header pb-2 mb-3 border-bottom d-flex align-items-center gap-2">
                        <i class="bi bi-truck text-danger fs-5" aria-hidden="true"></i>
                        <div class="h5 fw-bold text-dark mb-0">Our Relocation Services</div>
                    </div>
                    <ul class="list-unstyled menu-nav-links mb-0">
                        <li>
                            <a href="<?= site_url('household-moving') ?>" class="menu-nav-item">
                                <i class="bi bi-house-check-fill text-danger me-2" aria-hidden="true"></i>
                                <span>Home Shifting</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('office-relocation') ?>" class="menu-nav-item">
                                <i class="bi bi-building-fill-gear text-danger me-2" aria-hidden="true"></i>
                                <span>Office Shifting</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('car-transportation') ?>" class="menu-nav-item">
                                <i class="bi bi-car-front-fill text-danger me-2" aria-hidden="true"></i>
                                <span>Car shifting</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('bike-transportation') ?>" class="menu-nav-item">
                                <i class="bi bi-bicycle text-danger me-2" aria-hidden="true"></i>
                                <span>Bike Shifting</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('corporate-relocation') ?>" class="menu-nav-item">
                                <i class="bi bi-briefcase-fill text-danger me-2" aria-hidden="true"></i>
                                <span>Corporate Relocation</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('packing-moving') ?>" class="menu-nav-item">
                                <i class="bi bi-boxes text-danger me-2" aria-hidden="true"></i>
                                <span>Packing &amp; Unpacking</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('loading-unloading') ?>" class="menu-nav-item">
                                <i class="bi bi-truck text-danger me-2" aria-hidden="true"></i>
                                <span>Loading &amp; Unloading</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('warehouse-storage') ?>" class="menu-nav-item">
                                <i class="bi bi-archive-fill text-danger me-2" aria-hidden="true"></i>
                                <span>Storage &amp; Warehouse</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('transit-insurance') ?>" class="menu-nav-item">
                                <i class="bi bi-shield-fill-check text-danger me-2" aria-hidden="true"></i>
                                <span>Goods Transit Insurance</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Col 3: Helpline & Fast Estimate Hub (col-12 col-md-12 col-lg-4) -->
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="menu-col-header pb-2 mb-3 border-bottom d-flex align-items-center gap-2">
                        <i class="bi bi-headset text-danger fs-5" aria-hidden="true"></i>
                        <div class="h5 fw-bold text-dark mb-0">24x7 Direct Support</div>
                    </div>

                    <!-- Clean Helpline Card -->
                    <div class="card border rounded-3 p-3 mb-3 bg-light shadow-sm">
                        <div class="small text-muted mb-2 fw-semibold">Connect with Indore Dispatch:</div>
                        <a <?= $phonehtml ?> class="btn btn-danger w-100 fw-bold py-2 mb-2 d-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-telephone-fill" aria-hidden="true"></i>
                            <span><?= esc($phone) ?></span>
                        </a>
                        <a href="<?= esc($whatsapphtml) ?>" target="_blank" rel="noopener" class="btn btn-hero-whatsapp w-100 fw-bold py-2 mb-3 d-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-whatsapp" aria-hidden="true"></i>
                            <span>Chat on WhatsApp</span>
                        </a>
                        <div class="small text-muted border-top pt-2">
                            <div class="d-flex align-items-start gap-2 mb-1">
                                <i class="bi bi-geo-alt-fill text-danger flex-shrink-0 mt-1" aria-hidden="true"></i>
                                <span class="lh-sm"><?= esc($comp['address_short'] ?? 'Dewas Naka, Indore MP') ?></span>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-envelope-fill text-danger flex-shrink-0" aria-hidden="true"></i>
                                <span class="text-truncate"><?= esc($mail) ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- Instant Quote Card -->
                    <div class="card border border-warning rounded-3 p-3 bg-white shadow-sm text-center">
                        <div class="fw-bold text-dark mb-1">Need Moving Cost Estimate?</div>
                        <p class="small text-muted mb-2">Get free doorstep survey with zero hidden charges.</p>
                        <a href="<?= site_url('contact') ?>" class="btn btn-warning w-100 fw-bold text-dark py-2" data-bs-toggle="modal" data-bs-target="#quoteModal" data-bs-dismiss="offcanvas">
                            <i class="bi bi-calculator-fill me-1" aria-hidden="true"></i>
                            <span>Get Free Quote</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu Normal Footer Bar -->
    <div class="menu-normal-footer bg-light border-top py-3 px-3 px-md-5">
        <div class="container-fluid p-0">
            <div class="row align-items-center gy-2">
                <div class="col-md-6 text-center text-md-start small text-muted">
                    © <?= date('Y') ?> <strong><?= esc($company3) ?></strong>. All Rights Reserved. Govt. Regd Movers.
                </div>
                <div class="col-md-6 text-center text-md-end small">
                    <span class="badge bg-secondary me-2">GSTIN: <?= esc($gst ?? '23BMOPT6924P1Z4') ?></span>
                    <a href="<?= site_url('about') ?>" class="text-muted text-decoration-none me-3">About</a>
                    <a href="<?= site_url('faqs') ?>" class="text-muted text-decoration-none me-3">FAQs</a>
                    <a href="<?= site_url('contact') ?>" class="text-muted text-decoration-none">Contact</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Fraud Advisory Modal Component -->
<div class="modal fade" id="fraudAlertModal" tabindex="-1" aria-labelledby="fraudAlertModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 border-0 shadow-lg">
            <div class="modal-header bg-danger text-white border-0 py-3">
                <div class="modal-title h5 fw-bold d-flex align-items-center gap-2 mb-0" id="fraudAlertModalLabel">
                    <i class="bi bi-shield-exclamation"></i> Beware of Online Frauds &amp; Scams
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="alert alert-warning d-flex align-items-center gap-2 mb-3">
                    <i class="bi bi-exclamation-triangle-fill fs-4 flex-shrink-0"></i>
                    <div class="small">Always ensure you are communicating directly with <strong><?= esc($company3) ?></strong> through official channels.</div>
                </div>
                <div class="fw-bold text-dark mb-2">Official Verification Checklist:</div>
                <ul class="list-unstyled small mb-3">
                    <li class="py-1 d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-success"></i> Official Contact: <strong><?= esc($phone) ?></strong></li>
                    <li class="py-1 d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-success"></i> Official Email: <strong><?= esc($mail) ?></strong></li>
                    <li class="py-1 d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-success"></i> Registered GSTIN: <strong><?= esc($gst ?? '23BMOPT6924P1Z4') ?></strong></li>
                    <li class="py-1 d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-success"></i> Head Office: <strong><?= esc($address) ?></strong></li>
                </ul>
                <p class="small text-muted mb-0">Never pay into personal accounts or personal UPI QR codes without an authentic computerized GST booking invoice from <?= esc($company3) ?>.</p>
            </div>
            <div class="modal-footer border-0 pt-0">
                <button type="button" class="btn btn-secondary rounded-pill px-4" data-bs-dismiss="modal">Close</button>
                <a <?= $phonehtml ?> class="btn btn-danger rounded-pill px-4 fw-bold">
                    <i class="bi bi-telephone-fill"></i> Call Helpline
                </a>
            </div>
        </div>
    </div>
</div>
