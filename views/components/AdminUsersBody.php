<?php

namespace views\components;

class AdminUsersBody extends Component{

    public function __construct($args)
    {
        // Expects []
        $this->content=ob_start();
        $this->require_html("adminUsersBody",$args);
        $this->content=ob_get_clean();
    }

}