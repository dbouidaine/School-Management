<?php

use app\Application;

$ROOT_DIR=dirname(__DIR__);
require_once ($ROOT_DIR.'/paths.php');

spl_autoload_register(function ($class_name) {
    //This function enable us to autoload classes when we need them
    //it takes in conseideration namespaces
    include ROOT_PATH.'/'.$class_name . '.php';
});

if(!(isset($_GET['route'])) && (isset($_SERVER['PATH_INFO']))){
    $_GET['route']=ltrim($_SERVER['REQUEST_URI'],"/");
}

$app=new Application();

$app->router->get("/home", function($args){
    //
});

$app->router->get("/user", function($args){
    //
});

$app->router->get("/user/edit/{id_user}", function($args){
    //
});

$app->router->get("/user/profile/{id}", function($args){
    //
});

$app->router->get("/user/profile/{id}/delete/{section_name}", function($args){
    //
});