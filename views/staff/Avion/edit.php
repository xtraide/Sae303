<?php
$post = App::getInstance()->getTable('avion')->find($_GET['id']);

$form = new \Core\HTML\BootstrapForm($post);
?>
<form method>
    <?= $form->input('modele', 'Modèle de l\'avion'); ?>
    <button class="btn btn-primary">Sauvegarder</button>

</form>