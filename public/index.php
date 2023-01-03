<?php
//print_r(realpath(dirname(__DIR__,1) .'/app/core/Controller.php'));
//exit;
// configurations for routes to work
function __autoload($class){
    if(file_exists(realpath(dirname(__DIR__,1) .'/app/core/'.$class.'.php'))){
        require_once realpath(dirname(__DIR__,1) .'/app/core/'.$class.'.php');
    } elseif (file_exists(realpath(dirname(__DIR__,1) .'/app/controllers/'.$class.'.php'))){
        require_once realpath(dirname(__DIR__,1) .'/app/controllers/'.$class.'.php');
    } elseif (file_exists(realpath(dirname(__DIR__,1) .'/app/models/'.$class.'.php'))){
        require_once realpath(dirname(__DIR__,1) .'/app/models/'.$class.'.php');
    };
};

//$app = new App;
session_start();
//print_r($_SESSION);
//exit;
if(!array_key_exists('user',$_SESSION)){
    $_SESSION['user']='guest';
    $_SESSION['user_id']=0;
    $_SESSION['loggedin']=0;
}

require_once realpath(dirname(__DIR__,1) .'/app/routes/web.php');

