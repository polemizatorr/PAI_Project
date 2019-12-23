<?php
    session_start();
    require_once ('Routing.php');

    //print(__DIR__);  __DIR__ = 'C:\Users\Dodo\Documents\GitHub\PAI_Project'

    $router = new Routing();
    $router -> run();