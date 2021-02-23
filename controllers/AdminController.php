<?php

namespace controllers;
use views\AdminView;
use views\AdminArticlesView;
use models\Article;

class AdminController extends Controller{


    public function index($url_data){
        $admin=new AdminView($url_data);
        $admin->view();
    }
    public function articles($url_data){
        $args=[];
        $n_pages=Article::count();
        $args['page_count']=ceil($n_pages/8);
        if(!isset($url_data['page'])){
            $data=Article::getMany(0,8);
            $args['page']=1;
        }
        else{
            $args['page']=$url_data['page'];
            $page=$url_data['page'];
            $from = ($page-1)*8;
            $data=Article::getMany($from,8);
        }
        if(empty($data)){
            \app\Router::redirect('errors/404');
            exit();
        }
        $args['articles']=$data;
        $home=new AdminArticlesView($args);
        $home->view();
    }
}