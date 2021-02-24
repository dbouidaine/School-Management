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

$var=explode("?",$_GET['route'],2);
$_GET['route']=$var[0];

$app=new Application();

$app->router->found=0;

/******************** Home ************************/

$app->router->get("/",[HomeController::class,'index']);

$app->router->get("/home/{page}",[HomeController::class,'index']);

$app->router->get("/article/show/{id_article}",[ArticleController::class,'show']);

$app->router->get("/ecole/presentation",[PresentationController::class,'index']);

$app->router->get("/ecole/{cycle}",[CycleController::class,'index']);

$app->router->get("/contact",[CycleController::class,'index']);

/******************** Admin ************************/

$app->router->get("/admin",[AdminController::class,'index']);

/******************** Articles ************************/

$app->router->get("/admin/articles",[AdminController::class,'indexArticles']);

$app->router->get("/admin/articles/{page}",[AdminController::class,'indexArticles']);

$app->router->get("/article/new",[AdminController::class,'newArticle']);

$app->router->get("/article/delete/{article_id}",[ArticleController::class,'delete']);

$app->router->get("/article/add",[ArticleController::class,'add']);



/******************** Users ************************/

$app->router->get("/admin/users",[AdminController::class,'indexUsers']);

$app->router->get("/admin/users/{page}",[AdminController::class,'indexUsers']);

$app->router->get("/user/delete/{user_id}",[UserController::class,'delete']);

$app->router->get("/user/new",[AdminController::class,'newUser']);

$app->router->get("/user/add",[UserController::class,'add']);


if(!$app->router->found)
{
    $app->router->redirect('errors/404');
}