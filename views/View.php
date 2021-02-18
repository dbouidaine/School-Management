<?php

namespace views;

class View{
    // If I want to create a new page, the process is like this:
    // If any component needed for this page isn't created, I create this component, I create it's class, and it's html code
    // I create the class for whole view, which will extend the super class 'View', then in the page's class,
    // I contstruct the page with calling different components and specifying data to show

    protected $view="new message";

    public function __construct()
    {
        ;
    }

    public function view(){
        print_r($this->view);
    }

    public function get(){
        return $this->view;
    }

    public function load($components,$args)
    {
        foreach($components as $component){
            $namespace="views\components\\";
            $classname=$namespace.$component;
            $item=new $classname($args);
            $args[$component]=$item->get();
        }
        return $args;
    }
    

}