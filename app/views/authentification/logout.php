<?php 
session_start();
session_unset();
session_write_close();
$_SESSION["user"] = "";
session_destroy();
header("Location: index/.php");
