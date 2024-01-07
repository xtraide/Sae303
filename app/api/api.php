<?php
if (isset($_GET['ville'])) {
    include 'config.php';
    $ville = urlencode($_GET['ville']);
    $apiKey = $config['api_key'];
    $apiUrl = "https://api.openweathermap.org/data/2.5/weather?q={$ville}&appid={$apiKey}&units=metric&lang=fr";

    $response = @file_get_contents($apiUrl);

    if ($response === false) {
        header('Content-Type: application/json');
        echo json_encode(['error' => 'Erreur lors de la requête à l\'API météo']);
    } else {

        header('Content-Type: application/json');
        echo $response;
    }
} else {
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Paramètre "ville" manquant']);
}
