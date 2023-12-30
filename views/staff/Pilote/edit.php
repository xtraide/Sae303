<?php
$table = App::getInstance()->getTable('pilote');
if (!empty($_POST)) {
    $result = $table->update($_GET['id'], [
        'modele' => $_POST['modele']
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
    <?= $form->input('modele', 'Modèle de l\'pilote'); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>