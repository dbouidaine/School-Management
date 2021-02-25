<?php

namespace views\components;

class AdminEditUserBody extends Component{

    public function __construct($args)
    {
        // Expects []
        $this->content=ob_start();
        $this->require_html("adminEditUserBody",$args);
        $this->content=ob_get_clean();
    }

}