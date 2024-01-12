<div class="w-100 police" style="padding-top: 100px; height:80vh;">
    <h1 style="font-family: quicksand;
    font-size: 3rem;
    color: black;
    text-align: center;">Inscription</h1>
    <div class="col-md-6 mx-auto">

        <form action="" method="post" class="w-50 m-auto mb-3 police">
            <?php if (!empty($errorMessage)) : ?>
                <div class="alert alert-danger">
                    <?= $errorMessage ?>
                </div>
            <?php endif; ?>
            <div class="">
            </div>
            <div class="form-group police">
                <?= $form->input('email', "Adresse email", ['class' => 'form-control w-100', 'id' => 'email']); ?>
            </div>
            <div class="form-group police">
                <?= $form->input('password', "Mot de passe", ['type' => 'password', 'class' => 'form-control w-100 back_input']); ?>
            </div>
            <div class="form-group police">
                <?= $form->input('password', "Verification de mot de passe", ['type' => 'password', 'class' => 'form-control w-100 back_input']); ?>
            </div>
            <div class="form-group m-auto">
                <?= $form->submit(['class' => 'btn btn-primary', 'value' => 'Se connecter']); ?>
            </div>
        </form>
    </div>
</div>