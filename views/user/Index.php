<?php

foreach (App::getInstance()->getTable('adherent')->all() as $row) {
    var_dump($row);
}


?>
<section class="container-fluid w-100" style="background-image: url('../public/assets/ressources/BackgroundAcceuil.png'); background-size: cover; background-position: center">
    <div id="icones" class="container-card d-flex justify-content-evenly align-content-center" style="padding-top: 50%; padding-bottom: 30%;">
        <div id="card_1" class="card p-3" style="background-color: rgba(255, 255, 255, 0.5);">
            <h2>L'AERODROME</h2>
            <img src="../public/assets/ressources/AppOne.png" alt="icone_piste" class="pt-1" />
            <button onclick="aerodrome()" class="decouvrer">Découvrez</button>
        </div>
        <div id="card_2" class="card p-3" style="background-color: rgba(255, 255, 255, 0.5);">
            <h2>Activité</h2>
            <img src="../public/assets/ressources/AppTwo.png" alt="icone_avion" class="pt-1" />
            <button onclick="aerodrome()" class="decouvrer">Découvrez</button>
        </div>
        <div id="card_3" class="card p-3" style="background-color: rgba(255, 255, 255, 0.5);">
            <h2>CATEGORIE D'ULM</h2>
            <img src="../public/assets/ressources/AppThree.png" alt="icone_ulm" class="pt-1" />
            <button onclick="aerodrome()" class="decouvrer" class="pb-3">Découvrez</button>
        </div>
    </div>
    <div class="container w-50 p-2">
        <p id="txt">Qui sommes nous ?</p>
    </div>

</section>
<section>
    <img src="../public/assets/ressources/BlackSmokeEnBasDesPersonnages.png" alt="black_smoke1" id="smoke">
    <div id="personnage" class="d-flex justify-content-evenly align-content-center" style="padding-top: 20%; padding-bottom: 30%;">
        <div id="card_1" class="card p-1">
            <h3>Kevin SATOUT</h3>
            <img src="../public/assets/ressources/ChefPilote.png" alt="chef_pilote" class="pt-1" />
            <button onclick="aerodrome()" class="decouvrer">Chef Pilote</button>
        </div>
        <div id="card_2" class="card p-1">
            <h3>Céline LAPLUME</h3>
            <img src="../public/assets/ressources/Secretaire.png" alt="secretaire" class="pt-1" />
            <button onclick="aerodrome()" class="decouvrer">Secrétaire</button>
        </div>
        <div id="card_3" class="card p-1">
            <h3>Alain STRUMENT</h3>
            <img src="../public/assets/ressources/Instructeur.png" alt="indtructeur" class="pt-1" />
            <button onclick="aerodrome()" class="decouvrer" class="pb-3">Instructeur</button>
        </div>
        <div id="card_4" class="card p-1">
            <h3>Justine VOLAVU</h3>
            <img src="../public/assets/ressources/Secretaire.png" alt="instructrice" class="pt-1" />
            <button onclick="aerodrome()" class="decouvrer" class="pb-3">Instructrice</button>
        </div>
    </div>
    <div class="container w-50 p-2">
        <p id="txt">Evenement à venir !</p>
    </div>
</section>

<script src="../assets/script/script.js"></script>
<script src="../assets/script/api_meteo.js"></script>