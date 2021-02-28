<?php

namespace controllers;

use Exception;
use models\Presentation;
use views\AdminPresentationView;

class PresentationController extends Controller{

    public function add(){
        Presentation::new($_POST);
        header('Location: ' . url('admin/presentation'));
    }

    public function updateOrder(){
        Presentation::updateOrder($_POST);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}