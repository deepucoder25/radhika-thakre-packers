<?php
/**
 * Official City Relocation Landing Page - Radhika Thakre Packers and Movers
 * Content: 100% matched to https://radhikathakrepackersmovers.com/ajaigarh-packers-movers-madhya-pradesh
 * Design: Completely redesigned with modern, responsive Bootstrap 5 cards & zero inline styles
 */
?>

<!-- =========================================================================
     1. HERO SECTION WITH LOGISTICS TRUCK HIGHWAY BACKGROUND (MOBILE & DESKTOP)
     ========================================================================= -->
<section class="city-hero-truck-section position-relative overflow-hidden py-4 py-lg-5">
    <div class="container py-2 py-lg-4 position-relative z-1">
        <div class="row align-items-center g-4 g-lg-5">
            <!-- Left Column: Heading, Tagline, Care Badge & Trust Highlights -->
            <div class="col-lg-7 text-white">
                <!-- Integrated Breadcrumb Trail (Inside Left Div) -->
                <nav aria-label="breadcrumb" class="mb-3">
                    <ol class="breadcrumb city-breadcrumb-pill">
                        <li class="breadcrumb-item"><a href="<?= site_url('/') ?>"><i class="bi bi-house-door-fill me-1 text-danger"></i>Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= site_url('city') ?>">All States</a></li>
                        <li class="breadcrumb-item"><span><?= esc($stateName) ?></span></li>
                        <li class="breadcrumb-item active" aria-current="page"><span><?= esc($cityName) ?></span></li>
                    </ol>
                </nav>

                <div class="city-hero-content-wrap">
                    <!-- Moving with Care Badge -->
                    <div class="city-care-pill mb-2 mb-lg-3 d-inline-flex align-items-center gap-2">
                        <i class="bi bi-patch-check-fill text-warning"></i>
                        <span>Moving with care since <?= esc($startYear ?? '2018') ?></span>
                    </div>
                    
                    <!-- Main Headline (Matching User Screenshot) -->
                    <h1 class="city-main-heading mb-2">
                        Packers and Movers in <span class="city-heading-highlight"><?= esc($cityName) ?></span>
                    </h1>
                    <div class="city-heading-underline mb-2 mb-lg-3"></div>
                    
                    <!-- Subtitle / Tagline -->
                    <p class="city-subheading mb-3 text-white">
                        Safe &amp; Reliable Home Shifting Across India
                    </p>

                    <!-- Value Proposition Paragraph (Desktop View) -->
                    <p class="hero-subtitle mb-4 text-white-50 d-none d-lg-block">
                        Trusted by 28,000+ happy clients. We provide top-notch relocation services in <?= esc($cityName) ?> at transparent, budget-friendly rates with 5-layer safety packing and dedicated container trucks.
                    </p>

                    <!-- Trust Trio Highlights (Desktop View - Side by Side with Form) -->
                    <div class="city-trust-trio p-3 rounded-4 mb-4 d-none d-lg-block">
                        <div class="row g-2 align-items-center">
                            <div class="col-4">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-calendar2-check-fill text-warning fs-3"></i>
                                    <div>
                                        <div class="city-trust-head fw-bold text-white">Since <?= esc($startYear ?? '2018') ?></div>
                                        <div class="city-trust-sub text-white-50 small"><?= esc($experience ?? '8+') ?> Years Care</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 border-start border-white border-opacity-25">
                                <div class="d-flex align-items-center gap-2 ps-2">
                                    <i class="bi bi-map-fill text-danger fs-3"></i>
                                    <div>
                                        <div class="city-trust-head fw-bold text-white">All India</div>
                                        <div class="city-trust-sub text-white-50 small">500+ Cities</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 border-start border-white border-opacity-25">
                                <div class="d-flex align-items-center gap-2 ps-2">
                                    <i class="bi bi-headset text-info fs-3"></i>
                                    <div>
                                        <div class="city-trust-head fw-bold text-white">Dedicated</div>
                                        <div class="city-trust-sub text-white-50 small">24x7 Support</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Google Rating Proof Bar (Desktop View) -->
                    <div class="city-google-proof-bar p-2 px-3 rounded-pill d-none d-lg-inline-flex align-items-center gap-2 bg-white shadow-sm">
                        <svg width="20" height="20" viewBox="0 0 24 24">
                            <path fill="#4285F4" d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.82-2.4 3.68v3.05h3.88c2.27-2.09 3.66-5.17 3.66-9.17z"/>
                            <path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.05c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.15C3.26 21.36 7.33 24 12 24z"/>
                            <path fill="#FBBC05" d="M5.28 14.27c-.25-.72-.38-1.49-.38-2.27s.13-1.55.38-2.27V6.58H1.25C.45 8.18 0 9.98 0 12s.45 3.82 1.25 5.42l4.03-3.15z"/>
                            <path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.33 0 3.26 2.64 1.25 6.58l4.03 3.15c.95-2.83 3.6-4.98 6.72-4.98z"/>
                        </svg>
                        <div class="d-inline-flex align-items-center text-warning small">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <span class="text-muted small">|</span>
                        <span class="small fw-bold text-dark">Trusted by our customers (<?= esc($ratingValue ?? '4.9') ?>★)</span>
                    </div>
                </div>
            </div>

            <!-- Right Column: Loaded Quote Form Component (No duplicate form code) -->
            <div class="col-lg-5">
                <?= view('Modules\Contacts\Views\quoteform', array_merge(get_defined_vars(), ['city' => $cityName])) ?>

                <!-- Trust Trio Highlights (Mobile & Tablet View - Below Card) -->
                <div class="city-trust-trio p-3 rounded-4 mt-3 d-block d-lg-none">
                    <div class="row g-2 align-items-center text-center">
                        <div class="col-4">
                            <i class="bi bi-calendar2-check-fill text-warning fs-3 mb-1 d-block"></i>
                            <div class="city-trust-head fw-bold text-white small">Since <?= esc($startYear ?? '2018') ?></div>
                            <div class="city-trust-sub text-white-50 small"><?= esc($experience ?? '8+') ?> Years Care</div>
                        </div>
                        <div class="col-4 border-start border-white border-opacity-25">
                            <i class="bi bi-map-fill text-danger fs-3 mb-1 d-block"></i>
                            <div class="city-trust-head fw-bold text-white small">All India</div>
                            <div class="city-trust-sub text-white-50 small">500+ Cities</div>
                        </div>
                        <div class="col-4 border-start border-white border-opacity-25">
                            <i class="bi bi-headset text-info fs-3 mb-1 d-block"></i>
                            <div class="city-trust-head fw-bold text-white small">Dedicated</div>
                            <div class="city-trust-sub text-white-50 small">24x7 Support</div>
                        </div>
                    </div>
                </div>

                <!-- Google Rating Proof Bar (Mobile View - Below Card & Trio) -->
                <div class="text-center mt-3 d-block d-lg-none">
                    <div class="city-google-proof-bar p-2 px-3 rounded-pill d-inline-flex align-items-center gap-2 bg-white shadow-sm">
                        <svg width="20" height="20" viewBox="0 0 24 24">
                            <path fill="#4285F4" d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.82-2.4 3.68v3.05h3.88c2.27-2.09 3.66-5.17 3.66-9.17z"/>
                            <path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.05c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.15C3.26 21.36 7.33 24 12 24z"/>
                            <path fill="#FBBC05" d="M5.28 14.27c-.25-.72-.38-1.49-.38-2.27s.13-1.55.38-2.27V6.58H1.25C.45 8.18 0 9.98 0 12s.45 3.82 1.25 5.42l4.03-3.15z"/>
                            <path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.33 0 3.26 2.64 1.25 6.58l4.03 3.15c.95-2.83 3.6-4.98 6.72-4.98z"/>
                        </svg>
                        <div class="d-inline-flex align-items-center text-warning small">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <span class="text-muted small">|</span>
                        <span class="small fw-bold text-dark">Trusted by our customers (<?= esc($ratingValue ?? '4.9') ?>★)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        </div>
    </div>
