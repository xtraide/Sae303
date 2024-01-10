<form method="post" style="padding-top:100px;">
    <?php if (!empty($errorMessage)) : ?>
        <div class="alert alert-danger">
            <?= $errorMessage ?>
        </div>
    <?php endif; ?>
    <?= $form->input('modele', 'Modèle de l\'avion'); ?>
    <?= $form->input('v_max', 'Vitesse Max', ['type' => "number"]); ?>
    <?= $form->input('capacite', 'Capacité', ['type' => "number"]); ?>
    <?= $form->input('autonomie', 'Autonomie', ['type' => "number"]); ?>
    <?= $form->input('poid', 'Poid', ['type' => "number"]); ?>

    <button class="btn btn-primary">Sauvegarder</button>
</form>