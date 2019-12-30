<!DOCTYPE html>
<html>
<?php
	session_start();
  if (!$_SESSION["is_login"] == true)
    {
      $_SESSION["is_login"] = false;
    }
	if (isset($_GET['lout']) && $_GET['lout'] == "logout") {
		session_destroy();
		$_SESSION["is_login"] = false;
	}
?>
	<head>
		<title> OFUS.com </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

    

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">
	</head>
	
	

	<body>
	
		 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <h1 class="navbar-brand" href="#"><center><strong><h1><p> Online Facilities of University Students </p></strong></center></h1>
		<center><h2><p> (OFUS) </p></h2></center>
		
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
			<?php
				if ($_SESSION["is_login"] == true)
				{
			?>
            <li class="nav-item">
              <a class="nav-link" href="myaccount.php">My Account</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="?lout=logout">Logout</a>
            </li>
			<?php 
				} else {
			?>
			<li class="nav-item">
              <a class="nav-link" href="sign.html">Sign up & Login</a>
            </li>
			<?php 
				}
			?>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


	
    
      <div class="container">
        
		
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <center><h3>Categories</h3></center>

      <div class="row text-center text-lg-left">

        <div class="col-lg-3 col-md-4 col-xs-6">
          <center><a href="data.php?catName=Books" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/book.jpg" alt="" title="Books">Books
          </a></center>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <center><a href="data.php?catName=Clothes" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/clothes.jpg" alt="" title="Clothes">Clothes
		  </a></center>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <center><a href="data.php?catName=Electronics" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/Electronics.jpg" alt="" title="Electronics">Electronics
		  </a></center>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <center><a href="data.php?catName=Home_Goods" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/home goods profile.jpg" alt="" title="Home Goods">Home Goods
		  </a></center>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <center><a href="data.php?catName=Homes" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/home.jpg" alt="" title="Homes">Homes
		  </a></center>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <center><a href="data.php?catName=Jobs" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/job.jpg" alt="" title="Jobs">Jobs
		  </a></center>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <center><a href="data.php?catName=Others" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/Other.jpg" alt="" title="Others">Others
		  </a></center>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <center><a href="data.php?catName=Services" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/services.jpg" alt="" title="Services">Services
		  </a></center>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <center><a href="data.php?catName=Sports_Equipment" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/sports.jpg" alt="" title="Sports Equipment">Sports Equipment
		  </a></center>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <center><a href="data.php?catName=Vehicles" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/vehicles.jpg" alt="" title="Vehicles">Vehicles
		  </a></center>
        </div>
        
      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <!-- /.container -->
    </footer>
	
	</body>

</html>
