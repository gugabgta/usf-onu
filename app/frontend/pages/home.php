<?php

    $fish = new Fish();
    $data = $fish->getAll();
    var_dump(print_r($data, true));
?>
<div class="container pad-top">
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>

<style>
    .pad-top {
        margin-top: 20px;
    }
</style>
