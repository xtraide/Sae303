<h1 style="padding-top: 100px; text-align:center">Reservation</h1>
<div class="col-md-6 mx-auto">
    <?php if (!empty($errorMessage)) : ?>
    <div class="alert alert-danger">
        <?= $errorMessage ?>
    </div>
    <?php endif; ?>
    <form action="#" method="post" class="mb-3">
        <div class="form-group">
            <?= $form->input('_date', "Date de réservation", ['class' => 'btn btn-primary', 'type' => 'date']); ?>
        </div>
        <div class="form-group">
            <?= $form->select('Horraire', "Horraire", ['type' => '08:30', '10:30', '14:30', '16:30'], ''); ?>
        </div>
        <div class="form-group">
            <?= $form->select('Véhicule', "Véhicule", ['type' => 'gergergrgre'], ''); ?>
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
</div>