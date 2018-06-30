<!doctype html>
<html>
	<head>
		<title>Fichier Principal</title>
			<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="CSS/CSStrucsprincipaux.css">
	</head>
	<body>


			<!-- MENU DE DROITE AVEC DESCRIPTION -->
		<div class="nav">
			<h1 class="nav1">Fichier «principal.php»</h1>
			<a href="index.php" class="nav2">Retour Menu Principal</a><br>
		</div>
		
		<div class="description">
			<p class="D2"><u>Description</u><br>▼<br>Le 1er fichier lorsque l'ont a commencé PHP, il rassemble absoluement tout.</p>
			<input class="D3" value="Modifier" type="submit" name="modif"></input><br>
		</div>
			<!-- MENU DE DROITE AVEC DESCRIPTION -->







<!-- Cours PHP du 14/12/16-->
	<?php
		echo "Bonjour Amplificateur Humain<br>";
			$prenom="Pierre";
			$age="29 ans";
	?>
	<br>
	<?php
		echo 'Je m\'appelle ' . $prenom . ' et j\'ai ' . $age . '';
	?>
	<br><br><br>
	<?php
			$nombre="450";
			$prix="10€";
		echo "PHPStorm n°$nombre à un prix de $prix";
		
		var_dump($age);
		
		echo "PHP c'est avant tout: dynamique"
	?>
<br><br>
	<?php
			$var1= 'Human '; //mettre un espace pour.. avoir un espace
			$var2= 'Booster';
			$var3= $var1.$var2;
			
		echo $var3. '<br><br>';

		$number="2";
		echo $number. '<br>';
		
		$number += 2;
		echo $number. '<br>';
		
		$number = $number +1.5;
		echo $number. '<br>';
		
		$number = 5 + "10 Ordinateurs";
		echo $number. '<br>';
		
	?>
	<br><br><br>
	<div style="color:blue">_______________________________________<br>
<-- Cours PHP du 15/12/16--></div>
<br><br>

	<?php
	
		$nombre =18;
		$nombre2=3.1512956535;
	
	var_export($nombre);
	echo "\n <br>";
	var_export($nombre2);
	
	var_dump($nombre);
	echo "\n";
	var_dump($nombre2);
	
	?>
	<?
	
	$kiwi=10;
	settype($kiwi, "integer");
	$kiwi=$kiwi+0.45;
	echo "test $kiwi";
	var_dump($kiwi);
	
	
	$j = 2.45;
	$k=(int) $j;  //k est un entier int et $j reste un float
	var_dump($k);
	var_dump($j);
	
	?>
	<br><br><br>
	<?php
	
	$viande=25;
	$poisson=30;
	
	$plat="viande"; //définition de la variable dynamique
	echo "Nom du Plat: ".$plat."\n<br>"; //accès au nom de la variable
	echo "Prix du Plat: ".$$plat."\n <br><br>"; //accès a sa donnée
	
	$plat="poisson"; //définition de la variable dynamique
	echo "Nom du Plat: ".$plat."\n<br>"; //accès au nom de la variable
	echo "Prix du Plat: ".$$plat."\n <br><br>"; //accès a sa donnée
	
	$plat="poisson";
	$poisson="poisson chat";
	echo ${$plat}; //accès au nom de la variable
	echo ${$plat}; //
	var_dump($plat);
	?>
	<br><br><br>
	<?php
	
	$a=138; //décimal
	$b=-13; //décimal négatif
	$c=0123; //en octal
	$d=0x1a; //en hexadécimal
	$e="0b11010111"; //en binaire
	
	echo $a;
	var_dump($a);
	echo $b;
	var_dump($b);
	echo $c;
	var_dump($c);
	echo $d;
	var_dump($d);
	echo $e;
	var_dump($e);
	
	?>
	<br>
	<?php
	
	$i=abs($k); //valeur absolue: abs()
	
	$i= rand(); //valeur aleatoire entre 0 et un interval: rand()
	//$i= rand(1.49);
	
	if (is_int($i)); //Vérification si c'est un entier: is_int() ou is_long()
		
	$score=rand(5,348);
	echo "" .$score. "<br>";
	
	?>
	
	<?php
	
	printf("La variable Octane \$c=%o \n <br>",$c); //fonction qui permet d'afficher une chaine de caracteres formatée

	printf("La variable Hexa \$d=%x \n <br>",$d);
	
	printf("La variable Binaire \$e=%b \n <br>",$e);
	
	?>
