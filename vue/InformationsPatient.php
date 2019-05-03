<?php
session_start();


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
				<h1 id="colorlib-logo"><a href="index.html"><?php echo $_SESSION['Nom'] ;?> <?php echo $_SESSION['Prenom'] ;?> </a></h1>
				
			</div>
			<nav id="colorlib-main-menu" role="navigation" class="navbar">
				<div  class="collapse">
					<ul>
		
						<li><a href="#" data-nav-section="about">Commencer un Examen</a></li>
						<li><a href="#" data-nav-section="InformationsPatient.php">Mon Profile</a></li>
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
                                 <br><br><br><br>
                                 <h1>Mes informations personnelles</h1>
    <div class="container">
    <form class="form-horizontal" method="POST" action="../controller/Modifierinfopatient.php">
       <table class="">
        
             <tr>
             
                <td>
                  
                         <div class="form-group">
                            <label class="col-md-4 control-label">Nom</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input id="fullName" name="nom"  class="form-control" required="true" value="<?php echo $_SESSION['Nom'] ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Prénom</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input id="addressLine1" name="prenom" class="form-control" required="true" value="<?php echo $_SESSION['Prenom'] ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Téléphone</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input id="addressLine2" name="tel" class="form-control" required="true" value="<?php echo $_SESSION['tel']?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Date de naissance</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input id="city" name="dt"  class="form-control" required="true" value="<?php echo $_SESSION['dt'] ?>"type="text"></div>
                            </div>
                         </div>
                         
                         <div class="form-group">
                            <label class="col-md-4 control-label">cin</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input id="postcode" name="cin" class="form-control" required="true" value="<?php echo $_SESSION['CIN'] ?>"type="text"></div>
                            </div>
               </td>
                <td>
               
                        <div class="form-group">
                            <label class="col-md-4 control-label">Sexe</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input id="fullName" name="sexe"  class="form-control" required="true" value="<?php echo $_SESSION['sexe'] ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input id="addressLine1" name="email"  class="form-control" required="true" value="<?php echo $_SESSION['email'] ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Adresse </label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input id="addressLine2" name="adresse"  class="form-control" required="true" value="<?php echo $_SESSION['Adresse']?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">ville</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input id="city" name="ville"  class="form-control" required="true"value="<?php echo $_SESSION['ville']?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Situation Familiale</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input id="state" name="SF" class="form-control" required="true" value="<?php echo $_SESSION['SF']?>" type="text"></div>
                            </div>
                         </div>    
                </td>
                
             </tr>
       
       </table>
       <div class="form-group">
                    <center>
                        <div class="col-md-8 inputGroupContainer">
                             <div class="input-group"><input  class="form-control"  value="Modifier" type="submit"></div>
                        </div>
                    </center>
         </div>   
       </form>
    </div>
					   		
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	
				  	</ul>
			  	</div>
			</section>
        </div>
			
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

