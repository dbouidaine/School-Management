<?php

namespace controllers;
use views\PresentationView;

class PresentationController extends Controller{


    public function index(){
        $presentation=new PresentationView();
        $presentation->view();
    }
}