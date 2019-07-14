<!DOCTYPE html>
<html lang="en">
<head>
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
    <title>What's New | Poster Maker</title>
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
    <!-- ICON NEEDS FONT AWESOME FOR CHEVRON UP ICON -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <style type="text/css">
    	#color-switcher .switcher-content a:hover{
    		font-size: 20px;
    	}

    	#color-switcher{
    		top: 20%;
    	}

    	#color-switcher .switcher-content li{
    		padding: 2px;
    	}

    	.no_select{
    		-webkit-user-select: none; /* Safari 3.1+ */
  -moz-user-select: none; /* Firefox 2+ */
  -ms-user-select: none; /* IE 10+ */
  user-select: none; /* Standard syntax */
}
    	}
    	/*back to top*/

#return-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.7);
    width: 50px;
    height: 50px;
    display: block;
    text-decoration: none;
    -webkit-border-radius: 35px;
    -moz-border-radius: 35px;
    border-radius: 35px;
    display: none;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
    z-index: 999;
}
#return-to-top i {
    color: #fff;
    margin: 0;
    position: relative;
    left: 16px;
    top: 13px;
    font-size: 19px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top:hover {
    background: rgba(0, 0, 0, 0.9);
}
#return-to-top:hover i {
    color: #fff;
    top: 5px;
}



/*back to top ends*/
    </style>
</head>
<body>


<?php
	include('language.php');
?>

<div class="no_select">
<!-- Color Switcher -->
	<div id="color-switcher" class="closed">
		<div class="switcher-panel">
			<i class="fa fa-gear fa-spin"></i>
		</div>
		<div class="switcher-header">
			<h3>Languages</h3>
		</div>
		<div class="switcher-content">
			<ul class="list-unstyled" >
				<li ><img src="assets/images/flag/us.png" height="20px" width="20px;"><a href="whats_new.php?lang=en">  English</a></li>
				<li ><img src="assets/images/flag/india.png" height="20px" width="20px;"><a href="whats_new.php?lang=hin"> Hindi</a></li>
				<li ><img src="assets/images/flag/china.png" height="20px" width="20px;"><a href="whats_new.php?lang=chi"> Chinese</a></li>
				<li ><img src="assets/images/flag/arabic.png" height="20px" width="20px;"><a href="whats_new.php?lang=ara"> Arabic</a></li>
				<li ><img src="assets/images/flag/jarman.png" height="20px" width="20px;"><a href="whats_new.php?lang=ger"> German</a></li>
				<li ><img src="assets/images/flag/italy.png" height="20px" width="20px;"><a href="whats_new.php?lang=ita"> Italic</a></li>
				<li ><img src="assets/images/flag/france.png" height="20px" width="20px;"><a href="whats_new.php?lang=fre"> French</a></li>
				<li ><img src="assets/images/flag/spanish.png" height="20px" width="20px;"><a href="whats_new.php?lang=spa"> Spanish</a></li>
				<li ><img src="assets/images/flag/portuguese.png" height="20px" width="20px;"><a href="whats_new.php?lang=por"> portuguese</a></li>
				<li ><img src="assets/images/flag/india.png" height="20px" width="20px;"><a href="whats_new.php?lang=tam"> Tamil</a></li>
				<li ><img src="assets/images/flag/hausa.png" height="20px" width="20px;"><a href="whats_new.php?lang=hau"> Hausa</a></li>
				<li ><img src="assets/images/flag/dutch.png" height="20px" width="20px;"><a href="whats_new.php?lang=dut"> Dutch</a></li>
			</ul>
		</div>
	</div>
	<!-- /.Color Switcher -->


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
		<p style="color: #2a2a49;"><?php echo $lang[$select]['Load']; ?> . . .</p>
	</div>
	<!-- /.Section Preloader -->
	<!-- back to top -->

	<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>

	<!-- back to top ends -->

	<!-- Section Navbar -->
	<nav class="navbar-1 navigationscheme navbar navbar-expand-lg">
        <div class="container navbar-container">
            <a class="navbar-brand" href="index.php"><img src="assets/images/logo1.png" alt="Poster Maker"></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                	<li class="nav-item dropdown-submenu dropdown">
                        <a class="nav-link scroll-down" href="index.php">
                            <?php echo $lang[$select]['Home']; ?>
                        </a>
                    </li>
	                <li class="nav-item">
	                    <a href="index.php#section-features1" class="nav-link scroll-down"><?php echo $lang[$select]['Features']; ?></a>
	                </li>
	                <li class="nav-item">
	                    <a href="index.php#video" class="nav-link scroll-down"><?php echo $lang[$select]['Video']; ?></a>
	                </li>
	                <li class="nav-item dropdown-submenu dropdown">
                        <a class="dropdown-item dropdown-toggle nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $lang[$select]['Poster']; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="poster_category.php" class="dropdown-item"><?php echo $lang[$select]['Poster Category']; ?></a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
	                    <a href="#" class="nav-link"><?php echo $lang[$select]['What\'s New']; ?></a>
	                </li>
	                <li class="nav-item">
	                    <a href="contact.php" class="nav-link"><?php echo $lang[$select]['Contact']; ?></a>
	                </li>
                </ul>
            </div>
            <a href="how_to_use.php" class="btn-1 shadow1 style3 bgscheme"><?php echo $lang[$select]['How To Use']; ?></a>
            <button type="button" id="sidebarCollapse" class="navbar-toggler active" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <!-- container -->
    </nav>
	<!-- /.Section Navbar -->
