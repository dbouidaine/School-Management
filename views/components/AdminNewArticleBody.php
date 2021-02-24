<?php

namespace views\components;

class AdminNewArticleBody extends Component{

    public function __construct($args)
    {
        // Expects []
        $this->content=ob_start();
        $this->require_html("adminNewArticleBody",$args);
        $this->content=ob_get_clean();
    }

}