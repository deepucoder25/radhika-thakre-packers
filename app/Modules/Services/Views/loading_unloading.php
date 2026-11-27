<?php
/**
 * Loading and Unloading Services Page - Radhika Thakre Packers and Movers
 * Zero inline styles | 100% Responsive | Dynamic variables from Site.php (Direct CI4 Template Scope)
 * Clean SEO architecture matching home_shifting.php | Natural semantic headings
 */

$title       = "Loading and Unloading";
$description = "Top loading and unloading services by " . $company3 . ". Skilled moving labor, careful handling of heavy furniture, appliances, and safe vehicle loading.";
$path        = [
    ['label' => 'Home', 'url' => site_url('/')],
    ['label' => 'Loading & Unloading'],
];
?>
<?= view('Modules\Template\Views\page_banner', compact('title', 'description', 'path')) ?>

<!-- Schema.org JSON-LD for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Loading and Unloading Services",
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

                <!-- 1. Top Loading and Unloading Services -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-truck text-danger"></i> Skilled Labor &amp; Cargo Handling
                    </span>
                    <h2 class="mb-3">
                        Top Loading and Unloading Services with <?= esc($company3) ?>
                    </h2>
                    <p class="service-body-text mb-3">
                        We provide loading and unloading assistance for packing up household and office items and moving to new place. Our packers help customers transfer packed items from the property to the truck.
                    </p>
                    <p class="service-body-text mb-3">
                        This service includes carrying cartons, beds, wardrobes, sofas, refrigerators, washing machines, office desks, chairs and other packed belongings.
                    </p>
                    <p class="service-body-text mb-0">
                        It is possible to order loading and unloading with transportation or talk to our team regarding labour assistance for your moving needs.
                    </p>
                </div>

                <!-- 2. Why Careful Goods Loading and Unloading Is Necessary? -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-shield-check text-danger"></i> Damage Prevention
                    </span>
                    <h3 class="mb-3">
                        Why Careful Goods Loading and Unloading Is Necessary?
                    </h3>
                    <p class="service-body-text mb-3">
                        Moving heavy furniture and appliances requires special skills. Incorrectly handled items might be scratched, broken or damaged.
                    </p>
                    <p class="service-body-text mb-0">
                        Correct handling of goods helps to avoid this problem and to make the whole process organized. Correct placing of goods inside the vehicle prevents heavy furniture pressing fragile cartons.
                    </p>
                </div>

                <!-- 3. When Do You Need to Book Loading and Unloading Labour? -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-people-fill text-danger"></i> Labor Assistance
                    </span>
                    <h3 class="mb-3">
                        When Do You Need to Book Loading and Unloading Labour?
                    </h3>
                    <p class="service-body-text mb-3">
                        This service will be useful when customers already rented their transport but require handling of the goods. It is also necessary when shifting furniture, moving office equipment and relocating from premises with stairs and without lift.
                    </p>
                    <p class="service-body-text mb-0">
                        It is important to tell our team about heavy items, narrow paths, floor levels and any other restriction of the building you are moving out.
                    </p>
                </div>

                <!-- 4. How Our Team Handles Your Goods? -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-gear-fill text-danger"></i> Moving Process
                    </span>
                    <h3 class="mb-3">
                        How Our Team Handles Your Goods?
                    </h3>
                    <p class="service-body-text mb-3">
                        Before the loading process starts, our workers inspect the items and available space inside the vehicle. Workers load items taking into account their dimensions and weight.
                    </p>
                    <p class="service-body-text mb-3">
                        Heavy goods should be placed correctly, and fragile cartons should be put in proper places. Workers arrange goods carefully in order to minimize their movement during the transportation.
                    </p>
                    <p class="service-body-text mb-0">
                        Unloading of the goods and transfer to the required rooms is done at the destination point.
                    </p>
                </div>

                <!-- 5. Closing Call-To-Action Banner -->
                <div class="card plan-move-card p-4 p-md-5">
                    <div class="position-relative z-1">
                        <div class="mb-4">
                            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-3 d-inline-block">
                                Plan Your Handling
                            </span>
                            <h3 class="fw-bolder mb-3 text-dark">
                                Book Professional Loading and Unloading Assistance
                            </h3>
                            <p class="text-muted mb-0">
                                Quotation will depend on the type and number of goods, number of workers, time and conditions of access. Please contact us at <a <?= $phonehtml ?> class="fw-bold text-danger text-decoration-none"><?= esc($phone) ?></a> for loading and unloading service.
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
                    'activeService' => 'loading-unloading',
                    'activeTitle'   => 'Loading & Unloading'
                ])) ?>
            </div>

        </div>
    </div>
</section>
