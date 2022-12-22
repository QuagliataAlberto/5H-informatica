<!-- Alberto Angelo Quagliata -->

<?php
session_start()
?>

<html>
<head>
	<title>Login pagina</title>
</head>

<body>
<?php


	
	if(isset($_POST['username']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
			if($username!="admin" || $password!="password") 
			{
				echo "<h2>Credenziali sbagliate!</h2>";
			} 
			
			
			else 
			{
				$_SESSION["username"]=$_POST["username"];
				$_SESSION["password"]=$_POST["password"];
				header("Location: PaginaRis.php");
			}

	}
	
	if(!isset($_SESSION["username"]))                   
	{?>
		<form name="frmLogin" action="PaginaRis.php" method="POST">
		Username: <input type="text" name="username"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit" value="Submit">
	
	</form><?php

	
	}
?>

<a href="index_sessione.php"><h2>Torna alla Home page</a><br/></h2>

</body>
</html>		
