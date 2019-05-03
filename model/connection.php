<?php

class connection
{

   private $serveur;
   private $db ;
   private $login ;
   private $password ;


   public function __construct()
		{
			$this->serveur="localhost";
		    $this->bd="pfe_db";
		    $this->login="postgres";
          $this->password="jiji1996";
		}

		public function connecter($serveur,$bd,$login,$password)
		{
			
			try
			{
            $MyPDO = new PDO("pgsql:host=$serveur;dbname=$bd",$login,$password);
          
			}
			catch(PDOException $e)
			{
					echo $e->getMessage();
			}

			return $MyPDO;
      }
      
  public function getbd()
  {
     return $this->bd;
  }
  public function getlogin()
  {
     return $this->login;
  }
  public function getpassword()
  {
     return $this->password;
  }
  public function getserveur()
  {
     return $this->serveur;
  }
}

                               
        
?>