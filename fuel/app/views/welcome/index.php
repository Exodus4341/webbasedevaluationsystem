<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>W.E.B System</title>
    <link rel="shortcut icon" href="<?php echo Config::get('base_url');?>/assets/img/jmc_logo.ico"/>
    <?php echo Asset::css('landing_css/bootstrap.min.css'); ?>
    <?php echo Asset::css('landing_css/scrolling-nav.css'); ?>
    <style type="text/css">
    .font-color{
        color: #fff;
    }
    .landing-box{
        padding: 20px;
        width: 100%;
        background-color: rgba(138, 39, 118, 0.8);
        height: auto 0px;
        border-radius: 10px;
    }
    .img-poss{
        float: left;
        padding: 10px;
    }
    .img-team1{
        float: left;
        padding-left: 50px;
        padding-right: 50px;
    }
    .img-team2{
        float: left;
        padding-left: 50px;
        padding-right: 50px;
    }
     .img-team3{
        padding-left: 50px;
        padding-right: 50px;
    }
    .team-box{
        width: 900px;
        padding: 20px;
        height: auto 0px;
    }
    .img-team-style{
        border-radius: 50%;
        width: 150px;
        height: 150px;
    }
    .font-style{
        font-style: Century Gothic;
        font-size: 18px;
    }
    .inner-padd{
        padding: 50px;
    }
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
                        <?php echo Html::anchor('student/login', 'Login') ?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <br /><br />
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <center>
                    <div class="landing-box">
                        <h2 class="font-color">JMC Web Based Evaluation System</h2>
                        <?php echo Asset::img('jmc_logo.png', array('style' => 'height: 300px; widht: 400px;')); ?>
                        <p class="font-color"><a href="#">Web-E-SMS-Notification-System</a> A Fast Robust Faculty College Evaluation with SMS Technology System.</p>
                        <br />
                        <a class="btn btn-primary page-scroll" href="#about">Click Me</a>
                    </div>
                </center>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <div id="about" class="about-section">
        <div class="row">
            <div class="col-lg-12 about-sec">
            <div class="inner-padd">
                <div class="container">
                    <div class="img-poss">
                        <?php echo Asset::img('jmc_logo.png'); ?>
                    </div>
                    <div class="font-style">
                        <p>Web-based Evaluation of JMC College Faculty with SMS Notification Technology is 
                            an evaluation of college faculty teachers system that is a web-based using intranet 
                            which only be access inside the JMC campus. The system has an SMS notification for the 
                            following users: Teachers will be notified their username and password to be able to 
                            access the system and they will be notified their result after the evaluation of college 
                            faculty teachers. Students will be notified their username and password to be able to access 
                            the system. The evaluation of college faculty will be held to every computer laboratories of 
                            the school. The students could use their personal laptops to evaluate their teachers only if 
                            it is inside the campus since the system is using intranet connection.</p>
                        <p>
                            This system was designed to come up an accurate and organize during the process of 
                            evaluation of college faculty. To be able to monitor the data accurately and stores 
                            the data with security. To avoid possible disadvantages of manual operation and 
                            develop the system from manual operation to automated operation. To give benefits 
                            to the students, college faculties, HR staff or Admin staff and to the school Jose 
                            Maria College. This system serves as an upgrading the system of the Jose Maria 
                            College specifically to the process of evaluation of college faculty.
                        </p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
<script>
$.vegas('slideshow', {
  delay:5000,
  backgrounds:[
     { src:'<?php echo Config::get("base_url");?>assets/img/anniversary.jpg', fade:2000 },
     { src:'<?php echo Config::get("base_url");?>assets/img/buwan_1.jpg', fade:2000 },
    { src:'<?php echo Config::get("base_url");?>assets/img/fire-drill-2014-41.jpg', fade:2000 },
     { src:'<?php echo Config::get("base_url");?>assets/img/Jmc2008.jpg', fade:2000 },
    { src:'<?php echo Config::get("base_url");?>assets/img/silverlion.jpg', fade:2000 },
    { src:'<?php echo Config::get("base_url");?>assets/img/smart-jump-in.jpg', fade:2000 },
     { src:'<?php echo Config::get("base_url");?>assets/img/fire-drill-2014-41.jpg', fade:2000 },
       { src:'<?php echo Config::get("base_url");?>assets/img/Jmc2008.jpg', fade:2000 } 
  ]
    })('overlay', {
    src:'<?php echo Config::get("base_url");?>assets/img/overlay1.png'
    });
 </script>