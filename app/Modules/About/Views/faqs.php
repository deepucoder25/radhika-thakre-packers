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
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-3 d-inline-block" style="width: fit-content;">
                                Plan Your Move
                            </span>
                            <h3 class="mb-3">Need to move from <?= esc($addressRegion) ?> or some other place?</h3>
                            <p class="text-muted mb-lg-0">
                                Contact <?= esc($company3) ?> for the quotation considering your shifting requirements.
                            </p>
                        </div>
                        <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                            <div class="d-flex flex-column flex-sm-row flex-lg-column gap-3 justify-content-lg-end">
                                <a href="<?= site_url('contacts/quoteform') ?>" class="plan-btn-quote text-center">
                                    <i class="bi bi-calculator"></i>
                                    <span>Get a Moving Quote</span>
                                    <i class="bi bi-arrow-right-short"></i>
                                </a>
                                <a <?= $phonehtml ?> class="plan-btn-call">
                                    <span class="plan-call-icon"><i class="bi bi-telephone"></i></span>
                                    <span class="plan-call-details">
                                        <span class="plan-call-tag">Quick Call</span>
                                        <span class="plan-call-number"><?= esc($phone) ?></span>
                                    </span>
                                </a>
                            </div>
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
