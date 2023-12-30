<?php

$planes = App::getInstance()->getTable('reservation')->all();
?>

<h2>Administrer les reservations</h2>
<a href="?page=reservation.add" class="btn btn-success m-2">Crée un nouvel reservation</a>
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
                    <a href="?page=reservation.edit&id=<?= $plane->id ?>" class="btn btn-primary">Editer</a>
                    <form action="?page=reservation.delete" method="post" style="display: inline-block;">
                        <input type="hidden" name="id" value="<?= $plane->id ?>">
                        <button type="submit" href="?page=reservation.Delete&id=<?= $plane->id ?>" class="btn btn-danger">Supprimer</a>
                    </form>

                </td>

            </tr>
        <?php } ?>
    </tbody>
</table>