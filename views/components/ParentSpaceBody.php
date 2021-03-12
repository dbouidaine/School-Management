<?php

namespace views\components;

class ParentSpaceBody extends Component{

    public function __construct($args)
    {
        // Expects []
        $this->content=ob_start();
        $this->require_html("parentSpaceBody",$args);
        $this->content=ob_get_clean();
    }

}