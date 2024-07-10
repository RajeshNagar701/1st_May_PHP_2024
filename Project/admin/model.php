
<?php

/*
The Model-View-Controller (MVC) is an architectural pattern that separates 
an application into three main logical components: the model, the view, and the controller.
 
Each of these components are built to handle specific development aspects of an 
application. MVC is one of the most frequently used industry-standard web 
development framework to create scalable and extensible projects.

*/


class model
{
	public $conn="";
	function __construct()
	{
							// hostname // uname // pass // db name
		$this->conn=new mysqli('localhost','root','','mayphp2024');
	}
	
	function select($tbl)
	{
		$sel="select * from $tbl";
		$run=$this->conn->query($sel);
		while($data=$run->fetch_object())
		{
			$arr[]=$data;
		}
		return $arr;
	}
	
	
}
$obj=new model;

?>