</section>

<!-- =========================================================================
     2. WHY OUR PACKING AND MOVING SERVICES ARE BEST (6 OFFICIAL COUNTER CARDS)
     ========================================================================= -->
<section class="py-5 bg-white border-bottom">
    <div class="container py-2">
        <div class="text-center mx-auto mb-5 section-header-wrap">
            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-2">
                Why We Are Best
            </span>
            <h2 class="section-title fw-bolder mb-3">Why Our Packing and Moving Services Are Best in <?= esc($cityName) ?></h2>
            <p class="section-subtitle text-muted">
                Our Packing and Moving Company is the most reliable and Best Packers and Movers in <?= esc($cityName) ?>, <?= esc($stateName) ?>.
            </p>
        </div>

        <div class="row g-3 g-md-4 row-cols-2 row-cols-md-3 row-cols-lg-6">
            <div class="col">
                <div class="rt-counter-box h-100">
                    <div class="rt-counter-icon">
                        <i class="bi bi-truck"></i>
                    </div>
                    <div class="rt-counter-number">100%</div>
                    <div class="rt-counter-label">Fast Delivery</div>
                </div>
            </div>

            <div class="col">
                <div class="rt-counter-box h-100">
                    <div class="rt-counter-icon">
                        <i class="bi bi-shield-lock-fill"></i>
                    </div>
                    <div class="rt-counter-number">100%</div>
                    <div class="rt-counter-label">Secured Services</div>
                </div>
            </div>

            <div class="col">
                <div class="rt-counter-box h-100">
                    <div class="rt-counter-icon">
                        <i class="bi bi-wallet2"></i>
                    </div>
                    <div class="rt-counter-number">Best</div>
                    <div class="rt-counter-label">Affordable Prices</div>
                </div>
            </div>

            <div class="col">
                <div class="rt-counter-box h-100">
                    <div class="rt-counter-icon">
                        <i class="bi bi-box-seam-fill"></i>
                    </div>
                    <div class="rt-counter-number">5,000+</div>
                    <div class="rt-counter-label">Packages Delivered</div>
                </div>
            </div>

            <div class="col">
                <div class="rt-counter-box h-100">
                    <div class="rt-counter-icon">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <div class="rt-counter-number">100+</div>
                    <div class="rt-counter-label">Cities Covered</div>
                </div>
            </div>

            <div class="col">
                <div class="rt-counter-box h-100">
                    <div class="rt-counter-icon">
                        <i class="bi bi-emoji-smile-fill"></i>
                    </div>
                    <div class="rt-counter-number">28,000+</div>
                    <div class="rt-counter-label">Happy Clients</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     3. OVERVIEW & TOP SERVICES IN CITY (OFFICIAL NARRATIVE REDESIGNED)
     ========================================================================= -->
