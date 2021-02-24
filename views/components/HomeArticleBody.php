<?php 

namespace views\components;

class HomeArticleBody extends Component{
    public function __construct($args)
    {
        // Expects []
        $this->content=ob_start();
        $this->require_html("homeArticleBody",$args);
        $this->content=ob_get_clean();
    }


}