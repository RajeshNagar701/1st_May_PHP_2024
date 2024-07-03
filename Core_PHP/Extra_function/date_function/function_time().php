<?php
date_default_timezone_set('asia/calcutta');

// time() print unix time-stamp 1, jan 1970
echo time()+(1*60*60) ."<br>" ;

$onehour=time()+(1*60*60); 
$oneday=time()+(24*60*60);


echo date('h:i:s a',$onehour)."<br>";
echo date('d/m/y',$oneday)."<br>";
?>