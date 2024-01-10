<form method="post">
    <?php if (!empty($errorMessage)) : ?>
        <div class="alert alert-danger">
            <?= $errorMessage ?>
        </div>
    <?php endif; ?>
    <?= $form->input('nom', 'Nom'); ?>
    <?= $form->input('prenom', 'Prénom'); ?>
    <?= $form->select('civilite', "Civilité", ['Monsieur', 'Madame'], "form-control"); ?>
    <?= $form->input('email', 'Email', ['type' => "email"]); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>