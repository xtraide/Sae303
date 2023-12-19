<?php
$table = App::getInstance()->getTable('avion');
if (!empty($_POST)) {
    $result = $table->create([
        'modele' => $_POST['modele']
    ]);

    if ($result) {
?>
        <div class="alert alert-success">L'avion a bien été modifié</div>
<?php
    }
}

$form = new \Core\HTML\BootstrapForm($_POST);
?>
<form method="post">
    <?= $form->input('modele', 'Modèle de l\'avion'); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>