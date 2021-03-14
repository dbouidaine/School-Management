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
use models\Calendar;
use models\Category;
use models\ClassM;
use models\Contact;
use models\Module;
use models\Restauration;
use models\Year;
use views\AdminClassesView;
use views\AdminContactsView;
use views\AdminRestaurationView;

class AdminController extends Controller{


    public function index($url_data){
        Access::hasAccess('indexAdmin');
        $admin=new AdminView($url_data);
        $admin->view();
    }

    public function indexArticles($url_data){
        Access::hasAccess('indexArticles');
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
        Access::hasAccess('indexPresentation');
        $args=[];
        $args['presentation']=Presentation::getAll();
        $presentation=new AdminPresentationView();
        $presentation->showParagraphs($args);
        $presentation->view();
    }

    public function newPresentation(){
        Access::hasAccess('newPresentation');
        $args=[];
        $args['presentation']=Presentation::getAll();
        $presentation=new AdminPresentationView();
        $presentation->newParagraph($args);
        $presentation->view();
    }

    public function editPresentation($url_data){
        Access::hasAccess('editPresentation');
        $args=[];
        $args['presentation']=Presentation::get($url_data['presentation_id']);
        $presentation=new AdminPresentationView();
        $presentation->editParagraph($args);
        $presentation->view();
    }

    public function indexUsers($url_data){
        Access::hasAccess('indexUsers');
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
        Access::hasAccess('editUser');
        $args['roles']=Role::getAll();
        $args['classes']=ClassM::getAll();
        $args['categories']=Category::getAll();
        $args['user']=User::get($url_data['user_id']);
        unset($args['user']['password']);
        $view=new AdminUsersView();
        $view->editUser($args);
        $view->view();
    }

    public function newArticle($url_data){
        Access::hasAccess('addArticle');
        $view=new AdminArticlesView();
        $view->newArticle();
        $view->view();
    }

    public function editArticle($url_data){
        Access::hasAccess('editArticle');
        $args['article']=Article::get($url_data['article_id']);
        $view=new AdminArticlesView();
        $view->editArticle($args);
        $view->view();
    }

    public function indexClasses($url_data){
        Access::hasAccess('indexClasses');
        $args=[];
        $args['calendars']=Calendar::getAll();
        $args['years']=Year::getAll();
        $data=ClassM::getAllWithCycle();
        $args['classes']=$data;
        $home=new AdminClassesView();
        $home->showTable($args);
        $home->view();
    }

    public function editClass($url_data){
        Access::hasAccess('editClass');
        $args=[];
        $args['calendars']=Calendar::getAll();
        $args['years']=Year::getAll();
        $data=ClassM::get($url_data['class_id']);
        $args['class']=$data;
        $home=new AdminClassesView();
        $home->editClass($args);
        $home->view();
    }

    public function showCalendar($url_data){
        Access::hasAccess('showCalendar');
        $args=[];
        $calenadr_id=ClassM::getCalendarId($url_data['class_name'])['calendar'];
        $args['calendar']['events']=Calendar::get($calenadr_id);
        $args['calendar']['calendar_id']=$calenadr_id;
        $args['calendar']['hours']=Calendar::countHours($calenadr_id);
        $args['modules']=ClassM::getModules($url_data['class_name']);
        $args['class_name']=$url_data['class_name'];
        $home=new AdminClassesView();
        $home->showCalendar($args);
        $home->view();
    }

    public function editCalendar($url_data){
        Access::hasAccess('editCalendar');
        $args=[];
        $args['calendars']=Calendar::getAll();
        $args['years']=Year::getAll();
        $data=ClassM::get($url_data['class_id']);
        $args['class']=$data;
        $home=new AdminClassesView();
        $home->editClass($args);
        $home->view();
    }

    public function indexModules($url_data){
        Access::hasAccess('indexModules');
        $args=[];
        $args['modules']=Module::getAllByClass($url_data['class_name']);
        $args['class_name']=$url_data['class_name'];
        $args['year']=ClassM::getByName($url_data['class_name'])['year'];
        $home=new AdminClassesView();
        $home->showModules($args);
        $home->view();
    }

    public function indexRestauration($url_data){
        Access::hasAccess('indexRestauration');
        $args=[];
        $args['meals']=Restauration::getAll();
        $home=new AdminRestaurationView();
        $home->index($args);
        $home->view();
    }

    public function editRestauration($url_data){
        Access::hasAccess('editRestauration');
        $args=[];
        $args['meal']=Restauration::get($url_data['restauration_id']);
        $home=new AdminRestaurationView();
        $home->editRestauration($args);
        $home->view();
    }

    public function indexContacts($url_data){
        Access::hasAccess('indexContacts');
        $args=[];
        $args['contacts']=Contact::getAll();
        $home=new AdminContactsView();
        $home->index($args);
        $home->view();
    }

    public function editContact($url_data){
        Access::hasAccess('editContact');
        $args=[];
        $args['contact']=Contact::get($url_data['contact_id']);
        $home=new AdminContactsView();
        $home->editContact($args);
        $home->view();
    }
}