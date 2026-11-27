<?php
/**
 * Packing and Unpacking Services Page - Radhika Thakre Packers and Movers
 * Zero inline styles | 100% Responsive | Dynamic variables from Site.php (Direct CI4 Template Scope)
 * Clean SEO architecture matching home_shifting.php | Natural semantic headings
 */

$title       = "Packing and Unpacking";
$description = "Best packing and unpacking services by " . $company3 . ". Certified 5-layer bubble packing, safe furniture covering, delicate glassware cushioning, and doorstep unpacking.";
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
    "name": "<?= esc($addressRegion) ?>"
  },
  "description": "<?= esc($description) ?>"
}
</script>

<!-- =========================================================================
     MAIN SERVICE CONTENT SECTION
     ========================================================================= -->
<section class="service-page-section py-5 bg-light position-relative">
    <div class="container py-2 py-lg-4">
        <div class="row g-4 g-lg-5">

            <!-- Left Column: Main Service Narrative & Content -->
            <div class="col-lg-8">

                <!-- 1. Best Packing and Unpacking Services -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-box-seam text-danger"></i> Packing &amp; Unpacking
                    </span>
                    <h2 class="mb-3">
                        Best Packing and Unpacking Services with <?= esc($company3) ?>
                    </h2>
                    <p class="service-body-text mb-3">
                        <?= esc($company3) ?> provides packing and unpacking services for the household and office shifting. Our packing service may include the packing of furniture, kitchen ware, clothes, books, appliances, office material and fragile items.
                    </p>
                    <p class="service-body-text mb-0">
                        The customers can ask for packing either for the entire household or selected items of the household. Unpacking services can be provided as per the booking done.
                    </p>
                </div>

                <!-- 2. Why Proper Packing Is Important? -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-shield-check text-danger"></i> Safety &amp; Protection
                    </span>
                    <h3 class="mb-3">
                        Why Proper Packing Is Important?
                    </h3>
                    <p class="service-body-text mb-3">
                        Goods are handled multiple times during the moving process. These are packed, moved, loaded, transported and finally unloaded at their final destination.
                    </p>
                    <p class="service-body-text mb-0">
                        Proper packing would prevent scratching, dust and any unnecessary handling of items during this process. The packing of fragile things such as glassware and crockery requires cushioning, whereas the furniture will require covering.
                    </p>
                </div>

                <!-- 3. When Should You Book Packing Service? -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-clock-history text-danger"></i> Timely Booking
                    </span>
                    <h3 class="mb-3">
                        When Should You Book Packing Service?
                    </h3>
                    <p class="service-body-text mb-3">
                        Packing service is ideal when the customers have a big household, less time before the shifting day, heavy furniture and lots of fragile goods.
                    </p>
                    <p class="service-body-text mb-0">
                        It is recommended to book the packing service well in advance before the moving day in order to discuss the quantity of goods and packing requirements. It is important to find out about the delicate or costly goods before the arrival of the packing crew.
                    </p>
                </div>

                <!-- 4. How Does Our Packing Team Pack Your Goods? -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-gear-fill text-danger"></i> Packing Methodology
                    </span>
                    <h3 class="mb-3">
                        How Does Our Packing Team Pack Your Goods?
                    </h3>
                    <p class="service-body-text mb-3">
                        The discussion regarding the amount and nature of goods to be packed first takes place by the packing crew. This helps in finding the materials and labor needed.
                    </p>
                    <p class="service-body-text mb-3">
                        We do the wrapping of fragile goods, packing of cartons and covering of furniture for handling. We use 5-layer bubble packing material for certified goods requiring extra cushioning. The other packing materials used depend upon the nature and handling requirements of the goods.
                    </p>
                    <p class="service-body-text mb-0">
                        After transportation, the unpacking service can also be provided as per the booking made. Our laborers open the cartons, remove the packing materials and place the items in the desired rooms.
                    </p>
                </div>

                <!-- 5. Closing Call-To-Action Banner -->
                <div class="card plan-move-card p-4 p-md-5">
                    <div class="position-relative z-1">
                        <div class="mb-4">
                            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-3 d-inline-block">
                                Plan Your Packing
                            </span>
                            <h3 class="fw-bolder mb-3 text-dark">
                                Book our packing and unpacking service now.
                            </h3>
                            <p class="text-muted mb-0">
                                The quotation depends on the quantity of the goods, materials required for packing, labor and if unpacking service is provided or not. Or you can contact us at <a <?= $phonehtml ?> class="fw-bold text-danger text-decoration-none"><?= esc($phone) ?></a>.
                            </p>
                        </div>

                        <!-- Action Buttons Placed Below Content (Side-by-Side) -->
                        <div class="d-flex flex-wrap gap-3 align-items-center pt-2">
                            <!-- Button 1: Get a Moving Quote (Styled Red Gradient Pill Button) -->
                            <a href="<?= site_url('contact') ?>" class="btn btn-about-primary rounded-pill d-inline-flex align-items-center justify-content-between gap-3 shadow-sm" data-bs-toggle="modal" data-bs-target="#quoteModal" aria-label="Get a Free Moving Quote">
                                <span class="fw-bold d-inline-flex align-items-center gap-2">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="16" y1="14" x2="16" y2="18"/><path d="M16 10h.01"/><path d="M12 10h.01"/><path d="M8 10h.01"/><path d="M12 14h.01"/><path d="M8 14h.01"/><path d="M12 18h.01"/><path d="M8 18h.01"/>
                                    </svg>
                                    <span>Get a Moving Quote</span>
                                </span>
                                <span class="btn-arrow-circle d-flex align-items-center justify-content-center" aria-hidden="true">
                                    <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
                                        <path d="M3.333 8h9.334M8.667 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                            </a>

                            <!-- Button 2: Quick Call (Styled White Card-Pill Button) -->
                            <a <?= $phonehtml ?> class="btn btn-about-call rounded-pill d-inline-flex align-items-center gap-2 gap-sm-3 shadow-sm" aria-label="Call <?= esc($phone) ?>">
                                <span class="btn-call-icon-wrap d-flex align-items-center justify-content-center flex-shrink-0">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                    </svg>
                                </span>
                                <span class="text-start d-flex flex-column lh-sm pe-2">
                                    <span class="btn-call-label text-muted text-uppercase fw-semibold">Quick Call</span>
                                    <span class="btn-call-number fw-bold text-dark"><?= esc($phone) ?></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Right Column: Interactive Sidebar -->
            <div class="col-lg-4">
                <?= view('Modules\Services\Views\service_sidebar', array_merge(get_defined_vars(), [
                    'activeService' => 'packing-unpacking',
                    'activeTitle'   => 'Packing & Unpacking'
                ])) ?>
            </div>

        </div>
    </div>
</section>
