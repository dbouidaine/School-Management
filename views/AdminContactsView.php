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
        $args['title']="Contacts";
        $components=['SideNavbar','Footer',];
        $args=$this->load($components,$args);
        $body=new AdminContactsBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }

    public function editContact($args)
    {
        $args['title']="Modifier Restauration";
        $components=['SideNavbar','Footer'];
        $args=$this->load($components,$args);
        $body=new AdminEditContactBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }
}