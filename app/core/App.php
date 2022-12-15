<?php

class App 
{

    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];
    public Database $db;



    // Constructor function
    public function __construct(array $config) 
    {
        //print_r($config);
        $this->db = new Database($config);

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