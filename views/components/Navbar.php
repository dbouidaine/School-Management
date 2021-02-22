<?php

namespace views\components;


class Navbar extends Component{

    public function __construct($args)
    {
        // Expects []
        $this->content=ob_start();
        $this->require_html("navbar",$args);
        $this->content=ob_get_clean();
    }

}