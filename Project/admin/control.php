

<?php

include_once('model.php'); // 1 step : load model in control


class control extends model    // 2 step extends(inherit) model class
{
	// auto call magic function  only make clsss object 
	function __construct()
	{
		session_start();
		
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
						$data=$res->fetch_object(); // single data fetch 
						$_SESSION['aname']=$data->name;
						$_SESSION['aid']=$data->id;
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
			
			
			
			case '/admin_logout':
				unset($_SESSION['aid']);
				unset($_SESSION['aname']);
				echo "<script>
						alert('Logout Success !');
						window.location='admin'
					</script>";
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
			
			
			case '/delete':
			
			if(isset($_REQUEST['dcat'])) 
			{
				$id=$_REQUEST['dcat'];
				
				$where=array("id"=>$id);
				$res=$this->delete_where('main_categories',$where);
				if($res)
				{
				echo "<script>
						alert('Main Categories Delete Success !');
						window.location='manage_categories'
					</script>";
				}
			}
			
			if(isset($_REQUEST['dcomment'])) 
			{
				$id=$_REQUEST['dcomment'];
				
				$where=array("id"=>$id);
				$res=$this->delete_where('comments',$where);
				if($res)
				{
				echo "<script>
						alert('Main comments Delete Success !');
						window.location='manage_comment'
					</script>";
				}
			}
			
			if(isset($_REQUEST['ddownload'])) 
			{
				$id=$_REQUEST['ddownload'];
				
				$where=array("id"=>$id);
				$res=$this->delete_where('download',$where);
				if($res)
				{
				echo "<script>
						alert('Download Delete Success !');
						window.location='manage_download'
					</script>";
				}
			}
			
			if(isset($_REQUEST['demp'])) 
			{
				$id=$_REQUEST['demp'];
				
				$where=array("id"=>$id);
				$res=$this->delete_where('employee',$where);
				if($res)
				{
				echo "<script>
						alert('Main Employee Delete Success !');
						window.location='manage_employee'
					</script>";
				}
			}
			
			if(isset($_REQUEST['dsub_cate'])) 
			{
				$id=$_REQUEST['dsub_cate'];
				
				$where=array("id"=>$id);
				$res=$this->delete_where('sub_categories',$where);
				if($res)
				{
				echo "<script>
						alert('Sub Categories Delete Success !');
						window.location='manage_subcategories'
					</script>";
				}
			}
			
			if(isset($_REQUEST['dwatchlist'])) 
			{
				$id=$_REQUEST['dwatchlist'];
				
				$where=array("id"=>$id);
				$res=$this->delete_where('watchlist',$where);
				if($res)
				{
				echo "<script>
						alert('Main watchlist Delete Success !');
						window.location='manage_watchlist'
					</script>";
				}
			}
			
			if(isset($_REQUEST['duser'])) 
			{
				$id=$_REQUEST['duser'];
				
				$where=array("id"=>$id);
				
				// get data for img delete
				$resdata=$this->select_where('users',$where);
				$fetch=$resdata->fetch_object();
				$del_img=$fetch->img;
				
				$res=$this->delete_where('users',$where);
				if($res)
				{
					unlink('upload/users/'.$del_img); // delete image from path
					echo "<script>
							alert('Users Delete Success !');
							window.location='manage_user'
						</script>";
				}
			}
			
			if(isset($_REQUEST['dvideo'])) 
			{
				$id=$_REQUEST['dvideo'];
				
				$where=array("id"=>$id);
				$res=$this->delete_where('vedios',$where);
				if($res)
				{
				echo "<script>
						alert('Main vedios Delete Success !');
						window.location='manage_videos'
					</script>";
				}
			}
			
			
			break;
			
			
			default:
			echo "<h1 style='color:red;text-align:center'> Page Not Found </h1>";
			break;
			
		}
		
	}
}
$obj=new control;

?>
