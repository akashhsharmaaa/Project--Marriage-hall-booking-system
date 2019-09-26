<html lang="en">
<head>

<title>MARRY start your new life</title>
<meta name="description" content="Place to put your description text">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<link rel="stylesheet" href="base1.css">
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
              <li><a href="signup1.php">Signup</a></li>
          <li><a href="contact1.php"id="visited">Contact</a></li>
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
      <h3>Our team</h3>
    </header>
	  <hr class="separator1"/> 
  </div>
	</div>

	<header>
	<div class="container latest">
  <div class="one_third">
    <figure class="shadow"><a href="#" class="thumb"><img src="akash.jpg" alt="alt" /></a>
      <figcaption> <a href="#">
        <h3 class="heading">Akash sharma</h3>
        </a>
      </figcaption>
    </figure>
  </div>
  <div class="one_third">
    <figure class="shadow"><a href="#" class="thumb"><img src="abhi.jpg" alt="alt" /></a>
      <figcaption> <a href="#">
        <h3 class="heading">Abhishek singh </h3>
        </a>
      </figcaption>
    </figure>
  </div> 
  <div class="one_third lastcolumn">
    <figure class="shadow"><a href="#" class="thumb"><img src="arun.jpg" alt="alt" /></a>
      <figcaption> <a href="#">
        <h3 class="heading">Arun kumar</h3>
        </a>
      </figcaption>
    </figure>
  </div>
	</div>
	<div class="container latest">
  <div class="one_third">
    <figure class="shadow"><a href="#" class="thumb"><img src="aman.jpg" alt="alt" /></a>
      <figcaption> <a href="#">
        <h3 class="heading">Aman kumar</h3>
        </a>
      </figcaption>
    </figure>
  </div>
  <div class="one_third last column">
    <figure class="shadow"><a href="#" class="thumb"><img src="akshit.jpg" alt="alt" /></a>
      <figcaption> <a href="#">
        <h3 class="heading">Akshit kumar</h3>
        </a>
      </figcaption>
    </figure>
  </div> 
		</div>
 <hr class="separator1"/>
		<P></P>
	
<div class="container contact"> 
  <div class="one_third"> 
    <h3>Our Info</h3>
    <section class="first shadow">
      <ul>
        <li>Gla university, mathura</li>
        <li>Phone: (+91) 6394326721</li>
        <li>Email: <a href="#" title="">akash.sharma_bca17@gla.ac.in</a></li>
      </ul>
    </section>
  </div>
  <div class="sepContainer">
	  <div class="one_fourth"> 
    <div id="contactForm">
      <h3>Contact us</h3>
		<p></p>	
      <div class="sepContainer"></div>
      <form action="#" method="post" id="contact_form">
        <div class="name">
          <label for="name">Your Name:</label>
          <input id=name name=name type=text placeholder="Enter your full name" required />
        </div>
        <div class="email">
          <label for="email">Your Email:</label> 
          <input id=email name=email type=email placeholder="Enter your email" required />
        </div>
        <div class="message">
          <label for="message">Your Message:</label>
          <textarea id=message name=msg placeholder="Enter your message" rows=6 cols=10 required></textarea>
        </div>
        <div id="loader">
          <button type="btn" name="sub" class="btn btn-primary btn-lg btn-block loader-button">SUBMIT</button>
        </div>
      </form>
    </div>
  </div>
	</div>
	
   
		</div>
			<?php 
if(isset($_POST['sub']))
{
$con=mysqli_connect('localhost','root','','project') or die(mysqli_error());
	$name = $_POST['name'];
	$msg = $_POST['msg'];
	$emailaddress = $_POST['email'];
	$query=mysqli_query($con,"INSERT INTO `inbox`(`name`, `emailaddress`, `msg`)VALUES('$name','$emailaddress','$msg')");
echo "Message sent to administrator";
}
   ?>
   
	<P></P>
 <hr class="separator1"/>
<div class="breadcrumbs">
  <div class="container">
    <header>
      <h3>OUR LOCATION</h3>
      
    </header>
  </div>
  <hr class="separator1"/>
</div>
		 <hr class="separator1"/>
	<section class="map"> 
  <div class="map-holder">
    <div class="map-container">
      <iframe class="map" src="https://www.google.co.in/maps/place/GLA+University/@27.6056934,77.5911358,17z/data=!3m1!4b1!4m5!3m4!1s0x39736ce47bffc039:0xfe5fc3da92c6341!8m2!3d27.6056887!4d77.5933245"></iframe>
    </div> 
  </div>
</section>
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
</div>
<div class="footer">
  <div class="container">
    <div class="one_fourth">
      <h3>Contact Informations</h3>
      <p><span class="orange"><strong>Address:</strong></span> <br>
        Gla university</p>
      <p><span class="orange"><strong>Phone:</strong></span> <br>
        +91 6394326721<br>
      </p>
      <p><span class="orange"><strong>Email:</strong></span> <br>
      akash.sharma_bca17@gla.ac.in<br>
      </p>
    </div>
    <div class="one_fourth lastcolumn">
      <h3>About</h3>
      <p>"Marry,Start your new life" help to find best marriage hall in your city to make marriage day best day of your life</p>
    </div>
  </div>
</div>
	</header>
	
	</body>
</html>