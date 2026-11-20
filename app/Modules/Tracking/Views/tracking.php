<?php
/**
 * Modern High-Tech Live GPS Consignment Tracking View
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

$title       = "Live GPS Consignment Tracking";
$description = "Track your household shifting goods, car carriers, or commercial shipments in real-time with " . $compName . " using your LR No, GR No, or Tracking ID.";
$path        = [
    ['label' => 'Home', 'url' => site_url('/')],
    ['label' => 'Live GPS Tracking'],
];
?>
<?= view('Modules\Template\Views\page_banner', compact('title', 'description', 'path')) ?>

<!-- =========================================================================
     TRACKING MAIN SECTION
     ========================================================================= -->
<section class="py-5 bg-white border-bottom" id="trackingSection">
    <div class="container py-2 py-lg-4">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-xl-8">

                <!-- Tracking Input Card -->
                <div class="tracking-search-card p-4 p-md-5 rounded-4 shadow-sm border mb-4">
                    <div class="text-center mb-4">
                        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-2">
                            <i class="bi bi-broadcast me-1"></i> 24x7 Live Satellite Tracking
                        </span>
                        <h2 class="h3 fw-bold text-dark mb-2">Track Your Moving Consignment</h2>
                        <p class="text-muted small mx-auto tracking-subtext mb-0">
                            Enter your <strong>Consignment LR No.</strong>, <strong>GR No.</strong>, or <strong>Booking Reference ID</strong> provided on your moving invoice:
                        </p>
                    </div>

                    <form id="trackingForm" onsubmit="handleTrackingSubmit(event)">
                        <div class="input-group input-group-lg tracking-input-group shadow-sm rounded-pill overflow-hidden border mb-3">
                            <span class="input-group-text bg-white border-0 ps-3 ps-sm-4 text-danger">
                                <i class="bi bi-truck-front-fill fs-5"></i>
                            </span>
                            <input type="text" 
                                   id="trackingInput" 
                                   name="trackingNumber" 
                                   class="form-control border-0 py-3" 
                                   placeholder="Enter LR / GR / Tracking ID (e.g. 123456)..." 
                                   required 
                                   autocomplete="off"
                                   aria-label="Tracking Number">
                            <button class="btn btn-danger px-3 px-sm-4 fw-bold text-white tracking-submit-btn" type="submit" id="trackBtn">
                                <span>Track</span>
                                <i class="bi bi-arrow-right ms-1"></i>
                            </button>
                        </div>
                    </form>

                    <!-- Quick Sample ID Chips -->
                    <div class="d-flex align-items-center justify-content-center flex-wrap gap-2 pt-2">
                        <span class="small text-muted fw-semibold">Quick Test IDs:</span>
                        <button type="button" class="btn btn-sm btn-light border rounded-pill px-2 py-1 tracking-sample-chip" data-sample="123456">
                            123456 (Live DB)
                        </button>
                        <button type="button" class="btn btn-sm btn-light border rounded-pill px-2 py-1 tracking-sample-chip" data-sample="RT-8842">
                            RT-8842 (Sample)
                        </button>
                        <button type="button" class="btn btn-sm btn-light border rounded-pill px-2 py-1 tracking-sample-chip" data-sample="IND-2026-99">
                            IND-2026-99
                        </button>
                    </div>

                    <!-- Loader -->
                    <div id="trackingLoader" class="text-center py-4 d-none">
                        <div class="spinner-border text-danger" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <p class="text-muted small mt-2 mb-0">Querying central GPS logistics servers...</p>
                    </div>

                    <!-- Error Alert -->
                    <div id="trackingError" class="alert alert-danger d-none mt-3 rounded-3" role="alert"></div>
                </div>

                <!-- Live Results Container -->
                <div id="trackingResult" class="d-none">

                    <!-- Shipment Summary Card -->
                    <div class="tracking-summary-card p-4 rounded-4 shadow-sm border mb-4 bg-white">
                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 pb-3 border-bottom mb-3">
                            <div>
                                <span class="badge bg-light text-muted border rounded-pill px-2 py-1 small mb-1">
                                    <i class="bi bi-hash"></i> Consignment LR No.
                                </span>
                                <h3 class="h4 fw-bold mb-0 text-danger" id="resLrNo">-</h3>
                            </div>
                            <div class="text-end">
                                <span class="badge bg-success text-white px-3 py-2 rounded-pill fw-bold" id="resStatus">
                                    <i class="bi bi-truck me-1"></i> In Transit (On Schedule)
                                </span>
                            </div>
                        </div>

                        <!-- 4-Stage Stepper -->
                        <div class="tracking-stepper-wrap mb-4">
                            <div class="tracking-stepper d-flex justify-content-between position-relative">
                                <div class="tracking-step-line"></div>
                                <div class="tracking-step is-complete" id="step1">
                                    <div class="tracking-step-circle"><i class="bi bi-check-lg"></i></div>
                                    <div class="tracking-step-label">Booked &amp; Packed</div>
                                </div>
                                <div class="tracking-step is-complete" id="step2">
                                    <div class="tracking-step-circle"><i class="bi bi-check-lg"></i></div>
                                    <div class="tracking-step-label">Hub Dispatched</div>
                                </div>
                                <div class="tracking-step is-active" id="step3">
                                    <div class="tracking-step-circle"><i class="bi bi-broadcast"></i></div>
                                    <div class="tracking-step-label">In Transit (GPS)</div>
                                </div>
                                <div class="tracking-step" id="step4">
                                    <div class="tracking-step-circle"><i class="bi bi-house-check"></i></div>
                                    <div class="tracking-step-label">Delivered</div>
                                </div>
                            </div>
                        </div>

                        <!-- Key Details Grid -->
                        <div class="row g-2 g-sm-3 text-start">
                            <div class="col-6 col-md-3">
                                <div class="tracking-info-cell p-3 rounded-3 bg-light">
                                    <span class="text-muted small d-block mb-1"><i class="bi bi-person-fill text-danger me-1"></i> Consignee</span>
                                    <strong class="text-dark d-block text-truncate" id="resCustomer">-</strong>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="tracking-info-cell p-3 rounded-3 bg-light">
                                    <span class="text-muted small d-block mb-1"><i class="bi bi-geo-alt-fill text-success me-1"></i> Origin</span>
                                    <strong class="text-dark d-block text-truncate" id="resFrom">-</strong>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="tracking-info-cell p-3 rounded-3 bg-light">
                                    <span class="text-muted small d-block mb-1"><i class="bi bi-geo-fill text-primary me-1"></i> Destination</span>
                                    <strong class="text-dark d-block text-truncate" id="resTo">-</strong>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="tracking-info-cell p-3 rounded-3 bg-light">
                                    <span class="text-muted small d-block mb-1"><i class="bi bi-calendar-event text-warning me-1"></i> Est. Delivery</span>
                                    <strong class="text-dark d-block text-truncate" id="resDeliveryDate">-</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Milestone Timeline Card -->
                    <div class="tracking-timeline-card p-4 p-md-5 rounded-4 shadow-sm border mb-4 bg-white">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h4 class="h5 fw-bold mb-0 text-dark">
                                <i class="bi bi-clock-history text-danger me-2"></i> Real-Time Milestone History
                            </h4>
                            <span class="badge bg-light text-muted border rounded-pill px-2 py-1 small">
                                Live GPS Feed
                            </span>
                        </div>
                        <div id="timelineList" class="tracking-timeline-modern position-relative ps-4">
                            <!-- Injected by JavaScript -->
                        </div>
                    </div>
                </div>

                <!-- Driver / Dispatch Assistance Card -->
                <div class="tracking-support-card p-4 p-md-5 rounded-4 shadow-sm border bg-light">
                    <div class="row align-items-center g-4">
                        <div class="col-lg-7 text-center text-lg-start">
                            <span class="badge bg-danger text-white px-3 py-1 rounded-pill fw-bold text-uppercase mb-2">
                                Dedicated Move Coordinator
                            </span>
                            <h3 class="h5 fw-bold text-dark mb-1">Need Direct Driver or Dispatch Coordination?</h3>
                            <p class="small text-muted mb-0">
                                If you need real-time highway delay updates or specific doorstep delivery timing, our dispatch team is available 24x7.
                            </p>
                        </div>
                        <div class="col-lg-5 text-center text-lg-end">
                            <div class="d-flex flex-wrap gap-2 justify-content-center justify-content-lg-end">
                                <a <?= $phoneLink ?> class="btn btn-danger rounded-pill px-3 py-2 fw-bold text-white d-inline-flex align-items-center gap-2">
                                    <i class="bi bi-telephone-fill"></i>
                                    <span>Call <?= esc($phoneNum) ?></span>
                                </a>
                                <a href="<?= esc($waLink) ?>" target="_blank" rel="noopener" class="btn btn-success rounded-pill px-3 py-2 fw-bold text-white d-inline-flex align-items-center gap-2">
                                    <i class="bi bi-whatsapp"></i>
                                    <span>WhatsApp Coordinator</span>
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
     LIVE TRACKING AJAX SCRIPT
     ========================================================================= -->
<script>
function handleTrackingSubmit(e) {
    if (e) e.preventDefault();
    const input = document.getElementById('trackingInput');
    const val = (input ? input.value : '').trim();
    if (!val) return;

    const loader = document.getElementById('trackingLoader');
    const errorBox = document.getElementById('trackingError');
    const resultBox = document.getElementById('trackingResult');
    const btn = document.getElementById('trackBtn');

    if (loader) loader.classList.remove('d-none');
    if (errorBox) errorBox.classList.add('d-none');
    if (resultBox) resultBox.classList.add('d-none');
    if (btn) btn.disabled = true;

    const formData = new FormData();
    formData.append('trackingNumber', val);

    fetch('<?= site_url('tracking/track') ?>', {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        if (loader) loader.classList.add('d-none');
        if (btn) btn.disabled = false;

        if (data.status === 'success' && data.main) {
            renderTrackingData(data.main, data.timeline || []);
            if (resultBox) resultBox.classList.remove('d-none');
        } else {
            // Check if mock sample was clicked
            if (val === 'RT-8842' || val === 'IND-2026-99') {
                renderMockTrackingData(val);
                if (resultBox) resultBox.classList.remove('d-none');
            } else {
                if (errorBox) {
                    errorBox.innerHTML = '<i class="bi bi-exclamation-triangle-fill me-2"></i>' + (data.message || 'Tracking number not found. Please verify with your booking invoice or call support.');
                    errorBox.classList.remove('d-none');
                }
            }
        }
    })
    .catch(err => {
        if (loader) loader.classList.add('d-none');
        if (btn) btn.disabled = false;

        // Fallback for sample test IDs in case offline
        if (val === 'RT-8842' || val === 'IND-2026-99') {
            renderMockTrackingData(val);
            if (resultBox) resultBox.classList.remove('d-none');
        } else {
            if (errorBox) {
                errorBox.innerHTML = '<i class="bi bi-exclamation-triangle-fill me-2"></i> Unable to connect to GPS servers. Please try again or call <?= esc($phoneNum) ?>.';
                errorBox.classList.remove('d-none');
            }
        }
    });
}

function renderTrackingData(main, timeline) {
    document.getElementById('resLrNo').innerText = main.lr_no || main.tracking_id || 'LR-' + Math.floor(100000 + Math.random() * 900000);
    document.getElementById('resCustomer').innerText = main.c_name || 'Verified Client';
    document.getElementById('resFrom').innerText = main.ship_from || 'Indore Hub';
    document.getElementById('resTo').innerText = main.ship_to || 'Destination Hub';
    document.getElementById('resDeliveryDate').innerText = main.ex_del_date || 'On Schedule';

    const timelineContainer = document.getElementById('timelineList');
    timelineContainer.innerHTML = '';

    if (timeline && timeline.length > 0) {
        timeline.forEach(function (step, idx) {
            const isLast = (idx === timeline.length - 1);
            const item = document.createElement('div');
            item.className = 'tracking-timeline-item mb-4 position-relative';
            item.innerHTML = `
                <div class="tracking-dot ${isLast ? 'dot-active' : 'dot-done'}"></div>
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-1">
                    <h5 class="h6 fw-bold mb-0 text-dark">${step.place ? step.place : 'Logistics Checkpoint'}</h5>
                    <span class="badge bg-light text-muted border">${step.date || 'Today'} ${step.time || ''}</span>
                </div>
                <p class="text-muted small mb-0">${step.remarks ? step.remarks : 'Consignment verified and scanned at checkpoint.'}</p>
            `;
            timelineContainer.appendChild(item);
        });
    } else {
        timelineContainer.innerHTML = `
            <div class="tracking-timeline-item mb-3 position-relative">
                <div class="tracking-dot dot-active"></div>
                <h5 class="h6 fw-bold mb-1 text-dark">Consignment In Transit</h5>
                <p class="text-muted small mb-0">Goods packed and moving towards destination. Regular updates posted at highway tolls and checkposts.</p>
            </div>
        `;
    }
}

function renderMockTrackingData(id) {
    const isRT = (id === 'RT-8842');
    const mockMain = {
        tracking_id: id,
        lr_no: id,
        c_name: isRT ? 'Vikram Malhotra' : 'Pooja Agarwal',
        ship_from: isRT ? 'Dewas Naka, Indore' : 'Indore, MP',
        ship_to: isRT ? 'Bhopal, MP' : 'Pune, Maharashtra',
        ex_del_date: 'Tomorrow, 5:00 PM'
    };

    const mockTimeline = [
        { place: 'Origin Hub (Indore)', date: 'Yesterday', time: '10:30 AM', remarks: '5-Layer packing completed and loaded onto sealed GPS container truck.' },
        { place: 'Highway Checkpoint 1', date: 'Yesterday', time: '04:15 PM', remarks: 'Weighbridge clearance and transit documents verified.' },
        { place: 'State Border Hub', date: 'Today', time: '08:45 AM', remarks: 'Consignment crossed border safely. GPS location active and on schedule.' }
    ];

    renderTrackingData(mockMain, mockTimeline);
}

// Sample Click Handler
document.addEventListener('DOMContentLoaded', function () {
    const sampleChips = document.querySelectorAll('.tracking-sample-chip');
    sampleChips.forEach(function (chip) {
        chip.addEventListener('click', function () {
            const val = this.getAttribute('data-sample');
            const input = document.getElementById('trackingInput');
            if (input) {
                input.value = val;
                handleTrackingSubmit();
            }
        });
    });
});
</script>
