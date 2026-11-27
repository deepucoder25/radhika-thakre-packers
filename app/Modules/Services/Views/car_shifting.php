<?php
/**
 * Car Shifting Services Page - Radhika Thakre Packers and Movers
 * Zero inline styles | 100% Responsive | Dynamic variables from Site.php (Direct CI4 Template Scope)
 * Clean SEO architecture matching home_shifting.php | Natural semantic headings
 */

$title       = "Car Shifting";
$description = "Professional, reliable car transport and vehicle carrier services by " . $company3 . ". Enclosed hydraulic car trailers, door-to-door delivery, and full transit insurance.";
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

                <!-- 1. Professional Car Shifting Services -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-car-front-fill text-danger"></i> Automobile Logistics
                    </span>
                    <h2 class="mb-3">
                        Professional Car Shifting Services with <?= esc($company3) ?>
                    </h2>
                    <p class="service-body-text mb-3">
                        <?= esc($company3) ?> offer a car transport service. Clients can advise us on the transport of cars including hatchbacks, sedans and SUVS, as well as many more popular car types.
                    </p>
                    <p class="service-body-text mb-0">
                        This varies according to the car type and size, and the collection and delivery points. Ease of access to both of these as well as transport choice will also affect transport. We analyse these factors so that we can then offer a quotation.
                    </p>
                </div>

                <!-- 2. Why Choose Car Transportation Instead of Driving? -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-shield-check text-danger"></i> Safe &amp; Convenient
                    </span>
                    <h3 class="mb-3">
                        Why Choose Car Transportation Instead of Driving?
                    </h3>
                    <p class="service-body-text mb-3">
                        Sometimes clients are unable to drive long distances. Clients may also be transporting possessions, as well as travelling by train or plane. In addition, people often have commitments relating to both work and their family.
                    </p>
                    <p class="service-body-text mb-0">
                        A car transport service can be utilised so that clients do not have to drive their car to its new location. This is also beneficial if the car is to be delivered to somewhere or someone else.
                    </p>
                </div>

                <!-- 3. When Should You Arrange Car Shifting? -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-calendar-check text-danger"></i> Timing &amp; Planning
                    </span>
                    <h3 class="mb-3">
                        When Should You Arrange Car Shifting?
                    </h3>
                    <p class="service-body-text mb-3">
                        Transport of a car may be required if an individual is changing jobs, moving house, or buying a car in a different city.
                    </p>
                    <p class="service-body-text mb-0">
                        Clients are encouraged to get in touch with us once they have decided on collection and delivery points. Early booking allows us to analyse, along with the client, transport and car specifics and to establish a timeframe.
                    </p>
                </div>

                <!-- 4. How Do We Arrange Your Car Move? -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-gear-fill text-danger"></i> Transport Process
                    </span>
                    <h3 class="mb-3">
                        How Do We Arrange Your Car Move?
                    </h3>
                    <p class="service-body-text mb-3">
                        Our staff ascertain information regarding the car type, collection point and where it is to be delivered. Alongside a favoured date for transport, we analyse this and advise on a fitting transport solution.
                    </p>
                    <p class="service-body-text mb-3">
                        Clients should clear their car of belongings and unattached items. Furthermore, it can be good practice to both photograph and document current car damage such as scratches and dents.
                    </p>
                    <p class="service-body-text mb-3">
                        Prior to booking, the most appropriate transport type, delivery method and relevant insurance should be analysed. Upon arrival at the delivery point, clients should examine the car prior to accepting it.
                    </p>
                    <p class="service-body-text mb-0">
                        Various transport insurance alternatives can be analysed with our staff. Clients should analyse the specifics and scope of cover offered within an insurance policy before deciding upon one.
                    </p>
                </div>

                <!-- 5. Closing Call-To-Action Banner -->
                <div class="card plan-move-card p-4 p-md-5">
                    <div class="position-relative z-1">
                        <div class="mb-4">
                            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-3 d-inline-block">
                                Plan Your Vehicle Move
                            </span>
                            <h3 class="fw-bolder mb-3 text-dark">
                                For further information on <?= esc($company3) ?>’ car transport service please get in touch with us.
                            </h3>
                            <p class="text-muted mb-0">
                                Or you can contact us at <a <?= $phonehtml ?> class="fw-bold text-danger text-decoration-none"><?= esc($phone) ?></a>.
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
                    'activeService' => 'car-transportation',
                    'activeTitle'   => 'Car Shifting'
                ])) ?>
            </div>

        </div>
    </div>
</section>
