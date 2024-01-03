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
        <?php foreach ($avions as $avion) { ?>
            <tr>

                <td><?= $avion->nom ?></td>
                <td><?= $avion->prenom ?></td>
                <td><?= $avion->civilite ?></td>
                <td><?= $avion->email ?></td>
                <td>
                    <a href="?page=pilote.edit&id=<?= $avion->id ?>" class="btn btn-primary">Editer</a>
                    <form action="?page=pilote.delete" method="post" style="display: inline-block;">
                        <input type="hidden" name="id" value="<?= $avion->id ?>">
                        <button type="submit" href="?page=pilote.Delete&id=<?= $avion->id ?>" class="btn btn-danger">Supprimer</a>
                    </form>

                </td>

            </tr>
        <?php } ?>
    </tbody>
</table>