<!-- Section Features 1 -->
		<div id="section-features2" style="padding-bottom: 0px;">
			<div class="container"><h1 class="ez-animate" style="animation-delay: 0s; opacity: 1;text-align: center;font-size: 50px; text-decoration: underline;"> <?php echo $lang[$select]['What\'s New']; ?> </h1>
				<div class="row">
					<div class="left col-sm-12 col-md-6">
						<div class="img-container">
							<img class="img-fluid ez-animate" src="assets/images/language.png" alt="Poster Maker" data-animation="fadeInLeft">
						</div>
					</div>
					<div class="right my-auto col-sm-12 col-md-6">
						<h6 class="clscheme" style="color: #ff0000;">01 – new</h6>
						<h2><?php echo $lang[$select]['Languages Poster Maker']; ?></h2>
						<p><?php echo $lang[$select]['Language Info']; ?></p>
					</div>
				</div>
			</div>
		</div>
		<!-- /.Section Features 1 -->

		<!-- Section Features 2 -->
		<div id="section-features2" style="padding: 0px;">
			<div class="container" style="padding: 20px;">
				<div class="row">
					<div class="right my-auto col-sm-12 col-md-6">
						<h6 class="clscheme" style="color: #ff0000;">02 – new</h6>
						<h2><?php echo $lang[$select]['Bgremove']; ?></h2>
						<p><?php echo $lang[$select]['Bgremove Info']; ?></p>
						<p style="font-size: 17px;padding: 0px !important;margin: 0px;">-><?php echo $lang[$select]['Finger']; ?></p>
						<p style="font-size: 17px;padding: 0px !important;margin: 0px;">-><?php echo $lang[$select]['Brush']; ?></p>
						<p style="font-size: 17px;padding: 0px !important;margin: 0px;">-><?php echo $lang[$select]['Zoom']; ?></p>
					</div>
					<div class="left col-sm-12 col-md-6">
						<div class="img-container">
							<img class="img-fluid ez-animate" src="assets/images/background-remove.png" alt="Poster Maker" data-animation="fadeInRight">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.Section Features 2 -->
	<!-- Section Footer -->
	<div id="section-footer">
		<div class="container">
			<div class="footer-widget">
				<div class="row">
					<div class="left col-md-6">
						<a href="index.php"><img src="assets/images/logo1.png" alt="Poster Maker"></a>
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
</div>	
	
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

	<script type="text/javascript">
    	$(window).scroll(function() {
    if ($(this).scrollTop() >= 1000) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
    </script>


</body>
</html>
