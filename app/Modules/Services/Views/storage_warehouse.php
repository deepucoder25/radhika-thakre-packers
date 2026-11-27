<?php
/**
 * Storage and Warehouse Services Page - Radhika Thakre Packers and Movers
 * Zero inline styles | 100% Responsive | Dynamic variables from Site.php (Direct CI4 Template Scope)
 * Clean SEO architecture matching home_shifting.php | Natural semantic headings
 */

$title       = "Storage & Warehouse";
$description = "Best warehousing and temporary storage services by " . $company3 . ". Secure storage for furniture, household goods, cartons, and office equipment with convenient pickup and delivery.";
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

                <!-- 1. Best Warehousing Services -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-archive-fill text-danger"></i> Safe &amp; Flexible Storage
                    </span>
                    <h2 class="mb-3">
                        Best Warehousing Services with <?= esc($company3) ?>
                    </h2>
                    <p class="service-body-text mb-3">
                        <?= esc($company3) ?> offers warehousing services to those customers who need temporary storage while relocating.
                    </p>
                    <p class="service-body-text mb-3">
                        Depending on the storage facility and its terms, customers might be able to organize storage for their packed belongings such as furniture, cartons, household goods, office equipment and others.
                    </p>
                    <p class="service-body-text mb-0">
                        This service might also involve pickup, transport to the storage place and further delivery upon customers' request according to the booking.
                    </p>
                </div>

                <!-- 2. Why Would They Need Temporary Storage? -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-clock-history text-danger"></i> Flexible Timing
                    </span>
                    <h3 class="mb-3">
                        Why Would They Need Temporary Storage?
                    </h3>
                    <p class="service-body-text mb-3">
                        Sometimes moving and getting possession of a new property do not occur at the same time. It might happen due to renovations of a new home or office or just because of the necessity to deliver in parts.
                    </p>
                    <p class="service-body-text mb-0">
                        With the help of temporary storage, customers will be able to solve this problem without the necessity to move all the things into a new property immediately.
                    </p>
                </div>

                <!-- 3. In Which Cases Is Warehousing Appropriate? -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-check2-circle text-danger"></i> Storage Scenarios
                    </span>
                    <h3 class="mb-3">
                        In Which Cases Is Warehousing Appropriate?
                    </h3>
                    <p class="service-body-text mb-3">
                        Temporary storage can be required when customers are waiting for the possession of their new property, making renovations, switching the rental place or planning the staged relocation.
                    </p>
                    <p class="service-body-text mb-0">
                        It is necessary to inform the team about the expected storage period before booking this service. Moreover, special handling of some goods should also be mentioned.
                    </p>
                </div>

                <!-- 4. How Do We Organize Transporting and Delivering Goods? -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-box-seam-fill text-danger"></i> Systematic Moving &amp; Delivery
                    </span>
                    <h3 class="mb-3">
                        How Do We Organize Transporting and Delivering Goods?
                    </h3>
                    <p class="service-body-text mb-3">
                        Our team discusses the number of goods, its expected storing period and delivery conditions. This is very important for calculating the needed storage space and handling of goods.
                    </p>
                    <p class="service-body-text mb-3">
                        Then all the things are being packed depending on the kind of belongings and delivered to the storage place according to the agreement. Customer needs to make up a list of items for identification purposes.
                    </p>
                    <p class="service-body-text mb-3">
                        Sometimes some furniture may need protective covers, and all cartons should be packed and labeled. It is necessary for customers to familiarize with the conditions of storage, access to goods, charges and delivering.
                    </p>
                    <p class="service-body-text mb-0">
                        When a customer decides to move to the new property, we will provide the delivery according to the booking terms and our availability.
                    </p>
                </div>

                <!-- 5. Closing Call-To-Action Banner -->
                <div class="card plan-move-card p-4 p-md-5">
                    <div class="position-relative z-1">
                        <div class="mb-4">
                            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-3 d-inline-block">
                                Temporary Storage
                            </span>
                            <h3 class="fw-bolder mb-3 text-dark">
                                Contact <?= esc($company3) ?> to discuss the issue of temporary storage of your belongings.
                            </h3>
                            <p class="text-muted mb-0">
                                Speak directly with our storage and relocation team at <a <?= $phonehtml ?> class="fw-bold text-danger text-decoration-none"><?= esc($phone) ?></a>.
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
                    'activeService' => 'warehouse-storage',
                    'activeTitle'   => 'Storage & Warehouse'
                ])) ?>
            </div>

        </div>
    </div>
</section>
