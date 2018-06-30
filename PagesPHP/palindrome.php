<!doctype html>
<html>
	<head>
		<title>Palindrome</title>
			<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../CSS/CSSpalindrome.css?t123">
	</head>
	<body>

			<!-- MENU DE DROITE AVEC DESCRIPTION -->
		<div class="nav">
			<h1 class="nav1">Fichier «palindrome.php»</h1>
			<a href="../index.php" class="nav2">Retour Menu Principal</a><br>
		</div>
		
		<div class="description">
			<p class="D2"><u>Description</u><br>▼<br>Service de recherche. Il vous dira si l'un des mots que vous ecrirez, sera un palindrome ou non !</p>
			<input class="D3" value="Modifier" type="submit" name="modif"></input><br>
		</div>
			<!-- MENU DE DROITE AVEC DESCRIPTION -->



			<!-- DÉBUT DU PALINDROME -->
			

		<form class="alignement" method="GET">
		<p style="text-align:center;display:inline-block"><u><i><b>Ecrivez un mot:</b></u></i></p><br>
			<input type="Search" name="rech" placeholder="Recherche..."></input>
			<br><input class="boutonenvoi" type="submit" valut="Valider"></input><br><br><br>



		<?php

			function getpalindrome ($mot){
				$palin=strrev($mot);
				if ($mot==$palin){
					echo "C'est un Palindrome";
				}
				else {
					echo "Ce n'est PAS un palindrome";
				};
			}
			   
			
			
			if(isset($_GET['rech']) AND !empty($_GET['rech'])) {
				$rech = htmlspecialchars($_GET['rech']);
				echo "'$rech' → ";
				echo getpalindrome($_GET['rech']);
			}
		?>
		</form><br>





	</body>
</html>