<?php
$table = App::getInstance()->getTable('adherent');
if (!empty($_POST)) {
    $result = $table->update($_GET['id'], [
        'civilite' => $_POST['civilite'],
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        '_date' => $_POST['_date'],
        'situation_familiale' => $_POST['situation_familiale'],
        'date_situation_familiale' => $_POST['date_situation_familiale'],
        'dateFin_situation_familiale' => $_POST['dateFin_situation_familiale'],
        'email' => $_POST['email'],
        'numero' => $_POST['numero'],
        'nb_a_charge' => $_POST['nb_a_charge'],
        'activite' => $_POST['activite'],
        'role' => $_POST['role']
    ]);

    if ($result) {
?>
        <div class="alert alert-success">L'adherent a bien été modifié</div>
<?php
    }
}
$post = $table->find($_GET['id']);
var_dump($post);
$form = new \Core\HTML\BootstrapForm($post);
?>
<form method="post">
    <?= $form->input('civilite', 'Civilité'); ?>
    <?= $form->input('nom', 'Nom'); ?>
    <?= $form->input('prenom', 'Prénom'); ?>
    <?= $form->input('_date', 'Date'); ?>
    <?= $form->input('situation_familiale', 'Situation Familiale'); ?>
    <?= $form->input('date_situation_familiale', 'Date Situation Familiale'); ?>
    <?= $form->input('dateFin_situation_familiale', 'Date Fin Situation Familiale'); ?>
    <?= $form->input('email', 'Email'); ?>
    <?= $form->input('numero', 'Numéro'); ?>
    <?= $form->input('nb_a_charge', 'Nombre à Charge'); ?>
    <?= $form->input('activite', 'Activité'); ?>
    <?= $form->input('role', 'Rôle'); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>