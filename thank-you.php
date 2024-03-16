<?php
session_start();
error_reporting(0);

  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BPMS-Thank You</title>
    
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
	   <?php include_once('includes/header.php');?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg-2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5">
            <h2 class="mb-0 bread">Thank You</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> Thank You<span> <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section ftco-no-pb">
    	<div class="container">
    		<div class="row no-gutters justify-content-center mb-5 pb-2">
          <div class="col-md-6 text-center heading-section ftco-animate">
          	<h4 class="w3ls_head">Thank you for applying. Your Appointment no is <?php echo $_SESSION['aptno'];?> </h4>
        </div>
    	</div>
			<div class="container-fluid p-0">
    		<div class="row no-gutters">
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/manicure1.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>Manicure</span>
	    					<h3>Nail Art</h3>
	    				</div>
	    				<a href="images/manicure1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/pedicure.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>Pedicure</span>
	    					<h3>Toes Art</h3>
	    				</div>
	    				<a href="images/pedicure.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/airbrushing.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>airbrushing </span>
	    					<h3>Nail Art</h3>
	    				</div>
	    				<a href="images/airbrushing.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/glitter.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>Glitter</span>
	    					<h3>Nail Art</h3>
	    				</div>
	    				<a href="images/glitter.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/gel.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>Gel</span>
	    					<h3>Manicure</h3>
	    				</div>
	    				<a href="images/gel.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/acrylic.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>Aryclic</span>
	    					<h3>Nail art</h3>
	    				</div>
	    				<a href="images/acrylic.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
				
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/free hand.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>Free Hand</span>
	    					<h3>Nail art</h3>
	    				</div>
	    				<a href="images/free hand.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/sticker.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>sticker and stenclis</span>
	    					<h3>Nail art</h3>
	    				</div>
	    				<a href="images/sticker.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    		</div>
    	</div>
		</section>

    <?php include_once('includes/footer.php');?>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>