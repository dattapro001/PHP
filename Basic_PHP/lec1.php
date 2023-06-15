<?php

$a ="10";;
$b = 3;

$c= $a+$b;

// echo $c;
$name ="Chinmoy";
$age = 22;
$weight = 57.8;
$ismale= true;
$salary= null;

echo $ismale;

echo gettype($ismale)."<br>";//boolean


echo $name ."<br>"; 
var_dump($name) ."<br>";//show the detail of string

// To check it is string or not

echo is_string($name) ."<br>";//1 true

//isset
echo isset($name) ."<br>";//return type true or false

//Constant
define('PI',3.1416);
echo PI."<br>";

//is numeric
echo is_numeric("3.1416")."<br>";


$x=4;
echo $x++."<br>";
echo ++$x."<br>";


//Type Conversiton
$stringName = "11.44";
$number = (float)$stringName;

echo gettype($number)."<br>";

//functions

echo pow(2,5)."<br>";
echo floor(2.5)."<br>";
echo ceil(2.3)."<br>";

//Number formating
$num = 1326758797.123475655677787;
echo number_format($num,4,'/',',');



?>