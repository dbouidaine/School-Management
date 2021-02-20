<?php

namespace app;

use Exception;

class Router{
    public $found;
    public function get($pattern, $callback){
        // this function verifies, using regular expressions, if the url matches any route defined by the developper
        // It also enables him to get variables from url and re-use them later
        // In the route, anything found between brackets '{}' is considered as a variable
        $matches=$this->matches($pattern);
        if ($matches){
            $name_space="controllers\\";
            try{
                call_user_func([$name_space.$callback[0],$callback[1]],$matches);
            }
            catch (Exception $ex){
                Router::redirect('404');
            }
        }
    }
    
    public function post($pattern, $callback,$post){
        // this function verifies, using regular expressions, if the url matches any route defined by the developper
        // It also enables him to get variables from url and re-use them later
        // In the route, anything found between brackets '{}' is considered as a variable
        $matches=$this->matches($pattern);
        if ($matches){
            $this->found=1;
            $name_space="controllers\\";
            try{
                call_user_func([$name_space.$callback[0],$callback[1]],$post);
            }
            catch (Exception $ex){
                Router::redirect('404');
            }
        }
    }

    public function matches($pattern){
        if (!isset($_GET['route'])) {return;}
        if($this->found) {return;}
        $pattern_reg_exp = preg_replace("/\{(.*?)\}/" , "(?P<$1>[\w-]+)", $pattern);
        $pattern_reg_exp="#^".ltrim($pattern_reg_exp,"/")."$#";
        preg_match($pattern_reg_exp,trim($_GET['route'],"/"), $matches);
        if ($matches){
            $this->found=1;
            return $matches;
        }
        return;
    }

    public static function redirect($code){
        require_once(VIEWS_PATH."/".$code.".php");
    }

}
