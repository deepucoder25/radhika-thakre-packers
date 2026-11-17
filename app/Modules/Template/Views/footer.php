<?php
/**
 * Main Site Footer Component - Radhika Thakre Packers and Movers
 * Unique, modern, high-conversion responsive design
 * Colors driven dynamically by CSS variables from the company logo
 */
?>
<!-- Pre-Footer Overlapping Interactive CTA Banner -->
<div class="footer-cta-wrapper">
    <div class="container">
        <div class="footer-cta-card rounded-4 p-4 p-lg-5 shadow-lg position-relative overflow-hidden">
            <div class="footer-cta-glow"></div>
            <div class="row align-items-center gy-4 position-relative">
                <div class="col-lg-7">
                    <span class="badge footer-cta-badge rounded-pill px-3 py-2 fw-semibold mb-2">
                        <i class="bi bi-stars me-1 text-warning"></i> Best Relocation Rates in Indore
                    </span>
                    <h3 class="footer-cta-title fw-bold text-white mb-2">
                        Planning to Shift Household, Office, or Vehicle?
                    </h3>
                    <p class="footer-cta-desc text-white-50 mb-0">
                        Get up to 20% discount on advance bookings with 100% transit insurance &amp; zero damage guarantee.
                    </p>
                </div>
                <div class="col-lg-5 text-lg-end">
                    <div class="d-flex flex-wrap gap-2 justify-content-lg-end">
                        <a <?= $phonehtml ?> class="btn btn-footer-cta-call rounded-pill px-4 py-3 fw-bold d-inline-flex align-items-center gap-2">
                            <i class="bi bi-telephone-fill"></i>
                            <span>Call <?= esc($phone) ?></span>
                        </a>
                        <a href="<?= esc($whatsapphtml) ?>" target="_blank" class="btn btn-footer-cta-whatsapp rounded-pill px-4 py-3 fw-bold text-white d-inline-flex align-items-center gap-2">
                            <i class="bi bi-whatsapp"></i>
                            <span>WhatsApp Quote</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Footer Container -->
