<section class="container-fluid w-100" style="background-image: url('../public/assets/ressources/BackgroundAcceuil.png'); 
           background-size: cover; 
           background-position: center">
    <div id="icones" class="container-card d-flex justify-content-evenly align-content-center"
        style="padding-top: 50%; padding-bottom: 30%;">
        <div id="card_1" class="card p-3" style="background-color: rgba(255, 255, 255, 0.5);">
            <h2>L'AERODROME</h2>
            <img src="../public/assets/ressources/AppOne.png" alt="icone_piste" class="pt-1" />
            <button onclick="aerodrome()" class="decouvrer">Découvrez</button>
        </div>
        <div id="card_2" class="card p-3" style="background-color: rgba(255, 255, 255, 0.5);">
            <h2>ACTIVITE</h2>
            <img src="../public/assets/ressources/AppTwo.png" alt="icone_avion" class="pt-1" />
            <button onclick="aerodrome()" class="decouvrer">Découvrez</button>
        </div>
        <div id="card_3" class="card p-3" style="background-color: rgba(255, 255, 255, 0.5);">
            <h2>CATEGORIE D'ULM</h2>
            <img src="../public/assets/ressources/AppThree.png" alt="icone_ulm" class="pt-1" />
            <button onclick="aerodrome()" class="decouvrer" class="pb-3">Découvrez</button>
        </div>
    </div>
    <div class="container w-50 p-2 z-0">
        <p id="txt" class="z-0">Qui sommes nous ?</p>
    </div>
    <!--
        <img src="../public/assets/ressources/BlackSmokeEnBasDesPersonnages.png" alt="black_smoke1" id="smoke">
    -->

</section>
<section>

    <div id="personnage" class="d-flex justify-content-evenly align-content-center"
        style="padding-top: 20%; padding-bottom: 30%;">
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

