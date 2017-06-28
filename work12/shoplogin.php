<?php

 ?>



 <!DOCTYPE html>
 <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
 <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
 <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
 <!--[if gt IE 8]><!--> <html class="no-js" lang="ja"> <!--<![endif]-->
 	<head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>Three/3 &mdash; ログイン&nbsp;</title>
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<meta name="description" content="Three/3 Website Template by FreeHTML5.co" />
 	<meta name="keywords" content="Three/3, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
 	<meta name="author" content="FreeHTML5.co" />

   <!--
 	//////////////////////////////////////////////////////

 	Three/3 TEMPLATE
 	DESIGNED & DEVELOPED by FreeHTML5.co

 	Website: 		http://freehtml5.co/
 	Email: 			info@freehtml5.co
 	Twitter: 		http://twitter.com/fh5co
 	Facebook: 		https://www.facebook.com/fh5co

 	//////////////////////////////////////////////////////
 	 -->

   	<!-- Facebook and Twitter integration -->
 	<meta property="og:title" content=""/>
 	<meta property="og:image" content=""/>
 	<meta property="og:url" content=""/>
 	<meta property="og:site_name" content=""/>
 	<meta property="og:description" content=""/>
 	<meta name="twitter:title" content="" />
 	<meta name="twitter:image" content="" />
 	<meta name="twitter:url" content="" />
 	<meta name="twitter:card" content="" />

 	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
 	<link rel="shortcut icon" href="favicon.ico">

 	<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700" rel="stylesheet">

 	<!-- Animate.css -->
 	<link rel="stylesheet" href="css/animate.css">
 	<!-- Icomoon Icon Fonts-->
 	<link rel="stylesheet" href="css/icomoon.css">
 	<!-- Bootstrap  -->
 	<link rel="stylesheet" href="css/bootstrap.css">
 	<!-- Flexslider  -->
 	<link rel="stylesheet" href="css/flexslider.css">
 	<!-- Theme style  -->
 	<link rel="stylesheet" href="css/style.css">

 	<!-- Modernizr JS -->
 	<script src="js/modernizr-2.6.2.min.js"></script>
 	<!-- FOR IE9 below -->
 	<!--[if lt IE 9]>
 	<script src="js/respond.min.js"></script>
 	<![endif]-->

 	</head>
 	<body>


 	<div id="fh5co-page">
 	<header id="fh5co-header" role="banner">
 		<div class="container">
 			<div class="header-inner">
 				<h1><a href="index.php">Three/3&nbsp;</a></h1>
 				<nav role="navigation">
 					<ul>
 						<li><a href="work.html">1</a></li>
 						<li><a href="services.html">2</a></li>
 						<!-- <li><a href="pricing.html">Pricing</a></li> -->
 						<li><a href="about.html">3</a></li>
 						<li><a href="contact.html">4</a></li>
 						<li class="cta"><a href="index.php">HOME</a></li>
 					</ul>
 				</nav>
 			</div>
 		</div>
 	</header>
    <div class="container">

    </div>
    <aside id="fh5co-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
            <li style="">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <div class="fh5co-contact animate-box">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2 col-md-push-2 animate-box">
                                            <h2 style="color:#000000">LOGIN</h2>
                                            <p></p><br><br>

                                        </div>
                                        <div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
                                        <form name="form1" action="shoplogin_act.php" method="post">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input class="form-control" placeholder="ID" type="text" name="lid">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input class="form-control" placeholder="PASSWORD" type="text" name="lpw">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input value="LOGIN" class="btn btn-primary" type="submit">
                                                        <input value="新規登録はこちら" class="btn btn-primary" type="button" onClick="location.href='shopsignup.php'">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            </ul>
        </div>
    </aside>
 	<!-- <div class="fh5co-contact animate-box">
 		<div class="container">
 			<div class="row">
 				<div class="col-md-8 col-md-offset-2 col-md-push-2 animate-box">
 					<h2>LOGIN</h2>
 					<p></p><br><br>

 				</div>
 				<div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
                <form name="form1" action="shoplogin_act.php" method="post">
 					<div class="row">
 						<div class="col-md-6">
 							<div class="form-group">
 								<input class="form-control" placeholder="ID" type="text" name="lid">
 							</div>
 						</div>
 						<div class="col-md-6">
 							<div class="form-group">
 								<input class="form-control" placeholder="PASSWORD" type="text" name="lpw">
 							</div>
 						</div>
 						<div class="col-md-12">
 							<div class="form-group">
 								<input value="LOGIN" class="btn btn-primary" type="submit">
                                <input value="新規登録はこちら" class="btn btn-primary" type="button" onClick="location.href='shopsignup.php'">
 							</div>
 						</div>
 					</div>
                </form>
 				</div>
 			</div>
 		</div>
 	</div> -->
 </div>


 	<!-- jQuery -->
 	<script src="js/jquery.min.js"></script>
 	<!-- jQuery Easing -->
 	<script src="js/jquery.easing.1.3.js"></script>
 	<!-- Bootstrap -->
 	<script src="js/bootstrap.min.js"></script>
 	<!-- Waypoints -->
 	<script src="js/jquery.waypoints.min.js"></script>
 	<!-- Flexslider -->
 	<script src="js/jquery.flexslider-min.js"></script>
 	<!-- Google Map -->
 	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
 	<script src="js/google_map.js"></script>

 	<!-- MAIN JS -->
 	<script src="js/main.js"></script>

 	</body>
 </html>

 <!-- <!DOCTYPE html>
 <html>
     <head lang="ja">
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width"> -->
         <!-- <link rel="stylesheet" href="css/main.css" />
         <link href="css/bootstrap.min.css" rel="stylesheet"> -->
         <!-- <title>管理者ログイン</title>
     </head>
     <body>
         <form name="" action="shoplogin_act.php" method="post">
         ID:<input type="text" name="lid" /> -->
         <!-- PW:<input type="password" name="lpw" />
         <input type="submit" value="LOGIN" />
         </form>
         <a href="shopsignup.php">新規登録はこちら</a><br>
         <p><a href="index.php">HOME</a></p>

     </body>
 </html> -->
