<?php 

namespace views\components;
class Card extends Component{
    public function __construct($args)
    {
        // Require [asdasdasd]
        $this->content=ob_start();
        $this->require_html("card",$args);
        $this->content=ob_get_clean();
    }


}