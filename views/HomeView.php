<?php

namespace views;

use views\components\HomeBody;
use views\components\Layout;
use views\components\Navbar;
use views\components\Carousel;

class HomeView extends View{
    public function __construct()
    {
        $args=[];
        $args['title']="new title";
        $components=['TopNavbar','Carousel','Footer','Navbar','Card','Pagination','HomeBody'];
        $args=$this->load($components,$args);
        //expects [title,navbar,body,layout]   
        $layout = new Layout($args);
        $this->view = $layout->get();
    }
}