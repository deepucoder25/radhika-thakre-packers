<?php
/**
 * Storage and Warehouse Services Page - Radhika Thakre Packers and Movers
 * Content: 100% matched to https://radhikathakrepackersmovers.com/indore-warehouse
 * Layout: Modern, fully responsive, zero inline styles, unified .service-* CSS
 */

$title       = "Storage & Warehouse";
$description = "Secure household and commercial warehouse storage services by " . $company3 . ". 24x7 CCTV surveillance, fire-safety compliance, moisture and pest-controlled bays, flexible short & long-term rentals.";
$path        = [
    ['label' => 'Home', 'url' => site_url('/')],
    ['label' => 'Storage & Warehouse'],
];
?>
<?= view('Modules\Template\Views\page_banner', compact('title', 'description', 'path')) ?>

<!-- Schema.org JSON-LD for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Warehousing and Storage Services",
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
                        <i class="bi bi-archive-fill text-danger"></i> 24x7 CCTV Monitored Warehousing
                    </span>
                    <h1 class="service-main-heading">
                        Best Storage &amp; Warehousing Services in Indore &amp; India
                    </h1>
                    <p class="service-lead-text">
                        Warehouse Storage Services is another premier service provided by <strong><?= esc($company3) ?></strong> for customers spread across India. Our best self-storage services are designed to ensure your household furniture, business goods, and commercial equipment are well-secured and kept in pristine condition for short or extended durations.
                    </p>
                    <p class="service-body-text">
                        We are immensely pleased to offer exquisite Warehouse Storage Services which comprises Warehouse Storage Services near me and we guarantee that our <strong>IBA-approved service</strong> will be a perfect one.
                    </p>
                    <p class="service-body-text">
                        The most experienced removalists are hired with us; therefore, we are the best option for your storage requirements as we offer a smooth, stress-free storage process. In case you need warehouse storage services, approach Radhika Thakre Packers and Movers and embrace our highest standard storage facilities.
                    </p>
                    <p class="service-body-text mb-0">
                        Our company is recognized as one of the best Warehouse Storage Services in India so when it comes to storing valuable possessions, we offer the best and the most reasonable prices in the market. Our warehousing solutions are specifically useful for clients looking for secure, fraudulent-free, pest-controlled, and verified services.
                    </p>

                    <!-- Quick Metrics Grid -->
                    <div class="service-stats-grid">
                        <div class="service-stat-item">
                            <div class="service-stat-num">24x7</div>
                            <div class="service-stat-label">CCTV Security</div>
                        </div>
                        <div class="service-stat-item">
                            <div class="service-stat-num">100%</div>
                            <div class="service-stat-label">Pest &amp; Moisture Safe</div>
                        </div>
                        <div class="service-stat-item">
                            <div class="service-stat-num">Daily/Mo</div>
                            <div class="service-stat-label">Flexible Rentals</div>
                        </div>
                        <div class="service-stat-item">
                            <div class="service-stat-num">Insured</div>
                            <div class="service-stat-label">Warehouse Policy</div>
                        </div>
                    </div>
                </div>

                <!-- 2. Capabilities -->
                <div class="service-overview-card">
                    <h2 class="service-section-title">
                        <i class="bi bi-stars text-danger"></i>
                        Warehouse Storage Facility Features
                    </h2>
                    <p class="text-muted small mb-4">
                        State-of-the-art warehousing infrastructure built to industrial specifications:
                    </p>

                    <div class="service-features-grid">
                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-shield-lock-fill"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">24x7 Guards &amp; HD CCTV</h3>
                                <p class="service-feature-desc">
                                    Round-the-clock security personnel, perimeter fencing, electronic access gates, and high-definition infrared security cameras.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-droplet-slash"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Moisture &amp; Termite Control</h3>
                                <p class="service-feature-desc">
                                    Elevated wooden pallets, regular chemical pest treatment, and dehumidification prevent mold, termites, or dampness from reaching wood.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-qr-code-scan"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Barcode Inventory Management</h3>
                                <p class="service-feature-desc">
                                    Every stored package is cataloged with unique barcode tags and digital photo records, allowing instant retrieval at any time.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-fire"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Fire Extinguisher &amp; Sprinklers</h3>
                                <p class="service-feature-desc">
                                    Compliant with national fire safety norms, including automatic smoke sensors, fire alarms, and industrial hydrants.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-calendar2-range"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Flexible Rental Terms</h3>
                                <p class="service-feature-desc">
                                    Store for 2 weeks during home renovation, 6 months during an overseas assignment, or multi-year corporate storage with easy renewals.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-truck-flatbed"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Doorstep Pickup &amp; Re-Delivery</h3>
                                <p class="service-feature-desc">
                                    We pack at your current house, move items to the warehouse, and deliver them to your new location whenever you are ready.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Workflow -->
                <div class="service-overview-card">
                    <h2 class="service-section-title">
                        <i class="bi bi-diagram-3-fill text-danger"></i>
                        How Our Warehousing Storage Works
                    </h2>

                    <div class="service-process-list">
                        <div class="service-process-step">
                            <div class="service-step-badge">1</div>
                            <div>
                                <h3 class="service-step-title">Doorstep Packing &amp; Detailed Itemized Audit</h3>
                                <p class="service-step-desc">
                                    Our packers wrap all items with moisture-resistant stretch film and bubble sheets, compiling a verified storage inventory agreement.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">2</div>
                            <div>
                                <h3 class="service-step-title">Transit to Secured Indore Warehouse Facility</h3>
                                <p class="service-step-desc">
                                    Your goods are moved in sealed container trucks to our centralized warehouse located strategically in Dewas Naka / Indore logistics hub.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">3</div>
                            <div>
                                <h3 class="service-step-title">Pallet Placement &amp; Barcode Allocation</h3>
                                <p class="service-step-desc">
                                    Goods are stacked on individual elevated wooden pallets inside assigned private bays and registered in our warehouse management system.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">4</div>
                            <div>
                                <h3 class="service-step-title">Round-the-Clock Security &amp; Environmental Care</h3>
                                <p class="service-step-desc">
                                    Your consignment remains under 24x7 CCTV monitoring with bi-weekly pest inspections and atmospheric climate protection.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">5</div>
                            <div>
                                <h3 class="service-step-title">Scheduled Dispatch &amp; Doorstep Delivery</h3>
                                <p class="service-step-desc">
                                    Whenever your new home or commercial office is ready, simply notify us 48 hours in advance for prompt doorstep delivery and assembly.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. Rate Table -->
                <div class="service-overview-card">
                    <h2 class="service-section-title">
                        <i class="bi bi-tag-fill text-danger"></i>
                        Monthly Warehouse Storage Rental Plans
                    </h2>
                    <p class="text-muted small mb-4">
                        Affordable monthly storage packages with zero long-term lock-in:
                    </p>

                    <div class="service-table-card">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th>Volume / Space</th>
                                        <th>Monthly Storage Rent</th>
                                        <th>Pickup &amp; Drop Logistics</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Few Boxes / Luggage (Up to 10 Cartons)</strong></td>
                                        <td class="text-danger fw-bold">₹1,200 – ₹1,800 / mo</td>
                                        <td class="text-dark fw-bold">Doorstep Available</td>
                                    </tr>
                                    <tr>
                                        <td><strong>1 BHK Household Furniture &amp; Goods</strong></td>
                                        <td class="text-danger fw-bold">₹2,800 – ₹3,800 / mo</td>
                                        <td class="text-dark fw-bold">Doorstep Available</td>
                                    </tr>
                                    <tr>
                                        <td><strong>2 BHK Household Furniture &amp; Goods</strong></td>
                                        <td class="text-danger fw-bold">₹4,200 – ₹5,800 / mo</td>
                                        <td class="text-dark fw-bold">Doorstep Available</td>
                                    </tr>
                                    <tr>
                                        <td><strong>3 BHK / Commercial Pallet Bays</strong></td>
                                        <td class="text-danger fw-bold">₹6,000 – ₹8,500 / mo</td>
                                        <td class="text-dark fw-bold">Doorstep Available</td>
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
                        Frequently Asked Questions: Storage &amp; Warehouse
                    </h2>

                    <div class="accordion" id="whFaqAccordion">
                        <div class="accordion-item service-faq-item">
                            <h3 class="accordion-header" id="wFaq1">
                                <button class="accordion-button service-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#wFaqCol1" aria-expanded="true" aria-controls="wFaqCol1">
                                    Can I visit the warehouse to inspect my stored goods?
                                </button>
                            </h3>
                            <div id="wFaqCol1" class="accordion-collapse collapse show" aria-labelledby="wFaq1" data-bs-parent="#whFaqAccordion">
                                <div class="accordion-body service-faq-body">
                                    Yes, you are welcome to visit our Dewas Naka Indore storage facility during operational working hours. Please coordinate with our warehouse manager 24 hours prior to your visit.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item service-faq-item">
                            <h3 class="accordion-header" id="wFaq2">
                                <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#wFaqCol2" aria-expanded="false" aria-controls="wFaqCol2">
                                    What is the minimum rental period for storage?
                                </button>
                            </h3>
                            <div id="wFaqCol2" class="accordion-collapse collapse" aria-labelledby="wFaq2" data-bs-parent="#whFaqAccordion">
                                <div class="accordion-body service-faq-body">
                                    Our minimum storage agreement is 15 days. Beyond that, billing is calculated on an easy weekly or monthly renewal basis with zero cancellation penalties.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Sidebar -->
            <div class="col-lg-4">
                <?= view('Modules\Services\Views\service_sidebar', array_merge(get_defined_vars(), [
                    'activeService' => 'warehouse-storage',
                    'activeTitle'   => 'Storage & Warehouse'
                ])) ?>
            </div>
        </div>
    </div>
</section>
