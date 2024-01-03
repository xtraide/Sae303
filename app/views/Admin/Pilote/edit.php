<?php
$table = App::getInstance()->getTable('pilote');
if (!empty($_POST)) {
    $result = $table->update($_GET['id'], [
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'civilite' => $_POST['civilite'],
        'email' => $_POST['email'],
    ]);

    if ($result) {
?>
        <div class="alert alert-success">L'pilote a bien été modifié</div>
<?php
    }
}
$post = $table->find($_GET['id']);
var_dump($post);
$form = new \Core\HTML\BootstrapForm($post);
?>
<form method="post">
    <?= $form->input('nom', 'Nom'); ?>
    <?= $form->input('prenom', 'Prénom'); ?>
    <?= $form->input('civilite', 'Civilité'); ?>
    <?= $form->input('email', 'Email'); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>