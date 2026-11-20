<?php
/**
 * Modern High-Impact Frequently Asked Questions (FAQs) View
 * Radhika Thakre Packers and Movers
 * Zero inline styles | 100% Responsive | Dynamic variables from Site.php
 */

$compName     = $company3 ?? 'Radhika Thakre Packers and Movers';
$phoneNum     = $phone ?? '+91 98261 25421';
$phoneLink    = $phonehtml ?? 'href="tel:+919826125421"';
$secPhoneLink = $phonehtml1 ?? $phoneLink;
$secPhoneNum  = $phone1 ?? '+91 99931 72221';
$waLink       = $whatsapphtml ?? 'https://wa.me/919826125421';
$mailAddr     = $mail ?? 'radhikathakrepackersandmovers@gmail.com';
$mailLink     = $mailhtml ?? 'mailto:radhikathakrepackersandmovers@gmail.com';
$gstNum       = $gst ?? '23BMOPT6924P1Z4';
$expYears     = $experience ?? '8+';
$ratingVal    = $ratingValue ?? '4.9';
$reviewsTotal = $ratingCount ?? '1850';

$title       = "Frequently Asked Questions (FAQs)";
$description = "Find clear, honest answers regarding moving costs, transit insurance, 5-layer packing, tracking, and booking policies with " . $compName . ".";
$path        = [
    ['label' => 'Home', 'url' => site_url('/')],
    ['label' => 'About Us', 'url' => site_url('about')],
    ['label' => 'FAQs'],
];

