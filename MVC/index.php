<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$path = str_replace($_SERVER['SCRIPT_NAME'], '', $_SERVER['REQUEST_URI']);

$path = explode('/', ltrim($path,'/'));



$controller = ucfirst($path[0]);

if(file_exists('controller/'.$controller.'.php')){

    require 'controller/'.$controller.'.php';
    $obj = new $controller;


}else{
    require 'controller/Error.php';
    $obj = new ErrorController();
    $obj->showErrorPage();
}

    require_once 'model/ProductModel.php';

//    $model = new ProductModel();
//    $products = $model->getallproducts();
//
//        print_r($products);

