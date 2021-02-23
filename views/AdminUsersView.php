<?php

namespace views;

use views\components\AdminUsersBody;
use views\components\Layout;

class AdminUsersView extends View{
    public function __construct($args)
    {
        //expects [title,navbar,footer,card,pagination,body,layout]  
        $args['title']="Gestion des utilisateurs";
        $args['page_url']='admin/users/';
        $components=['SideNavbar','Footer','Pagination'];
        $args=$this->load($components,$args);
        // HomeBody component defines how the other components are grouped in the home page
        // Every page must have it's body component
        $body=new AdminUsersBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }
}