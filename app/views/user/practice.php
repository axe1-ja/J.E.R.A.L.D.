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

### forum 에서 사용할 함수 
$data=[
    ['21','forum1','Axel','Ja','No connexion'],
    ['22','forum2','Joon','Yoo','Find friend'],
    ['23','forum1','Elena','Charpentier','Hi Hi'],
    ['24','forum2','Diane','Dinh',"Don't work!!"],
    ['25','forum1','Leonard','Gendrel','Find golf friend'],
    ['26','forum2','Romain','Parriera',"It's really great"],
    ['27','forum1','Axel','Ja','Metal'],
    ['28','forum2','Joon','Yoo','Find new friend'],
    ['29','forum1','Elena','Charpentier','Hello Hi'],
    ['30','forum2','Diane','Dinh',"WOW!"],
];

foreach ($data as [$id_forum, $forumtype]):
    echo $forumtype;
endforeach;
?>