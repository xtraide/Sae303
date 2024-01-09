<form method="post" class="mb-3">
    <div class="form-group">
        <?= $form->input('_date', "Date de réservation", ['class' => 'btn btn-primary', 'type' => 'date']); ?>
    </div>
    <div class="form-group">
        <?= $form->select('horraire', "Horraire", ['type' => '08:30', '10:30', '14:30', '16:30'], ''); ?>
    </div>
    <div class="form-group">
        <?= $form->select('avion', "Avion", ['type' => 'gergergrgre'], ''); ?>
        <!-- A modifier  le gergergrgre-->
    </div>
    <div class="form-group">
        <?= $form->select('Pilote', "Pilote", ['type' => 'gergergrgre'], ''); ?>
        <!-- A modifier  le gergergrgre-->
    </div>
    <div class="form-group">
        <?= $form->submit('Se connecter', "Se connecter", ['class' => 'btn btn-primary', 'value' => 'Se connecter']); ?>
    </div>


</form>