<?php

namespace controllers;

use models\Article;
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
        $cycle=new CycleView($args);
        $cycle->view();
    }
}