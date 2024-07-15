

<?php

include_once('model.php'); // 1 step : load model in control


class control extends model    // 2 step extends(inherit) model class
{
	// auto call magic function  only make clsss object 
	function __construct()
	{
		model::__construct(); // 3 step call model __construct for database connectivity 
		
		$url=$_SERVER['PATH_INFO']; // PATH urldecode
		
		switch($url)
		{
			case '/admin':
			if (isset($_REQUEST['submit'])) {
					
					$email = $_REQUEST['email'];
					$password = md5($_REQUEST['password']); // pass encripted 
					
					$where = array("email" => $email, "password" => $password);
					$res=$this->select_where('admins',$where);
					$chk=$res->num_rows; // 0 means false & 1 means true  check row wise condition
					
					if($chk==1)
					{
						echo "<script>
							alert('Login Success !');
							window.location='dashboard';
						</script>";
					}
					else
					{
						echo "<script>
							alert('Login Failed !');
						</script>";
					}
				}
			include_once('index.php');
			break;
			
			case '/dashboard':
			include_once('dashboard.php');
			break;
			
			case '/add_categories':
			include_once('add_categories.php');
			break;
			
			case '/manage_categories':
			$main_categories=$this->select('main_categories');
			include_once('manage_categories.php');
			break;
			
			case '/add_subcategories':
			include_once('add_subcategories.php');
			break;
			
			case '/manage_subcategories':
			$sub_categories=$this->select('sub_categories');
			include_once('manage_subcategories.php');
			break;
			
			case '/add_videos':
			include_once('add_videos.php');
			break;
			
			case '/manage_videos':
			$vedios=$this->select('vedios');
			include_once('manage_videos.php');
			break;
			
			case '/manage_user':
			$users=$this->select('users');
			include_once('manage_user.php');
			break;
			
			case '/add_employee':
			include_once('add_employee.php');
			break;
			
			case '/manage_employee':
			$employee=$this->select('employee');
			include_once('manage_employee.php');
			break;
			
			case '/manage_watchlist':
			$watchlists=$this->select('watchlists');
			include_once('manage_watchlist.php');
			break;
			
			case '/manage_download':
			$download=$this->select('download');
			include_once('manage_download.php');
			break;
			
			case '/manage_comment':
			$comments=$this->select('comments');
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
