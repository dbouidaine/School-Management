<?php

namespace views\components;


class CycleBody extends Component{

    public function __construct($args)
    {
        // Expects []
        $this->content=ob_start();
        $this->require_html("cycleBody",$args);
        $this->content=ob_get_clean();
    }

}