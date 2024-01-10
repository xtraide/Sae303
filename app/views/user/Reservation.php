<form method="post" class="mb-3">
    <?php if (!empty($errorMessage)) : ?>
        <div class="alert alert-danger">
            <?= $errorMessage ?>
        </div>
    <?php endif; ?>
    <div class="form-group">
        <?= $form->input('_date', "Date de réservation", ['class' => 'btn btn-primary', 'type' => 'date']); ?>
    </div>
    <div class="form-group">
        <?= $form->select('horraire', "Horraire", ['08:30', '10:30', '14:30', '16:30']); ?>
    </div>
    <div class="form-group">
        <?= $form->select('Id_3', "Modéle de l'Avion", $avions, null, true); ?>
        <!-- A modifier  le gergergrgre-->
    </div>
    <div class="form-group">
        <?= $form->select('Id_2', "Pilote", $pilotes, null, true); ?>
        <!-- A modifier  le gergergrgre-->
    </div>
    <div class="form-group">
        <?= $form->select('Id_1', "Utilisateur", $users, null, true); ?>
        <!-- A modifier  le gergergrgre-->
    </div>
    <div class="form-group">
        <?= $form->submit('Se connecter', "Se connecter", ['class' => 'btn btn-primary', 'value' => 'Se connecter']); ?>
    </div>
</form>