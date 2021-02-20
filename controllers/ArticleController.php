<?php

namespace controllers;
use models\Article;
use views\ArticleView;

class ArticleController extends Controller{
    public function show($matches){
        $args=[];
        $data=Article::get($matches['id_article']);
        if(empty($data)){
            \app\Router::redirect('errors/404');
            exit();
        }
        $args['article']=$data;
        $article=new ArticleView($args);
        $article->view();
    }
}