$faqList = [
    [
        'id'       => 'faq1',
        'category' => 'pricing',
        'q'        => 'How are household shifting charges calculated?',
        'a'        => 'Relocation charges depend on four primary factors: (1) Total volume and weight of goods (inventory of furniture, appliances, cartons); (2) Exact transit distance between origin and destination; (3) Floor level and presence of service elevator at both locations; and (4) Special packaging requirements like customized wooden crating for delicate items. We provide a transparent, all-inclusive quotation with zero hidden fees.',
        'badge'    => 'Pricing & Cost'
    ],
    [
        'id'       => 'faq2',
        'category' => 'insurance',
        'q'        => 'Is transit insurance provided for goods during relocation?',
        'a'        => 'Yes, 100% comprehensive goods transit insurance is provided for all intercity and domestic moves. It protects your household goods, electronics, and vehicles against unforeseen transit hazards, accidents, fire, or transit damage. We handle all policy documentation and quick claim settlements directly.',
        'badge'    => 'Transit Insurance'
    ],
    [
        'id'       => 'faq3',
        'category' => 'packing',
        'q'        => 'What multi-layer packing materials do you use for safety?',
        'a'        => 'We utilize premium 5-layer protective materials: heavy-duty corrugated cartons, multilayer air bubble cushioning, moisture-proof stretch film, high-density edge foam protectors, and customized wooden crates for fragile glassware, luxury marble tables, and LED TVs.',
        'badge'    => 'Packing Safety'
    ],
    [
        'id'       => 'faq4',
        'category' => 'transit',
        'q'        => 'How many days in advance should I book my move?',
        'a'        => 'For local shifting within the same city, 24 to 48 hours advance notice is recommended. For domestic interstate relocation, booking 3 to 7 days in advance ensures slot reservation for dedicated closed container trucks, route permits, and preferred loading timings.',
        'badge'    => 'Transit & Shifting'
    ],
    [
        'id'       => 'faq5',
        'category' => 'storage',
        'q'        => 'How do you safely transport cars and two-wheelers without damage?',
        'a'        => 'Cars are shifted in specialized closed hydraulic car carrier trailers equipped with wheel stoppers and safety tie-down belts to prevent road vibration or stone chips. Two-wheelers are wrapped in multi-layer bubble wrap, secured with handlebar guards, and clamped securely.',
        'badge'    => 'Vehicle & Storage'
    ],
    [
        'id'       => 'faq6',
        'category' => 'transit',
        'q'        => 'Can I track my moving consignment live during transit?',
        'a'        => 'Yes! You can track your consignment in real-time through our Live GPS Tracking page using your Consignment Note (LR) number or Reference ID. Additionally, our 24x7 customer support desk and dedicated move coordinator keep you updated via WhatsApp and phone calls.',
        'badge'    => 'Transit & Shifting'
    ],
    [
        'id'       => 'faq7',
        'category' => 'pricing',
        'q'        => 'Are there any hidden or surprise charges on moving day?',
        'a'        => 'Never. Our quotation is completely transparent and binding based on the agreed inventory survey. The quote includes packing material, labor charges, loading, transit transport, unloading, and basic unpacking. Any optional services (like storage or crane service) are clearly discussed upfront.',
        'badge'    => 'Pricing & Cost'
    ],
    [
        'id'       => 'faq8',
        'category' => 'storage',
        'q'        => 'Do you provide safe household storage and warehousing facilities?',
        'a'        => 'Yes, we provide clean, moisture-controlled, 24x7 CCTV-monitored warehouse storage hubs. You can store your household furniture, appliances, or commercial goods on flexible short-term (weekly) or long-term (monthly) tenure with pest-free palletized stacking and dedicated inventory logging.',
        'badge'    => 'Vehicle & Storage'
    ],
    [
        'id'       => 'faq9',
        'category' => 'packing',
        'q'        => 'Which items are restricted from being loaded in moving trucks?',
        'a'        => 'For safety and statutory compliance, we do not transport hazardous materials, flammable liquids (petrol/diesel, LPG cylinders, acids, firecrackers), perishable food items, contraband, and personal valuables like jewelry, currency, or original property deeds (which customers are advised to carry personally).',
        'badge'    => 'Packing Safety'
    ],
    [
        'id'       => 'faq10',
        'category' => 'transit',
        'q'        => 'Does your crew disassemble and reassemble furniture at the new destination?',
        'a'        => 'Yes, our trained carpenters and handymen dismantle modular beds, wardrobes, study tables, and dining sets before packing, and expertly reassemble them in their designated rooms at your new home as part of our full-service relocation package.',
        'badge'    => 'Transit & Shifting'
    ],
    [
        'id'       => 'faq11',
        'category' => 'packing',
        'q'        => 'How do you pack fragile items like LED TVs, glass tabletops, and crockeries?',
        'a'        => 'Delicate items receive special crating treatment: LED TVs are packed in specialized hard-shell TV carton boxes with corner foam guards. Crockeries are individually wrapped in bubble wrap and placed vertically in partitioned dish packs. Glass tops receive wooden crate protection.',
        'badge'    => 'Packing Safety'
    ],
    [
        'id'       => 'faq12',
        'category' => 'insurance',
        'q'        => 'What is the claim settlement process if goods suffer transit damage?',
        'a'        => 'In the rare event of transit damage, simply note the condition on the delivery receipt and notify your move coordinator with photos within 24-48 hours. Our insurance claim desk coordinates the surveyor assessment and facilitates prompt compensation according to your policy.',
        'badge'    => 'Transit Insurance'
    ]
];
?>
<?= view('Modules\Template\Views\page_banner', compact('title', 'description', 'path')) ?>

<!-- =========================================================================
     MAIN FAQ SECTION WITH SEARCH & CATEGORY FILTERS
     ========================================================================= -->
