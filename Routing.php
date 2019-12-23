<?php
    require_once(__DIR__.'/Controllers//SecurityController.php');
    require_once(__DIR__.'/Controllers//BoardController.php');

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
                'action' => 'login'
            ],
            'register' => [
                'controller' => 'SecurityController',
                'action' => 'register'
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