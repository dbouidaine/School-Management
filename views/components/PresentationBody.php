<?php

namespace views\components;


class PresentationBody extends Component{

    public function __construct($args)
    {
        $this->content=ob_start();
        $this->require_html("presentationBody",$args);
        $this->content=ob_get_clean();
    }

}