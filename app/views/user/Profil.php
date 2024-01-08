<div class="container" style="padding-top: 90px;">
    <div class="col-md-6 mx-auto">
        <form>
            <div class="">
                <div class="form-check-inline">
                    <?= $form->input('civilite', "Monsieur", ['class' => 'checkbox', 'id' => '', 'type' => 'radio']); ?>
                </div>
                <div class="form-check-inline">
                    <?= $form->input('civilite', "Madame", ['class' => 'checkbox', 'id' => '', 'type' => 'radio']); ?>
                </div>
            </div>
            <div class="form-group">
                <?= $form->input('nom', "Nom", ['class' => '']); ?>
            </div>
            <div class="form-group">
                <?= $form->input('prenom', "Prénom", ['class' => '']); ?>
            </div>
            <div class="form-group">
                <?= $form->input('email', "Adresse email", ['class' => 'form-control w-100', 'id' => 'email']); ?>
            </div>
            <div class="form-group">
                <?= $form->input('numero', "Téléphone", ['class' => '', 'id' => '', 'type' => 'number']); ?>
            </div>
            <div class="form-group">
                <?= $form->input('_date', "Date de naissance", ['class' => 'btn btn-primary d-flex align-items-center m-auto ', 'type' => 'date']); ?>
            </div>
            <div class="form-group">
                <?= $form->select('situation_familiale', "Situation familiale", ['class' => '', 'type' => 'marié', 'pacsé', 'divorcé', 'séparé', 'célibataire', 'veuf']); ?>
            </div>
            <div class="form-group">
                <?= $form->input('date_situation_familiale', "Début de situation familiale", ['class' => '', 'type' => 'date']); ?>
            </div>
            <div class="form-group">
                <?= $form->input('dateFin_situation_familiale', "Fin de situation familiale", ['class' => '', 'type' => 'date']); ?>
            </div>
            <div class="form-group">
                <?= $form->input('nb_a_charge', "Nombre d'enfant à charge", ['class' => '', 'type' => 'number']); ?>
            </div>
            <div class="form-group">
                <?= $form->input('activite', "Activité", ['class' => '', 'type' => 'text']); ?>
            </div>

            <div class="form-group">
                <?= $form->input('ad1', "Numéro de voix", ['class' => '', 'type' => 'text']); ?>
                <?= $form->input('ad2', "Rue", ['class' => '', 'type' => 'text']); ?>
                <?= $form->input('ad3', "Code postal", ['class' => '', 'type' => 'text']); ?>
                <?= $form->input('ad4', "Ville", ['class' => '', 'type' => 'text']); ?>
            </div>
            <div class="form-group">
                <?= $form->submit('Se connecter', "Se connecter", ['class' => 'btn btn-primary', 'value' => 'Se connecter']); ?>
            </div>
        </form>
    </div>
</div>