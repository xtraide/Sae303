<?php
if (isset($_GET['ville'])) {
    require_once 'config.php';
    $ville = urlencode($_GET['ville']);
    $apiKey = config['api_key'];
    $apiUrl = "https://api.openweathermap.org/data/2.5/weather?q={$ville}&appid={$apiKey}&units=metric&lang=fr";

    $response = @file_get_contents($apiUrl);

    if ($response === false) {

        echo 'Erreur lors de la requête à l\'API météo';
    } else {

        echo $response;
    }
} else {

    echo 'Paramètre "ville" manquant';
}