<section class="py-5 bg-light border-bottom">
    <div class="container py-2 py-lg-4">
        <div class="row g-4 g-lg-5 align-items-center">
            <!-- Left: Overview Narrative & Top Services -->
            <div class="col-lg-7">
                <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-2">
                    <?= esc($cityName) ?> Relocation Overview
                </span>
                
                <h2 class="section-title fw-bolder mb-3">
                    Affordable Rates for Packers and Movers in <?= esc($cityName) ?>
                </h2>

                <p class="text-muted mb-3">
                    Looking for the <strong>Best Packers and Movers in <?= esc($cityName) ?></strong>? We offer reliable and affordable relocation services tailored to your needs. Whether you need packers and movers in <?= esc($cityName) ?> near me or want the cheapest packers and movers in <?= esc($cityName) ?>, we've got you covered. Our expert team ensures a hassle-free move at competitive movers and packers <?= esc($cityName) ?> prices.
                </p>

                <p class="text-muted mb-4">
                    Being the <?= esc($cityName) ?> Cheap Packers and Movers, <strong>Radhika Thakre Packers</strong> offers affordable shifting services in <?= esc($cityName) ?> without cutting on quality. As the cheapest and best packers and movers, we are committed to reliability with top-quality services.
                </p>

                <!-- Top Packing & Moving Services in City (9-Point Grid) -->
                <div class="card border-0 rounded-4 shadow-sm p-4 bg-white mb-4">
                    <h3 class="h5 fw-bold text-dark mb-3">Our Top Packing and Moving Services in <?= esc($cityName) ?></h3>
                    <div class="row g-2">
                        <div class="col-sm-6"><i class="bi bi-check2-circle text-danger me-2"></i>Home Shifting in <?= esc($cityName) ?></div>
                        <div class="col-sm-6"><i class="bi bi-check2-circle text-danger me-2"></i>Office Shifting in <?= esc($cityName) ?></div>
                        <div class="col-sm-6"><i class="bi bi-check2-circle text-danger me-2"></i>Car Shifting in <?= esc($cityName) ?></div>
                        <div class="col-sm-6"><i class="bi bi-check2-circle text-danger me-2"></i>Bike Shifting in <?= esc($cityName) ?></div>
                        <div class="col-sm-6"><i class="bi bi-check2-circle text-danger me-2"></i>IBA Approved Packers in <?= esc($cityName) ?></div>
                        <div class="col-sm-6"><i class="bi bi-check2-circle text-danger me-2"></i>Packing &amp; Unpacking in <?= esc($cityName) ?></div>
                        <div class="col-sm-6"><i class="bi bi-check2-circle text-danger me-2"></i>Loading &amp; Unloading in <?= esc($cityName) ?></div>
                        <div class="col-sm-6"><i class="bi bi-check2-circle text-danger me-2"></i>Warehousing Services in <?= esc($cityName) ?></div>
                        <div class="col-sm-6"><i class="bi bi-check2-circle text-danger me-2"></i>Insurance to Good Transit in <?= esc($cityName) ?></div>
                    </div>
                </div>

                <div class="p-3 bg-white rounded-3 border small text-muted">
                    <i class="bi bi-info-circle-fill text-danger me-2"></i>
                    <strong><?= esc($cityName) ?> Market &amp; Move Transition:</strong> <?= esc($cityName) ?> is known for well-established marketplaces, modern infrastructure, and educated residents. Radhika Thakre Movers Packers in <?= esc($cityName) ?> tops the list of Best Packers and Movers in <?= esc($cityName) ?> with 6+ years of specialized experience and 28,000+ happy clients.
                </div>
            </div>

            <!-- Right: Interactive Cost Calculator (FROM LIVE SITE) -->
            <div class="col-lg-5">
                <div class="rt-calc-card">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <span class="badge bg-danger text-white rounded-pill px-3 py-1 fw-bold">Live Calculator</span>
                        <i class="bi bi-calculator-fill text-danger fs-3"></i>
                    </div>
                    
                    <h3 class="h4 fw-bold text-dark mb-2">
                        Packers Movers Cost Calculator in <span class="text-danger"><?= esc($cityName) ?></span>
                    </h3>
                    <p class="small text-muted mb-4">
                        Instant shifting cost estimation for <?= esc($cityName) ?> based on home size and transit distance:
                    </p>

                    <form id="cityFareCalculator" onsubmit="runRtCalculator(); return false;">
                        <div class="mb-3">
                            <label id="lblCalcType" for="rtCalcType" class="form-label small fw-bold text-dark mb-1">Select Shifting Type:</label>
                            <select id="rtCalcType" name="calc_type" aria-labelledby="lblCalcType" aria-label="Select Shifting Type" class="form-select city-quote-input">
                                <option value="1BHK">1 BHK Home</option>
                                <option value="2BHK">2 BHK Home</option>
                                <option value="3BHK">3 BHK Home</option>
                                <option value="4BHK">4 BHK / Villa</option>
                                <option value="car">Car Transportation</option>
                                <option value="bike">Bike Transportation</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label id="lblCalcDist" for="rtCalcDist" class="form-label small fw-bold text-dark mb-1">Select Distance:</label>
                            <select id="rtCalcDist" name="calc_dist" aria-labelledby="lblCalcDist" aria-label="Select Distance" class="form-select city-quote-input">
                                <option value="50">Up to 50 km</option>
                                <option value="500">Up to 500 km</option>
                                <option value="1000">Up to 1000 km</option>
                                <option value="1500">Up to 1500 km</option>
                                <option value="2500">Within 2500 km</option>
                            </select>
                        </div>

                        <button type="submit" class="city-quote-btn mb-3">
                            <i class="bi bi-calculator me-2"></i>Calculate Estimated Cost
                        </button>
                    </form>

                    <div id="rtCalcResult" class="rt-calc-result-box">
                        <div class="small text-muted mb-1">Estimated Cost Range:</div>
                        <div id="rtCalcFare" class="rt-calc-fare">₹10,500.00</div>
                        <div class="small text-muted mt-2">
                            *Estimation for knowledge purpose; actual cost may vary depending upon equipment, furniture, road condition &amp; floor level.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     4. OFFICIAL PRICING TABLES IN CITY (5 TABS - REDESIGNED BEAUTIFULLY)
     ========================================================================= -->
