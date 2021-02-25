<?php

namespace controllers;

use models\Presentation;
use views\AdminPresentationView;

class PresentationController extends Controller{


    public function index(){
        $args=[];
        $args['presentation']=Presentation::getAll();
        print_r($args['presentation']);
        $presentation=new AdminPresentationView();
        $presentation->showParagraphs();
        $presentation->view();
    }

    public function updateOrder(){
        Presentation::updateOrder($_POST);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}