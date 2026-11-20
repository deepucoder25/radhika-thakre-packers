<?php
/**
 * Home Shifting Services Page - Radhika Thakre Packers and Movers
 * Content: 100% matched to https://radhikathakrepackersmovers.com/home-shifting-in-indore
 * Layout: Modern, fully responsive, zero inline styles, unified .service-* CSS
 */

$title       = "Home Shifting";
$description = "Top-rated home shifting services by " . $company3 . ". 100% IBA-approved household relocation with 5-layer bubble packing, trained crew, and zero-damage guarantee.";
$path        = [
    ['label' => 'Home', 'url' => site_url('/')],
    ['label' => 'Home Shifting'],
];
?>
<?= view('Modules\Template\Views\page_banner', compact('title', 'description', 'path')) ?>

<!-- Schema.org JSON-LD for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Home Shifting Services",
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

<!-- =========================================================================
     MAIN SERVICE CONTENT SECTION
     ========================================================================= -->
<section class="service-page-section">
    <div class="container">
        <div class="row g-4 g-lg-5">
            <!-- Left Column: Main Service Narrative, Features & Pricing -->
            <div class="col-lg-8">
                <!-- 1. Overview & Authentic Text -->
                <div class="service-overview-card">
                    <span class="service-badge-pill">
                        <i class="bi bi-house-check-fill text-danger"></i> IBA Approved Home Relocation
                    </span>
                    <h1 class="service-main-heading">
                        Best Home Shifting Services in Indore &amp; Across India
                    </h1>
                    <p class="service-lead-text">
                        <strong><?= esc($company3) ?></strong> are experts at providing high-quality Home Shifting Services in India for a smooth, stress-free shift. As a reputed packers and movers company, we deal with comprehensive household shifting services that cater to all different types of residential relocation needs with professional care.
                    </p>
                    <p class="service-body-text">
                        All our services are approved by <strong>IBA</strong>, and therefore, we are the best company involved in Home Shifting Services in India without stress. Avail our home shifting services to get verified professional assistance, dedicated move coordinators, and premium packaging materials tailored for every piece of your home furniture.
                    </p>
                    <p class="service-body-text">
                        Yes, our flawless Home Shifting Services are multifaceted, hence making us the most desirable packing and moving company in India. We boast of being the best packing and moving company near you that is free from any scams, providing economical packers and movers services to you at a faster pace with unmatched safety measures.
                    </p>
                    <p class="service-body-text mb-0">
                        We offer genuine and cheaper Home Shifting Services, via which our clients avail the best removalist services at economical prices. Our IBA-approved home shifting services ensure that, whether is a move for personal or business purposes, is handled professionally with 100% transit insurance.
                    </p>

                    <!-- Quick Metrics Grid -->
                    <div class="service-stats-grid">
                        <div class="service-stat-item">
                            <div class="service-stat-num">5-Layer</div>
                            <div class="service-stat-label">Safety Packing</div>
                        </div>
                        <div class="service-stat-item">
                            <div class="service-stat-num">IBA</div>
                            <div class="service-stat-label">Approved Movers</div>
                        </div>
                        <div class="service-stat-item">
                            <div class="service-stat-num">100%</div>
                            <div class="service-stat-label">Transit Insured</div>
                        </div>
                        <div class="service-stat-item">
                            <div class="service-stat-num">GPS</div>
                            <div class="service-stat-label">Live Tracking</div>
                        </div>
                    </div>
                </div>

                <!-- 2. Key Capabilities / Features -->
                <div class="service-overview-card">
                    <h2 class="service-section-title">
                        <i class="bi bi-stars text-danger"></i>
                        Why Our Home Shifting Stands Apart
                    </h2>
                    <p class="text-muted small mb-4">
                        Discover the specialized household relocation capabilities that ensure your valuable furniture, electronics, and memories arrive in pristine condition:
                    </p>

                    <div class="service-features-grid">
                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-box-seam"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">5-Layer Protective Packaging</h3>
                                <p class="service-feature-desc">
                                    High-density bubble wrap, corrugated sheets, edge protectors, stretch film, and heavy-duty tape protect every item against scratches and vibrations.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-tools"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Furniture Disassembly &amp; Setup</h3>
                                <p class="service-feature-desc">
                                    Expert carpenters carefully dismantle double beds, modular wardrobes, and dining tables, then securely reassemble them at your new address.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-cup-hot"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Fragile Glass &amp; TV Crating</h3>
                                <p class="service-feature-desc">
                                    Specialized wooden cages and multi-layer honeycomb cushioning for LED/OLED smart TVs, delicate chandeliers, crockery, and sacred temple items.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-truck"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Dedicated Closed Container Fleet</h3>
                                <p class="service-feature-desc">
                                    Weatherproof, locked container trucks prevent rainwater seepage, dust, and highway hazards during both local and interstate transits.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">100% Transit Insurance Cover</h3>
                                <p class="service-feature-desc">
                                    Comprehensive all-risk household transit insurance policy underwritten by leading national insurance partners gives you total financial peace of mind.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-check2-circle"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Doorstep Unpacking &amp; Placement</h3>
                                <p class="service-feature-desc">
                                    Our courteous ground team unboxes your cartons, places heavy items in designated rooms, and disposes of all leftover packing debris neatly.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Step-by-Step Household Relocation Workflow -->
                <div class="service-overview-card">
                    <h2 class="service-section-title">
                        <i class="bi bi-diagram-3-fill text-danger"></i>
                        Our 5-Step Home Shifting Workflow
                    </h2>
                    <p class="text-muted small mb-4">
                        We execute every household relocation with military precision and systematic itemized tracking:
                    </p>

                    <div class="service-process-list">
                        <div class="service-process-step">
                            <div class="service-step-badge">1</div>
                            <div>
                                <h3 class="service-step-title">Free Doorstep Survey &amp; Transparent Quote</h3>
                                <p class="service-step-desc">
                                    Our relocation supervisor visits your home or conducts a video survey to assess volume, determine packing requirements, and provide a guaranteed fixed quotation with zero hidden fees.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">2</div>
                            <div>
                                <h3 class="service-step-title">Systematic Multi-Layer Packaging &amp; Labeling</h3>
                                <p class="service-step-desc">
                                    Trained packers wrap every item room-by-room, apply color-coded category labels, and compile a verified consignment inventory sheet before loading.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">3</div>
                            <div>
                                <h3 class="service-step-title">Mechanical Loading with Floor &amp; Door Protection</h3>
                                <p class="service-step-desc">
                                    Heavy furniture and appliances are loaded onto closed containers using hydraulic ramps, hand trolleys, and lashing belts to avoid in-transit friction.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">4</div>
                            <div>
                                <h3 class="service-step-title">Safe GPS-Monitored Highway Transit</h3>
                                <p class="service-step-desc">
                                    Our drivers follow designated express highway corridors while you receive live GPS location milestone alerts through our 24x7 tracking desk.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">5</div>
                            <div>
                                <h3 class="service-step-title">Unloading, Room Placement &amp; Debris Disposal</h3>
                                <p class="service-step-desc">
                                    Upon arrival, our crew unpacks cartons, reassembles beds and tables, places appliances in proper spots, and hauls away all packaging waste.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. Pricing / Rate Estimation Guide Table -->
                <div class="service-overview-card">
                    <h2 class="service-section-title">
                        <i class="bi bi-tag-fill text-danger"></i>
                        Home Shifting Estimated Rate Chart
                    </h2>
                    <p class="text-muted small mb-4">
                        Indicative price slabs for household relocation based on home size and transit distance:
                    </p>

                    <div class="service-table-card">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th>Home Size</th>
                                        <th>Local Shifting (Up to 50 km)</th>
                                        <th>Interstate / Domestic (500+ km)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>1 BHK Home</strong></td>
                                        <td class="text-danger fw-bold">₹4,500 – ₹8,500</td>
                                        <td class="text-dark fw-bold">₹12,000 – ₹18,000</td>
                                    </tr>
                                    <tr>
                                        <td><strong>2 BHK Home</strong></td>
                                        <td class="text-danger fw-bold">₹7,000 – ₹12,500</td>
                                        <td class="text-dark fw-bold">₹16,500 – ₹24,000</td>
                                    </tr>
                                    <tr>
                                        <td><strong>3 BHK Home</strong></td>
                                        <td class="text-danger fw-bold">₹10,500 – ₹16,500</td>
                                        <td class="text-dark fw-bold">₹22,000 – ₹32,000</td>
                                    </tr>
                                    <tr>
                                        <td><strong>4 BHK / Large Villa</strong></td>
                                        <td class="text-danger fw-bold">₹14,000 – ₹22,000</td>
                                        <td class="text-dark fw-bold">₹28,000 – ₹42,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p class="small text-muted mb-0">
                        <em>*Note: Actual costs depend on floor levels, lift availability, distance, and fragile packaging customization. Call our manager for a guaranteed fixed survey quote.</em>
                    </p>
                </div>

                <!-- 5. Frequently Asked Questions (Accordion) -->
                <div class="service-overview-card">
                    <h2 class="service-section-title">
                        <i class="bi bi-question-circle-fill text-danger"></i>
                        Frequently Asked Questions: Home Shifting
                    </h2>

                    <div class="accordion" id="homeFaqAccordion">
                        <div class="accordion-item service-faq-item">
                            <h3 class="accordion-header" id="faqHead1">
                                <button class="accordion-button service-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                                    How early should I book home shifting services with <?= esc($company3) ?>?
                                </button>
                            </h3>
                            <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHead1" data-bs-parent="#homeFaqAccordion">
                                <div class="accordion-body service-faq-body">
                                    We recommend scheduling your move 2 to 4 days in advance for local shifting, and 5 to 7 days ahead for long-distance domestic moves. However, we also cater to urgent same-day emergency moves across Indore based on truck availability.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item service-faq-item">
                            <h3 class="accordion-header" id="faqHead2">
                                <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                    What packaging materials are used for household furniture and electronics?
                                </button>
                            </h3>
                            <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHead2" data-bs-parent="#homeFaqAccordion">
                                <div class="accordion-body service-faq-body">
                                    We utilize premium 5-layer heavy-duty corrugated cartons, Virgin grade air bubble rolls, PE foam sheets, stretch shrink wrap, and reinforced corrugated edge protectors. For fragile mirrors, crystals, and LED TVs, customized wooden crating is built on-site.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item service-faq-item">
                            <h3 class="accordion-header" id="faqHead3">
                                <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                    Are my household goods protected by transit insurance during the move?
                                </button>
                            </h3>
                            <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHead3" data-bs-parent="#homeFaqAccordion">
                                <div class="accordion-body service-faq-body">
                                    Yes. As an IBA-approved logistics provider, <?= esc($company3) ?> offers 100% comprehensive all-risk transit insurance. In the rare event of transit mishandling or highway accidents, claims are processed promptly with verified documentation.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item service-faq-item">
                            <h3 class="accordion-header" id="faqHead4">
                                <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                                    Does your team assist with unpacking and furniture assembly at the destination?
                                </button>
                            </h3>
                            <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHead4" data-bs-parent="#homeFaqAccordion">
                                <div class="accordion-body service-faq-body">
                                    Absolutely. Our crew unboxes all large cartons, reassembles standard double beds and dining tables, assists with major appliance placement, and clears away all packing materials from your new residence.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Shared Interactive Sidebar -->
            <div class="col-lg-4">
                <?= view('Modules\Services\Views\service_sidebar', array_merge(get_defined_vars(), [
                    'activeService' => 'household-moving',
                    'activeTitle'   => 'Home Shifting'
                ])) ?>
            </div>
        </div>
    </div>
</section>
