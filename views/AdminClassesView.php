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
        //expects [title,navbar,footer,card,pagination,body,layout]  
        $args['title']="Gestion des classes";
        $args['page_url']='admin/classes/';
        $components=['SideNavbar','Footer'];
        $args=$this->load($components,$args);
        // HomeBody component defines how the other components are grouped in the home page
        // Every page must have it's body component
        $body=new AdminClassesBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }

    public function editClass($args)
    {
        //expects [title,navbar,footer,card,pagination,body,layout]  
        $args['title']="Modifier Classe";
        $components=['SideNavbar','Footer'];
        $args=$this->load($components,$args);
        // HomeBody component defines how the other components are grouped in the home page
        // Every page must have it's body component
        $body=new AdminEditClassBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }

    public function showCalendar($args)
    {
        //expects [title,navbar,footer,card,pagination,body,layout]  
        $args['title']="Afficher Calendrier";
        $components=['SideNavbar','Footer'];
        $args=$this->load($components,$args);
        // HomeBody component defines how the other components are grouped in the home page
        // Every page must have it's body component
        $body=new AdminCalendarBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }

    public function editCalendar($args)
    {
        //expects [title,navbar,footer,card,pagination,body,layout]  
        $args['title']="Afficher Calendrier";
        $components=['SideNavbar','Footer'];
        $args=$this->load($components,$args);
        // HomeBody component defines how the other components are grouped in the home page
        // Every page must have it's body component
        $body=new AdminEditCalendarBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }

    public function showModules($args)
    {
        //expects [title,navbar,footer,card,pagination,body,layout]  
        $args['title']="Modules";
        $components=['SideNavbar','Footer'];
        $args=$this->load($components,$args);
        // HomeBody component defines how the other components are grouped in the home page
        // Every page must have it's body component
        $body=new AdminModulesBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }
}