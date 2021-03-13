<?php

namespace views\components;

class AdminEditRestaurationBody extends Component{

    public function __construct($args)
    {
        // Expects []
        $this->content=ob_start();
        $this->require_html("adminEditRestaurationBody",$args);
        $this->content=ob_get_clean();
    }

}