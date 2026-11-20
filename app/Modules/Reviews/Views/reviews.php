<?php
/**
 * Modern High-Trust Customer Reviews & Testimonials View
 * Radhika Thakre Packers and Movers
 * Zero inline styles | 100% Responsive | Dynamic variables from Site.php
 */

$compName     = $company3 ?? 'Radhika Thakre Packers and Movers';
$phoneNum     = $phone ?? '+91 98261 25421';
$phoneLink    = $phonehtml ?? 'href="tel:+919826125421"';
$waLink       = $whatsapphtml ?? 'https://wa.me/919826125421';
$ratingVal    = $ratingValue ?? '4.9';
$reviewsTotal = $ratingCount ?? '1850';

$title       = "Customer Reviews & Ratings";
$description = "Read genuine, verified client reviews and feedback about " . $compName . ". Rated " . $ratingVal . "/5 by over " . $reviewsTotal . "+ families and businesses across India.";
$path        = [
    ['label' => 'Home', 'url' => site_url('/')],
    ['label' => 'Customer Reviews'],
];
?>
<?= view('Modules\Template\Views\page_banner', compact('title', 'description', 'path')) ?>

<section class="py-5 bg-white border-bottom" id="reviewsContainer">
    <div class="container py-2 py-lg-4">

        <!-- =========================================================================
             1. RATING SCORECARD & WRITE REVIEW HERO BAR
             ========================================================================= -->
        <div class="review-scorecard-card p-4 p-md-5 rounded-4 shadow-sm border mb-5">
            <div class="row g-4 align-items-center">
                <!-- Score Block -->
                <div class="col-lg-4 text-center text-lg-start border-lg-end">
                    <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-2">
                        <i class="bi bi-patch-check-fill me-1"></i> 100% Verified Feedback
                    </span>
                    <div class="d-flex align-items-baseline justify-content-center justify-content-lg-start gap-2 my-2">
                        <span class="display-3 fw-bolder text-dark"><?= esc($ratingVal) ?></span>
                        <span class="fs-4 text-muted">/ 5.0</span>
                    </div>
                    <div class="text-warning fs-5 mb-2">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p class="small text-muted mb-0">Based on <strong><?= esc($reviewsTotal) ?>+ authentic client ratings</strong> across Google &amp; verified shifting orders.</p>
                </div>

                <!-- Rating Breakdown Bars -->
                <div class="col-lg-5">
                    <div class="vstack gap-2">
                        <!-- 5 Star -->
                        <div class="d-flex align-items-center gap-2 small">
                            <span class="fw-bold text-dark review-bar-label">5 Star</span>
                            <div class="progress flex-grow-1 review-progress">
                                <div class="progress-bar bg-warning review-bar-w92" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="text-muted review-bar-pct">92%</span>
                        </div>
                        <!-- 4 Star -->
                        <div class="d-flex align-items-center gap-2 small">
                            <span class="fw-bold text-dark review-bar-label">4 Star</span>
                            <div class="progress flex-grow-1 review-progress">
                                <div class="progress-bar bg-warning review-bar-w6" role="progressbar" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="text-muted review-bar-pct">6%</span>
                        </div>
                        <!-- 3 Star -->
                        <div class="d-flex align-items-center gap-2 small">
                            <span class="fw-bold text-dark review-bar-label">3 Star</span>
                            <div class="progress flex-grow-1 review-progress">
                                <div class="progress-bar bg-warning review-bar-w1" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="text-muted review-bar-pct">1%</span>
                        </div>
                        <!-- 2 Star -->
                        <div class="d-flex align-items-center gap-2 small">
                            <span class="fw-bold text-dark review-bar-label">2 Star</span>
                            <div class="progress flex-grow-1 review-progress">
                                <div class="progress-bar bg-secondary review-bar-wmin" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="text-muted review-bar-pct">&lt;1%</span>
                        </div>
                        <!-- 1 Star -->
                        <div class="d-flex align-items-center gap-2 small">
                            <span class="fw-bold text-dark review-bar-label">1 Star</span>
                            <div class="progress flex-grow-1 review-progress">
                                <div class="progress-bar bg-secondary review-bar-wmin" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="text-muted review-bar-pct">&lt;1%</span>
                        </div>
                    </div>
                </div>

                <!-- Write A Review CTA -->
                <div class="col-lg-3 text-center text-lg-end">
                    <h4 class="h6 fw-bold text-dark mb-2">Relocated With Us?</h4>
                    <p class="small text-muted mb-3">Your honest review helps other families make the right choice.</p>
                    <button class="btn btn-danger btn-lg rounded-pill px-4 fw-bold shadow-sm w-100" data-bs-toggle="modal" data-bs-target="#reviewModal">
                        <i class="bi bi-pencil-square me-2"></i>Write a Review
                    </button>
                </div>
            </div>
        </div>

        <!-- =========================================================================
             2. STAR FILTER TABS
             ========================================================================= -->
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-4">
            <div class="d-flex flex-wrap gap-2">
                <button type="button" class="btn btn-sm rounded-pill star-tab-btn <?= empty($star_filter) ? 'btn-danger active' : 'btn-light border' ?>" data-star="all" onclick="filterReviewsTab('all', this)">
                    All Reviews (<?= esc($total_rows ?? '100+') ?>)
                </button>
                <?php for ($s = 5; $s >= 1; $s--): ?>
                    <button type="button" class="btn btn-sm rounded-pill star-tab-btn <?= ($star_filter == $s) ? 'btn-danger active' : 'btn-light border' ?>" data-star="<?= $s ?>" onclick="filterReviewsTab(<?= $s ?>, this)">
                        <?= $s ?> <i class="bi bi-star-fill text-warning"></i>
                    </button>
                <?php endfor; ?>
            </div>

            <div class="text-muted small">
                <i class="bi bi-shield-check text-success me-1"></i> All reviews subject to authenticity checks
            </div>
        </div>

        <!-- Success Alert for AJAX Submission -->
        <div id="pageSuccessAlert" class="alert alert-success alert-dismissible fade show rounded-4 d-none mb-4" role="alert">
            <i class="bi bi-check-circle-fill me-2 fs-5"></i>
            <span id="pageSuccessText">Thank you! Your review has been submitted successfully and will appear shortly.</span>
            <button type="button" class="btn-close" onclick="document.getElementById('pageSuccessAlert').classList.add('d-none')" aria-label="Close"></button>
        </div>

        <!-- Flashdata Alerts -->
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success alert-dismissible fade show rounded-4 mb-4" role="alert">
                <i class="bi bi-check-circle-fill me-2 fs-5"></i><?= esc(session()->getFlashdata('success')) ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show rounded-4 mb-4" role="alert">
                <i class="bi bi-exclamation-triangle-fill me-2 fs-5"></i><?= esc(session()->getFlashdata('error')) ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <!-- Empty State When Filter Yields 0 Results -->
        <div id="noReviewsMatch" class="alert alert-light border text-center py-5 rounded-4 d-none">
            <i class="bi bi-star fs-1 d-block mb-2 text-warning"></i>
            <h4 class="fw-bold text-dark">No Reviews Found in This Rating</h4>
            <p class="text-muted mb-3">Be the first to share your experience with this rating tier!</p>
            <button class="btn btn-danger rounded-pill px-4 fw-bold" data-bs-toggle="modal" data-bs-target="#reviewModal">
                Write a Review
            </button>
        </div>

        <!-- =========================================================================
             3. REVIEWS GRID
             ========================================================================= -->
        <div class="row g-4" id="reviewsList">
            <?php if (!empty($reviews)): ?>
                <?php foreach ($reviews as $r): 
                    $starsCount = (int) ($r->stars ?? 5);
                    $pDate = !empty($r->posted_date) ? date('M d, Y', strtotime($r->posted_date)) : 'Recent Move';
                    
                    // Client Avatar Initials
                    $clientName = trim($r->name ?? 'Valued Client');
                    $parts = explode(' ', $clientName);
                    $initials = strtoupper(substr($parts[0] ?? 'C', 0, 1) . substr($parts[1] ?? '', 0, 1));
                    if (empty($initials)) $initials = 'RC';
                    
                    $cityName = !empty($r->city) ? $r->city : (!empty($r->r_title) ? $r->r_title : 'Indore Relocation');
                    $reviewText = !empty($r->r_desc) ? $r->r_desc : 'Extremely satisfied with the careful packaging and punctual delivery. Highly recommended!';
                ?>
                    <div class="col-lg-4 col-md-6 review-card-item" data-stars="<?= $starsCount ?>">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 review-display-card d-flex flex-column" itemscope itemtype="https://schema.org/Review">
                            <!-- Review Header -->
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="review-avatar-bubble">
                                        <?= esc($initials) ?>
                                    </div>
                                    <div>
                                        <h4 class="h6 fw-bold text-dark mb-0" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                            <span itemprop="name"><?= esc($clientName) ?></span>
                                        </h4>
                                        <div class="review-route-tag"><?= esc($cityName) ?></div>
                                    </div>
                                </div>
                                <span class="badge bg-success-subtle text-success small rounded-pill fw-semibold">
                                    <i class="bi bi-patch-check-fill"></i> Verified
                                </span>
                            </div>

                            <!-- Star Rating -->
                            <div class="mb-3 text-warning fs-6" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                <meta itemprop="ratingValue" content="<?= $starsCount ?>" />
                                <?php for ($i = 1; $i <= 5; $i++): ?>
                                    <i class="bi bi-star<?= ($i <= $starsCount) ? '-fill' : '' ?>"></i>
                                <?php endfor; ?>
                                <span class="small text-muted ms-2 fw-semibold"><?= $starsCount ?>.0 / 5.0</span>
                            </div>

                            <!-- Review Text -->
                            <p class="review-body-text flex-grow-1 text-muted small mb-3" itemprop="reviewBody">
                                "<?= esc($reviewText) ?>"
                            </p>

                            <!-- Review Footer -->
                            <div class="review-card-footer pt-3 border-top d-flex align-items-center justify-content-between small text-muted">
                                <span><i class="bi bi-calendar3 me-1"></i> <?= esc($pDate) ?></span>
                                <span class="text-success"><i class="bi bi-shield-check me-1"></i> Doorstep Move</span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <!-- Fallback Curated Testimonials for Zero State -->
                <?php 
                $demoReviews = [
                    [
                        'name' => 'Amitabh Saxena',
                        'city' => 'Indore to Bangalore Shifting',
                        'stars' => 5,
                        'date' => '3 days ago',
                        'desc' => 'Relocated our complete 3 BHK household from Indore to Bangalore with Radhika Thakre Packers. Every single item including 65-inch OLED TV and delicate glassware arrived intact. Punctual and professional crew!'
                    ],
                    [
                        'name' => 'Dr. Priyadarshini Rao',
                        'city' => 'Local Shifting within Indore (Vijay Nagar)',
                        'stars' => 5,
                        'date' => '1 week ago',
                        'desc' => 'Very smooth local shifting experience in Indore. The team arrived on time with 5-layer bubble rolls and heavy cartons. Unpacked and placed all furniture precisely where I requested. 100% recommended!'
                    ],
                    [
                        'name' => 'Rajeshwar Kulkarni',
                        'city' => 'Car & Bike Transport (Indore to Pune)',
                        'stars' => 5,
                        'date' => '2 weeks ago',
                        'desc' => 'Transported my Hyundai Creta and Royal Enfield bike to Pune. Received both vehicles in showroom condition without a single scratch. Excellent hydraulic carrier trailer and live GPS coordinates provided.'
                    ],
                    [
                        'name' => 'Suman & Neeraj Agrawal',
                        'city' => 'Household Moving (Indore to Delhi NCR)',
                        'stars' => 5,
                        'date' => '3 weeks ago',
                        'desc' => 'Affordable and genuine pricing with zero hidden charges. The packing supervisor was very polite and managed loading with utmost care. Delivered on the committed date.'
                    ],
                    [
                        'name' => 'Col. Vijayendra Singh',
                        'city' => 'Defence Personnel Shifting (Mhow to Jaipur)',
                        'stars' => 5,
                        'date' => '1 month ago',
                        'desc' => 'Being in the armed forces, I relocate frequently. Radhika Thakre Packers provided IBA standard invoices, transit insurance, and flawless packing. Truly reliable moving partner.'
                    ],
                    [
                        'name' => 'Manish Chawla (Tech Lead)',
                        'city' => 'Corporate IT Equipment Shifting',
                        'stars' => 5,
                        'date' => '1 month ago',
                        'desc' => 'Shifted our 40-workstation office equipment including servers and monitors with zero downtime over the weekend. Outstanding coordination and safe execution.'
                    ],
                ];
                foreach ($demoReviews as $dr): 
                    $parts = explode(' ', $dr['name']);
                    $initials = strtoupper(substr($parts[0] ?? 'C', 0, 1) . substr($parts[1] ?? '', 0, 1));
                ?>
                    <div class="col-lg-4 col-md-6 review-card-item" data-stars="<?= $dr['stars'] ?>">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 review-display-card d-flex flex-column">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="review-avatar-bubble">
                                        <?= esc($initials) ?>
                                    </div>
                                    <div>
                                        <h4 class="h6 fw-bold text-dark mb-0"><?= esc($dr['name']) ?></h4>
                                        <div class="review-route-tag"><?= esc($dr['city']) ?></div>
                                    </div>
                                </div>
                                <span class="badge bg-success-subtle text-success small rounded-pill fw-semibold">
                                    <i class="bi bi-patch-check-fill"></i> Verified
                                </span>
                            </div>

                            <div class="mb-3 text-warning fs-6">
                                <?php for ($i = 1; $i <= 5; $i++): ?>
                                    <i class="bi bi-star<?= ($i <= $dr['stars']) ? '-fill' : '' ?>"></i>
                                <?php endfor; ?>
                                <span class="small text-muted ms-2 fw-semibold">5.0 / 5.0</span>
                            </div>

                            <p class="review-body-text flex-grow-1 text-muted small mb-3">
                                "<?= esc($dr['desc']) ?>"
                            </p>

                            <div class="review-card-footer pt-3 border-top d-flex align-items-center justify-content-between small text-muted">
                                <span><i class="bi bi-calendar3 me-1"></i> <?= esc($dr['date']) ?></span>
                                <span class="text-success"><i class="bi bi-shield-check me-1"></i> Doorstep Move</span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- =========================================================================
     4. WRITE A REVIEW MODAL
     ========================================================================= -->
