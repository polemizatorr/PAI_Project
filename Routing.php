<?php
    require_once(__DIR__.'/Controllers/SecurityController.php');
    require_once(__DIR__.'/Controllers/BoardController.php');
    require_once ("Controllers/AdminController.php");

class Routing {
    private $routes = [];

    public function __construct(){
        $this -> routes = [
            'login' => [
                'controller' => 'SecurityController',
                'action' => 'Login'
            ],
            'board' => [
                'controller' => 'BoardController',
                'action' => 'Profile'
            ],
            'logout' => [
                'controller' => 'SecurityController',
                'action' => 'logout'
            ],
            'register' => [
                'controller' => 'SecurityController',
                'action' => 'register'
            ],
            'contact' => [
                'controller' => 'BoardController',
                'action' => 'contact'
            ],
            'AboutUs' => [
                'controller' => 'BoardController',
                'action' => 'AboutUs'
            ],
            'HomePage' => [
                'controller' => 'BoardController',
                'action' => 'HomePage'
            ],
            'Ads' => [
                'controller' => 'BoardController',
                'action' => 'Ads'
            ],
            'renderRegister' => [
                'controller' => 'SecurityController',
                'action' => 'renderRegister'
            ],
            'addAdvertisement' => [
                'controller' => 'BoardController',
                'action' => 'addAdvertisement'
            ],
            'renderAdvertisement' => [
                'controller' => 'BoardController',
                'action' => 'renderAddAdvertisement'
            ],
            'MyAds' => [
                'controller' => 'BoardController',
                'action' => 'MyAds'
            ],
            'AdminPanel' => [
                'controller' => 'AdminController',
                'action' => 'index'
            ],
            'admin_users' => [
                'controller' => 'AdminController',
                'action' => 'users'
            ]


        ];
    }

    public function run(){

        $page = isset($_GET['page']) ? $_GET['page'] : 'login';

        if (isset($this->routes[$page])) {
            $controller = $this->routes[$page]['controller'];
            $action = $this->routes[$page]['action'];

            $object = new $controller;
            $object->$action();
        }
    }



}