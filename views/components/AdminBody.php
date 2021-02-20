<?php

namespace views\components;


class AdminBody extends Component{

    public function __construct($args)
    {
        // Require [asdasdasd]
        $this->content=ob_start();
        $this->require_html("adminBody",$args);
        $this->content=ob_get_clean();
    }

}