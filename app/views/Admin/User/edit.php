<form method="post">
    <?= $form->input('civilite', 'Civilité'); ?>
    <?= $form->input('nom', 'Nom'); ?>
    <?= $form->input('prenom', 'Prénom'); ?>
    <?= $form->input('_date', 'Date'); ?>
    <?= $form->input('situation_familiale', 'Situation Familiale'); ?>
    <?= $form->input('date_situation_familiale', 'Date Situation Familiale'); ?>
    <?= $form->input('dateFin_situation_familiale', 'Date Fin Situation Familiale'); ?>
    <?= $form->input('email', 'Email'); ?>
    <?= $form->input('numero', 'Numéro'); ?>
    <?= $form->input('nb_a_charge', 'Nombre à Charge'); ?>
    <?= $form->input('activite', 'Activité'); ?>
    <?= $form->input('role', 'Rôle'); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>