<?php
/**
 * Frequently Asked Questions (FAQs) View - Radhika Thakre Packers and Movers
 * Zero inline styles | 100% Responsive | Dynamic variables from Site.php (Direct CI4 Template Scope)
 * Full width col-12 card structure with SEO-optimized headings and Schema.org FAQPage JSON-LD
 */

$title       = "Frequently Asked Questions (FAQs)";
$description = "Find clear, honest answers regarding moving costs, transit insurance, 5-layer packing, tracking, and booking policies with " . $company3 . ".";
$path        = [
    ['label' => 'Home', 'url' => site_url('/')],
    ['label' => 'About Us', 'url' => site_url('about')],
    ['label' => 'FAQs'],
];

$faqList = [
    [
        'q' => 'In which city are ' . $company3 . ' located?',
        'a' => $company3 . ' is based at ' . $addressRegion . ', ' . $companystate . '. We provide shifting services for customers living in ' . $addressRegion . ' and for customers residing in other cities in India.'
    ],
    [
        'q' => 'Are ' . $company3 . ' registered?',
        'a' => 'Yes. ' . $company3 . ' is a registered and ISO 9001:2015 certified firm.'
    ],
    [
        'q' => 'What is the experience of your firm?',
        'a' => 'Our company has over ' . $experience . ' years’ experience offering moving solutions.'
    ],
    [
        'q' => 'What kind of services do you offer?',
        'a' => 'We provide home shifting, office shifting, packing, de-packing, loading and unloading, insurance, conveyance and storage solutions.'
    ],
    [
        'q' => 'Can I use home shifting services provided by your company in ' . $addressRegion . '?',
        'a' => 'Yes. ' . $company3 . ' offers home shifting for flats, standalone homes and other kinds of dwellings located in ' . $addressRegion . '.'
    ],
    [
        'q' => 'Do you offer shifting of household goods to other states?',
        'a' => 'Yes, our firm arranges intercity and interstate household shifting services. We can help you shift your household belongings from ' . $addressRegion . ' to any other city in India.'
    ],
    [
        'q' => 'How do you pack the household goods for transportation?',
        'a' => 'We use appropriate packing materials according to the kind of goods. We provide certified 5-layer bubble packing for the goods which require additional care during handling and transportation.'
    ],
    [
        'q' => 'Do you offer car and bike transportation services?',
        'a' => 'Yes. We offer car and bike shifting solutions. Appropriate conveyance is arranged by us for cars, bikes and motorbikes based on the vehicle type and destination.'
    ],
    [
        'q' => 'Is transit insurance offered by your firm?',
        'a' => 'Yes, transit insurance is available for the customers. You can talk to our team regarding the coverage, terms and charges for the transit insurance.'
    ],
    [
        'q' => 'Can I track my goods during transportation?',
        'a' => 'We use dedicated container trucks with GPS facility for tracking the goods during transportation. You can talk to our team regarding information about your goods and transportation route.'
    ],
    [
        'q' => 'What is the rate charged by packers and movers in ' . $addressRegion . '?',
        'a' => 'It varies according to the quantity of goods, distance, packing material, type of vehicle and other requirements. Contact us for quotation.'
    ],
    [
        'q' => 'Can you provide me packing and unpacking services?',
        'a' => 'Yes, we provide packing and unpacking. Our team can pack the household belongings before transportation and assist in unpacking of the goods according to the selected service.'
    ],
    [
        'q' => 'Can you shift office furniture and equipment?',
        'a' => 'Yes, we offer office shifting services for business organizations. We can shift office furniture, computers, documents and other kinds of office equipment with proper transportation and packing.'
    ],
    [
        'q' => 'Can I get warehousing or storage facilities?',
        'a' => 'Yes, warehousing services are available for clients who need storage during the relocation process. You can contact us for discussion about the storage facility requirements.'
    ],
    [
        'q' => 'How can I book ' . $company3 . '?',
        'a' => 'You can contact our team with your pickup location, delivery address, moving date and details about the goods you want to shift. We will discuss your requirements and provide quotations accordingly.'
    ],
];
?>
<?= view('Modules\Template\Views\page_banner', compact('title', 'description', 'path')) ?>

