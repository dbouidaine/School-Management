<?php

namespace views\components;

class Component{
    // Every HTML component (card, navbar, ...etc) will have its own class that
    // defines how the component will be used (it's parametres ...etc)
    /// Putting every component in it's own class will make us respect Open Closed principal, 
    // In the future, if we want to add a new component, we musn't alter classes to add new things
    /// Also, we won't mix html code with php classes so html content is seperated in files and called inside classes
    // The reason for this is to make the code more cleaner and to simplify writing html code
    /// All data needed for components will be in the table "$args"
    /// In every component we will explaing what data does this component expects
    protected $content;

    public function __construct()
    {
        //to be extended by children
    }
    
    public function get(){
        return $this->content;
    }

    public function require_html($filename,$args)
    {
        require_once(VIEWS_PATH."/componentsHTML/".$filename.".php");
    }

}