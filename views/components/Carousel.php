<?php 

namespace views\components;
class Carousel extends Component{
    public function __construct($args)
    {
        // Require [asdasdasd]
        $this->content=ob_start();
        $this->require_html("carousel",$args);
        $this->content=ob_get_clean();
    }


}