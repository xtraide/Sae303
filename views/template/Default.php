<!--contien les element commune a tout les page (nav,footer...) pour adherent
-->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="../assets/style/responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $app->getTitle() ?></title>
</head>


<body>
    <?php
    $dir = "../Views/staff";
    echo "<h4>" . $dir . "</h4>";
    $scandir = scandir($dir);

    foreach (array_diff($scandir, array(".", "..")) as $row) {
    ?>
        <a href="<?= $dir . "/" . $row ?>"><?= $row ?></a> <br>
    <?php
    }
    $dir = "../Views/user";
    echo "<h4>" . $dir . "</h4>";
    $scandir = scandir($dir);
    foreach (array_diff($scandir, array(".", "..")) as $row) {
    ?>
        <a href="<?= $dir . "/" . $row ?>"><?= $row ?></a> <br>
    <?php
    }
    $dir = "../Views/template";
    echo "<h4>" . $dir . "</h4>";
    $scandir = scandir($dir);
    foreach (array_diff($scandir, array(".", "..")) as $row) {
    ?>
        <a href="<?= $dir . "/" . $row ?>"><?= $row ?></a> <br>
    <?php
    }



    ?>
    <?= $content ?>

</body>

</html>