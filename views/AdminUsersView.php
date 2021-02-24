<?php

namespace views;

use views\components\AdminUsersBody;
use views\components\AdminNewUserBody;
use views\components\Layout;

class AdminUsersView extends View{
    public function __construct()
    {
        ;
    }
    public function showTable($args)
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

    public function newUser()
    {
        //expects [title,navbar,footer,card,pagination,body,layout]  
        $args['title']="Nouveau Utilisateur";
        $args['page_url']='admin/user/new';
        $components=['SideNavbar','Footer'];
        $args=$this->load($components,$args);
        // HomeBody component defines how the other components are grouped in the home page
        // Every page must have it's body component
        $body=new AdminNewUserBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }
}