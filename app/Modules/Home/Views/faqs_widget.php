<?php
/**
 * Modern FAQs Accordion Widget - Radhika Thakre Packers and Movers
 * Zero Inline Styles - Bootstrap 5 Responsive Architecture
 */
$faqs = [
    [
        'q' => 'How are the packing and moving charges calculated?',
        'a' => 'Relocation charges are calculated based on moving distance, volume and weight of household or office goods, required packaging type (standard vs. 5-layer bubble/crate), floor level at pickup and drop, and vehicle carrier size. We provide a 100% transparent written quotation with zero hidden charges after a quick free doorstep or virtual survey.',
    ],
    [
        'q' => 'Do you provide transit insurance for household goods and vehicles?',
        'a' => 'Yes, absolutely! We provide 100% comprehensive transit insurance coverage against accidental damages or unforeseen transit incidents. Our dedicated move manager assists you with straightforward documentation and prompt claim settlement support if needed.',
    ],
    [
        'q' => 'How many days in advance should I book my relocation?',
        'a' => 'We recommend booking 2 to 4 days in advance for local shifting within Indore and surrounding areas, and 5 to 7 days ahead for inter-city or long-distance moves across India. Advance scheduling guarantees your preferred moving slot, container truck, and dedicated packing team.',
    ],
    [
        'q' => 'What packing materials do you use for fragile items & electronics?',
        'a' => 'We use premium certified 5-layer packing materials: virgin air-bubble sheets, high-density corrugated rolls, heavy-duty carton boxes, thermocol corner guards, moisture-resistant stretch film, and custom wooden crating for delicate glassware, crockery, LED TVs, and electronics.',
    ],
    [
        'q' => 'Can I track my consignment during inter-city transit?',
        'a' => 'Yes, our nationwide container fleet is equipped with live GPS tracking systems. You are also assigned a dedicated personal move coordinator who shares real-time milestone updates from departure to arrival at your new destination.',
    ],
    [
        'q' => 'Do you provide unpacking and furniture reassembly at the destination?',
        'a' => 'Yes! Our full-service door-to-door relocation includes careful unloading, unpacking of essential items, room-by-room placement, and professional reassembly of standard beds and furniture that were dismantled at the origin.',
    ],
];
?>
<!-- FAQs Section -->
<section class="section-faqs py-5 bg-white position-relative">
    <div class="container py-2 py-lg-4">
        <!-- Section Header -->
        <div class="text-center mx-auto mb-5 section-header-wrap">
            <span class="section-badge mb-2">Got Questions?</span>
            <h2 class="section-title mb-3">Frequently Asked Questions</h2>
            <p class="section-subtitle text-muted">Find clear answers regarding shifting estimates, transit insurance, packing quality, and delivery schedules.</p>
        </div>

        <div class="row justify-content-center">
            <!-- Centered Accordion Column -->
            <div class="col-lg-10 col-xl-9">
                <div class="accordion faq-accordion-v2" id="homeFaqAccordion">
                    <?php foreach ($faqs as $idx => $faq): ?>
                        <?php 
                            $collapseId = "faqCollapse" . $idx;
                            $headingId = "faqHeading" . $idx;
                            $isOpen = ($idx === 0);
                        ?>
                        <div class="accordion-item border rounded-3 mb-3 overflow-hidden shadow-sm">
                            <h3 class="accordion-header" id="<?= $headingId ?>">
                                <button class="accordion-button fw-bold py-3 px-4 <?= $isOpen ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $collapseId ?>" aria-expanded="<?= $isOpen ? 'true' : 'false' ?>" aria-controls="<?= $collapseId ?>">
                                    <span class="faq-icon-pill me-3 d-inline-flex align-items-center justify-content-center rounded-circle flex-shrink-0">
                                        <i class="bi bi-question-lg"></i>
                                    </span>
                                    <span><?= esc($faq['q']) ?></span>
                                </button>
                            </h3>
                            <div id="<?= $collapseId ?>" class="accordion-collapse collapse <?= $isOpen ? 'show' : '' ?>" aria-labelledby="<?= $headingId ?>" data-bs-parent="#homeFaqAccordion">
                                <div class="accordion-body px-4 pb-4 pt-2 text-muted lh-base small">
                                    <?= esc($faq['a']) ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
