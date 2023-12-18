<?php
$table = App::getInstance()->getTable('avion');
if (!empty($_POST)) {
    $result = $table->update($_GET['id'], [
        'modele' => $_POST['modele']
    ]);
    if ($result) {
?>
        <div class="alert alert-success">L'avion a bien été modifié</div>
<?php
    }
}
$post = $table->find($_GET['id']);

$form = new \Core\HTML\BootstrapForm($post);
?>
<form method>
    <?= $form->input('modele', 'Modèle de l\'avion'); ?>
    <button class="btn btn-primary">Sauvegarder</button>

</form>