<section id="ratesTableSection" class="py-5 bg-white border-bottom">
    <div class="container py-2 py-lg-4">
        <!-- Section Header -->
        <div class="text-center mx-auto mb-5 section-header-wrap">
            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-2">
                Official Price Tables
            </span>
            <h2 class="section-title fw-bolder mb-3">Radhika Packers and Movers Charges in <?= esc($cityName) ?></h2>
            <p class="section-subtitle text-muted">
                Transparent and competitive relocation rates for homes, corporate offices, vehicles, and secure warehousing in <?= esc($cityName) ?>:
            </p>
        </div>

        <!-- 5-Tab Navigation (Mobile Swipeable & Slidable) -->
        <div class="rt-pricing-tabs-wrapper mb-4">
            <button class="rt-tab-slide-btn rt-tab-slide-left d-lg-none" type="button" aria-label="Slide Left" onclick="slidePricingTabs('left')">
                <i class="bi bi-chevron-left"></i>
            </button>
            <div class="rt-pricing-nav-scroll" id="pricingTabsScrollContainer">
                <ul class="nav nav-pills justify-content-center rt-pricing-nav gap-2" id="pricingTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="tab-distance-tab" data-bs-toggle="pill" data-bs-target="#tab-distance" type="button" role="tab" aria-controls="tab-distance" aria-selected="true">
                            <i class="bi bi-distribute-horizontal me-1"></i>Distance-Wise Rates
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-breakdown-tab" data-bs-toggle="pill" data-bs-target="#tab-breakdown" type="button" role="tab" aria-controls="tab-breakdown" aria-selected="false">
                            <i class="bi bi-receipt-cutoff me-1"></i>House Shifting Cost Breakdown
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-office-tab" data-bs-toggle="pill" data-bs-target="#tab-office" type="button" role="tab" aria-controls="tab-office" aria-selected="false">
                            <i class="bi bi-buildings me-1"></i>Office Relocation Charges
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-vehicle-tab" data-bs-toggle="pill" data-bs-target="#tab-vehicle" type="button" role="tab" aria-controls="tab-vehicle" aria-selected="false">
                            <i class="bi bi-car-front me-1"></i>Bike &amp; Car Transport
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-storage-tab" data-bs-toggle="pill" data-bs-target="#tab-storage" type="button" role="tab" aria-controls="tab-storage" aria-selected="false">
                            <i class="bi bi-box-seam me-1"></i>Secure Storage &amp; Warehouse
                        </button>
                    </li>
                </ul>
            </div>
            <button class="rt-tab-slide-btn rt-tab-slide-right d-lg-none" type="button" aria-label="Slide Right" onclick="slidePricingTabs('right')">
                <i class="bi bi-chevron-right"></i>
            </button>
        </div>

        <!-- Tab Content -->
        <div class="tab-content rt-pricing-card" id="pricingTabsContent">
            
            <!-- Tab 1: Distance-Wise Charges -->
            <div class="tab-pane fade show active" id="tab-distance" role="tabpanel" aria-labelledby="tab-distance-tab">
                <h3 class="h5 fw-bold text-dark mb-2">Distance-Wise Shifting Charges from <?= esc($cityName) ?></h3>
                <p class="small text-muted mb-4">Competitive rates across distance brackets for residential homes, vehicles, and commercial consignments.</p>
                <div class="table-responsive">
                    <table class="rt-table-modern">
                        <thead>
                            <tr>
                                <th>Service Type</th>
                                <th>Upto 300 Km</th>
                                <th>400 - 800 Km</th>
                                <th>900 - 1,400 Km</th>
                                <th>1,500 - 2,200 Km</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-bold">1 BHK Home</td>
                                <td>Rs. 9,500 - 18,500</td>
                                <td>Rs. 12,000 - 21,000</td>
                                <td>Rs. 14,000 - 22,500</td>
                                <td>Rs. 15,800 - 23,500</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">2 BHK Home</td>
                                <td>Rs. 12,000 - 22,000</td>
                                <td>Rs. 16,500 - 24,500</td>
                                <td>Rs. 17,500 - 27,000</td>
                                <td>Rs. 18,800 - 29,500</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">3 BHK Home</td>
                                <td>Rs. 14,800 - 25,000</td>
                                <td>Rs. 15,500 - 28,800</td>
                                <td>Rs. 19,500 - 30,000</td>
                                <td>Rs. 24,000 - 34,000</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Car Transport</td>
                                <td>Rs. 3,200 - 5,800</td>
                                <td>Rs. 4,800 - 6,800</td>
                                <td>Rs. 6,200 - 9,000</td>
                                <td>Rs. 8,000 - 9,800</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Bike Transport</td>
                                <td>Rs. 2,000 - 4,000</td>
                                <td>Rs. 3,200 - 5,800</td>
                                <td>Rs. 4,000 - 6,800</td>
                                <td>Rs. 5,900 - 9,500</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Small Office</td>
                                <td>Rs. 19,800 - 27,500</td>
                                <td>Rs. 22,500 - 29,500</td>
                                <td>Rs. 24,500 - 41,000</td>
                                <td>Rs. 29,500 - 45,000</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Commercial Goods</td>
                                <td>Rs. 28,500 - 42,000</td>
                                <td>Rs. 25,500 - 60,000</td>
                                <td>Rs. 33,000 - 59,000</td>
                                <td>Rs. 42,000 - 67,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Tab 2: House Shifting Cost Breakdown -->
            <div class="tab-pane fade" id="tab-breakdown" role="tabpanel" aria-labelledby="tab-breakdown-tab">
                <h3 class="h5 fw-bold text-dark mb-2">Transparent House Shifting Charges in <?= esc($cityName) ?></h3>
                <p class="small text-muted mb-4">Itemized cost breakdown covering packing, labour, and safe road transit with no hidden fees.</p>
                <div class="table-responsive">
                    <table class="rt-table-modern">
                        <thead>
                            <tr>
                                <th>Cost Components</th>
                                <th>1 BHK (Compact - Spacious)</th>
                                <th>2 BHK (Compact - Spacious)</th>
                                <th>3 BHK (Compact - Spacious)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-bold">Packing Charges</td>
                                <td>Rs. 1,500 – Rs. 3,500</td>
                                <td>Rs. 1,800 – Rs. 5,200</td>
                                <td>Rs. 3,500 – Rs. 6,500</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Loading / Unloading</td>
                                <td>Rs. 1,300 – Rs. 3,000</td>
                                <td>Rs. 1,600 – Rs. 4,500</td>
                                <td>Rs. 2,900 – Rs. 5,800</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Transportation</td>
                                <td>Rs. 1,800 – Rs. 4,800</td>
                                <td>Rs. 3,600 – Rs. 7,400</td>
                                <td>Rs. 4,200 – Rs. 8,300</td>
                            </tr>
                            <tr class="table-danger">
                                <td class="fw-bolder text-danger">Total Estimate</td>
                                <td class="fw-bold text-danger">Rs. 4,600 – Rs. 11,300</td>
                                <td class="fw-bold text-danger">Rs. 7,000 – Rs. 17,100</td>
                                <td class="fw-bold text-danger">Rs. 10,600 – Rs. 20,600</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="small text-muted text-center mt-3">*Includes insurance coverage | Prices vary based on distance and floor level.</div>
            </div>

            <!-- Tab 3: Office Shifting Charges -->
            <div class="tab-pane fade" id="tab-office" role="tabpanel" aria-labelledby="tab-office-tab">
                <h3 class="h5 fw-bold text-dark mb-2">Office Shifting Charges in <?= esc($cityName) ?></h3>
                <p class="small text-muted mb-4">Insured corporate packing, workstation dismantling, IT hardware protection, and competitive rates.</p>
                <div class="table-responsive">
                    <table class="rt-table-modern">
                        <thead>
                            <tr>
                                <th>Office Type</th>
                                <th>Up to 10 Km</th>
                                <th>11 - 25 Km</th>
                                <th>26+ Km</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-bold">Compact Office (5-10 Employees)</td>
                                <td>Rs. 10,500 - 17,800</td>
                                <td>Rs. 12,800 - 21,200</td>
                                <td>Rs. 13,500 - 24,000</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Startup Office (15-30 Employees)</td>
                                <td>Rs. 18,200 - 33,800</td>
                                <td>Rs. 22,400 - 38,500</td>
                                <td>Rs. 23,700 - 42,100</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Mid-Size Office (40-60 Employees)</td>
                                <td>Rs. 43,000 - 67,500</td>
                                <td>Rs. 49,800 - 76,800</td>
                                <td>Rs. 57,600 - 85,900</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Large Office (80-120 Employees)</td>
                                <td>Rs. 66,800 - 1,32,000</td>
                                <td>Rs. 76,200 - 1,42,000</td>
                                <td>Rs. 86,500 - 1,61,800</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Enterprise Solutions (120+ Employees)</td>
                                <td colspan="3" class="text-center fw-bold text-danger">Custom Quote (Call <?= esc($phone) ?>)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Tab 4: Bike & Car Vehicle Transport Rates -->
            <div class="tab-pane fade" id="tab-vehicle" role="tabpanel" aria-labelledby="tab-vehicle-tab">
                <h3 class="h5 fw-bold text-dark mb-2">Bike &amp; Car Transport Charges at <?= esc($cityName) ?></h3>
                <p class="small text-muted mb-4">Insured enclosed vehicle carriers, customized wooden crating for two-wheelers, and live GPS tracking.</p>
                <div class="table-responsive">
                    <table class="rt-table-modern">
                        <thead>
                            <tr>
                                <th>Vehicle Type</th>
                                <th>150 - 400 km</th>
                                <th>400 - 800 km</th>
                                <th>800 - 1,300 km</th>
                                <th>1,300 - 1,800 km</th>
                                <th>1,800 - 2,500 km</th>
                                <th>2,500+ km</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-bold">Motorcycle Transport</td>
                                <td>Rs. 2,800 - 6,200</td>
                                <td>Rs. 3,700 - 7,400</td>
                                <td>Rs. 4,800 - 9,100</td>
                                <td>Rs. 6,900 - 12,500</td>
                                <td>Rs. 8,000 - 13,800</td>
                                <td>Rs. 9,000 - 15,900</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Compact Car Transport</td>
                                <td>Rs. 6,300 - 11,500</td>
                                <td>Rs. 8,100 - 14,600</td>
                                <td>Rs. 10,200 - 17,800</td>
                                <td>Rs. 12,400 - 20,900</td>
                                <td>Rs. 14,500 - 23,800</td>
                                <td>Rs. 16,700 - 27,300</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">SUV Transport</td>
                                <td>Rs. 8,900 - 14,200</td>
                                <td>Rs. 11,300 - 17,500</td>
                                <td>Rs. 13,800 - 20,100</td>
                                <td>Rs. 16,500 - 24,700</td>
                                <td>Rs. 18,900 - 28,400</td>
                                <td>Rs. 21,500 - 32,000</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Luxury Vehicle Transport</td>
                                <td colspan="6" class="text-center fw-bold text-danger">Customized Quote (Contact <?= esc($phone) ?>)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Tab 5: Storage Solutions -->
            <div class="tab-pane fade" id="tab-storage" role="tabpanel" aria-labelledby="tab-storage-tab">
                <h3 class="h5 fw-bold text-dark mb-2">Secure Storage Solutions in <?= esc($cityName) ?></h3>
                <p class="small text-muted mb-4">Affordable warehousing and storage services with 24/7 security, climate control, and flexible lease terms.</p>
                <div class="table-responsive">
                    <table class="rt-table-modern">
                        <thead>
                            <tr>
                                <th>Storage Type</th>
                                <th>Monthly Charges</th>
                                <th>Capacity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-bold">Compact Home Storage (1BHK)</td>
                                <td>Rs. 2,900 / month</td>
                                <td>15 - 25 Boxes</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Family Home Storage (2BHK)</td>
                                <td>Rs. 3,900 / month</td>
                                <td>25 - 35 Boxes</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Large Home Storage (3BHK+)</td>
                                <td>Rs. 5,100 / month</td>
                                <td>35 - 50 Boxes</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Small Box (0.5m³)</td>
                                <td>Rs. 300 / month</td>
                                <td>Document / Small Goods</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Medium Box (1m³)</td>
                                <td>Rs. 500 / month</td>
                                <td>General Cartons</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Large Box (1.5m³)</td>
                                <td>Rs. 650 / month</td>
                                <td>Bulky Household Items</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Two-Wheeler Storage</td>
                                <td>Rs. 650 - Rs. 1,400 / month</td>
                                <td>1 Bike / Scooter</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Hatchback Car Storage</td>
                                <td>Rs. 2,200 - Rs. 3,000 / month</td>
                                <td>1 Compact Car</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Sedan Car Storage</td>
                                <td>Rs. 2,900 - Rs. 4,000 / month</td>
                                <td>1 Sedan</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">SUV / Commercial Vehicle</td>
                                <td>Rs. 3,800 - Rs. 4,500 / month</td>
                                <td>1 SUV / Van</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================================
     5. DETAILED SERVICES IN CITY (FROM OFFICIAL SITE TEXT)
     ========================================================================= -->
