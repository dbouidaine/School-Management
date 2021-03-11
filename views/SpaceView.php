<?php

namespace views;

use views\components\Layout;
use views\components\StudentSpaceBody;

class SpaceView extends View{
    public function studentSpace($args)
    {
        //expects [title,navbar,footer,card,pagination,body,layout]  
        $args['title']="Espace Elève";
        $components=['TopNavbar','Articles','Footer','Navbar','Card','Pagination'];
        $args['page_url']='space/student/';
        $args=$this->load($components,$args);
        // HomeBody component defines how the other components are grouped in the home page
        // Every page must have it's body component
        $body=new StudentSpaceBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }

    public function parentSpace($args)
    {
        //expects [title,navbar,footer,card,pagination,body,layout]  
        $args['title']="Espace Parent";
        $components=['TopNavbar','Footer','Navbar','Card','Pagination'];
        $args=$this->load($components,$args);
        // HomeBody component defines how the other components are grouped in the home page
        // Every page must have it's body component
        $body=new CycleBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }
}