<!-- =========================================================================
     FAQ SECTION - FULL WIDTH COL-12 CARDS & ACCORDION
     ========================================================================= -->
<section class="section-faq-page py-5 bg-light position-relative">
    <div class="container py-2 py-lg-4">
        <div class="row">
            <div class="col-12">

                <!-- 1. Main Overview Card -->
                <div class="card about-design-card about-card-hero p-4 p-md-5 mb-4">
                    <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-3 d-inline-block" style="width: fit-content;">
                        Frequently Asked Questions
                    </span>
                    <h2 class="mb-3">FAQs Regarding <?= esc($company3) ?></h2>
                    <p class="text-muted mb-0">
                        Find transparent and helpful answers to common questions regarding our relocation services, 5-layer packing, container transportation, transit insurance, and booking process in <?= esc($addressRegion) ?> and across India.
                    </p>
                </div>

                <!-- 2. FAQ Accordion Group -->
                <div class="accordion faq-modern-accordion mb-4" id="faqAccordionGroup">
                    <?php foreach ($faqList as $idx => $faq): ?>
                        <div class="accordion-item faq-modern-item mb-3 rounded-4 shadow-sm border overflow-hidden">
                            <h3 class="accordion-header" id="heading_faq_<?= $idx ?>">
                                <button class="accordion-button faq-modern-button <?= $idx === 0 ? '' : 'collapsed' ?> fw-bold py-3 px-4" 
                                        type="button" 
                                        data-bs-toggle="collapse" 
                                        data-bs-target="#collapse_faq_<?= $idx ?>" 
                                        aria-expanded="<?= $idx === 0 ? 'true' : 'false' ?>" 
                                        aria-controls="collapse_faq_<?= $idx ?>">
                                    <span class="faq-item-icon me-3 flex-shrink-0">
                                        <i class="bi bi-question-circle-fill text-danger"></i>
                                    </span>
                                    <span class="faq-item-title flex-grow-1 me-2 text-dark">
                                        <?= esc($faq['q']) ?>
                                    </span>
                                </button>
                            </h3>
                            <div id="collapse_faq_<?= $idx ?>" 
                                 class="accordion-collapse collapse <?= $idx === 0 ? 'show' : '' ?>" 
                                 aria-labelledby="heading_faq_<?= $idx ?>" 
                                 data-bs-parent="#faqAccordionGroup">
                                <div class="accordion-body faq-modern-body p-4 pt-2 text-secondary">
                                    <p class="mb-0 leading-relaxed"><?= esc($faq['a']) ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- 3. Closing Call To Action Card -->
                <div class="card plan-move-card p-4 p-md-5">
                    <div class="position-relative z-1">
                        <div class="mb-4">
                            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-3 d-inline-block">
                                Plan Your Move
                            </span>
                            <h3 class="fw-bolder mb-3 text-dark">Need to move from <?= esc($addressRegion) ?> or some other place?</h3>
                            <p class="text-muted mb-0">
                                Contact <?= esc($company3) ?> for the quotation considering your shifting requirements.
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
        </div>
    </div>
</section>

<!-- =========================================================================
     SCHEMA.ORG FAQPAGE STRUCTURED DATA FOR GOOGLE RICH RESULTS
     ========================================================================= -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    <?php foreach ($faqList as $i => $item): ?>
    {
      "@type": "Question",
      "name": <?= json_encode($item['q'], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>,
      "acceptedAnswer": {
        "@type": "Answer",
        "text": <?= json_encode($item['a'], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>
      }
    }<?= ($i < count($faqList) - 1) ? ',' : '' ?>
    <?php endforeach; ?>
  ]
}
</script>