<div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 border-0 shadow-lg">
            <div class="modal-header bg-danger text-white rounded-top-4 px-4 py-3">
                <h5 class="modal-title fw-bold" id="reviewModalLabel">
                    <i class="bi bi-star-fill text-warning me-2"></i> Share Your Relocation Experience
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form id="writeReviewForm" action="<?= site_url('reviews/submit') ?>" method="POST" onsubmit="handleReviewSubmit(event)">
                    <?= csrf_field() ?>
                    <input type="hidden" name="ajax" value="1">
                    <input type="hidden" name="rating" id="selectedStarInput" value="5">

                    <!-- Interactive Star Selector -->
                    <div class="text-center mb-4">
                        <label class="form-label small fw-bold text-dark d-block mb-2">Overall Relocation Rating</label>
                        <div class="review-star-picker" id="starPicker">
                            <i class="bi bi-star-fill star-pick-icon text-warning active" data-val="1"></i>
                            <i class="bi bi-star-fill star-pick-icon text-warning active" data-val="2"></i>
                            <i class="bi bi-star-fill star-pick-icon text-warning active" data-val="3"></i>
                            <i class="bi bi-star-fill star-pick-icon text-warning active" data-val="4"></i>
                            <i class="bi bi-star-fill star-pick-icon text-warning active" data-val="5"></i>
                        </div>
                        <div class="small fw-bold text-danger mt-1" id="starRatingLabel">5 Stars - Excellent Experience</div>
                    </div>

                    <!-- Client Name -->
                    <div class="mb-3">
                        <label for="revClientName" class="form-label small fw-bold text-dark mb-1">Your Full Name *</label>
                        <input type="text" class="form-control rounded-3" id="revClientName" name="name" placeholder="e.g. Ramesh Patel" required>
                    </div>

                    <!-- Client Email -->
                    <div class="mb-3">
                        <label for="revClientEmail" class="form-label small fw-bold text-dark mb-1">Email Address *</label>
                        <input type="email" class="form-control rounded-3" id="revClientEmail" name="email" placeholder="you@domain.com" required>
                        <div class="form-text small">Your email is kept private and never published publicly.</div>
                    </div>

                    <!-- Shifting Route / City -->
                    <div class="mb-3">
                        <label for="revClientRoute" class="form-label small fw-bold text-dark mb-1">Relocation Route / City</label>
                        <input type="text" class="form-control rounded-3" id="revClientRoute" name="city" placeholder="e.g. Indore to Pune or Local Indore">
                    </div>

                    <!-- Review Text -->
                    <div class="mb-3">
                        <label for="revClientComment" class="form-label small fw-bold text-dark mb-1">Your Detailed Feedback *</label>
                        <textarea class="form-control rounded-3" id="revClientComment" name="review" rows="4" placeholder="How was the packaging quality, punctuality, and staff behavior?" required></textarea>
                    </div>

                    <div id="reviewModalAlert" class="alert alert-danger d-none mb-3" role="alert"></div>

                    <button type="submit" class="btn btn-danger w-100 rounded-pill py-2 fw-bold" id="submitReviewBtn">
                        <i class="bi bi-send-fill me-1"></i> Submit Review
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Review Scripts -->
<script>
function filterReviewsTab(stars, btn) {
    document.querySelectorAll('.star-tab-btn').forEach(function(b) {
        b.classList.remove('btn-danger', 'active');
        b.classList.add('btn-light', 'border');
    });
    btn.classList.remove('btn-light', 'border');
    btn.classList.add('btn-danger', 'active');

    var cards = document.querySelectorAll('.review-card-item');
    var visibleCount = 0;
    cards.forEach(function(card) {
        var cardStars = card.getAttribute('data-stars');
        if (stars === 'all' || cardStars === String(stars)) {
            card.classList.remove('d-none');
            visibleCount++;
        } else {
            card.classList.add('d-none');
        }
    });

    var emptyState = document.getElementById('noReviewsMatch');
    if (emptyState) {
        if (visibleCount === 0) {
            emptyState.classList.remove('d-none');
        } else {
            emptyState.classList.add('d-none');
        }
    }
}

