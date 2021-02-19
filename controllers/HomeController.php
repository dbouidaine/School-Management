<?php

namespace controllers;
use views\HomeView;
use models\Article;

class HomeController extends Controller{
    public function index($matches){
        $args=[];
        $n_pages=Article::count();
        $args['page_count']=ceil($n_pages/8);
        if(!isset($matches['page'])){
            $data=Article::getMany(0,8);
            $args['page']=1;
        }
        else{
            $args['page']=$matches['page'];
            $page=$matches['page'];
            $from = ($page-1)*8;
            $data=Article::getMany($from,8);
        }
        if(empty($data)){
            \app\Router::redirect('errors/404');
            exit();
        }
        $args['articles']=$data;
        $home=new HomeView($args);
        $home->view();
    }
}