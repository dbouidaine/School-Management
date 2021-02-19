<?php

namespace controllers;
use models\Article;

class ArticleController extends Controller{
    public function show($matches){
        $args=[];
        $data=Article::get($matches['id_article']);
        if(empty($data)){
            \app\Router::redirect('errors/404');
            exit();
        }
        $args['articles']=$data;
        print_r($args['articles']);
    }
}