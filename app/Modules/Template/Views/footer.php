<?php
/**
 * Main Site Footer Component - Radhika Thakre Packers and Movers
 * Unique, modern, high-conversion responsive design
 * Colors driven dynamically by CSS variables from the company logo
 */
?>
<!-- Main Footer Container -->
<footer class="site-footer pt-5 pb-3 position-relative">
    <div class="container">
        <!-- 4-Pillar Quality Badges -->
        <div class="footer-pillars-wrapper mb-4 mb-lg-5">
            <div class="row g-2 g-md-3">
                <!-- Pillar 1: Packaging -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-pillar-card p-3 d-flex align-items-center gap-3">
                        <div class="footer-pillar-icon pillar-icon-red d-flex align-items-center justify-content-center flex-shrink-0">
                            <i class="bi bi-box-seam-fill"></i>
                        </div>
                        <div class="footer-pillar-content min-w-0">
                            <div class="footer-pillar-title h6 fw-bold mb-0 text-truncate">Multi-Layer Packing</div>
                            <span class="footer-pillar-sub text-truncate d-block">Bubble &amp; Foam Shield</span>
                        </div>
                    </div>
                </div>

                <!-- Pillar 2: Transit Safe -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-pillar-card p-3 d-flex align-items-center gap-3">
                        <div class="footer-pillar-icon pillar-icon-green d-flex align-items-center justify-content-center flex-shrink-0">
                            <i class="bi bi-shield-fill-check"></i>
                        </div>
                        <div class="footer-pillar-content min-w-0">
                            <div class="footer-pillar-title h6 fw-bold mb-0 text-truncate">100% Transit Safe</div>
                            <span class="footer-pillar-sub text-truncate d-block">Verified Goods Insurance</span>
                        </div>
                    </div>
                </div>

                <!-- Pillar 3: On-Time -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-pillar-card p-3 d-flex align-items-center gap-3">
                        <div class="footer-pillar-icon pillar-icon-amber d-flex align-items-center justify-content-center flex-shrink-0">
                            <i class="bi bi-stopwatch-fill"></i>
                        </div>
                        <div class="footer-pillar-content min-w-0">
                            <div class="footer-pillar-title h6 fw-bold mb-0 text-truncate">On-Time Shifting</div>
                            <span class="footer-pillar-sub text-truncate d-block">Guaranteed Schedule</span>
                        </div>
                    </div>
                </div>

                <!-- Pillar 4: Pan India -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-pillar-card p-3 d-flex align-items-center gap-3">
                        <div class="footer-pillar-icon pillar-icon-blue d-flex align-items-center justify-content-center flex-shrink-0">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div class="footer-pillar-content min-w-0">
                            <div class="footer-pillar-title h6 fw-bold mb-0 text-truncate">All-India Reach</div>
                            <span class="footer-pillar-sub text-truncate d-block">500+ Cities Covered</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Footer Navigation Columns -->
        <div class="row gy-4 mb-5">
            <!-- Brand & Trust Spotlight -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-brand mb-3">
                    <a href="<?= site_url('/') ?>" class="d-inline-block text-decoration-none" aria-label="<?= esc($company3) ?> Home">
                        <div class="footer-logo-card bg-white rounded-3 p-2 px-3 shadow-sm d-inline-block">
                            <img src="<?= base_url('assets/img/logo/logo.png') ?>" alt="<?= esc($company3) ?>" class="footer-main-logo" loading="lazy">
                        </div>
                    </a>
                </div>
                <p class="footer-desc mb-3">
                    <strong>Radhika Thakre Packers &amp; Movers</strong> is the Top Affordable Packers and Movers in Indore, Madhya Pradesh. Contact us for shifting your goods any queries. Get a quote for your shifting needs.
                </p>

                <!-- Trust Badges & Rating -->
                <div class="footer-trust-box p-3 rounded-3 mb-3">
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-2">
                        <span class="badge footer-verified-tag d-inline-flex align-items-center gap-1">
                            <i class="bi bi-shield-fill-check text-success"></i> Govt. Regd.
                        </span>
                        <div class="footer-rating-score d-inline-flex align-items-center gap-1">
                            <i class="bi bi-star-fill text-warning"></i>
                            <span class="text-white fw-bold">4.9</span><span class="text-white-50">/5</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-1">
                        <div class="footer-stars d-inline-flex align-items-center text-warning flex-shrink-0" role="img" aria-label="5 Star Rating">
                            <i class="bi bi-star-fill" aria-hidden="true"></i>
                            <i class="bi bi-star-fill" aria-hidden="true"></i>
                            <i class="bi bi-star-fill" aria-hidden="true"></i>
                            <i class="bi bi-star-fill" aria-hidden="true"></i>
                            <i class="bi bi-star-fill" aria-hidden="true"></i>
                        </div>
                        <span class="footer-rating-count">
                            (1,850+ Verified Reviews)
                        </span>
                    </div>
                </div>

                <!-- Social Links & Verification -->
                <div class="d-flex align-items-center flex-wrap gap-2 mb-2 footer-social-links">
                    <a href="<?= $facebookhtml ?>" target="_blank" class="social-icon-btn d-flex align-items-center justify-content-center rounded-circle" aria-label="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="<?= $twitterhtml ?>" target="_blank" class="social-icon-btn d-flex align-items-center justify-content-center rounded-circle" aria-label="Twitter">
                        <i class="bi bi-twitter-x"></i>
                    </a>
                    <a href="<?= $instagramhtml ?>" target="_blank" class="social-icon-btn d-flex align-items-center justify-content-center rounded-circle" aria-label="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="<?= $linkedinhtml ?>" target="_blank" class="social-icon-btn d-flex align-items-center justify-content-center rounded-circle" aria-label="LinkedIn">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="<?= $mediumhtml ?>" target="_blank" class="social-icon-btn d-flex align-items-center justify-content-center rounded-circle" aria-label="Medium">
                        <i class="bi bi-medium"></i>
                    </a>
                    <a href="<?= $mapshtml ?>" target="_blank" class="social-icon-btn d-flex align-items-center justify-content-center rounded-circle" aria-label="Google Maps Location">
                        <i class="bi bi-geo-alt-fill"></i>
                    </a>
                    <a href="<?= $whatsapphtml ?>" target="_blank" class="social-icon-btn d-flex align-items-center justify-content-center rounded-circle" aria-label="WhatsApp">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links / Services -->
            <div class="col-lg-3 col-md-6 col-6">
                <div class="footer-heading h5 fw-bold mb-3">Quick Links</div>
                <ul class="list-unstyled footer-nav-links mb-0">
                    <li><a href="<?= site_url('household-moving') ?>"><i class="bi bi-arrow-right-short text-danger"></i> Home Shifting Services</a></li>
                    <li><a href="<?= site_url('office-relocation') ?>"><i class="bi bi-arrow-right-short text-danger"></i> Office Shifting Services</a></li>
                    <li><a href="<?= site_url('car-transportation') ?>"><i class="bi bi-arrow-right-short text-danger"></i> Car Shifting Services</a></li>
                    <li><a href="<?= site_url('bike-transportation') ?>"><i class="bi bi-arrow-right-short text-danger"></i> Bike Shifting Services</a></li>
                    <li><a href="<?= site_url('packing-moving') ?>"><i class="bi bi-arrow-right-short text-danger"></i> Packing and Unpacking</a></li>
                    <li><a href="<?= site_url('loading-unloading') ?>"><i class="bi bi-arrow-right-short text-danger"></i> Loading and Unloading</a></li>
                    <li><a href="<?= site_url('transit-insurance') ?>"><i class="bi bi-arrow-right-short text-danger"></i> Goods Insurance</a></li>
                    <li><a href="<?= site_url('warehouse-storage') ?>"><i class="bi bi-arrow-right-short text-danger"></i> Warehousing Services</a></li>
                </ul>
            </div>

            <!-- Our Company -->
            <div class="col-lg-2 col-md-6 col-6">
                <div class="footer-heading h5 fw-bold mb-3">Our Company</div>
                <ul class="list-unstyled footer-nav-links mb-0">
                    <li><a href="<?= site_url('about') ?>"><i class="bi bi-arrow-right-short text-danger"></i> About Us</a></li>
                    <li><a href="<?= site_url('city') ?>"><i class="bi bi-arrow-right-short text-danger"></i> All States</a></li>
                    <li><a href="<?= site_url('about') ?>"><i class="bi bi-arrow-right-short text-danger"></i> Why Choose Us</a></li>
                    <li><a href="<?= site_url('services') ?>"><i class="bi bi-arrow-right-short text-danger"></i> IBA Approved Packers</a></li>
                    <li><a href="<?= site_url('reviews') ?>"><i class="bi bi-arrow-right-short text-danger"></i> Testimonials</a></li>
                    <li><a href="<?= site_url('photo-gallery') ?>"><i class="bi bi-arrow-right-short text-danger"></i> Photo Gallery</a></li>
                    <li><a href="<?= site_url('faqs') ?>"><i class="bi bi-arrow-right-short text-danger"></i> FAQs</a></li>
                    <li><a href="<?= site_url('contact') ?>"><i class="bi bi-arrow-right-short text-danger"></i> Contact Us</a></li>
                </ul>
            </div>

            <!-- Get Contact -->
            <div class="col-lg-4 col-md-6">
                <div class="footer-office-card p-4 rounded-4 position-relative">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="footer-card-heading h5 fw-bold mb-0 text-white">Get Contact</div>
                        <span class="badge footer-live-badge d-inline-flex align-items-center gap-1">
                            <span class="live-dot"></span> Active
                        </span>
                    </div>
                    
                    <div class="footer-contact-item d-flex align-items-start gap-2 mb-3">
                        <i class="bi bi-geo-alt-fill text-danger flex-shrink-0 mt-1"></i>
                        <span class="footer-contact-text"><?= $address ?></span>
                    </div>

                    <div class="footer-contact-item d-flex align-items-center gap-2 mb-2 flex-wrap">
                        <i class="bi bi-telephone-fill text-danger flex-shrink-0"></i>
                        <a <?= $phonehtml ?> class="footer-contact-link fw-bold text-white"><?= $phone ?></a>
                        <span class="text-white-50">/</span>
                        <a <?= $phonehtml1 ?> class="footer-contact-link fw-bold text-white"><?= $phone1 ?></a>
                    </div>

                    <div class="footer-contact-item d-flex align-items-start gap-2 mb-2">
                        <i class="bi bi-envelope-fill text-danger flex-shrink-0 mt-1"></i>
                        <div class="d-flex flex-column">
                            <a href="<?= $mailhtml ?>" class="footer-contact-link text-white-50 small text-break"><?= $mail ?></a>
                        </div>
                    </div>

                    <div class="footer-hours-badge mt-2 mb-3">
                        <i class="bi bi-clock-history me-1 text-danger"></i> <?= $workingHours ?>
                    </div>

                    <!-- Direct Action -->
                    <div class="pt-2">
                        <a href="<?= site_url('contact') ?>" class="btn-footer-contact" data-bs-toggle="modal" data-bs-target="#quoteModal">
                            <i class="bi bi-chat-right-text-fill"></i>
                            <span>Contact With Us</span>
                            <i class="bi bi-arrow-right ms-auto"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Network Presence in Top Cities of India -->
        <div class="footer-routes-section pt-4 pb-3 border-top border-secondary border-opacity-25">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                <div class="footer-subheading fw-bold mb-0 text-white">
                    <i class="bi bi-geo-fill text-danger me-1"></i> Our Network Presence in Top Cities of India :
                </div>
                <small class="text-white-50">500+ Hubs Across India</small>
            </div>
            <div class="d-flex flex-wrap gap-2">
                <a href="<?= site_url('city/maharashtra') ?>" class="route-pill" title="Packers Movers in Nashik">Packers Movers in Nashik</a>
                <a href="<?= site_url('city/jharkhand') ?>" class="route-pill" title="Packers Movers in Ranchi">Packers Movers in Ranchi</a>
                <a href="<?= site_url('city/tamil-nadu') ?>" class="route-pill" title="Packers Movers in Madurai">Packers Movers in Madurai</a>
                <a href="<?= site_url('city/haryana') ?>" class="route-pill" title="Packers Movers in Faridabad">Packers Movers in Faridabad</a>
                <a href="<?= site_url('city/madhya-pradesh') ?>" class="route-pill" title="Packers Movers in Gwalior">Packers Movers in Gwalior</a>
                <a href="<?= site_url('city/maharashtra') ?>" class="route-pill" title="Packers Movers in Mumbai">Packers Movers in Mumbai</a>
                <a href="<?= site_url('city/gujarat') ?>" class="route-pill" title="Packers Movers in Rajkot">Packers Movers in Rajkot</a>
                <a href="<?= site_url('city/punjab') ?>" class="route-pill" title="Packers Movers in Ludhiana">Packers Movers in Ludhiana</a>
                <a href="<?= site_url('city/madhya-pradesh') ?>" class="route-pill" title="Packers Movers in Bhopal">Packers Movers in Bhopal</a>
                <a href="<?= site_url('city/punjab') ?>" class="route-pill" title="Packers Movers in Chandigarh">Packers Movers in Chandigarh</a>
                <a href="<?= site_url('city/rajasthan') ?>" class="route-pill" title="Packers Movers in Jaipur">Packers Movers in Jaipur</a>
                <a href="<?= site_url('city/delhi') ?>" class="route-pill" title="Packers Movers in Delhi">Packers Movers in Delhi</a>
                <a href="<?= site_url('city/rajasthan') ?>" class="route-pill" title="Packers Movers in Jodhpur">Packers Movers in Jodhpur</a>
                <a href="<?= site_url('city/uttar-pradesh') ?>" class="route-pill" title="Packers Movers in Meerut">Packers Movers in Meerut</a>
                <a href="<?= site_url('city/madhya-pradesh') ?>" class="route-pill" title="Packers Movers in Indore">Packers Movers in Indore</a>
                <a href="<?= site_url('city/maharashtra') ?>" class="route-pill" title="Packers Movers in Vasai-Virar">Packers Movers in Vasai-Virar</a>
                <a href="<?= site_url('city/tamil-nadu') ?>" class="route-pill" title="Packers Movers in Chennai">Packers Movers in Chennai</a>
                <a href="<?= site_url('city/maharashtra') ?>" class="route-pill" title="Packers Movers in Solapur">Packers Movers in Solapur</a>
                <a href="<?= site_url('city/gujarat') ?>" class="route-pill" title="Packers Movers in Vadodara">Packers Movers in Vadodara</a>
                <a href="<?= site_url('city/uttar-pradesh') ?>" class="route-pill" title="Packers Movers in Kanpur">Packers Movers in Kanpur</a>
                <a href="<?= site_url('city/gujarat') ?>" class="route-pill" title="Packers Movers in Ahmedabad">Packers Movers in Ahmedabad</a>
                <a href="<?= site_url('city/uttar-pradesh') ?>" class="route-pill" title="Packers Movers in Ghaziabad">Packers Movers in Ghaziabad</a>
                <a href="<?= site_url('city/west-bengal') ?>" class="route-pill" title="Packers Movers in Kolkata">Packers Movers in Kolkata</a>
                <a href="<?= site_url('city/telangana') ?>" class="route-pill" title="Packers Movers in Hyderabad">Packers Movers in Hyderabad</a>
                <a href="<?= site_url('city/uttar-pradesh') ?>" class="route-pill" title="Packers Movers in Varanasi">Packers Movers in Varanasi</a>
                <a href="<?= site_url('city/andhra-pradesh') ?>" class="route-pill" title="Packers Movers in Visakhapatnam">Packers Movers in Visakhapatnam</a>
                <a href="<?= site_url('city/punjab') ?>" class="route-pill" title="Packers Movers in Amritsar">Packers Movers in Amritsar</a>
                <a href="<?= site_url('city/maharashtra') ?>" class="route-pill" title="Packers Movers in Navi Mumbai">Packers Movers in Navi Mumbai</a>
                <a href="<?= site_url('city/rajasthan') ?>" class="route-pill" title="Packers Movers in Kota">Packers Movers in Kota</a>
                <a href="<?= site_url('city/west-bengal') ?>" class="route-pill" title="Packers Movers in Howrah">Packers Movers in Howrah</a>
                <a href="<?= site_url('city/jharkhand') ?>" class="route-pill" title="Packers Movers in Dhanbad">Packers Movers in Dhanbad</a>
                <a href="<?= site_url('city/karnataka') ?>" class="route-pill" title="Packers Movers in Bangalore">Packers Movers in Bangalore</a>
                <a href="<?= site_url('city/maharashtra') ?>" class="route-pill" title="Packers Movers in Pune">Packers Movers in Pune</a>
                <a href="<?= site_url('city/assam') ?>" class="route-pill" title="Packers Movers in Guwahati">Packers Movers in Guwahati</a>
                <a href="<?= site_url('city/karnataka') ?>" class="route-pill" title="Packers Movers in Hubli-Dharwad">Packers Movers in Hubli-Dharwad</a>
                <a href="<?= site_url('city/maharashtra') ?>" class="route-pill" title="Packers Movers in Aurangabad">Packers Movers in Aurangabad</a>
                <a href="<?= site_url('city/maharashtra') ?>" class="route-pill" title="Packers Movers in Nagpur">Packers Movers in Nagpur</a>
                <a href="<?= site_url('city/jammu-and-kashmir') ?>" class="route-pill" title="Packers Movers in Srinagar">Packers Movers in Srinagar</a>
                <a href="<?= site_url('city/maharashtra') ?>" class="route-pill" title="Packers Movers in Kalyan-Dombivali">Packers Movers in Kalyan-Dombivali</a>
                <a href="<?= site_url('city/tamil-nadu') ?>" class="route-pill" title="Packers Movers in Coimbatore">Packers Movers in Coimbatore</a>
                <a href="<?= site_url('city/bihar') ?>" class="route-pill" title="Packers Movers in Patna">Packers Movers in Patna</a>
                <a href="<?= site_url('city/maharashtra') ?>" class="route-pill" title="Packers Movers in Pimpri-Chinchwad">Packers Movers in Pimpri-Chinchwad</a>
                <a href="<?= site_url('city/maharashtra') ?>" class="route-pill" title="Packers Movers in Thane">Packers Movers in Thane</a>
                <a href="<?= site_url('city/gujarat') ?>" class="route-pill" title="Packers Movers in Surat">Packers Movers in Surat</a>
                <a href="<?= site_url('city/uttar-pradesh') ?>" class="route-pill" title="Packers Movers in Allahabad">Packers Movers in Allahabad</a>
                <a href="<?= site_url('city/chhattisgarh') ?>" class="route-pill" title="Packers Movers in Raipur">Packers Movers in Raipur</a>
                <a href="<?= site_url('city/madhya-pradesh') ?>" class="route-pill" title="Packers Movers in Jabalpur">Packers Movers in Jabalpur</a>
                <a href="<?= site_url('city/uttar-pradesh') ?>" class="route-pill" title="Packers Movers in Lucknow">Packers Movers in Lucknow</a>
                <a href="<?= site_url('city/andhra-pradesh') ?>" class="route-pill" title="Packers Movers in Vijayawada">Packers Movers in Vijayawada</a>
                <a href="<?= site_url('city/uttar-pradesh') ?>" class="route-pill" title="Packers Movers in Agra">Packers Movers in Agra</a>
            </div>
        </div>

        <!-- Copyright & Payment Methods Bottom Bar -->
        <div class="footer-bottom-bar pt-4 mt-4 border-top border-secondary border-opacity-20">
            <!-- Tier 1: Payment Gateways Strip -->
            <div class="footer-bottom-payments d-flex align-items-center justify-content-between flex-wrap gap-3 pb-3 mb-3 border-bottom border-secondary border-opacity-10">
                <div class="d-flex align-items-center flex-wrap gap-2 justify-content-center justify-content-lg-start">
                    <span class="footer-payment-label me-1">
                        <i class="bi bi-shield-lock-fill text-warning me-1"></i> 100% Safe &amp; Secure Payments:
                    </span>
                    <div class="footer-payment-strip d-inline-flex align-items-center flex-wrap gap-2">
                        <!-- 1. Mastercard -->
                        <span class="payment-badge-card" title="Mastercard Accepted">
                            <svg width="36" height="20" viewBox="0 0 38 22" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Mastercard">
                                <circle cx="13" cy="11" r="8" fill="#EB001B"/>
                                <circle cx="25" cy="11" r="8" fill="#F79E1B"/>
                                <path d="M19 5.8A7.98 7.98 0 0 1 22 11 7.98 7.98 0 0 1 19 16.2 7.98 7.98 0 0 1 16 11 7.98 7.98 0 0 1 19 5.8Z" fill="#FF5F00"/>
                                <text x="19" y="12.8" text-anchor="middle" font-family="Arial, Helvetica, sans-serif" font-size="4.5" font-weight="700" fill="#ffffff" letter-spacing="-0.2">mastercard</text>
                            </svg>
                        </span>
                        <!-- 2. Maestro -->
                        <span class="payment-badge-card" title="Maestro Accepted">
                            <svg width="36" height="20" viewBox="0 0 38 22" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Maestro">
                                <circle cx="13" cy="11" r="8" fill="#0061A8"/>
                                <circle cx="25" cy="11" r="8" fill="#EB001B"/>
                                <path d="M19 5.8A7.98 7.98 0 0 1 22 11 7.98 7.98 0 0 1 19 16.2 7.98 7.98 0 0 1 16 11 7.98 7.98 0 0 1 19 5.8Z" fill="#733878"/>
                                <text x="19" y="12.8" text-anchor="middle" font-family="Arial, Helvetica, sans-serif" font-size="4.8" font-weight="700" fill="#ffffff" letter-spacing="-0.2">maestro</text>
                            </svg>
                        </span>
                        <!-- 3. Visa -->
                        <span class="payment-badge-card" title="Visa Accepted">
                            <svg width="36" height="14" viewBox="0 0 46 15" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Visa">
                                <path d="M17.8 1.2L12 14H8.1L5 3.2C4.8 2.5 4.6 2.3 4 2C3 1.5 1.5 1.1 0.2 0.8L0.3 0.3H7.1C8 0.3 8.7 0.9 9 1.8L10.6 10.3L14.3 1.2H17.8ZM33.5 9.5C33.6 5.9 28.3 5.7 28.4 4.1C28.5 3.5 29 3 30.1 2.8C30.6 2.7 32.2 2.6 33.7 3.3L34.3 0.8C33.4 0.4 32.2 0.2 30.8 0.2C27 0.2 24.4 2.2 24.4 5C24.4 7.1 26.3 8.3 27.8 9C29.3 9.7 29.8 10.2 29.8 10.8C29.8 11.8 28.6 12.3 27.5 12.3C25.6 12.3 24.5 12 23.5 11.5L22.9 14.2C24 14.6 25.5 15 27.2 15C31.2 15 33.8 13 33.8 9.9L33.5 9.5ZM43.7 14H47.2L44.2 1.2H41C40.3 1.2 39.6 1.6 39.3 2.3L33.6 14H37.4L38.1 12H42.8L43.2 14H43.7ZM39.1 9.3L41 4.1L42.1 9.3H39.1ZM23.3 1.2L20.4 14H16.8L19.7 1.2H23.3Z" fill="#1A1F71"/>
                                <path d="M4 2C3 1.5 1.5 1.1 0.2 0.8L0 1.5C1.3 1.8 2.8 2.2 3.8 2.8C4.3 3.1 4.5 3.5 4.7 4L6.9 14H10.6L5 3.2C4.8 2.5 4.6 2.3 4 2Z" fill="#F7B600"/>
                            </svg>
                        </span>
                        <!-- 4. PhonePe -->
                        <span class="payment-badge-card" title="PhonePe Accepted">
                            <svg width="52" height="16" viewBox="0 0 68 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="PhonePe">
                                <circle cx="10" cy="10" r="10" fill="#5F259F"/>
                                <path d="M6 6.5H14" stroke="#ffffff" stroke-width="1.4" stroke-linecap="round"/>
                                <path d="M8 6.5V10C8 11.1 8.9 12 10 12H11.5V14.5" stroke="#ffffff" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11.5 6.5V14.5" stroke="#ffffff" stroke-width="1.4" stroke-linecap="round"/>
                                <path d="M12.5 4L10 6.5" stroke="#ffffff" stroke-width="1.4" stroke-linecap="round"/>
                                <text x="24" y="14" font-family="Arial, Helvetica, sans-serif" font-size="11" font-weight="700" fill="#5F259F" letter-spacing="-0.3">PhonePe</text>
                            </svg>
                        </span>
                        <!-- 5. Google Pay -->
                        <span class="payment-badge-card" title="Google Pay Accepted">
                            <svg width="46" height="16" viewBox="0 0 54 18" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Google Pay">
                                <g transform="translate(1, 1)">
                                    <path d="M15.68 8.18c0-.57-.05-1.12-.15-1.64H8v3.1h4.31c-.19 1-.74 1.84-1.58 2.41v2h2.56c1.5-1.38 2.39-3.42 2.39-5.87z" fill="#4285F4"/>
                                    <path d="M8 16c2.16 0 3.97-.72 5.3-1.95l-2.56-2c-.72.48-1.64.77-2.74.77-2.1 0-3.87-1.42-4.51-3.33H.84v2.07C2.17 14.19 4.88 16 8 16z" fill="#34A853"/>
                                    <path d="M3.49 9.49c-.16-.48-.25-.99-.25-1.49s.09-1.01.25-1.49V4.43H.84C.3 5.51 0 6.72 0 8s.3 2.49.84 3.57l2.65-2.08z" fill="#FBBC05"/>
                                    <path d="M8 3.18c1.18 0 2.23.41 3.06 1.2l2.3-2.3C11.96.72 10.16 0 8 0 4.88 0 2.17 1.81.84 4.43l2.65 2.08c.64-1.92 2.41-3.33 4.51-3.33z" fill="#EA4335"/>
                                </g>
                                <text x="21" y="13.5" font-family="Arial, Helvetica, sans-serif" font-size="12" font-weight="600" fill="#5F6368" letter-spacing="-0.2">Pay</text>
                            </svg>
                        </span>
                        <!-- 6. Paytm -->
                        <span class="payment-badge-card" title="Paytm Accepted">
                            <svg width="42" height="16" viewBox="0 0 50 18" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Paytm">
                                <text x="1" y="14" font-family="Arial, Helvetica, sans-serif" font-size="14" font-weight="900" fill="#002970" letter-spacing="-0.5">pay</text>
                                <text x="27" y="14" font-family="Arial, Helvetica, sans-serif" font-size="14" font-weight="900" fill="#00BAF2" letter-spacing="-0.5">tm</text>
                            </svg>
                        </span>
                        <!-- 7. Net Banking -->
                        <span class="payment-badge-card" title="Net Banking Accepted">
                            <svg width="60" height="17" viewBox="0 0 74 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Net Banking">
                                <g fill="#1E293B">
                                    <path d="M2 5.5L8.5 2L15 5.5V6.5H2V5.5Z"/>
                                    <rect x="3.2" y="7.5" width="2" height="6.5" rx="0.3"/>
                                    <rect x="7.5" y="7.5" width="2" height="6.5" rx="0.3"/>
                                    <rect x="11.8" y="7.5" width="2" height="6.5" rx="0.3"/>
                                    <rect x="1" y="15" width="15" height="2" rx="0.3"/>
                                </g>
                                <text x="21" y="9" font-family="Arial, sans-serif" font-size="8.5" font-weight="900" fill="#0F172A" letter-spacing="0.5">NET</text>
                                <text x="21" y="16.5" font-family="Arial, sans-serif" font-size="6.8" font-weight="700" fill="#475569" letter-spacing="0.2">BANKING</text>
                            </svg>
                        </span>
                        <!-- 8. UPI -->
                        <span class="payment-badge-card" title="UPI Accepted">
                            <svg width="44" height="16" viewBox="0 0 52 18" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="UPI">
                                <text x="1" y="14" font-family="Arial, Helvetica, sans-serif" font-size="14" font-weight="900" font-style="italic" fill="#5A5B5E" letter-spacing="-0.5">UPI</text>
                                <path d="M35 3L41.5 9L35 15H38.5L45 9L38.5 3H35Z" fill="#097939"/>
                                <path d="M40 3L46.5 9L40 15H43.5L50 9L43.5 3H40Z" fill="#F47920"/>
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="footer-security-badge d-none d-lg-flex align-items-center">
                    <i class="bi bi-patch-check-fill text-success me-1"></i>
                    <span>256-Bit SSL Encrypted &amp; PCI-DSS Compliant</span>
                </div>
            </div>

            <!-- Tier 2: Single-Line Copyright & Legal Navigation -->
            <div class="row align-items-center gy-2">
                <div class="col-lg-7 text-center text-lg-start">
                    <p class="footer-copyright mb-0">
                        Copyright &copy; <?= date('Y') ?> <strong>Radhika Thakre Packers And Movers Pvt. Ltd.</strong> All Rights Reserved
                    </p>
                </div>
                <div class="col-lg-5 text-center text-lg-end">
                    <ul class="list-inline mb-0 footer-legal-links">
                        <li class="list-inline-item"><a href="<?= site_url('tracking') ?>">Bill For Claim</a></li>
                        <li class="list-inline-item"><span class="text-secondary-subtle mx-1">|</span></li>
                        <li class="list-inline-item"><a href="<?= site_url('terms-and-conditions') ?>">Terms &amp; Conditions</a></li>
                        <li class="list-inline-item"><span class="text-secondary-subtle mx-1">|</span></li>
                        <li class="list-inline-item"><a href="<?= site_url('privacy-policy') ?>">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Floating Action Buttons (Corner Floats across Mobile & Desktop) -->
