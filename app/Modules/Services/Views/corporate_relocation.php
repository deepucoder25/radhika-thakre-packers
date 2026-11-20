<?php
/**
 * Corporate Relocation Services Page - Radhika Thakre Packers and Movers
 * Content: 100% matched to https://radhikathakrepackersmovers.com/corporate-relocation-in-indore
 * Layout: Modern, fully responsive, zero inline styles, unified .service-* CSS
 */

$title       = "Corporate Relocation";
$description = "Enterprise corporate relocation solutions by " . $company3 . ". Full-scale office moving, data centers, branch transitions, employee shifting, and IBA-approved corporate logistics.";
$path        = [
    ['label' => 'Home', 'url' => site_url('/')],
    ['label' => 'Corporate Relocation'],
];
?>
<?= view('Modules\Template\Views\page_banner', compact('title', 'description', 'path')) ?>

<!-- Schema.org JSON-LD for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Corporate Relocation Services",
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
                        <i class="bi bi-briefcase-fill text-danger"></i> Enterprise Relocation Solutions
                    </span>
                    <h1 class="service-main-heading">
                        Best Corporate Relocation Services in Indore &amp; India
                    </h1>
                    <p class="service-lead-text">
                        <strong><?= esc($company3) ?></strong> are your trusted, IBA-approved partners for corporate relocation across India. We specialize in seamless enterprise moving, branch office transfers, data center relocations, and comprehensive employee relocation programs.
                    </p>
                    <p class="service-body-text">
                        Backed by <strong>IBA approvals</strong> and ISO 9001:2015 certification, we manage large-scale corporate moves with systematic project management, dedicated relocation managers, and minimal disruption to your daily operations and client deliverables.
                    </p>
                    <p class="service-body-text">
                        Our fleet of high-capacity container trucks and skilled ground engineers handle everything from executive cabins and conference room audio-visual equipment to complex cabling, network racks, and multi-floor commercial facilities.
                    </p>
                    <p class="service-body-text mb-0">
                        Whether you are shifting an emerging tech startup or relocating a national corporate headquarters across states, Radhika Thakre Packers and Movers provides end-to-end relocation management, GST-compliant invoicing, and dedicated logistics oversight.
                    </p>

                    <!-- Quick Metrics Grid -->
                    <div class="service-stats-grid">
                        <div class="service-stat-item">
                            <div class="service-stat-num">Enterprise</div>
                            <div class="service-stat-label">Project Management</div>
                        </div>
                        <div class="service-stat-item">
                            <div class="service-stat-num">IBA</div>
                            <div class="service-stat-label">Approved Firm</div>
                        </div>
                        <div class="service-stat-item">
                            <div class="service-stat-num">Phased</div>
                            <div class="service-stat-label">Shift Scheduling</div>
                        </div>
                        <div class="service-stat-item">
                            <div class="service-stat-num">Full GST</div>
                            <div class="service-stat-label">Invoicing &amp; Audits</div>
                        </div>
                    </div>
                </div>

                <!-- 2. Capabilities -->
                <div class="service-overview-card">
                    <h2 class="service-section-title">
                        <i class="bi bi-stars text-danger"></i>
                        Comprehensive Corporate Relocation Services
                    </h2>
                    <p class="text-muted small mb-4">
                        Customized relocation modules tailored to meet organizational compliance, security, and operational deadlines:
                    </p>

                    <div class="service-features-grid">
                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-diagram-2"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Turnkey Project Management</h3>
                                <p class="service-feature-desc">
                                    Our senior logistics director collaborates directly with your HR, admin, and facility leadership to design timeline blueprints and phased shifts.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Employee Relocation Programs</h3>
                                <p class="service-feature-desc">
                                    Personalized home shifting packages for transferring executives, managers, and staff with direct corporate billing or expense reimbursement.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-hdd-network"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Server &amp; Network Infrastructure</h3>
                                <p class="service-feature-desc">
                                    Trained technical handlers ensure careful disconnection, anti-static foam crating, shockproof transit, and re-racking of server cabinets.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-file-earmark-lock"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Classified Archive Records</h3>
                                <p class="service-feature-desc">
                                    High-security sealed plastic bins and barcodes ensure absolute confidentiality for financial audits, client agreements, and HR records.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-clock-history"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Phased Weekend Rollouts</h3>
                                <p class="service-feature-desc">
                                    Moves are scheduled in sequential department batches across weekends, ensuring critical business services maintain 100% uptime.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-receipt-cutoff"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Complete GST &amp; Transit Claims</h3>
                                <p class="service-feature-desc">
                                    Formal e-way bills, tax invoices, and comprehensive corporate transit policies underwritten by trusted national insurance firms.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Workflow -->
                <div class="service-overview-card">
                    <h2 class="service-section-title">
                        <i class="bi bi-diagram-3-fill text-danger"></i>
                        Our 5-Step Corporate Relocation Methodology
                    </h2>
                    <p class="text-muted small mb-4">
                        Enterprise-grade operational protocol from initial consultation to final sign-off:
                    </p>

                    <div class="service-process-list">
                        <div class="service-process-step">
                            <div class="service-step-badge">1</div>
                            <div>
                                <h3 class="service-step-title">Initial Scope Assessment &amp; SLA Formulation</h3>
                                <p class="service-step-desc">
                                    We meet with your relocation committee to understand employee headcount, IT infrastructure, key deadlines, and sign a formal Service Level Agreement.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">2</div>
                            <div>
                                <h3 class="service-step-title">Asset Tagging &amp; Barcode Inventory Compilation</h3>
                                <p class="service-step-desc">
                                    Every desk, monitor, laptop, and file bin receives a scannable barcoded floor tag matched to the destination floor blueprint.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">3</div>
                            <div>
                                <h3 class="service-step-title">Anti-Static Packaging &amp; Heavy Cargo Lashing</h3>
                                <p class="service-step-desc">
                                    Electronics and glass partitions are packaged with anti-static bubble materials, loaded with hydraulic lifters, and lashed securely.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">4</div>
                            <div>
                                <h3 class="service-step-title">Escorted High-Security GPS Container Transit</h3>
                                <p class="service-step-desc">
                                    Dedicated closed trucks move in synchronized convoy under GPS monitoring and direct supervisor escort to your new corporate premises.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">5</div>
                            <div>
                                <h3 class="service-step-title">Floor Placement, Debris Clear-out &amp; Formal Audits</h3>
                                <p class="service-step-desc">
                                    Our team positions workstations, checks off inventory items, hauls away packing materials, and signs off department by department.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. Rate Table -->
                <div class="service-overview-card">
                    <h2 class="service-section-title">
                        <i class="bi bi-tag-fill text-danger"></i>
                        Corporate Relocation Indicative Pricing
                    </h2>
                    <p class="text-muted small mb-4">
                        Contract and project-based commercial relocation rates:
                    </p>

                    <div class="service-table-card">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th>Project Scale</th>
                                        <th>Indore City Commercial Relocation</th>
                                        <th>National Interstate Move</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Small Enterprise (10 – 25 Staff)</strong></td>
                                        <td class="text-danger fw-bold">₹18,000 – ₹35,000</td>
                                        <td class="text-dark fw-bold">₹55,000 – ₹95,000</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Mid-Size Corporate (25 – 60 Staff)</strong></td>
                                        <td class="text-danger fw-bold">₹40,000 – ₹75,000</td>
                                        <td class="text-dark fw-bold">₹1,20,000 – ₹2,40,000</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Large Enterprise (60 – 150 Staff)</strong></td>
                                        <td class="text-danger fw-bold">₹85,000 – ₹1,60,000</td>
                                        <td class="text-dark fw-bold">₹2,80,000 – ₹5,50,000</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Multi-Floor Campus (150+ Staff)</strong></td>
                                        <td class="text-danger fw-bold">Custom Contract RFP</td>
                                        <td class="text-dark fw-bold">Master Logistics Agreement</td>
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
                        Frequently Asked Questions: Corporate Relocation
                    </h2>

                    <div class="accordion" id="corpFaqAccordion">
                        <div class="accordion-item service-faq-item">
                            <h3 class="accordion-header" id="crFaq1">
                                <button class="accordion-button service-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#crFaqCol1" aria-expanded="true" aria-controls="crFaqCol1">
                                    Can <?= esc($company3) ?> handle employee household moves along with office relocation?
                                </button>
                            </h3>
                            <div id="crFaqCol1" class="accordion-collapse collapse show" aria-labelledby="crFaq1" data-bs-parent="#corpFaqAccordion">
                                <div class="accordion-body service-faq-body">
                                    Yes. We provide complete employee mobility packages including household shifting, vehicle transportation, and temporary storage with direct billing to your company.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item service-faq-item">
                            <h3 class="accordion-header" id="crFaq2">
                                <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#crFaqCol2" aria-expanded="false" aria-controls="crFaqCol2">
                                    What is the procedure for handling sensitive IT equipment and data servers?
                                </button>
                            </h3>
                            <div id="crFaqCol2" class="accordion-collapse collapse" aria-labelledby="crFaq2" data-bs-parent="#corpFaqAccordion">
                                <div class="accordion-body service-faq-body">
                                    Our technicians disconnect and pack servers using anti-static materials and shockproof crating. Dedicated air-suspension trucks with GPS monitoring ensure total hardware integrity.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Sidebar -->
            <div class="col-lg-4">
                <?= view('Modules\Services\Views\service_sidebar', array_merge(get_defined_vars(), [
                    'activeService' => 'corporate-relocation',
                    'activeTitle'   => 'Corporate Relocation'
                ])) ?>
            </div>
        </div>
    </div>
</section>
