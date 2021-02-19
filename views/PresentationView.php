<?php

namespace views;

use views\components\PresentationBody;
use views\components\Layout;

class PresentationView extends View{
    public function __construct()
    {
        //expects [title,navbar,footer,body,layout]  
        $args=[];
        $args['title']="Presentation";
        $components=['TopNavbar','Navbar','Footer'];
        $args=$this->load($components,$args);
        // HomeBody component defines how the other components are grouped in the home page
        // Every page must have it's body component
        $body=new PresentationBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }
}