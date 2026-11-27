<?php
/**
 * Bike Shifting Services Page - Radhika Thakre Packers and Movers
 * Zero inline styles | 100% Responsive | Dynamic variables from Site.php (Direct CI4 Template Scope)
 * Clean SEO architecture matching home_shifting.php | Natural semantic headings
 */

$title       = "Bike Shifting";
$description = "Reliable, secure bike shifting and two-wheeler transportation services by " . $company3 . ". Doorstep pickup, scratch-free fastening, and full transit insurance coverage across India.";
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

                <!-- 1. Reliable Bike Shifting Services -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-bicycle text-danger"></i> Two-Wheeler Transport
                    </span>
                    <h2 class="mb-3">
                        Reliable Bike Shifting Services with <?= esc($company3) ?>
                    </h2>
                    <p class="service-body-text mb-3">
                        We offer the option to relocate a variety of two-wheelers such as commuter, scooter and motorbikes.
                    </p>
                    <p class="service-body-text mb-0">
                        This will vary depending on the type of vehicle together with the collection and delivery location and the available transport options.
                    </p>
                </div>

                <!-- 2. Why Do Customers Choose Bike Transportation? -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-shield-check text-danger"></i> Safe &amp; Convenient
                    </span>
                    <h3 class="mb-3">
                        Why Do Customers Choose Bike Transportation?
                    </h3>
                    <p class="service-body-text mb-3">
                        Two-wheelers are commonly utilised for daily transport, travelling to and from work and even for work purposes. However, it may not always be feasible to ride a vehicle for several hundred kilometres when relocating to a different city.
                    </p>
                    <p class="service-body-text mb-0">
                        Furthermore, individuals may be travelling by train or plane and so wish to have their vehicle relocated independently. Bike relocation allows people to organise their relocation without having to include a lengthy journey when they are already significantly involved in a relocation process.
                    </p>
                </div>

                <!-- 3. In What Situations Is Bike Relocation Appropriate? -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-geo-alt-fill text-danger"></i> Relocation Scenarios
                    </span>
                    <h3 class="mb-3">
                        In What Situations Is Bike Relocation Appropriate?
                    </h3>
                    <p class="service-body-text mb-3">
                        People may require bike relocation for a work relocation, house move, educational relocation and/or inter-state move.
                    </p>
                    <p class="service-body-text mb-0">
                        It is beneficial to inform our company of the type of bike together with its intended delivery location so that we can then advise on, and book, an appropriate relocation service. An associated cost can also be calculated.
                    </p>
                </div>

                <!-- 4. How Do We Ready a Bike For Relocation? -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-gear-fill text-danger"></i> Preparation &amp; Moving Process
                    </span>
                    <h3 class="mb-3">
                        How Do We Ready a Bike For Relocation?
                    </h3>
                    <p class="service-body-text mb-3">
                        We gather information regarding the bike type, collection point and delivery location together with the desired date for the relocation. Following this, we consult with you regarding your bike relocation needs and formulate a cost quotation.
                    </p>
                    <p class="service-body-text mb-3">
                        Ahead of delivery, customers should clear out a vehicle’s storage area and disconnect any loose items. Ensure that the bike keys together with relevant documentation are accessible in line with booking guidance.
                    </p>
                    <p class="service-body-text mb-3">
                        Photograph the bike and note any pre-existing scuffs, marks or damage. The bike can then be appropriately prepared for relocation and fastened in an appropriate manner in order to limit movement.
                    </p>
                    <p class="service-body-text mb-0">
                        Upon delivery, the recipient should examine the bike. Prior to booking, it is also possible to explore transit insurance cover options, again in accordance with relevant policy conditions.
                    </p>
                </div>

                <!-- 5. Closing Call-To-Action Banner -->
                <div class="card plan-move-card p-4 p-md-5">
                    <div class="position-relative z-1">
                        <div class="mb-4">
                            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-3 d-inline-block">
                                Plan Your Two-Wheeler Move
                            </span>
                            <h3 class="fw-bolder mb-3 text-dark">
                                Please get in touch with us to organise bike relocation for your relocation.
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
                    'activeService' => 'bike-transportation',
                    'activeTitle'   => 'Bike Shifting'
                ])) ?>
            </div>

        </div>
    </div>
</section>
