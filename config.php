<?php
//This file is where I define all my global variables like paths ...etc
define('ROOT_PATH',__DIR__);
define('APPLICATION_PATH',ROOT_PATH.'\app');
define('CONTROLLERS_PATH',ROOT_PATH.'\controllers');
define('MODELS_PATH',ROOT_PATH.'\models');
define('VIEWS_PATH',ROOT_PATH.'\views');
define('PUBLIC_PATH',ROOT_PATH.'\public');

define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST','127.0.0.1');
define('DB_NAME','TDW');


function url($url){
    if(isset($_GET['base_url'])) {return $_GET['base_url'].'/'.$url;}
    else {return '/'.$url; }
}

function asset($str){
    if(isset($_GET['base_url'])) {return url('public/assets/').$str;}
    return '/assets/'.$str;
}

function img($str){
    return asset('my-assets/img/storage/'.$str);
}

function storage($str){
    return 'assets/my-assets/img/storage/'.$str;
}

function uploadImage($str){
    move_uploaded_file($_FILES[$str]['tmp_name'],storage($_FILES[$str]['name']));
}