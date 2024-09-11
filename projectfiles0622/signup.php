<?php
// Include config file
require_once "configuration.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<!--Template adapted from code found at https://startbootstrap.com/ -->
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Talk FCB - Sign-Up</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.php">Talk FCB</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="news.php">News</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="discussion.php">Discuss</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.php">Login</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="contactme.php">Contact Me</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Home Background 
        <header class="masthead">
            <div class="container h-100" style='padding-top: 10rem ; padding-bottom:calc(10rem - 4.5rem) ; background:linear-gradient(to bottom, rgba(18, 14, 15, 0.8) 0%, rgba(18, 14, 15, 0.8) 100%), url("assets/img/talkfcbhead.jpg"); background-position: center ; background-repeat: no-repeat ; background-attachment: scroll ; background-size: cover ; max-width: 2000px ; max-height:2000px';>
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">Let's Talk FCB</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">Your place to discuss everything FC Barcelona, Visca El Barca!</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger"; style="color:#!important;" href="signup.php">Become A Culer</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Youtube Link 
        <section class="channellink">
			<center>
				<a href="https://www.youtube.com/user/TalkFCB" target="_blank">
					<img alt="youtube logo hd" src="https://www.freepnglogos.com/uploads/youtube-logo-hd-8.png"
					width="100" height="70">
				</a>
			</center>
        </section>
		<!-- sign up form -->
			<header class="masthead">
				<div class="container h-100" style='padding-top: 10rem ; padding-bottom:calc(10rem - 4.5rem) ; background:linear-gradient(to bottom, rgba(18, 14, 15, 0.8) 0%, rgba(18, 14, 15, 0.8) 100%), url(assets/img/noucamp.jpg); background-position: center ; background-repeat: no-repeat ; background-attachment: scroll ; max-width: 1920px ; max-height:1080px';>
					<center>
						<div id="signupform">
							<div class="regform">
								<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
									<img class="mb-4" src="assets/img/barcalogo.png" alt="" width="100" height="100">
									<div class="form-group">
										<label>Username</label>
										<input type="text" name="username" class="form-control" style="width:500px" <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
										<span class="invalid-feedback"><?php echo $username_err; ?></span>
									</div>    
									<div class="form-group">
										<label>Password</label>
										<input type="password" name="password" class="form-control" style="width:500px" <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
										<span class="invalid-feedback"><?php echo $password_err; ?></span>
									</div>
									<div class="form-group">
										<label>Confirm Password</label>
										<input type="password" name="confirm_password" class="form-control" style="width:500px" <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
										<span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
									</div>
									<div class="form-group">
										<input type="submit" class="btn btn-primary" value="Submit">
										<input type="reset" class="btn btn-secondary ml-2" value="Reset">
									</div>
									<p>Already have an account? <a href="login.php">Login here</a>.</p>
								</form>
							</div>
						</div>
					</center>
				</div>
			</header>
        <!-- Player Images -->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="https://www.fcbarcelona.com/en/football/first-team/players/4974/lionel-messi" target="_blank">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="..." />
                            <div class="portfolio-box-caption">
							<div class="project-category text-white-100">Lionel Messi</div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="https://www.fcbarcelona.com/en/football/first-team/players/2737/gerard-pique" target="_blank">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/2.jpg" alt="..." />
                            <div class="portfolio-box-caption">
							<div class="project-category text-white-100">Gerard Piqué</div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="https://www.fcbarcelona.com/en/football/first-team/players/19780/ousmane-dembele" target="_blank">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpg" alt="..." />
                            <div class="portfolio-box-caption">
							<div class="project-category text-white-100">Ousmane Dembélé</div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="https://www.fcbarcelona.com/en/football/first-team/players/4963/sergio-busquets" target="_blank">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/4.jpg" alt="..." />
                            <div class="portfolio-box-caption">
							<div class="project-category text-white-100">Sergio Busquets</div>
                             
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="https://www.fcbarcelona.com/en/football/first-team/players/66735/anssumane-fati" target="_blank">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/5.jpg" alt="..." />
                            <div class="portfolio-box-caption">
							<div class="project-category text-white-100">Ansu Fati</div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="https://www.fcbarcelona.com/en/football/first-team/players/50910/ricard-puig" target="_blank">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/6.jpg" alt="..." />
                            <div class="portfolio-box-caption p-3">
							<div class="project-category text-white-100">Riqui Puig</div>
                                
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
		<footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Social Media Icons -->
                    <div class="col">

                        <h4 style="width:100;margin:0 auto; ;padding:0.8em ">SOCIALS</h4>
						<a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/talkfcb"><i class="fab fa-instagram"></i></a><a class="btn btn-outline-light btn-social mx-1" href="https://www.twitter.com/talkfcb_"><i class="fab fa-fw fa-twitter"></i></a><a class="btn btn-outline-light btn-social mx-1" href="https://www.youtube.com/TalkFCB"><i class="fab fa-youtube"></i></a>
                  
					</div>

               				
                </div>
            </div>	
        </footer>
        <footer class="bg-light py-5">
            <div class="container">
                <div class="small text-center text-muted">
                    FCBNewsroom &copy;
                    <!-- This script automatically adds the current year to your website footer-->
                    <!-- (credit: https://updateyourfooter.com/)-->
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    - Jeffin Joseph
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js">
				/*!
		* Start Bootstrap - Freelancer v6.0.6 (https://startbootstrap.com/theme/freelancer)
		* Copyright 2013-2021 Start Bootstrap
		* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-freelancer/blob/master/LICENSE)
		*/
		<!-- Javacript error clashing with school network firewall 
		<script src="js/scripts.js">
		(function ($) {
			"use strict"; // Start of use strict

			// Smooth scrolling using anime.js
			$('a.js-scroll-trigger[href*="#"]:not([href="#"])').on('click', function () {
				if (
					location.pathname.replace(/^\//, "") ==
					this.pathname.replace(/^\//, "") &&
					location.hostname == this.hostname
				) {
					var target = $(this.hash);
					target = target.length ?
						target :
						$("[name=" + this.hash.slice(1) + "]");
					if (target.length) {
						anime({
							targets: 'html, body',
							scrollTop: target.offset().top - 72,
							duration: 1000,
							easing: 'easeInOutExpo'
						});
						return false;
					}
				}
			});

			// Scroll to top button appear
			$(document).scroll(function () {
				var scrollDistance = $(this).scrollTop();
				if (scrollDistance > 100) {
					$('.scroll-to-top').fadeIn();
				} else {
					$('.scroll-to-top').fadeOut();
				}
			});

			// Closes responsive menu when a scroll trigger link is clicked
			$('.js-scroll-trigger').click(function () {
				$('.navbar-collapse').collapse('hide');
			});

			// Activate scrollspy to add active class to navbar items on scroll
			$('body').scrollspy({
				target: '#mainNav',
				offset: 80
			});

			// Collapse Navbar
			var navbarCollapse = function () {
				if ($("#mainNav").offset().top > 100) {
					$("#mainNav").addClass("navbar-shrink");
				} else {
					$("#mainNav").removeClass("navbar-shrink");
				}
			};
			// Collapse now if page is not at top
			navbarCollapse();
			// Collapse the navbar when page is scrolled
			$(window).scroll(navbarCollapse);

			// Floating label headings for the contact form
			$(function () {
				$("body").on("input propertychange", ".floating-label-form-group", function (e) {
					$(this).toggleClass("floating-label-form-group-with-value", !!$(e.target).val());
				}).on("focus", ".floating-label-form-group", function () {
					$(this).addClass("floating-label-form-group-with-focus");
				}).on("blur", ".floating-label-form-group", function () {
					$(this).removeClass("floating-label-form-group-with-focus");
				});
			});

		})(jQuery); // End of use strict

				
		</script>
		-->
		
    </body>
</html>