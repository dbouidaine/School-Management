<?php 

namespace views\components;
class Layout extends Component{
    private $layout;
    public function __construct($args)
    {
        $this->layout=ob_start();
        $this->require_html("layout",$args);
        $this->layout=ob_get_clean();
    }

    public function get(){
        return $this->layout;
    }
}