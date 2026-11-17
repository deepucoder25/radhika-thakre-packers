<?php
/**
 * Services Index View - Radhika Thakre Packers and Movers
 * Fully responsive Bootstrap 5 layout matching radhikathakrepackersmovers.com
 */
?>
<!-- Page Hero Banner -->
<section class="services-hero-banner py-5 text-white">
    <div class="container text-center">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="d-inline-block mb-3">
            <ol class="breadcrumb services-breadcrumb px-3 py-2 rounded-pill mb-0">
                <li class="breadcrumb-item"><a href="<?= site_url('/') ?>" class="text-white text-decoration-none"><i class="bi bi-house-door me-1"></i> Home</a></li>
                <li class="breadcrumb-item active text-warning" aria-current="page">Our Services</li>
            </ol>
        </nav>
        <h1 class="services-hero-title fw-bold mb-3">Professional Relocation &amp; Logistics Services</h1>
        <p class="services-hero-subtitle mx-auto mb-0">
            Trusted door-to-door household shifting, corporate office relocation, car &amp; bike carrier transport, and safe warehouse storage with guaranteed safety and insurance.
        </p>
    </div>
</section>

<!-- Main Services Grid Section -->
<section class="services-section py-5">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-5">
            <span class="badge services-badge px-3 py-2 rounded-pill fw-semibold text-uppercase mb-2">What We Offer</span>
            <h2 class="section-heading fw-bold mb-3">Comprehensive Shifting Solutions Across India</h2>
            <p class="section-lead text-muted mx-auto">
                With trained professionals, high-grade 5-layer packaging materials, and dedicated carriers, we ensure your belongings arrive on time and in perfect condition.
            </p>
        </div>

        <!-- Services Cards Grid -->
        <div class="row g-4 mb-5">
            <?php foreach ($services as $srv): ?>
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="card service-card flex-fill border-0 shadow-sm rounded-4 overflow-hidden">
                        <div class="card-body p-4 d-flex flex-column">
                            <!-- Card Top Icon & Badge -->
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="service-icon-box d-flex align-items-center justify-content-center rounded-3">
                                    <i class="bi <?= esc($srv['b_icon'] ?? 'bi-box-seam') ?>"></i>
                                </div>
                                <span class="badge service-type-badge rounded-pill px-3 py-2 fw-medium">
                                    <?= esc($srv['badge'] ?? 'Relocation') ?>
                                </span>
                            </div>

                            <!-- Title & Description -->
                            <h3 class="service-card-title fw-bold mb-2">
                                <a href="<?= site_url('services/' . $srv['slug']) ?>" class="text-dark text-decoration-none">
                                    <?= esc($srv['title']) ?>
                                </a>
                            </h3>
                            <p class="service-card-desc text-muted mb-3 flex-grow-0">
                                <?= esc($srv['desc']) ?>
                            </p>

                            <!-- Features List -->
                            <ul class="list-unstyled service-card-features mb-4 flex-grow-1">
                                <?php foreach ($srv['features'] as $f): ?>
                                    <li class="d-flex align-items-center gap-2 mb-2">
                                        <i class="bi bi-check-circle-fill text-primary flex-shrink-0"></i>
                                        <span><?= esc($f) ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>

                            <!-- Card Action Buttons -->
                            <div class="d-flex gap-2 pt-2 border-top">
                                <a href="<?= site_url('services/' . $srv['slug']) ?>" class="btn btn-outline-primary btn-sm flex-fill rounded-pill py-2 fw-semibold">
                                    Read Details
                                </a>
                                <a href="<?= site_url('contact') ?>" class="btn btn-primary btn-sm flex-fill rounded-pill py-2 fw-semibold text-white" data-bs-toggle="modal" data-bs-target="#quoteModal">
                                    Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Why Choose Radhika Thakre Packers Section -->
