<?php 

namespace views\components;
class CycleCalendarsBody extends Component{
    public function __construct($args)
    {
        // Expects []
        $this->content=ob_start();
        $this->require_html("cycleCalendarsBody",$args);
        $this->content=ob_get_clean();
    }


}