<br><br><br>
<?php

	$i=6; //Affectation avec =
	//$concat = $k . $m; //concaténation avec .
	//$k .= $m; //concatène et assigne (combiné) avec .=
	
	$pierre=10;
	$booster=20;
	$PB= $pierre.$booster;
	echo "" .$PB. "<br>";
	
	echo $pierre .= $booster;
	
	?>
	
	<?php
	
	$k =512;$m=4;
	
	$somme= $k+$m; //Addition
	$difference= $k-$m; //soustraction
	$produit= $k*$m; //multiplication
	$quotient= $k/$m; //division
	
	$reste= $k%$m; //Modulo -> %
	$p = $k**$m;/*ou*/exp($m*log($k)); //Puissance -> **
	$i=$k++; //incrémentation -> ++
	$d=$k--; //décrémentation -> --
	
	echo "" .$somme. "<br>";
	echo "" .$p. "<br>";
	echo "" .$i. "<br>";
	echo "" .$d. "<br><br><br><br><br>";
	
	$test=50;
	$A=256/8;
	$B=256%5;
	$C=3**7;
	$C1=exp(7*log(3));
	$D=$test++;
	$E=$test--;
	
	echo "A → " .$A. "<br>";
	echo "B → " .$B. "<br>";
	echo "C → " .$C. "<br>";
	echo "D → " .$D. "<br>";
	echo "E → " .$E. "<br><br><br><br>";
	
	$k=36;
	$i=7;
	/*Affectation d'une variable a une autre*/
	$i+=$k;  /* $i=$i+$k; somme*/
	$i-=$k;  /* $i=$i-$k; soustraction */
	$i*=$k; /* $i=$i*$k; multiplication*/
	$i/=$k; /* $i=$i/$k; division*/
	$i%=$k; /* $i=$i%$k; module*/
	$i.=$k; /* $i=$i.$k; addition de plusieurs string(texte)*/
	
	/*SPACESHIP - permet de savoir si c'est supérieur/inférieur/égal
	grace a un systeme 0/-1/1*/
	echo "SPACESHIP NOW";
	/*echo 1 <=> 2;*/
	

	?>
	<br><br><br><br><h1>4</h1><br><br>
	<?php
	
	$prixvoiture=10000;
	if($prixvoiture>15000){echo "C'est une voiture chere, elle vaut: $prixvoiture";}
	else {echo "yolo!<br>";}
	
	/*EXERCICE*/
	$age=14;
	if ($age<18){echo "vous n'avez pas l'age pour jouer au casino HB <br>";}
	$age=$age+7;
	if ($age>20){echo "Bienvenue dans notre casino HB <br>";} if($age=21){echo "Combien voulez-vous jouer aujourd'hui?<br>";}
	
	/*exercice suivant avec indentation*/
	$connexion="true";
	if ($connexion){
		echo "Bienvenue sur notre site <br>";
	}
	else {echo "La connexion n'a pas pu etre établie <br>";
	}
	
	$a=10;
	$b=20;
	if ($a == $b){
		echo "<br>";
	}
	/*exercice du mot de passe*/
	
	$secretpass= "test";
	
	if ($secretpass){
		echo "Mot de passe correct, Bienvenue <NAME> <br>";
	}
	else {
		echo "Erreur. Mauvais Mot de Passe, une équipe est en cours de déplacement vers votre position<br>";
	}
	
	/*OPÉRATEURS DE COMPARAISON*/
	
	//Egal et de meme type : ===
	if ($i===$k);
		
	//Différent de: != ou <>
	if ($i!=$k);
	if ($i<>$k);
		
	//Différent de OU si ils ne sont pas du meme type: !==
	if ($i!==$k);
	
	
	/*OPÉRATEURS LOGIQUES*/
	
	//Et: &&/AND
	if ($i && $k);
	
	//Ou: ||/OR
	if ($i||$k)
		
	
	/*FONCTION STRCMP()*/
	
	
	?>
