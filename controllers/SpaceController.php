<?php

namespace controllers;

use models\Access;
use models\Article;
use views\SpaceView;

class SpaceController extends Controller{


    public function indexStudentSpace($url_data){
        Access::hasAccess('indexStudentSpace');
        $args=[];
        $n_pages=Article::countByCategory("all");
        $args['page_count']=ceil($n_pages/8);
        if(!isset($url_data['page'])){
            $data=Article::getMany(0,8,"all");
            $args['page']=1;
        }
        else{
            $args['page']=$url_data['page'];
            $page=$url_data['page'];
            $from = ($page-1)*8;
            $data=Article::getMany($from,8,"all");
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