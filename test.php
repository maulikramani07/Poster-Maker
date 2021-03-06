<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Uniocde -->
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA Compatible" content="IE=edge">
    <![endif]-->
    <!-- First Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Pgae Description -->
    <meta name="description" content="Poster Maker portfolio Template">
    <!-- Page Kewords -->
    <meta name="keywords" content="Poster Maker">
    <!-- Site Author -->
    <meta name="author" content="Poster Maker">
    <!-- Title -->
    <title>Poster Maker</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="assets/css/swiper.min.css" type="text/css">
    <!-- Fonts -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/font-awesome.min.css">
    <!-- OWL Carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" type="text/css">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="assets/css/animate.min.css" type="text/css">
    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>
<body>
<?php
	session_start();
 	include('lang.php');
 	
 	if(!isset($_SESSION['check']))
 	{
 		if(!isset($_GET['lang']))
 		{
 			$select='en';
 		}
 		else
 		{
 			$select=$_GET['lang'];
 		}
 		$_SESSION['check']=$select;
 	}
 	else
 	{
 		if(isset($_GET['lang'])){
 			$_SESSION['check']=$_GET['lang'];
 		}
 		$select=$_SESSION['check'];
 	}
 ?>

 <!-- Section Preloader -->
	<div id="section-preloader">
		<div class="boxes">
		    <div class="box">
		        <div></div>
		        <div></div>
		        <div></div>
		        <div></div>
		    </div>
		    <div class="box">
		        <div></div>
		        <div></div>
		        <div></div>
		        <div></div>
		    </div>
		    <div class="box">
		        <div></div>
		        <div></div>
		        <div></div>
		        <div></div>
		    </div>
		    <div class="box">
		        <div></div>
		        <div></div>
		        <div></div>
		        <div></div>
		    </div>
		</div>
		<p style="color: #2a2a49;">LOADING . . .</p>
	</div>
	<!-- /.Section Preloader -->
	<!-- Section Navbar -->
	<nav class="navbar-1 navbar navbar-expand-lg">
        <div class="container navbar-container">
            <a class="navbar-brand" href="index.html"><img src="assets/images/logo1.png" alt="Poster Maker"></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                	<li class="nav-item dropdown-submenu dropdown">
                        <a class="nav-link scroll-down" href="#">
                            <?php echo $lang[$select]['Home']; ?>
                        </a>
                    </li>
	                <li class="nav-item">
	                    <a href="#section-features1" class="nav-link scroll-down"><?php echo $lang[$select]['Features']; ?></a>
	                </li>
	                <li class="nav-item">
	                    <a href="#video" class="nav-link scroll-down"><?php echo $lang[$select]['Video']; ?></a>
	                </li>
	                <li class="nav-item dropdown-submenu dropdown">
                        <a class="dropdown-item dropdown-toggle nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $lang[$select]['Poster']; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="poster_category1.php ?>" class="dropdown-item"><?php echo $lang[$select]['Poster Category']; ?></a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
	                    <a href="whats_new1.php" class="nav-link"><?php echo $lang[$select]['What\'s New']; ?></a>
	                </li>
	                <li class="nav-item">
	                    <a href="contact1.php" class="nav-link"><?php echo $lang[$select]['Contact']; ?></a>
	                </li>
                </ul>
            </div>
             <a href="how_to_use1.php" class="btn-1 shadow1 style3 bgscheme"><?php echo $lang[$select]['How To Use']; ?></a>
            <button type="button" id="sidebarCollapse" class="navbar-toggler active" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <!-- container -->
    </nav>
