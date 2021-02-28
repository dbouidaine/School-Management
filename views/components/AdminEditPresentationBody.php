<?php

namespace views\components;

class AdminEditPresentationBody extends Component{

    public function __construct($args)
    {
        // Expects []
        $this->content=ob_start();
        $this->require_html("adminEditPresentationBody",$args);
        $this->content=ob_get_clean();
    }

}