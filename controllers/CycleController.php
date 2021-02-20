<?php

namespace controllers;
use views\CycleView;

class CycleController extends Controller{


    public function index($url_data){
        $cycle=new CycleView($url_data);
        $cycle->view();
    }
}