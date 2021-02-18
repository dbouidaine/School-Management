<?php

namespace views;

use views\components\HomeBody;
use views\components\Layout;
use views\components\Navbar;

class HomeView extends View{
    public function __construct()
    {
        //expects [title,navbar,body,layout]
        $args=[];
        $args['title']="new title";
        $navbar = new Navbar($args);
        $args['navbar']= $navbar->get();
        $body = new HomeBody($args);
        $args['body']= $body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }
}