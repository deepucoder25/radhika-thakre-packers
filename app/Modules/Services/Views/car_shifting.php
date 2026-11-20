<?php
/**
 * Car Shifting Services Page - Radhika Thakre Packers and Movers
 * Content: 100% matched to https://radhikathakrepackersmovers.com/car-shifting-in-indore
 * Layout: Modern, fully responsive, zero inline styles, unified .service-* CSS
 */

$title       = "Car Shifting";
$description = "Reliable car carrier and vehicle transportation by " . $company3 . ". Enclosed hydraulic car trailers, scratch-free transit, live GPS tracking, and 100% vehicle transit insurance.";
$path        = [
    ['label' => 'Home', 'url' => site_url('/')],
    ['label' => 'Car Shifting'],
];
?>
<?= view('Modules\Template\Views\page_banner', compact('title', 'description', 'path')) ?>

<!-- Schema.org JSON-LD for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Car Transportation Services",
  "provider": {
    "@type": "LocalBusiness",
    "name": "<?= esc($company3) ?>",
    "telephone": "<?= esc($phone) ?>"
  },
  "areaServed": {
    "@type": "City",
    "name": "Indore"
  },
  "description": "<?= esc($description) ?>"
}
</script>

<section class="service-page-section">
    <div class="container">
        <div class="row g-4 g-lg-5">
            <div class="col-lg-8">
                <!-- 1. Overview & Authentic Text -->
                <div class="service-overview-card">
                    <span class="service-badge-pill">
                        <i class="bi bi-car-front-fill text-danger"></i> Dedicated Car Carrier Logistics
                    </span>
                    <h1 class="service-main-heading">
                        Best Car Shifting Services in Indore &amp; Across India
                    </h1>
                    <p class="service-lead-text">
                        For the best Car Moving Services in India choose <strong><?= esc($company3) ?></strong>, which offers safe and secure packing and moving services for your valuable automobiles and passenger vehicles.
                    </p>
                    <p class="service-body-text">
                        Being one of the topmost Car Relocation Services providers, we are also proficient in managing Car Relocation Services near me with superior competence. Solutions approved by <strong>IBA</strong> are offered by us and thus any type of Car Relocation Services requirements can be met by us without friction.
                    </p>
                    <p class="service-body-text">
                        Call us for the best and most economically favorable Car Relocation Services to live your life with the best removalists in the market. Our local moving companies and packers services simplify the moving process, thus making us a reputable company.
                    </p>
                    <p class="service-body-text">
                        Looking for genuine Car Relocation Services in India, then Radhika Thakre Packers and Movers is here — you can trust Car Relocation Services that are not fake. We are the most wanted Car Relocation Services that offer economical packers and movers service with superior quality and dedicated closed hydraulic car trailers.
                    </p>
                    <p class="service-body-text mb-0">
                        Our IBA-approved Car Relocation Services mean that your move will be as smooth as it can be. If you require hassle-free Car Relocation Services or superior Car Relocation Services, then our specialized position makes us one of the leading 5 Best Car Relocation Services for Packers &amp; Movers in India.
                    </p>

                    <!-- Quick Metrics Grid -->
                    <div class="service-stats-grid">
                        <div class="service-stat-item">
                            <div class="service-stat-num">Closed</div>
                            <div class="service-stat-label">Hydraulic Carrier</div>
                        </div>
                        <div class="service-stat-item">
                            <div class="service-stat-num">0 Scratch</div>
                            <div class="service-stat-label">Safety Guarantee</div>
                        </div>
                        <div class="service-stat-item">
                            <div class="service-stat-num">100%</div>
                            <div class="service-stat-label">Marine Insured</div>
                        </div>
                        <div class="service-stat-item">
                            <div class="service-stat-num">Door-Door</div>
                            <div class="service-stat-label">Pickup &amp; Drop</div>
                        </div>
                    </div>
                </div>

                <!-- 2. Capabilities -->
                <div class="service-overview-card">
                    <h2 class="service-section-title">
                        <i class="bi bi-stars text-danger"></i>
                        Why Transport Your Car with <?= esc($company3) ?>
                    </h2>
                    <p class="text-muted small mb-4">
                        State-of-the-art vehicle transit infrastructure designed to keep your car safe from highway debris, weather, and wear:
                    </p>

                    <div class="service-features-grid">
                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-truck-front"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Enclosed Covered Trailers</h3>
                                <p class="service-feature-desc">
                                    Double-decker covered car carriers safeguard paintwork against flying highway gravel, dirt, torrential rains, and sunlight exposure.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-camera"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Digital Scratch Inspection Report</h3>
                                <p class="service-feature-desc">
                                    Before loading, a detailed condition report logs existing minor scratches, fuel levels, and odometer reading with customer sign-off.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-lock-fill"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Hydraulic Wheel Stopper Clamps</h3>
                                <p class="service-feature-desc">
                                    Vehicles are locked in position using specialized tire locks, steel stopper chocks, and high-tensile safety safety straps.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Satellite GPS Live Tracking</h3>
                                <p class="service-feature-desc">
                                    Monitor your vehicle's live interstate transit progress with real-time checkpoint updates until safe arrival at your destination.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Comprehensive Marine Transit Cover</h3>
                                <p class="service-feature-desc">
                                    Every automobile relocation is backed by complete insurance against transit accidents, physical damages, and highway hazards.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-house-door"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Doorstep Pickup &amp; Safe Delivery</h3>
                                <p class="service-feature-desc">
                                    Our licensed driver picks up your car from your doorstep in Indore and delivers it directly to your designated porch in any Indian city.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Workflow -->
                <div class="service-overview-card">
                    <h2 class="service-section-title">
                        <i class="bi bi-diagram-3-fill text-danger"></i>
                        Our 5-Step Car Transportation Process
                    </h2>
                    <p class="text-muted small mb-4">
                        Systematic chain of custody from doorstep handover to delivery:
                    </p>

                    <div class="service-process-list">
                        <div class="service-process-step">
                            <div class="service-step-badge">1</div>
                            <div>
                                <h3 class="service-step-title">Doorstep Vehicle Inspection &amp; Document Verification</h3>
                                <p class="service-step-desc">
                                    We inspect your vehicle, record odometer and fuel levels, check RC copy and insurance documentation, and issue an official consignment note.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">2</div>
                            <div>
                                <h3 class="service-step-title">Protective Wrapping for Mirrors &amp; Bumpers</h3>
                                <p class="service-step-desc">
                                    Side-view mirrors, spoilers, and delicate chrome accents are wrapped with protective foam and film to prevent surface scuffs.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">3</div>
                            <div>
                                <h3 class="service-step-title">Hydraulic Ramp Loading &amp; Wheel Chocking</h3>
                                <p class="service-step-desc">
                                    Your vehicle is driven cautiously onto the specialized car trailer ramp and anchored with 4-point wheel security lashing belts.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">4</div>
                            <div>
                                <h3 class="service-step-title">Safe Highway Express Transit with GPS Updates</h3>
                                <p class="service-step-desc">
                                    Our double-driver logistics crew transports your vehicle along primary expressways with round-the-clock location tracking.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">5</div>
                            <div>
                                <h3 class="service-step-title">Destination Inspection &amp; Doorstep Handover</h3>
                                <p class="service-step-desc">
                                    The vehicle is unloaded on flat ground, re-inspected against the initial report, and handed over to you in spotless condition.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. Rate Table -->
                <div class="service-overview-card">
                    <h2 class="service-section-title">
                        <i class="bi bi-tag-fill text-danger"></i>
                        Car Transportation Estimated Rate Chart
                    </h2>
                    <p class="text-muted small mb-4">
                        Estimated pricing for dedicated car carrier transit from Indore across major corridors:
                    </p>

                    <div class="service-table-card">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th>Car Category</th>
                                        <th>Medium Route (Up to 700 km)</th>
                                        <th>Long Distance (1000 to 2000+ km)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Hatchback (Swift, i10, WagonR)</strong></td>
                                        <td class="text-danger fw-bold">₹7,500 – ₹11,000</td>
                                        <td class="text-dark fw-bold">₹13,500 – ₹18,000</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Sedan (Dzire, City, Verna, Ciaz)</strong></td>
                                        <td class="text-danger fw-bold">₹9,000 – ₹13,000</td>
                                        <td class="text-dark fw-bold">₹15,000 – ₹21,000</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Compact SUV (Brezza, Creta, Nexon)</strong></td>
                                        <td class="text-danger fw-bold">₹10,500 – ₹15,000</td>
                                        <td class="text-dark fw-bold">₹17,000 – ₹24,000</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Full-Size / Luxury SUV (Fortuner, XUV700)</strong></td>
                                        <td class="text-danger fw-bold">₹13,000 – ₹18,500</td>
                                        <td class="text-dark fw-bold">₹21,000 – ₹29,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p class="small text-muted mb-0">
                        <em>*Note: Includes doorstep pickup, loading onto enclosed car carriers, highway tolls, and transit insurance.</em>
                    </p>
                </div>

                <!-- 5. FAQs -->
                <div class="service-overview-card">
                    <h2 class="service-section-title">
                        <i class="bi bi-question-circle-fill text-danger"></i>
                        Frequently Asked Questions: Car Shifting
                    </h2>

                    <div class="accordion" id="carFaqAccordion">
                        <div class="accordion-item service-faq-item">
                            <h3 class="accordion-header" id="cFaq1">
                                <button class="accordion-button service-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#cFaqCol1" aria-expanded="true" aria-controls="cFaqCol1">
                                    Is my car transported inside an open truck or a closed carrier?
                                </button>
                            </h3>
                            <div id="cFaqCol1" class="accordion-collapse collapse show" aria-labelledby="cFaq1" data-bs-parent="#carFaqAccordion">
                                <div class="accordion-body service-faq-body">
                                    At <?= esc($company3) ?>, we strictly operate enclosed, customized car carrier trailers equipped with hydraulic ramps and wheel stoppers, protecting your vehicle completely from weather and road gravel.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item service-faq-item">
                            <h3 class="accordion-header" id="cFaq2">
                                <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cFaqCol2" aria-expanded="false" aria-controls="cFaqCol2">
                                    What documents are required to book car transportation?
                                </button>
                            </h3>
                            <div id="cFaqCol2" class="accordion-collapse collapse" aria-labelledby="cFaq2" data-bs-parent="#carFaqAccordion">
                                <div class="accordion-body service-faq-body">
                                    You will need to provide a copy of your Vehicle Registration Certificate (RC), valid vehicle insurance policy, PUC certificate, and owner ID proof (Aadhar or Driving License).
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item service-faq-item">
                            <h3 class="accordion-header" id="cFaq3">
                                <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cFaqCol3" aria-expanded="false" aria-controls="cFaqCol3">
                                    Can I place personal bags or household luggage inside the car trunk?
                                </button>
                            </h3>
                            <div id="cFaqCol3" class="accordion-collapse collapse" aria-labelledby="cFaq3" data-bs-parent="#carFaqAccordion">
                                <div class="accordion-body service-faq-body">
                                    You may keep light luggage (up to 30-40 kg) in the trunk space. However, we advise against keeping valuables, electronics, or flammable substances inside the car during long-distance transit.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Sidebar -->
            <div class="col-lg-4">
                <?= view('Modules\Services\Views\service_sidebar', array_merge(get_defined_vars(), [
                    'activeService' => 'car-transportation',
                    'activeTitle'   => 'Car Shifting'
                ])) ?>
            </div>
        </div>
    </div>
</section>
