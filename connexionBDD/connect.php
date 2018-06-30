
<?php


	$db_name = '';
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';


	
try{
	$connection = new PDO("mysql:host=$db_host;dbname=$db_name",$db_user,$db_pass);
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br>";
    die();
}



?>