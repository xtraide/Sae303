<form method="post">
    <?= $form->input('nom', 'Nom'); ?>
    <?= $form->input('prenom', 'Prénom'); ?>
    <div class="">
        <div class="form-check-inline">
            <?= $form->input('civilite', "Monsieur", ['class' => 'checkbox', 'id' => '', 'type' => 'radio']); ?>
        </div>
        <div class="form-check-inline">
            <?= $form->input('civilite', "Madame", ['class' => 'checkbox', 'id' => '', 'type' => 'radio']); ?>
        </div>
    </div>
    <?= $form->input('email', 'Email', ['type' => "email"]); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>