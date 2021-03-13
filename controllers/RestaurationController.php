<?php

namespace controllers;

use models\Restauration;
use views\RestaurationView;

class RestaurationController extends Controller{

    public function index(){
        $args['meals']=Restauration::getAll();
        $page=new RestaurationView();
        $page->index($args);
        $page->view();
    }

    public function update(){
        //Access::hasAccess('updateClass');
        Restauration::update($_POST);
        header('Location: ' . url('admin/restauration'));
    }

}