<section class="py-5 bg-light border-bottom">
    <div class="container py-2 py-lg-4">
        <!-- Section Header -->
        <div class="text-center mx-auto mb-5 section-header-wrap">
            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-2">
                Specialized Solutions
            </span>
            <h2 class="section-title fw-bolder mb-3"><?= esc($cityName) ?> Packing and Moving Services</h2>
            <p class="section-subtitle text-muted">
                Our experts offer safe Packing and moving services in <?= esc($cityName) ?> using Wardrobe Boxes, Plastic Crates, Foam Sheets, Corrugated Rolls, Bubble wraps, Blankets, Thermocol, and Wooden Frames.
            </p>
        </div>

        <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
            <!-- 1. Office Relocation -->
            <div class="col">
                <div class="rt-detail-card">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="rt-detail-icon"><i class="bi bi-briefcase-fill"></i></div>
                        <h3 class="rt-detail-title">Office Relocation in <?= esc($cityName) ?></h3>
                    </div>
                    <p class="rt-detail-desc">
                        Seamless Corporate or commercial moving solutions. Our team of experts ensures safe movement of printers, monitors, laptops, desktops, and electrical appliances. To ensure zero downtime, we take care of furniture dismantling and reassembly.
                    </p>
                </div>
            </div>

            <!-- 2. Household Shifting -->
            <div class="col">
                <div class="rt-detail-card">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="rt-detail-icon"><i class="bi bi-house-door-fill"></i></div>
                        <h3 class="rt-detail-title">Household Shifting in <?= esc($cityName) ?></h3>
                    </div>
                    <p class="rt-detail-desc">
                        Reliable services for residential home relocation in <?= esc($cityName) ?>. Be it 1BHK, 2BHK, 3BHK, 4BHK, or a bungalow, we are trained to handle every type of residential moving with multi-layer bubble wrap protection.
                    </p>
                </div>
            </div>

            <!-- 3. Car Transportation -->
            <div class="col">
                <div class="rt-detail-card">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="rt-detail-icon"><i class="bi bi-car-front-fill"></i></div>
                        <h3 class="rt-detail-title">Car Transportation in <?= esc($cityName) ?></h3>
                    </div>
                    <p class="rt-detail-desc">
                        With modern covered car carrier trailers, we ensure safe vehicle relocation. Years of experience handling all types of car transportation, be it SUVs, Sedans, or Hatchbacks with door-to-door delivery and transit insurance.
                    </p>
                </div>
            </div>

            <!-- 4. Bike Shifting -->
            <div class="col">
                <div class="rt-detail-card">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="rt-detail-icon"><i class="bi bi-bicycle"></i></div>
                        <h3 class="rt-detail-title">Bike Shifting Services in <?= esc($cityName) ?></h3>
                    </div>
                    <p class="rt-detail-desc">
                        Inexpensive services for Bike transport in <?= esc($cityName) ?>. Our team handles every type of two-wheeler relocation with custom wooden crating and bubble wrap so your motorcycle arrives scratch-free.
                    </p>
                </div>
            </div>

            <!-- 5. IBA Approved Packers -->
            <div class="col">
                <div class="rt-detail-card">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="rt-detail-icon"><i class="bi bi-patch-check-fill"></i></div>
                        <h3 class="rt-detail-title">IBA Approved Packers in <?= esc($cityName) ?></h3>
                    </div>
                    <p class="rt-detail-desc">
                        Top IBA-approved packers and movers in <?= esc($cityName) ?> offering reliable services along with authentic IBA-approved bills meeting all norms of the Indian Bank's Association for official relocation claims.
                    </p>
                </div>
            </div>

            <!-- 6. Insurance & Furniture Moving -->
            <div class="col">
                <div class="rt-detail-card">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="rt-detail-icon"><i class="bi bi-shield-check"></i></div>
                        <h3 class="rt-detail-title">Transit Insurance &amp; Furniture Moving</h3>
                    </div>
                    <p class="rt-detail-desc">
                        Among the few movers in <?= esc($cityName) ?> to provide 100% goods transit insurance. We also specialize in heavy or delicate furniture de-assembling, safe packing, and punctual doorstep shifting.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     6. LOCAL AUTHORITY & SEARCH INTENT MATRIX (OFFICIAL PAGE TEXT)
     ========================================================================= -->
