<?php

namespace views\components;


class TopNavbar extends Component{

    public function __construct($args)
    {
        // Expects []
        $this->content=ob_start();
        $this->require_html("topNavbar",$args);
        $this->content=ob_get_clean();
    }

}