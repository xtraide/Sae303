<?php
$table = App::getInstance()->getTable('reservation');
if (!empty($_POST)) {
    $result = $table->delete($_POST['id']);
}
header('Location: Staff.php?page=reservation.index');
