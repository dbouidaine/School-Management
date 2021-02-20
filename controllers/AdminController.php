<?php

namespace controllers;
use views\AdminView;

class AdminController extends Controller{


    public function index($url_data){
        $cycle=new AdminView($url_data);
        $cycle->view();
    }
}