<?php 

namespace views\components;
class Article extends Component{
    public function __construct($args)
    {
        // Require [asdasdasd]
        $this->content=ob_start();
        $this->require_html("article",$args);
        $this->content=ob_get_clean();
    }


}