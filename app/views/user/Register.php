<div class="w-100 vh-100 background d-flex align-items-center">
    <div class="col-md-6 mx-auto">

        <form action="" method="post">
            <?php if (!empty($error)) : ?>
                <div class="alert alert-danger">
                    <?= $error ?>
                </div>
            <?php endif; ?>
            <div class="">
                <div class="form-check-inline">
                    <?= $form->input('checkbox', "Monsieur", ['class' => 'checkbox', 'id' => '', 'type' => 'radio']); ?>
                </div>
                <div class="form-check-inline">
                    <?= $form->input('checkbox', "Madame", ['class' => 'checkbox', 'id' => '', 'type' => 'radio']); ?>
                </div>
            </div>
            <div class="form-group">
                <?= $form->input('Nom', "Nom", ['class' => '']); ?>
            </div>
            <div class="form-group">
                <?= $form->input('text', "Prénom", ['class' => '']); ?>
            </div>
            <div class="form-group">
                <?= $form->input('email', "Adresse email", ['class' => 'form-control w-100', 'id' => 'email']); ?>
            </div>
            <div class="form-group">
                <?= $form->input('Tel', "Téléphone", ['class' => '', 'id' => '', 'type' => 'number']); ?>
            </div>
            <div class="form-group">
                <?= $form->input('date', "Date de naissance", ['class' => 'btn btn-primary d-flex align-items-center m-auto ', 'type' => 'date']); ?>
            </div>
            <div class="form-group m-auto">
                <?= $form->submit(['class' => 'btn btn-primary d-flex align-items-center m-auto ', 'value' => 'Se connecter']); ?>
            </div>
        </form>
    </div>
</div>