<section class="why-choose-services-section py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge services-badge px-3 py-2 rounded-pill fw-semibold text-uppercase mb-2">Why Choose Us</span>
            <h2 class="section-heading fw-bold mb-3">Why Trust Radhika Thakre Packers and Movers?</h2>
            <p class="section-lead text-muted mx-auto">
                We have built our reputation since 2018 on trust, transparent pricing, and zero-compromise customer satisfaction.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="trust-pillar-card p-4 rounded-4 bg-white shadow-sm flex-fill text-center">
                    <div class="trust-pillar-icon mx-auto mb-3 d-flex align-items-center justify-content-center rounded-circle">
                        <i class="bi bi-shield-fill-check"></i>
                    </div>
                    <h5 class="fw-bold mb-2">100% Safe &amp; Insured</h5>
                    <p class="text-muted small mb-0">Complete goods transit insurance providing financial security against accidental damages.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="trust-pillar-card p-4 rounded-4 bg-white shadow-sm flex-fill text-center">
                    <div class="trust-pillar-icon mx-auto mb-3 d-flex align-items-center justify-content-center rounded-circle">
                        <i class="bi bi-box-fill"></i>
                    </div>
                    <h5 class="fw-bold mb-2">5-Layer Packaging</h5>
                    <p class="text-muted small mb-0">Heavy duty bubble wrap, stretch films, foam corners, and customized wooden crating.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="trust-pillar-card p-4 rounded-4 bg-white shadow-sm flex-fill text-center">
                    <div class="trust-pillar-icon mx-auto mb-3 d-flex align-items-center justify-content-center rounded-circle">
                        <i class="bi bi-cash-coin"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Affordable &amp; Honest</h5>
                    <p class="text-muted small mb-0">No hidden charges or surprise costs. Clear and transparent written quotations upfront.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="trust-pillar-card p-4 rounded-4 bg-white shadow-sm flex-fill text-center">
                    <div class="trust-pillar-icon mx-auto mb-3 d-flex align-items-center justify-content-center rounded-circle">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Trained Moving Crew</h5>
                    <p class="text-muted small mb-0">Experienced, verified, and courteous staff handling your precious items with utmost care.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works / Relocation Process -->
<section class="relocation-process-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge services-badge px-3 py-2 rounded-pill fw-semibold text-uppercase mb-2">Simple Process</span>
            <h2 class="section-heading fw-bold mb-3">How Our Moving Process Works</h2>
            <p class="section-lead text-muted mx-auto">
                Relocating with Radhika Thakre Packers and Movers is seamless, structured, and totally stress-free.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3 text-center">
                <div class="process-step-card p-3">
                    <div class="process-number rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center fw-bold">1</div>
                    <h5 class="fw-bold mb-2">Request Free Quote</h5>
                    <p class="text-muted small mb-0">Submit moving inquiry or call our 24x7 team for an instant cost estimation.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center">
                <div class="process-step-card p-3">
                    <div class="process-number rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center fw-bold">2</div>
                    <h5 class="fw-bold mb-2">Pre-Move Survey</h5>
                    <p class="text-muted small mb-0">Our relocation supervisor conducts virtual or on-site inventory check.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center">
                <div class="process-step-card p-3">
                    <div class="process-number rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center fw-bold">3</div>
                    <h5 class="fw-bold mb-2">Packing &amp; Loading</h5>
                    <p class="text-muted small mb-0">Premium multi-layer packing and careful loading into specialized closed carriers.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center">
                <div class="process-step-card p-3">
                    <div class="process-number rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center fw-bold">4</div>
                    <h5 class="fw-bold mb-2">Delivery &amp; Setup</h5>
                    <p class="text-muted small mb-0">Timely delivery at destination doorstep with complete unpacking &amp; placement.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call-to-Action Banner -->
<section class="services-cta-banner py-5 text-white">
    <div class="container">
        <div class="row align-items-center gy-4 text-center text-lg-start">
            <div class="col-lg-8">
                <h3 class="fw-bold mb-2">Need Hassle-Free Relocation Anywhere in India?</h3>
                <p class="mb-0 text-white-50">
                    Contact our moving specialists today. Fast booking, transparent rates, and guaranteed safe transit.
                </p>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-flex flex-wrap gap-2 justify-content-center justify-content-lg-end">
                    <a <?= $phonehtml ?> class="btn btn-warning rounded-pill px-4 py-2 fw-bold text-dark d-inline-flex align-items-center gap-2">
                        <i class="bi bi-telephone-fill"></i>
                        <span>Call <?= esc($phone) ?></span>
                    </a>
                    <a href="<?= esc($whatsapphtml) ?>" target="_blank" class="btn btn-success rounded-pill px-4 py-2 fw-bold text-white d-inline-flex align-items-center gap-2">
                        <i class="bi bi-whatsapp"></i>
                        <span>WhatsApp Us</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
