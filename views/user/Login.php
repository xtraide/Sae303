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
<form action="#" method="post">
    <div>
        <div>
            <H3>Adresse Email</H3>
            <?php
            echo $form->input('email', "Adresse email");
            ?>
        </div>
        <div>
            <h3>Mot de Passe</h3>
            <?php
            echo $form->input('password', "Mot de passe", ['type' => 'password']);
            ?>
        </div>
        <div>
            <?php
            echo $form->submit();
            ?>
        </div>
    </div>

</form>