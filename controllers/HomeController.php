<?php

namespace controllers;
use views\HomeView;
use models\Article;

class HomeController extends Controller{
    public function index($url_data){
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
        $home=new HomeView();
        $home->showHome($args);
        $home->view();
    }

    public function indexLogin($url_data){
        if(isset($_SESSION['user'])){
            header('Location: '.url(''));
        }
        $args=[];
        $loginPage=new HomeView();
        $loginPage->showLogin($args);
        $loginPage->view();
    }
}