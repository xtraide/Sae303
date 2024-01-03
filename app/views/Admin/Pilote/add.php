<?php
$table = App::getInstance()->getTable('pilote');
if (!empty($_POST)) {
    $result = $table->create([
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'civilite' => $_POST['civilite'],
        'email' => $_POST['email']
    ]);

    if ($result) {
?>
        <div class="alert alert-success">L'pilote a bien été ajouter</div>
<?php
    }
}

$form = new \Core\HTML\BootstrapForm($_POST);
?>
<form method="post">
    <?= $form->input('nom', 'Nom'); ?>
    <?= $form->input('prenom', 'Prénom'); ?>
    <?= $form->input('civilite', 'Civilité'); ?>
    <?= $form->input('email', 'Email'); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>