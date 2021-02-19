<?php

use app\Application;

$ROOT_DIR=dirname(__DIR__);
require_once ($ROOT_DIR.'/config.php');

spl_autoload_register(function ($class_name) {
    //This function enable us to autoload classes when we need them
    //it takes in conseideration namespaces
    include ROOT_PATH.'/'.$class_name . '.php';
});

if(!(isset($_GET['route'])) && (isset($_SERVER['PATH_INFO']))){
    $_GET['route']=ltrim($_SERVER['REQUEST_URI'],"/");
}
if(!(isset($_GET['route'])) && !(isset($_SERVER['PATH_INFO']))){
    $_GET['route']="/";
}

$app=new Application();

$app->router->found=0;

$app->router->get("/",[HomeController::class,'index']);

$app->router->get("/home/{page}",[HomeController::class,'index']);

$app->router->get("/article/show/{id_article}",[ArticleController::class,'show']);

$app->router->get("/ecole/presentation",[PresentationController::class,'index']);

$app->router->get("/ecole/{cycle}",[CycleController::class,'index']);

$app->router->get("/contact",[CycleController::class,'index']);

$app->router->get("/user/edit/{id_user}/{name_user}",[UserController::class,'edit']);

if(!$app->router->found)
{
    $app->router->redirect('errors/404');
}