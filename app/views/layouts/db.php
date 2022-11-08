<?php

try
 {
    $db = new PDO('mysql:host=localhost;dbname=password' , 'root' , '');
} 
catch (PDOExeception $e)
 {
    print "Erreur  : " . $e->getMessage() . "<br/>";
}