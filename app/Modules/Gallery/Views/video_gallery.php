<?php
/**
 * Modern High-Impact Video Gallery View
 * Radhika Thakre Packers and Movers
 * Zero inline styles | 100% Responsive | Dynamic variables from Site.php
 * Videos loaded strictly from Admin Panel Database
 */

$compName     = $company3 ?? 'Radhika Thakre Packers and Movers';
$phoneNum     = $phone ?? '+91 98261 25421';
$phoneLink    = $phonehtml ?? 'href="tel:+919826125421"';
$waLink       = $whatsapphtml ?? 'https://wa.me/919826125421';

$title       = "Video Gallery";
$description = "Watch step-by-step cargo handling processes, household packing techniques, and transport safety standards in action at " . $compName . ".";
$path        = [
    ['label' => 'Home', 'url' => site_url('/')],
    ['label' => 'Video Gallery'],
];
?>
<?= view('Modules\Template\Views\page_banner', compact('title', 'description', 'path')) ?>

<section class="py-5 bg-white border-bottom">
    <div class="container py-2 py-lg-4">

        <!-- =========================================================================
             1. HEADER & GALLERY SWITCHER TABS
             ========================================================================= -->
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-4 pb-3 border-bottom">
            <div>
                <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill fw-bold text-uppercase mb-2">
                    Visual Work Portfolio
                </span>
                <h2 class="display-6 fw-bold text-dark mb-1">Watch Our Moving Fleet in Action</h2>
                <p class="text-muted small mb-0">See how our trained team packs, loads, and transports client goods with zero-damage precision.</p>
            </div>

            <!-- Switcher: Photo vs Video Gallery -->
            <div class="gallery-toggle-group p-1 rounded-pill bg-light border d-inline-flex">
                <a href="<?= site_url('photo-gallery') ?>" class="btn btn-sm btn-light rounded-pill fw-semibold px-3 text-muted">
                    <i class="bi bi-images me-1"></i> Photo Gallery
                </a>
                <a href="<?= site_url('video-gallery') ?>" class="btn btn-sm btn-danger rounded-pill fw-bold px-3">
                    <i class="bi bi-play-circle-fill me-1"></i> Video Gallery
                </a>
            </div>
        </div>

        <!-- =========================================================================
             2. VIDEO GRID SHOWCASE (STRICTLY FROM ADMIN PANEL DATABASE)
             ========================================================================= -->
        <div class="row g-4" id="videoGrid">
            <?php if (!empty($videos)): ?>
                <?php foreach ($videos as $video): 
                    $rawUrl = $video->video_url ?? '';
                    $embedUrl = $rawUrl;
                    if (preg_match('/(?:youtube\.com\/(?:watch\?.*v=|embed\/)|youtu\.be\/)([^&?\/]+)/', $rawUrl, $matches)) {
                        $embedUrl = 'https://www.youtube.com/embed/' . $matches[1];
                    }
                    $vTitle = !empty($video->title) ? $video->title : 'Relocation Operation Video';
                ?>
                    <div class="col-12 col-sm-6 col-lg-4 video-item">
                        <div class="gallery-card rounded-4 overflow-hidden border shadow-sm h-100 d-flex flex-column">
                            <div class="video-frame-wrapper ratio ratio-16x9 bg-dark">
                                <iframe src="<?= esc($embedUrl) ?>" 
                                        title="<?= esc($vTitle) ?>" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                        allowfullscreen 
                                        class="video-iframe" 
                                        loading="lazy"></iframe>
                            </div>
                            <div class="p-3 bg-white flex-grow-1">
                                <h3 class="h6 fw-bold text-dark mb-1 d-flex align-items-center gap-2">
                                    <i class="bi bi-play-circle-fill text-danger flex-shrink-0"></i>
                                    <span><?= esc($vTitle) ?></span>
                                </h3>
                                <p class="small text-muted mb-0">Professional moving service by <?= esc($compName) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <!-- Empty State When No Videos Uploaded Yet In Admin Panel -->
                <div class="col-12">
                    <div class="text-center py-5 p-4 rounded-4 bg-light border">
                        <div class="gallery-empty-icon mb-3 text-danger fs-1">
                            <i class="bi bi-camera-reels"></i>
                        </div>
                        <h3 class="h5 fw-bold text-dark mb-2">No Videos Uploaded Yet</h3>
                        <p class="small text-muted mb-3">Videos added via the admin panel will appear here automatically.</p>
                        <a <?= $phoneLink ?> class="btn btn-sm btn-outline-danger rounded-pill px-3 fw-bold">
                            <i class="bi bi-telephone-fill me-1"></i> Contact Helpline: <?= esc($phoneNum) ?>
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
