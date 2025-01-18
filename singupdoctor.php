<!DOCTYPE html>
<html lang="en">
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
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
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
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f4f4f9;
            width: 100%;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .signup{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 160vh;
        }


        .signup-form {
            background-color: white;
            width: 100%;
            max-width: 500px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .signup-form h1 {
            font-size: 26px;
            margin-bottom: 20px;
            text-align: center;
            color: #1a76d1;
            font-family: "Poppins", sans-serif;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-family: "Poppins", sans-serif;
        font-weight: 500;
            color: #000000;
        }
select {
    font-weight: 300;
}
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid gray;
            border-radius: 4px;
            outline: none;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: none;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        .form-group input[type="file"] {
            padding: 5px;
        }

        .submit-btn {
            width: 100%;
            padding: 12px;
            background-color: #1a76d1;
            color: white;
            font-size: 16px;
            font-weight: 600;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #155a9a;
        }
        
        @media (max-width: 600px) {
            .signup-form {
                padding: 15px;
            }

            .signup-form h1 {
                font-size: 20px;
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
                                        <li><a href="alldoc.php">Doctors </a></li>
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
                        <div class="col-lg-2 col-12"
                            style="display: flex; align-items: center; justify-content: center; gap: 10px; margin-top: 10px;">
                            <input style="border-radius: 30px; padding-left: 20px;  font-size: 12px; " type="search"
                                name="" id="" placeholder="Search">
                            <button style="background-color: transparent; border: none;">
                                <i class="ri-search-line" style="font-size: 1.7vw; cursor: pointer;"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!-- End Header Area -->

    <div class="signup">
        <form class="signup-form" action="/submit-doctor-signup" method="POST" enctype="multipart/form-data">
            <h1>DOCTOR SIGNUP IN CARE</h1>
           
    
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            </div>
    
            <div class="form-group">
                <label for="specialization">Specialization</label>
                <select id="specialization" name="specialization" required>
                    <option value="">Select your specialization</option>
                    <option value="Cardiologist">Cardiologist</option>
                    <option value="Dermatologist">Dermatologist</option>
                    <option value="Neurologist">Neurologist</option>
                    <option value="Pediatrician">Pediatrician</option>
                    <option value="Orthopedic Surgeon">Orthopedic Surgeon</option>
                    <option value="Other">Other</option>
                </select>
            </div>
    
            <div class="form-group">
                <input type="number" id="experience" name="experience" placeholder="Enter your years of experience" required>
            </div>
    
            <div class="form-group">
                <label for="bio">Short Bio</label>
                <textarea id="bio" name="bio" placeholder="Write a short bio about yourself" required></textarea>
            </div>
    
            <div class="form-group">
                <label for="cv">Upload Picture</label>
                <input type="file" id="cv" name="picture" required>
            </div>
    
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
    
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Create a password" required>
            </div>
    
            <button type="submit" class="submit-btn" name="submit">Sign Up</button>
        </form>
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
									<li><a href="alldoc.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Doctors</a></li>
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


                <!-- ============================php==================================== -->

                <?php
                    if(isset($_POST["submit"])){
                        
                    }
                ?>
</body>

</html>