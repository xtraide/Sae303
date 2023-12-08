<?php

$app = App\App::getInstance();

$post = $app->getTable('pilote');
foreach (\App\Table\Pilote::all() as $row) {
    var_dump($row);
}

APP\App::setTitle("Acceuil");
?>
<section class="carousel_scene position-absolute top-20 start-50 translate-middle-x" style="width: 180px; height: 110px; perspective: 640px;">

    <section class="carousel position-relative w-100 h-100" style="transform-style: preserve-3d; transition: transform 0.4s;">

        <div class="face f_01 position-absolute text-center" style="height: 120px; width: var(--faceWidth); font-size: 4.4rem; background-color: white; border: 3px solid;">
        </div>
        <div class="face backface back_01 position-absolute"></div>

        <div class="face f_02 position-absolute text-center" style="height: 120px; width: var(--faceWidth); font-size: 4.4rem; background-color: white; border: 3px solid;">
        </div>
        <div class="face backface back_02 position-absolute"></div>

        <div class="face f_03 position-absolute text-center" style="height: 120px; width: var(--faceWidth); font-size: 4.4rem; background-color: white; border: 3px solid;">
        </div>
        <div class="face backface back_03 position-absolute"></div>

    </section>
</section>
<section class="button_wrap position-relative d-flex justify-content-center w-90 mt-23rem">
    <button class="button cursor-pointer width-6rem height-6rem m-2 fs-3" id="prev">◄</button>
    <button class="button cursor-pointer width-6rem height-6rem m-2 fs-3" id="next">►</button>
</section>
<div class="card border-0 m-auto p-3 text-center">
    <h1 id="h1-card">Météo à Vesoul</h1>
    <div class="weather-icon"></div>
    <div id="temp-info"></div>
    <div id="conditions-info"></div>
    <div id="wind-info"></div>
    <div id="clouds-info"></div>
</div>
<script src="../assets/script/script.js"></script>
<script src="../assets/script/api_meteo.js"></script>