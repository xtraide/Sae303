<?php

?>
<form method="post">
    <?= $form->input('nom', 'Nom'); ?>
    <?= $form->input('prenom', 'Prénom'); ?>
    <?= $form->input('civilite', 'Civilité'); ?>
    <?= $form->input('email', 'Email'); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>