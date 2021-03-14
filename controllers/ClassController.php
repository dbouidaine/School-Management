<?php

namespace controllers;

use Exception;
use models\Access;
use models\ClassM;
use models\Module;

class ClassController extends Controller{

    public function add(){
        Access::hasAccess('addClass');
        ClassM::new($_POST);
        header('Location: ' . url('admin/classes'));
    }

    public function addModule(){
        Access::hasAccess('addModule');
        Module::new($_POST);
        header('Location: '  . $_SERVER['HTTP_REFERER']);
    }

    public function update(){
        Access::hasAccess('updateClass');
        ClassM::update($_POST);
        header('Location: ' . url('admin/classes'));
    }

    public function delete($url_data){
        Access::hasAccess('deleteClass');
        ClassM::destroy($url_data['class_id']);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function deleteModule($url_data){
        Access::hasAccess('deleteModule');
        Module::destroy($url_data['module_id']);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}