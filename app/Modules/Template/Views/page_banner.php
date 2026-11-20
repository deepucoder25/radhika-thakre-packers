<?php
/**
 * Centralized Dynamic Breadcrumb & Page Banner Component
 * 
 * Variables received from the calling view:
 * @var string $title        Main H1 heading
 * @var string $description  Subtitle / paragraph description (optional)
 * @var array  $path         Breadcrumb items:
 *                           e.g. [
 *                             ['label' => 'Home', 'url' => site_url('/')],
 *                             ['label' => 'All States', 'url' => site_url('city')],
 *                             ['label' => 'Madhya Pradesh']
 *                           ]
 */

$rawHeading = $heading ?? $banner_heading ?? $banner_title ?? $title ?? $page_title ?? 'Relocation Services';

// Strip company name from heading if present (e.g. "About Us | Radhika Thakre Packers and Movers" -> "About Us")
$compName = $comp['company3'] ?? ($company3 ?? 'Radhika Thakre Packers and Movers');
if (!empty($compName)) {
    $rawHeading = preg_replace('/\s*\|\s*' . preg_quote($compName, '/') . '.*$/iu', '', $rawHeading);
    $rawHeading = preg_replace('/\s*-\s*' . preg_quote($compName, '/') . '.*$/iu', '', $rawHeading);
}
if (strpos($rawHeading, ' | ') !== false) {
    $parts = explode(' | ', $rawHeading);
    $rawHeading = trim($parts[0]);
}

$bannerTitle = trim($rawHeading);
$bannerDesc  = $description ?? $desc ?? $banner_desc ?? '';
$trail       = $path ?? $breadcrumb ?? $breadcrumbs ?? [];

// Default trail if none passed
if (empty($trail)) {
    $trail = [
        ['label' => 'Home', 'url' => site_url('/')],
        ['label' => $bannerTitle]
    ];
}
?>
<section class="page-banner" aria-label="<?= esc($bannerTitle) ?>">
    <div class="container">
        <nav class="breadcrumbs" aria-label="breadcrumb">
            <?php 
            $total = count($trail);
            $index = 0;
            foreach ($trail as $key => $item): 
                $index++;
                $isLast = ($index === $total);

                if (is_string($key) && is_string($item)) {
                    $label = $key;
                    $url   = $item;
                } elseif (is_array($item)) {
                    $label = $item['label'] ?? $item['name'] ?? $item['title'] ?? 'Page';
                    $url   = $item['url'] ?? $item['link'] ?? '';
                } else {
                    $label = (string)$item;
                    $url   = '';
                }

                if (!empty($compName)) {
                    $label = preg_replace('/\s*\|\s*' . preg_quote($compName, '/') . '.*$/iu', '', $label);
                }
                if (strpos($label, ' | ') !== false) {
                    $labelParts = explode(' | ', $label);
                    $label = trim($labelParts[0]);
                }

                $isHome = (strtolower($label) === 'home' || $index === 1);
            ?>
                <?php if (!$isLast && !empty($url)): ?>
                    <a href="<?= esc($url) ?>" class="breadcrumb-link">
                        <?php if ($isHome): ?>
                            <i class="fa-solid fa-house me-1" aria-hidden="true"></i>
                        <?php endif; ?>
                        <span><?= esc($label) ?></span>
                    </a>
                    <span class="breadcrumb-separator" aria-hidden="true">/</span>
                <?php else: ?>
                    <span class="breadcrumb-current" aria-current="page">
                        <?php if ($isHome && $total === 1): ?>
                            <i class="fa-solid fa-house me-1" aria-hidden="true"></i>
                        <?php endif; ?>
                        <?= esc($label) ?>
                    </span>
                <?php endif; ?>
            <?php endforeach; ?>
        </nav>
        <h1><?= esc($bannerTitle) ?></h1>
        <?php if (!empty($bannerDesc)): ?>
            <p><?= esc($bannerDesc) ?></p>
        <?php endif; ?>
    </div>
</section>
