<?php

class Route {

    public static $validRoutes = array();

    public static function set($route, $function)
    {
        self::$validRoutes[]=$route;

        //print_r(self::$validRoutes);
        
        if(isset($_SERVER['REQUEST_URI'])){ 
            if($_SERVER['REQUEST_URI']=='/public/'||$_SERVER['REQUEST_URI']=='/public'){
                $url='/';
            } else {
                $url = str_replace("/public/", "",filter_var(rtrim($_SERVER['REQUEST_URI'], '/'), FILTER_SANITIZE_URL));
            }
        }

        if($url==$route){
            $function->__invoke();
        }
    }


    public static function routes()
    {
        return self::$validRoutes;
    }

}