<?php 
require_once '../app/routes/web.php';

// from old version
//require_once '../app/init.php';
// from old version


// configurations for routes to work
function __autoload($class){
    if(file_exists('../app/core/'.$class.'.php')){
        require_once '../app/core/'.$class.'.php';
    } elseif (file_exists('../app/controllers/'.$class.'.php')){
        require_once '../app/controllers/'.$class.'.php';
    };
};

//$app = new App;

