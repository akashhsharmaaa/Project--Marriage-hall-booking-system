<html>
<head>
	<link rel="shortcut icon" href="favicon1.png">
    <link rel="shortcut icon" href="images/c.ico"/>
    <title> Customer login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <div class="login-box">
    <img src="person.jpg" class="avatar">
        <h1>CUSTOMER LOGIN</h1>
            <form action="#" method="post" >
            <p>User id</p>
            <input type="text" name="username" placeholder="Enter User id">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="admin.html">Administrator Login</a><br>
           <a href="login1.html">Back to home</a><br>
            </form>
	<?php
session_start();
if(isset($_POST['submit']))
{
 $con=mysqli_connect('localhost','root','','project') or die(mysqli_error());
 
 $username=$_POST['username'];
 $password=$_POST['password'];
 if($username!="" && $password!="")
 {
   $query=mysqli_query($con,"select * from customer where username= '".$username."' and password='".$password."'") or die(mysqli_error());
   $res=mysqli_fetch_row($query);
   if($res)
   {
    $_SESSION['username']=$username;
    header('location:customerdash.php');
   }
   else
   {
    echo'You entered username or password is incorrect';
   }
 }
 else
 {
  echo'Enter both username and password';
 }
}		
?>

        </div>
	

    
	</head>
</html>