<section class="py-5 bg-white border-bottom">
    <div class="container py-2 py-lg-4">
        <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
            <div class="col">
                <div class="rt-matrix-card">
                    <h3 class="rt-matrix-title"><i class="bi bi-award me-2"></i>Professional Packers and Movers <?= esc($cityName) ?></h3>
                    <p class="rt-matrix-desc">
                        If you are searching for Professional Moving services in <?= esc($cityName) ?>, trust Radhika Thakre Packers. We move with efficient, dedicated handymen and background-checked ground crews to guarantee safety.
                    </p>
                </div>
            </div>

            <div class="col">
                <div class="rt-matrix-card">
                    <h3 class="rt-matrix-title"><i class="bi bi-geo-alt me-2"></i>Local Packers and Movers <?= esc($cityName) ?></h3>
                    <p class="rt-matrix-desc">
                        Familiar with the local <?= esc($cityName) ?> environment, road routes, and society regulations to provide you with seamless local city shifting and local city-to-city relocation with unmatched expertise.
                    </p>
                </div>
            </div>

            <div class="col">
                <div class="rt-matrix-card">
                    <h3 class="rt-matrix-title"><i class="bi bi-search me-2"></i><?= esc($cityName) ?> Packers and Movers Near Me</h3>
                    <p class="rt-matrix-desc">
                        We are here to answer your query for Packers and Movers near me in <?= esc($cityName) ?>. Radhika Thakre Packers offers smooth, reliable doorstep moving experiences across all neighborhoods.
                    </p>
                </div>
            </div>

            <div class="col">
                <div class="rt-matrix-card">
                    <h3 class="rt-matrix-title"><i class="bi bi-box2-heart me-2"></i><?= esc($cityName) ?> Packers for Fragile Items</h3>
                    <p class="rt-matrix-desc">
                        Specialized glass moving and fragile care in <?= esc($cityName) ?>. We handle electronics, antique arts, crockery, delicate chandeliers, and smart TVs with customized wooden crating.
                    </p>
                </div>
            </div>

            <div class="col">
                <div class="rt-matrix-card">
                    <h3 class="rt-matrix-title"><i class="bi bi-tags me-2"></i><?= esc($cityName) ?> Price Comparison</h3>
                    <p class="rt-matrix-desc">
                        Distance, volume, and service tier are vital factors affecting moving costs. Radhika Thakre Packers offers affordable rates to make relocation stress-free. Call us now for a Free Quote!
                    </p>
                </div>
            </div>

            <div class="col">
                <div class="rt-matrix-contact-card">
                    <div>
                        <h3 class="rt-matrix-contact-title"><i class="bi bi-telephone-outbound me-2"></i>Instant Contact in <?= esc($cityName) ?></h3>
                        <p class="rt-matrix-contact-desc">
                            Speak with our relocation officer directly or message us on WhatsApp for a zero-cost doorstep shifting survey in <?= esc($cityName) ?>.
                        </p>
                    </div>
                    <a <?= $phonehtml ?> class="btn btn-sm btn-danger rounded-pill fw-bold text-white px-3 align-self-start">
                        Call <?= esc($phone) ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     7. MOST SEARCHED FAQS FOR CITY (EXACT 8 FAQS FROM OFFICIAL SITE)
     ========================================================================= -->
