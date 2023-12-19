<!--contien les element commune a tout les page (nav,footer...) pour adherent
-->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="description" content="Your source for the latest aviation news and information.">
    <meta name="keywords" content="Aviation, Airlines, Aircraft, Flights, Airports">
    <meta name="author" content="Thieblemont industrie">

    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="../assets/style/responsive.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Io4HIM2JZ5V7WtjHX3g5D6DfSi7M6Roi7zTP25IKb3kkZfL6BuP+4+DTP6DK6MgD" crossorigin="anonymous"></script>
    <title><?= App::getInstance()->title ?></title>
</head>


<body>
    <nav>

        <a href="Staff.php?page=index">Admin</a> A SUPR
        <ul>
            <?php
            $base = "/Sae303/public/index.php?page=";
            $dirs = ["../Views/staff", "../Views/user", "../Views/template"];
            foreach ($dirs as $dir) {
                echo "<li><h4>" . $dir . "</h4>";
                $scandir = scandir($dir);
                foreach (array_diff($scandir, array(".", "..")) as $row) {
                    $row = str_replace(".php", "", $row);
                    echo "<a href='" . $base .  $row . "'>" . $row . "</a> <br>";
                }
                echo "</li>";
            }

            ?>

        </ul>
    </nav>

    <?= $content ?>

</body>

</html>