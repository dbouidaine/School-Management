<?php

namespace views;

use views\components\Layout;
use views\components\StudentSpaceBody;
use views\components\ParentSpaceBody;

class SpaceView extends View{
    public function studentSpace($args)
    {
        $args['title']="Espace Elève";
        $components=['TopNavbar','Articles','Footer','Navbar','Card','Pagination'];
        $args['page_url']='space/student/';
        $args=$this->load($components,$args);
        $body=new StudentSpaceBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }

    public function parentSpace($args)
    {
        $args['title']="Espace Parent";
        $components=['TopNavbar','Articles','Footer','Navbar','Card','Pagination'];
        $args['page_url']='space/parent/';
        $args=$this->load($components,$args);
        $body=new ParentSpaceBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }
}