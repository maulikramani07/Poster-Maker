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
    <title>How to use | Poster Maker</title>
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

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
	.no_select{
		-webkit-user-select: none; /* Safari 3.1+ */
  -moz-user-select: none; /* Firefox 2+ */
  -ms-user-select: none; /* IE 10+ */
  user-select: none; /* Standard syntax */
}
	}

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
				<li ><img src="assets/images/flag/us.png"    height="20px" width="20px;"><a href="how_to_use.php?lang=en">  English</a></li>
				<li ><img src="assets/images/flag/india.png" height="20px" width="20px;"><a href="how_to_use.php?lang=hin"> Hindi</a></li>
				<li ><img src="assets/images/flag/china.png" height="20px" width="20px;"><a href="how_to_use.php?lang=chi"> Chinese</a></li>
				<li ><img src="assets/images/flag/arabic.png" height="20px" width="20px;"><a href="how_to_use.php?lang=ara"> Arabic</a></li>
				<li ><img src="assets/images/flag/jarman.png" height="20px" width="20px;"><a href="how_to_use.php?lang=ger"> German</a></li>
				<li ><img src="assets/images/flag/italy.png" height="20px" width="20px;"><a href="how_to_use.php?lang=ita"> Italic</a></li>
				<li ><img src="assets/images/flag/france.png" height="20px" width="20px;"><a href="how_to_use.php?lang=fre"> French</a></li>
				<li ><img src="assets/images/flag/spanish.png" height="20px" width="20px;"><a href="how_to_use.php?lang=spa"> Spanish</a></li>
				<li ><img src="assets/images/flag/portuguese.png" height="20px" width="20px;"><a href="how_to_use.php?lang=por"> portuguese</a></li>
				<li ><img src="assets/images/flag/india.png" height="20px" width="20px;"><a href="how_to_use.php?lang=tam"> Tamil</a></li>
				<li ><img src="assets/images/flag/hausa.png" height="20px" width="20px;"><a href="how_to_use.php?lang=hau"> Hausa</a></li>
				<li ><img src="assets/images/flag/dutch.png" height="20px" width="20px;"><a href="how_to_use.php?lang=dut"> Dutch</a></li>
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
	                    <a href="whats_new.php" class="nav-link"><?php echo $lang[$select]['What\'s New']; ?></a>
	                </li>
	                <li class="nav-item">
	                    <a href="contact.php" class="nav-link"><?php echo $lang[$select]['Contact']; ?></a>
	                </li>
                </ul>
            </div>
            <a href="#" class="btn-1 shadow1 style3 bgscheme"><?php echo $lang[$select]['How To Use']; ?></a>
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

	<div id="section-features2" style="padding-bottom: 0px;">
			<div class="container"><h1 class="ez-animate" style="animation-delay: 0s; opacity: 1;text-align: center;font-size: 50px; "> <?php echo $lang[$select]['How To Use']; ?> </h1>
				<hr>
				<div class="row">
					<div class="left col-sm-12 col-md-6">
						
							<ul style="padding: 0px;margin: 30px;">
									<a href="#">
										<img class="img-fluid ez-animate" data-toggle="modal" data-target="#background" src="assets/images/background.png" alt="Poster Maker" data-animation="fadeInUp" style="padding: 10px;">
									</a>

									<a href="#">
										<img class="img-fluid ez-animate" data-toggle="modal" data-target="#sticker" src="assets/images/sticker.png" alt="Poster Maker" data-animation="fadeInUp" style="padding: 10px;">
									</a>

									<a href="#">
										<img class="img-fluid ez-animate" data-toggle="modal" data-target="#art" src="assets/images/art.png" alt="Poster Maker" data-animation="fadeInUp" style="padding: 10px;">
									</a>

									<a href="#">
										<img class="img-fluid ez-animate" data-toggle="modal" data-target="#effect" src="assets/images/effect.png" alt="Poster Maker" data-animation="fadeInUp" style="padding: 10px;">
									</a>

									<a href="#">
										<img class="img-fluid ez-animate" data-toggle="modal" data-target="#text" src="assets/images/text.png" alt="Poster Maker" data-animation="fadeInUp" style="padding: 10px;">
									</a>
							</ul>
						
					</div>
					<div class="right my-auto col-sm-12 col-md-6">
						<h2><?php echo $lang[$select]['Create Poster']; ?></h2>
						<p><?php echo $lang[$select]['Create Poster Info']; ?> </p>
					</div>
				</div>
			</div>
		</div>

		<!-- Background starts -->
			<div class="modal" id="background">
  				<div class="modal-dialog modal-dialog-centered">
    				<div class="modal-content">
						<!-- Modal Header -->
	     				<div class="modal-header">
	        				<h4 class="modal-title"><?php echo $lang[$select]['Background']; ?></h4>
	        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	     				</div>
	     				<!-- Modal body -->

      					<div class="modal-body" style="padding-bottom: 0px;">
      						<?php echo $lang[$select]['bgmodal']; ?>
        					<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 p-4">
									<div class="embed-responsive embed-responsive-16by9 p-2">
              							<iframe id="bgvideo" width="560" height="315" src="https://www.youtube.com/embed/l6wJawcnvHo" frameborder="0" allowfullscreen></iframe>
        							</div>
								</div>  
      						</div>
						</div>
  					</div>
				</div>
			</div>
	<!-- Background ends -->

	<!-- Sticker starts -->
			<div class="modal" id="sticker">
  				<div class="modal-dialog modal-dialog-centered">
    				<div class="modal-content">
						<!-- Modal Header -->
	     				<div class="modal-header">
	        				<h4 class="modal-title"><?php echo $lang[$select]['Sticker']; ?></h4>
	        				<button type="button" class="close" data-dismiss="modal">&times;</button>
	     				</div>
	     				<!-- Modal body -->

      					<div class="modal-body" style="padding-bottom: 0px;">
      						<?php echo $lang[$select]['Sticker Modal']; ?>
        					<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 p-4" >
									<div class="embed-responsive embed-responsive-16by9 p-2">
              							<iframe id="stickervideo" width="560" height="315" src="https://www.youtube.com/embed/tuo92VdG-tE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        							</div>
								</div>  
      						</div>
						</div>
  					</div>
				</div>
			</div>
	<!-- Sticker ends -->

	<!-- Art starts -->
		<div class="modal" id="art">
  				<div class="modal-dialog modal-dialog-centered">
    				<div class="modal-content">
						<!-- Modal Header -->
	     				<div class="modal-header">
	        				<h4 class="modal-title"><?php echo $lang[$select]['Art']; ?></h4>
	        				<button type="button" class="close" data-dismiss="modal">&times;</button>
	     				</div>
	     				<!-- Modal body -->

      					<div class="modal-body" style="padding-bottom: 0px;">
      						<?php echo $lang[$select]['Art Modal']; ?>
        					<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 p-4" >
									<div class="embed-responsive embed-responsive-16by9 p-2">
              							<iframe id="artvideo" width="560" height="315" src="https://www.youtube.com/embed/zifryphjIPg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        							</div>
								</div>  
      						</div>
						</div>
  					</div>
				</div>
			</div>
	<!-- Art ends -->

	<!-- Effects starts -->
			<div class="modal" id="effect">
  				<div class="modal-dialog modal-dialog-centered">
    				<div class="modal-content">
						<!-- Modal Header -->
	     				<div class="modal-header">
	        				<h4 class="modal-title"><?php echo $lang[$select]['Background Effects']; ?></h4>
	        				<button type="button" class="close" data-dismiss="modal">&times;</button>
	     				</div>
	     				<!-- Modal body -->

      					<div class="modal-body" style="padding-bottom: 0px;">
      						<?php echo $lang[$select]['Background Effect Modal']; ?>
        					<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 p-4" >
									<div class="embed-responsive embed-responsive-16by9 p-2">
              							<iframe id="effectvideo" width="560" height="315" src="https://www.youtube.com/embed/AkTjoCqiisk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        							</div>
								</div>  
      						</div>
						</div>
  					</div>
				</div>
			</div>
	<!-- Effects ends -->

	<!-- text starts -->
			<div class="modal" id="text">
  				<div class="modal-dialog modal-dialog-centered">
    				<div class="modal-content">
						<!-- Modal Header -->
	     				<div class="modal-header">
	        				<h4 class="modal-title"><?php echo $lang[$select]['Text Effects']; ?></h4>
	        				<button type="button" class="close" data-dismiss="modal">&times;</button>
	     				</div>
	     				<!-- Modal body -->

      					<div class="modal-body" style="padding-bottom: 0px;">
      						<?php echo $lang[$select]['Text Effects Modal']; ?>
        					<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 p-4" >
									<div class="embed-responsive embed-responsive-16by9 p-2">
              							<!-- <iframe id="textvideo" width="560" height="315" src="https://www.youtube.com/embed/_CiqFVK-ga4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->

              							<iframe id="player" src="https://www.youtube.com/embed/_CiqFVK-ga4" allowfullscreen></iframe>  
        							</div>
								</div>  
      						</div>
						</div>
  					</div>
				</div>
			</div>
	<!-- text ends -->

