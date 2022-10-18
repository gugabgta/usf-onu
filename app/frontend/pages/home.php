<?php

$fish_class = new Fish();
$data = $fish_class->getAll();
$column = 4;
$lines = count($data) / 4;
$index = 0;

$card = function ($fish) {
    if (!$fish) {
        return '';
    }
    ob_start();
    echo <<<HTML
    <div class="card pad-top" id="$fish->name" style="width: 18rem;">
        <img src=$fish->image_src class="card-img-top">
        <div class="card-body">
            <h5 class="card-title"> $fish->name </h5>
            <p class="card-text"> $fish->description </p>
            <a href="#" class="btn btn-primary" onclick="showFish($fish->id_fish)">Status</a>
            <a href="#" class="btn btn-danger" onclick="deleteFish($fish->id_fish)">Delete</a>
        </div>
    </div>
    HTML;
    return ob_get_clean();
};
?>
<div class="container pad-top">
    <?php for ($i = 0 ; $i < $lines ; $i++): ?>
        <div class="row">
        <?php for ($j = 0 ; $j < $column ; $j++): ?>
            <div class="col">
                <?= $card($data[$index]) ?>
            </div>
            <?php $index++; ?>
        <?php endfor ?>
        </div>
    <?php endfor ?>
</div>

<style>
    .pad-top {
        margin-top: 20px;
    }
</style>