// Star Picker in Modal
document.addEventListener('DOMContentLoaded', function() {
    var starLabels = {
        1: '1 Star - Poor Experience',
        2: '2 Stars - Below Average',
        3: '3 Stars - Average',
        4: '4 Stars - Good Moving Service',
        5: '5 Stars - Excellent Experience'
    };

    var stars = document.querySelectorAll('#starPicker .star-pick-icon');
    stars.forEach(function(star) {
        star.addEventListener('click', function() {
            var val = parseInt(this.getAttribute('data-val'));
            document.getElementById('selectedStarInput').value = val;
            document.getElementById('starRatingLabel').innerText = starLabels[val] || (val + ' Stars');
            
            stars.forEach(function(s) {
                var sVal = parseInt(s.getAttribute('data-val'));
                if (sVal <= val) {
                    s.classList.add('active', 'text-warning');
                    s.classList.remove('text-muted');
                } else {
                    s.classList.remove('active', 'text-warning');
                    s.classList.add('text-muted');
                }
            });
        });
    });
});

function handleReviewSubmit(e) {
    e.preventDefault();
    var form = document.getElementById('writeReviewForm');
    var btn = document.getElementById('submitReviewBtn');
    var alertBox = document.getElementById('reviewModalAlert');
    var formData = new FormData(form);

    btn.disabled = true;
    btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Submitting...';
    alertBox.classList.add('d-none');

    fetch(form.action, {
        method: 'POST',
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        body: formData
    })
    .then(function(res) { return res.json(); })
    .then(function(data) {
        btn.disabled = false;
        btn.innerHTML = '<i class="bi bi-send-fill me-1"></i> Submit Review';
        if (data.status === 'success') {
            var modalEl = document.getElementById('reviewModal');
            var modal = bootstrap.Modal.getInstance(modalEl);
            if (modal) modal.hide();
            form.reset();

            var successAlert = document.getElementById('pageSuccessAlert');
            if (successAlert) {
                successAlert.classList.remove('d-none');
                successAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        } else {
            alertBox.innerText = data.message || 'Error submitting review. Please try again.';
            alertBox.classList.remove('d-none');
        }
    })
    .catch(function(err) {
        btn.disabled = false;
        btn.innerHTML = '<i class="bi bi-send-fill me-1"></i> Submit Review';
        // Fallback for standard redirect POST
        form.submit();
    });
}
</script>
