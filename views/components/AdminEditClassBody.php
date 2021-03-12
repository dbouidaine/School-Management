<?php

namespace views\components;

class AdminEditClassBody extends Component{

    public function __construct($args)
    {
        // Expects []
        $this->content=ob_start();
        $this->require_html("adminEditClassBody",$args);
        $this->content=ob_get_clean();
    }

}