<br><br><h1>5</h1><br><br>
	<?php
	
	/*Creer une suite de tests qui permettent à un Chef de Projet,
	s'il est connecté, de savoir si son équipe est
	 - complète
	 - incomplète
	 - à moitié complète
	 - Absente aujourd'hui
	
	Une équipe est composé au total de personnes.*/
	
	$b=50;
	if($b>100&&$b<1000){
		echo "La valeur de b est bien supérieur à 100 et inférieur a 1000:$b";
	}
	else if (b==0){
		echo "La valeur de b est bien égale à 0:$b";
	}
	else{
		echo "La valeur de b qui est $b, est bien comprise entre 0 et 100 ou entre 1000 et 2000";
	}
		?>
			<br><br><br>
	<div style="color:blue">_______________________________________<br>
<-- Cours PHP du 04/01/17 --></div>
<br><br>
	<?php
	$ageconducteur=19;
	
	switch ($ageconducteur){
		case "18":
			echo "Vous etes nouveau conducteur<br><br>";
			break;
		case "19":
			echo "Notre assurance est faites pour vous<br><br>";
			break;
		case "25";
			echo "notre assurance vous coute tres cher<br><br>";
			break;
		default:
			echo "bienvenu dans notre assurance, vous
n’avez pas un age qui intéresse notre assurance <br><br>";
	}
	
	//autre exo:
	
	$reste=5;
	
	$action=($reste>4) ? 'supérieur<br>':'inférieur<br>';
	echo $action;
	
	$test1=10;
	$test2=20;
	
	$test3=($test1==$test2) ? "Yes":"Nolo";
	
	echo $test3;
	
	$reste=5;
	if ($reste>4) {
		$reste="C'est Oui!";
		echo "<br><br>" .$reste. "<br>";
	}
	else {
		$reste="C'est Non!";
		echo "" .$reste. "<br><br><br><br>";
	}

	$chocolat=15;
	$chocobon=15;
	
	/*if($chocolat==$chocobon)
	{echo "Valeurs égales";}
		
	elseif ($chocolat==$chocobon);
	{echo "C'est la meme valeur et le meme type";}
	
	elseif($chocolat!=$chocobon);
	{echo "Valeurs différentes";}
	
	if($chocolat!==$chocobon);
	{echo "Variables de types différentes";}*/
	
	$frite=30;
	$coca=0;
	$kdo=false;
	$commande=false;
	$retard=5;
	
	if ($frite==30&&$coca==0)
		{echo "Ma commande est bonne merci<br>";
		$commande=true;}
	else {echo "Ma commande est fausse";}
	
	if ($retard==5||$commande==false)
		{echo "Un muffin pour patienter?<br>";}
	if ($retard==10||$commande==false)
	if ($kdo)
		{echo "Voici votre cadeau<br>";
		$kdo=true;}
	if ($kdo!=true)
		{echo "La prochaine fois nous ferons mieux : voici 15% sur votre prochaine commande. A bientôt !";}
	
?>
			<br><br><br>
	<div style="color:blue">_______________________________________<br>
