<?php

namespace views;

use views\components\HomeArticleBody;
use views\components\Layout;

class ArticleView extends View{
    public function __construct($args)
    {
        $args['title']="Article";
        $components=['TopNavbar','Footer','Navbar','Article'];
        $args=$this->load($components,$args);
        $body=new HomeArticleBody($args);
        $args['Body']=$body->get();
        $layout = new Layout($args);
        $this->view = $layout->get();
    }
}