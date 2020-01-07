<?php

require_once 'AppController.php';
require_once 'Repository/UserRepository.php';
require_once 'Models/User/User.php';


class SecurityController extends AppController
{

    public function Login()
    {
        $UserRepository = new UserRepository();



        if ($this->isPost()) {

            $username = $_POST['Username'];
            $password = $_POST['Password'];

            $user = $UserRepository->getUser($username);

            if ($user->getUsername() !== $username) {
                $this->render('login', ['messages' => ['Invalid Username!']]);
                return;
            }

            if ($user->getPassword() !== $password) {
                $this->render('login', ['messages' => ['Wrong password!']]);
                return;
            }
            $_SESSION['Username'] = $username;


            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}?page=board");
        }

        $this->render('login');
    }

    public function logout()
    {
        session_unset();
        session_destroy();

        $this->render('login', ['messages' => ['You have been successfully logged out.']]);
    }

    public function register()
    {
        $this->render('register');
    }


}