<?php

namespace controllers;

use views\AdminView;
use views\AdminArticlesView;
use views\AdminPresentationView;
use views\AdminUsersView;
use models\Article;
use models\Presentation;
use models\User;
use models\Role;
use models\Access;

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
        $args=[];
        $args['presentation']=Presentation::getAll();
        $presentation=new AdminPresentationView();
        $presentation->showParagraphs($args);
        $presentation->view();
    }

    public function newPresentation(){
        Access::hasAccess($_SESSION['user']['role'],'newPresentation');
        $args=[];
        $args['presentation']=Presentation::getAll();
        $presentation=new AdminPresentationView();
        $presentation->newParagraph($args);
        $presentation->view();
    }

    public function editPresentation($url_data){
        Access::hasAccess($_SESSION['user']['role'],'editPresentation');
        $args=[];
        $args['presentation']=Presentation::get($url_data['presentation_id']);
        $presentation=new AdminPresentationView();
        $presentation->editParagraph($args);
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
        Access::hasAccess($_SESSION['user']['role'],'editUser');
        Access::hasAccess($_SESSION['user']['role'],'editUser');
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

    public function editArticle($url_data){
        $args['article']=Article::get($url_data['article_id']);
        $view=new AdminArticlesView();
        $view->editArticle($args);
        $view->view();
    }
}