<!-- Template start -->
	<div class="section-features2" style="padding: 50px 0;">
		<div class="container">
			<div class="row">
				<div class="right my-auto col-sm-12 col-md-6">
						<!-- <h6 class="clscheme">01 – Add new task</h6> -->
						<h2><?php echo $lang[$select]['Template']; ?></h2>
						<p><?php echo $lang[$select]['Template Info']; ?> </p>
						<!-- <a href="#" class="btn-2 shadow1 style3 bgscheme">GET STARTED NOW</a> -->
					</div>
					<div class="left col-sm-12 col-md-6" style="padding: 0px;">
						<div class="container">
								<div class="single-post wow fadeInUp" data-wow-delay=".2s">
									<div class="post-thumb">
										<div class="embed-responsive embed-responsive-16by9">
											<iframe width="560" height="315" src="https://www.youtube.com/embed/iPgyfJpMfIs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
<!-- Template end -->

<!-- My Drafts start -->
	<div class="section-features2" style="padding: 50px 0;">
		<div class="container">
			<div class="row">
					<div class="right col-sm-12 col-md-6" style="padding: 0px;">
						<div class="container">
								<div class="single-post wow fadeInUp" data-wow-delay=".2s">
									<div class="post-thumb">
										<div class="embed-responsive embed-responsive-16by9">
											<iframe width="560" height="315" src="https://www.youtube.com/embed/rZtndgKA81o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
					<div class="right my-auto col-sm-12 col-md-6">
						<!-- <h6 class="clscheme">01 – Add new task</h6> -->
					<h2><?php echo $lang[$select]['My Drafts']; ?></h2>
					<p><?php echo $lang[$select]['My Drafts Info']; ?></p>
						<!-- <a href="#" class="btn-2 shadow1 style3 bgscheme">GET STARTED NOW</a> -->
				</div>
			</div>
		</div>
	</div>
