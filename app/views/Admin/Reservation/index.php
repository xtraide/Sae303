<section class="mt-5">
    <br>
    <br>
    <br>
    <h2>Administrer les reservations</h2>

    <div class="m-auto mb-5 col-12 col-md-8">
        <a href="?page=admin.reservation.add" class="btn btn-success m-2">Crée un nouvel reservation</a>
        <div class="table-responsive">
            <table class="table table-bordered  text-center " aria-label="Reservation Table">

                <thead>
                    <tr>
                        <th scope="col">Id réservation</th>
                        <th scope="col">Date</th>
                        <th scope="col">Horraire</th>
                        <th scope="col">Utilisateur</th>
                        <th scope="col">Avion</th>
                        <th scope="col">Pilote</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($Reservations as $Reservation) : ?>
                    <tr>
                        <td><?= $Reservation->id_reservation ?></td>
                        <td><?= $Reservation->_date ?></td>
                        <td><?= $Reservation->horraire ?></td>
                        <td>

                            <?= $Reservation->user_nom ?>
                            <?= $Reservation->user_prenom ?></td>
                        <td>

                            <?= $Reservation->avion_modele ?></td>
                        <td>

                            <?= $Reservation->nom_pilote ?>
                            <?= $Reservation->prenom_pilote ?>
                        </td>



                        <td>
                            <a href="?page=admin.reservation.edit&id=<?= $Reservation->id_reservation ?>"
                                class="btn btn-primary">Editer</a>
                            <form action="?page=admin.reservation.delete" method="post" style="display: inline-block;">
                                <input type="hidden" name="id" value="<?= $Reservation->id_reservation ?>">
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