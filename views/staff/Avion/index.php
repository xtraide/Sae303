<?php

$planes = App::getInstance()->getTable('avion')->all();
?>

<h2>Administrer les avions</h2>
<a href="?page=Avion.add" class="btn btn-success m-2">Crée un nouvel avion</a>
<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>modèle</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($planes as $plane) { ?>
            <tr>
                <td><?= $plane->id ?></td>
                <td><?= $plane->modele ?></td>
                <td>
                    <a href="?page=Avion.edit&id=<?= $plane->id ?>" class="btn btn-primary">Editer</a>
                    <a href="?page=Avion.delete&id=<?= $plane->id ?>" class="btn btn-danger">Supprimer</a>
                </td>

            </tr>
        <?php } ?>
    </tbody>
</table>