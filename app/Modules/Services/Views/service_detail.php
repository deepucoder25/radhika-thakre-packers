<?php
/**
 * Service Detail View - Radhika Thakre Packers and Movers
 * Fully responsive Bootstrap 5 layout with sidebar, features, and quote CTA
 */

$title       = $service['title'] ?? 'Our Relocation Service';
$description = $service['desc'] ?? '';
$path        = [
    ['label' => 'Home', 'url' => site_url('/')],
    ['label' => 'Services', 'url' => site_url('services')],
    ['label' => $title],
];
?>
<?= view('Modules\Template\Views\page_banner', compact('title', 'description', 'path')) ?>

<!-- Service Detail Main Content -->
<section class="service-detail-section py-5">
    <div class="container">
        <div class="row g-4 align-items-start">
            <!-- Left Main Column -->
            <div class="col-lg-8">
                <div class="card service-detail-card border-0 shadow-sm rounded-4 p-4 p-md-5 mb-4">
                    <!-- Icon & Title -->
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="service-detail-icon-wrap d-flex align-items-center justify-content-center rounded-3">
                            <i class="bi <?= esc($service['b_icon'] ?? 'bi-box-seam') ?>"></i>
                        </div>
                        <div>
                            <span class="badge service-type-badge rounded-pill px-3 py-1 mb-1"><?= esc($service['badge'] ?? 'Relocation') ?></span>
                            <h2 class="service-detail-heading fw-bold mb-0"><?= esc($service['title']) ?></h2>
                        </div>
                    </div>

                    <p class="service-detail-paragraph text-muted mb-4">
                        <?= esc($service['desc']) ?> At Radhika Thakre Packers and Movers, our specialized relocation specialists handle every item with utmost safety, precision, and dedication. With over 8+ years of expertise in Indore and nationwide coverage, we guarantee a completely hassle-free moving experience.
                    </p>

                    <h4 class="fw-bold mb-3">Key Inclusions &amp; Service Highlights:</h4>
                    <div class="row g-3 mb-4">
                        <?php foreach ($service['features'] as $f): ?>
                            <div class="col-md-6">
                                <div class="detail-feature-item d-flex align-items-center gap-2 p-3 rounded-3 bg-light">
                                    <i class="bi bi-check-circle-fill text-primary flex-shrink-0"></i>
                                    <span class="fw-medium text-dark"><?= esc($f) ?></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="service-detail-actions d-flex flex-wrap gap-3 pt-3 border-top">
                        <a href="<?= site_url('contact') ?>" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold text-white d-inline-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#quoteModal">
                            <i class="bi bi-calculator"></i>
                            <span>Book <?= esc($service['title']) ?></span>
                        </a>
                        <a <?= $phonehtml ?> class="btn btn-outline-primary rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2">
                            <i class="bi bi-telephone-fill"></i>
                            <span>Call For Inquiry</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Sidebar Column -->
            <div class="col-lg-4">
                <!-- All Services Menu Card -->
                <div class="card service-sidebar-card border-0 shadow-sm rounded-4 p-4 mb-4">
                    <h5 class="fw-bold mb-3 border-bottom pb-2">All Relocation Services</h5>
                    <div class="list-group list-group-flush service-sidebar-list">
                        <?php foreach ($allServices as $s): ?>
                            <a href="<?= site_url('services/' . $s['slug']) ?>" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between py-3 px-2 border-0 rounded-3 mb-1 <?= ($s['slug'] === $service['slug']) ? 'active-service-link' : '' ?>">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi <?= esc($s['b_icon'] ?? 'bi-box') ?> text-primary"></i>
                                    <span><?= esc($s['title']) ?></span>
                                </div>
                                <i class="bi bi-chevron-right small text-muted"></i>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Instant WhatsApp Helpdesk Card -->
                <div class="card service-help-card border-0 shadow-sm rounded-4 text-white p-4 text-center">
                    <div class="help-icon-wrap mx-auto mb-3 d-flex align-items-center justify-content-center rounded-circle">
                        <i class="bi bi-whatsapp"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Need Instant Shifting Quote?</h5>
                    <p class="text-white-50 small mb-3">Send your moving requirements on WhatsApp for swift rate calculation.</p>
                    <a href="<?= esc($whatsapphtml) ?>" target="_blank" class="btn btn-light text-success fw-bold rounded-pill w-100 py-2 d-inline-flex align-items-center justify-content-center gap-2">
                        <i class="bi bi-whatsapp"></i>
                        <span>Chat On WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
