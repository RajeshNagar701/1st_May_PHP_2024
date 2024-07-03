<?php

/*
collections of values

$nemeric=array("a","b","c"); index/key default starts with 0,1,2

$associate=array("raj"=>"a","2"=>"b","3"=>"c");

$multidemetional=array("a","b"=>array("p","q"),"c");

*/

$name="a";
$name1="b";
$name2="c";

$arr=array("a","b","c");

print_r($arr)."</br>";

echo $arr[0]."</br>";
echo $arr[1]."</br>";
echo $arr[2]."</br>";

foreach($arr as $w)
{
	echo "<h1>".$w."</h1>";
}


?>