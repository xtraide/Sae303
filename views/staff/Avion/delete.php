<?php
$table = App::getInstance()->getTable('avion');
if (!empty($_POST)) {
    $result = $table->delete($_POST['id']);
}
header('Location: Staff.php?page=avion.index');
