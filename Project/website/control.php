


<?php

include_once('model.php'); // 1 step : load model in control


class control extends model     // 2 step extends(inherit) model class
{
	// auto call magic function  only make clsss object 
	function __construct()
	{
		model::__construct(); // 3 step call model __construct for database connectivity 
	
		$url=$_SERVER['PATH_INFO']; // PATH urldecode
		
		switch($url)
		{
			case '/home':
			include_once('index.php');
			break;
			
			case '/about':
			include_once('about.php');
			break;
			
			case '/contact':
			
			include_once('contact.php');
			break;
			
			case '/signup':
			
			include_once('signup.php');
			break;
			
			case '/login':
			
			include_once('login.php');
			break;
			
			default:
			echo "<h1 style='color:red;text-align:center'> Page Not Found </h1>";
			break;
			
		}
		
	}
}
$obj=new control;

?>
