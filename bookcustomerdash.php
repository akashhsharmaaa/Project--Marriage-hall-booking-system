
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
		<link rel="stylesheet" href="booking3.css">
		<link rel="stylesheet" href="admindash.css">
		<title>Customer dashboard</title>
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
			<a href="#" class="text-white">Customer</a>
		
			</div>
			<ul class="navbar-nav flex-column mt-4">
					   <li class="nav-item"><a href="customerdash.php" class="nav-link text-white p-3 mb-2 sidebar-link "><i class="fas fa-home text-light fa-lg mr-3"></i>Dashboard</a></li>
				  
				   <li class="nav-item"><a href="bookcustomerdash.php" class="nav-link text-white p-3 mb-2 current"><i class="fas fa-envelope text-light fa-lg mr-3"></i>Book hall</a></li>
				   <li class="nav-item"><a href="setcustomerdash.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-wrench text-light fa-lg mr-3"></i>Settings</a></li>
				  
				
		</ul>
			</div>
			<!--end of sidebar-->
		
			<!--top-nav-->
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
              <h1>Book a Hall</h1>
            </div>

            <form action="#" method="post">
             
              <div class="form-group">
                <span class="form-label">Destination</span>
                <input class="form-control" type="text" name="city" placeholder="Enter Location">
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <span class="form-label">Marriage Date</span>
                    <input class="form-control" type="date" name="date" required>
                  </div>
                </div>
                
              <div class="form-btn">
				  <span class="form-label">       </span>
				
                <button class="submit-btn " name="submit">Check availability </button>
              </div>
          </div>
			  </form>
			  
  
</div>
      </div>
    </div>	
		 </div>
		</div>	
					<?php
		session_start();
			  if(isset($_POST['submit']))
{
 $con=mysqli_connect('localhost','root','','project') or die(mysqli_error());
 
 $date=$_POST['date'];
				 global $city; 
				  $city=$_POST['city']; 
			  $query=mysqli_query($con,"select * from marriagehall where status='free' and city='".$city."'") or die(mysqli_error($con));
				
				  
while ($res=mysqli_fetch_array($query))
{
?>
		
		 <div id="booking1" class="section1">
    <div class="section-center1">
      <div class="container1">
        <div class="row1">
          <div class="booking-form1">
            <div class="form-header1">
              <h3>Hall details</h3>
            </div>
      
      <form action="#" method="post" >
        <table>
			
			<tr>
		  <div class="hallno">
          <label for="hallno">Hall no.:</label>
			 <?php echo $res['hallno'];?>
        </div>
			</tr>
			<tr>
        <div class="address">
          <label for="address">Address:</label> 
           <?php echo $res['streetno'];?>
        </div>
			</tr>
			<tr>
        <div class="name">
          <label for="name">Name:</label>
           <?php echo $res['name'];?>
        </div>
			</tr>
			
       			<div id="loader">
          <button type="btn" name="sub" class="btn btn-primary btn-lg btn-block loader-button">BOOK</button>
        </div>
		  </table>
      </form>
    </div>
		  </div>
		</div>
			 </div>
		</div>
		
	
		<?php
}
			  }
?>
	
		<?php
		
		if(isset($_POST['sub']))
		{
	$con=mysqli_connect('localhost','root','','project') or die(mysqli_error());
			$q=mysqli_query($con,"select * from marriagehall where status='free'");
			$r=mysqli_fetch_array($q);
		$query=mysqli_query($con,"update marriagehall set status='book' where hallno='".$r['hallno']."'") or die(mysqli_error($con));
			
			$query1=mysqli_query($con,"update customer set hall='".$r['hallno']."' where username='".$_SESSION['username']."'") or die(mysqli_error($con));
	echo "__________________________________________________________________________________HALLBOOKED_______________________________________________________________________";
		}
				  ?>	

	</body>
		</html>