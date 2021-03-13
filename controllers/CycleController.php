<?php

namespace controllers;

use models\Article;
use models\Calendar;
use models\Cycle;
use views\CycleView;

class CycleController extends Controller{


    public function index($url_data){
        $n_pages=Article::countByCategory($url_data['cycle']);
        $args=[];
        $args['cycle']=$url_data['cycle'];
        $args['page_count']=ceil($n_pages/8);
        if(!isset($url_data['page'])){
            $data=Article::getManyWithCategory(0,8,$url_data['cycle']);
            $args['page']=1;
        }
        else{
            $args['page']=$url_data['page'];
            $page=$url_data['page'];
            $from = ($page-1)*8;
            $data=Article::getManyWithCategory($from,8,$url_data['cycle']);
        }
        $args['articles']=$data;
        $cycle=new CycleView();
        $cycle->index($args);
        $cycle->view();
    }

    public function indexCalendars($url_data){
        $cycle=new CycleView();
        $args=[];
        $args['cycle']=$url_data['cycle'];
        $args['classes']=Cycle::getClasses($args['cycle']);
        foreach($args['classes'] as $class){
            $args['calendars'][$class['name']]['hours']=Calendar::countHours($class['calendar']);
            $args['calendars'][$class['name']]['events']=Calendar::get($class['calendar']);
        }
        $cycle->calendars($args);
        $cycle->view();
    }

    public function indexInfoPract($url_data){
        $cycle=new CycleView();
        $args=[];
        $args['info_pract']=Cycle::getInfoPract($url_data['cycle']);
        $cycle->infoPract($args);
        $cycle->view();
    }
}