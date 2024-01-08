<div class="w-100" style="padding-top: 100px; height:80vh;">
    <h1 style="font-family: quicksand;
    font-size: 3rem;
    color: black;
    text-align: center;">Connexion</h1>
    <div class="col-md-6 mx-auto">
        <form action="#" method="post" class="w-50 m-auto mb-3">
            <?php if (!empty($errorMessage)) : ?>
                <div class="alert alert-danger">
                    <?= $errorMessage ?>
                </div>
            <?php endif; ?>
            <div class="form-group w-100 m-auto label-log">
                <?= $form->input('email', "Adresse email", ['class' => 'form-control w-100', 'id' => 'email']); ?>
            </div>
            <div class="form-group w-100 m-auto label-log">
                <?= $form->input('password', "Mot de passe", ['type' => 'password', 'class' => 'form-control w-100 back_input']); ?>
            </div>
            <div class="form-group">
                <?= $form->submit('Se connecter', "Se connecter", ['class' => 'btn btn-primary', 'value' => 'Se connecter']); ?>
            </div>
        </form>
    </div>
</div>