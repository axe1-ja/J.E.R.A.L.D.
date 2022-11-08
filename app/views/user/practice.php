<?php

$name = "<h1>Joon</h1>";

$string1 = "My name is ";
echo $string1.$name;

$MyNumber = 45;
$calculation = $MyNumber*789 + 465/97;
echo $calculation;
$Mybool = false;
echo "<p>IS my bool is true?"." ".$Mybool."</p>";
$variablename = "name";
echo $$variablename;

$myArray =array("Joon","Axel","elena","leo","romain");
print_r($myArray);
echo "<p>".$myArray[1].$myArray[2]."</p>";
echo"<br>";
$myarray2[0] = " Poulet";
$myarray2[1] = " Boeuf";
$myarray2["My favorite food is "] = " Porc";

$myarray3 = array("France" => "French", "USA" => "English", "Korea" => "Korean");
print_r($myarray3);
unset($myarray3["France"]);
print_r($myarray3);
  
echo"<br>";
print_r($myarray2);
echo sizeof($myArray);
echo sizeof($myarray2);
echo sizeof($myarray3);
$myarray2[] = " burger";
$myarray2[sizeof($myarray2)+2] = " fish";
print_r($myarray2);
echo sizeof($myarray2);


?>