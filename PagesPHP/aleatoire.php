<?php
session_start();
echo'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Accueil</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" media="screen" type="text/css" title="Design" href="css/design.css" />
</head>

<body>';
if (isset($_POST['envoi']) && $_POST['envoi']=='Envoyer')
	{
	if($_POST['password']!=$_POST['confirm'])
		{
		echo'<p>Les deux mot de passe sont différent.</p>
		<p><a href="cible.php">Retour</p></p>';
		}
	else{
		$username = $_POST['username'];
		echo '<p>'.$username.'</p>';
		}
	}
else{
	echo'<form action="cible.php" method="post">
	<p class="menu">
	<strong>Connexion</strong><br />
	<!--Connexion-->
	Nom de compte: <input type="text" name="username" style="width:80px;" title="Saisissez votre nom de compte"/><br />
	Mot de passe: <input type="password" name="password" style="width:80px;" title="Saisissez votre mot de pass"/><br />
	Confirmation: <input type="password" name="confirm" style="width:80px;" title="Re saisissez votre mot de pass"/><br />
	<!--Bouton-->
	<input type="submit" name="envoi" value="Envoyer" class="bouton"/>';
	}	
echo'</p>
</body>
</html>';
?>