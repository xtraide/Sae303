<h2>Administrer les reservations</h2>
<a href="?page=admin.reservation.add" class="btn btn-success m-2">Crée un nouvel reservation</a>
<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>Date</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($Reservations as $Reservation) { ?>
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
        <?php } ?>
    </tbody>
</table>