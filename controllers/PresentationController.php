<?php

namespace controllers;
use controllers\DBController;
use views\PresentationView;

class PresentationController extends Controller{


    public function index(){
        /*$connection=\models\DataBase::connect();
        $query=$connection->prepare("SELECT * FROM tests");
        $query->execute();
        $result=$query->fetchAll((\PDO::FETCH_ASSOC));*/
        $presentation=new PresentationView();
        $presentation->view();
    }
}