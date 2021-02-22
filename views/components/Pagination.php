<?php 

namespace views\components;
class Pagination extends Component{
    public function __construct($args)
    {
        // Expects []
        $this->content=ob_start();
        $this->require_html("pagination",$args);
        $this->content=ob_get_clean();
    }


}