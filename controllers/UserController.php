<?php

namespace controllers;

class UserController extends Controller{
    public function edit($url_data){
        //print_r($args);
        $id=$url_data['id_user'];
        $name_user=$url_data['name_user'];
        //print_r("\nEditing user number: ".$id." named ".$name_user);
    }
}