<?php
session_start();
$nom=$_GET['Nom'];
$prenom=$_GET['Prenom'];
$CIN=$_GET['CIN'];
$tel=$_GET['tel'];
$dt=$_GET['dt'];
$SF=$_GET['SF'];
$Sexe=$_GET['sexe'];
$email=$_GET['email'];
$login=$_GET['login'];
$password=$_GET['password'];
$adresse=$_GET['Adresse'];
$ville=$_GET['ville'];

$_SESSION['Nom']=$nom;
$_SESSION['Prenom']=$prenom;
$_SESSION['CIN']=$CIN;
$_SESSION['tel']=$tel;
$_SESSION['dt']=$dt;
$_SESSION['SF']=$SF;
$_SESSION['sexe']=$Sexe;
$_SESSION['email']=$email;
$_SESSION['login']=$login;
$_SESSION['password']=$password;
$_SESSION['Adresse']=$adresse;
$_SESSION['ville']=$ville;
?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

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

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="style/css/css_profil/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="style/css/css_profil/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="style/css/css_profil/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="style/css/css_profil/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="style/fonts/flaticon/font/flaticon.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="style/css/css_profil/owl.carousel.min.css">
	<link rel="stylesheet" href="style/css/css_profil/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="style/css/css_profil/style.css">

	<!-- Modernizr JS -->
	<script src="style/js/js_profil/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="colorlib-page">
		<div class="container-wrap">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
		
			<div class="text-center">
			<a href="index.html">
				<center><h2 >Medico</h2></center>
				  
		   </a>
				<div class="author-img" style="background-image: url(images/about.jpg);"></div>
				<h1 id="colorlib-logo"><a href="index.html"><?php echo $nom ;?> <?php echo $prenom ;?> </a></h1>
				
			</div>
			<nav id="colorlib-main-menu" role="navigation" class="navbar">
				<div  class="collapse">
					<ul>
			
						<li><a href="#" data-nav-section="about">Commencer un Examen</a></li>
						<li><a href="InformationsPatient.php" data-nav-section="">Mon Profile</a></li>
						<li><a href="#" data-nav-section="skills"></a>Mes examens</li>
						<li><a href="#" data-nav-section="education">Au sujet de Medico</a></li>
						<li><a href="#" data-nav-section="contact">Contactez-nous</a></li>
						<li><a href="../model/Deconnection.php" data-nav-section="contact">Deconecter</a></li>
					</ul>
				</div>
			</nav>
           
			<div class="colorlib-footer">
				<p><small>&copy; 
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Medico <br> Tous droits réservés 

				
			</div>

		</aside>

		<div id="colorlib-main">
			<section id="colorlib-hero" class="js-fullheight" data-section="home">
				<div class="flexslider js-fullheight">
					<ul class="slides">
				   	<li style="background-image: url(style/img/P1.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-xs-12 js-fullheight slider-text">
					   				
					   				<br><br><br><br><br><br>
						   					<h1>Bonjour <?php echo $nom ;?> <?php echo $prenom ;?></h1>
						   		
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	
				  	</ul>
			  	</div>
			</section>

			
		</div><!-- end:colorlib-main -->
	</div><!-- end:container-wrap -->
	</div><!-- end:colorlib-page -->

	<!-- jQuery -->
	<script src="style/js/js_profil/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="style/js/js_profil/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="style/js/js_profil/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="style/js/js_profil/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="style/js/js_profil/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="style/js/js_profil/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="style/js/js_profil/jquery.countTo.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="style/js/js_profil/main.js"></script>

	</body>
</html>