<footer class="site-footer pt-5 pb-3 position-relative">
    <div class="container">
        <!-- 4-Pillar Quality Badges -->
        <div class="row g-3 mb-5">
            <div class="col-6 col-lg-3">
                <div class="footer-pillar-card p-3 rounded-3 d-flex align-items-center gap-3">
                    <div class="footer-pillar-icon d-flex align-items-center justify-content-center rounded-circle flex-shrink-0">
                        <i class="bi bi-box-seam"></i>
                    </div>
                    <div>
                        <h6 class="footer-pillar-title mb-0">5-Layer Packing</h6>
                        <small class="footer-pillar-sub">Bubble &amp; Foam Care</small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="footer-pillar-card p-3 rounded-3 d-flex align-items-center gap-3">
                    <div class="footer-pillar-icon d-flex align-items-center justify-content-center rounded-circle flex-shrink-0">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <div>
                        <h6 class="footer-pillar-title mb-0">100% Transit Safe</h6>
                        <small class="footer-pillar-sub">Full Goods Insurance</small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="footer-pillar-card p-3 rounded-3 d-flex align-items-center gap-3">
                    <div class="footer-pillar-icon d-flex align-items-center justify-content-center rounded-circle flex-shrink-0">
                        <i class="bi bi-clock-history"></i>
                    </div>
                    <div>
                        <h6 class="footer-pillar-title mb-0">On-Time Shifting</h6>
                        <small class="footer-pillar-sub">Punctual Schedules</small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="footer-pillar-card p-3 rounded-3 d-flex align-items-center gap-3">
                    <div class="footer-pillar-icon d-flex align-items-center justify-content-center rounded-circle flex-shrink-0">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <div>
                        <h6 class="footer-pillar-title mb-0">All-India Reach</h6>
                        <small class="footer-pillar-sub">500+ Hubs Covered</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Footer Navigation Columns -->
        <div class="row gy-4 mb-5">
            <!-- Brand & Trust Spotlight -->
            <div class="col-lg-4 col-md-6">
                <div class="footer-brand mb-3">
                    <a href="<?= site_url('/') ?>" class="d-inline-block text-decoration-none">
                        <div class="footer-logo-card bg-white rounded-3 p-2 px-3 shadow-sm d-inline-block">
                            <img src="<?= base_url('assets/img/logo/logo.png') ?>" alt="<?= esc($company3) ?>" class="footer-main-logo">
                        </div>
                    </a>
                </div>
                <p class="footer-desc mb-3">
                    Radhika Thakre Packers and Movers (Est. 2018, Indore) is a recognized moving company delivering damage-free household shifting, corporate relocation, enclosed vehicle transit, and secure warehousing across India.
                </p>

                <!-- Trust Badges & Rating -->
                <div class="footer-trust-box p-3 rounded-3 mb-3">
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-2">
                        <span class="badge footer-gst-tag d-inline-flex align-items-center gap-1">
                            <i class="bi bi-patch-check-fill text-warning"></i> GSTIN: <?= esc($gst ?? '23BMOPT6924P1Z4') ?>
                        </span>
                        <span class="badge footer-verified-tag d-inline-flex align-items-center gap-1">
                            <i class="bi bi-shield-fill-check text-success"></i> Govt. Regd.
                        </span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="footer-stars text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <span class="footer-rating-text text-white-50 small">
                            <strong>4.9 / 5</strong> (1,850+ Verified Reviews)
                        </span>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="footer-social-links d-flex gap-2">
                    <a href="<?= esc($facebookhtml ?? '#') ?>" target="_blank" class="social-icon-btn d-flex align-items-center justify-content-center rounded-circle" aria-label="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="<?= esc($twitterhtml ?? '#') ?>" target="_blank" class="social-icon-btn d-flex align-items-center justify-content-center rounded-circle" aria-label="Twitter">
                        <i class="bi bi-twitter-x"></i>
                    </a>
                    <a href="<?= esc($instagramhtml ?? '#') ?>" target="_blank" class="social-icon-btn d-flex align-items-center justify-content-center rounded-circle" aria-label="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="<?= esc($linkedinhtml ?? '#') ?>" target="_blank" class="social-icon-btn d-flex align-items-center justify-content-center rounded-circle" aria-label="LinkedIn">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="<?= esc($whatsapphtml ?? '#') ?>" target="_blank" class="social-icon-btn d-flex align-items-center justify-content-center rounded-circle" aria-label="WhatsApp">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                </div>
            </div>

            <!-- Relocation Services -->
            <div class="col-lg-3 col-md-6 col-6">
                <h5 class="footer-heading mb-3">Our Services</h5>
                <ul class="list-unstyled footer-nav-links mb-0">
                    <li><a href="<?= site_url('services/household-moving') ?>"><i class="bi bi-arrow-right-short text-danger"></i> Household Shifting</a></li>
                    <li><a href="<?= site_url('services/office-relocation') ?>"><i class="bi bi-arrow-right-short text-danger"></i> Office Relocation</a></li>
                    <li><a href="<?= site_url('services/car-transportation') ?>"><i class="bi bi-arrow-right-short text-danger"></i> Car Transportation</a></li>
                    <li><a href="<?= site_url('services/bike-transportation') ?>"><i class="bi bi-arrow-right-short text-danger"></i> Bike Transportation</a></li>
                    <li><a href="<?= site_url('services/packing-moving') ?>"><i class="bi bi-arrow-right-short text-danger"></i> Packing &amp; Unpacking</a></li>
                    <li><a href="<?= site_url('services/loading-unloading') ?>"><i class="bi bi-arrow-right-short text-danger"></i> Loading &amp; Unloading</a></li>
                    <li><a href="<?= site_url('services/warehouse-storage') ?>"><i class="bi bi-arrow-right-short text-danger"></i> Warehousing &amp; Storage</a></li>
                    <li><a href="<?= site_url('services/transit-insurance') ?>"><i class="bi bi-arrow-right-short text-danger"></i> Goods Transit Insurance</a></li>
                </ul>
            </div>

            <!-- Quick Company Links -->
            <div class="col-lg-2 col-md-6 col-6">
                <h5 class="footer-heading mb-3">Quick Links</h5>
                <ul class="list-unstyled footer-nav-links mb-0">
                    <li><a href="<?= site_url('/') ?>"><i class="bi bi-arrow-right-short text-danger"></i> Home</a></li>
                    <li><a href="<?= site_url('about') ?>"><i class="bi bi-arrow-right-short text-danger"></i> About Us</a></li>
                    <li><a href="<?= site_url('services') ?>"><i class="bi bi-arrow-right-short text-danger"></i> All Services</a></li>
                    <li><a href="<?= site_url('city') ?>"><i class="bi bi-arrow-right-short text-danger"></i> City Hubs</a></li>
                    <li><a href="<?= site_url('tracking') ?>"><i class="bi bi-arrow-right-short text-danger"></i> Track Order</a></li>
                    <li><a href="<?= site_url('reviews') ?>"><i class="bi bi-arrow-right-short text-danger"></i> Reviews</a></li>
                    <li><a href="<?= site_url('photo-gallery') ?>"><i class="bi bi-arrow-right-short text-danger"></i> Photo Gallery</a></li>
                    <li><a href="<?= site_url('faqs') ?>"><i class="bi bi-arrow-right-short text-danger"></i> FAQs</a></li>
                    <li><a href="<?= site_url('contact') ?>"><i class="bi bi-arrow-right-short text-danger"></i> Contact Us</a></li>
                </ul>
            </div>

            <!-- Head Office Contact Spotlight Card -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-office-card p-4 rounded-4 position-relative">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="footer-card-heading mb-0 text-white">Head Office</h5>
                        <span class="badge footer-live-badge d-inline-flex align-items-center gap-1">
                            <span class="live-dot"></span> 24x7 Active
                        </span>
                    </div>
                    
                    <div class="footer-contact-item d-flex align-items-start gap-2 mb-3">
                        <i class="bi bi-geo-alt-fill text-danger flex-shrink-0 mt-1"></i>
                        <span class="footer-contact-text"><?= esc($address) ?></span>
                    </div>

                    <div class="footer-contact-item d-flex align-items-center gap-2 mb-2">
                        <i class="bi bi-telephone-fill text-danger flex-shrink-0"></i>
                        <a <?= $phonehtml ?> class="footer-contact-link fw-bold text-white"><?= esc($phone) ?></a>
                    </div>

                    <div class="footer-contact-item d-flex align-items-center gap-2 mb-3">
                        <i class="bi bi-envelope-fill text-danger flex-shrink-0"></i>
                        <a href="<?= esc($mailhtml) ?>" class="footer-contact-link text-white-50"><?= esc($mail) ?></a>
                    </div>

                    <!-- Direct Actions -->
                    <div class="d-grid gap-2 pt-2">
                        <a href="<?= esc($whatsapphtml) ?>" target="_blank" class="btn btn-whatsapp-footer rounded-pill d-inline-flex align-items-center justify-content-center gap-2 fw-semibold">
                            <i class="bi bi-whatsapp"></i>
                            <span>Chat on WhatsApp</span>
                        </a>
                        <a href="<?= site_url('contact') ?>" class="btn btn-outline-light rounded-pill btn-sm py-2 fw-semibold" data-bs-toggle="modal" data-bs-target="#quoteModal">
                            <i class="bi bi-calculator me-1"></i> Request Quote
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top Relocation Routes Matrix -->
        <div class="footer-routes-section pt-4 pb-3 border-top border-secondary border-opacity-25">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                <h6 class="footer-subheading mb-0 text-white">
                    <i class="bi bi-truck text-danger me-1"></i> Popular Relocation Routes From Indore:
                </h6>
                <small class="text-white-50">Regular Dedicated Carriers</small>
            </div>
            <div class="d-flex flex-wrap gap-2">
                <a href="<?= site_url('city/maharashtra') ?>" class="route-pill"><i class="bi bi-arrow-right text-danger me-1"></i> Indore to Mumbai</a>
                <a href="<?= site_url('city/maharashtra') ?>" class="route-pill"><i class="bi bi-arrow-right text-danger me-1"></i> Indore to Pune</a>
                <a href="<?= site_url('city/delhi') ?>" class="route-pill"><i class="bi bi-arrow-right text-danger me-1"></i> Indore to Delhi NCR</a>
                <a href="<?= site_url('city/karnataka') ?>" class="route-pill"><i class="bi bi-arrow-right text-danger me-1"></i> Indore to Bangalore</a>
                <a href="<?= site_url('city/telangana') ?>" class="route-pill"><i class="bi bi-arrow-right text-danger me-1"></i> Indore to Hyderabad</a>
                <a href="<?= site_url('city/gujarat') ?>" class="route-pill"><i class="bi bi-arrow-right text-danger me-1"></i> Indore to Ahmedabad</a>
                <a href="<?= site_url('city/madhya-pradesh') ?>" class="route-pill"><i class="bi bi-arrow-right text-danger me-1"></i> Indore to Bhopal</a>
                <a href="<?= site_url('city/rajasthan') ?>" class="route-pill"><i class="bi bi-arrow-right text-danger me-1"></i> Indore to Jaipur</a>
                <a href="<?= site_url('city/uttar-pradesh') ?>" class="route-pill"><i class="bi bi-arrow-right text-danger me-1"></i> Indore to Lucknow</a>
                <a href="<?= site_url('city/west-bengal') ?>" class="route-pill"><i class="bi bi-arrow-right text-danger me-1"></i> Indore to Kolkata</a>
                <a href="<?= site_url('city/punjab') ?>" class="route-pill"><i class="bi bi-arrow-right text-danger me-1"></i> Indore to Chandigarh</a>
            </div>
        </div>

        <!-- Copyright & Legal Bottom Bar -->
        <div class="footer-bottom-bar pt-3 mt-3 border-top border-secondary border-opacity-25">
            <div class="row align-items-center gy-2">
                <div class="col-md-7 text-center text-md-start">
                    <p class="footer-copyright mb-0">
                        &copy; <?= date('Y') ?> <strong><?= esc($company3) ?></strong>. All Rights Reserved. Regd. GSTIN: <?= esc($gst ?? '23BMOPT6924P1Z4') ?>
                    </p>
                </div>
                <div class="col-md-5 text-center text-md-end">
                    <ul class="list-inline mb-0 footer-legal-links">
                        <li class="list-inline-item"><a href="<?= site_url('privacy-policy') ?>">Privacy Policy</a></li>
                        <li class="list-inline-item"><span class="text-secondary-subtle">|</span></li>
                        <li class="list-inline-item"><a href="<?= site_url('terms-and-conditions') ?>">Terms &amp; Conditions</a></li>
                        <li class="list-inline-item"><span class="text-secondary-subtle">|</span></li>
                        <li class="list-inline-item"><a href="<?= site_url('contact') ?>">Support</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Mobile Floating Quick Action Dock -->
