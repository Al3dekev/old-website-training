<!doctype html>
<html>
	<head>
		<title>Opérateurs1</title>
			<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../CSS/CSSPoo.css?t123">
	</head>
	<body>

			<!-- MENU DE DROITE AVEC DESCRIPTION -->
		<div class="nav">
			<h1 class="nav1">Fichier «POO1.php»</h1>
			<a href="../index.php" class="nav2">Retour Menu Principal</a><br>
		</div>
		
		<div class="description">
			<p class="D2"><u>Description</u><br>▼<br><span ID="descriptionJS">Présentation CLASS, Attributs, Méthodes ainsi que des boutons physiques.</span></p>
			<input class='D3' value='Modifier' type='submit' name='modif' onclick='description()'></input><br>
		</div>
			<!-- MENU DE DROITE AVEC DESCRIPTION -->



				<br><br>
	<div style="color:blue">_______________________________________<br>
<-- Cours PHP du 06/02/17 au 09/02/17 --></div><br>
	<?PHP
	
    //1 LES ATTRIBUTS
    //2 LES METHODES
    //3



//Dans une class, il y a ATTRIBUTS puis METHODES.
    class CompteenBanque {
        //ATTRIBUTS
        public $solde = 0;
        public $plancher = 6000;
        const rib = "FR76 1480 6180 0072 0049 5007 189";
        public $nomclient="Gérard";
        const creationdate = "06/02/17";
        //ATTRIBUTS
        
        //METHODES
        
        function newsolde($mot){
            $this->solde = $this->solde+ $mot;
        }
        
        function debitsolde($mot){
            $this->solde = $this->solde- $mot;
        }
        
        //METHODES
        
    }
    $meincompte= new CompteenBanque();
    
    
    echo "Le solde de mon compte est de: <b>";
    echo $meincompte->solde;
    echo "€</b><br><br><br>";
    
    $meincompte->newsolde(5000);
    echo "Votre solde est maintenant de: <b>";
    echo $meincompte->solde;
    echo "€</b><br><br>";
    ?>
    _______________________<br><br>
    <?php
    
    $meincompte->debitsolde(6000);
        if($meincompte->solde<0){
            echo "Vous etes a découvert de: <b>" .$meincompte->solde. "€</b><br><br>";
        }
        else{
            echo "Votre solde est maintenant de: <b>" .$meincompte->solde. "€</b><br><br>";
        }
    

    
	?>

	<script src="../js/poo1.js"></script>
    
	</body>
</html>