<?php

namespace views\components;

class AdminEditArticleBody extends Component{

    public function __construct($args)
    {
        // Expects []
        $this->content=ob_start();
        $this->require_html("adminEditArticleBody",$args);
        $this->content=ob_get_clean();
    }

}