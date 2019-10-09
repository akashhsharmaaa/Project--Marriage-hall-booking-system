<html lang="en">
<head>

<title>MARRY start your new life</title>
<meta name="description" content="Place to put your description text">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<link rel="stylesheet" href="base2.css">
<link rel="shortcut icon" href="favicon1.png">

</head>
<body>	
<div id="header">
  <div class="container"> 
    <div class="logo"><img src="logo1.jpg" alt="" /></div>
    <div class="mainmenu">
      <div id="mainmenu">
        <ul class="sf-menu">
          <li><a href="home1.html">Home</a></li>
          <li><a href="about1.html" >About</a></li>
			<li><a href="login1.html">Login</a><ul class="submenu">
				<li><a href="admin.html">Admin</a></li>
				<li><a href="loginpage.html">Customer</a></li>
                                        </ul></li>
              <li><a href="signup1.php" id="visited" >Signup</a></li>
          <li><a href="contact1.php">Contact</a></li>
        </ul>
      </div>
      <form id="responsive-menu" action="#" method="post">
        <select>
          <option value="home1.html">Home</option>
          <option value="about1.html">About</option>
          <option value="login1.html">Login</option>
          <option value="signup1.php">Signup</option>
          <option value="contact1.php">Contact</option> 
        </select>
      </form>
    </div>
  </div>
</div>
<section class="slider">
  <div class="flexslider">
    <ul class="slides" >
     
    </ul>
	</div>
	</section>
	
	<div class="breadcrumbs">
  <div class="container">
    <header>
      <h3>Sign in</h3>
     
    </header>
  </div>
	
  <hr class="separator1">

<div class="main-login main-center">	
<p></p>
	<form action="#" method="post" >
				
		<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">YOUR NAME</label>
							<div class="cols-sm-10">
								<div class="input-group">			
	<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
							<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name" required/>
							</div>
			</div>	
		</div>
				<div class="form-group">
							<label for="user id" class="cols-sm-2 control-label">USER ID</label>
							<div class="cols-sm-10">
								<div class="input-group">			
	<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
							<input type="text" class="form-control" name="username" id="name"  placeholder="Enter User id" required/>
							</div>
			</div>	
		</div>	
				<div class="form-group">
						<label for="email" class="cols-sm-2 control-label">YOUR EMAIL</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="email" class="form-control" name="emailaddress" id="email"  placeholder="Enter your Email" required />
								</div>
					</div>
			</div>			
	<div class="form-group">
					<label for="address" class="cols-sm-2 control-label">ADDRESS</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="address" id="address"  placeholder="Enter your Address" required />
							</div>
						</div>
				</div>		
		<div class="form-group">	
			<label for="password" class="cols-sm-2 control-label">PASSWORD</label>
						<div class="cols-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
								<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" required/>
							</div>
						</div>
				</div>	
		<div class="form-group">
				<label for="confirm" class="cols-sm-2 control-label">CONFIRM PASSWORD</label>
						<div class="cols-sm-10">		
				<div class="input-group">			
				<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
								<input type="password" class="form-control" name="password1" id="password1"  placeholder="Confirm your Password" required/>	
						</div>		
				</div>			
		</div>				
	<div class="form-group ">
				<button name="register" value="#">REGISTER</button>	
					</div>
					<a href="login1.html">Already have an account?</a><br>
    	<?php

if(isset($_POST['register']))
{
	$con=mysqli_connect('localhost','root','','project') or die(mysqli_error());
	SignUp($con);
}


function NewUser($con)
{
	$name = $_POST['name'];
	$username = $_POST['username'];
	$emailaddress = $_POST['emailaddress'];
	$password =  $_POST['password'];
	$address = $_POST['address'];
	$password1=$_POST['password1'];
	$query = mysqli_query($con,"INSERT INTO customer(name,username,emailaddress,address,password)VALUES('$name','$username','$emailaddress','$address','$password')") or die(mysqli_error($con));	
	echo "                           YOUR REGISTRATION IS COMPLETED...";
}


function SignUp($con)
{
if(!empty($_POST['username']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	

	$query = mysqli_query($con,"SELECT * FROM customer WHERE username = '$_POST[username]' AND password = '$_POST[password]'") or die(mysqli_error($con));
	if(!$row = mysqli_fetch_array($query) or die(mysqli_error($con)))
	{
		Newuser($con);
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
	
}
}

?>       
	</form>	

		</div>
	

	
		
<hr class="separator2">
<div class="socialsblock">
  <div class="container socialize">
    <h3>Socialize with us!</h3>
    <section class="socials">
      <ul class="socials">
      <li><a href="#"><img src="youtube.png" alt="" /></a></li>
        <li><a href="#"><img src="twitter.png" alt="" /></a></li>
        <li><a href="#"><img src="facebook.png" alt="" /></a></li>
      </ul>
    </section>
  </div>

	
	
<div class="footer">
  <div class="container">
    <div class="one_fourth">
      <h3>Contact Informations</h3>
      <p><span class="orange"><strong>Address:</strong></span> <br>
        Gla university</p>
      <p><span class="orange"><strong>Phone:</strong></span>
		  <br>+91 6394326721<br>
      </p>
      <p><span class="orange"><strong>Email:</strong></span>
		  <br>akash.sharma_bca17@gla.ac.in<br>
      </p>
    </div>
    <div class="one_fourth lastcolumn">
      <h3>About</h3>
      <p>"Marry,Start your new life" help to find best marriage hall in your city to make marriage day best day of your life</p>
    </div>
	</div>
	</div>
		</div>
	
	
		
	
	</div>
	</body>
</html>
