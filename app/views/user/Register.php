<h1 style="padding-top: 100px;font-family: quicksand;
    font-size: 3rem;
    color: black;
    text-align: center;">Inscription</h1>
<div class="w-100 background d-flex align-items-center">
    <div class="col-md-6 mx-auto">

        <form action="" method="post" class="mb-3">
            <?php if (!empty($error)) : ?>
                <div class="alert alert-danger">
                    <?= $error ?>
                </div>
            <?php endif; ?>
            <div class="">
            </div>
            <div class="form-group">
                <?= $form->input('email', "Adresse email", ['class' => 'form-control w-100', 'id' => 'email']); ?>
            </div>
            <div class="form-group">
                <?= $form->input('password', "Mot de passe", ['type' => 'password', 'class' => 'form-control w-100 back_input']); ?>
            </div>
            <div class="form-group">
                <?= $form->input('password', "Verification de mot de passe", ['type' => 'password', 'class' => 'form-control w-100 back_input']); ?>
            </div>
            <div class="form-group m-auto">
                <?= $form->submit(['class' => 'btn btn-primary', 'value' => 'Se connecter']); ?>
            </div>
        </form>
    </div>
</div>