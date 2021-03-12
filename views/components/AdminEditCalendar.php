<?php

namespace views\components;

class AdminEditCalendarBody extends Component{

    public function __construct($args)
    {
        // Expects []
        $this->content=ob_start();
        $this->require_html("adminEditCalendarBody",$args);
        $this->content=ob_get_clean();
    }

}