<section class="py-5 bg-white border-bottom" id="faqMainSection">
    <div class="container py-2 py-lg-4">

        <!-- Section Header -->
        <div class="text-center mb-5">
            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-2">
                Knowledge Base &amp; Help Center
            </span>
            <h2 class="display-6 fw-bold text-dark mb-2">
                Everything You Need to Know <span class="text-danger">Before Shifting</span>
            </h2>
            <p class="text-muted mx-auto faq-lead-text mb-0">
                Transparent answers to help you plan your domestic, office, or vehicle relocation seamlessly with <?= esc($compName) ?>.
            </p>
        </div>

        <!-- FAQs Accordion -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion faq-modern-accordion" id="faqAccordionGroup">
                    <?php foreach ($faqList as $idx => $faq): ?>
                        <div class="accordion-item faq-modern-item mb-3 rounded-4 shadow-sm border overflow-hidden" 
                             data-faq-category="<?= esc($faq['category']) ?>" 
                             data-faq-title="<?= esc(strtolower($faq['q'])) ?>" 
                             data-faq-body="<?= esc(strtolower($faq['a'])) ?>">
                            <h3 class="accordion-header" id="heading_<?= esc($faq['id']) ?>">
                                <button class="accordion-button faq-modern-button <?= $idx === 0 ? '' : 'collapsed' ?> fw-bold py-3 px-4" 
                                        type="button" 
                                        data-bs-toggle="collapse" 
                                        data-bs-target="#collapse_<?= esc($faq['id']) ?>" 
                                        aria-expanded="<?= $idx === 0 ? 'true' : 'false' ?>" 
                                        aria-controls="collapse_<?= esc($faq['id']) ?>">
                                    <span class="faq-item-icon me-3 flex-shrink-0">
                                        <i class="bi bi-question-circle-fill text-danger"></i>
                                    </span>
                                    <span class="faq-item-title flex-grow-1 me-2 text-dark">
                                        <?= esc($faq['q']) ?>
                                    </span>
                                    <span class="badge bg-light text-secondary border rounded-pill px-2 py-1 small me-2 d-none d-md-inline-block">
                                        <?= esc($faq['badge']) ?>
                                    </span>
                                </button>
                            </h3>
                            <div id="collapse_<?= esc($faq['id']) ?>" 
                                 class="accordion-collapse collapse <?= $idx === 0 ? 'show' : '' ?>" 
                                 aria-labelledby="heading_<?= esc($faq['id']) ?>" 
                                 data-bs-parent="#faqAccordionGroup">
                                <div class="accordion-body faq-modern-body p-4 pt-2 text-secondary">
                                    <p class="mb-0 leading-relaxed"><?= esc($faq['a']) ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Still Have Questions / Help Desk Card -->
                <div class="faq-helpdesk-card p-4 p-md-5 rounded-4 shadow-sm border mt-5 text-center">
                    <div class="row align-items-center g-4">
                        <div class="col-lg-7 text-center text-lg-start">
                            <span class="badge bg-danger text-white px-3 py-1 rounded-pill fw-bold text-uppercase mb-2">
                                24x7 Customer Support
                            </span>
                            <h3 class="h4 fw-bold text-dark mb-2">Still Need Clarification or Custom Moving Guidance?</h3>
                            <p class="small text-muted mb-0">
                                Our relocation specialists are available around the clock to provide free pre-move surveys and accurate quotes.
                            </p>
                        </div>
                        <div class="col-lg-5 text-center text-lg-end">
                            <div class="d-flex flex-wrap gap-2 justify-content-center justify-content-lg-end">
                                <a <?= $phoneLink ?> class="btn btn-danger rounded-pill px-3 py-2 fw-bold text-white d-inline-flex align-items-center gap-2">
                                    <i class="bi bi-telephone-fill"></i>
                                    <span><?= esc($phoneNum) ?></span>
                                </a>
                                <a href="<?= esc($waLink) ?>" target="_blank" rel="noopener" class="btn btn-success rounded-pill px-3 py-2 fw-bold text-white d-inline-flex align-items-center gap-2">
                                    <i class="bi bi-whatsapp"></i>
                                    <span>WhatsApp</span>
                                </a>
                                <a href="<?= site_url('contact') ?>" class="btn btn-outline-dark rounded-pill px-3 py-2 fw-bold d-inline-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#quoteModal">
                                    <i class="bi bi-calculator"></i>
                                    <span>Instant Quote</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
