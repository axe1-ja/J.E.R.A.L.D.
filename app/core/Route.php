<?php


class Route {

    public static $validRoutes = array();

    public static function set($route, $function)
    {
        self::$validRoutes[]=$route;

        //print_r(self::$validRoutes);
        
        if(isset($_SERVER['REQUEST_URI'])){
            if($_SERVER['REQUEST_URI']=='/'||$_SERVER['REQUEST_URI']=='/'){
                $url='/';
            } else {
                $url = filter_var(rtrim($_SERVER['REQUEST_URI'], '/'), FILTER_SANITIZE_URL);
                $url = substr($url,1,strlen($url));
                if(strpos($route, '{') !== false){
                    $pos = strpos($route, '{');
                    $end = strpos($route, '}');
                    $length = strlen($url) - $pos;
                    $param = substr($url, $pos, $length);
                }
            }
        }
        

        if(isset($param) && substr($url,0,$pos)==substr($route,0,$pos)) {
            // Get the controller and the method + call it with the parameter wanted
            $c = new $function['controller'];
            $m = $function['method'];
            $c->$m($param);

        } elseif($url==$route){

            $function->__invoke();

        }
    }


    public static function routes()
    {
        return self::$validRoutes;
    }

}