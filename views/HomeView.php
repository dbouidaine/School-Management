<?php

namespace views;

use views\components\HomeBody;
use views\components\Layout;
use views\components\LoginBody;

class HomeView extends View{

    public function showHome($args)
    {
        //expects [title,navbar,footer,card,pagination,body,layout]  
        $args['title']="new title";
        $components=['TopNavbar','Carousel','Footer','Navbar','Articles','Pagination'];
        $args['page_url']='home/';
        $args=$this->load($components,$args);
        // HomeBody component defines how the other components are grouped in the home page
        // Every page must have it's body component
        $body=new HomeBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }

    public function showLogin($args)
    {
        //expects [title,navbar,footer,card,pagination,body,layout]  
        $args['title']="new title";
        $components=['TopNavbar','Footer','Navbar'];
        $args['page_url']='login';
        $args=$this->load($components,$args);
        // HomeBody component defines how the other components are grouped in the home page
        // Every page must have it's body component
        $body=new LoginBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }
}