<?php

namespace controllers;
use controllers\DBController;
use views\CycleView;

class CycleController extends Controller{


    public function index($controller_data){
        /*$connection=\models\DataBase::connect();
        $query=$connection->prepare("SELECT * FROM tests");
        $query->execute();
        $result=$query->fetchAll((\PDO::FETCH_ASSOC));*/
        $cycle=new CycleView($controller_data);
        $cycle->view();
    }
}