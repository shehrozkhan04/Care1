<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="Site keywords here">
	<meta name="description" content="">
	<meta name='copyright' content=''>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Title -->
	<title>CARE - Online Consultation Web</title>

	<!-- Favicon -->
	<link rel="icon" href="img/favicon.png">

	<!-- Google Fonts -->
	<link
		href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
		rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="css/nice-select.css">
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- icofont CSS -->
	<link rel="stylesheet" href="css/icofont.css">
	<!-- Slicknav -->
	<link rel="stylesheet" href="css/slicknav.min.css">
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="css/owl-carousel.css">
	<!-- Datepicker CSS -->
	<link rel="stylesheet" href="css/datepicker.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="css/animate.min.css">
	<!-- Magnific Popup CSS -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Medipro CSS -->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/responsive.css">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Inline CSS for login form styling -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #eaf4fb, #f9f9f9);
            display: block;
           height: 100%;
            margin: 0;
        }

        .login-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 400px;
            text-align: center;
            
        }

        .login-header {
            margin-bottom: 20px;
        }

        .login-header h1 {
            font-size: 24px;
            color: #0078ff;
            margin: 0;
            margin-bottom: 50px;
        }

        .login-form {
            width: 100%;
            margin-top: 20px;
        }

        .login-form label {
            font-size: 14px;
            text-align: left;
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .login-form input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
        }
        .login-main{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 60vh;
        }

        .login-form button {
            width: 100%;
            padding: 12px;
            background-color: #0078ff;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }
        .signup-btn a{
            width: 100%;
            padding: 12px;
            background-color: #0078ff;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }
        .signup-btn a:hover{
            background-color: #005bb5;
        }

        .login-form button:hover {
            background-color: #005bb5;
        }

        .forgot-password {
            text-align: left;
            font-size: 12px;
            margin-top: 5px;
            
        }

        .forgot-password a {
            color: #0078ff;
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        .signup-link {
            margin-top: 20px;
            font-size: 14px;
        }

        .signup-link a {
            color: #0078ff;
            text-decoration: none;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }

        /* Responsive design */
        @media (max-width: 480px) {
            .login-container {
                padding: 20px;
            }
            .login-main{
                height: 40vh;
            }

            .login-header h1 {
                font-size: 20px;
            }

            .login-form input,
            .login-form button {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

	<!-- Preloader -->
	<div class="preloader">
		<div class="loader">
			<div class="loader-outter"></div>
			<div class="loader-inner"></div>

			<div class="indicator">
				<svg width="16px" height="12px">
					<polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
					<polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
				</svg>
			</div>
		</div>
	</div>
	<!-- End Preloader -->

	<!-- Header Area -->
	<header class="header">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-5 col-12">
					</div>
					<div class="col-lg-6 col-md-7 col-12">
						<!-- Top Contact -->
						<ul class="top-contact">
							<li><i class="fa fa-envelope"></i><a
									href="mailto:eprojectcare.2@gmail.com">eprojectcare.2@gmail.com</a></li>
						</ul>
						<!-- End Top Contact -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-12">
							<!-- Start Logo -->
							<div class="logo">
								<a href="index.php">
									<h1>CA<span>RE</span></h1>
								</a>
							</div>
							<!-- End Logo -->
							<!-- Mobile Nav -->
							<div class="mobile-nav"></div>
							<!-- End Mobile Nav -->
						</div>
						<div class="col-lg-7 col-md-9 col-12">
							<!-- Main Menu -->
							<div class="main-menu">
								<nav class="navigation">
									<ul class="nav menu">
										<li><a href="index.php">Home</i></a>
										</li>
										<li><a href="alldoctors.php">Doctors </a></li>
										<li><a href="services.php">Services </a></li>
										<li><a href="login.php">Login </i></a>

										</li>
										<li><a href="signup.php">Sign Up <i class="icofont-rounded-down"></i></a>
											<ul class="dropdown">
												<li><a href="singupdoctor.php">Register as Doctor</a></li>
												<li><a href="patientsignup.php">Register as Patient</a></li>
											</ul>
										</li>
										<li><a href="contact.php">Contact Us</a></li>
									</ul>
								</nav>
							</div>
							<!--/ End Main Menu -->
						</div>
						<div class="col-lg-2 col-12">
							<div class="get-quote">
								<a href="appointment.php" class="btn">Book Appointment</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!-- End Header Area -->

<div class="login-main">
    <div class="login-container">
        <div class="login-header">
            <h1>Sign UP to CARE</h1>
        </div>

        
         <div class="signup-btn">
            <a href="singupdoctor.php">Register as Doctor</a><br><br><br>
            <a href="patientsignup.php">Register as Patient</a>
         </div>

        <div class="signup-link">
            <p>Already have an account?<a href="login.php">Log In</a></p>
        </div>
    </div>
</div>

    <!-- Footer Area -->
<footer id="footer" class="footer">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer">
                        <h2>About Us</h2>
                        <p>We are dedicated to providing compassionate care and medical excellence for all our patients. Our expert team works tirelessly to ensure your health and well-being are in the best hands.</p>
                        <!-- Social -->
                       
                        <!-- End Social -->
                    </div>
                </div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="single-footer f-link">
						<h2>Quick Links</h2>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<ul>
									<li><a href="index.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
									<li><a href="alldoctors.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Doctors</a></li>
									<li><a href="services.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Services</a></li>
									<li><a href="login.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Login</a></li>
									<li><a href="contact.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li>
								</ul>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<ul>
									<li><a href="singupdoctor.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Register as Doctor</a></li>
									<li><a href="patientsignup.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Register as Patient</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer">
                        <h2>Open Hours</h2>
                        <p>We are available during the following hours to assist with your health needs:</p>
                        <ul class="time-sidual">
                            <li class="day">Monday - Friday <span>24 Hours</span></li>
                            <li class="day">Saturday <span>24 Hours</span></li>
                            <li class="day">Sunday <span>Closed</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer">
                        <h2>Newsletter</h2>
                        <p>Subscribe to our newsletter to receive updates, medical news, and tips directly in your inbox.</p>
                        <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                            <input name="email" placeholder="Email Address" class="common-input" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'" required="" type="email">
                            <button class="button"><i class="icofont icofont-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Top -->
    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="copyright-content">
                        <p>© Copyright 2025 | All Rights Reserved by <a href="mailto:eprojectcare.2@gmail.com" target="_blank">eprojectcare.2@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright -->
</footer>
<!-- End Footer Area -->


				<!-- jquery Min JS -->
				<script src="js/jquery.min.js"></script>
				<!-- jquery Migrate JS -->
				<script src="js/jquery-migrate-3.0.0.js"></script>
				<!-- jquery Ui JS -->
				<script src="js/jquery-ui.min.js"></script>
				<!-- Easing JS -->
				<script src="js/easing.js"></script>
				<!-- Color JS -->
				<script src="js/colors.js"></script>
				<!-- Popper JS -->
				<script src="js/popper.min.js"></script>
				<!-- Bootstrap Datepicker JS -->
				<script src="js/bootstrap-datepicker.js"></script>
				<!-- Jquery Nav JS -->
				<script src="js/jquery.nav.js"></script>
				<!-- Slicknav JS -->
				<script src="js/slicknav.min.js"></script>
				<!-- ScrollUp JS -->
				<script src="js/jquery.scrollUp.min.js"></script>
				<!-- Niceselect JS -->
				<script src="js/niceselect.js"></script>
				<!-- Tilt Jquery JS -->
				<script src="js/tilt.jquery.min.js"></script>
				<!-- Owl Carousel JS -->
				<script src="js/owl-carousel.js"></script>
				<!-- counterup JS -->
				<script src="js/jquery.counterup.min.js"></script>
				<!-- Steller JS -->
				<script src="js/steller.js"></script>
				<!-- Wow JS -->
				<script src="js/wow.min.js"></script>
				<!-- Magnific Popup JS -->
				<script src="js/jquery.magnific-popup.min.js"></script>
				<!-- Counter Up CDN JS -->
				<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
				<!-- Bootstrap JS -->
				<script src="js/bootstrap.min.js"></script>
				<!-- Main JS -->
				<script src="js/main.js"></script>


                <script>
                    document.querySelector('.login-form').addEventListener('submit', function (e) {
                        e.preventDefault();  // Prevent actual form submission
                        var email = document.getElementById('email').value;
                        var password = document.getElementById('password').value;
            
                        if (email && password) {
                            alert("Login successful!");
                        } else {
                            alert("Please enter both email and password.");
                        }
                    });
                </script>
</body>

</html>