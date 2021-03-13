<?php

namespace views;
use views\components\AdminEditRestaurationBody;
use views\components\AdminRestaurationBody;
use views\components\Layout;

class AdminRestaurationView extends View{
    public function __construct()
    {
        ;
    }
    public function index($args)
    {
        //expects [title,navbar,footer,card,pagination,body,layout]  
        $args['title']="Restauration";
        $components=['SideNavbar','Footer',];
        $args=$this->load($components,$args);
        // HomeBody component defines how the other components are grouped in the home page
        // Every page must have it's body component
        $body=new AdminRestaurationBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }

    public function editRestauration($args)
    {
        //expects [title,navbar,footer,card,pagination,body,layout]  
        $args['title']="Modifier Restauration";
        $components=['SideNavbar','Footer'];
        $args=$this->load($components,$args);
        // HomeBody component defines how the other components are grouped in the home page
        // Every page must have it's body component
        $body=new AdminEditRestaurationBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }
}