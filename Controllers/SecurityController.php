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

            if (is_null($user)){
                $this->render('login', ['messages' => ['Username not found!']]);
                return;
            }

            if ($user->getUsername() !== $username) {
                $this->render('login', ['messages' => ['Invalid Username!']]);
                return;
            }

            if ($user->getPassword() !== $password) {
                $this->render('login', ['messages' => ['Wrong password!']]);
                return;
            }
            $_SESSION['Username'] = $username;
            $_SESSION['Role'] = $user -> getRole();


            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}?page=HomePage");
        }

        $this->render('login');
    }

    public function logout()
    {
        session_unset();
        session_destroy();

        $this->render('login', ['messages' => ['You have been successfully logged out.']]);
    }

    public function renderRegister()
    {
        $this->render('Register');
    }

    public function register()
    {
        $UserRepository = new UserRepository();

        if ($this -> isPost())
        {
            $username = $_POST['Username'];
            $email = $_POST['Email'];
            $password = $_POST['Password'];
            $password2 = $_POST['Password2'];
            $name = $_POST['Name'];

            if ($username === '' || $email === '' || $password === '' || $password2 === '' || $name === '')
            {
                $this->render("Register", ['messages' => ['Fill all inputs']]);
                return;
            }

            if (strlen($username) < 6 || strlen($username) > 32)
            {
                $this->render("Register", ['messages' => ['Username should has 6-32 signs']]);
                return;
            }

            if (strlen($email) < 6 || strlen($email) > 32)
            {
                $this->render("Register", ['messages' => ['Email should has 6-32 signs']]);
                return;
            }

            if (strlen($password) < 6 || strlen($password) > 32)
            {
                $this->render("Register", ['messages' => ['Password should has 6-32 signs']]);
                return;
            }

            if ($password !== $password2) {
                $this->render('Register', ['messages' => ['Password 1 and password 2 are diffrent!']]);
                return;
            }

            if (!$UserRepository->isUsernameAvailable($username))
            {
                $this->render('Register', ['messages' => ['This Username is busy!']]);
                return;
            }

            if (!$UserRepository->isEmailAvailable($email))
            {
                $this->render('Register', ['messages' => ['This Email is busy!']]);
                return;
            }

            $UserRepository -> addUser($username, $password, $email, $name, "User");
        }

        $url = "http://$_SERVER[HTTP_HOST]/";
        header("Location: {$url}?page=login");
        $this->render("login", ['messages' => ['Accountant has been created.']]);

    }

    public function AdminPanel()
    {
        $Repo = new UserRepository();

        $Users = $Repo -> getUsers();


        $this->render('AdminPanel', ['Users' => [$Users]]);
    }


}