<?php

namespace controllers;

class UserController extends Controller{
    public function edit($args){
        $id=$args['id_user'];
        $name_user=$args['name_user'];
        print_r("\nEditing user number: ".$id." named ".$name_user);
    }
}