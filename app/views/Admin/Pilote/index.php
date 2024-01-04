<h2>Administrer les pilotes</h2>
<a href="?page=admin.pilote.add" class="btn btn-success m-2">Crée un nouvel pilote</a>
<table class="table">
    <thead>
        <tr>

            <td>Nom</td>
            <td>Prénom</td>
            <td>Civilité</td>
            <td>Email</td>
            <td>Action</td>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($pilotes as $pilote) { ?>
            <tr>

                <td><?= $pilote->nom ?></td>
                <td><?= $pilote->prenom ?></td>
                <td><?= $pilote->civilite ?></td>
                <td><?= $pilote->email ?></td>
                <td>
                    <a href="?page=admin.pilote.edit&id=<?= $pilote->id ?>" class="btn btn-primary">Editer</a>
                    <form action="?page=admin.pilote.delete" method="post" style="display: inline-block;">
                        <input type="hidden" name="id" value="<?= $pilote->id ?>">
                        <button type="submit" class="btn btn-danger">Supprimer</a>
                    </form>

                </td>

            </tr>
        <?php } ?>
    </tbody>
</table>