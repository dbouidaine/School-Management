<?php

namespace controllers;

use models\User;

class UserController extends Controller{
    public function edit($url_data){
        ;
    }

    public function add(){
        User::new($_POST);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function delete($url_data){
        $id=$url_data['user_id'];
        User::destroy($id);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}