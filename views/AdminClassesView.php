<?php

namespace views;

use views\components\AdminCalendarBody;
use views\components\AdminEditCalendarBody;
use views\components\AdminClassesBody;
use views\components\AdminEditClassBody;
use views\components\AdminModulesBody;
use views\components\Layout;

class AdminClassesView extends View{
    public function __construct()
    {
        ;
    }
    public function showTable($args)
    {
        $args['title']="Gestion des classes";
        $args['page_url']='admin/classes/';
        $components=['SideNavbar','Footer'];
        $args=$this->load($components,$args);
        $body=new AdminClassesBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }

    public function editClass($args)
    {
        $args['title']="Modifier Classe";
        $components=['SideNavbar','Footer'];
        $args=$this->load($components,$args);
        $body=new AdminEditClassBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }

    public function showCalendar($args)
    {
        $args['title']="Afficher Calendrier";
        $components=['SideNavbar','Footer'];
        $args=$this->load($components,$args);
        $body=new AdminCalendarBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }

    public function editCalendar($args)
    {
        $args['title']="Afficher Calendrier";
        $components=['SideNavbar','Footer'];
        $args=$this->load($components,$args);
        $body=new AdminEditCalendarBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }

    public function showModules($args)
    {
        $args['title']="Modules";
        $components=['SideNavbar','Footer'];
        $args=$this->load($components,$args);
        $body=new AdminModulesBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }
}