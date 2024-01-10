<section class="mt-5">
    <br>
    <br>
    <br>
    <h2>Administrer les avions</h2>

    <div class="m-auto mb-5 col-12 col-md-8">
        <a href="?page=admin.avion.add" class="btn btn-success m-2">Crée un nouvel avion</a>
        <table class="table table-bordered  text-center ">

            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">modèle</th>
                    <th scope="col">Vitesse Max</th>
                    <th scope="col">Capacité</th>
                    <th scope="col">Autonomie</th>
                    <th scope="col">Poid</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($avions as $plane) : ?>
                    <tr>
                        <th><?= $plane->id ?></th>
                        <td><?= $plane->modele ?></td>
                        <td><?= $plane->v_max ?></td>
                        <td><?= $plane->capacite ?></td>
                        <td><?= $plane->autonomie ?></td>
                        <td><?= $plane->poid ?></td>

                        <td>
                            <a href="?page=admin.avion.edit&id=<?= $plane->id ?>" class="btn btn-primary">Editer</a>
                            <form action="?page=admin.avion.delete" method="post" style="display: inline-block;">
                                <input type="hidden" name="id" value="<?= $plane->id ?>">
                                <button type="submit" class="btn btn-danger">Supprimer</a>
                            </form>

                        </td>

                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>