<?php

namespace views\components;

class AdminNewPresentationBody extends Component{

    public function __construct($args)
    {
        // Expects []
        $this->content=ob_start();
        $this->require_html("adminNewPresentationBody",$args);
        $this->content=ob_get_clean();
    }

}