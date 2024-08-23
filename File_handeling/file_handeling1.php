<?php

/*

PHP Check End-Of-File - feof()

$myfile = fopen("webdictionary.txt", "r")
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);

*/

$myfile = fopen("users.txt", "r");
// Output one line until end-of-file
while(!feof($myfile)) {
  //echo fgets($myfile) . "<br>";
  //echo fgetc($myfile) . "<br>";
}
fclose($myfile);
?>