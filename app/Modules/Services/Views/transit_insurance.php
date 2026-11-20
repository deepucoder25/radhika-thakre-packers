<?php
/**
 * Goods Transit Insurance Services Page - Radhika Thakre Packers and Movers
 * Content: 100% matched to https://radhikathakrepackersmovers.com/goods-insurance
 * Layout: Modern, fully responsive, zero inline styles, unified .service-* CSS
 */

$title       = "Goods Transit Insurance";
$description = "100% comprehensive goods transit insurance for household shifting, vehicle transport, and corporate cargo by " . $company3 . ". IBA-approved policy, all-risk coverage, and hassle-free claim settlement.";
$path        = [
    ['label' => 'Home', 'url' => site_url('/')],
    ['label' => 'Goods Transit Insurance'],
];
?>
<?= view('Modules\Template\Views\page_banner', compact('title', 'description', 'path')) ?>

<!-- Schema.org JSON-LD for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Transit Insurance Services",
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
                        <i class="bi bi-shield-fill-check text-danger"></i> 100% Comprehensive All-Risk Policy
                    </span>
                    <h1 class="service-main-heading">
                        Best Goods Transit Insurance Services in Indore &amp; India
                    </h1>
                    <p class="service-lead-text">
                        Transit Insurance Services is offered by <strong><?= esc($company3) ?></strong> for all your valuable household items, commercial consignments, and automobiles shifted anywhere in India. Our safe and secure Transit Insurance Services provide complete financial protection near me with excellence.
                    </p>
                    <p class="service-body-text">
                        As one of the top Transit Insurance Services providers in India, we offer <strong>IBA-approved shifting services</strong> for all types of shifting – get the best and most economical rates for your shifting requirements. Avail the best Transit Insurance Services by hiring us; insurance services offered by our packers and movers are exceptional.
                    </p>
                    <p class="service-body-text">
                        Our efficient and reliable Transit Insurance Services add to our list of best removalists and trusted transit insurance partners, which is why people of India more often search for the best Transit Insurance Services which is us.
                    </p>
                    <p class="service-body-text mb-0">
                        The services that we offer are scam-free and IBA-endorsed Transit Insurance Services that handle relocations in a smooth process from onset to end. Be it hassle-free transit insurance or economical domestic shifting, Radhika Thakre Packers and Movers is one of the top 5 domestic home shifting services packers movers in India.
                    </p>

                    <!-- Quick Metrics Grid -->
                    <div class="service-stats-grid">
                        <div class="service-stat-item">
                            <div class="service-stat-num">All-Risk</div>
                            <div class="service-stat-label">Coverage Scope</div>
                        </div>
                        <div class="service-stat-item">
                            <div class="service-stat-num">IBA</div>
                            <div class="service-stat-label">Approved Partner</div>
                        </div>
                        <div class="service-stat-item">
                            <div class="service-stat-num">Nominal</div>
                            <div class="service-stat-label">Premium Rates</div>
                        </div>
                        <div class="service-stat-item">
                            <div class="service-stat-num">Fast</div>
                            <div class="service-stat-label">Claim Assistance</div>
                        </div>
                    </div>
                </div>

                <!-- 2. Capabilities -->
                <div class="service-overview-card">
                    <h2 class="service-section-title">
                        <i class="bi bi-stars text-danger"></i>
                        Comprehensive Protection Coverage
                    </h2>
                    <p class="text-muted small mb-4">
                        Protect your consignment against unforeseen highway perils, accidents, and environmental events:
                    </p>

                    <div class="service-features-grid">
                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Comprehensive All-Risk Cover</h3>
                                <p class="service-feature-desc">
                                    Covers accidental collision, vehicular overturn, fire, theft, hijacking, and transit water damage from start to finish.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-building-check"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">National Insurance Underwriters</h3>
                                <p class="service-feature-desc">
                                    Our policies are underwritten directly by leading national insurers (National Insurance, Oriental, ICICI Lombard, New India Assurance).
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-percent"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Nominal 1.5% - 3% Premiums</h3>
                                <p class="service-feature-desc">
                                    Transparent premium calculations based strictly on your declared declared goods value with zero arbitrary surcharges.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-file-earmark-medical-fill"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Official Policy Certificate</h3>
                                <p class="service-feature-desc">
                                    A legitimate insurance endorsement certificate with policy number and declared valuation schedule is handed to you before departure.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-speedometer2"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Swift Claim Settlement</h3>
                                <p class="service-feature-desc">
                                    In case of transit damages, our claims desk coordinates surveyor inspection and accelerates formal claim disbursement within 7 to 14 days.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-truck"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Automobile Transit Marine Cover</h3>
                                <p class="service-feature-desc">
                                    Specialized vehicle insurance covering cars and two-wheelers against mechanical transit damages, dents, and highway collisions.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Workflow -->
                <div class="service-overview-card">
                    <h2 class="service-section-title">
                        <i class="bi bi-diagram-3-fill text-danger"></i>
                        Our 5-Step Insurance Claim &amp; Coverage Process
                    </h2>

                    <div class="service-process-list">
                        <div class="service-process-step">
                            <div class="service-step-badge">1</div>
                            <div>
                                <h3 class="service-step-title">Goods Valuation &amp; Inventory Declaration</h3>
                                <p class="service-step-desc">
                                    You list your household appliances, electronics, furniture, or vehicle along with their current market value on our declaration form.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">2</div>
                            <div>
                                <h3 class="service-step-title">Premium Calculation &amp; Policy Endorsement</h3>
                                <p class="service-step-desc">
                                    We calculate the nominal premium, endorse your policy through our accredited insurance partner, and issue a policy certificate.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">3</div>
                            <div>
                                <h3 class="service-step-title">Inspected Transit Journey</h3>
                                <p class="service-step-desc">
                                    Your goods travel in closed container trucks under complete all-risk cover from the point of origin to your destination doorstep.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">4</div>
                            <div>
                                <h3 class="service-step-title">Destination Delivery Receipt Verification</h3>
                                <p class="service-step-desc">
                                    Upon delivery, you inspect your items. In the rare event of transit damage, remarks are noted on the LR/GR delivery receipt.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">5</div>
                            <div>
                                <h3 class="service-step-title">Dedicated Claim Settlement Facilitation</h3>
                                <p class="service-step-desc">
                                    Our claims coordinator submits photographs and receipts to the insurance surveyor, ensuring hassle-free financial compensation.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. Rate Table -->
                <div class="service-overview-card">
                    <h2 class="service-section-title">
                        <i class="bi bi-tag-fill text-danger"></i>
                        Transit Insurance Premium Structure
                    </h2>
                    <p class="text-muted small mb-4">
                        Standard insurance premium slabs regulated by Indian insurance norms:
                    </p>

                    <div class="service-table-card">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th>Declared Valuation</th>
                                        <th>Household Goods Policy (approx.)</th>
                                        <th>Automobile / Vehicle Policy</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Goods Valued Up to ₹1,00,000</strong></td>
                                        <td class="text-danger fw-bold">₹1,500 – ₹2,000</td>
                                        <td class="text-dark fw-bold">₹1,200 (Bikes)</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Goods Valued Up to ₹3,00,000</strong></td>
                                        <td class="text-danger fw-bold">₹3,000 – ₹4,500</td>
                                        <td class="text-dark fw-bold">₹2,500 – ₹3,500 (Cars)</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Goods Valued Up to ₹6,00,000</strong></td>
                                        <td class="text-danger fw-bold">₹6,000 – ₹9,000</td>
                                        <td class="text-dark fw-bold">₹4,000 – ₹6,000 (SUVs)</td>
                                    </tr>
                                    <tr>
                                        <td><strong>High Value / Corporate Shipments</strong></td>
                                        <td class="text-danger fw-bold">1.5% of Declared Value</td>
                                        <td class="text-dark fw-bold">Custom Marine Cover</td>
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
                        Frequently Asked Questions: Transit Insurance
                    </h2>

                    <div class="accordion" id="insFaqAccordion">
                        <div class="accordion-item service-faq-item">
                            <h3 class="accordion-header" id="iFaq1">
                                <button class="accordion-button service-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#iFaqCol1" aria-expanded="true" aria-controls="iFaqCol1">
                                    Why is transit insurance necessary if packers handle goods carefully?
                                </button>
                            </h3>
                            <div id="iFaqCol1" class="accordion-collapse collapse show" aria-labelledby="iFaq1" data-bs-parent="#insFaqAccordion">
                                <div class="accordion-body service-faq-body">
                                    While our 5-layer packaging prevents handling wear, long-distance highway travel involves external risks like vehicle overturning, third-party collisions, fire, or flash floods. Transit insurance ensures 100% financial protection against these perils.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item service-faq-item">
                            <h3 class="accordion-header" id="iFaq2">
                                <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#iFaqCol2" aria-expanded="false" aria-controls="iFaqCol2">
                                    How long do I have to report damages for an insurance claim?
                                </button>
                            </h3>
                            <div id="iFaqCol2" class="accordion-collapse collapse" aria-labelledby="iFaq2" data-bs-parent="#insFaqAccordion">
                                <div class="accordion-body service-faq-body">
                                    Damages must be noted on the delivery receipt upon arrival and reported to your <?= esc($company3) ?> move coordinator with clear photographs within 24 to 48 hours to initiate the surveyor process.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Sidebar -->
            <div class="col-lg-4">
                <?= view('Modules\Services\Views\service_sidebar', array_merge(get_defined_vars(), [
                    'activeService' => 'transit-insurance',
                    'activeTitle'   => 'Goods Transit Insurance'
                ])) ?>
            </div>
        </div>
    </div>
</section>
