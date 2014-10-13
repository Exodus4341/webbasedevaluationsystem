<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>W.E.B System</title>
	<?php echo Asset::css('landing_css/bootstrap.min.css'); ?>
	<?php echo Asset::css('landing_css/scrolling-nav.css'); ?>
	<style type="text/css">
	</style>
	<?php echo Asset::js(array(
		'landing_js/jquery-1.11.0.js',
		'landing_js/bootstrap.min.js',
		'landing_js/jquery.easing.min.js',
		'landing_js/scrolling-nav.js',
		'jquery.mixitup.min.js',
		'jquery.vegas.js',
		'jquery-scrolltofixed-min.js'
	)); ?>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">JMC Web Based Evaluation System</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse pull-right">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Contact Us</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">The Makers</a>
                    </li>
                    <li>
                    	<?php echo Html::anchor('student/login', 'Login') ?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>JMC Web Based Evaluation System</h2>
                    <?php echo Asset::img('user-edited.png', array('style' => 'height: 300px; widht: 400px;')); ?>
                    <p><a href="#">Web-E-SMS-Notification-System</a> A Fast Robust Faculty College Evaluation with SMS Technology System.</p>
                    <br />
                    <a class="btn btn-default page-scroll" href="#about">Click Me to Scroll Down!</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>About</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                	<?php //echo Asset::img('images1.jpg'); ?>
                    <h1>The Makers</h1>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
<script>
// $.vegas('slideshow', {
 //  delay:5000,
 //  backgrounds:[
 //     { src:'<?php echo Config::get("base_url");?>assets/img/Jmc2008.jpg', fade:2000 },
	//  { src:'<?php echo Config::get("base_url");?>assets/img/Jmc2008.jpg', fade:2000 },
 //    { src:'<?php echo Config::get("base_url");?>assets/img/Jmc2008.jpg', fade:2000 },
	//  { src:'<?php echo Config::get("base_url");?>assets/img/Jmc2008.jpg', fade:2000 },
 //    { src:'<?php echo Config::get("base_url");?>assets/img/Jmc2008.jpg', fade:2000 },
 //    { src:'<?php echo Config::get("base_url");?>assets/img/Jmc2008.jpg', fade:2000 },
	//  { src:'<?php echo Config::get("base_url");?>assets/img/Jmc2008.jpg', fade:2000 },
	//    { src:'<?php echo Config::get("base_url");?>assets/img/Jmc2008.jpg', fade:2000 } 
 //  ]
	// })('overlay', {
	// src:'<?php echo Config::get("base_url");?>assets/img/images1.jpg'
	// });
 </script>