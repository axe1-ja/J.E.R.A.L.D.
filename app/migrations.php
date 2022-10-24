<?php
require_once 'app\core\App.php';
require_once 'app\core\Database.php';


$config = [];
$e=explode(" ", file_get_contents('.env'));
foreach($e as $f) {
    $config[explode('=',$f)[0]]=explode('=',$f)[1];
}
$app = new App($config);

$app->db->applyMigrations();