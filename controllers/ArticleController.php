<?php

namespace controllers;

use models\Article;
use models\Access;
use views\ArticleView;

class ArticleController extends Controller{
    public function show($url_data){
        $args=[];
        $data=Article::get($url_data['id_article']);
        if(empty($data)){
            \app\Router::redirect('errors/404');
            exit();
        }
        $args['article']=$data;
        $article=new ArticleView($args);
        $article->view();        
    }

    public function delete($url_data){
        Access::hasAccess('deleteArticle');
        $id=$url_data['article_id'];
        Article::destroy($id);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function add(){
        Access::hasAccess('addArticle');   
        uploadImage('image');
        Article::new($_POST['title'],$_FILES['image']['name'],$_POST['description'],$_SESSION['user']['id']);
        $last_id=Article::getLast();
        $tab=['all','teacher','parent','primaire','secondaire','moyen'];
        foreach($tab as $element){
            if(isset($_POST[$element])){
                Article::newConcernCategory($last_id,$element);
            }
        }
        header('Location: ' . url('admin/articles'));
    }

    public function update(){
        Access::hasAccess('updateArticle');   
        if(!empty($_FILES['image']['name'])){
            uploadImage('image');
        } 
        Article::update($_POST,$_FILES);
        header('Location: ' . url('admin/articles'));
    }
}