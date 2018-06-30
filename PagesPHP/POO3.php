<!doctype html>
<html>
	<head>
		<title>POO3 - Gestion d'Erreurs</title>
			<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../CSS/CSSPoo.css?t123">
	</head>
	<body>

			<!-- MENU DE DROITE AVEC DESCRIPTION -->
		<div class="nav">
			<h1 class="nav1">Fichier «POO3.php»</h1>
			<a href="../index.php" class="nav2">Retour Menu Principal</a><br>
		</div>
		
		<div class="description">
			<p class="D2"><u>Description</u><br>▼<br>Fichier d'exercices & de cours liés a la gestion d'erreur (Exceptions,...).</p>
			<input class="D3" value="Modifier" type="submit" name="modif"></input><br>
		</div>
			<!-- MENU DE DROITE AVEC DESCRIPTION -->


            <!-- CONNEXION BASE DE DONNÉE -->
        <?php 
        $user="root";
        $MDP="";
        $host="localhost";
        $BDD="poo3";
        

        
        $dbh = new PDO("mysql:host=$host;dbname=$BDD", $user,$MDP);
        $dbh -> exec('SET NAMES utf8');		
        ?>
            <!-- CONNEXION BASE DE DONNÉE -->
            
            
            <!--ZONE DU BOUTON-->
    	<form class="alignement" method="GET">
		    <p style="text-align:center;display:inline-block"><u><i><b>Indiquez le montant:</b>:</b></u></i></p><br>
			<input type="number" name="somme" placeholder="Montant à créditer..."></input>
			<br><input name="BoutonCredit" type="submit" value="Crédit"></input>
			<br><input name="BoutonDebit" type="submit" value="Débit"></input><br><br><br>
		</form>
            <!--ZONE DU BOUTON-->
            
            
        <?php //LES CLASS
        
        class Banque{
            private $solde=0;
            private $agence;
            private $NomClient;
            private $NumCompte=0;

            public function __construct($NomClient,$NumCompte){
                $this->NomClient=$NomClient;
                /*$this->agence=$agence;*/
                $this->NumCompte=$NumCompte;
            }
            
            public function setsolde($solde){
                $this->solde=$solde;
            }
            
            public function getsolde(){
                return $this->solde;
            }
            
            public function creditsolde($credit){
                $this->setsolde($this->solde + $credit);  // equivalent de ça -----> $this->solde = $this->solde + $credit;
                echo "Compte crédité avec succès !<br>";
                echo "Votre solde actuel est désormais de". $this->solde;
                
            }
            
            /*public function debitsolde($solde){
                $this->solde=$soldeactuel;
                $newsolde = $solde - $soldeactuel;
                echo "Compte débité avec succès !<br>";
                echo "Votre solde actuel est désormais de $newsolde"; 
            }*/
            
            public function getNumCompte(){
                return $this->NumCompte;
            }
        }
        
        
        ?>
        
        
        <?php
         
         //COMPTE 0014
        $CompteQuentin= new Banque("Quentin",0014);
        //$CompteQuentin->setsolde(5000);
        echo "<br><br>";
        

        
        //COMPTE 00125
        $CompteGerard = new Banque("Gérard","00125");
        /*$CompteGerard->setsolde(10000);*/
        
			    function ErreurVideZero($arg=null){
                    if(!isset($arg)){ //Renvoi d'une exception de type Exception
			            throw new Exception("Veuillez entrer une valeur, bordel!");
			        }
			        
			        if($arg === 0){ //Renvoi d'une exception de type InvalidArgumentException
			            throw new InvalidArgumentException('Argument ne peut pas etre egal a zéro.');
			        }
			        elseif ($arg==set()){
			            echo "Pas d'erreur (ErreurVideZero";
			        }
			    }

						if(isset($_GET['somme'])) {
				$somme = htmlspecialchars($_GET['somme']);
				echo $CompteQuentin->creditsolde($somme);
			    }
			    ErreurVideZero($_GET['somme']);
			    

			?>
    
    
    
    
    
    <!-- LES EXCEPTIONS-->

    <?php 
    
    echo ErreurVideZero(0); //it work !
    
    //Avec un array vide $tab
    
    echo "<p>Exo2</p>";
    echo ErreurVideZero($tab);
    
    // EXERCICE 3
    
    function division($mot){
        if($mot<=0){
            throw new InvalidArgumentException("Yolo c'est pas bon connard");
        }
        if(is_float($mot)){
            throw new EXCEPTION("Ce n'est pas bon !");
        }
    }
    
    echo division("5");
    
    // EXERCICE 3

    // EXERCICE 4
    
    function isString($mot){
        if(is_string($mot)){
            throw new InvalidArgumentException("Ce n'est pas un string");
        }
        elseif(is_string($mot)){
            echo "L'Argument est bien un string";
        }
    }
    
    
    
    // EXERCICE 4
    
    ?>




    </body>
</html>