<div class="clearfix"></div>
	<!-- /.Section Navbar -->
	<!-- Section Slider 1 -->
    <div id="section-slider1">
	  	<div class="swiper-container">
		    <div class="swiper-wrapper d-none">
		    	<!-- Item -->
				<div class="swiper-slide">
					<div class="slider-content">
						<div class="container">
							<div class="row">
								<div class="left col-12 col-sm-12 col-md-7">
									<h1 class="ez-animate" data-animation="fadeInLeft"><?php echo $lang[$select]['Poster Maker, Banner, Flyer, Ads, Card Designer']; ?></h1>
									<p class="ez-animate" data-animation="fadeInLeft"><?php echo $lang[$select]['Make amazing poster with Poster Maker. Try Now!!']; ?></p>
									<ul>
										<li><a href="#"><img class="img-fluid ez-animate" src="assets/images/img-appstore1.png" alt="Poster Maker" data-animation="fadeInUp"></a></li>
										<li><a href="https://play.google.com/store/apps/details?id=app.poster.maker.postermaker.flyer.designer"><img class="img-fluid ez-animate" src="assets/images/img-googleplay1.png" alt="Poster Maker" data-animation="fadeInUp"></a></li>
									</ul>
								</div>
								<div class="right ez-animate col-12 col-sm-12 col-md-5" data-animation="fadeInRight">
									<img class="img-fluid" src="assets/images/img-1a.png" alt="Poster Maker">
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.Item -->
		    </div>
		</div>
	</div>
	<!-- /.Section Slider 1 -->
	
	<!-- Section Features 1 -->
	<div id="section-features1">
		<div class="container">
			<div class="row">
				<div class="left">
					<h6 class="clscheme"><?php echo $lang[$select]['Checkout features']; ?></h6>
					<h2><?php echo $lang[$select]['The only app you will need']; ?></h2>
					<!-- <ul>
						<li><i class="fa fa-long-arrow-left clscheme"></i></li>
						<li><i class="fa fa-long-arrow-right clscheme"></i></li>
					</ul> -->
				</div>
				<div class="right">
					<div class="swiper-container features1">
						<div class="swiper-wrapper">
							<!-- Item -->
							<div class="swiper-slide">
								<div class="item">
									<img src="assets/images/img-ico1.png" alt="Poster Maker">
									<h3>2000+ <?php echo $lang[$select]['Font\'s']; ?></h3>
									<p><?php echo $lang[$select]['Font Info']; ?> </p>
								</div>
							</div>
							<!-- /.Item -->
							<!-- Item -->
							<div class="swiper-slide">
								<div class="item">
									<img src="assets/images/img-ico2.png" alt="Poster Maker">
									<h3>5000+ <?php echo $lang[$select]['Sticker\'s']; ?></h3>
									<p><?php echo $lang[$select]['Sticker Info']; ?></p>
								</div>
							</div>
							<!-- /.Item -->
							<!-- Item -->
							<div class="swiper-slide">
								<div class="item">
									<img src="assets/images/img-ico3.png" alt="Poster Maker">
									<h3><?php echo $lang[$select]['Background']; ?></h3>
									<p><?php echo $lang[$select]['Background Info']; ?></p>
								</div>
							</div>
							<!-- /.Item -->
							<!-- Item -->
							<div class="swiper-slide">
								<div class="item">
									<img src="assets/images/img-ico4.png" alt="Poster Maker">
									<h3><?php echo $lang[$select]['Effect\'s']; ?></h3>
									<p><?php echo $lang[$select]['Effect Info']; ?></p>
								</div>
							</div>
							<!-- /.Item -->
							<!-- Item -->
							<div class="swiper-slide">
								<div class="item">
									<img src="assets/images/img-ico5.png" alt="Poster Maker">
									<h3><?php echo $lang[$select]['Text Edit']; ?></h3>
									<p><?php echo $lang[$select]['Text Edit Info']; ?></p>
								</div>
							</div>
							<!-- /.Item -->
							<!-- Item -->
							<div class="swiper-slide">
								<div class="item">
									<img src="assets/images/img-ico6.png" alt="Poster Maker">
									<h3><?php echo $lang[$select]['Save and share']; ?></h3>
									<p><?php echo $lang[$select]['Save and share Info']; ?></p>
								</div>
							</div>
							<!-- /.Item -->
						</div>
					</div>
				</div>
				<div class="left" style="top: 350px;">
					<ul>
						<li><i class="fa fa-long-arrow-left clscheme"></i></li>
						<li><i class="fa fa-long-arrow-right clscheme"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- /.Section Features 1 -->
	<!-- Features Wrap -->
	<div class="features-wrap">
		<!-- Section Features 2 -->
		<div id="section-features2" style="padding: 0px;">
			<div class="container">
				<div class="row">
					<div class="left col-sm-12 col-md-6">
						<div class="img-container">
							<!-- <img class="circleicon1 ez-animate" src="assets/images/img-circleicon1.png" alt="Poster Maker" data-animation="fadeInUp"> -->
							<img class="img-fluid ez-animate" src="assets/images/templates.png" alt="Poster Maker" data-animation="fadeInLeft">
						</div>
					</div>
					<div class="right my-auto col-sm-12 col-md-6">
						<!-- <h6 class="clscheme">01 – Add new task</h6> -->
						<h2><?php echo $lang[$select]['Template And Image']; ?></h2>
						<p><?php echo $lang[$select]['Template And Image Info']; ?></p>
						<!-- <a href="#" class="btn-2 shadow1 style3 bgscheme">GET STARTED NOW</a> -->
					</div>
				</div>
			</div>
		</div>
		<!-- /.Section Features 2 -->
		<!-- Section Features 2 -->
		<div class="section-features2" style="padding: 50px 0;">
			<div class="container">
				<div class="row">
					<div class="right my-auto col-sm-12 col-md-6">
						<!-- <h6 class="clscheme">01 – Add new task</h6> -->
						<h2><?php echo $lang[$select]['Create Designs Quickly']; ?></h2>
						<p><?php echo $lang[$select]['Design Info']; ?></p>
						<!-- <a href="#" class="btn-2 shadow1 style3 bgscheme">GET STARTED NOW</a> -->
					</div>
					<div class="left col-sm-12 col-md-6">
						<div class="img-container">
							<img class="circleicon1 ez-animate" src="assets/images/img-circleicon1.png" alt="Poster Maker" data-animation="fadeInUp">
							<img class="img-fluid ez-animate" src="assets/images/img-2b.png" alt="Poster Maker" data-animation="fadeInRight">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.Section Features 2 -->

		<div id="section-features2" style="padding: 0px;">
			<div class="container">
				<div class="row">
					<div class="left col-sm-12 col-md-6">
						<div class="img-container">
							<img class="circleicon1 ez-animate" src="assets/images/img-circleicon2.png" alt="Poster Maker" data-animation="fadeInUp">
							<img class="img-fluid ez-animate" src="assets/images/language.png" alt="Poster Maker" data-animation="fadeInLeft">
						</div>
					</div>
					<div class="right my-auto col-sm-12 col-md-6">
						<!-- <h6 class="clscheme">01 – Add new task</h6> -->
						<h2><?php echo $lang[$select]['Multiple language']; ?></h2>
						<p><?php echo $lang[$select]['Language Info']; ?></p>
						<!-- <a href="#" class="btn-2 shadow1 style3 bgscheme">GET STARTED NOW</a> -->
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- /.Features Wrap -->

