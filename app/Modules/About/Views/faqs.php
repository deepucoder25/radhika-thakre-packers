<?php
/**
 * Frequently Asked Questions (FAQs) View
 * Radhika Thakre Packers and Movers
 */

$title       = "Frequently Asked Questions (FAQs)";
$description = "Have questions about relocation charges, transit safety, packaging standards, or booking procedures? Find clear answers below.";
$path        = [
    ['label' => 'Home', 'url' => site_url('/')],
    ['label' => 'About Us', 'url' => site_url('about')],
    ['label' => 'FAQs'],
];
?>
<?= view('Modules\Template\Views\page_banner', compact('title', 'description', 'path')) ?>

<!-- FAQs Content Section -->
<section class="section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Section Header -->
                <div class="text-center mb-5">
                    <span class="badge services-badge px-3 py-2 rounded-pill fw-semibold text-uppercase mb-2">Help Center</span>
                    <h2 class="section-heading fw-bold mb-3">Everything You Need to Know Before Shifting</h2>
                    <p class="section-lead text-muted mx-auto">
                        Transparent answers to help you plan your domestic, office, or vehicle relocation seamlessly.
                    </p>
                </div>

                <!-- Accordion Component -->
                <div class="accordion faq-accordion" id="relocationFaqAccordion">
                    <!-- FAQ 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeadingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                                <i class="bi bi-question-circle-fill faq-icon"></i>
                                How are moving and packing charges calculated?
                            </button>
                        </h2>
                        <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne" data-bs-parent="#relocationFaqAccordion">
                            <div class="accordion-body">
                                Relocation charges depend on four primary factors:
                                <ul class="mt-2 mb-0 ps-3">
                                    <li><strong>Volume &amp; Weight of Goods:</strong> Number of rooms, furniture size, and electronic appliances.</li>
                                    <li><strong>Transit Distance:</strong> Exact distance between pickup point and destination city.</li>
                                    <li><strong>Packing Material Quality:</strong> Standard vs. customized 5-layer crating for fragile items.</li>
                                    <li><strong>Floors &amp; Accessibility:</strong> Availability of service lift vs. stair carry at both premises.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeadingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                                <i class="bi bi-shield-check faq-icon"></i>
                                Is transit insurance provided for household items and vehicles?
                            </button>
                        </h2>
                        <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo" data-bs-parent="#relocationFaqAccordion">
                            <div class="accordion-body">
                                Yes, absolutely! Radhika Thakre Packers and Movers provides 100% comprehensive goods transit insurance. This covers any unforeseen accidental loss or damage during transit, ensuring complete financial protection and peace of mind.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeadingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                                <i class="bi bi-box-seam faq-icon"></i>
                                What packaging materials do you use for safety?
                            </button>
                        </h2>
                        <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree" data-bs-parent="#relocationFaqAccordion">
                            <div class="accordion-body">
                                We utilize industry-grade 5-layer protective packing materials, including heavy-duty corrugated cartons, heavy bubble wrap rolls, stretch film wraps, high-density foam edge protectors, and specialized wooden crates for glass tabletops, TVs, and artwork.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeadingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour">
                                <i class="bi bi-calendar-check faq-icon"></i>
                                How many days in advance should I book my move?
                            </button>
                        </h2>
                        <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqHeadingFour" data-bs-parent="#relocationFaqAccordion">
                            <div class="accordion-body">
                                For local moves within Indore, booking 24 to 48 hours in advance is sufficient. For interstate or domestic relocation across other states, we recommend reserving your slot 4 to 7 days in advance so dedicated container trucks and permits can be arranged smoothly.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeadingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFive" aria-expanded="false" aria-controls="faqCollapseFive">
                                <i class="bi bi-car-front faq-icon"></i>
                                How do you transport cars and two-wheelers safely?
                            </button>
                        </h2>
                        <div id="faqCollapseFive" class="accordion-collapse collapse" aria-labelledby="faqHeadingFive" data-bs-parent="#relocationFaqAccordion">
                            <div class="accordion-body">
                                We transport cars in specialized covered hydraulic car carrier trailers that prevent road dust and stone chips. Motorcycles and scooters are packaged with bubble foam and strapped securely in dedicated wooden wheel locks to prevent tipping or scratches.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeadingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseSix" aria-expanded="false" aria-controls="faqCollapseSix">
                                <i class="bi bi-truck faq-icon"></i>
                                Can I track my moving consignment during transit?
                            </button>
                        </h2>
                        <div id="faqCollapseSix" class="accordion-collapse collapse" aria-labelledby="faqHeadingSix" data-bs-parent="#relocationFaqAccordion">
                            <div class="accordion-body">
                                Yes! You can track your shipment online on our Tracking page using your Consignment Note (LR) number, or contact your dedicated move coordinator for real-time location updates.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Still Have Questions Card -->
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 mt-5 text-center bg-light">
                    <h4 class="fw-bold mb-2">Still Have Questions or Need an Instant Survey?</h4>
                    <p class="text-muted mb-4">Our relocation advisors are available 24x7 to guide you with upfront rates and moving advice.</p>
                    <div class="d-flex flex-wrap gap-3 justify-content-center">
                        <a <?= $phonehtml ?> class="btn btn-primary rounded-pill px-4 py-2 fw-bold text-white d-inline-flex align-items-center gap-2">
                            <i class="bi bi-telephone-fill"></i>
                            <span>Call <?= esc($phone) ?></span>
                        </a>
                        <a href="<?= esc($whatsapphtml) ?>" target="_blank" class="btn btn-success rounded-pill px-4 py-2 fw-bold text-white d-inline-flex align-items-center gap-2">
                            <i class="bi bi-whatsapp"></i>
                            <span>Chat on WhatsApp</span>
                        </a>
                        <a href="<?= site_url('contact') ?>" class="btn btn-outline-dark rounded-pill px-4 py-2 fw-bold d-inline-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#quoteModal">
                            <i class="bi bi-calculator"></i>
                            <span>Request Callback</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
