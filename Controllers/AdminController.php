<?php
require_once "Controllers/AppController.php";
require_once "Models/User/User.php";
require_once "Repository/UserRepository.php";

class AdminController extends AppController
{

    public function index(): void
    {
        $userRepo = new UserRepository();
        $user = $userRepo->getUser($_SESSION['Username']);

        $this->render('AdminPanel', ['user' => $user]);
    }

    public function users(): void
    {
        $user = new UserRepository();
        header('Content-type: application/json');
        http_response_code(200); // Here it fails?
        //$var = $user->getOtherUsers($_SESSION["Username"]);


        //var_dump(json_encode($var));



        echo $user->getOtherUsers($_SESSION["Username"]) ? json_encode($user->getOtherUsers($_SESSION["Username"])) : '';

    }

    public function userDelete(): void
    {

        if (!isset($_POST['Username'])) {
            http_response_code(404);
           // die("Post died");
            return;
        }

        $user = new UserRepository();
        $user->deleteUser($_POST['Username']);
    }
}