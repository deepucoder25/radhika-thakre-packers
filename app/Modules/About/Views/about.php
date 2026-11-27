<?php
/**
 * About Us View - Radhika Thakre Packers and Movers
 * Zero inline styles | 100% Responsive | Dynamic variables from Site.php (Direct CI4 Template Scope)
 */

$title       = "About Us";
$description = "Learn more about " . $company3 . ", our " . $experience . " years of moving excellence, infrastructure, 28,000+ completed moves, and customer-first commitment.";
$path        = [
    ['label' => 'Home', 'url' => site_url('/')],
    ['label' => 'About Us'],
];
?>
<?= view('Modules\Template\Views\page_banner', compact('title', 'description', 'path')) ?>

<!-- =========================================================================
     ABOUT US - COMPANY STORY, CORE VALUES & METHODOLOGY (FULL WIDTH COL-12)
     ========================================================================= -->
<section class="section-about-page py-5 bg-light position-relative">
    <div class="container py-2 py-lg-4">
        <div class="row">
            <div class="col-12">

                <!-- 1. Main Overview Card -->
                <div class="card about-design-card about-card-hero p-4 p-md-5 mb-4">
                    <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-3 d-inline-block" style="width: fit-content;">
                        About Our Company
                    </span>
                    <h2 class="mb-3">A Mover in <?= esc($addressRegion) ?> Who Understands the Customer Needs</h2>

                    <p class="text-muted mb-3">
                        <?= esc($company3) ?> is a government-registered and ISO 9001:2015 certified relocation service provider situated in <?= esc($addressRegion) ?>, <?= esc($companystate) ?>. The company assists the families, working professionals and corporate entities in relocating their valuable items.
                    </p>

                    <p class="text-muted mb-3">
                        It is more than just loading the goods on the truck. Packing and handling various goods such as everyday items, furniture, appliances and other items also comes under the scope of the services. The company understands the need of proper handling and takes care of every customer requirement.
                    </p>

                    <p class="text-muted mb-0">
                        The company has more than <?= esc($experience) ?> years of experience in relocation. We provide home shifting, office shifting, car and bike transportation, packing &amp; unpacking, loading &amp; unloading of the goods, insurance of the goods during transport and warehouse services. We can assist in any moving requirement of the customers whether in <?= esc($addressRegion) ?> or anywhere else in India.
                    </p>
                </div>

                <!-- 2. Why People Choose Us Card -->
                <div class="card about-design-card p-4 p-md-5 mb-4">
                    <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-3 d-inline-block" style="width: fit-content;">
                        Customer Satisfaction
                    </span>
                    <h3 class="mb-3">Why People Choose <?= esc($company3) ?>?</h3>

                    <p class="text-muted mb-3">
                        It is obvious that the customer wants his/her belongings in the best condition at the destination without any hassle. This is why we pay attention to proper handling and clear communication.
                    </p>

                    <p class="text-muted mb-3">
                        Our trained team provides 5 layers of bubble packing for appropriate goods and container trucks with a GPS Tracking facility. The transit insurance facility is also provided to the customers who wish to purchase.
                    </p>

                    <p class="text-muted mb-0">
                        We provide quotations for the customer's shifting according to the requirements, distance and quantity of the goods. The charges for the shifting are discussed prior to starting the work so the customer may prepare his moving budget without any confusion.
                    </p>
                </div>

                <!-- 3. History & Core Values Card -->
                <div class="card about-design-card p-4 p-md-5 mb-4">
                    <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-3 d-inline-block" style="width: fit-content;">
                        Our Journey
                    </span>
                    <h3 class="mb-3"><?= esc($company3) ?> History</h3>

                    <p class="text-muted mb-3">
                        Our company, <?= esc($company3) ?> has been working in the industry for over <?= esc($experience) ?> years. During this period, we have assisted more than 25,000 families and corporate offices in their shifting requirements.
                    </p>

                    <p class="text-muted mb-4">
                        Each and every shift has given us some lessons in terms of handling, proper timing and customer requirements. From small family shifts to office shifts; all the experiences have made us learn how to do better planning for the shifts.
                    </p>

                    <hr class="my-4 text-muted opacity-25">

                    <!-- 4. Our Core Values Grid -->
                    <h4 class="mb-2">Our Core Values</h4>
                    <p class="text-muted mb-4">
                        We follow few core values in the course of our work:
                    </p>

                    <div class="row g-3 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5">
                        <!-- Care -->
                        <div class="col">
                            <div class="about-value-box p-3 rounded-4 h-100 text-center">
                                <div class="about-value-icon mx-auto mb-2">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
                                </div>
                                <h5 class="h6 fw-bold text-dark mb-1">Care</h5>
                                <p class="small text-muted mb-0">Proper handling of the goods of the customers.</p>
                            </div>
                        </div>

                        <!-- Honesty -->
                        <div class="col">
                            <div class="about-value-box p-3 rounded-4 h-100 text-center">
                                <div class="about-value-icon mx-auto mb-2">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                                </div>
                                <h5 class="h6 fw-bold text-dark mb-1">Honesty</h5>
                                <p class="small text-muted mb-0">Providing all details about services and their charges.</p>
                            </div>
                        </div>

                        <!-- Responsibility -->
                        <div class="col">
                            <div class="about-value-box p-3 rounded-4 h-100 text-center">
                                <div class="about-value-icon mx-auto mb-2">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                                </div>
                                <h5 class="h6 fw-bold text-dark mb-1">Responsibility</h5>
                                <p class="small text-muted mb-0">Proper handling of goods from packing till delivering.</p>
                            </div>
                        </div>

                        <!-- Respect -->
                        <div class="col">
                            <div class="about-value-box p-3 rounded-4 h-100 text-center">
                                <div class="about-value-icon mx-auto mb-2">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                                </div>
                                <h5 class="h6 fw-bold text-dark mb-1">Respect</h5>
                                <p class="small text-muted mb-0">Paying proper respect to our customers.</p>
                            </div>
                        </div>

                        <!-- Commitment -->
                        <div class="col">
                            <div class="about-value-box p-3 rounded-4 h-100 text-center">
                                <div class="about-value-icon mx-auto mb-2">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/></svg>
                                </div>
                                <h5 class="h6 fw-bold text-dark mb-1">Commitment</h5>
                                <p class="small text-muted mb-0">Performing the agreed tasks in proper manner.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 5. Advantages & Achievements Card -->
                <div class="card about-design-card p-4 p-md-5 mb-4">
                    <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-3 d-inline-block" style="width: fit-content;">
                        Why Us
                    </span>
                    <h4 class="mb-3">Advantages of Our Company</h4>

                    <p class="text-muted mb-3">
                        When you choose us, you get help in various segments of the shift under one roof. We pack and load the goods as per the requirements and provide suitable means of transportation of the goods.
                    </p>

                    <p class="text-muted mb-4">
                        You can also enjoy the GPS Tracking facility, transit insurance facility, affordable quotations and appropriate packing material as per the goods. We serve both the household and commercial customers making the relocation process easy.
                    </p>

                    <hr class="my-4 text-muted opacity-25">

                    <!-- 6. Our Achievements Grid -->
                    <h4 class="mb-2">Our Achievements</h4>
                    <p class="text-muted mb-4">
                        Our experience has been built over the years due to the confidence and trust of our customers.
                    </p>

                    <div class="row g-3 row-cols-2 row-cols-sm-3 row-cols-lg-5 text-center mb-3">
                        <div class="col">
                            <div class="about-stat-item h-100">
                                <div class="h3 fw-bolder text-danger mb-1">25,000+</div>
                                <p class="small text-muted mb-0">Families and Corporate offices served.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="about-stat-item h-100">
                                <div class="h3 fw-bolder text-danger mb-1"><?= esc($experience) ?> Years</div>
                                <p class="small text-muted mb-0">Years of experience in the shifting industry.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="about-stat-item h-100">
                                <div class="h3 fw-bolder text-danger mb-1">Govt. Regd</div>
                                <p class="small text-muted mb-0">Government registered.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="about-stat-item h-100">
                                <div class="h3 fw-bolder text-danger mb-1">ISO Certified</div>
                                <p class="small text-muted mb-0">ISO 9001:2015 Certified.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="about-stat-item h-100">
                                <div class="h3 fw-bolder text-danger mb-1"><?= esc($ratingCount) ?>+</div>
                                <p class="small text-muted mb-0">Verified reviews.</p>
                            </div>
                        </div>
                    </div>

                    <p class="text-muted mb-0 small">
                        These above are a few achievements which are due to our efforts and customers.
                    </p>
                </div>

                <!-- 7. Mission and Vision Card -->
                <div class="card about-design-card p-4 p-md-5 mb-4">
                    <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-3 d-inline-block" style="width: fit-content;">
                        Future Outlook
                    </span>
                    <h3 class="mb-3">Our Mission and Vision</h3>

                    <div class="row g-4 mt-1">
                        <div class="col-md-6">
                            <div class="p-4 rounded-4 bg-light border h-100">
                                <div class="d-flex align-items-center gap-2 mb-2 text-danger">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m4.93 4.93 4.24 4.24"/><path d="m14.83 9.17 4.24-4.24"/><path d="m14.83 14.83 4.24 4.24"/><path d="m9.17 14.83-4.24 4.24"/><circle cx="12" cy="12" r="4"/></svg>
                                    <h5 class="fw-bold text-dark mb-0">Our Mission</h5>
                                </div>
                                <p class="text-muted mb-0">
                                    Our mission is to provide safe, affordable and dependable moving services to the customers which makes the relocation easy for them.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-4 rounded-4 bg-light border h-100">
                                <div class="d-flex align-items-center gap-2 mb-2 text-danger">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
                                    <h5 class="fw-bold text-dark mb-0">Our Vision</h5>
                                </div>
                                <p class="text-muted mb-0">
                                    Our vision is to be a well-known name in the Indian moving industry with better services, better trained crew and reach up to many cities of the country.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 8. How We Work Card -->
                <div class="card about-design-card p-4 p-md-5 mb-2">
                    <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-3 d-inline-block" style="width: fit-content;">
                        Execution Process
                    </span>
                    <h5 class="mb-3">How We Work</h5>

                    <div class="row g-4 mt-1">
                        <div class="col-md-6">
                            <div class="about-step-box h-100">
                                <span class="badge bg-danger text-white rounded-pill mb-3 px-3 py-1 fw-bold">Step 01</span>
                                <p class="text-muted mb-0">
                                    We first understand the shifting requirements of the customer including pickup location, delivery location, quantity of the goods and desired shifting date. Then we prepare the quotation and make arrangements for the packing and transportation.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-step-box h-100">
                                <span class="badge bg-danger text-white rounded-pill mb-3 px-3 py-1 fw-bold">Step 02</span>
                                <p class="text-muted mb-0">
                                    After the confirmation of the booking, we start packing and loading the goods appropriately and arrange the transportation for the same. During the whole transportation journey, GPS Tracking helps in monitoring the vehicles. At the destination, we unload the goods and deliver them to the customer.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
