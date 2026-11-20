<?php
/**
 * Modern High-Conversion About Us View - Radhika Thakre Packers and Movers
 * Zero inline styles | 100% Responsive | Dynamic variables from Site.php
 */

$compName     = $company3 ?? 'Radhika Thakre Packers and Movers';
$phoneNum     = $phone ?? '+91 98261 25421';
$phoneLink    = $phonehtml ?? 'href="tel:+919826125421"';
$secPhoneLink = $phonehtml1 ?? $phoneLink;
$secPhoneNum  = $phone1 ?? '+91 99931 72221';
$waLink       = $whatsapphtml ?? 'https://wa.me/919826125421';
$mailAddr     = $mail ?? 'radhikathakrepackersandmovers@gmail.com';
$mailLink     = $mailhtml ?? 'mailto:radhikathakrepackersandmovers@gmail.com';
$headOffice   = $address ?? 'Shop No. 100 first floor Katariya complex Dewas Naka Indore 452001';
$gstNum       = $gst ?? '23BMOPT6924P1Z4';
$expYears     = $experience ?? '8+';
$estYear      = $startYear ?? '2018';
$ratingVal    = $ratingValue ?? '4.9';
$reviewsTotal = $ratingCount ?? '1850';

$title       = "About Us";
$description = "Learn more about " . $compName . ", our " . $expYears . " years of moving excellence, infrastructure, 28,000+ completed moves, and customer-first commitment.";
$path        = [
    ['label' => 'Home', 'url' => site_url('/')],
    ['label' => 'About Us'],
];
?>
<?= view('Modules\Template\Views\page_banner', compact('title', 'description', 'path')) ?>

<!-- =========================================================================
     1. COMPANY STORY & OVERVIEW
     ========================================================================= -->
<section class="py-5 bg-white border-bottom">
    <div class="container py-2 py-lg-4">
        <div class="row g-4 g-lg-5 align-items-center">
            <!-- Left Column: Story & Narrative -->
            <div class="col-lg-7">
                <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-3">
                    Our Legacy &amp; Commitment
                </span>
                <h2 class="display-6 fw-bold text-dark mb-3">
                    Redefining Moving Standards With <span class="text-danger">Care, Safety &amp; Trust</span>
                </h2>
                <p class="lead text-secondary mb-3">
                    Founded in <?= esc($estYear) ?> in Indore, <strong><?= esc($compName) ?></strong> has grown into Central India's leading and most dependable packers and movers company.
                </p>
                <p class="text-muted mb-4">
                    Over <?= esc($expYears) ?> years of uninterrupted service, we have successfully relocated more than <strong>28,000+ households, corporate offices, and luxury vehicles</strong> across 500+ destinations nationwide. Our certified ground staff, specialized 5-layer crating techniques, and dedicated GPS-equipped closed container trucks ensure every item reaches its new doorstep on time and without a single scratch.
                </p>

                <!-- 4 Value Checkpoints Grid -->
                <div class="row g-3 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-shield-fill-check text-success fs-5 flex-shrink-0"></i>
                            <span class="fw-semibold text-dark">100% Goods Transit Insurance</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-patch-check-fill text-warning fs-5 flex-shrink-0"></i>
                            <span class="fw-semibold text-dark">Govt. Regd &amp; ISO 9001:2015</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-box-seam-fill text-danger fs-5 flex-shrink-0"></i>
                            <span class="fw-semibold text-dark">Premium 5-Layer Packaging</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-geo-alt-fill text-info fs-5 flex-shrink-0"></i>
                            <span class="fw-semibold text-dark">Live GPS Container Fleet</span>
                        </div>
                    </div>
                </div>

                <!-- CTAs -->
                <div class="d-flex flex-wrap gap-3">
                    <a <?= $phoneLink ?> class="btn btn-danger btn-lg rounded-pill px-4 fw-bold shadow-sm d-inline-flex align-items-center gap-2">
                        <i class="bi bi-telephone-fill"></i>
                        <span>Call <?= esc($phoneNum) ?></span>
                    </a>
                    <a href="<?= esc($waLink) ?>" target="_blank" rel="noopener" class="btn btn-success btn-lg rounded-pill px-4 fw-bold shadow-sm d-inline-flex align-items-center gap-2">
                        <i class="bi bi-whatsapp"></i>
                        <span>Chat on WhatsApp</span>
                    </a>
                    <a href="<?= site_url('contact') ?>" class="btn btn-outline-dark btn-lg rounded-pill px-4 fw-bold d-inline-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#quoteModal">
                        <i class="bi bi-calculator"></i>
                        <span>Free Survey</span>
                    </a>
                </div>
            </div>

            <!-- Right Column: Stats & Credentials Card -->
            <div class="col-lg-5">
                <div class="about-stats-card p-4 p-md-5 rounded-4 shadow-sm">
                    <div class="text-center mb-4">
                        <span class="badge bg-danger text-white px-3 py-2 rounded-pill fw-bold text-uppercase mb-2">
                            Proven Track Record
                        </span>
                        <h3 class="h4 fw-bold text-dark mb-1">Our Numbers Speak</h3>
                        <p class="small text-muted mb-0">Delivering satisfaction across every corner of India</p>
                    </div>

                    <div class="row g-3 text-center">
                        <div class="col-6">
                            <div class="about-stat-box p-3 rounded-3">
                                <div class="about-stat-num text-danger"><?= esc($expYears) ?></div>
                                <div class="about-stat-lbl">Years Experience</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="about-stat-box p-3 rounded-3">
                                <div class="about-stat-num text-primary">28k+</div>
                                <div class="about-stat-lbl">Happy Moves</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="about-stat-box p-3 rounded-3">
                                <div class="about-stat-num text-success">500+</div>
                                <div class="about-stat-lbl">Cities Connected</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="about-stat-box p-3 rounded-3">
                                <div class="about-stat-num text-warning"><?= esc($ratingVal) ?>★</div>
                                <div class="about-stat-lbl"><?= esc($reviewsTotal) ?>+ Reviews</div>
                            </div>
                        </div>
                    </div>

                    <!-- Verified Registration Bar -->
                    <div class="about-trust-footer mt-4 pt-3 border-top text-center">
                        <div class="d-flex align-items-center justify-content-center gap-2 small text-muted mb-1">
                            <i class="bi bi-file-earmark-check-fill text-success"></i>
                            <span>GSTIN: <strong><?= esc($gstNum) ?></strong></span>
                        </div>
                        <div class="small text-muted">
                            <i class="bi bi-award-fill text-warning me-1"></i> ISO 9001:2015 Certified Logistics Partner
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     2. MISSION, VISION & CORE VALUES (3 PILLARS)
     ========================================================================= -->
