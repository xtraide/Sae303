<?php

if ($error) {
?>
    <div class="alert alert-danger">
        Identifiant ou mot de passe incorrect
    </div>
<?php
}


?>
<div class="w-100 vh-100 background d-flex align-items-center">
    <form action="#" method="post" class="w-50 m-auto ">
        <div class="form-group w-100 m-auto">
            <?= $form->input('email', "Adresse email", ['class' => 'form-control w-100', 'id' => 'email']); ?>
        </div>
        <div class="form-group w-100 m-auto">
            <?= $form->input('password', "Mot de passe", ['type' => 'password', 'class' => 'form-control w-100 back_input']); ?>
        </div>
        <div class="form-group">
            <?= $form->submit(['class' => 'btn btn-primary d-flex align-items-center', 'value' => 'Se connecter']); ?>
        </div>
    </form>
</div>