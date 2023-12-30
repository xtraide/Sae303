<?php
$table = App::getInstance()->getTable('adherent');
if (!empty($_POST)) {
    $result = $table->delete($_POST['id']);
}
header('Location: Staff.php?page=adherent.index');