<!-- video -->
<div id="video">
	<div class="section-features2" style="padding: 50px 0;">
		<div class="container">
			<div class="row">
				<div class="right my-auto col-sm-12 col-md-6">
						<!-- <h6 class="clscheme">01 – Add new task</h6> -->
						<h2><?php echo $lang[$select]['Video']; ?></h2>
						<p><?php echo $lang[$select]['Video Info']; ?></p>
						<!-- <a href="#" class="btn-2 shadow1 style3 bgscheme">GET STARTED NOW</a> -->
					</div>
					<div class="left col-sm-12 col-md-6" style="padding: 0px;">
						<div class="container">
								<div class="single-post wow fadeInUp" data-wow-delay=".2s">
									<div class="post-thumb">
										<div class="embed-responsive embed-responsive-16by9">
											<iframe width="560" height="315" src="https://www.youtube.com/embed/W5m3hjmCso0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</div>
										<div id="1" class="hide"></div>
										<div class="post-content">
											<div class="post-meta d-flex">
												<div class="post-author-date-area d-flex"></div>
                                        		<div class="post-comment-share-area d-flex"></div>
											</div>
										</div>
									</div>
								</div>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /video -->

	<!-- Section APP Screen 1 -->
	<div id="section-appscreen1" style="padding: 50px 0;">
		<div class="container">
			<div class="row">
				<div class="title1 col-12">
					<h6 class="clscheme"><?php echo $lang[$select]['Screenshot']; ?></h6>
					<h2><?php echo $lang[$select]['Look']; ?></h2>
				</div>
			</div>
		</div>
		<div class="container appscreen1">
			<div class="row">
				<div class="owl-carousel owl-theme">
					<!-- Item -->
					<div class="item">
						<img class="img-fluid" src="assets/images/img-screen1.png" alt="Poster Maker">
					</div>
					<!-- /.Item -->
					<!-- Item -->
					<div class="item">
						<img class="img-fluid" src="assets/images/img-screen2.png" alt="Poster Maker">
					</div>
					<!-- /.Item -->
					<!-- Item -->
					<div class="item">
						<img class="img-fluid" src="assets/images/img-screen3.png" alt="Poster Maker">
					</div>
					<!-- /.Item -->
					<!-- Item -->
					<div class="item">
						<img class="img-fluid" src="assets/images/img-screen4.png" alt="Poster Maker">
					</div>
					<!-- /.Item -->
					<!-- Item -->
					<div class="item">
						<img class="img-fluid" src="assets/images/img-screen5.png" alt="Poster Maker">
					</div>
					<!-- /.Item -->
					<!-- Item -->
					<div class="item">
						<img class="img-fluid" src="assets/images/img-screen6.png" alt="Poster Maker">
					</div>
					<!-- /.Item -->
					<!-- Item -->
					<div class="item">
						<img class="img-fluid" src="assets/images/img-screen7.png" alt="Poster Maker">
					</div>
					<!-- /.Item -->
					<!-- Item -->
					<div class="item">
						<img class="img-fluid" src="assets/images/img-screen8.png" alt="Poster Maker">
					</div>
					<!-- /.Item -->
					<!-- Item -->
					<!-- <div class="item">
						<img class="img-fluid" src="assets/images/img-screen3.jpg" alt="Poster Maker">
					</div> -->
					<!-- /.Item -->
					<!-- Item -->
					<!-- <div class="item">
						<img class="img-fluid" src="assets/images/img-screen4.jpg" alt="Poster Maker">
					</div> -->
					<!-- /.Item -->
				</div>
				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</div>
	<!-- /.Section APP Sreen 1 -->
	
	<!-- Section Download 1 -->
	<div id="section-download1" style="padding: 50px 0;">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1><?php echo $lang[$select]['Download Today']; ?></h1>
					<p><?php echo $lang[$select]['and create your beautiful poster']; ?></p>
					<ul>
						<li>
							<a href="#">
								<img class="img-fluid ez-animate" src="assets/images/img-appstore1.png" alt="Poster Maker" data-animation="fadeInUp">
							</a>
						</li>
						<li>
							<a href="https://play.google.com/store/apps/details?id=app.poster.maker.postermaker.flyer.designer">
								<img class="img-fluid ez-animate" src="assets/images/img-googleplay1.png" alt="Poster Maker" data-animation="fadeInUp">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- /.Section Download 1 -->
	<!-- Section Footer -->
	<div id="section-footer">
		<div class="container">
			<div class="footer-widget">
				<div class="row">
					<div class="left col-md-6">
						<a href="index.html"><img src="assets/images/logo1.png" alt="Poster Maker"></a>
					</div>
					<div class="right col-md-6">
						<div class="social-links">
			                <a href="https://www.facebook.com/QuickPosterMaker"><i class="fa fa-facebook fa-lg"></i></a>
			                <!-- <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
			                <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
			                <a href="#"><i class="fa fa-behance fa-lg"></i></a> -->
			            </div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-copyright container-fluid ">
			<div class="col-12">
				<p>Copyright ©2019 <a href="http://technozer.com"> Technozer Solution.</a></p>
			</div>
		</div>
	</div>
	<!-- /.Section Footer -->
	
	<!-- Javascript Files -->
	<script src="assets/js/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- Swiper Slider -->
	<script src="assets/js/swiper.min.js"></script>
	<!-- OWL Carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- Waypoint -->
	<script src="assets/js/jquery.waypoints.min.js"></script>
	<!-- Easy Waypoint -->
	<script src="assets/js/easy-waypoint-animate.js"></script>
	<!-- Scripts -->
	<script src="assets/js/scripts.js"></script>
	<!-- Carousel Features 1 -->
	<script src="assets/js/carousel-features1.js"></script>
	<!-- Carousel App Screen 1 -->
	<script src="assets/js/carousel-appscreen1.js"></script>
	<!-- Carousel Testimonial 1 -->
	<script src="assets/js/carousel-testimonial1.js"></script>

</body>
</html>

</body>

</html>