<?php

namespace controllers;

use Exception;
use models\Access;
use models\Presentation;
use views\AdminPresentationView;

class PresentationController extends Controller{

    public function add(){
        Access::hasAccess('addPresentation');
        Presentation::new($_POST);
        header('Location: ' . url('admin/presentation'));
    }

    public function updateOrder(){
        Access::hasAccess('updateOrderPresentation');
        Presentation::updateOrder($_POST);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function delete($url_data){
        Access::hasAccess('deletePresentation');
        Presentation::delete($url_data['presentation_id']);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}