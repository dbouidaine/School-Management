<?php

namespace controllers;

use models\Restauration;

class RestaurationController extends Controller{

    public function index(){
        $args['meals']=Restauration::getAll();
    }

    public function update(){
        //Access::hasAccess('updateClass');
        Restauration::update($_POST);
        header('Location: ' . url('admin/restauration'));
    }

}