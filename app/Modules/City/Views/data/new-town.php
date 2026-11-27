<?php
echo $city;
$cities = array(
    array('nm' => 'New Town Action Area I', 'pin' => '700156', 'lat' => '22.5752', 'lon' => '88.4862', 'sc' => 'WB'),
    array('nm' => 'New Town Action Area II', 'pin' => '700156', 'lat' => '22.5788', 'lon' => '88.4847', 'sc' => 'WB'),
    array('nm' => 'New Town Action Area III', 'pin' => '700156', 'lat' => '22.5739', 'lon' => '88.4824', 'sc' => 'WB'),
    array('nm' => 'New Town Action Area IV', 'pin' => '700156', 'lat' => '22.5756', 'lon' => '88.4865', 'sc' => 'WB'),
);
?>
<div class="row" id="pad">
    <?php
    $st = str_replace(" ", "-", $city);
    foreach ($cities as $ct) :
        $link = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
    ?>
        <div class="col-lg-3 col-sm-6 col-md-6">
            <div class="citycard">
                <a href="<?= site_url(strtolower($st) . "/packers-movers-$link") ?>">
                    <div class="" style="display: flex;">
                        <div class="col-12 cityname">
                            <i class="fas fa-map-marker-alt location-icon" style="font-size:20px;padding-right: 5px;"></i>
                            Packers Movers in <b style="font-size:20px;"><?= $ct['nm'] ?></b>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</div>