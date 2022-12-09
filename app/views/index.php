<?php
session_start();
if(!empty($_SESSION["user"])) {
    require_once __DIR__ . '/user/index.php';
} else {
    require_once __DIR__ . '/authentification/index.php';
}
?>