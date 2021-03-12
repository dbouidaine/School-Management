<?php

namespace views\components;

class AdminCalendarBody extends Component{

    public function __construct($args)
    {
        // Expects []
        $this->content=ob_start();
        $this->require_html("adminCalendarBody",$args);
        $this->content=ob_get_clean();
    }

}