<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
		<link rel="title icon" href="6.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link rel="stylesheet" href="booking1.css">
		<link rel="stylesheet" href="admindash.css">
		<title>Admin dashboard</title>
	</head>
	<body>
<nav class="navbar navbar-expand-md navbar-light">
<button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div clas="collapse navbar-collapse" id="mynavbar">
	<div class="container-fluid">
		<div class="row">
			<!--sidebar-->
		<div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
			<a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">Marriage hall</a>
			
			<div class="bottom-border pb-3">
			<img src="person.jpg" width="50" height="50" class="rounded-circle mr-3">
			<a href="#" class="text-white">Admin</a>
		
			</div>
			<ul class="navbar-nav flex-column mt-4">
					   <li class="nav-item"><a href="admindash.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-home text-light fa-lg mr-3"></i>Dashboard</a></li>
				  
				   <li class="nav-item"><a href="halladmindash.php" class="nav-link text-white p-3 mb-2 current"><i class="fas fa-envelope text-light fa-lg mr-3"></i>Hall</a></li>
				<li class="nav-item"><a href="customer.php" class="nav-link text-white p-3 mb-2 "><i class="fas fa-envelope text-light fa-lg mr-3"></i>Customer</a></li>
				<li class="nav-item"><a href="inboxadmindash.php" class="nav-link text-white p-3 mb-2 "><i class="fas fa-envelope text-light fa-lg mr-3"></i>Inbox</a></li>
				   <li class="nav-item"><a href="setadmindash.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-wrench text-light fa-lg mr-3"></i>Settings</a></li>
			
				
		</ul>
			</div>
			<!--end of sidebar-->
			
		</div>
	</div>
	</div> 
</nav>
		 <div id="booking" class="section">
    <div class="section-center">
      <div class="container">
        <div class="row">
          <div class="booking-form">
            <div class="form-header">
              <h1>Add Hall</h1>
            </div>

            <form action="#" method="post" >
              <div class="form-group">
                <span class="form-label">Hall no</span>
                <input class="form-control" name="hallno" type="text" required>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <span class="form-label">Street no</span>
                    <input class="form-control" name="streetno" type="text" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <span class="form-label">City</span>
                    <input class="form-control" name="city" type="text" required >
                  </div>
                </div>
				   <div class="col-sm-6">
                  <div class="form-group">
                    <span class="form-label">State</span>
                    <input class="form-control" name="state" type="text" required >
                  </div>
                </div>
				  
                 <div class="col-sm-6">
                  <div class="form-group">
                    <span class="form-label">Name</span>
                    <input class="form-control" name="name" type="text" required >
                  </div>
                </div>
				   <div class="col-sm-6">
                  <div class="form-group">
                    <span class="form-label">Status</span>
                    <input class="form-control" name="status" type="text" required >
                  </div>
                </div>
				   <div class="col-sm-6">
                  <div class="form-group">
                    <span class="form-label">Image</span>
                    <input class="form-control" name="img" type="file" required >
                  </div>
                </div>
              <div class="form-btn">
				  <span class="form-label">       </span>
				
                <button class="submit-btn " name="add">Add Hall</button>
              </div>
          </div>
		
			  </form>
			  			<?php
			if(isset($_POST['add']))
{
	$con=mysqli_connect('localhost','root','','project') or die(mysqli_error());
	$hallno = $_POST['hallno'];
	$streetno = $_POST['streetno'];
	$city = $_POST['city'];
	$state =  $_POST['state'];
	$name = $_POST['name'];
	$status=$_POST['status'];
				$img=$_POST['img'];
	$query = mysqli_query($con,"INSERT INTO marriagehall(`hallno`, `streetno`, `city`, `state`,`name`, `status`,`img`) VALUES('$hallno','$streetno','$city','$state','$name','$status','$img')") or die(mysqli_error($con));	
	echo "Hall added";
}
?>
	
			</div>

		  </div>
		</div>
			 </div>
		</div>
			
		<div id="booking" class="section">
    <div class="section-center">
      <div class="container">
        <div class="row">
          <div class="booking-form">
            <div class="form-header">
              <h1>Delete Hall</h1>
            </div>

            <form action="#" method="post" >
              <div class="form-group">
                <span class="form-label">Hall no</span>
                <input class="form-control" name="hallno" type="text" required>
              </div>
            
              <div class="form-btn">
				  <span class="form-label">       </span>
				
                <button class="submit-btn " name="del">Delete Hall</button>
              </div>
        
		
			  </form>
			  			<?php
			if(isset($_POST['del']))
{
	$con=mysqli_connect('localhost','root','','project') or die(mysqli_error());
	$hallno = $_POST['hallno'];
	$query = mysqli_query($con,"delete from marriagehall where hallno='".$hallno."'") or die(mysqli_error($con));	
	echo "Hall Deleted";
}
?>
	
			</div>

		  </div>
		</div>
			 </div>
		</div>
		
		
</body>
		</html>
	