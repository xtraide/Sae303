<?php
require_once "../config.php";

function execute($sql, $params = [])
{
    try {
        $db = new PDO(
            'mysql:host=' . host . ';dbname=' . dbname . ';charset=utf8',
            username,
            password
        );
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        die(print_r($e));
    }
    $result = $db->prepare($sql);
    //var_dump($json['score']);
    $result->execute($params) or die($db->errorInfo());

    return $result;
}


/*foreach (execute('SELECT * FROM auteur') as $recipe) {
    echo '<p>'. $recipe['Nom']. '</p>';

}*/
