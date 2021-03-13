<?php

namespace views;

use views\components\Layout;
use views\components\RestaurationBody;

class RestaurationView extends View{
    public function index($args)
    {
        //expects [title,topnavbar,navbar,footer,presentationBody,layout]  
        $args['title']="Restauration";
        $components=['TopNavbar','Navbar','Footer'];
        $args=$this->load($components,$args);
        // PresentationBody component defines how the other components are grouped in the home page
        // Every page must have it's body component
        $body=new RestaurationBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }
}