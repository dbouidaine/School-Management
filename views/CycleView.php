<?php

namespace views;

use views\components\CycleBody;
use views\components\Layout;

class CycleView extends View{
    public function __construct($args)
    {
        //expects [title,navbar,footer,card,pagination,body,layout]  
        $args['title']="new title";
        $components=['TopNavbar','Carousel','Footer','Navbar','Card','Pagination'];
        $args=$this->load($components,$args);
        // HomeBody component defines how the other components are grouped in the home page
        // Every page must have it's body component
        $body=new CycleBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }
}