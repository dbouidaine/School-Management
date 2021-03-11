<?php

namespace views\components;

class StudentSpaceBody extends Component{

    public function __construct($args)
    {
        // Expects []
        $this->content=ob_start();
        $this->require_html("studentSpaceBody",$args);
        $this->content=ob_get_clean();
    }

}