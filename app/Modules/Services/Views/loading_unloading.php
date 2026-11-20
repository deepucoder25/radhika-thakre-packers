<?php
/**
 * Loading and Unloading Services Page - Radhika Thakre Packers and Movers
 * Content: 100% matched to https://radhikathakrepackersmovers.com/indore-loading-unloading
 * Layout: Modern, fully responsive, zero inline styles, unified .service-* CSS
 */

$title       = "Loading and Unloading";
$description = "Professional loading and unloading services by " . $company3 . ". Trained handling crew, modern hydraulic ramps, dollies, hand trucks, and scratch-free furniture maneuvering.";
$path        = [
    ['label' => 'Home', 'url' => site_url('/')],
    ['label' => 'Loading & Unloading'],
];
?>
<?= view('Modules\Template\Views\page_banner', compact('title', 'description', 'path')) ?>

<!-- Schema.org JSON-LD for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Loading and Unloading Services",
  "provider": {
    "@type": "LocalBusiness",
    "name": "<?= esc($company3) ?>",
    "telephone": "<?= esc($phone) ?>"
  },
  "areaServed": {
    "@type": "City",
    "name": "Indore"
  },
  "description": "<?= esc($description) ?>"
}
</script>

<section class="service-page-section">
    <div class="container">
        <div class="row g-4 g-lg-5">
            <div class="col-lg-8">
                <!-- 1. Overview -->
                <div class="service-overview-card">
                    <span class="service-badge-pill">
                        <i class="bi bi-truck text-danger"></i> Skilled Labor &amp; Heavy Cargo Handling
                    </span>
                    <h1 class="service-main-heading">
                        Best Loading and Unloading Services in Indore &amp; Across India
                    </h1>
                    <p class="service-lead-text">
                        At <strong><?= esc($company3) ?></strong>, we provide one of the best Loading and Unloading Services in India to make sure your things are transported carefully and safely. Our Loading and Unloading Services are completely safe and secure for all types of shifting including expert packers and movers for exhibition handling in my area.
                    </p>
                    <p class="service-body-text">
                        We are one of the most reputed Loading and Unloading Services in India which presents <strong>IBA-approved services</strong> to fulfill all shifting requirements. Contact us for the most efficient and economical Loading and Unloading Services for local movers and packers that guarantee your items' safe delivery.
                    </p>
                    <p class="service-body-text">
                        The services that we offer are scam-free and IBA-endorsed Loading and Unloading Services that handle goods with precision ground equipment like hydraulic ramps, hand trollies, dollies, and lifting straps from the onset to the end.
                    </p>
                    <p class="service-body-text mb-0">
                        Thus, our Loading and Unloading Services guarantee the proven categories of Loading and Unloading Services and the best removalists. If you require IBA-approved Loading and Unloading Services for a headache-free move or superior movers packers services, Radhika Thakre Packers and Movers are one of the top 5 Best Loading and Unloading Services in India, providing impeccable services every time.
                    </p>

                    <!-- Quick Metrics Grid -->
                    <div class="service-stats-grid">
                        <div class="service-stat-item">
                            <div class="service-stat-num">Trained</div>
                            <div class="service-stat-label">Ground Crew</div>
                        </div>
                        <div class="service-stat-item">
                            <div class="service-stat-num">IBA</div>
                            <div class="service-stat-label">Approved Operator</div>
                        </div>
                        <div class="service-stat-item">
                            <div class="service-stat-num">Hydraulic</div>
                            <div class="service-stat-label">Lift Ramps</div>
                        </div>
                        <div class="service-stat-item">
                            <div class="service-stat-num">Zero</div>
                            <div class="service-stat-label">Wall Scuffs</div>
                        </div>
                    </div>
                </div>

                <!-- 2. Capabilities -->
                <div class="service-overview-card">
                    <h2 class="service-section-title">
                        <i class="bi bi-stars text-danger"></i>
                        Safe Handling Machinery &amp; Techniques
                    </h2>
                    <p class="text-muted small mb-4">
                        We eliminate manual dropping risks through specialized mechanical handling equipment:
                    </p>

                    <div class="service-features-grid">
                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-gear-wide-connected"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Hydraulic Tailgate Lifts</h3>
                                <p class="service-feature-desc">
                                    Heavy double-door refrigerators, safes, and washing machines are elevated smoothly without physical jerking or manual strain.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-cart4"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Rubberized Floor Dollies</h3>
                                <p class="service-feature-desc">
                                    Multi-wheel hand trucks and rubber-padded dollies move heavy wooden almirahs and couches across marble flooring without scratching tiles.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-shield-shaded"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Doorway &amp; Stair Protectors</h3>
                                <p class="service-feature-desc">
                                    Corner guards and protective blankets are hung over narrow staircases and doorway trims to prevent chipping paint or wood finish.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-pie-chart-fill"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Weight-Balanced Container Stacking</h3>
                                <p class="service-feature-desc">
                                    Cargo inside trucks is distributed by weight density — heavy furniture on the floor anchored by ratchet belts; lighter cartons on top.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Vetted &amp; Fit Ground Crew</h3>
                                <p class="service-feature-desc">
                                    Our handlers are background-verified full-time professionals trained in ergonomics, lifting safety, and respectful customer manners.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature-card">
                            <div class="service-feature-icon">
                                <i class="bi bi-arrow-down-square-fill"></i>
                            </div>
                            <div class="service-feature-body">
                                <h3 class="service-feature-name">Precise Room-by-Room Unloading</h3>
                                <p class="service-feature-desc">
                                    Boxes and furniture are carried directly into their designated bedrooms, living halls, and kitchens rather than dumped at the front door.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Workflow -->
                <div class="service-overview-card">
                    <h2 class="service-section-title">
                        <i class="bi bi-diagram-3-fill text-danger"></i>
                        Our 5-Step Loading &amp; Unloading Procedure
                    </h2>

                    <div class="service-process-list">
                        <div class="service-process-step">
                            <div class="service-step-badge">1</div>
                            <div>
                                <h3 class="service-step-title">Corridor Inspection &amp; Obstacle Clearing</h3>
                                <p class="service-step-desc">
                                    We survey hallways, doorways, elevators, and stairs, padding sharp edges to create a clear, accident-free moving pathway.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">2</div>
                            <div>
                                <h3 class="service-step-title">Heavy Appliance Dolly Transit</h3>
                                <p class="service-step-desc">
                                    Refrigerators, washing machines, and solid wood furniture are rolled on pneumatic tire dollies to the container tailgate.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">3</div>
                            <div>
                                <h3 class="service-step-title">Hydraulic Lift &amp; Container Lashing</h3>
                                <p class="service-step-desc">
                                    Items are placed inside the container, secured with locking ratchet straps, and locked behind security padlocks.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">4</div>
                            <div>
                                <h3 class="service-step-title">Destination Tailgate Offloading</h3>
                                <p class="service-step-desc">
                                    At the destination, seals are verified and items are offloaded gently via ramps without rough dropping or friction.
                                </p>
                            </div>
                        </div>

                        <div class="service-process-step">
                            <div class="service-step-badge">5</div>
                            <div>
                                <h3 class="service-step-title">Room Placement &amp; Final Inspection</h3>
                                <p class="service-step-desc">
                                    Each piece is carried to your preferred spot, leveled on the floor, and verified with your move checklist.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. Rate Table -->
                <div class="service-overview-card">
                    <h2 class="service-section-title">
                        <i class="bi bi-tag-fill text-danger"></i>
                        Loading &amp; Unloading Labor Rates
                    </h2>
                    <p class="text-muted small mb-4">
                        Estimated standalone labor charges based on crew size and floor levels:
                    </p>

                    <div class="service-table-card">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th>Service Scale</th>
                                        <th>Crew Size</th>
                                        <th>Rates (With Lift Available)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>1 BHK Shift Labor</strong></td>
                                        <td>2 – 3 Handlers</td>
                                        <td class="text-danger fw-bold">₹1,800 – ₹2,800</td>
                                    </tr>
                                    <tr>
                                        <td><strong>2 BHK Shift Labor</strong></td>
                                        <td>3 – 4 Handlers</td>
                                        <td class="text-danger fw-bold">₹2,800 – ₹4,200</td>
                                    </tr>
                                    <tr>
                                        <td><strong>3 BHK Shift Labor</strong></td>
                                        <td>4 – 6 Handlers</td>
                                        <td class="text-danger fw-bold">₹4,200 – ₹6,500</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Heavy Safe / Piano / Industrial</strong></td>
                                        <td>Specialized Team</td>
                                        <td class="text-danger fw-bold">₹2,500 – ₹5,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Sidebar -->
            <div class="col-lg-4">
                <?= view('Modules\Services\Views\service_sidebar', array_merge(get_defined_vars(), [
                    'activeService' => 'loading-unloading',
                    'activeTitle'   => 'Loading & Unloading'
                ])) ?>
            </div>
        </div>
    </div>
</section>
