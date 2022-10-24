<?php 
/*
$config = [];
$e=explode(" ", file_get_contents('../.env'));
foreach($e as $f) {
    $config[explode('=',$f)[0]]=explode('=',$f)[1];
}
$app = new App($config);
*/

require_once '../app/routes/web.php';



// configurations for routes to work
function __autoload($class){
    if(file_exists('../app/core/'.$class.'.php')){
        require_once '../app/core/'.$class.'.php';
    } elseif (file_exists('../app/controllers/'.$class.'.php')){
        require_once '../app/controllers/'.$class.'.php';
    };
}


