<?php

namespace controllers;
use models\Article;
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
        $id=$url_data['article_id'];
        Article::delete($id);
        header('location:/home/2');
    }

    public function add(){
        Article::new($_POST['title'],$_POST['image'],$_POST['description'],$_POST['author']);
        header('location:/articles');
    }
}