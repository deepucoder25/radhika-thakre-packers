<?php
/**
 * Main Site Navigation Component
 * Fully responsive Bootstrap 5 navigation for Radhika Thakre Packers and Movers
 * Colors dynamically driven by CSS variables from the company logo
 */
?>
<!-- Top Utility & Helpline Bar -->
<div class="site-topbar py-2">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
            <!-- Left Info -->
            <div class="topbar-left d-flex align-items-center flex-wrap gap-3">
                <a <?= $phonehtml ?> class="topbar-link d-inline-flex align-items-center gap-1">
                    <i class="bi bi-telephone-fill topbar-icon-red"></i>
                    <span class="fw-semibold"><?= esc($phone) ?></span>
                </a>
                <a href="<?= esc($mailhtml) ?>" class="topbar-link d-none d-md-inline-flex align-items-center gap-1">
                    <i class="bi bi-envelope-fill topbar-icon-red"></i>
                    <span><?= esc($mail) ?></span>
                </a>
                <span class="topbar-info d-none d-lg-inline-flex align-items-center gap-1">
                    <i class="bi bi-clock-fill topbar-icon-red"></i>
                    <span><?= esc($site->workingHours) ?></span>
                </span>
            </div>

            <!-- Right Info & Badges -->
            <div class="topbar-right d-flex align-items-center flex-wrap gap-2">
                <span class="badge topbar-gst-badge d-none d-sm-inline-flex align-items-center gap-1">
                    <i class="bi bi-patch-check-fill text-warning"></i>
                    <span>GST: <?= esc($gst ?? '23BMOPT6924P1Z4') ?></span>
                </span>
                <a href="<?= site_url('tracking') ?>" class="topbar-link d-inline-flex align-items-center gap-1">
                    <i class="bi bi-truck text-warning"></i>
                    <span>Track Order</span>
                </a>
                <a href="<?= esc($whatsapphtml) ?>" target="_blank" class="topbar-link topbar-whatsapp d-inline-flex align-items-center gap-1">
                    <i class="bi bi-whatsapp"></i>
                    <span>WhatsApp</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Main Sticky Header / Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top site-navbar py-2 py-lg-3">
    <div class="container">
        <!-- Brand Logo Image (from actual logo file) -->
        <a class="navbar-brand py-0 me-3 d-flex align-items-center" href="<?= site_url('/') ?>">
            <img src="<?= base_url('assets/img/logo/logo.png') ?>" alt="<?= esc($company3) ?>" class="site-main-logo">
        </a>

        <!-- Mobile Toggler -->
        <button class="navbar-toggler border-0 shadow-none p-2 site-nav-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#siteNavbarMain" aria-controls="siteNavbarMain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links & CTA -->
        <div class="collapse navbar-collapse" id="siteNavbarMain">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 site-nav-list">
                <li class="nav-item">
                    <a class="nav-link <?= ($page === 'home') ? 'active' : '' ?>" href="<?= site_url('/') ?>">
                        <span>Home</span>
                    </a>
                </li>

                <!-- About Us Dropdown (Includes Profile, Reviews, Gallery, FAQs) -->
                <?php
                $isAboutActive = in_array($page ?? '', ['about', 'faqs', 'reviews']) || (strpos($page ?? '', 'gallery') !== false);
                ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?= $isAboutActive ? 'active' : '' ?>" href="#" id="aboutNavDrop" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span>About Us</span>
                    </a>
                    <ul class="dropdown-menu border-0 site-dropdown-menu" aria-labelledby="aboutNavDrop">
                        <li>
                            <a class="dropdown-item d-flex align-items-center gap-2 py-2 <?= ($page === 'about') ? 'active' : '' ?>" href="<?= site_url('about') ?>">
                                <i class="bi bi-building-check text-danger"></i>
                                <span>Company Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center gap-2 py-2 <?= ($page === 'reviews') ? 'active' : '' ?>" href="<?= site_url('reviews') ?>">
                                <i class="bi bi-star-fill text-warning"></i>
                                <span>Customer Reviews</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center gap-2 py-2 <?= (strpos($page ?? '', 'gallery') !== false) ? 'active' : '' ?>" href="<?= site_url('photo-gallery') ?>">
                                <i class="bi bi-images text-danger"></i>
                                <span>Photo Gallery</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center gap-2 py-2 <?= ($page === 'faqs') ? 'active' : '' ?>" href="<?= site_url('faqs') ?>">
                                <i class="bi bi-question-circle-fill text-danger"></i>
                                <span>Frequently Asked Questions</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <!-- Services Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?= ($page === 'services') ? 'active' : '' ?>" href="#" id="servicesNavDrop" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span>Services</span>
                    </a>
                    <ul class="dropdown-menu border-0 site-dropdown-menu" aria-labelledby="servicesNavDrop">
                        <li>
                            <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="<?= site_url('services/household-moving') ?>">
                                <i class="bi bi-house-check text-danger"></i>
                                <span>Household Moving</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="<?= site_url('services/office-relocation') ?>">
                                <i class="bi bi-buildings text-danger"></i>
                                <span>Office Relocation</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="<?= site_url('services/car-transportation') ?>">
                                <i class="bi bi-car-front text-danger"></i>
                                <span>Car Transportation</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="<?= site_url('services/bike-transportation') ?>">
                                <i class="bi bi-bicycle text-danger"></i>
                                <span>Bike Transportation</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="<?= site_url('services/packing-moving') ?>">
                                <i class="bi bi-boxes text-danger"></i>
                                <span>Packing &amp; Unpacking</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="<?= site_url('services/loading-unloading') ?>">
                                <i class="bi bi-truck text-danger"></i>
                                <span>Loading &amp; Unloading</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="<?= site_url('services/warehouse-storage') ?>">
                                <i class="bi bi-archive text-danger"></i>
                                <span>Warehousing &amp; Storage</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="<?= site_url('services/transit-insurance') ?>">
                                <i class="bi bi-shield-check text-danger"></i>
                                <span>Transit Insurance</span>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider my-1"></li>
                        <li>
                            <a class="dropdown-item dropdown-view-all d-flex align-items-center justify-content-between py-2 fw-semibold" href="<?= site_url('services') ?>">
                                <span>View All Services</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= ($page === 'city') ? 'active' : '' ?>" href="<?= site_url('city') ?>">
                        <span>Branches</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($page === 'tracking') ? 'active' : '' ?>" href="<?= site_url('tracking') ?>">
                        <span>Tracking</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($page === 'contact') ? 'active' : '' ?>" href="<?= site_url('contact') ?>">
                        <span>Contact</span>
                    </a>
                </li>
            </ul>

            <!-- Navbar Right Actions -->
            <div class="nav-action-buttons d-flex align-items-center gap-2 pt-2 pt-lg-0">
                <a <?= $phonehtml ?> class="btn btn-nav-phone rounded-pill d-none d-xl-inline-flex align-items-center gap-2">
                    <i class="bi bi-telephone-fill"></i>
                    <span><?= esc($phone) ?></span>
                </a>
                <a href="<?= site_url('contact') ?>" class="btn btn-nav-quote rounded-pill d-inline-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#quoteModal">
                    <i class="bi bi-calculator-fill"></i>
                    <span>Get Free Quote</span>
                </a>
            </div>
        </div>
    </div>
</nav>