<div class="mobile-dock-wrapper d-lg-none fixed-bottom pb-2 px-3">
    <div class="mobile-dock-inner rounded-pill shadow-lg d-flex align-items-center justify-content-between p-2">
        <a <?= $phonehtml ?> class="btn btn-dock-call flex-fill rounded-pill d-inline-flex align-items-center justify-content-center gap-1">
            <i class="bi bi-telephone-fill"></i>
            <span>Call Now</span>
        </a>
        <a href="<?= esc($whatsapphtml) ?>" target="_blank" class="btn btn-dock-whatsapp flex-fill rounded-pill d-inline-flex align-items-center justify-content-center gap-1">
            <i class="bi bi-whatsapp"></i>
            <span>WhatsApp</span>
        </a>
        <a href="<?= site_url('contact') ?>" class="btn btn-dock-quote flex-fill rounded-pill d-inline-flex align-items-center justify-content-center gap-1" data-bs-toggle="modal" data-bs-target="#quoteModal">
            <i class="bi bi-calculator-fill"></i>
            <span>Get Quote</span>
        </a>
    </div>
</div>

<!-- Global Quote Modal Component -->
<?= view('Modules\Contacts\Views\quotemodal') ?>

<!-- Bootstrap 5 Bundle JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/js/form.js') ?>"></script>

</body>
</html>
