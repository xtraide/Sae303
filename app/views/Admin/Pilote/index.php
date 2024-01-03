<?php

$planes = App::getInstance()->getTable('pilote')->all();
?>

<h2>Administrer les pilotes</h2>
<a href="?page=pilote.add" class="btn btn-success m-2">Crée un nouvel pilote</a>
<table class="table">
    <thead>
        <tr>


            <td>Nom</td>
            <td>Prénom</td>
            <td>Civilité</td>
            <td>Email</td>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($planes as $plane) { ?>
            <tr>

                <td><?= $plane->nom ?></td>
                <td><?= $plane->prenom ?></td>
                <td><?= $plane->civilite ?></td>
                <td><?= $plane->email ?></td>
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