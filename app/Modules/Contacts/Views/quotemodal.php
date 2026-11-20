<?php
/**
 * Modern High-Converting Quick Quote Modal - Radhika Thakre Packers and Movers
 * Zero Inline Styles - Bootstrap 5 Responsive Compact Architecture with Input Groups
 */
?>
<div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered quote-modal-dialog">
        <div class="modal-content quote-modal-content border-0 rounded-4 shadow-2xl overflow-hidden">
            <!-- Modal Header -->
            <div class="modal-header quote-modal-header text-white px-3 py-2 border-0 position-relative">
                <div class="d-flex align-items-center gap-2">
                    <div class="quote-modal-header-icon d-flex align-items-center justify-content-center">
                        <i class="bi bi-calculator-fill"></i>
                    </div>
                    <div>
                        <h4 class="modal-title fw-bold h6 mb-0" id="quoteModalLabel">Get a Free Instant Moving Quote</h4>
                        <p class="quote-modal-sub text-white-50 mb-0">Fast, 100% Free &amp; Zero Hidden Charges</p>
                    </div>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close" onclick="if(typeof setClose === 'function') setClose();"></button>
            </div>

            <!-- Modal Body / Form -->
            <div class="modal-body quote-modal-body px-3 py-3">
                <form id="quotemodal" class="ajax-form" data-url="<?= site_url('contacts/booking') ?>" data-result="resultquotemodal" onsubmit="return false;">
                    <div id="resultquotemodal" class="mb-2"></div>

                    <div class="row g-2">
                        <!-- Full Name -->
                        <div class="col-sm-6">
                            <label class="form-label small fw-semibold text-secondary mb-1">Your Full Name <span class="text-danger">*</span></label>
                            <div class="input-group quote-modal-input-group">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" name="name" placeholder="Enter Your Full Name" required>
                            </div>
                        </div>

                        <!-- Mobile Number -->
                        <div class="col-sm-6">
                            <label class="form-label small fw-semibold text-secondary mb-1">Mobile Number (10 Digits) <span class="text-danger">*</span></label>
                            <div class="input-group quote-modal-input-group">
                                <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                                <input type="tel" class="form-control" name="phone" placeholder="Enter 10-digit Mobile Number" required pattern="[0-9]{10}">
                            </div>
                        </div>

                        <!-- Email Address -->
                        <div class="col-12">
                            <label class="form-label small fw-semibold text-secondary mb-1">Email Address (Optional)</label>
                            <div class="input-group quote-modal-input-group">
                                <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                                <input type="email" class="form-control" name="email" placeholder="name@example.com">
                            </div>
                        </div>

                        <!-- Moving From -->
                        <div class="col-6">
                            <label class="form-label small fw-semibold text-secondary mb-1">Moving From</label>
                            <div class="input-group quote-modal-input-group">
                                <span class="input-group-text"><i class="bi bi-geo-alt-fill"></i></span>
                                <input type="text" class="form-control" name="mfrom" placeholder="Pickup City">
                            </div>
                        </div>

                        <!-- Moving To -->
                        <div class="col-6">
                            <label class="form-label small fw-semibold text-secondary mb-1">Moving To</label>
                            <div class="input-group quote-modal-input-group">
                                <span class="input-group-text"><i class="bi bi-pin-map-fill"></i></span>
                                <input type="text" class="form-control" name="mto" placeholder="Destination City">
                            </div>
                        </div>

                        <!-- Message / Needs -->
                        <div class="col-12">
                            <label class="form-label small fw-semibold text-secondary mb-1">Relocation Details (Optional)</label>
                            <div class="input-group quote-modal-input-group">
                                <span class="input-group-text align-items-start pt-2"><i class="bi bi-chat-dots-fill"></i></span>
                                <textarea name="message" rows="2" class="form-control quote-modal-textarea" placeholder="E.g. 2 BHK household shifting, preferred moving date..."></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="d-flex flex-wrap align-items-center justify-content-center gap-2 mt-3 pt-1">
                        <button id="submitbquotemodal" type="submit" class="btn btn-quote-modal-submit flex-grow-1 flex-sm-grow-0 fw-bold text-white rounded-pill shadow-sm">
                            <i class="bi bi-send-fill me-1"></i>Get My Free Quote
                        </button>
                        <button onclick="document.getElementById('resultquotemodal').innerHTML = '';" type="reset" class="btn btn-quote-modal-clear fw-semibold rounded-pill">
                            <i class="bi bi-arrow-counterclockwise me-1"></i>Clear Form
                        </button>
                    </div>

                    <!-- Security & Trust note -->
                    <div class="d-flex align-items-center justify-content-center gap-2 mt-2 pt-2 text-muted quote-modal-trust border-top">
                        <i class="bi bi-shield-lock-fill text-success"></i>
                        <span>100% Privacy • No Spam Guarantee • Instant Callback</span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
