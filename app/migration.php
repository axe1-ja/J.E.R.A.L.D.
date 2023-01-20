<?php
require_once 'app/core/Database.php';


// configurations for routes to work
require_once realpath(dirname(__DIR__,1) .'/app/Library/functions.php');

$db = new Database();

$db->applyMigrations();