<section class="py-5 bg-light border-bottom">
    <div class="container py-2 py-lg-4">
        <div class="text-center mx-auto mb-5 section-header-wrap">
            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-2">
                Guiding Principles
            </span>
            <h2 class="section-title fw-bolder mb-3">Mission, Vision &amp; Core Values</h2>
            <p class="section-subtitle text-muted">
                What drives our team every day to provide seamless, honest, and reliable shifting experiences:
            </p>
        </div>

        <div class="row g-4">
            <!-- Mission -->
            <div class="col-md-4">
                <div class="about-pillar-card h-100 p-4 rounded-4 bg-white shadow-sm border">
                    <div class="about-pillar-icon icon-mission mb-3">
                        <i class="bi bi-bullseye"></i>
                    </div>
                    <h3 class="h5 fw-bold text-dark mb-2">Our Mission</h3>
                    <p class="text-muted small mb-0">
                        To remove the stress, fear, and fatigue from moving by offering standardized, transparent, and ultra-safe packing, shifting, and warehousing services that customers can book with total peace of mind.
                    </p>
                </div>
            </div>

            <!-- Vision -->
            <div class="col-md-4">
                <div class="about-pillar-card h-100 p-4 rounded-4 bg-white shadow-sm border">
                    <div class="about-pillar-icon icon-vision mb-3">
                        <i class="bi bi-eye-fill"></i>
                    </div>
                    <h3 class="h5 fw-bold text-dark mb-2">Our Vision</h3>
                    <p class="text-muted small mb-0">
                        To become India’s most trusted and technologically advanced relocation network, celebrated for punctual delivery, zero-damage records, and uncompromised customer satisfaction.
                    </p>
                </div>
            </div>

            <!-- Values -->
            <div class="col-md-4">
                <div class="about-pillar-card h-100 p-4 rounded-4 bg-white shadow-sm border">
                    <div class="about-pillar-icon icon-values mb-3">
                        <i class="bi bi-heart-pulse-fill"></i>
                    </div>
                    <h3 class="h5 fw-bold text-dark mb-2">Our Core Values</h3>
                    <p class="text-muted small mb-0">
                        Integrity in pricing, meticulous care for family belongings, continuous crew training, transparent communication, and 100% accountability on every single highway mile.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     3. 4-STEP RELOCATION WORKFLOW
     ========================================================================= -->
