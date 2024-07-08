

<?php

class control
{
	// auto call magic function  only make clsss object 
	function __construct()
	{
		
		$url=$_SERVER['PATH_INFO']; // PATH urldecode
		
		switch($url)
		{
			case '/admin':
			include_once('index.php');
			break;
			
			case '/dashboard':
			include_once('dashboard.php');
			break;
			
			case '/add_categories':
			include_once('add_categories.php');
			break;
			
			case '/manage_categories':
			include_once('manage_categories.php');
			break;
			
			case '/add_subcategories':
			include_once('add_subcategories.php');
			break;
			
			case '/manage_subcategories':
			include_once('manage_subcategories.php');
			break;
			
			case '/add_videos':
			include_once('add_videos.php');
			break;
			
			case '/manage_videos':
			
			include_once('manage_videos.php');
			break;
			
			case '/manage_user':
			include_once('manage_user.php');
			break;
			
			case '/add_employee':
			include_once('add_employee.php');
			break;
			
			case '/manage_employee':
			include_once('manage_employee.php');
			break;
			
			case '/manage_watchlist':
			include_once('manage_watchlist.php');
			break;
			
			case '/manage_download':
			include_once('manage_download.php');
			break;
			
			case '/manage_comment':
			include_once('manage_comment.php');
			break;
			
			default:
			echo "<h1 style='color:red;text-align:center'> Page Not Found </h1>";
			break;
			
		}
		
	}
}
$obj=new control;

?>
