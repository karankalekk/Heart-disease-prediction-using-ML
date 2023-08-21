<!-- <?php
	session_start();
	if(!isset($_SESSION['login_user']))
	{
		header("location:login.php");
	}
	
	include('config.php');
	$user_check = $_SESSION['login_user'];
	$ses_sql = mysqli_query($con, "SELECT * FROM user WHERE u_email = '$user_check' ");
	$row = mysqli_fetch_array($ses_sql);
	
	echo"WELCOME ".$login_user=$row['u_name'];

?>