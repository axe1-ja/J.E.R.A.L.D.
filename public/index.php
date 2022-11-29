<?php

// configurations for routes to work
function __autoload($class){
    if(file_exists('../app/core/'.$class.'.php')){
        require_once '../app/core/'.$class.'.php';
    } elseif (file_exists('../app/controllers/'.$class.'.php')){
        require_once '../app/controllers/'.$class.'.php';
    } elseif (file_exists('../app/models/'.$class.'.php')){
        require_once '../app/models/'.$class.'.php';
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

require_once '../app/routes/web.php';

