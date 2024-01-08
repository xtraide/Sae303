<form method="post">
    <?php if (!empty($errorMessage)) : ?>
        <div class="alert alert-danger">
            <?= $errorMessage ?>
        </div>
    <?php endif; ?>
    <?= $form->input('modele', 'Modèle de l\'avion'); ?>
    <?= $form->input('v_max', 'Vitesse Max'); ?>
    <?= $form->input('capacite', 'Capacité'); ?>
    <?= $form->input('autonomie', 'Autonomie'); ?>
    <?= $form->input('poid', 'Poid'); ?>

    <button class="btn btn-primary">Sauvegarder</button>
</form>