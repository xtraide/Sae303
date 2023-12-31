<form method="post " class=" m-auto mb-5 col-12 col-md-10">
    <br>
    <br> <br>
    <br> <br>
    <div class="form-group">
        <label>Civilité</label>
        <div class="">
            <div class="form-check-inline">
                <?= $form->input('civilite', "Monsieur", ['class' => 'checkbox', 'id' => '', 'type' => 'radio']); ?>
            </div>
            <div class="form-check-inline">
                <?= $form->input('civilite', "Madame", ['class' => 'checkbox', 'id' => '', 'type' => 'radio']); ?>
            </div>
        </div>
    </div>
    <?= $form->input('nom', 'Nom', ['class' => 'form-control']); ?>
    <?= $form->input('prenom', 'Prénom', ['class' => 'form-control']); ?>
    <?= $form->input('_date', 'Date de naissance', ['type' => "date", 'class' => 'form-control']); ?>
    <?= $form->select('situation_familiale', "Situation familiale", ['pacsé', 'divorcé', 'séparé', 'célibataire', 'veuf'], 'form-control'); ?>
    <?= $form->input('date_situation_familiale', 'Date Situation Familiale', ['type' => "date", 'class' => 'form-control']); ?>
    <?= $form->input('dateFin_situation_familiale', 'Date Fin Situation Familiale', ['type' => "date", 'class' => 'form-control']); ?>
    <?= $form->input('email', 'Email', ['type' => "email", 'class' => 'form-control']); ?>
    <?= $form->input('numero', 'Numéro de telephone', ['type' => "number", 'class' => 'form-control']); ?>
    <?= $form->input('nb_a_charge', 'Nombre à Charge', ['type' => "number", 'class' => 'form-control']); ?>
    <?= $form->input('activite', 'Activité', ['class' => 'form-control']); ?>
    <?= $form->select('role', "Role", ['Admin', 'User', 'Adherent'], 'form-control'); ?>
    <button class="btn btn-primary mt-3">Sauvegarder</button>
</form>