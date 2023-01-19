<?php 
// Ceci est un fichier avec des fonction utiles pour Debug, Trier des objets,  etc...

// dd = 'dump and die' : pour afficher une variable que l'on veut afficher pour débugger (faire: 'dd($nomDeLaVariable);')
function dd($var) {
    print_r($var);
    exit;
}

function sortObjects($array, $attribute, $order) {
    if($order == 'desc') {
        

    } else {

    }
}

function paginate($array,$nbItems) {
    
}

function getDateAndTimeDisplay($dt) {
    $dt = explode(' ', $dt);
    $date=explode('-',$dt[0]);
    $date=$date[2].'/'.$date[1].'/'.$date[0];
    $time=$dt[1];
    $result = 'Le '.$date.', à '.$time;
    return $result;
}

function getUserColor($user) {
    
    // colors for custom display
    $colors = ['primary','secondary','grey','green','red','purple','pink','cyan','skyblue','bloodred'];

    $color = $colors[$user%count($colors)];

    return $color;
}

function callenv() {
    $config = [];
    //dd(getenv());
    if(getenv('DB_DSN')=='' && getenv('DB_USERNAME')=='' && getenv('DB_PASSWORD')=='') {
        // if not on server, by default (because if only the live server has the env var)
        $config['DB_DSN'] = 'mysql:host=127.0.0.1;port=3306;dbname=jeraldb_master'; // pour le mac, host = 127.0.0.1
        $config['DB_USERNAME'] = 'root';
        $config['DB_PASSWORD'] = '';
    } else {
        // if on server
        $config['DB_DSN'] = getenv('DB_DSN'); //should be :         mysql:host=82.64.120.113;port=3306;dbname=jeraldb_master
        $config['DB_USERNAME'] = getenv('DB_USERNAME'); //  s.b:    jerald
        $config['DB_PASSWORD'] = getenv('DB_PASSWORD'); // :        vqt2~sNDbuJpXRZ,
    }

    return $config;
}