<?php

namespace App\Controller;

use Core\Auth\DatabaseAuth;
use Core\HTML\BootstrapForm;
use \App;

use App\Mail\Mail;

class UserController extends AppController
{
    private $auth;
    private $user;
    public function __construct(DatabaseAuth $auth)
    {
        parent::__construct();
        $this->auth = $auth;
        $this->user = $this->loadModel('user');
    }

    public function login()
    {
        $form = new BootstrapForm($_POST);

        $errorMessage = '';
        if ($_POST) {
            try {
                $this->validateForm($_POST);

                if ($this->auth->login($_POST['email'], sha1($_POST['password']))) {
                    header('Location: ?page=main.index');
                    exit;
                } else {
                    throw new \Exception('email ou mot de passe incorrect');
                }
            } catch (\Exception $e) {
                $errorMessage = $e->getMessage();
            }
        }

        $this->render('user.login', compact('form', 'errorMessage'));
    }

    public function logout()
    {
        $this->auth->logout();
        header('Location: ?page=main.index');
    }

    public function register()
    {
        $form = new BootstrapForm($_POST);
        $errorMessage = '';
        if ($_POST) {
            try {
                $this->validateForm($_POST);

                if ($this->auth->isEmailAvailable($_POST['email'])) {

                    $token = uniqid();
                    if ($this->auth->register([
                        'email' => $_POST['email'],
                        'password' => sha1($_POST['password']),
                        'token' => $token
                    ])) {
                        $id = $this->user->getLastId();

                        Mail::sendmail($_POST['email'], $token, $id);
                        header('Location: ?page=main.index');
                        exit;
                    } else {
                        throw new \Exception('erreur lors de l\'inscription');
                    }
                } else {
                    throw new \Exception('L\'email est déjà utilisé, veuillez en utiliser un autre.');
                }
            } catch (\Exception $e) {
                $errorMessage = $e->getMessage();
            }
        }

        $this->render('user.register', compact('form', 'errorMessage'));
    }

    public function profil()
    {
        $form = new BootstrapForm($_POST);
        $this->render('user.profil',  compact('form'));
    }
    public function reservation()
    {

        $errorMessage = '';

        if ($_POST) {
            try {
                $this->validateForm($_POST);
                $this->Reservation = $this->loadModel('reservation');
                $result = $this->Reservation->create($_POST);
                header('Location: ?page=main.index');
            } catch (\Exception $e) {
                $errorMessage = $e->getMessage();
            }
        }
        $avions = $this->loadModel('avion')->extract('id', 'modele');

        $pilotes_model = $this->loadModel('pilote')->all();
        foreach ($pilotes_model as $pilote) {
            $pilotes[$pilote->id] = $pilote->nom . " " . $pilote->prenom;
        }


        $user = $_SESSION['auth'];


        $form = new BootstrapForm($_POST);
        $this->render('user.reservation', compact('form', 'avions', 'pilotes', 'user', 'errorMessage'));
    }
    public function VerifyAccount()
    {
        try {

            if ((isset($_GET['token']) && !empty($_GET['token'] && isset($_GET['id']) && !empty($_GET['id'])))) {

                $user_id = $_GET['id'];
                $token = $_GET['token'];
                $user = $this->user->confirmToken($token, $user_id);

                if ($user) {
                    $this->user->verify($user_id);
                    header('Location: ?page=main.index');
                    exit;
                } else {
                    throw new \Exception('erreur lors de la vérification du compte');
                }
            } else {
                throw new \Exception('erreur lors de la vérification du compte');
            }
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();

            header('Location: ?page=main.index');
        }
    }
}
