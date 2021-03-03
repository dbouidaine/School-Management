<?php

namespace controllers;

use models\Access;
use models\User;


class UserController extends Controller{

    public function add(){
        Access::hasAccess($_SESSION['user']['role'],'addUser');
        User::new($_POST);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    
    public function update(){
        Access::hasAccess($_SESSION['user']['role'],'addUser');
        User::update($_POST);
        header('Location: ' . url('admin/users'));
    }

    public function delete($url_data){
        Access::hasAccess($_SESSION['user']['role'],'deleteUser');
        $id=$url_data['user_id'];
        User::destroy($id);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}