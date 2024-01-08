<div class="aerodrome container-fluid text-center">
    <div class="row">
        <div class="col-md-12  mt-5 pt-5">
            <div class="background  mt-5 pt-5">
                <h1>L'AERODROME</h1>
                <img id="avion_aerodrome" src="../public/assets/ressources/aerodrome/piste.jpg" alt="avion" class="mt-5">
            </div>
        </div>
    </div>

    <div class="equipement container text-center">
        <p class="titre w-50 mb-5 mx-auto">Equipement</p>
        <div class="d-flex justify-content-evenly">
            <div><button onclick="changeDisplay(1)" class="p-1" id="btn1">INFRASTRUCTURES</button></div>
            <div><button onclick="changeDisplay(2)" class="p-2" id="btn2">INSTALLATIONS</button></div>
            <div><button onclick="changeDisplay(3)" class="p-4" id="btn3">SERVICES</button></div>
        </div>
        <div id="ctn1" class="background_equipement border_equipement pt-5 pb-5" class="container" style="display: block;">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3 mt-3 w-100">
                        <p class="d-flex align-items-right mx-auto w-50 p-4"> <img class="icones_aerodrome" src="../public/assets/ressources/aerodrome/surfacekm.png" alt="icone"> Surface totale
                            de
                            45 hectares dégagés</p>
                    </div>
                    <div class="mb-3">
                        <p class="d-flex align-items-right mx-auto w-50 p-4"> <img class="icones_aerodrome" src="../public/assets/ressources/aerodrome/PlaneGO2.png" alt="icone"> 2 pistes en X de
                            400 et 800 mètres</p>
                    </div>
                    <div class="">
                        <p class="d-flex align-items-right mx-auto w-50 p-4"> <img class="icones_aerodrome" src="../public/assets/ressources/aerodrome/waterontrack.png" alt="icone"> 8 hectares
                            d'hydrosurface</p>
                    </div>
                </div>
                <div class="col-md-6 m-auto">
                    <div class=""> <img src="../public/assets/ressources/aerodrome/Mapplan.png" alt="plan" class="w-50 plan"></div>
                </div>
            </div>
        </div>

        <div id="ctn2" class="background_equipement border_equipement pt-5 pb-5" class="container" style="display: none;">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3 mt-3 w-100">
                        <p class="d-flex align-items-right mx-auto w-50 p-4"> <img class="icones_aerodrome" src="../public/assets/ressources/aerodrome/hangar.png" alt="icone"> 3 hangars avec 4300 m²
                            de surface</p>
                    </div>
                    <div class="mb-3">
                        <p class="d-flex align-items-right mx-auto w-50 p-4"> <img class="icones_aerodrome" src="../public/assets/ressources/aerodrome/utilisateur-de-profil.png" alt="icone"> Locaux administratif
                            informatisés</p>
                    </div>
                </div>
                <div class="col-md-6 m-auto">
                    <div class=""> <img src="../public/assets/ressources/aerodrome/Mapplan.png" alt="plan" class="w-50 plan"></div>
                </div>
            </div>
        </div>

        <div id="ctn3" class="background_equipement border_equipement pt-5 pb-5" class="container" style="display: none;">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3 mt-3 w-100">
                        <p class="d-flex align-items-right mx-auto w-50 p-4"> <img class="icones_aerodrome" src="../public/assets/ressources/aerodrome/Repair3.png" alt="icone"> Atelier d’entretien et
                            de réparation</p>
                    </div>
                    <div class="mb-3">
                        <p class="d-flex align-items-right mx-auto w-50 p-4"> <img class="icones_aerodrome" src="../public/assets/ressources/aerodrome/RestoIcon.png" alt="icone"> Capacité d’accueil et
                            de restauration</p>
                    </div>
                    <div class="">
                        <p class="d-flex align-items-right mx-auto w-50 p-4"> <img class="icones_aerodrome" src="../public/assets/ressources/aerodrome/WifiIcon.png" alt="icone"> Connexion WIFI gratuit</p>
                    </div>
                </div>
                <div class="col-md-6 m-auto">
                    <div class=""> <img src="../public/assets/ressources/aerodrome/Mapplan.png" alt="plan" class="w-50 plan"></div>
                </div>
            </div>
        </div>

        <p class="w-50 mx-auto titre">Gallerie</p>
        <div class="gallerie container text-center">
            <div class="row mt-5">
                <div class="col-md-4 ">
                    <img src="../public/assets/ressources/aerodrome/RightLeft.jpg" alt="hélice_left" class="w-100" style="height: 100%;">
                </div>
                <div class="col-md-4">
                    <img src="../public/assets/ressources/aerodrome/Center.jpg" alt="hélice_center" class="w-100">
                </div>
                <div class="col-md-4">
                    <img src="../public/assets/ressources/aerodrome/RightLeft.jpg" alt="hélice_right" class="w-100" style="transform: scaleX(-1); height: 100%;">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <img src="../public/assets/ressources/aerodrome/Plane_Sky.jpg" alt="sky" class="w-100" style="height: 90%;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="../public/assets/ressources/aerodrome/Parapente.jpg" alt="parapente" class="w-100">
                </div>
                <div class="col-md-6">
                    <img src="../public/assets/ressources/aerodrome/Parapente.jpg" alt="parapente" class="w-100" style="transform: scaleX(-1);">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <img src="../public/assets/ressources/aerodrome/PlaneSky1.jpg" alt="plane" class="w-100" style="height: 100%;">
                </div>
                <div class="col-md-4">
                    <img src="../public/assets/ressources/aerodrome/PlaneSky2.jpg" alt="plane" class="w-100" style="height: 100%;">
                </div>
                <div class="col-md-4">
                    <img src="../public/assets/ressources/aerodrome/PlaneSky3.jpg" alt="plane" class="w-100" style="height: 100%;">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <img src="../public/assets/ressources/aerodrome/PlaneGround1.jpg" alt="plane" class="w-100" style="height: 100%;">>
                </div>
                <div class="col-md-4">
                    <img src="../public/assets/ressources/aerodrome/PlaneGround2.jpg" alt="plane" class="w-100" style="height: 100%;">>
                </div>
                <div class="col-md-4">
                    <img src="../public/assets/ressources/aerodrome/PlaneGround3.jpg" alt="plane" class="w-100" style="height: 100%;">>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <img src="../public/assets/ressources/aerodrome/PlaneGround.jpg" alt="plane" class="w-100" style="height: 80%;">>
                </div>
            </div>
        </div>
    </div>