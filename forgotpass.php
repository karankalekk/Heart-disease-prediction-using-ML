<html>
     <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Password Change</title>
     </head>
    <body>
    <h1>Change Password</h1>
   <form method="POST" action="password_change.php">
    <table>
    <tr>
   <td>Enter your UserName</td>
    <td><input type="username" size="10" name="username"></td>
    </tr>
    <tr>
    <td>Enter your existing password:</td>
    <td><input type="password" size="10" name="password"></td>
    </tr>
  <tr>
    <td>Enter your new password:</td>
    <td><input type="password" size="10" name="newpassword"></td>
    </tr>
    <tr>
   <td>Re-enter your new password:</td>
   <td><input type="password" size="10" name="confirmnewpassword"></td>
    </tr>
    </table>
    <p><input type="submit" value="Update Password">
    </form>
   <p><a href="home.php">Home</a>
   <p><a href="logout.php">Logout</a>
   </body>
    </html>  

 <?php
session_start();
include 'dbconfig.php';

$username = $_POST['username'];
        $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $confirmnewpassword = $_POST['confirmnewpassword'];
        $result = mysqli_query($con, "SELECT password FROM user_info WHERE user_id='$username'");
        if(!$result)
        {
        echo "The username you entered does not exist";
        }
        else if(!isset($result))
        {
        echo "You entered an incorrect password";
        }
        if($newpassword=$confirmnewpassword)
        $sql=mysqli_query($con, "UPDATE user_info SET password='$newpassword' WHERE user_id='$username'");
        if($sql)
        {
        echo "Congratulations You have successfully changed your password";
        }
       else
        {
       echo "Passwords do not match";
       }
      ?>

<!-- 

original
<?php
//here we use include it will resert the database
//require_once it will stop previous database and start the new database (it is better than include bzc include it restart it takes time but require_once will direclty fatch the data(less time required))
include('config.php');
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $myemail = $_POST['email'];
    $mypass = $_POST['pass'];
    $newpassword = $_POST['new password'];
    $password = md5($mypass);
    $Newpassword = md5($mypass);
  //  $confirmnewpassword = $_POST['confirm newpassword'];

   $qry = mysqli_query($con, "UPDATE disease_prediction.user SET u_pass = '$password' WHERE user.u_email = '$myemail'");  


    if ($qry == true)
    {
        echo "Password Changed";
        header("location:Login.php");
    }


}
else
{
    echo "NOT POST";
}
?> -->