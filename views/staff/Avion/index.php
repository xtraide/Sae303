<?php

$planes = App::getInstance()->getTable('avion')->all();
?>
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
                <td><?= $plane->id_av ?></td>
                <td>MODELEE</td>
                <td><a href="?page=avion.edit&id=<?= $plane->id_av ?>" class="btn btn-primary">Editer</a> <a href="?page=avion.delete&id=<?= $plane->id_av ?>" class="btn btn-danger">Supprimer</a></td>

            </tr>
        <?php } ?>
    </tbody>
</table>