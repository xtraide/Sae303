<h2>Administrer les avions</h2>
<a href="?page=admin.avion.add" class="btn btn-success m-2">Crée un nouvel avion</a>
<table class="table">
    <thead>
        <tr>
            <td>modèle</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($avions as $plane) { ?>
            <tr>
                <td><?= $plane->modele ?></td>
                <td>
                    <a href="?page=admin.avion.edit&id=<?= $plane->id ?>" class="btn btn-primary">Editer</a>
                    <form action="?page=admin.avion.delete" method="post" style="display: inline-block;">
                        <input type="hidden" name="id" value="<?= $plane->id ?>">
                        <button type="submit" class="btn btn-danger">Supprimer</a>
                    </form>

                </td>

            </tr>
        <?php } ?>
    </tbody>
</table>