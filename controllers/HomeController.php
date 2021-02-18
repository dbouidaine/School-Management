<?php

namespace controllers;
use controllers\DBController;
use views\HomeView;
use views\LayoutView;

class HomeController extends Controller{


    public function index(){
        $connection=\models\DataBase::connect();
        $query=$connection->prepare("SELECT * FROM tests");
        $query->execute();
        $result=$query->fetchAll((\PDO::FETCH_ASSOC));
        $home=new HomeView();
        $home->view();
    }
}