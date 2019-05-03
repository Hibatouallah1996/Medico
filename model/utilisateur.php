<?php
include("connection.php");
require("../PhpMailer/PHPMailerAutoload.php");
	
session_start();
class utilisateur 
{
    private $id_utilisateur;
    private $CIN;
    private $Nom;
    private $Prenom;
    private $dt_naiss;
    private $email;
    private $ville;
    private $adresse;
    private $SF;
    private $tel;
    private $sex;
    private $login;
    private $password;
    //private $db;

    public function __construct()
    {
        $CIN=' ';
        $Nom=' ';
        $Prenom=' ';
        $dt_naiss=' ';
        $email=' ';
        $ville=' ';
        $adresse=' ';
        $SF=' ';
        $tel=' ';
        $sex=' ';
        $login=' ';
        $password=' ';
        
        
    }

        public  function getcin()
        {
            $this->CIN;
        }
        public  function getNom()
        {
            $this->Nom;
        }
        public  function getPrenom()
        {
            $this->Prenom; 
        }
        public  function getdt_naiss()
        {
            $this->dt_naiss;
        }
        public  function getemail()
        {
            $this->email;
        }
        public  function getville()
        {
            $this->ville;
        }
        public  function getadresse()
        {
            $this->adresse;
        }
        public  function getSF()
        {
            $this->SF;
        }
        public  function gettel()
        {
            $this->tel;
        }
        public  function getsex()
        {
            $this->sex;
        }
        public  function getlogin()
        {
            $this->login;
        }
        public  function getpassword()
        {
            $this->password;
        }
        public function confirmer_compte($CIN)
        {
            $con = new connection();
            $bd=$con->getbd();
            $serveur=$con->getserveur();
            $loginbd=$con->getlogin();
            $password=$con->getpassword();

            $bd=$con->connecter($serveur,$bd,$loginbd,$password);
            $actif='1';
            var_dump($CIN);
            $req1 = $bd->prepare('UPDATE pfe_schema.utilisateur set "Actif"=:actif WHERE "CIN"=:CIN');
            $req1->execute(array(
               'actif'=>$actif,
               'CIN'=>$CIN,
            ));
                ?>
                <script type="text/javascript">
                    alert("Félicitations! votre nouveau compte a été activer ,vous pouvez s'authentifier ");
                    window.location.replace("../vue/index.html"); 
                </script>
                <?php

        }
        public function Ajouter_utilisateur($nom,$prenom,$CIN,$tel,$dt,$SF,$Sexe,$email,$login,$passe,$adresse,$ville)
        {    
           
            try
            {
                $con = new connection();
                $bd=$con->getbd();
                $serveur=$con->getserveur();
                $loginbd=$con->getlogin();
                $password=$con->getpassword();

                $bd=$con->connecter($serveur,$bd,$loginbd,$password);
 
                $req1 = $bd->prepare('INSERT INTO pfe_schema.utilisateur("Nom", "Prenom", tel, dt_naiss, email, "Adresse", 
                "SF", ville, sex, login, password, "CIN")
                VALUES(:Nom,:Prenom,:tel,:dt_naiss,:email,:Adresse,:SF,:ville,:sex,:login,:password,:CIN)');
                $req1->execute(array(
                   'Nom'=>$nom,
                   'Prenom'=>$prenom,
                   'tel'=>$tel,
                   'dt_naiss'=>$dt,
                   'email'=>$email,
                   'Adresse'=>$adresse,
                   'SF'=>$SF,
                   'ville'=>$ville,
                   'sex'=>$Sexe,
                   'login'=>$login,
                   'password'=>$passe,
                   'CIN'=>$CIN,
                ));
   
  
                }		catch(Exception $e) //en cas d'erreur
                                    {
                                                //on annule la transation
                                                $pdo->rollback();
        
                                                //on affiche un message d'erreur ainsi que les erreurs
                                                
                                                echo 'Erreur : '.$e->getMessage().'<br />';
                                                echo 'N° : '.$e->getCode();
                                                ?>
                                                <script type="text/javascript">
                                                    alert("les données sont invalides ,veuillez réessayer svp ");
                                                </script>
                                                <?php
                                                        exit();
                                    }
                                    $mail = new PHPMailer;
						
                                    //$mail->SMTPDebug = 4;                               // Enable verbose debug output
                                    
                                    $mail->isSMTP();                                      // Set mailer to use SMTP
                                    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
                                    $mail->Username = 'medicoplatform@gmail.com';                 // SMTP username
                                    $mail->Password = 'HCK_MEDICO2019';                           // SMTP password
                                    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                                    $mail->Port = 587;  
                                    $mail->SMTPOptions = array(
                                    'ssl' => array(
                                    'verify_peer' => false,
                                    'verify_peer_name' => false,
                                    'allow_self_signed' => true
                                    )
                                    );                                  // TCP port to connect to
                                    
                                    $mail->setFrom('medicoplatform@gmail.com', 'Medico');
                                    $mail->addAddress($email);     // Add a recipient
                                    //$mail->addAddress('ellen@example.com');               // Name is optional
                                    //$mail->addReplyTo('info@example.com', 'Information');
                                    //$mail->addCC('cc@example.com');
                                    //$mail->addBCC('bcc@example.com');
                                    
                                    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                                    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                                    $mail->isHTML(true);                                  // Set email format to HTML
                                    
                                    $mail->Subject = 'Lien d\'activation du compte';
                                    $mail->Body  = '
                                    <html>
                                    <head>
                                       <title>Vous avez réservé sur notre site ...</title>
                                    </head>
                                    <body>
                                    <p>Pour commencer à utiliser votre compte Medico, Cliquez sur ce lien pour activer votre compte :</p> 
                                    <a href="http://localhost/consult_med/controller/activer_compte.php?CIN='.$CIN.'">Cliquer ICI.</a>
                                    </body>
                                    </html>';
                                    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                                    
                                    if(!$mail->send()) {
                                        //echo 'Message could not be sent.';
                                        //echo 'Mailer Error: ' . $mail->ErrorInfo;
                                        } else {
                                        //echo 'Message has been sent';
                                        }
      
                            ?>
                                <script type="text/javascript">
                                    alert("Félicitations! votre nouveau compte a été créé avec succès ,confirmez le via ton émail svp ,si vous n'avez reçu aucun émail,vérifiez le spam de votre boite émail ");
                                    window.location.replace("../vue/index.html"); 
                                </script>
                                <?php
                                
                              
        }

