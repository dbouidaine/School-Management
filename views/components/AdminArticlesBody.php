<?php

namespace views\components;

class AdminArticlesBody extends Component{

    public function __construct($args)
    {
        // Expects []
        $this->content=ob_start();
        $this->require_html("adminArticlesBody",$args);
        $this->content=ob_get_clean();
    }

}