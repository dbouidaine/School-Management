<?php

namespace views\components;


class SideNavbar extends Component{

    public function __construct($args)
    {
        // Require [asdasdasd]
        $this->content=ob_start();
        $this->require_html("sideNavbar",$args);
        $this->content=ob_get_clean();
    }

}