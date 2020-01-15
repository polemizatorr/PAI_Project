<?php
require_once "Controllers/AppController.php";
require_once "Models/User/User.php";
require_once "Repository/UserRepository.php";
require_once "Controllers/SecurityController.php";

class AdminController extends AppController
{

    public function index(): void
    {
        if (!isset($_SESSION['Username'])){
            $this->render('login', ['messages' => 'Cannot take that action']); // unable to manually call method by typing ?page=...
        }

        $userRepo = new UserRepository();
        $user = $userRepo->getUser($_SESSION['Username']);

        $this->render('AdminPanel', ['user' => $user]);
    }

    public function users(): void
    {
        if (!isset($_SESSION['Username'])){
            $this->render('login', ['messages' => 'Cannot take that action']);  // unable to manually call method by typing ?page=...
        }

        $user = new UserRepository();
        header('Content-type: application/json');
        http_response_code(200); // Here it fails?

        echo $user->getOtherUsers($_SESSION["Username"]) ? json_encode($user->getOtherUsers($_SESSION["Username"])) : '';

    }

    public function userDelete(): void
    {

        if (!isset($_POST['Username'])) {
            http_response_code(404);
            return;
        }

        $user = new UserRepository();
        $user->deleteUser($_POST['Username']);
        http_response_code(200); // Here it fails?


    }
}