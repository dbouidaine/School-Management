<?php

namespace controllers;
use views\AdminPresentationView;

class PresentationController extends Controller{


    public function index(){
        $presentation=new AdminPresentationView();
        $presentation->showParagraphs();
        $presentation->view();
    }
}