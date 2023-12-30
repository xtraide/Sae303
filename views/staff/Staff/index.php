<?php

$planes = App::getInstance()->getTable('staff')->all();
?>

<h2>Administrer les staffs</h2>
<a href="?page=staff.add" class="btn btn-success m-2">Crée un nouvel staff</a>
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
                    <a href="?page=staff.edit&id=<?= $plane->id ?>" class="btn btn-primary">Editer</a>
                    <form action="?page=staff.delete" method="post" style="display: inline-block;">
                        <input type="hidden" name="id" value="<?= $plane->id ?>">
                        <button type="submit" href="?page=staff.Delete&id=<?= $plane->id ?>" class="btn btn-danger">Supprimer</a>
                    </form>

                </td>

            </tr>
        <?php } ?>
    </tbody>
</table>