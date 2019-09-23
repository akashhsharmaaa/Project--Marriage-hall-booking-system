<?php
session_start();
if(isset($_POST['submit']))
{
 mysqli_connect('localhost','root','','project') or die(mysql_error());
 
 $username=$_POST['username'];
 $passwordd=$_POST['password'];
 if($username!=''&&$password!='')
 {
   $query=mysql_query("select * from admin where username= ".$username." and password=".$password."") or die(mysql_error());
   $res=mysql_fetch_row($query);
   if($res)
   {
    $_SESSION['username']=$username;
    header(admindash.html);
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