<?php 

namespace views\components;
class ArticleBody extends Component{
    public function __construct($args)
    {
        // Require [asdasdasd]
        $this->content=ob_start();
        $this->require_html("articleBody",$args);
        $this->content=ob_get_clean();
    }


}