<a href="<?= esc($whatsapphtml) ?>" target="_blank" class="floating-action-btn floating-whatsapp-btn" title="WhatsApp: +91 98261 25421" aria-label="WhatsApp: +91 98261 25421">
    <i class="bi bi-whatsapp"></i>
    <span class="floating-btn-label">+91 98261 25421</span>
</a>

<div class="floating-action-dock d-flex flex-column align-items-end gap-2 gap-lg-3">
    <!-- Call Helpline Button -->
    <a <?= $phonehtml ?> class="floating-action-btn floating-call-btn d-flex align-items-center" title="Call Us: <?= $phone ?>" aria-label="Call Us: <?= $phone ?>">
        <span class="floating-btn-label"><?= $phone ?></span>
        <i class="bi bi-telephone-fill"></i>
    </a>
    <!-- Instant Quote Button -->
    <a href="<?= site_url('contact') ?>" class="floating-action-btn floating-quote-btn d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#quoteModal" title="Get Free Quote" aria-label="Get Free Quote">
        <span class="floating-btn-label">Get Free Quote</span>
        <i class="bi bi-calculator-fill"></i>
    </a>
</div>

<!-- Global Quote Modal Component -->
<?= view('Modules\Contacts\Views\quotemodal') ?>

<!-- Bootstrap 5 Bundle JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/js/form.js') ?>"></script>

</body>
</html>
