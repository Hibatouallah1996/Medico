<!DOCTYPE html>
<?php
session_start();
$email=$_GET['email'];
var_dump($email);
$_SESSION['email']=$email;

?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Login Form Template</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="style/assetslogin/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="style/assetslogin/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="style/assetslogin/css/form-elements.css">
        <link rel="stylesheet" href="style/assetslogin/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="style/assetslogin/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="style/assetslogin/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="style/assetslogin/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="style/assetslogin/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="style/assetslogin/ico/apple-touch-icon-57-precomposed.png">
<style>
 body {
            background-image: url("style/img/telemedecine.jpg");
            background-color: #cccccc; /* Used if the image is unavailable */
  height: 500px; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
          }</style>
       
    </head>

    <body >

        <!-- Top content -->
        <div class="top-content" >
        
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h2><strong>initialisation du mot de passe</strong></h2>
                            
                        </div>
                    </div>
                    <form action="../controller/modification_password.php" method="post">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>réinitialiser votre mot de passe:</h3>
                            	
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Mot de passe</label>
			                        	<input type="text" name="password"  class="form-username form-control" id="form-username">
                                    </div>
	                        
			                        <button type="submit" class="btn">Envoyer</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </form>
                </div>
        
            
        </div>


        <!-- Javascript -->
        <script src="style/assetslogin/js/jquery-1.11.1.min.js"></script>
        <script src="style/assetslogin/bootstrap/js/bootstrap.min.js"></script>
        <script src="style/assetslogin/js/jquery.backstretch.min.js"></script>
        <script src="style/assetslogin/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>