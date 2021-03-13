<?php

namespace controllers;

use Exception;
use models\Access;
use models\Presentation;
use views\PresentationView;

class PresentationController extends Controller{

    public function index(){
        $args=[];
        $args['presentations']=Presentation::getAll();
        $home=new PresentationView();
        $home->index($args);
        $home->view();
    }

    public function add(){
        Access::hasAccess('addPresentation');
        if(!empty($_FILES)){
            uploadImage('image');
        }
        Presentation::new($_POST,$_FILES);
        header('Location: ' . url('admin/presentation'));
    }

    public function updateOrder(){
        Access::hasAccess('updateOrderPresentation');
        Presentation::updateOrder($_POST);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function update(){
        //Access::hasAccess('updateOrderPresentation');
        if(!empty($_FILES)){
            uploadImage('image');
        }
        Presentation::update($_POST,$_FILES);
        header('Location: ' . url('admin/presentation'));
    }

    public function delete($url_data){
        Access::hasAccess('deletePresentation');
        Presentation::delete($url_data['presentation_id']);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}