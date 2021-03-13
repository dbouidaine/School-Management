<?php

namespace views\components;

class AdminContactsBody extends Component{

    public function __construct($args)
    {
        // Expects []
        $this->content=ob_start();
        $this->require_html("adminContactsBody",$args);
        $this->content=ob_get_clean();
    }

}