        public function authentification($login,$pass)
        {
           
            $con = new connection();
            $bd=$con->getbd();
            $serveur=$con->getserveur();
            $loginbd=$con->getlogin();
            $password=$con->getpassword();

            $bd=$con->connecter($serveur,$bd,$loginbd,$password);

            $req1 = $bd->prepare('SELECT * FROM pfe_schema.utilisateur WHERE login=? AND password=?');
            $req1->execute(array($login,$pass));


            $donnees = $req1->fetch();
		                         
									if($donnees!=null)
									{
                                        if($donnees['Actif']!=1)
                                        {
                                            ?>
										<script type="text/javascript">
                                            alert('Veuillez confirmer votre compte svp!!');
											window.location.replace("../vue/index.html"); 
										</script>
										<?php
                                        }
                                        else{
                                            echo"authentificatin reussie";
                                        $_SESSION['login'] =$login;

										?>
										<script type="text/javascript">
										
											window.location.replace("../controller/Profile.php?id_utilisateur=<?php echo $donnees['id_utilisateur']?>"); 
										</script>
										<?php
                                        }
                                        
									}
										
									else
									{
										
										?>
										<script type="text/javascript">
											alert("votre login ou mot de passe est incorrecte");
											window.location.replace("../vue/login.html"); 
										</script>

										<?php
							
									}
        }

        public function AfficherProfile($id_utilisateur)
        {
           
            $con = new connection();
            $bd=$con->getbd();
            $serveur=$con->getserveur();
            $loginbd=$con->getlogin();
            $password=$con->getpassword();

            $bd=$con->connecter($serveur,$bd,$loginbd,$password);

            $req1 = $bd->prepare('SELECT * FROM pfe_schema.utilisateur WHERE id_utilisateur=?');
            $req1->execute(array($id_utilisateur));


            $donnees = $req1->fetch();
		                         
									if($donnees!=null)
									{
										?>
										<script type="text/javascript">
					
window.location.replace("../vue/Profile.php?Nom=<?php echo $donnees['Nom']?>& Prenom=<?php echo $donnees['Prenom']?>& CIN=<?php echo $donnees['CIN']?>& tel=<?php echo $donnees['tel']?> & dt=<?php echo $donnees['dt_naiss']?>& email=<?php echo $donnees['email']?> & Adresse=<?php echo $donnees['Adresse'] ?> & SF=<?php echo $donnees['SF']?>& ville=<?php echo $donnees['ville'] ?> & sexe=<?php echo $donnees['sex'] ?>& login=<?php echo $donnees['login']?>& password= <?php echo $donnees['password']?>"); 
										</script>
										<?php
									}
										
									else
									{
										
										?>
										<script type="text/javascript">
											alert("une Erreur !! veuillez actualiser la page");
										</script>

										<?php
							
									}
        }

