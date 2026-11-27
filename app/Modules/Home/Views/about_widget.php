<?php
/**
 * Clean Modern About Widget - Radhika Thakre Packers and Movers
 * Zero Inline Styles - Bootstrap 5 Responsive Architecture
 * Authentic content & official promotional video from radhikathakrepackersmovers.com
 */
?>
<!-- About Us Section -->
<section class="section-about py-5 bg-light position-relative border-top border-bottom">
    <div class="container py-2 py-lg-4">
        <div class="row align-items-center g-4 g-lg-5">
            <!-- Full Width Top Column (col-12) -->
            <div class="col-12">
                <h2 class="section-title fw-bolder mb-2">
                    Radhika Thakre Packers and Movers
                </h2>
                <h3 class="h5 fw-bold text-danger mb-3">
                    Our Valuables are Important. We Move Them with Great Care.
                </h3>
                
                <p class="text-muted mb-3">
                    Moving to a new place is always exciting but packing and moving everything is a challenging job and requires lots of time. Furniture, kitchen articles, appliances and personal belongings require special care. Radhika Thakre Packers and Movers makes this job easy for families and corporate clients in Indore.
                </p>

                <p class="text-muted mb-3">
                    We are operating in the business of movers and packers for over 8 years and have catered to more than 25,000 families and corporate offices. From a local home shift to long distance shifting, we manage packing, loading, transportation and delivery of the goods.
                </p>

                <p class="text-muted mb-0">
                    We have a 5-layer bubble packaging process for suitable items and container trucks equipped with a GPS facility. You can also get transit insurance for securing your financial investment in the process of transportation.
                </p>
            </div>

            <!-- Left Column: Authentic Content from Official Website (col-lg-8) -->
            <div class="col-lg-8 col-md-7">
                <div class="about-content-wrap">
                    <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-2">
                        About Our Brand
                    </span>
                    <h2 class="section-title fw-bolder mb-3">
                        About Radhika Packers and Movers
                    </h2>
                    
                    <p class="text-muted mb-3">
                        <strong>Radhika Thakre Packers and Movers</strong> is a government-registered company with ISO 9001:2015 certification in the field of movers and packers services in Indore, Madhya Pradesh.
                    </p>

                    <p class="text-muted mb-3">
                        Over the past years, we have facilitated people for moving homes, offices and vehicles in various places of India. We understand that the requirement of every client varies as per the nature of his/her goods to move.
                    </p>

                    <p class="text-muted mb-4">
                        We talk about the moving requirements before starting the process. We inspect the goods, packing requirements and distance to provide you a quotation. Our goal is to provide transparency in the entire process to avoid any hidden costs.
                    </p>

                    <!-- Key Highlights Grid -->
                    <div class="row g-2 g-sm-3 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center gap-2 p-2 px-3 rounded-3 bg-white border shadow-sm">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-danger flex-shrink-0">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                <span class="fw-semibold text-dark small">Affordable &amp; Fair Pricing</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center gap-2 p-2 px-3 rounded-3 bg-white border shadow-sm">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-danger flex-shrink-0">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                <span class="fw-semibold text-dark small">GST Regd. No. <?= esc($gst) ?></span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center gap-2 p-2 px-3 rounded-3 bg-white border shadow-sm">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-danger flex-shrink-0">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                <span class="fw-semibold text-dark small">Trained &amp; Courteous Crew</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center gap-2 p-2 px-3 rounded-3 bg-white border shadow-sm">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-danger flex-shrink-0">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                <span class="fw-semibold text-dark small">Zero Damage Protection</span>
                            </div>
                        </div>
                    </div>

                    <!-- Action CTAs -->
                    <div class="d-flex flex-wrap gap-2 gap-sm-3 align-items-center">
                        <a href="<?= site_url('about') ?>" class="btn btn-about-primary rounded-pill d-inline-flex align-items-center gap-2" aria-label="Read more about <?= esc($company3) ?>">
                            <span class="fw-bold">Read More About Us</span>
                            <span class="btn-arrow-circle d-flex align-items-center justify-content-center" aria-hidden="true">
                                <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
                                    <path d="M3.333 8h9.334M8.667 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </a>
                        <a <?= $phonehtml ?> class="btn btn-about-call rounded-pill d-inline-flex align-items-center gap-2 gap-sm-3">
                            <span class="btn-call-icon-wrap d-flex align-items-center justify-content-center flex-shrink-0">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                </svg>
                            </span>
                            <span class="text-start d-flex flex-column lh-sm">
                                <span class="btn-call-label text-muted text-uppercase fw-semibold">Quick Call</span>
                                <span class="btn-call-number fw-bold text-dark"><?= esc($phone) ?></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Column: Video Reel Container (col-lg-4) -->
            <div class="col-lg-4 col-md-5">
                <div class="about-video-card">
                    <div class="about-video-wrapper shadow-lg">
                        <video class="about-video-player" controls autoplay muted loop playsinline preload="metadata">
                            <source src="<?= base_url('assets/img/videos/radhikavideo.mp4') ?>" type="video/mp4">
                            <source src="https://radhikathakrepackersmovers.com/assets/img/videos/radhikavideo.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
