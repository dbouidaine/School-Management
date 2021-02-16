<?php

namespace views;
use views\components\Layout;

class LayoutView{
    private $content;
    public function __construct()
    {
        //expects [title>body>layout]
        $args=[];
        $args['title']="new title";
        $layout = new Layout($args);
        $this->content = $layout->get();
        print_r($layout);
    }

    public function view(){
        print_r($this->content);
    }

    public function get(){
        return $this->content;
    }
}