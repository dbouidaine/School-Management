<?php

namespace views;

use views\components\CycleBody;
use views\components\CycleCalendarsBody;
use views\components\InfoPractBody;
use views\components\Layout;

class CycleView extends View{
    public function index($args)
    {
        //expects [title,navbar,footer,card,pagination,body,layout]  
        $args['title']="Cycle";
        $components=['TopNavbar','Footer','Navbar','Articles','Pagination'];
        $args['page_url']='ecole/cycle/';
        $args=$this->load($components,$args);
        $body=new CycleBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }

    public function calendars($args){
        $args['title']="Cycle Calendars";
        $components=['TopNavbar','Footer','Navbar'];
        $args=$this->load($components,$args);
        $body=new CycleCalendarsBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }

    public function infoPract($args){
        $args['title']="Infos Pratiques";
        $components=['TopNavbar','Footer','Navbar'];
        $args=$this->load($components,$args);
        $body=new InfoPractBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }
}