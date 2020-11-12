<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>section notice board</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script> 

	
  
  
    </head>
  
  
  <body>

  	
    
	<!-- header part start -->
	
	<header id="header_part">
		<div class="container">
			<div class="row">
				<div class="col-md-4 logo"> 
					<div class="heading_left">
						<ul>
							<li>
								<a href= "https://mbstu.ac.bd/" target="_blank"><img src="images/mbstu_logo.jpg" alt="MBSTU logo " width="42" height="40"></a>
							</li>
							<li>
								<a href= "https://ict.mbstu.ac.bd/" target="_blank"><img src="images/dept_logo.png" alt="MBSTU logo " width="42" height="40"></a>
							</li>
						</ul>
						
					</div>
					
				</div>
			
				<div class="col-md-4"> 
					<div class="heading_middle">
					
						<ul>
							<li>
								
								<a class = "login_button" href = "login_logout/index.php"><button  type="button" class="btn btn-info">LOGIN</button></a>
							</li>
							<li>
								<a class = "register_button" href = "login_logout/regform.php"><button type="button" class="btn btn-outline-success">Register</button></a>
							</li>
						</ul>
						
					</div>
					
				</div>
			
				<div class="col-md-4"> 
					<div class="heading_right">
					
						<form class="form-inline">
							<input class="form-control" type="search" placeholder="Search" aria-label="Search">
							<button class="btn btn-outline-success" type="submit">Search</button>
						</form>
						
					</div>
				</div>
			
			</div>
		</div>	
	</header>
	
	<!-- header part end -->
	
	
	
    
<!-- navbar part start -->
    
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: purple; width:1100;">
		  
		<a class="navbar-brand" href="index.php"><img src="images/logo.png" class="" alt="LOGO of website" width="400" height="100" ></a>
		
	
		 <!-- Links -->
				<ul class="navbar-nav ml-auto text-dark bg-light">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="about_us.php">About us</a>
					</li>

					<!-- Dropdown -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						Important links
						</a>
						<div class="dropdown-menu">
								<a class="dropdown-item" href="" target="_blank">Class schedule</a>
								<a class="dropdown-item" href=""target="_blank">Exam routine</a>
							
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Help</a>
					</li>
				  </ul>
		</nav>
	

<!-- navbar part end -->

  
	<!-- slide part start -->

	<section>
	
	<div id="demo" class="carousel slide" data-ride="carousel">

	  <!-- Indicators -->
	  <ul class="carousel-indicators">
		<li data-target="#demo" data-slide-to="0" class="active"></li>
		<li data-target="#demo" data-slide-to="1"></li>
		<li data-target="#demo" data-slide-to="2"></li>
	  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class = "d-block w-100" src="images/1.jpg" alt="cse">
    </div>
    <div class="carousel-item">
      <img class = "d-block w-100" src="images/2.jpg" alt="cse">
    </div>
	 <div class="carousel-item">
      <img class = "d-block w-100" src="images/3.jpg" alt="cse">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
	
	</section>

	<!-- slide part  end -->
	
	
	
	<!--footer part start -->

				
<footer>


	<div class="card bg-light mb-3" style="max-width: 120rem;">
  <div class="card-header"><h1><center>Section Notice Board </center></h1></div>
  <div class="card-body">
    <h6 class="card-title"><center>Developed by Shohag Shadaf And Al Amin <br>  Batch : ICT-13 <center></h6>
    <p class="card-text"><center>&copy; 2019 section-notice-board  -  All Rights Reserved</center> <br></p>
  </div>
</div>
	
  <center><h2 class = "follow" > Follow us on  </h2></center>
  <center>
 <a class="fa " href= "https://www.facebook.com/shohagshadaf" target="_blank"><img src="images/facebook.png" alt="facebook " width="30" height="30"></a>
  <a class="fa " href= "" target="_blank"><img src="images/youtube.png" alt="youtube" width="30" height="30"></a>
  <a class="fa " href= "" target="_blank"><img src="images/twitter.png" alt="twitter " width="30" height="30"></a>
  <a class="fa " href= "" target="_blank"><img src="images/google-logo.png" alt="google - logo " width="30" height="30"></a>
  </center>

</footer>
		
	
	<!--footer part end -->


  
  <br><br><br><br><br>
  


  </body>
</html>