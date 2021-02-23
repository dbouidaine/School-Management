<?php

namespace views;

use views\components\AdminArticlesBody;
use views\components\Layout;

class AdminArticlesView extends View{
    public function __construct($args)
    {
        //expects [title,navbar,footer,card,pagination,body,layout]  
        $args['title']="Gestion des articles";
        $args['page_url']='admin/articles/';
        $components=['SideNavbar','Footer','Pagination'];
        $args=$this->load($components,$args);
        // HomeBody component defines how the other components are grouped in the home page
        // Every page must have it's body component
        $body=new AdminArticlesBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }
}