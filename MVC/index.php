<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Getting path
$path = str_replace($_SERVER['SCRIPT_NAME'], '', $_SERVER['REQUEST_URI']);

// Explode our path in array and deliting '/'
$path = explode('/', ltrim($path,'/'));

// The first letter is done by the capital letter
$controller = ucfirst($path[0]);

if(file_exists('controller/'.$controller.'.php')){
    require 'controller/'.$controller.'.php';
    if(isset($path[1]) && isset($path[2])) {
        $id = $path[2];
        $method = $path[1];
        $obj = new $controller;
        $obj->{$method}($id);

    }else{
        $obj = new $controller;
        $obj->index();
    }

}
else{
    require 'controller/Error.php';
    $obj = new ErrorController();
    $obj->showErrorPage();
}

