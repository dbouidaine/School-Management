<?php

namespace controllers;

use app\Router;
use models\User;

class AuthController extends Controller{


    public function login($url_data){
        $user = User::getByEmail($_POST['email']);
        $password = md5($_POST['password']);
        if (!isset($user)){
            Router::redirect('errors/404');
        }
        else{
            if ($password == $user['password']){
                $_SESSION['user']['id']=$user['id'];
                $_SESSION['user']['email']=$user['email'];
                $_SESSION['user']['role']=$user['role'];
                $_SESSION['user']['first_name']=$user['first_name'];
                $_SESSION['user']['last_name']=$user['last_name'];
            }
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function logout($url_data){
        if(session_status()==2){
            unset($_SESSION['user']);
            session_destroy();
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}