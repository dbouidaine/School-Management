<?php

namespace views\components;

class AdminEditContactBody extends Component{

    public function __construct($args)
    {
        // Expects []
        $this->content=ob_start();
        $this->require_html("adminEditContactBody",$args);
        $this->content=ob_get_clean();
    }

}