</section>
<div class="fondu">
    <div class="container w-50 p-2">
        <h1 id="txt" class="title_h1">EVENEMENT A VENIR !</h1>
    </div>

    <div class="d-flex justify-content-center">
        <div id="carouselExampleIndicators" class="carousel slide m-auto d-flex flex-column" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active carou-card">
                    <div class="card" style="width: 30rem; height: 400px">

                        <div class="card-body ">
                            <h5 class="card-title text-center">France Air Expo 2023</h5>
                            <div class="m-auto text-center">
                                <img src="../public/assets/ressources/yesiiir.png" width="80%"
                                    class="m-auto text-center" alt="..." />
                            </div>
                            <div class="d-flex">
                                <img src="../public/assets/ressources/loc.png" alt="loc" width="5%" height="5%" />
                                <p>Aéroport de Lyon-Bron - Bron, France</p>
                            </div>
                            <div class="d-flex">
                                <img src="../public/assets/ressources/temps.png " alt="heur" width="5%" height="5%" />
                                <p>09:00 AM to 02:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carou-card">
                    <div class="card" style="width: 30rem; height: 400px">
                        <div class="card-body m-auto text-center">
                            <h5 class="card-title text-center">
                                1er Rassemblement ULM des femmes pilotes
                            </h5>
                            <div class="m-auto text-center">
                                <img src="../public/assets/ressources/360_F_159634840_Fa2HPb8ITrbr5gddY2eKlomVfsnu1gx6.png"
                                    alt="..." />
                            </div>
                            <div class="d-flex">
                                <img src="../public/assets/ressources/loc.png" alt="loc" width="5%" height="5%" />
                                <p>Saint-Martin-de-Castillon</p>
                            </div>
                            <div class="d-flex">
                                <img src="../public/assets/ressources/temps.png" alt="heur" width="5%" height="5%" />
                                <p>09:00 AM to 06:00 PM </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carou-card">
                    <div class="card" style="width: 30rem; height: 400px">
                        <div class="card-body">
                            <h5 class="card-title text-center">Journée sécurité des vols - GRAND EST</h5>
                            <div class="m-auto text-center">
                                <img src="../public/assets/ressources/Event1 (1).png" width="80%" alt="..."
                                    class="m-auto text-center" />
                            </div>
                            <div class="d-flex">
                                <img src="../public/assets/ressources/loc.png" alt="loc" width="5%" height="5%" />
                                <p>Serrouville, France</p>
                            </div>
                            <div class="d-flex">
                                <img src="../public/assets/ressources/temps.png" width="5%" height="5%" alt="heur" />
                                <p>09:00 AM to 02:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active m-3"
            aria-current="true" aria-label="Slide 1" style="
          background-color: black;
          height: 20px;
          width: 20px;
          border-radius: 100%;
        "></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="m-3"
            aria-label="Slide 2" style="
          background-color: black;
          height: 20px;
          width: 20px;
          border-radius: 100%;
        "></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="m-3"
            aria-label="Slide 3" style="
          background-color: black;
          height: 20px;
          width: 20px;
          border-radius: 100%;
        "></button>
    </div>

    <section name="activités" class="acti section" id="Activités">
        <h1 class="text-center m-auto mt-3 mb-3 title_h1" style="color: black;">ACTIVITES</h1>
        <div class="m-auto text-center">
            <img src="../public/assets/ressources/backgroundActivites.jpg" alt="" width="80%" style="aspect-ratio: 16/9; margin: auto; object-fit: cover; object-position: 50% 63%;
                 text-align: center; ">
        </div>
        <h1 class="text-center" style="background-color: white; border-radius: 20px; color: black;
         margin: 2% auto!important; padding: 1%; height: auto; width: 40%;">
            SERVICES PROPOSES</h1>
        <div class="container mt-5 d-flex flex-column align-items-center justify-content-center">
            <div class="row d-flex justify-content-center" id="card-price">
                <div class="col-md-4 d-flex">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <h5 class="card-title title_h5">Baptême de l'air</h5>
                            <p class="card-text text-center">Un vol d'initiation avec un pilote expérimenté, offrant une
                                première
                                expérience mémorable du vol et une vue aérienne spectaculaire. Idéal pour découvrir les
                                joies de
                                l'aviation.</p>
                            <div class="card-footer bg-white border-white rounded d-flex
                            align-items-center justify-content-center w-50">
                                <p class="text-center " style="color: black; margin: 0;">300 €</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="card flex-column h-100">
                        <div class="card-body mb-auto d-flex flex-column justify-content-center align-items-center">
                            <h5 class="card-title title_h5">Formation pilote</h5>
                            <p class="card-text text-center">Programme intégral pour aspirants pilotes, comprenant
                                théorie
                                du vol,
                                entraînement pratique, navigation et communication aérienne, préparant à la licence de
                                pilote.</p>
                            <div class="card-footer bg-white border-white rounded
                            d-flex align-items-center justify-content-center w-50">
                                <p class="text-center " style="color: black; margin: 0;">1500 €</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="card flex-column h-100">
                        <div class="card-body mb-auto d-flex flex-column justify-content-center align-items-center">
                            <h5 class="card-title title_h5">Formation instructeur</h5>
                            <p class="card-text text-center">Cours avancé pour pilotes expérimentés axé sur les
                                techniques
                                d'enseignement et la gestion de vol, visant à former des instructeurs compétents.</p>
                            <div class="card-footer bg-white border-white rounded
                            d-flex align-items-center justify-content-center w-50">
                                <p class="text-center " style="color: black; margin: 0;">5000 €</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4 justify-content-around">
                <div class="col-md-5 d-flex">
                    <div class="card flex-column h-100">
                        <div class="card-body mb-auto d-flex flex-column justify-content-center align-items-center">
                            <h5 class="card-title title_h5">Forfaits achat immédiat</h5>
                            <p class="card-text text-center">Ces forfaits offrent une solution flexible et économique
                                pour
                                les
                                passionnés d'ULM à tous les niveaux. Choisissez parmi trois options - Découverte,
                                Évolution,
                                Maîtrise - pour répondre à vos besoins de formation et d'expérience de vol.</p>
                            <div class="card-footer bg-white border-white rounded
                            d-flex align-items-center justify-content-center w-50">
                                <a href="?page=main.forfait" class="text-center " style="color: black; margin: 0;">EN
                                    SAVOIR PLUS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 d-flex">
                    <div class="card flex-column h-100">
                        <div class="card-body mb-auto d-flex flex-column justify-content-center align-items-center">
                            <h5 class="card-title title_h5">Forfait abonnements</h5>
                            <p class="card-text text-center">Idéal pour un engagement régulier dans le pilotage d'ULM,
                                nos
                                abonnements mensuels sont disponibles en trois niveaux - Envol, Ascension, Horizon. Ils
                                permettent
                                une progression constante et adaptée à vos objectifs de vol.</p>
                            <div class="card-footer bg-white border-white rounded
                            d-flex align-items-center justify-content-center w-50">
                                <a href="?page=main.forfait" class="text-center " style="color: black; margin: 0;">EN
                                    SAVOIR PLUS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>

        <h1 class="text-center title_h1" style="background-color: white; border-radius: 20px; color: black;
         margin: 2% auto!important; padding: 1%; height: auto; width: 40%;">PRESTATIONS ASSURES</h1>

        <div style="margin-top: 2%;">

            <h2 class="text-center title_h2" style=" color: white;
         margin: 2% auto!important; padding: 1%; height: auto; width: 40%;">Services supplémentaires</h2>

            <p class="text-center w-50" style="margin: 2% auto;">Notre aérodrome offre non seulement des formations de
                vol
                de premier plan, mais
                également un éventail de services complémentaires pour répondre à tous les besoins des passionnés
                d'aviation
                :</p>
        </div>
        <div class="container mt-5 m-auto">
            <div class="row m-auto">
                <div class="col-12 col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item" style="cursor:pointer;" id="i1">Maintenance des ULM <img
                                src="../public/assets/ressources/i.png" width="5%" alt="i" style="margin-left: 2%;">
                        </li>
                        <li class="list-group-item" style="cursor:pointer;" id="i2">Montage des ULM <img
                                src="../public/assets/ressources/i.png" width="5%" alt="i" style="margin-left: 2%;">
                        </li>
                        <li class="list-group-item" style="cursor:pointer;" id="i3">Location d’emplacements ULM protégés
                            <img src="../public/assets/ressources/i.png" width="5%" alt="i" style="margin-left: 2%;">
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 m-auto">
                    <ul class="list-group">
                        <li class="list-group-item" style="cursor:pointer;" id="i4">Hébergement <img
                                src="../public/assets/ressources/i.png" width="5%" alt="i" style="margin-left: 2%;">
                        </li>
                        <li class="list-group-item" style="cursor:pointer;" id="i5">Service de restauration <img
                                src="../public/assets/ressources/i.png" width="5%" alt="i" style="margin-left: 2%;">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="temoigniage">
        <div class="container mt-5 mt-sm-5">
            <header>
                <h1 class="text-center title_h1" style="background-color: white; border-radius: 20px; color: black;
         margin: 2% auto!important; padding: 1%; height: auto; width: 40%;">Témoignages</h1>
            </header>
            <div class="row">
                <div class="col-12 col-md-4 mt-sm-5 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Kristal Hickman</h5>
                            <p class="card-text">Cet aéroclub de Frotey-Lès-Lure est vraiment unique. Je le recommande à
                                qui
                                conque
                                souhaitant découvrir le monde de l’aviation !</p>
                            <p class="card-text"><small class="text-muted">Note : 5/5</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mt-sm-5 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Stéphanie Haller</h5>
                            <p class="card-text">Cadre idyllique, et transmission de la passion par
                                un instructeur exemplaire, je remercie
                                chaleureusement Alain, aéroclub génial !</p>
                            <p class="card-text"><small class="text-muted">Note : 4.5/5</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mt-sm-5 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Christophe Maurice</h5>
                            <p class="card-text">De très bonnes machines, bien entretenues,
                                l’autogire est très stable mais pas moins agile.
                                Prix attractif, et personnel aimable.</p>
                            <p class="card-text"><small class="text-muted">Note : 4/5</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section name="ULM" id="ULM">
        <div class="m-auto text-center">
            <h1>Les Types d'ULM</h1>
            <img src="../public/assets/ressources/backgroundTypeDeULM.jpg" alt="" width="80%"
                style="aspect-ratio: 16/9; object-fit: cover;">
        </div>
        <div>
            <h2 class="text-center"
                style="background-color: white; border-radius: 10px; color: black; width:20%; margin:3% auto;">
                Différents ULM</h2>
        </div>
        <div id="carousel1" style="position: relative;">
            <div class="carousel-item1 active">
                <div style="position: relative; display: block; text-align: center; margin: auto;">
                    <img src="../public/assets/ressources/Multiaxes.png" alt="ULM1" width="30%" id="ulm1"
                        style="margin: auto; display: block;" />
                    <h3 style="padding: 4px 40px; background-color:#556672; border-radius:10px;position: absolute;
                         top: 50%; left: 50%; transform: translate(-50%, -50%);">
                        Multiaxes</h3>
                </div>
                <div style="color:#fff; background-color:#556672; border-radius:10px; width:300px; margin:auto;">
                    <h3 class="text-center">Caractéristiques</h3>
                    <div class="d-flex justify-content-center">
                        <div>
                            <p>
                                Vitesse max: <br>
                                Capacité: <br>
                                Autonomie: <br>
                                Poidswidth:300px
                            </p>
                        </div>
                        <div>
                            <p style="text-align: right;">
                                180 km/h <br>
                                2 personnes <br>
                                5 heures <br>
                                400 kg
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item1">
                <div style="position: relative; display: block; text-align: center; margin: auto;">
                    <img src="../public/assets/ressources/Paramoteur.png" alt="ULM1" width="30%" id="ulm1"
                        style="margin: auto; display: block;" />
                    <h3 style="padding: 4px 40px; background-color:#556672; border-radius:10px;position: absolute;
                         top: 50%; left: 50%; transform: translate(-50%, -50%); ">
                        Paramoteur</h3>
                </div>
                <div style="color:#fff; background-color:#556672; border-radius:10px; width:300px; margin:auto;">
                    <h3 class="text-center">Caractéristiques</h3>
                    <div class="d-flex justify-content-center">
                        <div>
                            <p>
                                Vitesse max: <br>
                                Capacité: <br>
                                Autonomie: <br>
                                Poids
                            </p>
                        </div>
                        <div>
                            <p style="text-align: right;">
                                60 km/h <br>
                                monoplace <br>
                                3 heures <br>
                                50 kg
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item1">
                <div style="position: relative; display: block; text-align: center; margin: auto;">
                    <img src="../public/assets/ressources/Autogire.png" alt="ULM1" width="30%" id="ulm1"
                        style="margin: auto; display: block;" />
                    <h3 style="padding: 4px 40px; background-color:#556672; border-radius:10px;position: absolute;
                         top: 50%; left: 50%; transform: translate(-50%, -50%); ">
                        Autogire Ultraléger</h3>
                </div>
                <div style="color:#fff; background-color:#556672; border-radius:10px; width:300px; margin:auto;">
                    <h3 class="text-center">Caractéristiques</h3>
                    <div class="d-flex justify-content-center">
                        <div>
                            <p>
                                Vitesse max: <br>
                                Capacité: <br>
                                Autonomie: <br>
                                Poids
                            </p>
                        </div>
                        <div>
                            <p style="text-align: right;">
                                150 km/h <br>
                                2 personnes <br>
                                4 heures <br>
                                300 kg
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item1">
                <div style="position: relative; display: block; text-align: center; margin: auto;">
                    <img src="../public/assets/ressources/Pendulaire.png" alt="ULM1" width="30%" id="ulm1"
                        style="margin: auto; display: block;" />
                    <h3 style="padding: 4px 40px; background-color:#556672; border-radius:10px;position: absolute;
                         top: 50%; left: 50%; transform: translate(-50%, -50%); ">
                        Pendulaire</h3>
                </div>
                <div style="color:#fff; background-color:#556672; border-radius:10px; width:300px; margin:auto;">
                    <h3 class="text-center">Caractéristiques</h3>
                    <div class="d-flex justify-content-center">
                        <div>
                            <p>
                                Vitesse max: <br>
                                Capacité: <br>
                                Autonomie: <br>
                                Poids
                            </p>
                        </div>
                        <div>
                            <p style="text-align: right;">
                                130 km/h <br>
                                2 personnes <br>
                                4 heures <br>
                                400 kg
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item1">
                <div style="position: relative; display: block; text-align: center; margin: auto;">
                    <img src="../public/assets/ressources/HelicoLeger.png" alt="ULM1" width="30%" id="ulm1"
                        style="margin: auto; display: block;" />
                    <h3 style="padding: 4px 40px; background-color:#556672; border-radius:10px;position: absolute;
                         top: 50%; left: 50%; transform: translate(-50%, -50%); ">
                        Hélicoptère Ultraléger</h3>
                </div>
                <div style="color:#fff; background-color:#556672; border-radius:10px; width:300px; margin:auto;">
                    <h3 class="text-center">Caractéristiques</h3>
                    <div class="d-flex justify-content-center">
                        <div>
                            <p>
                                Vitesse max: <br>
                                Capacité: <br>
                                Autonomie: <br>
                                Poids
                            </p>
                        </div>
                        <div>
                            <p style="text-align: right;">
                                130 km/h <br>
                                monoplace <br>
                                2 heures <br>
                                200 kg
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item1">
                <div style="position: relative; display: block; text-align: center; margin: auto;">
                    <img src="../public/assets/ressources/Baloon.png" alt="ULM1" width="30%" id="ulm1"
                        style="margin: auto; display: block;" />
                    <h3 style="padding: 4px 40px; background-color:#556672;border-radius:10px;position: absolute;
                         top: 50%; left: 50%; transform: translate(-50%, -50%); ">
                        Aérostat Ultraléger</h3>
                </div>
                <div style="color:#fff; background-color:#556672; border-radius:10px; width:300px; margin:auto;">
                    <h3 class="text-center">Caractéristiques</h3>
                    <div class="d-flex justify-content-center">
                        <div>
                            <p>
                                Vitesse max: <br>
                                Capacité: <br>
                                Autonomie: <br>
                                Poids
                            </p>
                        </div>
                        <div>
                            <p style="text-align: right;">
                                25 km/h <br>
                                2 personnes <br>
                                3 heures <br>
                                450 kg
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <button id="prev" style="position: absolute; top: 50%; left: 0;
             transform: translateY(-50%);">Précédent</button>
            <button id="next"
                style="position: absolute; top: 50%; right: 0; transform: translateY(-50%);">Suivant</button>
        </div>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            let index = 0;
            const items1 = document.querySelectorAll('.carousel-item1');
            const nextButton = document.getElementById('next');
            const prevButton = document.getElementById('prev');

            items1[0].classList.add('active');

            nextButton.addEventListener('click', () => {
                items1[index].classList.remove('active');
                index = (index + 1) % items1.length;
                items1[index].classList.add('active');
            });

            prevButton.addEventListener('click', () => {
                items1[index].classList.remove('active');
                index = (index - 1 + items1.length) % items1.length;
                items1[index].classList.add('active');

            });
        });
        </script>
    </section>
    <section name="info + contact" style="padding-bottom: 5%;">
        <div class="container mt-5">
            <div class="row d-flex justify-content-around">
                <div class="col-12 col-md-5">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="mb-0 ">
                                <button class="btn btn-link d-flex align-items-center w-100 justify-content-between"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#infoCollapse1"
                                    aria-expanded="false" aria-controls="infoCollapse1"
                                    style="color: black; text-decoration: none;">
                                    <div>Infos</div>
                                    <div class="fas p-2 text-end">▲</div>
                                </button>
                            </h3>
                        </div>
                        <div class="collapse" id="infoCollapse1">
                            <div class="card-body">
                                Localisation: <br>
                                Adresse mail: acf2l@gmail.com<br>
                                01.24.26.85.45 <br>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-5 mt-3 mt-md-0">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="mb-0 d-flex justify-content-between">
                                <button class="btn btn-link d-flex align-items-center w-100 justify-content-between"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#contactForm"
                                    aria-expanded="false" aria-controls="contactForm"
                                    style="color: black; text-decoration: none;">
                                    <div>Contactez-nous</div>
                                    <div class="fas p-2 text-end">▲</div>
                                </button>

                            </h3>
                        </div>
                        <!--formulaire de contact   -->
                        <div class="collapse" id="contactForm">
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nom</label>
                                        <input type="text" class="form-control" id="name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="subject" class="form-label">Sujet</label>
                                        <input type="text" class="form-control" id="subject" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control " id="message" rows="3" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Envoyer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>






