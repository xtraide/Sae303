<h2>Administrer les users</h2>
<a href="?page=admin.user.add" class="btn btn-success m-2">Crée un nouvel user</a>
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
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user) { ?>
            <tr>
                <td><?= $user->civilite ?></td>
                <td><?= $user->nom ?></td>
                <td><?= $user->prenom ?></td>
                <td><?= $user->_date ?></td>
                <td><?= $user->situation_familiale ?></td>
                <td><?= $user->date_situation_familiale ?></td>
                <td><?= $user->dateFin_situation_familiale ?></td>
                <td><?= $user->email ?></td>
                <td><?= $user->numero ?></td>
                <td><?= $user->nb_a_charge ?></td>
                <td><?= $user->activite ?></td>
                <td><?= $user->role ?></td>
                <td>
                    <a href="?page=admin.user.edit&id=<?= $user->id ?>" class="btn btn-primary">Editer</a>
                    <form action="?page=admin.user.delete" method="post" style="display: inline-block;">
                        <input type="hidden" name="id" value="<?= $user->id ?>">
                        <button type="submit" class="btn btn-danger">Supprimer</a>
                    </form>

                </td>

            </tr>
        <?php } ?>
    </tbody>
</table>