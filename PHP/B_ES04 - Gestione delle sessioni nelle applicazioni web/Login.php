<!-- Alberto Angelo Quagliata -->
<html>
<head>
	<title>Login pagina</title>
</head>

<body>
<h2>Controllo credenziali</h2><hr/>

<?php
	session_start()
	if(isset($_SESSION['username']))
	{
		$username = $_SESSION['username'];
		$password = $_SESSION['password'];
			if($username!="admin" || $password!="password") 
			{
				echo "<h2>Credenziali sbagliate!</h2>";
			} 
			
			
			else 
			{
				header("Location: PaginaRis.php");
			}

	}
	
	if(!isset($_SESSION["username"))
?>
	<form name="frmLogin" action="PaginaRis.php" method="POST">
	Username: <input type="text" name="username"><br>
	Password: <input type="password" name="password"><br>
	<input type="submit" value="Submit">
</form>

<?php
}
?>

<a href="index_sessione.php"><h2>Torna alla home page</a><br/></h2>

</body>
</html>
