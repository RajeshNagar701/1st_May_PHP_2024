<?php

// use ful in reduce reusable 
//code and remove the limitation of multiple inheritance


trait abc
{
	public function test()
		{
		echo "This is test method";
		}
}
trait xyz
{
	public function sample()
	{
		echo "this is sample method";
	}
}

class c  
{
	use abc,xyz;  // multiple inherit 
}

$obj=new c();
$obj->test();
$obj->sample();

?>