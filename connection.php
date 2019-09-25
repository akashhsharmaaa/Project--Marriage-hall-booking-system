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