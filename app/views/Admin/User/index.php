<section class="mt-5">
    <br>
    <br>
    <br>
    <h2>Administrer les users</h2>

    <div class="m-auto col-12 col-lg-10">
        <a href="?page=admin.user.add" class="btn btn-success m-2">Crée un nouvel user</a>
        <div class="table-responsive">
            <table class="table table-bordered  text-center " aria-label="User Table">

                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Civilité</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Date</th>
                        <th scope="col">Adresse</th>

                        <th scope="col">Situation Familiale</th>
                        <th scope="col">Date Situation Familiale</th>
                        <th scope="col">Date Fin Situation Familiale</th>
                        <th scope="col">Email</th>
                        <th scope="col">Numéro</th>
                        <th scope="col">Nombre à Charge</th>
                        <th scope="col">Activité</th>
                        <th scope="col">Rôle</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td><?= $user->id ?></td>
                            <td><?= $user->civilite ?></td>
                            <td><?= $user->nom ?></td>
                            <td><?= $user->prenom ?></td>
                            <td><?= $user->_date ?></td>
                            <td><?= $user->adresse ?></td>

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
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>