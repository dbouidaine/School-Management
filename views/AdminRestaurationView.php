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
        $args['title']="Restauration";
        $components=['SideNavbar','Footer',];
        $args=$this->load($components,$args);
        $body=new AdminRestaurationBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }

    public function editRestauration($args)
    {
        $args['title']="Modifier Restauration";
        $components=['SideNavbar','Footer'];
        $args=$this->load($components,$args);
        $body=new AdminEditRestaurationBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }
}