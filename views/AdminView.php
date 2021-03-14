<?php

namespace views;

use views\components\AdminBody;
use views\components\Layout;

class AdminView extends View{
    public function __construct($args)
    {
        $args['title']="Dashboard";
        $components=['SideNavbar','Footer'];
        $args=$this->load($components,$args);
        $body=new AdminBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }
}