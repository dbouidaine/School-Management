<?php

namespace views\components;


class RestaurationBody extends Component{

    public function __construct($args)
    {
        // Expects []
        $this->content=ob_start();
        $this->require_html("restaurationBody",$args);
        $this->content=ob_get_clean();
    }

}