<?php
$table = App::getInstance()->getTable('pilote');
if (!empty($_POST)) {
    $result = $table->create([
        'modele' => $_POST['modele']
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
    <?= $form->input('modele', 'Modèle de l\'pilote'); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>