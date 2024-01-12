<div class="container" style="padding-top: 90px;">
    <div class="col-md-6 mx-auto">
        <h2 class="mb-4">Réservation effectué</h2>
        <table class="table table-bordered  text-center " aria-label="Reservation Table">

            <thead>
                <tr>
                    <th scope="col">nb Réservation</th>
                    <th scope="col">Date</th>
                    <th scope="col">Horraire</th>
                    <th scope="col">Avion</th>
                    <th scope="col">Pilote</th>
                </tr>
            </thead>
            <tbody>

                <?php $i = 0;
                foreach ($Reservations as $Reservation) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $Reservation->_date ?></td>
                        <td><?= $Reservation->horraire ?></td>
                        <td><?= $Reservation->avion_modele ?></td>
                        <td>
                            <?= $Reservation->nom_pilote ?>
                            <?= $Reservation->prenom_pilote ?>
                        </td>
                    </tr>
                <?php $i++;
                endforeach; ?>
            </tbody>
        </table>
        <h2 class="mb-1 mt-5">Renseigner des information</h2>
        <form method="post" class=" m-auto mb-5 col-12 col-md-10" style="padding-top:100px;">
            <?php if (!empty($errorMessage)) : ?>
                <div class="alert alert-danger">
                    <?= $errorMessage ?>
                </div>
            <?php endif; ?>

            <?= $form->select('civilite', "Civilité", ['Monsieur', 'Madame'], "form-control"); ?>
            <?= $form->input('nom', 'Nom', ['class' => 'form-control']); ?>
            <?= $form->input('prenom', 'Prénom', ['class' => 'form-control']); ?>
            <?= $form->input('_date', 'Date de naissance', ['type' => "date", 'class' => 'form-control']); ?>
            <div class="form-group">
                <?= $form->input('nb_voix', "Numéro de voix", ['class' => '', 'type' => 'text']); ?>
                <?= $form->input('rue', "Rue", ['class' => '', 'type' => 'text']); ?>
                <?= $form->input('code_postal', "Code postal", ['class' => '', 'type' => 'text']); ?>
                <?= $form->input('ville', "Ville", ['class' => '', 'type' => 'text']); ?>
            </div>
            <?= $form->select('situation_familiale', "Situation familiale", ['pacsé', 'divorcé', 'séparé', 'célibataire', 'veuf'], 'form-control'); ?>
            <?= $form->input('date_situation_familiale', 'Date Situation Familiale', ['type' => "date", 'class' => 'form-control']); ?>
            <?= $form->input('dateFin_situation_familiale', 'Date Fin Situation Familiale', ['type' => "date", 'class' => 'form-control']); ?>
            <?= $form->input('email', 'Email', ['type' => "email", 'class' => 'form-control']); ?>
            <?= $form->input('password', "Mot de passe", ['type' => 'password', 'class' => 'form-control w-100 back_input']); ?>
            <?= $form->input('numero', 'Numéro de telephone', ['type' => "number", 'class' => 'form-control']); ?>
            <?= $form->input('nb_a_charge', 'Nombre à Charge', ['type' => "number", 'class' => 'form-control']); ?>
            <?= $form->input('activite', 'Activité', ['class' => 'form-control']); ?>

            <button class="btn btn-primary mt-3">Sauvegarder</button>
        </form>
    </div>
</div>