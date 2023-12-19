<?php

$planes = App::getInstance()->getTable('avion')->all();
?>
<p>
    <a href="?page=avion.add" class="btn btn-success"></a>
</p>
<h2>Administrer les avions</h2>
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
                <td>MODELEE</td>
                <td>
                    <a href="?page=avion.edit&id=<?= $plane->id ?>" class="btn btn-primary">Editer</a>
                    <a href="?page=avion.delete&id=<?= $plane->id ?>" class="btn btn-danger">Supprimer</a>
                </td>

            </tr>
        <?php } ?>
    </tbody>
</table>