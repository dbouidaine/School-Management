<?php

namespace views;

use views\components\AdminBody;
use views\components\Layout;

class AdminView extends View{
    public function __construct($args)
    {
        //expects [title,navbar,footer,card,pagination,body,layout]  
        $args['title']="Dashboard";
        $components=['SideNavbar','Footer'];
        $args=$this->load($components,$args);
        // HomeBody component defines how the other components are grouped in the home page
        // Every page must have it's body component
        $body=new AdminBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }
}