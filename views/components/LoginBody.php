<?php

namespace views\components;


class LoginBody extends Component{

    public function __construct($args)
    {
        // Expects []
        $this->content=ob_start();
        $this->require_html("loginBody",$args);
        $this->content=ob_get_clean();
    }

}