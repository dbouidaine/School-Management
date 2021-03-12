<?php

namespace views\components;

class AdminModulesBody extends Component{

    public function __construct($args)
    {
        // Expects []
        $this->content=ob_start();
        $this->require_html("adminModulesBody",$args);
        $this->content=ob_get_clean();
    }

}