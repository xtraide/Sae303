<?php

foreach (App::getInstance()->getTable('adherent')->all() as $row) {
    var_dump($row);
}


?>

<script src="../assets/script/script.js"></script>
<script src="../assets/script/api_meteo.js"></script>