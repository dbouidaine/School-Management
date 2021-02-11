<?php

namespace app;

class Router{

    public function get($pattern, $callback){
        if (!isset($_GET['route'])) return;
        print_r($pattern);
        echo "\n";
        $pattern_reg_exp = preg_replace("/\{(.*?)\}/" , "(?P<$1>[\w-]+)", $pattern);
        $pattern_reg_exp="#^".ltrim($pattern_reg_exp,"/")."$#";
        preg_match($pattern_reg_exp,trim($_GET['route'],"/"), $matches);
        print_r($matches);
    }

}
