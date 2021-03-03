<?php

namespace controllers;

use app\Router;
use models\Article;
use models\Access;
use views\ArticleView;

class ArticleController extends Controller{
    public function show($url_data){
        if (Access::hasAccess('admin','addUser')){
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
        else{
            Router::redirect('errors/403');
        }
    }

    public function delete($url_data){
        Access::hasAccess($_SESSION['user']['role'],'deleteArticle');
        $id=$url_data['article_id'];
        Article::destroy($id);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function add(){
        Access::hasAccess($_SESSION['user']['role'],'addArticle');
        Article::new($_POST['title'],$_POST['image'],$_POST['description'],$_POST['author']);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}