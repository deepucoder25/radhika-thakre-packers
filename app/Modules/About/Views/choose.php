<?php
/**
 * Why Choose Us View - Radhika Thakre Packers and Movers
 * Zero inline styles | 100% Responsive | Dynamic variables from Site.php (Direct CI4 Template Scope)
 */

$title       = "Why Choose Us";
$description = "Discover why customers choose " . $company3 . " for reliable, certified, and hassle-free relocation services with " . $experience . " years of experience and transparent pricing.";
$path        = [
    ['label' => 'Home', 'url' => site_url('/')],
    ['label' => 'Why Choose Us'],
];
?>
<?= view('Modules\Template\Views\page_banner', compact('title', 'description', 'path')) ?>

<!-- =========================================================================
     WHY CHOOSE US - KEY REASONS & ADVANTAGES (FULL WIDTH COL-12)
     ========================================================================= -->
<section class="section-choose-page py-5 bg-light position-relative">
    <div class="container py-2 py-lg-4">
        <div class="row">
            <div class="col-12">

                <!-- 1. Main Overview Card -->
                <div class="card about-design-card about-card-hero p-4 p-md-5 mb-4">
                    <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-3 d-inline-block" style="width: fit-content;">
                        Why Choose Us
                    </span>
                    <h2 class="mb-3">Why Choose <?= esc($company3) ?>?</h2>

                    <p class="text-muted mb-0">
                        Moving of goods is not restricted to just arranging trucks for the process. It also requires a team that would pack household goods and deliver safely after moving the heavy furniture and handling the appliances in the best possible manner. Having over <?= esc($experience) ?> years of experience in packing and moving of goods, we have assisted in shifting more than 25,000 families and corporate offices. Here are some points why people opt for our services for their shifting needs.
                    </p>
                </div>

                <!-- 2. Core Reasons / Advantages (2-Column Responsive Grid) -->
                <div class="row g-4 mb-4">

                    <!-- Point 1: Government Registered and ISO Certified -->
                    <div class="col-lg-6 col-12">
                        <div class="card about-design-card h-100 p-4 p-md-4">
                            <div class="d-flex align-items-start gap-3">
                                <div class="about-value-icon flex-shrink-0">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
                                </div>
                                <div>
                                    <h3 class="h5 fw-bold text-dark mb-2">Government Registered and ISO Certified</h3>
                                    <p class="text-muted mb-0">
                                        We are a government-registered and ISO 9001:2015 certified moving service provider. Both the credentials show our dedication towards maintaining proper service standards and business practices. People can contact us regarding their shifting needs and discuss the matter and confirm the booking.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Point 2: Experienced and Trained Movers -->
                    <div class="col-lg-6 col-12">
                        <div class="card about-design-card h-100 p-4 p-md-4">
                            <div class="d-flex align-items-start gap-3">
                                <div class="about-value-icon flex-shrink-0">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                                </div>
                                <div>
                                    <h3 class="h5 fw-bold text-dark mb-2">Experienced and Trained Movers</h3>
                                    <p class="text-muted mb-0">
                                        Packing and shifting are not limited to the physical process of moving goods only. The refrigerator, glass table, wooden wardrobe and a box of kitchen stuff need to be handled differently. Our trained team takes proper care of packing and loading of goods as per customer requirements.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Point 3: Proper Packing of Household Goods -->
                    <div class="col-lg-6 col-12">
                        <div class="card about-design-card h-100 p-4 p-md-4">
                            <div class="d-flex align-items-start gap-3">
                                <div class="about-value-icon flex-shrink-0">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="m7.5 4.27 9 5.15"/><path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"/><path d="m3.3 7 8.7 5 8.7-5"/><path d="M12 22V12"/></svg>
                                </div>
                                <div>
                                    <h3 class="h5 fw-bold text-dark mb-2">Proper Packing of Household Goods</h3>
                                    <p class="text-muted mb-0">
                                        Condition of the goods at the time of reaching destination largely depends upon packing of the goods. For suitable items, we provide certified 5-layer bubble packing and other packing materials as per the nature of the goods.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Point 4: GPS Tracked Container Trucks -->
                    <div class="col-lg-6 col-12">
                        <div class="card about-design-card h-100 p-4 p-md-4">
                            <div class="d-flex align-items-start gap-3">
                                <div class="about-value-icon flex-shrink-0">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"/><path d="M15 18H9"/><path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14"/><circle cx="17" cy="18" r="2"/><circle cx="7" cy="18" r="2"/></svg>
                                </div>
                                <div>
                                    <h3 class="h5 fw-bold text-dark mb-2">GPS Tracked Container Trucks</h3>
                                    <p class="text-muted mb-0">
                                        We arrange container trucks and use GPS tracking for monitoring of vehicle movement. It provides better control over information related to the movement of the vehicle and makes our customers feel more assured regarding their stuff travelling to another city.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Point 5: Transit Insurance for Extra Protection -->
                    <div class="col-lg-6 col-12">
                        <div class="card about-design-card h-100 p-4 p-md-4">
                            <div class="d-flex align-items-start gap-3">
                                <div class="about-value-icon flex-shrink-0">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                                </div>
                                <div>
                                    <h3 class="h5 fw-bold text-dark mb-2">Transit Insurance for Extra Protection</h3>
                                    <p class="text-muted mb-0">
                                        During shifting of the goods from one city to another, there can be changes in road conditions and weather. We provide a transit insurance facility that offers extra protection from various risks during the process of transportation. The customers can discuss the coverage details with us.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Point 6: Honest Price with no Hidden Charges -->
                    <div class="col-lg-6 col-12">
                        <div class="card about-design-card h-100 p-4 p-md-4">
                            <div class="d-flex align-items-start gap-3">
                                <div class="about-value-icon flex-shrink-0">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                                </div>
                                <div>
                                    <h3 class="h5 fw-bold text-dark mb-2">Honest Price with no Hidden Charges</h3>
                                    <p class="text-muted mb-0">
                                        People want to know about the cost of shifting before starting the work. We provide quotations considering quantity of goods, distance, packing requirement and type of service. Before moving goods, we inform the customers about the charges.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Point 7: Different Shifting Services -->
                    <div class="col-lg-6 col-12">
                        <div class="card about-design-card h-100 p-4 p-md-4">
                            <div class="d-flex align-items-start gap-3">
                                <div class="about-value-icon flex-shrink-0">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect width="7" height="7" x="3" y="3" rx="1"/><rect width="7" height="7" x="14" y="3" rx="1"/><rect width="7" height="7" x="14" y="14" rx="1"/><rect width="7" height="7" x="3" y="14" rx="1"/></svg>
                                </div>
                                <div>
                                    <h3 class="h5 fw-bold text-dark mb-2">Different Shifting Services</h3>
                                    <p class="text-muted mb-0">
                                        Whether you need assistance for shifting of a home or office or want to move vehicles from one place to another, we can assist in arranging the services. Options include home shifting, office relocation, car and bike transport, packing and unpacking, loading and unloading, goods insurance and warehousing.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Point 8: Experience and Satisfaction of Our Customers -->
                    <div class="col-lg-6 col-12">
                        <div class="card about-design-card h-100 p-4 p-md-4">
                            <div class="d-flex align-items-start gap-3">
                                <div class="about-value-icon flex-shrink-0">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                </div>
                                <div>
                                    <h3 class="h5 fw-bold text-dark mb-2">Experience and Satisfaction of Our Customers</h3>
                                    <p class="text-muted mb-0">
                                        Having served <?= esc($ratingCount) ?>+ families and corporate offices till date, we understand how much trust people put in us. We try our best to make their shifting experience more convenient.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

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
