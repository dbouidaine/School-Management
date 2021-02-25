<?php

namespace views;

use views\components\AdminPresentationBody;
use views\components\AdminEditUserBody;
use views\components\Layout;

class AdminPresentationView extends View{
    public function __construct()
    {
        ;
    }
    public function showParagraphs()
    {
        //expects [title,navbar,footer,card,pagination,body,layout]  
        $args['title']="Gestion des utilisateurs";
        $args['page_url']='admin/presentation/';
        $components=['SideNavbar','Footer'];
        $args=$this->load($components,$args);
        // HomeBody component defines how the other components are grouped in the home page
        // Every page must have it's body component
        $body=new AdminPresentationBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }

    public function editParagraph($args)
    {
        //expects [title,navbar,footer,card,pagination,body,layout]  
        $args['title']="Nouveau Utilisateur";
        $args['page_url']='admin/user/new';
        $components=['SideNavbar','Footer'];
        $args=$this->load($components,$args);
        // HomeBody component defines how the other components are grouped in the home page
        // Every page must have it's body component
        $body=new AdminEditUserBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }
}