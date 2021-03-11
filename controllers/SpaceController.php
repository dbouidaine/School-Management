<?php

namespace controllers;

use models\Access;
use models\Article;
use models\User;
use models\Calendar;
use views\SpaceView;

class SpaceController extends Controller{


    public function indexStudentSpace($url_data){
        Access::hasAccess('indexStudentSpace');
        $args=[];
        $args['user']=User::get($_SESSION['user']['id']);
        unset($args['user']['password']);
        $args['user']['class']=User::getCycle($args['user']['class']);
        $args['user']['calendar']['events']=Calendar::get($args['user']['class']['calendar_id']);
        $args['user']['calendar']['hours']=Calendar::countHours($args['user']['class']['calendar_id']);
        print_r($args['user']);
        $n_pages=Article::countByCategory($args['user']['category']);
        $args['page_count']=ceil($n_pages/8);
        if(!isset($url_data['page'])){
            $data=Article::getMany(0,8,$args['user']['category']);
            $args['page']=1;
        }
        else{
            $args['page']=$url_data['page'];
            $page=$url_data['page'];
            $from = ($page-1)*8;
            $data=Article::getMany($from,8,$args['user']['category']);
        }
        if(empty($data)){
            \app\Router::redirect('errors/404');
            exit();
        }
        $args['articles']=$data;
        $cycle=new SpaceView();
        $cycle->studentSpace($args);
        $cycle->view();
    }

    public function indexParentSpace($url_data){
        Access::hasAccess('indexParentSpace');
        $cycle=new SpaceView();
        $cycle->parentSpace($url_data);
        $cycle->view();
    }
}