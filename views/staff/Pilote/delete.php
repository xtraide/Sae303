<?php
$table = App::getInstance()->getTable('pilote');
if (!empty($_POST)) {
    $result = $table->delete($_POST['id']);
}
header('Location: Staff.php?page=pilote.index');
