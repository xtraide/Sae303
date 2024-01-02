<?php

use Core\HTML\BootstrapForm;
use Core\Auth\DatabaseAuth;

if (!empty($_POST)) {
    $auth = new DatabaseAuth(App::getInstance()->getDatabase());
    if ($auth->login($_POST['email'], $_POST['password'])) {
        header('Location: index.php?page=dashboard');
    } else {
?>
<div class="alert alert-danger">
    Identifiant ou mot de passe incorrect
</div>
<?php
    }
}
$form = new BootstrapForm($_POST);
?>
<div class="w-100 vh-100 background d-flex align-items-center">
    <form action="#" method="post" class="w-50 m-auto ">
            <div class="form-group w-100 m-auto label-log">
                <?= $form->input('email', "Adresse email", ['class' => 'form-control w-100', 'id' => 'email']); ?>
            </div>
            <div class="form-group w-100 m-auto label-log">
                <?= $form->input('password', "Mot de passe", ['type' => 'password', 'class' => 'form-control w-100 back_input']); ?>
            </div>
            <div class="form-group m-auto">
                <?= $form->submit(['class' => 'btn btn-primary d-flex align-items-center m-auto', 'value' => 'Se connecter']); ?>
            </div>
    </form>
</div>