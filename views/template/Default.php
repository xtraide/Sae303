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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= App::getInstance()->title ?></title>
</head>


<body>
    <nav>
        <ul>
            <?php
            $dirs = ["../Views/staff", "../Views/user", "../Views/template"];
            foreach ($dirs as $dir) {
                echo "<li><h4>" . $dir . "</h4>";
                $scandir = scandir($dir);
                foreach (array_diff($scandir, array(".", "..")) as $row) {
                    echo "<a href='" . $dir . "/" . $row . "'>" . $row . "</a> <br>";
                }
                echo "</li>";
            }

            ?>
        </ul>
    </nav>

    <?= $content ?>

</body>

</html>