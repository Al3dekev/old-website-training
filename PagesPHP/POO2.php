<!doctype html>
<html>
	<head>
		<title>Prog. Orienté Objet 2</title>
			<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../CSS/CSSPoo.css?t123">
	</head>
	<body>

			<!-- MENU DE DROITE AVEC DESCRIPTION -->
		<div class="nav">
			<h1 class="nav1">Fichier «POO2.php»</h1>
			<a href="../index.php" class="nav2">Retour Menu Principal</a><br>
		</div>
		
		<div class="description">
			<p class="D2"><u>Description</u><br>▼<br>Fichier d'Exercice supplémentaires sur la Programmation Orienté Objet (POO).</p>
			<input class="D3" value="Modifier" type="submit" name="modif"></input><br>
		</div>
			<!-- MENU DE DROITE AVEC DESCRIPTION -->



    <?php
    
    
    //EXERCICE 1
    
    class livre{
        public $ISBN;
        public $titre;
        public $auteur;
        public $nbredepage;
        public $datedeparition;
        public $commentaire;
        public $disponibilité;
        
        /*function __construct($titre,$auteur,$nbredepage,$datedeparition){
            $this->titre=$titre
            $this->auteur=$auteur;
            $this->nbredepage=$nbredepage;
            $this->datedeparition=$datedeparition;
        }*/
        
        function getdisponibilite(){
            
        }
        
        function setCommentaire($commentaire):string{
            
        }
    }
    
    $L1984= new livre;
    
    $Fondation1= new livre;
    
    $HarryPotter5= new livre;
    
    
    
    
    
	?>


    
	</body>
</html>