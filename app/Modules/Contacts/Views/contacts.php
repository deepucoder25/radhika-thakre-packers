<?php
/**
 * Modern High-Conversion Contact Us View
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
$headOffice   = $address ?? 'Shop No. 100 first floor Katariya complex Dewas Naka Indore 452001';
$office1      = $address1 ?? 'Shop No. 100 first floor Katariya complex Dewas Naka';
$office2      = $address2 ?? 'Indore - 452001, Madhya Pradesh, India';
$gstNum       = $gst ?? '23BMOPT6924P1Z4';
$workHours    = $workingHours ?? 'Open 24 hours (24x7 Active)';
$mapUrl       = $mapshtml ?? 'https://maps.google.com';
$fbLink       = $facebookhtml ?? '#';
$twLink       = $twitterhtml ?? '#';
$igLink       = $instagramhtml ?? '#';
$inLink       = $linkedinhtml ?? '#';

$title       = "Contact Us";
$description = "Get in touch with " . $compName . " for free doorstep surveys, moving quotations, and 24x7 customer support across Indore and Pan-India.";
$path        = [
    ['label' => 'Home', 'url' => site_url('/')],
    ['label' => 'Contact Us'],
];
?>
<?= view('Modules\Template\Views\page_banner', compact('title', 'description', 'path')) ?>

<!-- =========================================================================
     TOP 3 CONTACT HIGHLIGHT TILES
     ========================================================================= -->
<section class="py-5 bg-white border-bottom" id="contactTopCards">
    <div class="container py-2">
        <div class="row g-3 g-md-4">

            <!-- Card 1: Phone -->
            <div class="col-md-4">
                <div class="contact-quick-card p-4 rounded-4 shadow-sm border h-100 text-center">
                    <div class="contact-card-icon icon-phone mb-3 mx-auto">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <h3 class="h5 fw-bold text-dark mb-1">Call Us 24x7</h3>
                    <p class="small text-muted mb-3">Speak directly with our moving coordinator</p>
                    <div class="vstack gap-1">
                        <a <?= $phoneLink ?> class="fw-bold text-danger text-decoration-none fs-6">
                            <?= esc($phoneNum) ?>
                        </a>
                        <a <?= $secPhoneLink ?> class="small text-muted text-decoration-none">
                            <?= esc($secPhoneNum) ?> (Helpline)
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2: WhatsApp -->
            <div class="col-md-4">
                <div class="contact-quick-card p-4 rounded-4 shadow-sm border h-100 text-center">
                    <div class="contact-card-icon icon-whatsapp mb-3 mx-auto">
                        <i class="bi bi-whatsapp"></i>
                    </div>
                    <h3 class="h5 fw-bold text-dark mb-1">Chat on WhatsApp</h3>
                    <p class="small text-muted mb-3">Get instant quotes &amp; share inventory photos</p>
                    <div>
                        <a href="<?= esc($waLink) ?>" target="_blank" rel="noopener" class="btn btn-success rounded-pill px-4 py-2 fw-bold text-white d-inline-flex align-items-center gap-2">
                            <i class="bi bi-whatsapp"></i>
                            <span>Start WhatsApp Chat</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3: Email -->
            <div class="col-md-4">
                <div class="contact-quick-card p-4 rounded-4 shadow-sm border h-100 text-center">
                    <div class="contact-card-icon icon-email mb-3 mx-auto">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <h3 class="h5 fw-bold text-dark mb-1">Email Support</h3>
                    <p class="small text-muted mb-3">Send official RFPs or corporate shifting inquiries</p>
                    <div class="vstack gap-1">
                        <a <?= $mailLink ?> class="fw-bold text-dark text-decoration-none text-truncate d-block small">
                            <?= esc($mailAddr) ?>
                        </a>
                        <span class="small text-muted">Response within 2 hours</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================================
     MAIN CONTACT SECTION: FORM & OFFICE DETAILS
     ========================================================================= -->
<section class="py-5 bg-light border-bottom" id="contactMainSection">
    <div class="container py-2 py-lg-4">

        <?php if (!empty($success)): ?>
            <div class="alert alert-success d-flex align-items-center gap-3 rounded-4 shadow-sm p-3 mb-4">
                <i class="bi bi-check-circle-fill fs-4 text-success flex-shrink-0"></i>
                <div><?= esc($success) ?></div>
            </div>
        <?php endif; ?>

        <?php if (!empty($error)): ?>
            <div class="alert alert-danger d-flex align-items-center gap-3 rounded-4 shadow-sm p-3 mb-4">
                <i class="bi bi-exclamation-triangle-fill fs-4 text-danger flex-shrink-0"></i>
                <div><?= esc($error) ?></div>
            </div>
        <?php endif; ?>

        <div class="row g-4 g-lg-5 align-items-start">

            <!-- LEFT COLUMN: INQUIRY / QUOTE FORM -->
            <div class="col-lg-7">
                <div class="contact-form-card p-4 p-md-5 rounded-4 shadow-sm border bg-white">
                    <div class="mb-4">
                        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-2">
                            Instant Shifting Survey
                        </span>
                        <h2 class="h3 fw-bold text-dark mb-1">Get A Free Moving Quote</h2>
                        <p class="text-muted small mb-0">Fill out this quick form and our surveyor will call you with a customized estimate.</p>
                    </div>

                    <form id="contactform" class="ajax-form" data-url="<?= site_url('contacts/contact') ?>" data-result="contactformresults" onsubmit="return false;">
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <div class="field-wrap">
                                    <label for="contactName" class="form-label fw-bold small text-dark mb-1">Full Name *</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-person-fill"></i></span>
                                        <input type="text" id="contactName" name="name" required placeholder="e.g. Rahul Sharma" class="form-control border-start-0">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="field-wrap">
                                    <label for="contactPhone" class="form-label fw-bold small text-dark mb-1">Mobile Number (10 Digits) *</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-telephone-fill"></i></span>
                                        <input type="tel" id="contactPhone" name="phone" required placeholder="e.g. 9826125421" maxlength="10" class="form-control border-start-0">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <div class="field-wrap">
                                    <label for="contactEmail" class="form-label fw-bold small text-dark mb-1">Email Address</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-envelope-fill"></i></span>
                                        <input type="email" id="contactEmail" name="email" placeholder="you@domain.com" class="form-control border-start-0">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="field-wrap">
                                    <label for="contactService" class="form-label fw-bold small text-dark mb-1">Required Service</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-box-seam-fill"></i></span>
                                        <select id="contactService" name="service" class="form-select border-start-0">
                                            <option value="Household Moving">Household Moving (Home Shifting)</option>
                                            <option value="Office Relocation">Office &amp; Corporate Relocation</option>
                                            <option value="Vehicle Transport">Car &amp; Bike Transportation</option>
                                            <option value="Warehouse Storage">Secure Warehouse Storage</option>
                                            <option value="Packing & Unpacking">Premium Packing &amp; Unpacking</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 field-wrap">
                            <label for="contactMessage" class="form-label fw-bold small text-dark mb-1">Moving Details / Route</label>
                            <textarea id="contactMessage" name="message" rows="4" placeholder="Moving From (city/area), Moving To (destination), approx moving date, major items list..." class="form-control"></textarea>
                        </div>

                        <button type="submit" class="btn btn-danger btn-lg rounded-pill w-100 fw-bold shadow-sm d-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-send-fill"></i>
                            <span>Submit Relocation Inquiry</span>
                        </button>

                        <div id="contactformresults" class="mt-3"></div>
                    </form>
                </div>
            </div>

            <!-- RIGHT COLUMN: HEAD OFFICE & COMPANY INFO -->
            <div class="col-lg-5">
                <div class="contact-info-card p-4 p-md-5 rounded-4 shadow-sm border bg-white mb-4">
                    <div class="d-flex align-items-center justify-content-between mb-4 pb-2 border-bottom">
                        <h3 class="h5 fw-bold text-dark mb-0">Registered Head Office</h3>
                        <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 rounded-pill px-2 py-1 small fw-bold">
                            Govt. Regd.
                        </span>
                    </div>

                    <!-- Address -->
                    <div class="d-flex gap-3 mb-4 align-items-start">
                        <div class="contact-detail-icon icon-address flex-shrink-0">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div>
                            <div class="fw-bold small text-dark mb-1">Corporate Address</div>
                            <p class="small text-muted mb-2"><?= esc($headOffice) ?></p>
                            <a href="<?= esc($mapUrl) ?>" target="_blank" rel="noopener" class="btn btn-sm btn-outline-danger rounded-pill fw-semibold">
                                <i class="bi bi-compass me-1"></i> Get Driving Directions
                            </a>
                        </div>
                    </div>

                    <!-- Phone Numbers -->
                    <div class="d-flex gap-3 mb-4 align-items-start">
                        <div class="contact-detail-icon icon-phone-small flex-shrink-0">
                            <i class="bi bi-telephone-inbound-fill"></i>
                        </div>
                        <div>
                            <div class="fw-bold small text-dark mb-1">Booking Helplines</div>
                            <div class="small mb-1">
                                <a <?= $phoneLink ?> class="fw-bold text-danger text-decoration-none"><?= esc($phoneNum) ?></a>
                            </div>
                            <div class="small">
                                <a <?= $secPhoneLink ?> class="text-muted text-decoration-none"><?= esc($secPhoneNum) ?> (Secondary Line)</a>
                            </div>
                        </div>
                    </div>

                    <!-- Email Address -->
                    <div class="d-flex gap-3 mb-4 align-items-start">
                        <div class="contact-detail-icon icon-mail-small flex-shrink-0">
                            <i class="bi bi-envelope-at-fill"></i>
                        </div>
                        <div>
                            <div class="fw-bold small text-dark mb-1">Customer Support Email</div>
                            <a <?= $mailLink ?> class="small text-muted text-decoration-none text-truncate d-block">
                                <?= esc($mailAddr) ?>
                            </a>
                        </div>
                    </div>

                    <!-- Working Hours & GST -->
                    <div class="d-flex gap-3 mb-4 align-items-start">
                        <div class="contact-detail-icon icon-clock flex-shrink-0">
                            <i class="bi bi-clock-fill"></i>
                        </div>
                        <div>
                            <div class="fw-bold small text-dark mb-1">Working Hours</div>
                            <div class="small text-muted mb-2"><?= esc($workHours) ?></div>
                            <div class="small text-secondary">
                                <i class="bi bi-file-earmark-check-fill text-success me-1"></i>
                                GSTIN: <strong><?= esc($gstNum) ?></strong>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media Links -->
                    <div class="pt-3 border-top text-center text-sm-start">
                        <span class="small fw-bold text-dark d-block mb-2">Connect With Us:</span>
                        <div class="d-flex align-items-center justify-content-center justify-content-sm-start gap-2 contact-social-row">
                            <a href="<?= esc($fbLink) ?>" target="_blank" rel="noopener" class="contact-social-btn" aria-label="Facebook">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="<?= esc($twLink) ?>" target="_blank" rel="noopener" class="contact-social-btn" aria-label="Twitter">
                                <i class="bi bi-twitter-x"></i>
                            </a>
                            <a href="<?= esc($igLink) ?>" target="_blank" rel="noopener" class="contact-social-btn" aria-label="Instagram">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="<?= esc($inLink) ?>" target="_blank" rel="noopener" class="contact-social-btn" aria-label="LinkedIn">
                                <i class="bi bi-linkedin"></i>
                            </a>
                            <a href="<?= esc($waLink) ?>" target="_blank" rel="noopener" class="contact-social-btn" aria-label="WhatsApp">
                                <i class="bi bi-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================================
     INTERACTIVE GOOGLE MAP LOCATION EMBED (100% RESPONSIVE)
     ========================================================================= -->
<section class="contact-map-section position-relative border-bottom" id="contactMap">
    <div class="contact-map-responsive">
        <iframe 
            src="https://maps.google.com/maps?q=Radhika%20Thakre%20Packers%20And%20Movers%20Katariya%20complex%20Dewas%20Naka%20Indore&t=&z=14&ie=UTF8&iwloc=&output=embed" 
            title="<?= esc($compName) ?> Central Office Location" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade" 
            aria-label="<?= esc($compName) ?> Google Map Location" 
            class="contact-map-iframe">
        </iframe>
    </div>
</section>
