<?php
/**
 * Office Shifting Services Page - Radhika Thakre Packers and Movers
 * Zero inline styles | 100% Responsive | Dynamic variables from Site.php (Direct CI4 Template Scope)
 * Clean SEO architecture matching home_shifting.php | Natural semantic headings
 */

$title       = "Office Shifting";
$description = "Professional, trusted office shifting and workplace moving services by " . $company3 . ". Secure packing of IT equipment, office furniture, and minimal business downtime.";
$path        = [
    ['label' => 'Home', 'url' => site_url('/')],
    ['label' => 'Office Shifting'],
];
?>
<?= view('Modules\Template\Views\page_banner', compact('title', 'description', 'path')) ?>

<!-- Schema.org JSON-LD for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Office Shifting Services",
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

                <!-- 1. Trusted Office Shifting & What Is Included -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-building-fill text-danger"></i> Workplace Shifting
                    </span>
                    <h2 class="mb-3">
                        Trusted Office Shifting Services with <?= esc($company3) ?>
                    </h2>
                    <h3 class="mb-3">
                        What Is Included in Our Office Relocation Service?
                    </h3>
                    <p class="service-body-text mb-3">
                        <?= esc($company3) ?> offer office relocation and transfer solutions. Packing, loading and delivery can also be arranged for office furniture and business assets.
                    </p>
                    <p class="service-body-text mb-0">
                        Typically, furniture (such as desks, chairs and filing cabinets), conference facilities, computers, printers and stationery are all transferred. Whole offices can be relocated or just individual items may need to be moved.
                    </p>
                </div>

                <!-- 2. Why Do Businesses Need Professional Office Movers? -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-shield-check text-danger"></i> Business Advantage
                    </span>
                    <h3 class="mb-3">
                        Why Do Businesses Need Professional Office Movers?
                    </h3>
                    <p class="service-body-text mb-3">
                        Alongside physical items, computers, paperwork and business assets all need to be appropriately prepared for transfer. Without efficient management, a business can experience disruption and there may also be added time needed to set up within new office space.
                    </p>
                    <p class="service-body-text mb-0">
                        Expert office movers facilitate the logistics of a transfer and manage business asset movement. They also free up time for members of staff so that they can continue to perform their usual roles.
                    </p>
                </div>

                <!-- 3. When Is Office Shifting Required? -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-calendar-event text-danger"></i> Relocation Timing
                    </span>
                    <h3 class="mb-3">
                        When Is Office Shifting Required?
                    </h3>
                    <p class="service-body-text mb-3">
                        As well as growing, businesses will often require office relocations when they relocate to different rented office space. In addition, businesses can need to transfer offices to establish new branches or to a more appropriate site.
                    </p>
                    <p class="service-body-text mb-0">
                        As soon as a business knows its new office and the planned moving date, it is advisable to speak to the chosen moving company. Matters such as entry to the new office, volume of assets and specific management requirements can then be discussed.
                    </p>
                </div>

                <!-- 4. How Do We Arrange an Office Move? -->
                <div class="service-overview-card mb-4">
                    <span class="service-badge-pill mb-3">
                        <i class="bi bi-gear-fill text-danger"></i> Moving Process
                    </span>
                    <h3 class="mb-3">
                        How Do We Arrange an Office Move?
                    </h3>
                    <p class="service-body-text mb-3">
                        Our company gathers details regarding the office dimensions, together with the source and destination addresses. The moving date and required services are also analysed. These details enable us to effectively determine the packing, manpower and transport requirements.
                    </p>
                    <p class="service-body-text mb-3">
                        Computers and electronic assets should be disconnected by a company’s IT department. Sensitive information should be packed by approved members of staff in a distinct manner.
                    </p>
                    <p class="service-body-text mb-3">
                        Our packers then prepare business assets for transfer. Larger objects can be disassembled where necessary and as permitted. Assets are then loaded onto appropriate transport and taken to the new office.
                    </p>
                    <p class="service-body-text mb-0">
                        Our personnel remove the assets from the transport and position them within the correct sections of the new office as detailed in the booking.
                    </p>
                </div>

                <!-- 5. Closing Call-To-Action Banner -->
                <div class="card plan-move-card p-4 p-md-5">
                    <div class="position-relative z-1">
                        <div class="mb-4">
                            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-3 d-inline-block">
                                Plan Your Office Move
                            </span>
                            <h3 class="fw-bolder mb-3 text-dark">
                                Please get in touch with us to explore further how we can assist with your office transfer.
                            </h3>
                            <p class="text-muted mb-0">
                                Contact <?= esc($company3) ?> today or call our relocation desk directly at <a <?= $phonehtml ?> class="fw-bold text-danger text-decoration-none"><?= esc($phone) ?></a>.
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
                    'activeService' => 'office-relocation',
                    'activeTitle'   => 'Office Shifting'
                ])) ?>
            </div>

        </div>
    </div>
</section>
