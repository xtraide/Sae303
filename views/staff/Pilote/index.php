<?php

$planes = App::getInstance()->getTable('pilote')->all();
?>

<h2>Administrer les pilotes</h2>
<a href="?page=pilote.add" class="btn btn-success m-2">Crée un nouvel pilote</a>
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
                    <a href="?page=pilote.edit&id=<?= $plane->id ?>" class="btn btn-primary">Editer</a>
                    <form action="?page=pilote.delete" method="post" style="display: inline-block;">
                        <input type="hidden" name="id" value="<?= $plane->id ?>">
                        <button type="submit" href="?page=pilote.Delete&id=<?= $plane->id ?>" class="btn btn-danger">Supprimer</a>
                    </form>

                </td>

            </tr>
        <?php } ?>
    </tbody>
</table>