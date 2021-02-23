<?php

namespace views\components;

class AdminNewUserBody extends Component{

    public function __construct($args)
    {
        // Expects []
        $this->content=ob_start();
        $this->require_html("adminNewUserBody",$args);
        $this->content=ob_get_clean();
    }

}