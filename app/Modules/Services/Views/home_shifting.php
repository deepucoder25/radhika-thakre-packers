<?php
/**
 * Home Shifting Services Page - Radhika Thakre Packers and Movers
 * Zero inline styles | 100% Responsive | Dynamic variables from Site.php (Direct CI4 Template Scope)
 * Exact user-specified headings (H2, H2, H3, H4) & clean SEO architecture
 */

$title       = "Home Shifting";
$description = "Dependable household shifting services by " . $company3 . " in " . $addressRegion . ", " . $companystate . " and across India. 5-layer bubble packing, GPS-enabled container trucks, and transparent pricing.";
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
  "serviceType": "Household Shifting Services",
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

                <!-- 1. Main Overview Card -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-house-door-fill text-danger"></i> Household Relocation
                    </span>
                    <h2 class="mb-3">
                        Dependable Household Shifting with <?= esc($company3) ?>
                    </h2>
                    <p class="service-body-text mb-3">
                        <?= esc($company3) ?> provide home shifting services to families, working professionals and individuals who have to shift to a new home. We are located in <?= esc($addressRegion) ?>, <?= esc($companystate) ?>, and have <?= esc($experience) ?> years of experience in shifting and have relocated over 25,000 families and office spaces.
                    </p>
                    <p class="service-body-text mb-0">
                        Home shifting is necessary when people switch rented homes, buy a new property, get employed somewhere or have to relocate to another city. Moving a household involves a lot of preparation because items like furniture, appliances, kitchenware, clothes, and other personal possessions will need to be packed.
                    </p>
                </div>

                <!-- 2. What Type of Home Shifting Do We Provide? -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-grid-fill text-danger"></i> Shifting Solutions
                    </span>
                    <h2 class="mb-3">
                        What Type of Home Shifting Do We Provide?
                    </h2>
                    <p class="service-body-text mb-3">
                        Our team can help with shifting within the city, shifting to another city or state or long-distance home shifting anywhere in India. Customers may require complete household shifting or transportation of selective items.
                    </p>
                    <p class="service-body-text mb-0">
                        Packing, loading, transportation, unloading and unpacking can be included according to customer requirements.
                    </p>
                </div>

                <!-- 3. How Do We Conduct the Process of Home Shifting? -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-gear-fill text-danger"></i> Moving Process
                    </span>
                    <h3 class="mb-3">
                        How Do We Conduct the Process of Home Shifting?
                    </h3>
                    <p class="service-body-text mb-3">
                        As soon as the customer approaches us, we discuss the date of shifting, pickup and delivery address, volume of goods to be transported and services required by the customer. This will help us prepare an appropriate quotation and plan the work.
                    </p>
                    <p class="service-body-text mb-3">
                        Our packing crew uses proper packing materials for each household item. Items that require cushioning are packed using certified 5-layer bubble packaging. Each item is prepared for transportation as per its volume and weight.
                    </p>
                    <p class="service-body-text mb-3">
                        Once packed, the items are loaded onto an appropriate vehicle. The crew carefully arranges the items so as to minimize the movement of the items during transportation. GPS-enabled container trucks can be provided for appropriate long-distance shifting.
                    </p>
                    <p class="service-body-text mb-0">
                        Upon reaching the destination, our team unloads the items from the truck and provides unpacking help as per the booking made.
                    </p>
                </div>

                <!-- 4. Why Should You Choose Our Home Shifting Service? -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-shield-check text-danger"></i> Why Choose Us
                    </span>
                    <h4 class="mb-3">
                        Why Should You Choose Our Home Shifting Service?
                    </h4>
                    <p class="service-body-text mb-3">
                        We know that customers would like their items handled with care and clear understanding of the shifting costs. Our team discusses the work before preparing the quotation.
                    </p>
                    <p class="service-body-text mb-3">
                        We provide customers with skilled laborers, suitable packing material, transportation and transit insurance facilities. Cost depends upon the volume of items, distance and services opted by the customer.
                    </p>
                    <p class="service-body-text mb-0">
                        No matter whether you are shifting a small apartment or complete household, we help you organize the shifting process as per your requirements.
                    </p>
                </div>

                <!-- 5. Closing Call-To-Action Banner -->
                <div class="card plan-move-card p-4 p-md-5">
                    <div class="position-relative z-1">
                        <div class="mb-4">
                            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-3 d-inline-block">
                                Plan Your Move
                            </span>
                            <h3 class="fw-bolder mb-3 text-dark">
                                Get home shifting quotation from <?= esc($company3) ?>.
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
                    'activeService' => 'household-moving',
                    'activeTitle'   => 'Home Shifting'
                ])) ?>
            </div>

        </div>
    </div>
</section>
