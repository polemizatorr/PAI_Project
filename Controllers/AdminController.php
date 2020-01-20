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

        if (isset($_SESSION['Role']) && $_SESSION['Role'] !== 'Admin')
        {
            $this->render('login', ['messages' => "No permission to do it, you'll get logged out"]);
        }

        $user = new UserRepository();
        header('Content-type: application/json');
        http_response_code(200); // Here it fails?

        echo $user->getOtherUsers($_SESSION["Username"]) ? json_encode($user->getOtherUsers($_SESSION["Username"])) : '';

    }

    public function usersSorted(): void
    {
        if (!isset($_SESSION['Username'])){
            $this->render('login', ['messages' => 'Cannot take that action']);  // unable to manually call method by typing ?page=...
        }

        if (isset($_SESSION['Role']) && $_SESSION['Role'] !== 'Admin')
        {
            $this->render('login', ['messages' => "No permission to do it, you'll get logged out"]);
        }

        $user = new UserRepository();
        header('Content-type: application/json');
        http_response_code(200); // Here it fails?

        echo $user->getOtherUsersSorted($_SESSION["Username"]) ? json_encode($user->getOtherUsersSorted($_SESSION["Username"])) : '';

    }

    public function usersSortedRole(): void
    {
        if (!isset($_SESSION['Username'])){
            $this->render('login', ['messages' => 'Cannot take that action']);  // unable to manually call method by typing ?page=...
        }

        if (isset($_SESSION['Role']) && $_SESSION['Role'] !== 'Admin')
        {
            $this->render('login', ['messages' => "No permission to do it, you'll get logged out"]);
        }

        $user = new UserRepository();
        header('Content-type: application/json');
        http_response_code(200); // Here it fails?

        echo $user->getOtherUsersSortedRole($_SESSION["Username"]) ? json_encode($user->getOtherUsersSortedRole($_SESSION["Username"])) : '';

    }

    public function usersSortedEmail(): void
    {
        if (!isset($_SESSION['Username'])){
            $this->render('login', ['messages' => 'Cannot take that action']);  // unable to manually call method by typing ?page=...
        }

        if (isset($_SESSION['Role']) && $_SESSION['Role'] !== 'Admin')
        {
            $this->render('login', ['messages' => "No permission to do it, you'll get logged out"]);
        }

        $user = new UserRepository();
        header('Content-type: application/json');
        http_response_code(200); // Here it fails?

        echo $user->getOtherUsersSortedEmail($_SESSION["Username"]) ? json_encode($user->getOtherUsersSortedEmail($_SESSION["Username"])) : '';

    }

    public function usersSortedAds(): void
    {
        if (!isset($_SESSION['Username'])){
            $this->render('login', ['messages' => 'Cannot take that action']);  // unable to manually call method by typing ?page=...
        }

        if (isset($_SESSION['Role']) && $_SESSION['Role'] !== 'Admin')
        {
            $this->render('login', ['messages' => "No permission to do it, you'll get logged out"]);
        }

        $user = new UserRepository();
        header('Content-type: application/json');
        http_response_code(200); // Here it fails?

        echo $user->getOtherUsersSortedEmail($_SESSION["Username"]) ? json_encode($user->getOtherUsersSortedEmail($_SESSION["Username"])) : '';

    }

    public function usersOnly(): void
    {
        if (!isset($_SESSION['Username'])){
            $this->render('login', ['messages' => 'Cannot take that action']);  // unable to manually call method by typing ?page=...
        }

        if (isset($_SESSION['Role']) && $_SESSION['Role'] !== 'Admin')
        {
            $this->render('login', ['messages' => "No permission to do it, you'll get logged out"]);
        }

        $user = new UserRepository();
        header('Content-type: application/json');
        http_response_code(200); // Here it fails?

        echo $user->getUsersOnly($_SESSION["Username"]) ? json_encode($user->getUsersOnly($_SESSION["Username"])) : '';

    }

    public function AdminsOnly(): void
    {
        if (!isset($_SESSION['Username'])){
            $this->render('login', ['messages' => 'Cannot take that action']);  // unable to manually call method by typing ?page=...
        }

        if (isset($_SESSION['Role']) && $_SESSION['Role'] !== 'Admin')
        {
            $this->render('login', ['messages' => "No permission to do it, you'll get logged out"]);
        }

        $user = new UserRepository();
        header('Content-type: application/json');
        http_response_code(200); // Here it fails?

        echo $user->getAdminsOnly($_SESSION["Username"]) ? json_encode($user->getAdminsOnly($_SESSION["Username"])) : '';

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

    public function giveAdmin(): void
    {

        if (!isset($_POST['Username'])) {
            http_response_code(404);
            return;
        }

        $user = new UserRepository();
        $user->giveAdmin($_POST['Username']);
        http_response_code(200); // Here it fails?


    }

    public function DenyAdmin(): void
    {

        if (!isset($_POST['Username'])) {
            http_response_code(404);
            return;
        }

        $user = new UserRepository();
        $user->denyAdmin($_POST['Username']);
        http_response_code(200); // Here it fails?


    }
}