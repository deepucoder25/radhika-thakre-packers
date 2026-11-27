<?php
/**
 * Interactive Quick Quote & Fare Estimate Component - Radhika Thakre Packers and Movers
 * Identical to Home Slider Glassmorphic Estimate Card
 */
?>
<div class="hero-estimate-card card border-0 rounded-4 shadow-lg overflow-hidden">
    <div class="card-header hero-card-header text-white p-3 p-sm-4 border-0">
        <div class="d-flex align-items-center justify-content-between mb-1">
            <h2 class="h5 fw-bold mb-0">Get Instant Shifting Fare</h2>
            <span class="badge bg-warning text-dark fw-bold">SAVE UP TO 20%</span>
        </div>
        <p class="small text-white-50 mb-0">Free doorstep survey • Guaranteed transparent pricing</p>
    </div>
    <div class="card-body hero-card-body p-3 p-sm-4">
        <form id="heroEstimateForm" class="ajax-form" data-url="<?= site_url('contacts/booking') ?>" data-result="resultheroform" onsubmit="return false;">
            <div id="resultheroform" class="mb-3"></div>
            
            <div class="mb-3">
                <label class="form-label small fw-semibold mb-1">Your Full Name</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                    <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required>
                </div>
            </div>
            
            <div class="mb-3">
                <label class="form-label small fw-semibold mb-1">Mobile Number (10 Digits)</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                    <input type="tel" class="form-control" name="phone" placeholder="Enter 10-digit Mobile Number" required pattern="[0-9]{10}">
                </div>
            </div>
            
            <div class="row g-2 mb-3">
                <div class="col-6">
                    <label class="form-label small fw-semibold mb-1">Pickup City</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-geo-alt-fill"></i></span>
                        <input type="text" class="form-control" name="mfrom" placeholder="From City" value="<?= esc($city ?? 'Indore') ?>" required>
                    </div>
                </div>
                <div class="col-6">
                    <label class="form-label small fw-semibold mb-1">Destination City</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-pin-map-fill"></i></span>
                        <input type="text" class="form-control" name="mto" placeholder="To City" required>
                    </div>
                </div>
            </div>
            
            <div class="mb-3">
                <label class="form-label small fw-semibold mb-1">Relocation Service Type</label>
                <select class="form-select" name="service" aria-label="Select Relocation Service">
                    <option value="household-moving" selected>Home Shifting</option>
                    <option value="office-relocation">Office Shifting</option>
                    <option value="car-transportation">Car shifting</option>
                    <option value="bike-transportation">Bike Shifting</option>
                    <option value="packing-moving">Packing &amp; Unpacking</option>
                    <option value="loading-unloading">Loading &amp; Unloading</option>
                    <option value="warehouse-storage">Storage &amp; Warehouse</option>
                    <option value="transit-insurance">Goods Transit Insurance</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-hero-submit w-100 rounded-pill py-3 fw-bold shadow">
                <i class="bi bi-send-fill me-2"></i>Calculate Shifting Fare &rarr;
            </button>
            
            <div class="d-flex align-items-center justify-content-center gap-2 mt-3 text-white-50 small">
                <i class="bi bi-shield-lock-fill text-success"></i>
                <span>100% Privacy • No Spam • Instant Callback</span>
            </div>
        </form>
    </div>
</div>
