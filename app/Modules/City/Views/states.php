<?php
$title       = "All States Packers & Movers Locations";
$description = "Door-to-door household relocation, office moving, and vehicle transport across 500+ Indian cities in all major states.";
$path        = [
    ['label' => 'Home', 'url' => site_url('/')],
    ['label' => 'All States'],
];
?>
<?= view('Modules\Template\Views\page_banner', compact('title', 'description', 'path')) ?>

<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Nationwide Network</span>
            <h2 class="section-title">Select Your State / Union Territory</h2>
            <p class="section-subtitle">Click on your state below to explore verified packers and movers operating in your local city.</p>
        </div>

        <!-- Live Instant State Search Filter -->
        <div class="state-search-box">
            <div class="state-search-input-group">
                <i class="fa-solid fa-magnifying-glass state-search-icon" aria-hidden="true"></i>
                <input type="text" id="stateSearchInput" class="state-search-control" placeholder="Search state or union territory (e.g. Maharashtra, Delhi, Gujarat)..." aria-label="Search State or Union Territory">
                <button type="button" id="stateSearchClear" class="state-search-clear d-none" aria-label="Clear search">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
        </div>

        <!-- State Image Cards Grid -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3 g-md-4" id="statesContainer">
            <?php 
            $imageExtensions = ['webp', 'jpg', 'jpeg', 'png'];
            foreach ($states as $st): 
                $stateImg = null;
                foreach ($imageExtensions as $ext) {
                    if (file_exists(FCPATH . 'assets/img/state/' . $st['slug'] . '.' . $ext)) {
                        $stateImg = base_url('assets/img/state/' . $st['slug'] . '.' . $ext);
                        break;
                    }
                }
            ?>
                <div class="col state-card-col" data-state-name="<?= esc(strtolower($st['name'])) ?>" data-state-code="<?= esc(strtolower($st['code'])) ?>">
                    <a href="<?= site_url('city/' . $st['slug']) ?>" class="state-card-link" aria-label="Explore verified packers and movers in <?= esc($st['name']) ?>">
                        <article class="state-image-card">
                            <div class="state-card-media">
                                <?php if ($stateImg): ?>
                                    <img src="<?= $stateImg ?>" alt="Packers and Movers in <?= esc($st['name']) ?>" class="state-card-img" loading="lazy" width="320" height="175">
                                    <div class="state-card-overlay"></div>
                                <?php else: ?>
                                    <div class="state-card-placeholder">
                                        <div class="state-placeholder-icon-wrap">
                                            <span class="state-placeholder-code"><?= esc($st['code']) ?></span>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <span class="state-code-badge"><?= esc($st['code']) ?></span>
                                <span class="state-cities-badge"><i class="fa-solid fa-location-dot"></i> <?= esc($st['cities_count']) ?> Cities</span>
                            </div>
                            <div class="state-card-body">
                                <div class="state-card-info">
                                    <h3 class="state-card-title"><?= esc($st['name']) ?></h3>
                                    <p class="state-card-sub"><i class="fa-solid fa-circle-check"></i> Verified Network</p>
                                </div>
                                <span class="state-card-btn" aria-hidden="true">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </div>
                        </article>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- No Matching Results Message -->
        <div id="stateNoResults" class="state-no-results d-none mt-3">
            <div class="state-no-results-icon"><i class="fa-solid fa-map-location-dot"></i></div>
            <h3 class="h5 fw-bold text-dark mb-1">No Matching State Found</h3>
            <p class="text-muted small mb-0">Try searching with a different state name or abbreviation.</p>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var input = document.getElementById('stateSearchInput');
    var clearBtn = document.getElementById('stateSearchClear');
    var cards = document.querySelectorAll('.state-card-col');
    var noResults = document.getElementById('stateNoResults');

    if (input) {
        input.addEventListener('input', function() {
            var q = this.value.trim().toLowerCase();
            var matchCount = 0;

            if (clearBtn) {
                if (q.length > 0) {
                    clearBtn.classList.remove('d-none');
                } else {
                    clearBtn.classList.add('d-none');
                }
            }

            cards.forEach(function(card) {
                var name = card.getAttribute('data-state-name') || '';
                var code = card.getAttribute('data-state-code') || '';
                if (name.indexOf(q) !== -1 || code.indexOf(q) !== -1) {
                    card.classList.remove('d-none');
                    matchCount++;
                } else {
                    card.classList.add('d-none');
                }
            });

            if (noResults) {
                if (matchCount === 0) {
                    noResults.classList.remove('d-none');
                } else {
                    noResults.classList.add('d-none');
                }
            }
        });

        if (clearBtn) {
            clearBtn.addEventListener('click', function() {
                input.value = '';
                input.dispatchEvent(new Event('input'));
                input.focus();
            });
        }
    }
});
</script>
