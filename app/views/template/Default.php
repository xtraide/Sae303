<!--contien les element commune a tout les page (nav,footer...) pour adherent
-->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="description" content="Your source for the latest aviation news and information.">
    <meta name="keywords" content="Aviation, Airlines, Aircraft, Flights, Airports">
    <meta name="author" content="Thieblemont industrie">

    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Io4HIM2JZ5V7WtjHX3g5D6DfSi7M6Roi7zTP25IKb3kkZfL6BuP+4+DTP6DK6MgD" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title><?= App::getInstance()->title ?></title>
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light position-fixed top-0 w-100 p-1 z-3 " id="navb12">
        <a class="navbar-brand" href="?page=main.index" id="logo">
            <img src="../public/assets/ressources/logo.png" alt="" height="60px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center align-items-center" id="navbarNav">
            <ul class="navbar-nav nav-element" id="z-index">
                <li class="nav-item ">
                    <a class="nav-link" href="?page=main.aerodrome">Aérodrome</a>
                </li>
                <li class="nav-item ">
                    <button class="nav-link" href="#">Activités</button>
                </li>
                <li class="nav-item ">
                    <button class="nav-link">ULM</button>
                </li>

                <?php if (!$logged) : ?>
                <li class="nav-item d-lg-none">
                    <a href="?page=user.login">Connexion</a>
                </li>
                <li class="nav-item d-lg-none">
                    <a href="?page=user.register">Inscription</a>
                </li>
                <?php else : ?>
                <?php if ($admin) : ?>

                <li class="nav-item ">
                    <a class="nav-link " href="?page=admin.main.index">Admin</a>
                </li>
                <?php endif ?>
                <li class="nav-item">
                    <a href="?page=user.reservation" class="nav-link ">Réservation</a>
                </li>
                <li class="nav-item d-lg-none">
                    <a href="?page=user.profil">Profil</a>
                </li>
                <li class="nav-item d-lg-none">
                    <a href="?page=user.logout" class="btn my-2 my-sm-0">Déconnexion</a>
                </li>
                <?php endif ?>
            </ul>
        </div>
        <?php if (!$logged) : ?>
        <div class="form-inline d-none d-lg-flex nav-element align-items-center">
            <a href="?page=user.login" class="btn my-2 my-sm-0">Connexion</a>
            <a href="?page=user.register" class="btn my-2 my-sm-0">Inscription</a>
        </div>

        <?php else : ?>

        <?php if ($admin) : ?>


        <?php endif ?>
        <div class="form-inline d-none d-lg-flex nav-element align-items-center">
            <a href="?page=user.logout" class="btn my-2 my-sm-0">Déconnexion</a>

            <a href="?page=user.profil" class="btn my-2 my-sm-0" style="width: 60px; height:60px;"><img
                    src="assets/ressources/utilisateur-de-profil.png" width="100%" alt=""
                    style="margin-bottom: 5px;"></a>
        </div>
        <?php endif ?>

    </nav>
</header>

<body>
    <?= $content ?>
    <footer class="d-flex flex-column flex-md-row justify-content-around text-center w-100 align-items-center p-4"
        style="background-color: #697987!important; color: #fff;">
        <div class="mb-3 mb-md-0">
            <img src="../public/assets/ressources/logo.png" alt="" width="150px">
        </div>
        <div class="mb-3 mb-md-0" style="color: #fff;">
            <h5 class="text-uppercase">Informations</h5>
            <ul class="list-unstyled mb-0">
                <li><a href="?page=main.aerodrome" class="text-white" style="text-decoration: none;">L’aérdorome</a>
                </li>
                <li><a href="<?= $logged ? '?page=user.profil' : '?page=user.login' ?>" class="text-white"
                        style="text-decoration: none;">Mes données</a></li>
                <li><a href="?page=main.condition" class="text-white" style="text-decoration: none;">Conditions
                        générales</a></li>
            </ul>
        </div>
        <div class="mb-3 mb-md-0">
            <h5 class="text-uppercase">Nos services</h5>
            <ul class="list-unstyled mb-0">
                <li><a href="#!" class="text-white" style="text-decoration: none;" onclick="acit()">Nos activités </a>
                </li>
                <li><a href="#!" class="text-white" style="text-decoration: none;" onclick="ulm()">ULM</a></li>
            </ul>
        </div>
        <div class="mb-3 mb-md-0">
            <h5 class="text-uppercase">Contactez-nous</h5>
            <ul class="list-unstyled mb-0">
                <li><span href="#!" class="text-white" style="text-decoration: none;">01.64.36.24.24</span></li>
                <li><span href="#!" class="text-white"
                        style="text-decoration: none;">aeroclubdefrotey@laposte.net</span></li>
            </ul>
        </div>
    </footer>
    <script>

    </script>
    <script src="assets/script/script.js"></script>

</body>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var bodyHeight = document.body.offsetHeight;
    var footer = document.querySelector('footer');

    if (bodyHeight < 1000) {
        footer.style.position = 'absolute';
        footer.style.bottom = '0';
    }
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var buttons = document.querySelectorAll('.nav-item button');

    buttons.forEach(function(button) {

        button.addEventListener('click', function(e) {
            e.preventDefault();
            var sectionName = this.textContent.trim();
            var section = document.getElementById(sectionName);
            if (section) {
                section.scrollIntoView({
                    behavior: 'smooth'
                });
            } else {
                localStorage.setItem('sectionName', sectionName);
                window.location.href = "?page=main.index";
            }
        });
    });

    var storedSectionName = localStorage.getItem('sectionName');

    if (storedSectionName) {
        var storedSection = document.getElementById(storedSectionName);

        if (storedSection) {
            storedSection.scrollIntoView({
                behavior: 'smooth'
            });
        }

        localStorage.removeItem('sectionName');
    }
});
</script>

</html>