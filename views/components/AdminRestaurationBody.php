<?php

namespace views\components;

class AdminRestaurationBody extends Component{

    public function __construct($args)
    {
        // Expects []
        $this->content=ob_start();
        $this->require_html("adminRestaurationBody",$args);
        $this->content=ob_get_clean();
    }

}