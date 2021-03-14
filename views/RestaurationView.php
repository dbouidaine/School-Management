<?php

namespace views;

use views\components\Layout;
use views\components\RestaurationBody;

class RestaurationView extends View{
    public function index($args)
    {
        $args['title']="Restauration";
        $components=['TopNavbar','Navbar','Footer'];
        $args=$this->load($components,$args);
        $body=new RestaurationBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }
}