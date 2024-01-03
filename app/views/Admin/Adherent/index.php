<?php

$planes = App::getInstance()->getTable('adherent')->all();
var_dump($planes);
?>

<h2>Administrer les adherents</h2>
<a href="?page=adherent.add" class="btn btn-success m-2">Crée un nouvel adherent</a>
<table class="table">
    <thead>
        <tr>
            <td>Civilité</td>
            <td>Nom</td>
            <td>Prénom</td>
            <td>Date</td>
            <td>Situation Familiale</td>
            <td>Date Situation Familiale</td>
            <td>Date Fin Situation Familiale</td>
            <td>Email</td>
            <td>Numéro</td>
            <td>Nombre à Charge</td>
            <td>Activité</td>
            <td>Rôle</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($planes as $plane) { ?>
            <tr>
                <td><?= $plane->civilite ?></td>
                <td><?= $plane->nom ?></td>
                <td><?= $plane->prenom ?></td>
                <td><?= $plane->_date ?></td>
                <td><?= $plane->situation_familiale ?></td>
                <td><?= $plane->date_situation_familiale ?></td>
                <td><?= $plane->dateFin_situation_familiale ?></td>
                <td><?= $plane->email ?></td>
                <td><?= $plane->numero ?></td>
                <td><?= $plane->nb_a_charge ?></td>
                <td><?= $plane->activite ?></td>
                <td><?= $plane->role ?></td>
                <td>
                    <a href="?page=adherent.edit&id=<?= $plane->id ?>" class="btn btn-primary">Editer</a>
                    <form action="?page=adherent.delete" method="post" style="display: inline-block;">
                        <input type="hidden" name="id" value="<?= $plane->id ?>">
                        <button type="submit" href="?page=adherent.Delete&id=<?= $plane->id ?>" class="btn btn-danger">Supprimer</a>
                    </form>

                </td>

            </tr>
        <?php } ?>
    </tbody>
</table>