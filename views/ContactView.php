<?php

namespace views;

use views\components\ContactBody;
use views\components\Layout;

class ContactView extends View{
    public function index($args)
    {
        $args['title']="Contact";
        $components=['TopNavbar','Navbar','Footer'];
        $args=$this->load($components,$args);
        $body=new ContactBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }
}