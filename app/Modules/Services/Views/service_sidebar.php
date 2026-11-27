<?php
/**
 * Shared Services Sidebar Component
 * Reusable across all 9 individual service pages with active state switcher.
 */

$current = $activeService ?? 'household-moving';

$serviceNavItems = [
    [
        'slug'  => 'household-moving',
        'route' => site_url('household-moving'),
        'name'  => 'Home Shifting',
        'icon'  => 'bi-house-check-fill'
    ],
    [
        'slug'  => 'office-relocation',
        'route' => site_url('office-relocation'),
        'name'  => 'Office Shifting',
        'icon'  => 'bi-building-fill-gear'
    ],
    [
        'slug'  => 'car-transportation',
        'route' => site_url('car-transportation'),
        'name'  => 'Car shifting',
        'icon'  => 'bi-car-front-fill'
    ],
    [
        'slug'  => 'bike-transportation',
        'route' => site_url('bike-transportation'),
        'name'  => 'Bike Shifting',
        'icon'  => 'bi-bicycle'
    ],
    [
        'slug'  => 'packing-moving',
        'route' => site_url('packing-moving'),
        'name'  => 'Packing & Unpacking',
        'icon'  => 'bi-boxes'
    ],
    [
        'slug'  => 'loading-unloading',
        'route' => site_url('loading-unloading'),
        'name'  => 'Loading & Unloading',
        'icon'  => 'bi-truck'
    ],
    [
        'slug'  => 'warehouse-storage',
        'route' => site_url('warehouse-storage'),
        'name'  => 'Storage & Warehouse',
        'icon'  => 'bi-archive-fill'
    ],
    [
        'slug'  => 'transit-insurance',
        'route' => site_url('transit-insurance'),
        'name'  => 'Goods Transit Insurance',
        'icon'  => 'bi-shield-fill-check'
    ],
];
?>

<aside class="service-sidebar">
    <!-- 1. All Services Navigation Widget -->
    <div class="service-sidebar-card">
        <h3 class="service-sidebar-title">
            <i class="bi bi-grid-fill text-danger"></i>
            <span>Our Relocation Services</span>
        </h3>
        <nav class="service-nav-list" aria-label="Services Navigation">
            <?php foreach ($serviceNavItems as $item): 
                $isActive = ($current === $item['slug']);
            ?>
                <a href="<?= $item['route'] ?>" class="service-nav-item <?= $isActive ? 'active' : '' ?>">
                    <span><i class="bi <?= $item['icon'] ?> me-2 text-danger"></i><?= esc($item['name']) ?></span>
                    <i class="bi bi-chevron-right small text-muted"></i>
                </a>
            <?php endforeach; ?>
        </nav>
    </div>

    <!-- 2. Fast Free Quote Request Form Widget -->
    <div class="service-sidebar-card">
        <h3 class="service-sidebar-title">
            <i class="bi bi-calculator-fill text-danger"></i>
            <span>Fast Moving Estimate</span>
        </h3>
        <p class="small text-muted mb-3">
            Get an instant, customized shifting estimate with zero hidden charges:
        </p>
        
        <form action="<?= site_url('contact/send') ?>" method="POST" class="service-quote-form">
            <?= csrf_field() ?>
            <input type="hidden" name="service" value="<?= esc($activeTitle ?? 'Relocation Services') ?>">

            <div class="mb-3">
                <label for="sideName" class="form-label">Full Name *</label>
                <input type="text" class="form-control" id="sideName" name="name" placeholder="Your Full Name" required>
            </div>

            <div class="mb-3">
                <label for="sidePhone" class="form-label">Phone Number *</label>
                <input type="tel" class="form-control" id="sidePhone" name="phone" placeholder="10-digit Mobile Number" required>
            </div>

            <div class="row g-2 mb-3">
                <div class="col-6">
                    <label for="sideFrom" class="form-label">Moving From *</label>
                    <input type="text" class="form-control" id="sideFrom" name="move_from" placeholder="Origin City" required>
                </div>
                <div class="col-6">
                    <label for="sideTo" class="form-label">Moving To *</label>
                    <input type="text" class="form-control" id="sideTo" name="move_to" placeholder="Destination City" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="sideReq" class="form-label">Requirement Details</label>
                <textarea class="form-control" id="sideReq" name="message" rows="2" placeholder="e.g., 2 BHK, Car, 3 BHK Villa..."></textarea>
            </div>

            <button type="submit" class="btn btn-danger w-100 py-2 fw-bold text-white rounded-3 shadow-sm">
                <i class="bi bi-send-fill me-2"></i>Get Free Quote Now
            </button>
        </form>
    </div>

    <!-- 3. Direct Dispatch Helpline Widget -->
    <div class="service-sidebar-card service-helpline-box">
        <div class="d-inline-flex p-3 rounded-circle bg-white text-danger mb-3 shadow-sm fs-3">
            <i class="bi bi-headset"></i>
        </div>
        <h4 class="h5 fw-bold text-dark mb-1">Need Urgent Shifting?</h4>
        <p class="small text-muted mb-3">
            Speak directly with our <?= esc($company3) ?> relocation manager:
        </p>
        <div class="d-grid gap-2">
            <a <?= $phonehtml ?> class="btn btn-danger fw-bold py-2 rounded-pill shadow-sm">
                <i class="bi bi-telephone-fill me-2"></i>Call <?= esc($phone) ?>
            </a>
            <a href="<?= esc($whatsapphtml) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-success fw-bold py-2 rounded-pill shadow-sm">
                <i class="bi bi-whatsapp me-2"></i>WhatsApp Direct
            </a>
        </div>
    </div>

    <!-- 4. Quality & Verification Trust Badges -->
    <div class="service-sidebar-card bg-light border-0">
        <div class="d-flex align-items-center gap-3 mb-3">
            <i class="bi bi-patch-check-fill text-warning fs-1"></i>
            <div>
                <div class="fw-bold text-dark">ISO 9001:2015 Certified</div>
                <div class="small text-muted">IBA Approved Logistics Operator</div>
            </div>
        </div>
        <div class="d-flex align-items-center gap-3">
            <i class="bi bi-star-fill text-warning fs-1"></i>
            <div>
                <div class="fw-bold text-dark"><?= esc($ratingValue) ?> / 5 Star Rating</div>
                <div class="small text-muted">Verified by <?= esc($ratingCount) ?>+ Client Reviews</div>
            </div>
        </div>
    </div>
</aside>