<script>
var coll = document.querySelectorAll(".btn.btn-link");
coll.forEach((btn) => {
    btn.addEventListener("click", function() {
        var arrowIcon = this.querySelector('.fas');
        arrowIcon.classList.toggle('rotate');
    });
});
</script>
<script src="../public/assets/script/script.js"></script>
<script src="../public/assets/script/api_meteo.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var images = ['i1', 'i2', 'i3', 'i4', 'i5'];
    var texts = {
        'i1': 'L’entretien des ULM est compris dans le service par défaut de location, lors de la location de ces derniers',
        'i2': 'Notre équipe s’occupe de tout, et monte votre ULM en amont du vol, afin de bénéficeier d’une expérience avancé',
        'i3': 'Un service de location d’emplacements sont disponible dans le cas d’une utilisation de votre propre ULM !',
        'i4': 'Nous avons la possibilité de vous accueillir à proximité de l’aéroclub pour y passez une merveilleuse nuit :',
        'i5': 'Un service de restauration est proposés tous les week-ends, à un moindre coût et de qualité.'
    };

    images.forEach(function(imageId) {
        var li = document.getElementById(imageId);

        li.addEventListener('click', function(e) {
            var popup = li.querySelector('div');
            if (popup) {
                li.removeChild(popup);
            } else {
                var popupHTML = `
                    <div style="
                        position: absolute;
                        left: ${li.offsetLeft}px;
                        top: ${li.offsetTop + 10}px;
                        background-color: #fff;
                        width: 50%;
                        border-radius: 10px;
                        padding: 10px;
                        color:black;
                        text-align: center;
                        z-index:1000;">
                        ${texts[imageId] || 'Erreur'}
                    </div>
                `;
                li.insertAdjacentHTML('beforeend', popupHTML);
            }
        });
    });
});
</script>
<script>
// Fonction pour définir un cookie
function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

// Fonction pour obtenir un cookie
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

// Fonction pour afficher le popup de cookies
function showCookiePopup() {
    var cookiePopup = document.createElement('div');
    cookiePopup.textContent =
        'Ce site utilise des cookies pour améliorer votre expérience. En continuant à utiliser ce site, vous acceptez leur utilisation.';
    cookiePopup.style.position = 'fixed';
    cookiePopup.style.bottom = '0';
    cookiePopup.style.left = '0';
    cookiePopup.style.backgroundColor = '#fff';
    cookiePopup.style.padding = '10px';
    cookiePopup.style.zIndex = '1000';
    cookiePopup.style.borderRadius = '10px';
    document.body.appendChild(cookiePopup);

    var acceptButton = document.createElement('button');
    acceptButton.textContent = 'Accepter';
    acceptButton.onclick = function() {
        setCookie('cookiesAccepted', 'true', 30);
        document.body.removeChild(cookiePopup);
    };
    cookiePopup.appendChild(acceptButton);
}


document.addEventListener('DOMContentLoaded', function() {
    if (!getCookie('cookiesAccepted')) {
        showCookiePopup();
    }
});
</script>