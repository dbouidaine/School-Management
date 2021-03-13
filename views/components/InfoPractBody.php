<?php 

namespace views\components;
class InfoPractBody extends Component{
    public function __construct($args)
    {
        // Expects []
        $this->content=ob_start();
        $this->require_html("infoPractBody",$args);
        $this->content=ob_get_clean();
    }


}