


<?php

include_once('../admin/model.php'); // 1 step : load model in control


class control extends model     // 2 step extends(inherit) model class
{
	// auto call magic function  only make clsss object 
	function __construct()
	{
		model::__construct(); // 3 step call model __construct for database connectivity 

		$url = $_SERVER['PATH_INFO']; // PATH urldecode

		switch ($url) {
			case '/home':
				include_once('index.php');
				break;

			case '/about':
				include_once('about.php');
				break;

			case '/contact':
				if (isset($_REQUEST['submit'])) {
					$name = $_REQUEST['name'];
					$email = $_REQUEST['email'];
					$comment = $_REQUEST['comment'];

					$data = array("name" => $name, "email" => $email, "comment" => $comment);

					$res=$this->insert('contacts',$data);
					if($res)
					{
						echo "<script>
							alert('Contact Success !');
						</script>";
					}
					else
					{
						echo "not success";
						
					}
				}
				include_once('contact.php');
				break;

			case '/signup':

				$countries = $this->select('countries');
				if (isset($_REQUEST['submit'])) {
					$name = $_REQUEST['name'];
					$email = $_REQUEST['email'];
					$password = md5($_REQUEST['password']); // pass encripted 
					$gender = $_REQUEST['gender'];
					$lag_arr = $_REQUEST['lag']; // get data in arr form
					$lag = implode(',', $lag_arr); // convert arr to string
					$cid = $_REQUEST['cid'];

					$img = $_FILES['img']['name'];
					// image upload in project folder
					$path = '../admin/upload/users/' . $img;
					$tmp_file = $_FILES['img']['tmp_name'];
					move_uploaded_file($tmp_file, $path);

					$data = array(
						"name" => $name, "email" => $email, "password" => $password, "gender" => $gender,
						"lag" => $lag, "cid" => $cid, "img" => $img
					);

					$res=$this->insert('users',$data);
					if($res)
					{
						echo "<script>
							alert('Registered Success !');
						</script>";
					}

				}
				include_once('signup.php');
				break;

			case '/login':
				if (isset($_REQUEST['submit'])) {
					
					$email = $_REQUEST['email'];
					$password = md5($_REQUEST['password']); // pass encripted 
					
					$where = array("email" => $email, "password" => $password);
					$res=$this->select_where('users',$where);
					$chk=$res->num_rows; // 0 means false & 1 means true  check row wise condition
					
					if($chk==1)
					{
						echo "<script>
							alert('Login Success !');
						</script>";
					}
					else
					{
						echo "<script>
							alert('Login Failed !');
						</script>";
					}
				}

				include_once('login.php');
				break;

			default:
				echo "<h1 style='color:red;text-align:center'> Page Not Found </h1>";
				break;
		}
	}
}
$obj = new control;

?>
