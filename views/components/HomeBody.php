<?php

namespace views\components;


class HomeBody extends Component{

    public function __construct($args)
    {
        // expects[navbar,]
        $this->content=ob_start();
        $this->require_html("homeBody",$args);
        $this->content=ob_get_clean();
    }

}