<form method="post" class="mb-3" style="padding-top:100px;">
    <?php if (!empty($errorMessage)) : ?>
        <div class="alert alert-danger">
            <?= $errorMessage ?>
        </div>
    <?php endif; ?>
    <div class="form-group">
        <?= $form->input('reservation_date', "Date de réservation", ['class' => 'btn btn-primary', 'type' => 'date']); ?>
    </div>
    <div class="form-group">
        <?= $form->select('reservation_horraire', "Horraire", ['08:30', '10:30', '14:30', '16:30'], ''); ?>
    </div>
    <div class="form-group">
        <?= $form->select('avion_modele', "Modéle de l'Avion", $avions); ?>
        <!-- A modifier  le gergergrgre-->
    </div>
    <div class="form-group">
        <?= $form->select('Pilote', "Pilote", $pilotes); ?>
        <!-- A modifier  le gergergrgre-->
    </div>
    <div class="form-group">
        <?= $form->select('User', "Utilisateur", $users); ?>
        <!-- A modifier  le gergergrgre-->
    </div>
    <div class="form-group">
        <?= $form->submit('Se connecter', "Se connecter", ['class' => 'btn btn-primary', 'value' => 'Se connecter']); ?>
    </div>
</form>