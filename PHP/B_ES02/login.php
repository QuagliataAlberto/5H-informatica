<html>
<head>
	<title>ITCS Erasmo da Rotterdam</title>
</head>
<body>
	<h1>Controllo credenziali</h1>
<?php
$usr=$_POST["username"];
$pwd=$_POST["password"];
if ($usr!="admin" || $pwd!="password")  {
?>
<h4>Attenzione! Nome utente o password errate.</br>
Accesso non consentito!</h4>
<?php
} else {
	echo "<h4>Benvenuto ".$usr."<br/>nell'area riservata del sito!</h4>";
	
}
?>
</body>
</html>
