<?php 

namespace views\components;
class Layout extends Component{
    public function __construct($args)
    {
        // Require [asdasdasd]
        $this->content=ob_start();
        $this->require_html("layout",$args);
        $this->content=ob_get_clean();
    }


}