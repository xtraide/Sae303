<section class="mt-5">
    <br>
    <br>
    <br>
    <h2>Administrer les reservations</h2>

    <div class="m-auto mb-5 col-12 col-md-8">
        <a href="?page=admin.reservation.add" class="btn btn-success m-2">Crée un nouvel reservation</a>
        <table class="table table-bordered  text-center ">

            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($Reservations as $Reservation) : ?>
                    <tr>
                        <td><?= $Reservation->id ?></td>
                        <td><?= $Reservation->_date ?></td>
                        <td>
                            <a href="?page=admin.reservation.edit&id=<?= $Reservation->id ?>" class="btn btn-primary">Editer</a>
                            <form action="?page=admin.reservation.delete" method="post" style="display: inline-block;">
                                <input type="hidden" name="id" value="<?= $Reservation->id ?>">
                                <button type="submit" class="btn btn-danger">Supprimer</a>
                            </form>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>