<html>
<head>
<title>ITCS Erasmo da Rotterdam</title>
</head>
<body>
<?php


session_start(); // inizio della sessione

if(!isset($_SESSION["username"]) && empty($_SESSION["username"]))
{
	echo "<h1>Effettuare prima il login.</h1>"; ?>

	<a href="Login.php"><h2>Effettuare il login</h2></a>
	

<?php 

}
else

{
	echo "Benvenuto nel sito!";
?>

	<a href="Logout.php"><h2>Uscita</h2></a>
	
<?php
}

?>

</body>
</html>
