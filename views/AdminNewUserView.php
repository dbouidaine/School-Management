<?php

namespace views;

use views\components\AdminNewUserBody;
use views\components\Layout;

class AdminNewUserView extends View{
    public function __construct()
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