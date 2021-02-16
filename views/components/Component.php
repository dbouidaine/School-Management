<?php

namespace views\components;

class Component{
    // Every HTML component (card, navbar, ...etc) will have its own class that
    // defines how the component will be used (it's parametres ...etc)
    // Putting every component in it's own class will make us respect Open Closed principal, 
    // In the future, if we want to add a new component, we musn't alter classes to add new things
    public function __construct()
    {
        //to be extended by children
    }

    public function require_html($filename,$args)
    {
        require_once(VIEWS_PATH."/componentsHTML/".$filename.".php");
    }

}