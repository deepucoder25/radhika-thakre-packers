<?php
/**
 * Packing and Unpacking Services Page - Radhika Thakre Packers and Movers
 * Content: 100% matched to https://radhikathakrepackersmovers.com/indore-packing-unpacking
 * Layout: Modern, fully responsive, zero inline styles, unified .service-* CSS
 */

$title       = "Packing and Unpacking";
$description = "Professional packing and unpacking services by " . $company3 . ". 5-layer heavy-duty corrugated cartons, bubble wrap, custom wooden crating, room-by-room labeling, and neat unpacking assistance.";
$path        = [
    ['label' => 'Home', 'url' => site_url('/')],
    ['label' => 'Packing & Unpacking'],
];
?>
<?= view('Modules\Template\Views\page_banner', compact('title', 'description', 'path')) ?>

<!-- Schema.org JSON-LD for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Packing and Unpacking Services",
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
                        <i class="bi bi-box-seam text-danger"></i> 5-Layer Military-Grade Packaging
                    </span>
                    <h1 class="service-main-heading">
                        Best Packing &amp; Unpacking Services in Indore &amp; Across India
                    </h1>
                    <p class="service-lead-text">
                        Professional packing and unpacking services by <strong><?= esc($company3) ?></strong> ensure maximum safety for your household and commercial goods during moves of any distance. We utilize high-grade packaging materials including 5-layer corrugated sheets, air-bubble wrap, edge guards, stretch film, and heavy-duty tape.
                    </p>
                    <p class="service-body-text">
                        In India, verified packers and movers deal with all forms of packing and moving services. Our professional team assists in end-to-end removals, be it from the best removalists or frictionless relocations with <strong>IBA approval</strong>.
                    </p>
                    <p class="service-body-text">
                        Here, we present you the professional and economical Packers and Movers services for your goods transport with complete security. Our experienced packing technicians categorize, itemize, and box each item systematically. Fragile items like crockery, crystal glassware, artwork, and TVs receive specialized wooden crating.
                    </p>
                    <p class="service-body-text mb-0">
                        At the destination, our crew assists with systematic unpacking, placement, and debris removal, ensuring you settle into your new premises effortlessly. Looking for tension-free Packers and Movers services? Choose Radhika Thakre Packers and Movers for guaranteed protection.
                    </p>

                    <!-- Quick Metrics Grid -->
                    <div class="service-stats-grid">
                        <div class="service-stat-item">
                            <div class="service-stat-num">5-Layer</div>
                            <div class="service-stat-label">Corrugated Shield</div>
                        </div>
                        <div class="service-stat-item">
                            <div class="service-stat-num">Virgin</div>
                            <div class="service-stat-label">Air Bubble Wrap</div>
                        </div>
                        <div class="service-stat-item">
                            <div class="service-stat-num">Custom</div>
                            <div class="service-stat-label">Wooden Crates</div>
                        </div>
                        <div class="service-stat-item">
                            <div class="service-stat-num">Neat</div>
                            <div class="service-stat-label">Debris Cleanup</div>
                        </div>
                    </div>
                </div>

                <!-- 2. Capabilities -->
                <div class="service-overview-card">
                    <h2 class="service-section-title">
                        <i class="bi bi-stars text-danger"></i>
                        Advanced Packaging Materials &amp; Techniques
                    </h2>
                    <p class="text-muted small mb-4">
                        We invest in certified materials engineered to absorb impact and prevent surface friction:
                    </p>

                    <div class="service-features-grid">
                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-layers"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">5-Layer Heavy Duty Cartons</h3>
                                <p class="service-feature-desc">
                                    High burst-strength corrugated boxes customized for kitchenware, heavy books, garments, and fragile collectibles.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-circle-square"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Virgin Air Bubble Cushioning</h3>
                                <p class="service-feature-desc">
                                    Premium double-layer bubble wrap shields porcelain, ceramics, bone china, picture frames, and fragile electronics.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-hammer"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Custom Wooden Crating</h3>
                                <p class="service-feature-desc">
                                    Heavy-gauge timber crates fabricated on-site for OLED/LED TVs, marble tops, antique sculptures, and delicate chandeliers.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-tags-fill"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Room-by-Room Labeling</h3>
                                <p class="service-feature-desc">
                                    Every box is clearly tagged with room destination (Kitchen, Master Bed, Living) and content summary for fast unpacking.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-shield-shaded"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Corrugated Edge Corner Guards</h3>
                                <p class="service-feature-desc">
                                    Reinforced angle boards protect vulnerable corners of sofas, wardrobes, dressers, and conference tables from impacts.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-trash3-fill"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Unpacking &amp; Waste Removal</h3>
                                <p class="service-feature-desc">
                                    Our packers unpack cartons at your new address, place belongings where you prefer, and collect all scrap paper and plastic.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Workflow -->
                <div class="service-overview-card">
                    <h2 class="service-section-title">
                        <i class="bi bi-diagram-3-fill text-danger"></i>
                        Our 5-Step Packaging Protocol
                    </h2>
                    <p class="text-muted small mb-4">
                        Rigorous step-by-step packing technique that guarantees zero in-transit damage:
                    </p>

                    <div class="service-process-list">
                        <div class="service-process-step">
                            <div class="service-step-badge">1</div>
                            <div>
                                <h3 class="service-step-title">Categorization &amp; Fragile Item Sorting</h3>
                                <p class="service-step-desc">
                                    Goods are categorized into fragile (glass, electronics), semi-fragile (appliances, wood), and standard bulk goods (linen, books).
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">2</div>
                            <div>
                                <h3 class="service-step-title">Primary Foam &amp; Bubble Cushion Wrapping</h3>
                                <p class="service-step-desc">
                                    Individual items receive direct protection with air bubble wrap and polyethylene foam to absorb sudden transit shocks.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">3</div>
                            <div>
                                <h3 class="service-step-title">Box Packing with Thermocol Void Fillers</h3>
                                <p class="service-step-desc">
                                    Cartons are filled with cushioning pellets or foam peanuts so items cannot shift or rub against each other during transit.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">4</div>
                            <div>
                                <h3 class="service-step-title">Heavy-Duty Taping &amp; Stretch Film Sealing</h3>
                                <p class="service-step-desc">
                                    Cartons are sealed across all seams with high-tensile waterproof tape and wrapped in waterproof stretch film.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">5</div>
                            <div>
                                <h3 class="service-step-title">Destination Unpacking, Inspection &amp; Clearing</h3>
                                <p class="service-step-desc">
                                    Our team unboxes items room by room, inspects each piece with you, and disposes of all packing waste neatly.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. Rate Table -->
                <div class="service-overview-card">
                    <h2 class="service-section-title">
                        <i class="bi bi-tag-fill text-danger"></i>
                        Packing Materials &amp; Labor Pricing Guide
                    </h2>
                    <p class="text-muted small mb-4">
                        Estimated standalone packing and unpacking rates:
                    </p>

                    <div class="service-table-card">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th>Scope</th>
                                        <th>Material Cost + Labor</th>
                                        <th>Unpacking &amp; Setup Service</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>1 BHK Household</strong></td>
                                        <td class="text-danger fw-bold">₹2,800 – ₹4,500</td>
                                        <td class="text-dark fw-bold">Included / Nominal</td>
                                    </tr>
                                    <tr>
                                        <td><strong>2 BHK Household</strong></td>
                                        <td class="text-danger fw-bold">₹4,500 – ₹7,500</td>
                                        <td class="text-dark fw-bold">Included / Nominal</td>
                                    </tr>
                                    <tr>
                                        <td><strong>3 BHK Household</strong></td>
                                        <td class="text-danger fw-bold">₹7,000 – ₹11,000</td>
                                        <td class="text-dark fw-bold">Included / Nominal</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Custom Wooden Crating (per TV/Mirror)</strong></td>
                                        <td class="text-danger fw-bold">₹1,200 – ₹2,500</td>
                                        <td class="text-dark fw-bold">Full Destination Uncrating</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- 5. FAQs -->
                <div class="service-overview-card">
                    <h2 class="service-section-title">
                        <i class="bi bi-question-circle-fill text-danger"></i>
                        Frequently Asked Questions: Packing &amp; Unpacking
                    </h2>

                    <div class="accordion" id="packFaqAccordion">
                        <div class="accordion-item service-faq-item">
                            <h3 class="accordion-header" id="pFaq1">
                                <button class="accordion-button service-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#pFaqCol1" aria-expanded="true" aria-controls="pFaqCol1">
                                    Do I need to arrange any boxes or packing tape myself?
                                </button>
                            </h3>
                            <div id="pFaqCol1" class="accordion-collapse collapse show" aria-labelledby="pFaq1" data-bs-parent="#packFaqAccordion">
                                <div class="accordion-body service-faq-body">
                                    No, you do not need to arrange anything. Our crew arrives with all necessary 5-layer cartons, bubble rolls, thermocol, shrink film, wardrobe boxes, and heavy-duty tape rolls.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item service-faq-item">
                            <h3 class="accordion-header" id="pFaq2">
                                <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pFaqCol2" aria-expanded="false" aria-controls="pFaqCol2">
                                    Can I hire <?= esc($company3) ?> just for packing if I have my own vehicle?
                                </button>
                            </h3>
                            <div id="pFaqCol2" class="accordion-collapse collapse" aria-labelledby="pFaq2" data-bs-parent="#packFaqAccordion">
                                <div class="accordion-body service-faq-body">
                                    Yes, we offer standalone professional packing services. Our certified packers will pack your entire home with top-tier materials even if you arrange separate logistics.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Sidebar -->
            <div class="col-lg-4">
                <?= view('Modules\Services\Views\service_sidebar', array_merge(get_defined_vars(), [
                    'activeService' => 'packing-moving',
                    'activeTitle'   => 'Packing & Unpacking'
                ])) ?>
            </div>
        </div>
    </div>
</section>
