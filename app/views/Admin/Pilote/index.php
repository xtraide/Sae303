<section class="mt-5">
    <br>
    <br>
    <br>
    <h2 class="mb-4">Administrer les pilotes</h2>

    <div class="m-auto mb-5 col-12 col-md-8">
        <div class="card-body">
            <a href="?page=admin.pilote.add" class="btn btn-success mb-3">Crée un nouvel pilote</a>
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Civilité</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Pilotes as $pilote) : ?>
                        <tr>
                            <td><?= $pilote->nom ?></td>
                            <td><?= $pilote->prenom ?></td>
                            <td><?= $pilote->civilite ?></td>
                            <td><?= $pilote->email ?></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="?page=admin.pilote.edit&id=<?= $pilote->id ?>" class="btn btn-primary">Editer</a>
                                    <form action="?page=admin.pilote.delete" method="post">
                                        <input type="hidden" name="id" value="<?= $pilote->id ?>">
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>