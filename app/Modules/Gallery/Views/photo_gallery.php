<?php
/**
 * Modern High-Impact Photo Gallery View
 * Radhika Thakre Packers and Movers
 * Zero inline styles | 100% Responsive | Dynamic variables from Site.php
 * Photos loaded strictly from Admin Panel Database
 */

$compName     = $company3 ?? 'Radhika Thakre Packers and Movers';
$phoneNum     = $phone ?? '+91 98261 25421';
$phoneLink    = $phonehtml ?? 'href="tel:+919826125421"';
$waLink       = $whatsapphtml ?? 'https://wa.me/919826125421';

$title       = "Photo Gallery";
$description = "Explore real-time visual highlights of our multi-layer packing process, dedicated container trucks, car carrier trailers, and warehouse storage operations at " . $compName . ".";
$path        = [
    ['label' => 'Home', 'url' => site_url('/')],
    ['label' => 'Photo Gallery'],
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
                <h2 class="display-6 fw-bold text-dark mb-1">Real Shifting Operations in Action</h2>
                <p class="text-muted small mb-0">See how our trained team packs, loads, and transports client goods with zero-damage precision.</p>
            </div>

            <!-- Switcher: Photo vs Video Gallery -->
            <div class="gallery-toggle-group p-1 rounded-pill bg-light border d-inline-flex">
                <a href="<?= site_url('photo-gallery') ?>" class="btn btn-sm btn-danger rounded-pill fw-bold px-3">
                    <i class="bi bi-images me-1"></i> Photo Gallery
                </a>
                <a href="<?= site_url('video-gallery') ?>" class="btn btn-sm btn-light rounded-pill fw-semibold px-3 text-muted">
                    <i class="bi bi-play-circle-fill me-1"></i> Video Gallery
                </a>
            </div>
        </div>

        <!-- =========================================================================
             2. PHOTO GRID SHOWCASE (STRICTLY FROM ADMIN PANEL DATABASE)
             ========================================================================= -->
        <div class="row g-4" id="galleryGrid">
            <?php if (!empty($photos)): ?>
                <?php foreach ($photos as $photo): 
                    $imgUrl = base_url('assets/uploads/gallery/' . ($photo->image ?? ''));
                    $pTitle = !empty($photo->title) ? $photo->title : ($photo->album_name ?? 'Relocation Photo');
                    $pAlbum = !empty($photo->album_name) ? $photo->album_name : 'General';
                ?>
                    <div class="col-12 col-sm-6 col-lg-4 gallery-item">
                        <div class="gallery-card rounded-4 overflow-hidden border shadow-sm h-100 d-flex flex-column" onclick="openPhotoModal('<?= esc($imgUrl) ?>', '<?= esc($pTitle) ?>', '<?= esc($pAlbum) ?>')">
                            <div class="gallery-img-wrapper position-relative overflow-hidden">
                                <img src="<?= esc($imgUrl) ?>" alt="<?= esc($pTitle) ?>" class="gallery-img" loading="lazy" onerror="this.onerror=null; this.src='<?= base_url('assets/img/about/about.png') ?>';">
                                <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                    <span class="gallery-zoom-badge"><i class="bi bi-arrows-fullscreen"></i></span>
                                </div>
                                <?php if (!empty($photo->album_name)): ?>
                                    <span class="gallery-cat-pill"><?= esc($photo->album_name) ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="p-3 bg-white flex-grow-1">
                                <h3 class="h6 fw-bold text-dark mb-1"><?= esc($pTitle) ?></h3>
                                <p class="small text-muted mb-0">Professional moving service by <?= esc($compName) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <!-- Empty State When No Photos Uploaded Yet In Admin Panel -->
                <div class="col-12">
                    <div class="text-center py-5 p-4 rounded-4 bg-light border">
                        <div class="gallery-empty-icon mb-3 text-danger fs-1">
                            <i class="bi bi-images"></i>
                        </div>
                        <h3 class="h5 fw-bold text-dark mb-2">No Photos Uploaded Yet</h3>
                        <p class="small text-muted mb-3">Photos added via the admin panel will appear here automatically.</p>
                        <a <?= $phoneLink ?> class="btn btn-sm btn-outline-danger rounded-pill px-3 fw-bold">
                            <i class="bi bi-telephone-fill me-1"></i> Contact Helpline: <?= esc($phoneNum) ?>
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- =========================================================================
     3. LIGHTBOX MODAL FOR PREVIEWING FULL PHOTO
     ========================================================================= -->
<div class="modal fade" id="galleryPhotoModal" tabindex="-1" aria-labelledby="galleryPhotoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4 border-0 shadow-lg overflow-hidden bg-dark text-white">
            <div class="modal-header border-secondary border-opacity-25 py-2 px-3">
                <h5 class="modal-title fs-6 fw-bold text-white mb-0" id="galleryPhotoModalLabel">Photo Preview</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0 text-center bg-black">
                <img src="" id="modalPreviewImg" alt="Preview" class="gallery-modal-preview-img img-fluid">
            </div>
            <div class="modal-footer border-secondary border-opacity-25 py-2 px-4 justify-content-between">
                <p class="small text-white-50 mb-0" id="modalPreviewDesc"></p>
                <button type="button" class="btn btn-sm btn-outline-light rounded-pill px-3" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
function openPhotoModal(imgSrc, title, desc) {
    document.getElementById('modalPreviewImg').src = imgSrc;
    document.getElementById('galleryPhotoModalLabel').innerText = title || 'Relocation Photo';
    document.getElementById('modalPreviewDesc').innerText = desc || '';
    var modal = new bootstrap.Modal(document.getElementById('galleryPhotoModal'));
    modal.show();
}
</script>