<-- Cours PHP du 05/01/17 --></div>
<br><br>
	<?php
	
	$panier=0;
	$promo=false;
	$article1="casque";
	$article1_nb=1;
	
	$article2="rasoirs";
	$article2_nb=12;
	
	$article3="livres";
	$article3_nb=5;
	
	echo "ARTICLE -1-<br>";
	if ($article1=="casque" && $article1_nb>0) //dans un "if", dans les parentheses, "test opérateur test"
	{
		echo "1er article sauvegardé dans votre panier<br><br>";
		$panier+=$article1_nb;
	}
	
	echo "ARTICLE -2-<br>";
	if ($article2_nb==12 || $article2=="rasoirs")
	{
		echo "Votre panier contient forcément des rasoirs, c’est le seul article de 12 unités<br><br>";
		$panier+=$article2_nb;
	}
	
	echo "FUSION ARTICLE<br>";
	if ($article1_nb+$article2_nb+$article3_nb>15)
	{
		echo "Nous avons une promo pour vous!<br>";
		$promo=true;
		$panier+=$article3_nb;
	}	
	else {
		echo "si vous commandez plus de livre, vous aurez une promo<br><br>";
	}

	if ($promo==false && $article3_nb<=6)
	{
		echo "nous pouvons vous faire une petite promotion<br>";
	}

	echo "" .$panier. "<br><br><br>";
	
	//LES TABLEAUX ARRAY
	
	$tableau=[1,2,3,4];
	echo "<div style='color:#f200ff;font-size:20px'>TABLEAU --1--</div>";
	echo "<pre>";
	print_r($tableau);
	echo "</pre>";
	
	$ffood=array("McDo","KFC","Subway");
	
	echo "J'aime " .$ffood[0]. ", " .$ffood[1]. " et " .$ffood[2]. ".<br><br>";
	$ffood[3]="Burger King";
	$ffood[4]="Mezzo di Pasta";
	echo "<div style='color:#f200ff;font-size:20px'>TABLEAU --2--</div>";
	echo "<pre>";
	print_r($ffood);
	echo "</pre>";
	
	$ffood[]="Paul Bismuth<br>";
	echo "<div style='color:#f200ff;font-size:20px'>TABLEAU --3--</div>";
	echo "<pre>";
	print_r($ffood);
	echo count($ffood);
	echo "</pre>";
	?>
	<br><br><br>
	<?php
	
	$cours=[1,2,3,4];
	$cours=array("PHP","HTML","CSS","Prestashop");
	$ffood[4]="Javascript";
	$ffood[5]="Wordpress";
	$ffood[]="Symphony";
	echo "<div style='color:#f200ff;font-size:20px'>TABLEAU --4--</div>";
	echo "<pre>";
	print_r($ffood);
	echo "</pre>";
	
	$coordonnees['prenom']="Francois";
	$coordonnees['nom']="Dupont";
	$coordonnees['adresse']="3 Rue du Paradis";
	$coordonnees['ville']="Marseille";
	echo "<div style='color:#f200ff;font-size:20px'>TABLEAU --5--</div>";
	echo "<pre>";
	print_r($coordonnees);
	echo "</pre>";
	
	$panier1['Carotte']=15;
	$panier1['Aubergine']=3;
	$panier1['Poivron']=12;
	$panier1['Avocat']=4;
	$panier1['Haricot Vert']=30;
	echo "<div style='color:#f200ff;font-size:20px'>TABLEAU --ASSOCIATIF--</div>";
	echo "<pre>";
	print_r($panier1);
	echo "Nous avons " .$panier1['Avocat']. " avocats et " .$panier1['Haricot Vert']. " Haricots Verts.";
	echo "</pre>";
	
	$dimension = array (
		"fruits" => array("a" => "orange", "b" => "banana",
		"c" => "apple"),
		"numbers" => array(1, 2, 3, 4, 5, 6),
		"medals" => array("first", 5 => "second", "third")
		);
	echo "<div style='color:#f200ff;font-size:20px'>TABLEAU --ARRAY DANS ARRAY--</div>";
	echo "<pre>";
	print_r($dimension);
	echo "</pre>";
	?>
				<br><br>
	<div style="color:blue">_______________________________________<br>
