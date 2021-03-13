<?php

namespace views;

use views\components\AdminContactsBody;
use views\components\AdminEditContactBody;
use views\components\Layout;

class AdminContactsView extends View{
    public function __construct()
    {
        ;
    }
    public function index($args)
    {
        //expects [title,navbar,footer,card,pagination,body,layout]  
        $args['title']="Contacts";
        $components=['SideNavbar','Footer',];
        $args=$this->load($components,$args);
        // HomeBody component defines how the other components are grouped in the home page
        // Every page must have it's body component
        $body=new AdminContactsBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }

    public function editContact($args)
    {
        //expects [title,navbar,footer,card,pagination,body,layout]  
        $args['title']="Modifier Restauration";
        $components=['SideNavbar','Footer'];
        $args=$this->load($components,$args);
        // HomeBody component defines how the other components are grouped in the home page
        // Every page must have it's body component
        $body=new AdminEditContactBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }
}