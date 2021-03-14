<?php

namespace views;

use views\components\PresentationBody;
use views\components\Layout;

class PresentationView extends View{
    public function index($args)
    {
        $args['title']="Presentation";
        $components=['TopNavbar','Navbar','Footer'];
        $args=$this->load($components,$args);
        $body=new PresentationBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }
}