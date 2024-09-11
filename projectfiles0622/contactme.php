<!DOCTYPE html>
<!--Template adapted from code found at https://startbootstrap.com/ -->
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Talk FCB - Contact</title>
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
        <!-- Masthead 
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
		<!-- Contact Section-->
		<br></br>
		<br></br>
        <section class="contact-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-line"></div>
                </div>
				<div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                        <form id="contactForm" name="sentMessage" novalidate="novalidate">
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Name</label>
                                    <input class="form-control" id="name" type="text" required="required" data-validation-required-message="Please enter your name." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Email Address</label>
                                    <input class="form-control" id="email" type="email" required="required" data-validation-required-message="Please enter your email address." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Phone Number</label>
                                    <input class="form-control" id="phone" type="tel" required="required" data-validation-required-message="Please enter your phone number." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Message</label>
                                    <textarea class="form-control" id="message" rows="5" required="required" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br />
                            <div id="success"></div>
							<center
								<div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Send</button></div>
							</center
                        </form>
                    </div>
                </div>
            </div>
        </section>
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
                    <!-- Social Media Links -->
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
