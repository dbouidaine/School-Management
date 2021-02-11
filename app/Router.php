<?php

namespace app;

class Router{

    public function get($pattern, $callback){
        //this function verifies, using regular expressions, if the url matches any route defined by the developper
        //It also enables him to get variables from url and re-use them later
        //In the route, anything found between brackets '{}' is considered as a variable
        if (!isset($_GET['route'])) return;
        $pattern_reg_exp = preg_replace("/\{(.*?)\}/" , "(?P<$1>[\w-]+)", $pattern);
        $pattern_reg_exp="#^".ltrim($pattern_reg_exp,"/")."$#";
        preg_match($pattern_reg_exp,trim($_GET['route'],"/"), $matches);
        if ($matches){
            $name_space="controllers\\";
            call_user_func([$name_space.$callback[0],$callback[1]],$matches);
        }
    }

}
