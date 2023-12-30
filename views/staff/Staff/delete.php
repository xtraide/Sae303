<?php
$table = App::getInstance()->getTable('staff');
if (!empty($_POST)) {
    $result = $table->delete($_POST['id']);
}
header('Location: Staff.php?page=staff.index');
