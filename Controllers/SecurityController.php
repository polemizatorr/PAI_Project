<?php

require_once 'AppController.php';
require_once (__DIR__.'//../Models/User/User.php');


class SecurityController extends AppController
{

    public function Login()
    {
        $user = new User('johnny@pk.edu.pl', 'admin', 'Johnny', 'Snow');


        if ($this->isPost()) {

            $username = $_POST['Username'];
            $password = $_POST['Password'];

            if ($user->getUsername() !== $username) {
                $this->render('login', ['messages' => ['This username is busy yet']]);
                return;
            }

            if ($user->getPassword() !== $password) {
                $this->render('login', ['messages' => ['Wrong password!']]);
                return;
            }

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