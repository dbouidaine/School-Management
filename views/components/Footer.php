<?php 

namespace views\components;
class Footer extends Component{
    public function __construct($args)
    {
        // Require [asdasdasd]
        $this->content=ob_start();
        $this->require_html("footer",$args);
        $this->content=ob_get_clean();
    }


}