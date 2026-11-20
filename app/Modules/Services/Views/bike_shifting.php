<?php
/**
 * Bike Shifting Services Page - Radhika Thakre Packers and Movers
 * Content: 100% matched to https://radhikathakrepackersmovers.com/bike-shifting-in-indore
 * Layout: Modern, fully responsive, zero inline styles, unified .service-* CSS
 */

$title       = "Bike Shifting";
$description = "Safe and dependable two-wheeler & motorcycle transportation by " . $company3 . ". Customized wooden crate packaging, mirror protection, doorstep pickup & delivery across India.";
$path        = [
    ['label' => 'Home', 'url' => site_url('/')],
    ['label' => 'Bike Shifting'],
];
?>
<?= view('Modules\Template\Views\page_banner', compact('title', 'description', 'path')) ?>

<!-- Schema.org JSON-LD for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Bike Transportation Services",
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
                <!-- 1. Overview -->
                <div class="service-overview-card">
                    <span class="service-badge-pill">
                        <i class="bi bi-bicycle text-danger"></i> Two-Wheeler Transportation
                    </span>
                    <h1 class="service-main-heading">
                        Best Bike Shifting Services in Indore &amp; Across India
                    </h1>
                    <p class="service-lead-text">
                        Bike relocation by <strong><?= esc($company3) ?></strong> are amongst the best bike movers for bike transportation in India anywhere. With the help of our efficient Bike Relocation Services near me, you can solve all your two-wheeler relocation issues with total safety and peace of mind.
                    </p>
                    <p class="service-body-text">
                        We at Radhika Thakre Packers and Movers are one of the most trustworthy Bike Relocation Services Providers that have got all approvals from <strong>IBA</strong>. Trust us for the most reliable and affordable Bike Relocation Services; our local movers and packers' services are punctual, effective, and completely damage-free.
                    </p>
                    <p class="service-body-text">
                        The best removalists in India are with us and through our Bike Relocation Services, we provide the best experience. If you are searching for authentic and dependable Bike Relocation Services in India, our IBA-approved services guarantee safe delivery without scratches or dents on your motorcycle.
                    </p>
                    <p class="service-body-text mb-0">
                        Our specialized two-wheeler carrier fleet and customized wooden crating ensure that your motorcycle, scooter, or sports bike arrives in showroom condition. Choose Radhika Thakre Packers and Movers for the most satisfying bike transport service near you.
                    </p>

                    <!-- Quick Metrics Grid -->
                    <div class="service-stats-grid">
                        <div class="service-stat-item">
                            <div class="service-stat-num">Wooden</div>
                            <div class="service-stat-label">Crate Packaging</div>
                        </div>
                        <div class="service-stat-item">
                            <div class="service-stat-num">IBA</div>
                            <div class="service-stat-label">Approved Operator</div>
                        </div>
                        <div class="service-stat-item">
                            <div class="service-stat-num">100%</div>
                            <div class="service-stat-label">Damage Protection</div>
                        </div>
                        <div class="service-stat-item">
                            <div class="service-stat-num">Doorstep</div>
                            <div class="service-stat-label">Handover</div>
                        </div>
                    </div>
                </div>

                <!-- 2. Capabilities -->
                <div class="service-overview-card">
                    <h2 class="service-section-title">
                        <i class="bi bi-stars text-danger"></i>
                        Why Choose Our Two-Wheeler Shifting
                    </h2>
                    <p class="text-muted small mb-4">
                        We handle scooters, cruiser bikes, and high-end superbikes with customized cushioning and restraint systems:
                    </p>

                    <div class="service-features-grid">
                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-box"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Tailored Wooden Frame Crating</h3>
                                <p class="service-feature-desc">
                                    A sturdy wooden exterior cage is constructed around your motorcycle to withstand in-transit shocks and pressure during highway transit.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-layers-fill"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Foam &amp; Bubble Cushioning</h3>
                                <p class="service-feature-desc">
                                    Headlights, fuel tank, chrome exhausts, rearview mirrors, and indicators are wrapped with multi-layer high-density bubble foam sheets.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-fuel-pump"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Zero Fuel Leakage Safeguards</h3>
                                <p class="service-feature-desc">
                                    Protocols include safely draining fuel down to minimal required levels, preventing fire hazards, and ensuring carburetors remain dry.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-link-45deg"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Heavy-Duty Tie-Down Straps</h3>
                                <p class="service-feature-desc">
                                    Industrial-strength ratchet belts lock the motorcycle onto container flooring, preventing swaying, tilting, or vibration damage.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Two-Wheeler Transit Insurance</h3>
                                <p class="service-feature-desc">
                                    Enjoy full financial protection with government-approved transit insurance covering road incidents, overturns, and natural perils.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-door-open-fill"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Doorstep Pickup &amp; Destination Drop</h3>
                                <p class="service-feature-desc">
                                    No need to visit crowded train parcel yards or truck godowns — we pick up from your doorstep in Indore and deliver to your new address.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Workflow -->
                <div class="service-overview-card">
                    <h2 class="service-section-title">
                        <i class="bi bi-diagram-3-fill text-danger"></i>
                        Our 5-Step Bike Transportation Workflow
                    </h2>
                    <p class="text-muted small mb-4">
                        Proven sequential process ensuring your bike travels safely:
                    </p>

                    <div class="service-process-list">
                        <div class="service-process-step">
                            <div class="service-step-badge">1</div>
                            <div>
                                <h3 class="service-step-title">Doorstep Inspection &amp; Document Collection</h3>
                                <p class="service-step-desc">
                                    We verify bike body condition, check RC copy and insurance, take photos for records, and document initial handover condition.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">2</div>
                            <div>
                                <h3 class="service-step-title">Precision Foam &amp; Air Bubble Wrapping</h3>
                                <p class="service-step-desc">
                                    Every painted panel, mirror, headlamp, and speedometer console is wrapped with multi-layer protective foam and stretch film.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">3</div>
                            <div>
                                <h3 class="service-step-title">Custom Wooden Crate Construction</h3>
                                <p class="service-step-desc">
                                    A tailored wooden crate is secured around the bike with heavy steel nails and reinforcement braces for total highway protection.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">4</div>
                            <div>
                                <h3 class="service-step-title">Closed Container Express Transit</h3>
                                <p class="service-step-desc">
                                    The crated bike is loaded onto specialized container carriers and secured with tension belts for rapid, weather-protected transit.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">5</div>
                            <div>
                                <h3 class="service-step-title">Uncrating &amp; Final Handover</h3>
                                <p class="service-step-desc">
                                    Our delivery team safely uncrates the bike at your new residence, inspects it with you, and collects sign-off on the delivery receipt.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. Rate Table -->
                <div class="service-overview-card">
                    <h2 class="service-section-title">
                        <i class="bi bi-tag-fill text-danger"></i>
                        Bike Shifting Estimated Rate Chart
                    </h2>
                    <p class="text-muted small mb-4">
                        Estimated pricing for bike and scooter transport from Indore:
                    </p>

                    <div class="service-table-card">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th>Two-Wheeler Type</th>
                                        <th>Regional (Up to 500 km)</th>
                                        <th>Long Distance (1000 to 2000+ km)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Scooter / Moped (Activa, Jupiter, Access)</strong></td>
                                        <td class="text-danger fw-bold">₹2,500 – ₹4,200</td>
                                        <td class="text-dark fw-bold">₹5,000 – ₹7,500</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Standard Commuter (Splendor, Shine, Pulsar)</strong></td>
                                        <td class="text-danger fw-bold">₹3,000 – ₹4,800</td>
                                        <td class="text-dark fw-bold">₹5,500 – ₹8,500</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Cruiser (Royal Enfield Classic, Bullet, Meteor)</strong></td>
                                        <td class="text-danger fw-bold">₹4,000 – ₹6,500</td>
                                        <td class="text-dark fw-bold">₹7,000 – ₹10,500</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Sports / Superbike (Duke, Ninja, BMW, Harley)</strong></td>
                                        <td class="text-danger fw-bold">₹5,500 – ₹8,500</td>
                                        <td class="text-dark fw-bold">₹9,500 – ₹14,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p class="small text-muted mb-0">
                        <em>*Note: Includes wooden crating packaging, doorstep pickup, loading, highway toll taxes, and transit insurance.</em>
                    </p>
                </div>

                <!-- 5. FAQs -->
                <div class="service-overview-card">
                    <h2 class="service-section-title">
                        <i class="bi bi-question-circle-fill text-danger"></i>
                        Frequently Asked Questions: Bike Shifting
                    </h2>

                    <div class="accordion" id="bikeFaqAccordion">
                        <div class="accordion-item service-faq-item">
                            <h3 class="accordion-header" id="bFaq1">
                                <button class="accordion-button service-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#bFaqCol1" aria-expanded="true" aria-controls="bFaqCol1">
                                    Should I keep fuel inside my bike tank before handing it over?
                                </button>
                            </h3>
                            <div id="bFaqCol1" class="accordion-collapse collapse show" aria-labelledby="bFaq1" data-bs-parent="#bikeFaqAccordion">
                                <div class="accordion-body service-faq-body">
                                    Please keep only minimal fuel (approx. 0.5 to 1 liter) in the fuel tank — just enough to drive to the nearest petrol station at your destination. For safety and highway regulations, surplus fuel is drained before loading.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item service-faq-item">
                            <h3 class="accordion-header" id="bFaq2">
                                <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bFaqCol2" aria-expanded="false" aria-controls="bFaqCol2">
                                    How is my bike protected against scratches during transit?
                                </button>
                            </h3>
                            <div id="bFaqCol2" class="accordion-collapse collapse" aria-labelledby="bFaq2" data-bs-parent="#bikeFaqAccordion">
                                <div class="accordion-body service-faq-body">
                                    We apply a 3-layer protection protocol: inner foam wrap on mirrors, handlebars, and exhaust; a secondary layer of bubble wrap around the tank and fairing; and an exterior custom wooden crate that prevents external impacts.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item service-faq-item">
                            <h3 class="accordion-header" id="bFaq3">
                                <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bFaqCol3" aria-expanded="false" aria-controls="bFaqCol3">
                                    How long does bike transportation take from Indore?
                                </button>
                            </h3>
                            <div id="bFaqCol3" class="accordion-collapse collapse" aria-labelledby="bFaq3" data-bs-parent="#bikeFaqAccordion">
                                <div class="accordion-body service-faq-body">
                                    Transit times typically range from 2 to 4 days for neighboring states (Maharashtra, Gujarat, Rajasthan) and 4 to 6 days for southern or eastern metros (Bangalore, Chennai, Kolkata, Patna).
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Sidebar -->
            <div class="col-lg-4">
                <?= view('Modules\Services\Views\service_sidebar', array_merge(get_defined_vars(), [
                    'activeService' => 'bike-transportation',
                    'activeTitle'   => 'Bike Shifting'
                ])) ?>
            </div>
        </div>
    </div>
</section>
