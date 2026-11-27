<?php
/**
 * Goods Transit Insurance Services Page - Radhika Thakre Packers and Movers
 * Zero inline styles | 100% Responsive | Dynamic variables from Site.php (Direct CI4 Template Scope)
 * Clean SEO architecture matching home_shifting.php | Natural semantic headings
 */

$title       = "Goods Transit Insurance";
$description = "Reliable goods transit insurance services by " . $company3 . ". Financial security for household furniture, vehicle transit, and office equipment across India.";
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

                <!-- 1. Reliable Goods Insurance Services -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-shield-check text-danger"></i> Financial Protection
                    </span>
                    <h2 class="mb-3">
                        Reliable Goods Insurance Services with <?= esc($company3) ?>
                    </h2>
                    <p class="service-body-text mb-3">
                        <?= esc($company3) ?> provides the possibility to obtain transit insurance for clients requiring additional financial security while moving their belongings.
                    </p>
                    <p class="service-body-text mb-0">
                        Depending on the type of insurance, it can provide cover against some of the potential issues which can arise during transport. Customers can talk to the insurance company about insuring their goods (including furniture, goods and office equipment).
                    </p>
                </div>

                <!-- 2. Why Do You Need Transit Insurance? -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-shield-lock-fill text-danger"></i> Risk Management
                    </span>
                    <h3 class="mb-3">
                        Why Do You Need Transit Insurance?
                    </h3>
                    <p class="service-body-text mb-3">
                        As well as transport, there is also packing and delivery involved in transporting items. Despite best practice in both areas, mishaps can still occur.
                    </p>
                    <p class="service-body-text mb-0">
                        Extra protection is often needed for high value and/or high volume goods. However, it is important to recognise that insurance does not always provide cover for all types of damage or loss.
                    </p>
                </div>

                <!-- 3. When Should You Discuss Insurance of Goods? -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-clock-history text-danger"></i> Timely Consultation
                    </span>
                    <h3 class="mb-3">
                        When Should You Discuss Insurance of Goods?
                    </h3>
                    <p class="service-body-text mb-3">
                        Insurance for goods should be discussed prior to transport. This is especially important if a customer is moving long distances, between states or is transporting high value goods.
                    </p>
                    <p class="service-body-text mb-0">
                        The value of the goods and insurance needs need to be decided prior to commencement of the moving process. Insurance should not be discussed on the day of transport.
                    </p>
                </div>

                <!-- 4. How Can We Assist in Insurance Discussion? -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-file-earmark-text-fill text-danger"></i> Policy &amp; Claims
                    </span>
                    <h3 class="mb-3">
                        How Can We Assist in Insurance Discussion?
                    </h3>
                    <p class="service-body-text mb-3">
                        We can assist in discussing the available transit insurance options at the stage of providing quotations. Some details regarding the number of goods and their approximate value may be required from the client.
                    </p>
                    <p class="service-body-text mb-3">
                        Before accepting insurance, it is essential that you thoroughly review the insurance policy to ensure that you understand what is and is not covered. You should also become familiar with the level of compensation which will be provided and the correct claims process.
                    </p>
                    <p class="service-body-text mb-3">
                        Prepare a list of your goods and take photographs of high value items. If your goods are damaged or lost, then please get in touch with your insurance company and adhere to their claims process.
                    </p>
                    <p class="service-body-text mb-0">
                        The cost of the insurance depends on the declared value of your belongings, chosen insurance options and conditions of the policy.
                    </p>
                </div>

                <!-- 5. Closing Call-To-Action Banner -->
                <div class="card plan-move-card p-4 p-md-5">
                    <div class="position-relative z-1">
                        <div class="mb-4">
                            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-3 d-inline-block">
                                Protect Your Goods
                            </span>
                            <h3 class="fw-bolder mb-3 text-dark">
                                Contact <?= esc($company3) ?> to discuss transit insurance options.
                            </h3>
                            <p class="text-muted mb-0">
                                Speak directly with our moving advisors at <a <?= $phonehtml ?> class="fw-bold text-danger text-decoration-none"><?= esc($phone) ?></a>.
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
                    'activeService' => 'transit-insurance',
                    'activeTitle'   => 'Transit Insurance'
                ])) ?>
            </div>

        </div>
    </div>
</section>
