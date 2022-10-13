<?php

class App 
{

    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];



    // Constructor function
    public function __construct() 
    {
        $url = $this->parseUrl();

        if($url==''){
            $url='home/index';
        }

        /*if(file_exists('../app/controllers/'.$url[0].'.php'))
        {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/controllers/'.$this->controller.'.php';

        $this->controller = new $this->controller;

        if(isset($url[1]))
        {
            if(method_exists($this->controller, $url[1]))
            {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : [];*/

        call_user_func_array([$this->controller, $this->method],$this->params);
    }




    // Function to parse the url into smaller bits (to be able to call the right function in the controller)
    public function parseUrl()
    {
        if(isset($_SERVER['REQUEST_URI'])){ 

            $url = str_replace("/public", "",filter_var(rtrim($_SERVER['REQUEST_URI'], '/'), FILTER_SANITIZE_URL));
            //print_r($url);
            //$url=array_slice($url,2,count($url));

            return $url;
        }
    }
}