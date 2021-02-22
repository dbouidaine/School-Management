<?php 

namespace views\components;

class Articles extends Component{
    public function __construct($args)
    {
        // Expects []
        $this->content=ob_start();
        $this->require_html("articles",$args);
        $this->content=ob_get_clean();
    }


}