<?php

namespace views;

use views\components\ContactBody;
use views\components\Layout;

class ContactView extends View{
    public function index($args)
    {
        //expects [title,topnavbar,navbar,footer,presentationBody,layout]  
        $args['title']="Contact";
        $components=['TopNavbar','Navbar','Footer'];
        $args=$this->load($components,$args);
        // PresentationBody component defines how the other components are grouped in the home page
        // Every page must have it's body component
        $body=new ContactBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }
}