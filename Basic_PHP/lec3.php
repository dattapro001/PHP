<?php 
//explode function  (String to Array)  -----------------
$strd = "Red,Yellow,Green,Purple";
$strd1 = "Red/Yellow/Green/Purple";
$colorArray=explode(",",$strd);//convert the string into array
$colorArray1=explode("/",$strd1);//convert the string into array but using /
echo '<pre>';
var_dump($colorArray);//here count the string
echo '</pre>';
echo '<pre>';
var_dump($colorArray1);//here count the string using /
echo '<pre>';


//implode function (Array to string)  -----------------
echo implode (" & ", $colorArray);//covert the arrar in string 

//--------------------------------------

echo in_array('Red',$colorArray)."<br>";//to find element in array

echo array_search('Green',$colorArray)."<br>";//mind it arrar_search return the index number not element

//Sorting--------------------
sort($colorArray);//sort the array in oder of characters.
echo '<pre>';
var_dump($colorArray);
echo '<pre>';

//Associative Array------------
//Diffrence between index array and associative array
//its consist of integer or string both work
$favColor = array(
'Chinmoy'=>'Red',//first index number then value
'Priom'=>'Green',
'Tiyash'=>'Blue',
'Rittika'=>'Violate',
8=>'Eight',
10=>17
);

echo $favColor[8]."<br>";
echo $favColor['Priom']."<br>";
echo $favColor[10]."<br>";

//The best way to print Associative array to use foreach loop
foreach($favColor as $key=>$value){ //here key is index and value is index value
echo "<br> Fav color of $key is $value"."<br>";
};

//Date Fuction--------------------------
$d = date ("d F M m t n Y y");//d is date F is full month name M is shot name of month m is number month
//t is number of date in month n is number month but without leading zero Y is full year ex.2023
//y is 2 digit year ex.23
echo "Today : $d <br>";

//time Function
$time = date("h:i:s:u:a:A:e:w:D:z");//h is hour i is minute s is sec a is microsecond
//a is lower case am/pm A is uppercase AM/PM e is timezone identifier(UTC,GMT)
// w is week in number(start from sunday-0) D is week name z is the day of year

echo "Time : $time <br><br>";
//Note read documentation of php date() from w3 schools
?>