<-- Cours PHP du 11/01/17 --></div><br>
	<?php
	
	//BOUCLE FOR
	
	for($i=0;$i<10;$i++){
		echo "$i - Test de la boucle 'for'<br>";
	}
	echo "<br>";
	for($j=10;$j>=0;$j--){
		if ($j==0){
			echo "Fini !<br><br>";
		}
		else {
			echo "Plus que $j secondes avant la fin du monde<br>";
		}
	}
	
	$tableuprenom = array("Jean","Pierre","Paul","Romain","Léo");
	$i=0;
	
	for($i;$i<sizeof($tableuprenom);$i++) {
	    echo "$tableuprenom[$i] <br>";
	}
	echo "<br><br>";
	
	//BOUCLE FOR
	
	//BOUCLE WHILE
	
	/* déclaration du compteur - EXEMPLE
	$i=5;
	while($i>=0){
	    echo "La fusée part dans $i <br>";
	    $i--;
	}   */
	
	//exo 1
	
	$j=1;
	while($j<=12){
	    echo "ça fait $j mois qu'on a fêté la nouvelle année.<br>";
	    $j++;
	}
	echo "<br>";
	//Exo 2
	
	$newyear=false;
	if ($j=12){
	$newyear=true;    
	}
		$j=1;
	while($j==12){
	    echo "On fête le nouvel an chinois dans $j mois.<br>";
	    $j++;
	}
	echo "<br>";
	//EXO3 - Table de 8
	
	$i=0;
	$table=8*$i;
    while ($i<=10){
        $table=8*$i;
        echo "8x$i=". ($table) ."<br>";
        $i++;
    }
  echo "<br>";
    
    //EXO4 - Tableau client
    
    $content = array("Nathan","Smith","Dupond");
    $test=false;
    $k=0;
	
	while ($test!=true){
	    if ($content[$k]="Smith"){
	        $test=true;
	        echo $content[1]. "<br><br>";
	    }
	    else{
	        echo "$k n'est pas Smith<br><br>";
	    }
	    $k++;
	}
	
	//BOUCLE WHILE
	
	$morpion = array (
		array("x","o","x"),
		array("o","x","o"),
		array("x","x","o"),
	);
	echo "<pre>";	
    foreach($morpion as $ligne) {
        foreach($ligne as $colonne0){
            echo "$colonne0";
        }
        foreach($ligne as $colonne1){
            echo "$colonne1";            
        }
        foreach($ligne as $colonne2){
            echo "$colonne2";            
        }
    }
	echo "</pre>";

	//BOUCLE DO WHILE
	//EXO1
    $coureurs=12;
    do{
        if($coureurs==12){
            echo "La course est lancée avec les 12 coureurs<br>";
        }
        else if($coureurs==1||$coureurs==0){
            echo "Il reste $coureurs coureur en course<br>";
        }
        else{
            echo "Il reste $coureurs coureurs en course<br>";
        }
        $coureurs--;
    }
    while($coureurs>=0);
    
    echo "<br>";
    
    //EXO2&3
    
    $content = array("Nathan","Smith","Dupond");
    $test=false;
    $k=0;
	
    do{
	    if ($content[$k]=="Smith"){
	        $test=true;
	        echo $content[$k]. "<br><br>";
	    }
	    else{
	        echo "Ce n'est pas Smith<br><br>";
	    }
	    $k++;
	}
	while ($test!=true);
	
	//BOUCLE DO WHILE
	
    //BOUCLE FOR EACH
    $equipes = array(
        "France"=>"Rugby",
        "Allemagne"=>"Football",
        "Suisse"=>"Tennis",
        "Espagne"=>"Basket");
        $j=0;
        
        foreach($equipes as $equipe => $description){
            echo "<pre>";
            echo "$equipe:$description";
            echo "</pre>";
        }
    
    //BOUCLE FOR EACH
	
	//INSTRUCTION - BREAK

    $compteur = 0;
    while( $compteur < 5 ) {
        $compteur++;
    if( $compteur == 3 ) {
        echo "break<br>";
        break;
    }
    echo "Fin de la boucle while : compteur=$compteur<br>";
    }
    echo "Après le break de la boucle <br><br>";

	//INSTRUCTION - BREAK
	
	//INSTRUCTION - CONTINUE
	
	$compteur=0;
	while( $compteur < 5 ){
	    $compteur++;
    if($compteur == 3){
        echo "continue<br>";
        continue;
    }
        echo "Fin de la boucle while : compteur=$compteur<br>";
	}
	echo "Après la boucle avec continue<br>";
	
	//INSTRUCTION - CONTINUE
	
	?>
				<br><br>
	<div style="color:blue">_______________________________________<br>
