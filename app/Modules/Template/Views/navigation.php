<?php
/**
 * Main Site Navigation Component
 * 3-Tier Multi-Bar Header Layout for Radhika Thakre Packers and Movers
 * Strictly uses brand logo colors, CSS variables, zero inline/internal styles,
 * fully responsive with Bootstrap 5 utilities, Offcanvas drawer and Quote modal.
 */

$isAboutActive = in_array($page ?? '', ['about', 'faqs', 'reviews']) || (strpos($page ?? '', 'gallery') !== false);
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
                <a href="<?= site_url('city') ?>" class="btn-tier1-branch" title="Select Nearest Branch">
                    <i class="bi bi-building"></i>
                    <span class="d-none d-lg-inline">Select Nearest Branch</span>
                    <span class="d-inline d-lg-none">Branches</span>
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

<!-- Full-Screen Luxury Mega Menu Overlay (Opens on Hamburger Click) -->
<div class="offcanvas offcanvas-top h-100 w-100 border-0 site-fullscreen-menu" tabindex="-1" id="siteFullscreenMenu" aria-labelledby="siteFullscreenMenuLabel">
    <!-- Fullscreen Menu Header -->
    <div class="fs-menu-header">
        <div class="d-flex align-items-center">
            <a href="<?= site_url('/') ?>" class="fs-logo-capsule" data-bs-dismiss="offcanvas">
                <img src="<?= base_url('assets/img/logo/logo.png') ?>" alt="<?= esc($company3) ?>" class="fs-logo-img" loading="lazy">
            </a>
            <span class="fs-tagline-badge d-none d-md-inline-flex ms-3">
                <i class="bi bi-patch-check-fill text-danger"></i>
                <span>Est. <?= esc($comp['established'] ?? '2018') ?> | Dewas Naka, Indore</span>
            </span>
        </div>

        <!-- Ultra-Modern Close Button -->
        <button type="button" class="btn-fs-close" data-bs-dismiss="offcanvas" aria-label="Close fullscreen menu">
            <span class="fs-close-text d-none d-sm-inline">CLOSE MENU</span>
            <span class="fs-close-icon">
                <i class="bi bi-x-lg"></i>
            </span>
        </button>
    </div>

    <!-- Fullscreen Menu Body Grid -->
    <div class="fs-menu-body">
        <div class="container">
            <div class="row g-4 g-xl-5">
                <!-- Column 1: Main Editorial Nav Links -->
                <div class="col-lg-4">
                    <div class="fs-col-label">
                        <span class="fs-dot"></span>
                        <span>EXPLORE PAGES</span>
                    </div>
                    <ul class="fs-nav-list">
                        <li class="fs-nav-item">
                            <a href="<?= site_url('/') ?>" class="fs-nav-link <?= ($page === 'home') ? 'active' : '' ?>" data-bs-dismiss="offcanvas">
                                <span class="fs-nav-num">01.</span>
                                <span class="fs-nav-title">Home</span>
                            </a>
                        </li>
                        <li class="fs-nav-item">
                            <a href="<?= site_url('about') ?>" class="fs-nav-link <?= $isAboutActive ? 'active' : '' ?>" data-bs-dismiss="offcanvas">
                                <span class="fs-nav-num">02.</span>
                                <span class="fs-nav-title">About Us</span>
                            </a>
                            <!-- Quick Subpills for About -->
                            <div class="fs-subpills">
                                <a href="<?= site_url('about') ?>" class="fs-subpill" data-bs-dismiss="offcanvas">Company Profile</a>
                                <a href="<?= site_url('reviews') ?>" class="fs-subpill" data-bs-dismiss="offcanvas">Reviews</a>
                                <a href="<?= site_url('photo-gallery') ?>" class="fs-subpill" data-bs-dismiss="offcanvas">Gallery</a>
                                <a href="<?= site_url('faqs') ?>" class="fs-subpill" data-bs-dismiss="offcanvas">FAQs</a>
                            </div>
                        </li>
                        <li class="fs-nav-item">
                            <a href="<?= site_url('services') ?>" class="fs-nav-link <?= $isServicesActive ? 'active' : '' ?>" data-bs-dismiss="offcanvas">
                                <span class="fs-nav-num">03.</span>
                                <span class="fs-nav-title">Our Services</span>
                            </a>
                        </li>
                        <li class="fs-nav-item">
                            <a href="<?= site_url('city') ?>" class="fs-nav-link <?= ($page === 'city') ? 'active' : '' ?>" data-bs-dismiss="offcanvas">
                                <span class="fs-nav-num">04.</span>
                                <span class="fs-nav-title">Branch Locator</span>
                            </a>
                        </li>
                        <li class="fs-nav-item">
                            <a href="<?= site_url('tracking') ?>" class="fs-nav-link <?= ($page === 'tracking') ? 'active' : '' ?>" data-bs-dismiss="offcanvas">
                                <span class="fs-nav-num">05.</span>
                                <span class="fs-nav-title">Live Tracking</span>
                            </a>
                        </li>
                        <li class="fs-nav-item">
                            <a href="<?= site_url('contact') ?>" class="fs-nav-link <?= ($page === 'contact') ? 'active' : '' ?>" data-bs-dismiss="offcanvas">
                                <span class="fs-nav-num">06.</span>
                                <span class="fs-nav-title">Contact Us</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Column 2: Relocation Services Grid -->
                <div class="col-lg-5">
                    <div class="fs-col-label">
                        <span class="fs-dot"></span>
                        <span>RELOCATION SOLUTIONS</span>
                    </div>
                    <div class="fs-services-grid">
                        <a href="<?= site_url('services/household-moving') ?>" class="fs-service-card" data-bs-dismiss="offcanvas">
                            <div class="fs-service-card-left">
                                <span class="fs-service-icon"><i class="bi bi-house-check"></i></span>
                                <span class="fs-service-name">Household Moving</span>
                            </div>
                            <i class="bi bi-arrow-right fs-service-arrow"></i>
                        </a>
                        <a href="<?= site_url('services/office-relocation') ?>" class="fs-service-card" data-bs-dismiss="offcanvas">
                            <div class="fs-service-card-left">
                                <span class="fs-service-icon"><i class="bi bi-buildings"></i></span>
                                <span class="fs-service-name">Office Relocation</span>
                            </div>
                            <i class="bi bi-arrow-right fs-service-arrow"></i>
                        </a>
                        <a href="<?= site_url('services/car-transportation') ?>" class="fs-service-card" data-bs-dismiss="offcanvas">
                            <div class="fs-service-card-left">
                                <span class="fs-service-icon"><i class="bi bi-car-front"></i></span>
                                <span class="fs-service-name">Car Carrier</span>
                            </div>
                            <i class="bi bi-arrow-right fs-service-arrow"></i>
                        </a>
                        <a href="<?= site_url('services/bike-transportation') ?>" class="fs-service-card" data-bs-dismiss="offcanvas">
                            <div class="fs-service-card-left">
                                <span class="fs-service-icon"><i class="bi bi-bicycle"></i></span>
                                <span class="fs-service-name">Bike Transport</span>
                            </div>
                            <i class="bi bi-arrow-right fs-service-arrow"></i>
                        </a>
                        <a href="<?= site_url('services/packing-moving') ?>" class="fs-service-card" data-bs-dismiss="offcanvas">
                            <div class="fs-service-card-left">
                                <span class="fs-service-icon"><i class="bi bi-boxes"></i></span>
                                <span class="fs-service-name">Packing &amp; Moving</span>
                            </div>
                            <i class="bi bi-arrow-right fs-service-arrow"></i>
                        </a>
                        <a href="<?= site_url('services/loading-unloading') ?>" class="fs-service-card" data-bs-dismiss="offcanvas">
                            <div class="fs-service-card-left">
                                <span class="fs-service-icon"><i class="bi bi-truck"></i></span>
                                <span class="fs-service-name">Loading &amp; Unloading</span>
                            </div>
                            <i class="bi bi-arrow-right fs-service-arrow"></i>
                        </a>
                        <a href="<?= site_url('services/warehouse-storage') ?>" class="fs-service-card" data-bs-dismiss="offcanvas">
                            <div class="fs-service-card-left">
                                <span class="fs-service-icon"><i class="bi bi-archive"></i></span>
                                <span class="fs-service-name">Storage Warehouse</span>
                            </div>
                            <i class="bi bi-arrow-right fs-service-arrow"></i>
                        </a>
                        <a href="<?= site_url('services/transit-insurance') ?>" class="fs-service-card" data-bs-dismiss="offcanvas">
                            <div class="fs-service-card-left">
                                <span class="fs-service-icon"><i class="bi bi-shield-check"></i></span>
                                <span class="fs-service-name">Transit Insurance</span>
                            </div>
                            <i class="bi bi-arrow-right fs-service-arrow"></i>
                        </a>
                    </div>
                    <a href="<?= site_url('services') ?>" class="fs-view-all-services" data-bs-dismiss="offcanvas">
                        <span>Explore All Specialized Services</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <!-- Column 3: 24x7 Helpline, Booking & Trust Hub -->
                <div class="col-lg-3">
                    <div class="fs-col-label">
                        <span class="fs-dot"></span>
                        <span>DIRECT HELPLINE &amp; QUOTE</span>
                    </div>
                    <div class="fs-hub-stack">
                        <!-- Direct Call & Chat Card -->
                        <div class="fs-contact-card">
                            <div class="fs-card-title">24x7 Live Helpline</div>
                            <div class="fs-card-subtitle">Connect directly with our Indore dispatch officer:</div>
                            <a <?= $phonehtml ?> class="fs-call-big-btn">
                                <i class="bi bi-telephone-fill call-icon-anim"></i>
                                <span><?= esc($phone) ?></span>
                            </a>
                            <a href="<?= esc($whatsapphtml) ?>" target="_blank" class="fs-whatsapp-btn">
                                <i class="bi bi-whatsapp"></i>
                                <span>Instant WhatsApp Chat</span>
                            </a>
                            <div class="fs-contact-details">
                                <div><i class="bi bi-envelope text-danger me-2"></i><?= esc($mail) ?></div>
                                <div><i class="bi bi-geo-alt text-danger me-2"></i><?= esc($comp['address_short'] ?? 'Dewas Naka, Indore MP') ?></div>
                            </div>
                        </div>

                        <!-- Instant Quote CTA Card -->
                        <div class="fs-quote-card">
                            <div class="fs-card-title text-warning">Quick Moving Estimate</div>
                            <div class="fs-card-subtitle text-white-50">Zero obligation customized price quote:</div>
                            <a href="<?= site_url('contact') ?>" class="fs-quote-cta-btn" data-bs-toggle="modal" data-bs-target="#quoteModal" data-bs-dismiss="offcanvas">
                                <i class="bi bi-calculator-fill"></i>
                                <span>Get Instant Quote</span>
                            </a>
                        </div>

                        <!-- Trust Credentials -->
                        <div class="fs-trust-strip">
                            <span><i class="bi bi-shield-fill-check text-success me-1"></i> Govt. Regd</span>
                            <span class="badge bg-secondary">GST: <?= esc($gst ?? '23BMOPT6924P1Z4') ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fullscreen Menu Bottom Footer -->
    <div class="fs-menu-footer">
        <div>© <?= date('Y') ?> <?= esc($company3) ?>. 100% Safe, Insured &amp; Reliable Packers and Movers in Indore.</div>
        <div class="d-flex align-items-center gap-3">
            <span><i class="bi bi-patch-check-fill text-warning me-1"></i> GSTIN: <?= esc($gst ?? '23BMOPT6924P1Z4') ?></span>
            <span>•</span>
            <a href="<?= site_url('city') ?>" class="text-white-50 text-decoration-none" data-bs-dismiss="offcanvas">All Branches</a>
            <span>•</span>
            <a href="<?= site_url('faqs') ?>" class="text-white-50 text-decoration-none" data-bs-dismiss="offcanvas">FAQs</a>
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
