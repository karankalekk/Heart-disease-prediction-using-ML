<?php
require "config.php";
if(isset($_POST["submit"]))
{
    $u_name = $_POST['name'];
    $u_email = $_POST['email'];
    $u_pass = md5($_POST['pass']);

    mysqli_query($con, "INSERT INTO user(u_name, u_email, u_pass, u_flag)VALUE('$u_name', '$u_email', '$u_pass', '0')");

        // Check if(qry == true) -->> pass values 
            if($qry == true)
			{
                header("location:login.php");
            }
         
 
}

?>