<-- Cours PHP du 25/01/17 au 27/01/17 --></div><br>
	<?PHP

    //EXERCICE 1 - ADDITION & MULTIPLICATION

	$ar1=1;
	$ar2=5;
	
	
	function addition ($ar1,$ar2) {
	    return $ar1+$ar2;
	}
	
	$result = addition(1,5);
	
	echo "$result <br><br>";


    function multi ($ar1,$ar2) {
        return $ar1*$ar2;
    }
    
    $result1= multi(1,5);
    echo "$result1 <br><br>";
    
    //EXERCICE 1 - ADDITION & MULTIPLICATION

    //EXERCICE 2 - Ajouter texte de fin
    
    /**
     * fonction add qui ...
     * $phrase : une chaine de caracteres
     * 
     */
    function add ($phrase) {
        $addend=" By Human Booster";
        return $phrase.$addend;  
    }
    
    $resultat = add("test");
    echo "$resultat <br><br>";
    
    //EXERCICE 2 - Ajouter texte de fin

    //EXERCICE 3 - Comparer 2 mots

    
    function check ($mot1,$mot2) {
        return $mot1==$mot2;
    }
    
    $resultat1= check("test","testfv");
    
    echo "$resultat1 <br><br>";
    
    if ($resultat1==1){
        echo "Les mots sont identiques<br><br>";
    }
    else{
        echo "Les mots ne sont PAS identique<br><br>";
    }
    
    //EXERCICE 3 - Comparer 2 mots
    
    //EXERCICE 4 - FONCTION VERIF DE MOTS
    

    function getpalindrome ($mot){
        $palin=strrev($mot);
        if ($mot==$palin){
            return "C'est un Palindrome";
        }
        else {
            return "Ce n'est pas un palindrome";
        };
        $resultat=getpalindrome("");
    }


    
    if(isset($_GET['rech']) AND !empty($_GET['rech'])) {
        $rech = htmlspecialchars($_GET['rech']);
        echo getpalindrome($_GET['rech']);
    }
    ?>
    
    <form method="GET">
        <input type="Search" name="rech" placeholder="Recherche..."></input>
        <input type="submit" valut="Valider"></input>
    </form>
    <?php

    

    //EXERCICE 4 - FONCTION VERIF DE MOTS

    //EXERCICE 5 - TRIAGE D'UN TABLEAU NUMERIQUE
    
    /*$tableau= array (
        "T1" => array (1,2,3,4),
        "T2" => array (5,6,7,8),
        "T3" => array (9,10,11,12),
        );*/
        $tableau= [5,4,3,1,2];
        
        echo "<pre>";
        print_r ($tableau);
        echo "</pre><br><br>";
        
        function gettabletrie($tableau){
            $count2= count($tableau);
            
            for($i=0;$i<$count2-1;$i++) {
                for ($j=0;$j<$count2-1;$j++){
                    if ($tableau[$j] > $tableau[$j+1]){
                        $tampon=$tableau[$j+1];
                        $tableau[$j+1]=$tableau[$j];
                        $tableau[$j]=$tampon;
                    }
                }
            }
            return $tableau;
        }
        
        
        
    $tab = [1,5,4,5,6,8,5,4,8,5,4,8,5,2,2,7,9,10];
    
    $trier = gettabletrie($tab);
    
    echo "<pre>";
    print_r($trier);
    echo "</pre>";

    //EXERCICE 5 - TRIAGE D'UN TABLEAU NUMERIQUE
    
    //EXERCICE 6 - CREER LA FONCTION getlast()
    
    function getlast($tableau){
    $nombre = sizeof($tableau)-1;
        for ($i=0;$i <= $nombre;$i++){
            if ($i==$nombre){
                $valeur=$tableau[$i];
            }
        }
    return $valeur;
    }
    
    echo getlast($tab)."<br><br><br>";
    
    //EXERCICE 6 - CREER LA FONCTION getlast()
    
    //EXERCICE 7/8 - CODER LA FONCTION getdate()
    
    echo "Aujourd'hui, nous sommes le ".date('d/m/y').", et voila.<br><br>";
    

    echo "Dans une semaine, nous seront le ".date('d/m/y',strtotime("+1week")).", et voila.<br><br>";
    
    //EXERCICE 7/8 - CODER LA FONCTION getdate()
    
    //EXERCICE 10 - Fonction décrémentation
    
    function getdecrement(int $nombre){
        $resultat=--$nombre;
        return $resultat;
    }
    
    
    echo getdecrement(5);
    
    //EXERCICE 10 - Fonction décrémentation

    //EXERCICE 11 - fonction getdeuxarguments()
    
    function getdeuxarguments($mot1,$mot2){
        if($mot1==""){
            return "false";
        }
        else if($mot1+$mot2){
            return "true";
        }
    }
    
    $result = getdeuxarguments("-uruye","test");
    
    echo "$result";
    
    //EXERCICE 11 - fonction getdeuxarguments()

    
	?>
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
        public $solde = 1000;
        const PLANCHER = 6000;
        public $rib;
        public $nomclient;
        const creationdate = "06/02/17";
        //public region = 4000;
        //ATTRIBUTS
        
        //METHODES
        
        function creditsolde($mot){
            $this->solde = $this->solde+ $mot;
        }
        
        function debitsolde($mot){
            $this->solde = $this->solde- $mot;
        }
        
                    //This désigne l'objet que l'on est entrain de créer.
        function transfert($mot, $autrecompte){
            $this->solde = $this->solde - $mot;
            $autrecompte->solde=$autrecompte->solde+$mot;
        }
        
        //METHODES
        
    }
    $meincompte= new CompteenBanque();
    
    
    echo "Le solde de mon compte est de: <b>";
    echo $meincompte->solde;
    echo "€</b><br><br><br>";
    
    $meincompte->creditsolde(5000);
    echo "Votre solde est maintenant de: <b>";
    echo $meincompte->solde;
    echo "€</b><br><br>";
    ?>
    _______________________<br><br>
    <?php
    
    $meincompte->debitsolde(10000);
        if($meincompte->solde<0){
            echo "Vous etes a découvert de: <b>" .$meincompte->solde. "€</b><br><br>";
        }
        else{
            echo "Votre solde est maintenant de: <b>" .$meincompte->solde. "€</b><br><br>";
        }
    

    $region= new CompteenBanque();
    
    $region->transfert(100,$meincompte);
        echo "La somme indiqué a été transferé avec succès !<br>";
        echo "Votre solde est de <b>" .$region->solde. "€</b> maintenant.<br><br>";

    
    
    //EXO Voitures avec Att+MEthodes.
    
    class voiture extends vehiculemoteur{
        //ATTRIBUTS
        public $vitesse;
        public $marque;
        public $année;
        public $modele;
        public $niveauEssence;
        const NBroues=4;
        //ATTRIBUTS
        
        //METHODES
        
        function __construct($marque,$modele){
            $this->marque = $marque;
            $this->modele = $modele;
        }
        
        
        function demarrer(){
            echo "La voiture est bien demarrée<br><br>";
        }
        
        //Calcule de la distance D = V x t     D=Km | V=Km/h | t=heure
        function avancer($temps,$vitesse){
            $distance = $temps * $vitesse;
            echo "Nous avons roulé<b> $temps </b>heure(s) et nous avons avancés de <b>$distance</b> Km<br><br>";
        }
        
        function freiner(){
            echo "Ma voiture freine bien avec l'ABS";
        }
        
        //METHODES
    }
    
    
    $voiturequentin = new voiture("Toyota","T-800");
    
    $voiturequentin->niveauEssence = 1/4;
    echo "La voiture a <b>" .$voiturequentin::NBroues. " roues</b> et à un niveau d'essence de <b>" .$voiturequentin->niveauEssence. "</b><br><br><br>";
    
    
    $voiturequentin->avancer(50,110);
    
    //INSTANCEOF
    //
    //Verifie si un objet et associé a une class (booléan)
    
    if($voiturequentin instanceof voiture){
        echo "Vrai: Objet associé a cette class<br>";
    }
    else{
        echo "Faux: Objet non-associé a cette class<br>";
    }


    //extends
    //
    //faire pointer nouvelle classe vers une classe parente
    
    class vehiculemoteur{
        //ATTRIBUTS
        public $nombreroues;
        public $voie;
        public $nombredeportes;
        
        //ATTRIBUTS
        
        //METHODES
        function demarrer2(){
            echo "D: Mon véhicule démarre<br>";
        }
        
        function avancer2(){
            echo "A: Mon véhicule démarre<br>";
        }
        
        function freiner2(){
            echo "F: Mon véhicule démarre<br>";
        }
        
        function fermerportes($mot){
            
            while($mot >0){
                echo "<br>Porte <b>$mot</b> fermée<br>";
                $mot--;
            }
                
                if($mot=1){
                    echo "<br>";
                }
        }
        //METHODES
    }
    

    $mavoiture = new voiture("Toyota","T-1000");
    
    $mavoiture->fermerportes(5);
    
    $mavoiture->demarrer2();
    $mavoiture->avancer2();
    $mavoiture->freiner2();

    $mavoiture->freiner();
    
    echo "<br>";
    
    
    class animal{
        //ATTRIBUTS
        public $cri;
        public $nom;
        //ATTRIBUTS
        
        //METHODES
        
        function crier(){
            $mot = strlen($this->nom);
            while ($mot>0){
            echo "$mot -> Je suis<b> " .$this->nom. " </b>et quand je cri je<b> " .$this->cri. "</b><br>";
            $mot--;
        }
        
        
    }
    }
    
    class chat extends animal{
        
        function __construct(){
            $this->cri = "miaule";
            $this->nom = "mistigri";
        }
    }
    
    $yolo = new chat;
    $yolo->crier();
    echo "<br><br><br><br>";
    
    
    
    
    
    
    
    //RETOUR AUX BANQUES !!!!
    
    class banque{
        public $agence;
        public $rib;
        public $nomclient;
        public $solde;
        
        function __construct($rib,$agence){
            $this->agence=$agence;
            $this->rib=$rib;
        }
            
        function getAgence(){ //Accesseur (getter) fonction permettant d'avoir accès a la valeur d'une variable d'un objet
            return $this->agence;
        }
        
        function setAgence($agence){ //Mutateur (setters) fonction permettant de modifier la valeur d'une variable d'un objet
            $this->agence=$agence;
        }
    }
    
    $objetbanque = new banque(11212,"Cournon");
    
    class comptequentin extends banque{
        //ATTRIBUTS
        private $_pourcentage;
        const DELAI_ARGENT_BLOQUE=6; //en mois
        //ATTRIBUTS
        
        //METHODES
        
        function __construct($rib,$agence,$pourcentage){
            parent::__construct($rib,$agence);
            $this->_pourcentage=$pourcentage;
            $this->solde=900;
        }
        
        function afficher(){
            echo "Rib: <b>" .$this->rib. "</b><br> Agence: <b>" .$this->agence. "</b><br> Pourcentage: <b>" .$this->_pourcentage. "</b><br> Solde: <b>" .$this->solde. "</b><br>";
        }
        
        
        //METHODES
    }
    
        $moncompte= new comptequentin(11254,"Clermont",0.8);
        $moncompte->afficher();
        
        echo "<pre>";
        print_r($moncompte); //print_r permet d'afficher l'arborescence d'un objet comme il en est capable pour une variable de tableau
        echo "</pre>";
        
        
    
	?>
	
	
</body>
</html>