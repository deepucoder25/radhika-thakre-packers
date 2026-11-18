<?php
/**
 * Clean Modern About Widget - Radhika Thakre Packers and Movers
 * Zero Inline Styles - Bootstrap 5 Responsive Architecture
 * Left col-lg-6: Responsive Image Container (User-customizable)
 * Right col-lg-6: Normal authentic content from official website
 */
$phoneNum = $phone ?? '+91 98261 25421';
$phoneLink = $phonehtml ?? 'href="tel:+919826125421"';
?>
<!-- About Us Section -->
<section class="section-about py-5 bg-light position-relative border-top border-bottom">
    <div class="container py-2 py-lg-4">
        <div class="row align-items-center g-4 g-lg-5">
            <!-- Left Column: Image Container (col-lg-6) -->
            <div class="col-lg-6">
                <div class="position-relative about-image-wrapper">
                    <img src="<?= base_url('assets/img/about/about.png') ?>" alt="Radhika Thakre Packers and Movers in Indore" class="img-fluid rounded-4 shadow-sm w-100 object-fit-cover" loading="lazy">
                    <!-- Floating Experience Badge -->
                    <div class="position-absolute bottom-0 start-0 m-3 m-sm-4 p-3 bg-white rounded-3 shadow-lg border border-light-subtle d-flex align-items-center gap-3">
                        <div class="d-flex align-items-center justify-content-center bg-danger bg-opacity-10 text-danger rounded-circle p-2 flex-shrink-0">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="8" r="6"/>
                                <path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/>
                            </svg>
                        </div>
                        <div>
                            <span class="d-block fw-bolder fs-5 text-dark lh-1">8+ Years</span>
                            <span class="small text-muted">Of Proven Excellence (Since 2018)</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Normal Content Container (col-lg-6) -->
            <div class="col-lg-6">
                <div class="about-content-wrap">
                    <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-2">
                        About Our Brand
                    </span>
                    <h2 class="section-title fw-bolder mb-3">
                        Radhika Thakre Packers And Movers in Indore
                    </h2>
                    
                    <p class="text-muted mb-3">
                        <strong>Radhika Thakre Packers and Movers</strong> started its operation in the year 2018 from Indore, Madhya Pradesh and since then the company has been providing efficient moving and packing solutions. We have registered our organization for GST no. <strong>23BMOPT6924P1Z4</strong> being specific about the work we do and committing to the truth.
                    </p>

                    <p class="text-muted mb-4">
                        Ever since we have been a premier packing and moving company from Indore, we have had a comprehensive service delivery that seeks to suit the client's needs. Deciding on the right packers and movers is easier than ever before. We offer the best Packers and Movers services at reasonable prices.
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
                                <span class="fw-semibold text-dark small">GST Registered Organization</span>
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
                        <a href="<?= site_url('about') ?>" class="btn btn-about-primary rounded-pill d-inline-flex align-items-center gap-2" aria-label="Read more about Radhika Thakre Packers and Movers in Indore">
                            <span class="fw-bold">Read More About Us</span>
                            <span class="btn-arrow-circle d-flex align-items-center justify-content-center" aria-hidden="true">
                                <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
                                    <path d="M3.333 8h9.334M8.667 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </a>
                        <a <?= $phoneLink ?> class="btn btn-about-call rounded-pill d-inline-flex align-items-center gap-2 gap-sm-3">
                            <span class="btn-call-icon-wrap d-flex align-items-center justify-content-center flex-shrink-0">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                </svg>
                            </span>
                            <span class="text-start d-flex flex-column lh-sm">
                                <span class="btn-call-label text-muted text-uppercase fw-semibold">Quick Call</span>
                                <span class="btn-call-number fw-bold text-dark"><?= esc($phoneNum) ?></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