<!-- My Drafts end -->

<section >
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12" id="section3">
				<div class="card border-0">
    				<div class="card-body text-center">
      					<h3 class="card-title font-weight-bold"><?php echo $lang[$select]['My Poster']; ?></h3>
      					<hr class="w-50">
      					<?php echo $lang[$select]['My Poster Info']; ?>
    				</div> 
    			</div>			
			</div>
				<!-- <div class="col-lg-6 col-md-6 col-sm-12" id="section4">
					<div class="card border-0">
    					<div class="card-body text-center">
      						<h3 class="card-title font-weight-bold">My Drafts</h3>
      						<hr class="w-50">
      						Here You Can Save Your Work As Draft So You Can Carry On Your Work Any Other Time From Where You Stop Last, So It's Very beneficial For User.
    					</div>
    				</div>
				</div> -->
			</div>
		</div>
	</div>
</section>


	<!-- Section Footer -->
	<div id="section-footer">
		<div class="container">
			<div class="footer-widget">
				<div class="row">
					<div class="left col-md-6">
						<a href="index.php"><img class="no_select" src="assets/images/logo1.png" alt="Poster Maker"></a>
					</div>
					<div class="right col-md-6">
						<div class="social-links">
			                <a href="https://www.facebook.com/QuickPosterMaker"><i class="fab fa-facebook-f fa-lg"></i></a>
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
				<p class="no_select">Copyright ©2019 <a href="http://technozer.com"> Technozer Solution.</a></p>
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
	<script src="https://kit.fontawesome.com/bcdd692a00.js"></script>

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
