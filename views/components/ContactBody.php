<?php

namespace views\components;


class ContactBody extends Component{

    public function __construct($args)
    {
        // Expects []
        $this->content=ob_start();
        $this->require_html("ContactBody",$args);
        $this->content=ob_get_clean();
    }

}