<?php
//Diffrence between "" amd ''
$name = 'chinmoy';

$str1= "I am $name";
$str2= 'I am $name';//variable doest work on single ''

echo $str1."<br>";
echo $str2."<br>";

//string concatenation
echo 'hello '.' world!'."<br>";
$str3 ="hello world";


//Many Function..........
echo trim($str3)."<br>";//white space atc print
echo str_word_count($str3)."<br>";

echo strtoupper($str3)."<br>";//all latter upper case
echo strtolower($str3)."<br>";//all latter lower case
echo ucfirst($str3)."<br>";//first latter uppercase
echo lcfirst($str3)."<br>";//first latter lowercase
echo ucwords($str3)."<br>";//All word first latter 
echo strpos($str3,'ll')."<br>";//to know specific position of a string
echo str_replace('world','php',$str3)."<br>";//replace a word with other word
echo str_ireplace('World','php',$str3)."<br>";//doest affect the uppercase and lower case character


$longtext="
I am Chinmoy Datta
Reading in Leading University
in CSE department";

echo $longtext;//just print the text dont count the breake or enter
echo nl2br($longtext);//will print with following format

//---------------------------------------------------------------
//Array
$fruits =["Banana","Apple","Orenge",77];
echo '<pre>';//just use to decorate array like list or order by
var_dump($fruits);
echo '</pre>';

$fruits[1]="New add";//replacing apple 
echo '<pre>';//just use to decorate array like list or order by
var_dump($fruits);
echo '</pre>';

echo isset ($fruits[5]),"<br>";//will return false no index of 5
echo count($fruits)."<br>";//count to array index

//add element in 1st index and remove 1st index (unshift and shift---------
array_unshift($fruits,'Ok');//add the ok in 1st array index
echo '<pre>';
var_dump($fruits);//here count the string
echo '<pre>';

array_shift($fruits);//remove 1st index elements of array
echo '<pre>';
var_dump($fruits);//here count the string
echo '<pre>';

//array push - pop--------------------------------------
array_push($fruits,"new element");//push the new element 
echo '<pre>';
var_dump($fruits);//here count the string
echo '<pre>';

array_push($fruits,3.14167754);//push the number
echo '<pre>';
var_dump($fruits);//here count the number of floating
echo '<pre>';

array_pop($fruits);//pop the last element of the array
echo '<pre>';
var_dump($fruits);//here count the string
echo '<pre>';
?>