<section class="section-faqs py-5 bg-light position-relative border-bottom">
    <div class="container py-2 py-lg-4">
        <!-- Section Header -->
        <div class="text-center mx-auto mb-5 section-header-wrap">
            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-2">
                Help &amp; Queries
            </span>
            <h2 class="section-title fw-bolder mb-3">Most Searched FAQs for <?= esc($cityName) ?></h2>
            <p class="section-subtitle text-muted">
                Frequently asked questions regarding packing materials, insurance, last-minute booking, and vehicle shifting in <?= esc($cityName) ?>.
            </p>
        </div>

        <div class="row g-3">
            <!-- Column 1 -->
            <div class="col-lg-6">
                <div class="accordion faq-accordion-v2" id="faqCol1">
                    <!-- FAQ 1 -->
                    <div class="accordion-item border rounded-3 mb-3 overflow-hidden shadow-sm">
                        <h3 class="accordion-header" id="hFaq1">
                            <button class="accordion-button fw-bold py-3 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#cColFaq1" aria-expanded="true" aria-controls="cColFaq1">
                                <span class="faq-icon-pill me-3 d-inline-flex align-items-center justify-content-center rounded-circle flex-shrink-0"><i class="bi bi-question-lg"></i></span>
                                <span>What services does Radhika Thakre Packers and Movers provide?</span>
                            </button>
                        </h3>
                        <div id="cColFaq1" class="accordion-collapse collapse show" aria-labelledby="hFaq1" data-bs-parent="#faqCol1">
                            <div class="accordion-body px-4 pb-4 pt-2 text-muted lh-base small">
                                Our services include household shifting services, office moving services, car transportation and shifting services, bike moving services as well as storage services. We offer all types of moving services serving <?= esc($cityName) ?> as well as other parts of India.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item border rounded-3 mb-3 overflow-hidden shadow-sm">
                        <h3 class="accordion-header" id="hFaq2">
                            <button class="accordion-button fw-bold py-3 px-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cColFaq2" aria-expanded="false" aria-controls="cColFaq2">
                                <span class="faq-icon-pill me-3 d-inline-flex align-items-center justify-content-center rounded-circle flex-shrink-0"><i class="bi bi-question-lg"></i></span>
                                <span>Is the security of my property guaranteed during the moving process?</span>
                            </button>
                        </h3>
                        <div id="cColFaq2" class="accordion-collapse collapse" aria-labelledby="hFaq2" data-bs-parent="#faqCol1">
                            <div class="accordion-body px-4 pb-4 pt-2 text-muted lh-base small">
                                We provide free quality packing substances and hire only well-trained personnel to handle your belongings carefully. Our team is professionally trained to pack your goods to ensure they are safely loaded and unloaded to reach the destination.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="accordion-item border rounded-3 mb-3 overflow-hidden shadow-sm">
                        <h3 class="accordion-header" id="hFaq3">
                            <button class="accordion-button fw-bold py-3 px-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cColFaq3" aria-expanded="false" aria-controls="cColFaq3">
                                <span class="faq-icon-pill me-3 d-inline-flex align-items-center justify-content-center rounded-circle flex-shrink-0"><i class="bi bi-question-lg"></i></span>
                                <span>Are you able to manage the last-minute movements?</span>
                            </button>
                        </h3>
                        <div id="cColFaq3" class="accordion-collapse collapse" aria-labelledby="hFaq3" data-bs-parent="#faqCol1">
                            <div class="accordion-body px-4 pb-4 pt-2 text-muted lh-base small">
                                Well, of course, we understand that sometimes things have to be rushed and actions should be taken immediately. We ensure to meet the needs of customers who book at the last minute and the moving is done in the most efficient manner.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="accordion-item border rounded-3 mb-3 overflow-hidden shadow-sm">
                        <h3 class="accordion-header" id="hFaq4">
                            <button class="accordion-button fw-bold py-3 px-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cColFaq4" aria-expanded="false" aria-controls="cColFaq4">
                                <span class="faq-icon-pill me-3 d-inline-flex align-items-center justify-content-center rounded-circle flex-shrink-0"><i class="bi bi-question-lg"></i></span>
                                <span>In which cities or state does it offer?</span>
                            </button>
                        </h3>
                        <div id="cColFaq4" class="accordion-collapse collapse" aria-labelledby="hFaq4" data-bs-parent="#faqCol1">
                            <div class="accordion-body px-4 pb-4 pt-2 text-muted lh-base small">
                                We offer Interstate moving services within <?= esc($cityName) ?> and in all major cities across India. We have everything and everyone that we need to easily assist with local and interstate moving services.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Column 2 -->
            <div class="col-lg-6">
                <div class="accordion faq-accordion-v2" id="faqCol2">
                    <!-- FAQ 5 -->
                    <div class="accordion-item border rounded-3 mb-3 overflow-hidden shadow-sm">
                        <h3 class="accordion-header" id="hFaq5">
                            <button class="accordion-button fw-bold py-3 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#cColFaq5" aria-expanded="true" aria-controls="cColFaq5">
                                <span class="faq-icon-pill me-3 d-inline-flex align-items-center justify-content-center rounded-circle flex-shrink-0"><i class="bi bi-question-lg"></i></span>
                                <span>Is there any insurance for my things during the transportation?</span>
                            </button>
                        </h3>
                        <div id="cColFaq5" class="accordion-collapse collapse show" aria-labelledby="hFaq5" data-bs-parent="#faqCol2">
                            <div class="accordion-body px-4 pb-4 pt-2 text-muted lh-base small">
                                Yes, we provide an insurance cover that enhances the security of your property during transport. Our team will help you decide on the insurance plan that meets your needs and requirements.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="accordion-item border rounded-3 mb-3 overflow-hidden shadow-sm">
                        <h3 class="accordion-header" id="hFaq6">
                            <button class="accordion-button fw-bold py-3 px-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cColFaq6" aria-expanded="false" aria-controls="cColFaq6">
                                <span class="faq-icon-pill me-3 d-inline-flex align-items-center justify-content-center rounded-circle flex-shrink-0"><i class="bi bi-question-lg"></i></span>
                                <span>How can I book a moving service?</span>
                            </button>
                        </h3>
                        <div id="cColFaq6" class="accordion-collapse collapse" aria-labelledby="hFaq6" data-bs-parent="#faqCol2">
                            <div class="accordion-body px-4 pb-4 pt-2 text-muted lh-base small">
                                By accessing our website and filling out a contact form, calling us at <?= esc($phone) ?>, or emailing, we provide you with a quote. Once we collect all details of your move, our expert team offers you a zero-cost estimate.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 7 -->
                    <div class="accordion-item border rounded-3 mb-3 overflow-hidden shadow-sm">
                        <h3 class="accordion-header" id="hFaq7">
                            <button class="accordion-button fw-bold py-3 px-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cColFaq7" aria-expanded="false" aria-controls="cColFaq7">
                                <span class="faq-icon-pill me-3 d-inline-flex align-items-center justify-content-center rounded-circle flex-shrink-0"><i class="bi bi-question-lg"></i></span>
                                <span>How do I prepare for the move?</span>
                            </button>
                        </h3>
                        <div id="cColFaq7" class="accordion-collapse collapse" aria-labelledby="hFaq7" data-bs-parent="#faqCol2">
                            <div class="accordion-body px-4 pb-4 pt-2 text-muted lh-base small">
                                Before moving, it is advisable to rearrange your belongings and eliminate unnecessary items. Be sure to mark your boxes to avoid confusion, and let us know if you have placed fragile items. Our team assists throughout the process.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 8 -->
                    <div class="accordion-item border rounded-3 mb-3 overflow-hidden shadow-sm">
                        <h3 class="accordion-header" id="hFaq8">
                            <button class="accordion-button fw-bold py-3 px-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cColFaq8" aria-expanded="false" aria-controls="cColFaq8">
                                <span class="faq-icon-pill me-3 d-inline-flex align-items-center justify-content-center rounded-circle flex-shrink-0"><i class="bi bi-question-lg"></i></span>
                                <span>Can you explain how you manage the movement of cars and bikes?</span>
                            </button>
                        </h3>
                        <div id="cColFaq8" class="accordion-collapse collapse" aria-labelledby="hFaq8" data-bs-parent="#faqCol2">
                            <div class="accordion-body px-4 pb-4 pt-2 text-muted lh-base small">
                                Your vehicles are transported using specialized carriers and hydraulic equipment to minimize cases of damage. We ensure your car or bike is loaded and delivered to the destination in the exact condition it was handed over.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     8. RELEVANT KEYWORDS IN CITY (OFFICIAL SEARCH KEYWORDS CLOUD)
     ========================================================================= -->
