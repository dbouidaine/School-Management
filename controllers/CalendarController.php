<?php

namespace controllers;

use models\Calendar;
use models\ClassM;

class CalendarController extends Controller{


    public function addLine($url_data){
        //Access::hasAccess('addUser');
        if(empty($_POST['calendar_id'])){
            Calendar::newCalendar($_POST['class_name']);
            $_POST['calendar_id']=Calendar::getByClassName($_POST['class_name'])['id'];
            ClassM::updateYear($_POST['class_name'],$_POST['calendar_id']);
        }
        print_r($_POST);
        for($i=1;$i<=7;$i++){
            if(isset($_POST[$i])){
                Calendar::newEvent($_POST['calendar_id'],$i,
                $_POST[$i],$_POST['start'],$_POST['finish']);
            }
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    
    public function update(){
        ;
    }

    public function delete($url_data){
        //Access::hasAccess('deleteUser');
        $id=$url_data['calendar_id'];
        Calendar::destroy($id);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function deleteLine($url_data){
        $calendar_id=$url_data['calendar_id'];
        $line_id=$url_data['line_id'];
        Calendar::destroyLine($calendar_id,$line_id);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}