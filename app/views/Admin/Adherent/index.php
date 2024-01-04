<h2>Administrer les adherents</h2>
<a href="?page=admin.adherent.add" class="btn btn-success m-2">Crée un nouvel adherent</a>
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
        <?php foreach ($adherents as $adherent) { ?>
            <tr>
                <td><?= $adherent->civilite ?></td>
                <td><?= $adherent->nom ?></td>
                <td><?= $adherent->prenom ?></td>
                <td><?= $adherent->_date ?></td>
                <td><?= $adherent->situation_familiale ?></td>
                <td><?= $adherent->date_situation_familiale ?></td>
                <td><?= $adherent->dateFin_situation_familiale ?></td>
                <td><?= $adherent->email ?></td>
                <td><?= $adherent->numero ?></td>
                <td><?= $adherent->nb_a_charge ?></td>
                <td><?= $adherent->activite ?></td>
                <td><?= $adherent->role ?></td>
                <td>
                    <a href="?page=admin.adherent.edit&id=<?= $adherent->id ?>" class="btn btn-primary">Editer</a>
                    <form action="?page=admin.adherent.delete" method="post" style="display: inline-block;">
                        <input type="hidden" name="id" value="<?= $adherent->id ?>">
                        <button type="submit" class="btn btn-danger">Supprimer</a>
                    </form>

                </td>

            </tr>
        <?php } ?>
    </tbody>
</table>