<section class="py-5 bg-white border-bottom">
    <div class="container py-2 py-lg-4">
        <div class="text-center mx-auto mb-5 section-header-wrap">
            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-2">
                How We Operate
            </span>
            <h2 class="section-title fw-bolder mb-3">Our 4-Step Seamless Moving Process</h2>
            <p class="section-subtitle text-muted">
                From your initial quote to final doorstep assembly, here is how we guarantee a flawless move:
            </p>
        </div>

        <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-4">
            <!-- Step 1 -->
            <div class="col">
                <div class="about-step-card p-4 rounded-4 bg-light border h-100 text-center">
                    <div class="about-step-badge mb-3">01</div>
                    <div class="about-step-icon mb-3 text-danger fs-2">
                        <i class="bi bi-clipboard2-check-fill"></i>
                    </div>
                    <h4 class="h6 fw-bold text-dark mb-2">Pre-Move Survey</h4>
                    <p class="small text-muted mb-0">
                        Our surveyor evaluates your household items, delicate goods, and requirements to provide a fixed, zero-hidden-cost quotation.
                    </p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col">
                <div class="about-step-card p-4 rounded-4 bg-light border h-100 text-center">
                    <div class="about-step-badge mb-3">02</div>
                    <div class="about-step-icon mb-3 text-primary fs-2">
                        <i class="bi bi-box-seam-fill"></i>
                    </div>
                    <h4 class="h6 fw-bold text-dark mb-2">5-Layer Packaging</h4>
                    <p class="small text-muted mb-0">
                        Trained packers arrive with multi-layer bubble wrap, foam, corrugated cartons, and custom wooden crates for safe packaging.
                    </p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="col">
                <div class="about-step-card p-4 rounded-4 bg-light border h-100 text-center">
                    <div class="about-step-badge mb-3">03</div>
                    <div class="about-step-icon mb-3 text-info fs-2">
                        <i class="bi bi-truck-front-fill"></i>
                    </div>
                    <h4 class="h6 fw-bold text-dark mb-2">GPS-Tracked Transit</h4>
                    <p class="small text-muted mb-0">
                        Goods are loaded securely into weatherproof, sealed container trucks equipped with live GPS tracking for real-time updates.
                    </p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="col">
                <div class="about-step-card p-4 rounded-4 bg-light border h-100 text-center">
                    <div class="about-step-badge mb-3">04</div>
                    <div class="about-step-icon mb-3 text-success fs-2">
                        <i class="bi bi-house-door-fill"></i>
                    </div>
                    <h4 class="h6 fw-bold text-dark mb-2">Delivery &amp; Placement</h4>
                    <p class="small text-muted mb-0">
                        Careful unloading, unpacking, furniture re-assembly, and room placement at your destination home with full satisfaction signoff.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     4. COMPREHENSIVE INFRASTRUCTURE & FLEET
     ========================================================================= -->
<section class="py-5 bg-light border-bottom">
    <div class="container py-2 py-lg-4">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-3">
                    Infrastructure &amp; Technology
                </span>
                <h2 class="display-6 fw-bold text-dark mb-3">
                    Built for Speed, Safety and Complete Peace of Mind
                </h2>
                <p class="text-muted mb-4">
                    Our robust physical and technical logistics infrastructure sets us apart from ordinary unorganized transporters:
                </p>

                <div class="vstack gap-3 mb-4">
                    <div class="d-flex align-items-start gap-3">
                        <div class="about-feature-bullet flex-shrink-0">
                            <i class="bi bi-truck"></i>
                        </div>
                        <div>
                            <h5 class="h6 fw-bold text-dark mb-1">Company-Owned Container Fleet</h5>
                            <p class="small text-muted mb-0">Fully covered, weather-sealed hydraulic container vehicles prevent rain, sun, or dust damage.</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start gap-3">
                        <div class="about-feature-bullet flex-shrink-0">
                            <i class="bi bi-building-lock"></i>
                        </div>
                        <div>
                            <h5 class="h6 fw-bold text-dark mb-1">24x7 Guarded Warehouse Hubs</h5>
                            <p class="small text-muted mb-0">CCTV-monitored, fire-protected, moisture-free storage facilities with flexible weekly/monthly tenure.</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start gap-3">
                        <div class="about-feature-bullet flex-shrink-0">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div>
                            <h5 class="h6 fw-bold text-dark mb-1">Background-Verified Ground Crew</h5>
                            <p class="small text-muted mb-0">Every driver, supervisor, and handyman is professionally trained, police-verified, and insured.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card border-0 rounded-4 shadow-sm p-4 p-md-5 bg-white">
                    <h4 class="h5 fw-bold text-dark mb-3">Need to Speak With Our Move Specialist?</h4>
                    <p class="small text-muted mb-4">
                        Whether you are planning an immediate local shifting or scheduling an upcoming interstate move, our coordinators are ready to help.
                    </p>
                    <div class="vstack gap-3">
                        <div class="d-flex align-items-center gap-3 p-3 rounded-3 bg-light">
                            <i class="bi bi-geo-alt-fill text-danger fs-4"></i>
                            <div>
                                <div class="small fw-bold text-dark">Central Office</div>
                                <div class="small text-muted"><?= esc($headOffice) ?></div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 p-3 rounded-3 bg-light">
                            <i class="bi bi-telephone-fill text-success fs-4"></i>
                            <div>
                                <div class="small fw-bold text-dark">Helplines</div>
                                <div class="small">
                                    <a <?= $phoneLink ?> class="text-decoration-none fw-bold text-dark"><?= esc($phoneNum) ?></a> / 
                                    <a <?= $secPhoneLink ?> class="text-decoration-none text-muted"><?= esc($secPhoneNum) ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 p-3 rounded-3 bg-light">
                            <i class="bi bi-envelope-fill text-primary fs-4"></i>
                            <div>
                                <div class="small fw-bold text-dark">Official Email</div>
                                <a <?= $mailLink ?> class="small text-decoration-none text-muted"><?= esc($mailAddr) ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
