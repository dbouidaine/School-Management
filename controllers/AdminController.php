<?php

namespace controllers;

use views\AdminView;
use views\AdminArticlesView;
use views\AdminPresentationView;
use views\AdminUsersView;
use models\Article;
use models\User;
use models\Role;

class AdminController extends Controller{


    public function index($url_data){
        $admin=new AdminView($url_data);
        $admin->view();
    }

    public function indexArticles($url_data){
        $args=[];
        $n_pages=Article::count();
        $args['page_count']=ceil($n_pages/15);
        if(!isset($url_data['page'])){
            $data=Article::getMany(0,15);
            $args['page']=1;
        }
        else{
            $args['page']=$url_data['page'];
            $page=$url_data['page'];
            $from = ($page-1)*15;
            $data=Article::getMany($from,15);
        }
        if(empty($data)){
            \app\Router::redirect('errors/404');
            exit();
        }
        $args['articles']=$data;
        $home=new AdminArticlesView();
        $home->showTable($args);
        $home->view();
    }

    public function indexPresentation(){
        $presentation=new AdminPresentationView();
        $presentation->showParagraphs();
        $presentation->view();
    }

    public function indexUsers($url_data){
        $args=[];
        $n_pages=User::count();
        $args['page_count']=ceil($n_pages/15);
        if(!isset($url_data['page'])){
            $data=User::getMany(0,15);
            $args['page']=1;
        }
        else{
            $args['page']=$url_data['page'];
            $page=$url_data['page'];
            $from = ($page-1)*15;
            $data=User::getMany($from,15);
        }
        $roles=Role::getAll();
        if(empty($data) || empty($roles)){
            \app\Router::redirect('errors/404');
            exit();
        }
        $args['users']=$data;
        $args['roles']=$roles;
        $home=new AdminUsersView();
        $home->showTable($args);
        $home->view();
    }

    public function editUser($url_data){
        $args['roles']=Role::getAll();
        $args['user']=User::get($url_data['user_id']);
        $args['user']['password']=NULL;
        $view=new AdminUsersView();
        $view->editUser($args);
        $view->view();
    }

    public function newArticle($url_data){
        $view=new AdminArticlesView();
        $view->newArticle();
        $view->view();
    }
}