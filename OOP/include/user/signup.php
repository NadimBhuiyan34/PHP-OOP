<?php 
 
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
   $fname=$_POST['fname'];
   $date=$_POST['date'];
   $mobile=$_POST['mobile'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $image=$_FILES['image'];
   echo $fname;

 
 }


?> 


<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>Donate Book|UBoighar</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/496c26838e.js" crossorigin="anonymous"></script>
<style>
    *[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    border-radius: 0.3em;
    background-color: #f2f2f2;
}

*[role="form"] h2 { 
    font-family: 'Open Sans' , sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: #000000;
    margin-top: 5%;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4px;
}
</style>
</head>

<body id="top">

<!-- <header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2"></i>support@uboighar.com</a></li>
						<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Address DHAKA Bangladesh </li>
					</ul>
				 
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="tel:+23-345-67890" >
							 
							<ul class="d-flex justify-content-end mt-2">
							 
								<i class="fa-brands fa-facebook" style="margin-right: 20px"></i>
								<i class="fa-brands fa-twitter" style="margin-right: 20px;"></i>
								<i class="fa-brands fa-linkedin" style="margin-right: 20px;"></i>
								<i class="fa-brands fa-instagram" style="margin-right: 20px;"></i>
						 
							 
						</ul>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	 <a class="navbar-brand" href="home.html">
			  	<img src="images/uboighar.png" alt="" class="img-fluid">
			  </a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			   
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="department.html" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">BUY BOOK <i class="icofont-thin-down"></i></a>
				<ul class="dropdown-menu" aria-labelledby="dropdown02">
					<li><a class="dropdown-item" href="best_sellbook.html">BEST SELL BOOK</a></li>
					<li><a class="dropdown-item" href="new_collection_book.html">NEW COLLECTION</a></li>
					<li><a class="dropdown-item" href="old_book.html">OLD BOOK</a></li>
					<li><a class="dropdown-item" href="get_donatebook.html">GET DONATE BOOK</a></li>
				</ul>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="sellbook.html">SELL BOOK</a></li>
			    <li class="nav-item"><a class="nav-link" href="requestbook.html">REQUEST BOOK</a></li>
			    <li class="nav-item"><a class="nav-link" href="donatebook.html">DONATE  BOOK</a></li>
                <li class="nav-item"><a class="nav-link" href="earnmoney.html">ERAN MONEY</a></li>

			    

			  	<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="doctor.html" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PAGE <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown03">
						<li><a class="dropdown-item" href="aboutus.html">ABOUT US</a></li>
						<li><a class="dropdown-item" href="contactus.html">CONTACT US</a></li>
						<li><a class="dropdown-item" href="donatebook.html">DONATE BOOKS</a></li>
						<li><a class="dropdown-item" href="events.html">EVENTS</a></li>
						<li><a class="dropdown-item" href="FAQ.html">FAQ</a></li>
						 
					</ul>
			  	</li>
			</li>
			<li>
			    <a href="cart.html"> <i class="fa-solid fa-cart-plus" style="margin-top:15px;color: #000000;"></i></a>
		   </li>
			<li>
			 <a href="login.html">  <i class="fa-solid fa-user" style="margin-top:15px; margin-left: 20px;color: #000000;"></i></a>
		   </li>
			   
			   
			</ul>
		  </div>
		</div>
	</nav>
</header>
	 -->
	 <?php   include "include/header.php"?>


<!-- Slider Start -->
 
	 
 <div class="container">
     <div class="card col-6 " style="margin-left:300px ;">
         <div class="card-header mt-2">
             <h3 class="text-center rounded-pill">Register</h3>
         </div>
         <div class="card-body">
            <form action="" method="POST"  enctype="multipart/form-data">
                <div class="mb-3 mt-3">
                  <label for="name" class="form-label">Full Name</label>
                  <input type="text" class="form-control" id="email" placeholder="Enter Full Name" name="fname">
                </div>
               
                <div class="mb-3 mt-3">
                  <label for="birth" class="form-label">Date of Birth</label>
                  <input type="date" class="form-control" id="email" placeholder="Enter Email" name="date">
                </div>
                <div class="mb-3 mt-3">
                  <label for="mobile" class="form-label">Mobile Number</label>
                  <input type="tel" class="form-control" id="email" placeholder="Enter Mobile Number" name="mobile">
                </div>
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                  </div>
                <div class="mb-3">
                  <label for="pwd" class="form-label">Password:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                </div>
                <div class="mb-3 mt-3">
                    <label for="image" class="form-label">Your Image</label>
                    <input type="file" class="form-control" id="email" placeholder="Enter Email" name="image">
                  </div>
                <div class="mb-3 mt-3">
                    <label for="address" class="form-label">Your Address</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter Address" name="email">
                  </div>
                <!-- <button type="submit" class="btn btn-primary">Register</button><br><br> -->
				<button type="submit" class="btn btn-primary" name="submit">
				Register
				  </button>
                <a href="login.html" class="text-info">Back to Login</a>
              </form>
         </div>
     </div>
 </div>
 
 
 
 <div class="modal fade" id="myModal">
	<div class="modal-dialog">
	  <div class="modal-content">
  
		<!-- Modal Header -->
		<div class="modal-header">
		 
		  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
		</div>
  
		<!-- Modal body -->
		<div class="modal-body">
			<div class="alert alert-success">
               
				<strong>Successfully Registered</strong> 
				</div>
		</div>
  
		<!-- Modal footer -->
		 
  
	  </div>
	</div>
  </div>
  
				 
			 
			 

	 
<!-- footer Start -->
<!-- <footer class="footer section bg-white">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mr-auto col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<div class="logo mb-4">
						<img src="images/uboighar.png" alt="" class="img-fluid">
					</div>
					<p>Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur veritatis eveniet distinctio possimus.</p>

					<ul class="list-inline footer-socials mt-4">
						<li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i class="icofont-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/themefisher"><i class="icofont-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i class="icofont-linkedin"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
				 
					<div class="divider mb-4"></div>

				 
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Support</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Company Support </a></li>
						<li><a href="#">FAQuestions</a></li>
						<li><a href="#">Company Licence</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget widget-contact mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Get in Touch</h4>
					<div class="divider mb-4"></div>

					<div class="footer-contact-block mb-4">
						<div class="icon d-flex align-items-center">
							<i class="icofont-email mr-3"></i>
							<span class="h6 mb-0">Support Available for 24/7</span>
						</div>
						<h4 class="mt-2"><a href="tel:+23-345-67890">Support@email.com</a></h4>
					</div>

					<div class="footer-contact-block">
						<div class="icon d-flex align-items-center">
							<i class="icofont-support mr-3"></i>
							<span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
						</div>
						<h4 class="mt-2"><a href="tel:+23-345-67890">+23-456-6588</a></h4>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-btm py-4 mt-5">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6">
					<div class="copyright">
						&copy; Copyright Reserved to <span class="text-color">Novena</span> by <a href="https://themefisher.com/" target="_blank">Themefisher</a>
					</div>
				</div>
				 
			</div>

			<div class="row">
				<div class="col-lg-4">
					<a class="backtop js-scroll-trigger" href="#top">
						<i class="icofont-long-arrow-up"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer> -->
<?php include "include/footer.php"?>	
   

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/counterup/jquery.easing.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="js/script.js"></script>
    <script src="js/contact.js"></script>
	 
  </body>
  </html>
  