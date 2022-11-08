<?php 
session_start();
session_unset();
session_write_close();
$_SESSION["user"] = "";
session_destroy();
header("Location: public/index/.php");