        public function Modifier_utilisateur($nom,$prenom,$CIN,$tel,$dt,$SF,$Sexe,$email,$adresse,$ville)
        {    
           
            try
            {
                $con = new connection();
                $bd=$con->getbd();
                $serveur=$con->getserveur();
                $loginbd=$con->getlogin();
                $password=$con->getpassword();

                $bd=$con->connecter($serveur,$bd,$loginbd,$password);
                
                $req1 = $bd->prepare('UPDATE pfe_schema.utilisateur set "Nom"=:Nom, "Prenom"=:Prenom, tel=:tel, dt_naiss=:dt_naiss
                , email=:email, "Adresse"=:Adresse,"SF"=:SF, ville=:ville, sex=:sex,"CIN"=:CIN WHERE "CIN"=:CIN');
                $req1->execute(array(
                   'Nom'=>$nom,
                   'Prenom'=>$prenom,
                   'tel'=>$tel,
                   'dt_naiss'=>$dt,
                   'email'=>$email,
                   'Adresse'=>$adresse,
                   'SF'=>$SF,
                   'ville'=>$ville,
                   'sex'=>$Sexe,
                   'CIN'=>$CIN,
                ));
   
  
                }		catch(Exception $e) //en cas d'erreur
                                    {
                                                //on annule la transation
                                                $pdo->rollback();
        
                                                //on affiche un message d'erreur ainsi que les erreurs
                                                
                                                echo 'Erreur : '.$e->getMessage().'<br />';
                                                echo 'N° : '.$e->getCode();
                                                ?>
                                                <script type="text/javascript">
                                                    alert("vos informatios  sont invalides ,veuillez réessayer svp ");
                                                </script>
                                                <?php
                                                        exit();
                                    }
                                  
                            ?>
                                <script type="text/javascript">
                                    alert("Félicitations! vos informations sont mis à jour avec succès ");
                                    window.location.replace("../vue/login.html"); 
                                </script>
                                <?php
                              
        }

        public function initialisation_password($email)
        {
            $mail = new PHPMailer;
						
            //$mail->SMTPDebug = 4;                               // Enable verbose debug output
            
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'medicoplatform@gmail.com';                 // SMTP username
            $mail->Password = 'HCK_MEDICO2019';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;  
            $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
            );                                  // TCP port to connect to
            
            $mail->setFrom('medicoplatform@gmail.com', 'Medico');
            $mail->addAddress($email);               
            $mail->isHTML(true);                                
            
            $mail->Subject = 'Initialisation du mot de passe';
            $mail->Body  = '
            <html>
            <head>
               <title>Vous avez réservé sur notre site ...</title>
            </head>
            <body>
            <p>Bonjour , Cliquez sur ce lien pour réinitialiser votre mot de passe:</p> 
            <a href="http://localhost/consult_med/vue/formulaire_initialiser.php?email='.$email.'">Cliquer ICI.</a>
            </body>
            </html>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            
            if(!$mail->send()) {
                //echo 'Message could not be sent.';
                //echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                //echo 'Message has been sent';
                }
                ?>
                <script type="text/javascript">
                    alert("Consulter votre boite gmail ,pour modifier votre mot de passe ");
                    window.location.replace("../vue/login.html"); 
                </script>
                <?php
        }
     
    public function update_password($passe,$email)
    {
        try
            {
                $con = new connection();
                $bd=$con->getbd();
                $serveur=$con->getserveur();
                $loginbd=$con->getlogin();
                $password=$con->getpassword();

                $bd=$con->connecter($serveur,$bd,$loginbd,$password);
                
                $req1 = $bd->prepare('UPDATE pfe_schema.utilisateur set password =:password WHERE email=:email');
                $req1->execute(array(
                   'password'=>$passe,
                   'email'=>$email,
                 
                ));
  
                }		catch(Exception $e) //en cas d'erreur
                                    {
                                                //on annule la transation
                                                $pdo->rollback();
        
                                                //on affiche un message d'erreur ainsi que les erreurs
                                                
                                                echo 'Erreur : '.$e->getMessage().'<br />';
                                                echo 'N° : '.$e->getCode();
                                                ?>
                                                <script type="text/javascript">
                                                    alert("vos informatios  sont invalides ,veuillez réessayer svp ");
                                                </script>
                                                <?php
                                                        exit();
                                    }
                                  
                            ?>
                                <script type="text/javascript">
                                    alert("Félicitations! votre mot de passe est mis à jour avec succès ");
                                    window.location.replace("../vue/login.html"); 
                                </script>
                                <?php
                              
    }
    public function contacter($nom,$email,$message)
    {
        $mail = new PHPMailer;
						
            //$mail->SMTPDebug = 4;                               // Enable verbose debug output
            
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'medicoplatform@gmail.com';                 // SMTP username
            $mail->Password = 'HCK_MEDICO2019';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;  
            $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
            );                                  // TCP port to connect to
            
            $mail->setFrom('medicoplatform@gmail.com', 'Medico');
            $mail->addAddress($email);               
            $mail->isHTML(true);                                
            
            $mail->Subject = 'Initialisation du mot de passe';
            $mail->Body  = '
            <html>
            <head>
               <title>Vous avez réservé sur notre site ...</title>
            </head>
            <body>
            <p>'.$nom.' a envoyé ce message</p> 
            <p>'.$message.'</p>
            </body>
            </html>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            
            if(!$mail->send()) {
                //echo 'Message could not be sent.';
                //echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                //echo 'Message has been sent';
                }
                ?>
                <script type="text/javascript">
                    alert("Consulter votre boite gmail ,pour modifier votre mot de passe ");
                    window.location.replace("../vue/index.html"); 
                </script>
                <?php
    }
}



?>