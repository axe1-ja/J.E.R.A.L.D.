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