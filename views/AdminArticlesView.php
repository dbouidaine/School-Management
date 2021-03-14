<?php

namespace views;
use views\components\AdminNewArticleBody;
use views\components\AdminEditArticleBody;
use views\components\AdminArticlesBody;
use views\components\Layout;

class AdminArticlesView extends View{
    public function __construct()
    {
        ;
    }
    public function showTable($args)
    { 
        $args['title']="Gestion des articles";
        $args['page_url']='admin/articles/';
        $components=['SideNavbar','Footer','Pagination'];
        $args=$this->load($components,$args);
        $body=new AdminArticlesBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }

    public function newArticle()
    {
        $args['title']="Gestion des articles";
        $args['page_url']='article/new/';
        $components=['SideNavbar','Footer','Pagination'];
        $args=$this->load($components,$args);
        $body=new AdminNewArticleBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }

    public function editArticle($args)
    {
        $args['title']="Gestion des articles";
        $args['page_url']='article/edit/';
        $components=['SideNavbar','Footer','Pagination'];
        $args=$this->load($components,$args);
        $body=new AdminEditArticleBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }
}