<section class="py-5 bg-white border-bottom">
    <div class="container py-2">
        <div class="card border-0 rounded-4 shadow-sm p-4 p-md-5 bg-light">
            <div class="d-flex align-items-center gap-2 mb-3">
                <i class="bi bi-search text-danger fs-4"></i>
                <h3 class="h5 fw-bold mb-0 text-dark">Relevant Keywords in <?= esc($cityName) ?></h3>
            </div>
            <p class="small text-muted mb-4">
                Popular relocation search terms and services used by customers in <?= esc($cityName) ?>:
            </p>
            <div class="d-flex flex-wrap">
                <span class="rt-keyword-pill">Packers and movers near me <?= esc($cityName) ?></span>
                <span class="rt-keyword-pill">Top movers in <?= esc($cityName) ?></span>
                <span class="rt-keyword-pill">Cheap movers in <?= esc($cityName) ?></span>
                <span class="rt-keyword-pill">Top 5 movers in <?= esc($cityName) ?></span>
                <span class="rt-keyword-pill">International moving companies in <?= esc($cityName) ?></span>
                <span class="rt-keyword-pill">House removals <?= esc($cityName) ?></span>
                <span class="rt-keyword-pill">Moving services near <?= esc($cityName) ?></span>
                <span class="rt-keyword-pill">Affordable movers <?= esc($cityName) ?></span>
                <span class="rt-keyword-pill">Local movers in <?= esc($cityName) ?></span>
                <span class="rt-keyword-pill">Professional packers in <?= esc($cityName) ?></span>
                <span class="rt-keyword-pill"><?= esc($cityName) ?> best moving companies</span>
                <span class="rt-keyword-pill">Reliable movers in <?= esc($cityName) ?></span>
                <span class="rt-keyword-pill">Home shifting <?= esc($cityName) ?></span>
                <span class="rt-keyword-pill">Office movers <?= esc($cityName) ?></span>
                <span class="rt-keyword-pill">Best relocation services in <?= esc($cityName) ?></span>
                <span class="rt-keyword-pill"><?= esc($cityName) ?> packers movers company</span>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     9. NEARBY CITIES IN STATE (INTERNAL LINKING)
     ========================================================================= -->
<?php if (!empty($nearbyCities)): ?>
<section class="py-5 bg-light border-bottom">
    <div class="container py-2">
        <div class="card border-0 rounded-4 shadow-sm p-4 p-md-5 bg-white">
            <div class="d-flex align-items-center gap-2 mb-3">
                <i class="bi bi-geo-alt-fill text-danger fs-4"></i>
                <h3 class="h5 fw-bold mb-0 text-dark">Other Cities Covered in <?= esc($stateName) ?></h3>
            </div>
            <p class="small text-muted mb-4">
                Explore our verified moving and logistics branch network across neighboring cities in <?= esc($stateName) ?>:
            </p>
            <div class="d-flex flex-wrap gap-2">
                <?php foreach ($nearbyCities as $nc): 
                    $nName = is_array($nc) ? ($nc['nm'] ?? 'City') : (string)$nc;
                    $nSlug = strtolower(str_replace(' ', '-', $nName));
                ?>
                    <a href="<?= site_url('city/' . $stateSlug . '/' . $nSlug) ?>" class="btn btn-sm btn-outline-secondary rounded-pill px-3 py-2 fw-semibold">
                        <?= esc($nName) ?> Movers
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>


<!-- =========================================================================
     INTERACTIVE CALCULATOR JAVASCRIPT (MATCHED TO OFFICIAL FORMULA)
     ========================================================================= -->
<script>
function runRtCalculator() {
    var type = document.getElementById("rtCalcType").value;
    var dist = parseInt(document.getElementById("rtCalcDist").value);
    
    var baseCosts = {
        "1BHK": 10000,
        "2BHK": 15000,
        "3BHK": 20000,
        "4BHK": 25000,
        "car": 12000,
        "bike": 5000
    };
    
    var distanceFactors = {
        50: 5,
        500: 10,
        1000: 15,
        1500: 20,
        2500: 25
    };
    
    var base = baseCosts[type] || 10000;
    var factor = distanceFactors[dist] || 10;
    var total = base + (base * factor / 100);
    
    document.getElementById("rtCalcFare").innerText = "₹" + total.toLocaleString('en-IN', {minimumFractionDigits: 2, maximumFractionDigits: 2});
}

function slidePricingTabs(direction) {
    var container = document.getElementById("pricingTabsScrollContainer");
    if (!container) return;
    var step = 220;
    container.scrollBy({ left: (direction === 'left' ? -step : step), behavior: 'smooth' });
}

document.addEventListener("DOMContentLoaded", function() {
    var tabBtns = document.querySelectorAll("#pricingTabs .nav-link");
    tabBtns.forEach(function(btn) {
        btn.addEventListener("shown.bs.tab", function(e) {
            e.target.scrollIntoView({ behavior: "smooth", inline: "center", block: "nearest" });
        });
    });
});
</script>
