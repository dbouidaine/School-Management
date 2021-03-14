<?php

namespace views;

use views\components\AdminUsersBody;
use views\components\AdminEditUserBody;
use views\components\Layout;

class AdminUsersView extends View{
    public function __construct()
    {
        ;
    }
    public function showTable($args)
    {
        $args['title']="Gestion des utilisateurs";
        $args['page_url']='admin/users/';
        $components=['SideNavbar','Footer','Pagination'];
        $args=$this->load($components,$args);
        $body=new AdminUsersBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }

    public function editUser($args)
    {
        $args['title']="Modifier Utilisateur";
        $components=['SideNavbar','Footer'];
        $args=$this->load($components,$args);
        $body=new AdminEditUserBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }
}