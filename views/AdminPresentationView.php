<?php

namespace views;

use views\components\AdminPresentationBody;
use views\components\AdminEditPresentationBody;
use views\components\AdminNewPresentationBody;
use views\components\Layout;

class AdminPresentationView extends View{
    public function __construct()
    {
        ;
    }
    public function showParagraphs($args)
    {
        //expects [title,navbar,footer,card,pagination,body,layout]  
        $args['title']="Presentation";
        $args['page_url']='admin/presentation/';
        $components=['SideNavbar','Footer'];
        $args=$this->load($components,$args);
        // HomeBody component defines how the other components are grouped in the home page
        // Every page must have it's body component
        $body=new AdminPresentationBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }

    public function newParagraph($args)
    {
        //expects [title,navbar,footer,card,pagination,body,layout]  
        $args['title']="Ajouter Paragraph";
        $components=['SideNavbar','Footer'];
        $args=$this->load($components,$args);
        // HomeBody component defines how the other components are grouped in the home page
        // Every page must have it's body component
        $body=new AdminNewPresentationBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }

    public function editParagraph($args)
    {
        //expects [title,navbar,footer,card,pagination,body,layout]  
        $args['title']="Modifier Paragraph";
        $components=['SideNavbar','Footer'];
        $args=$this->load($components,$args);
        // HomeBody component defines how the other components are grouped in the home page
        // Every page must have it's body component
        $body=new AdminEditPresentationBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }
}