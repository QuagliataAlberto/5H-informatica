<!-- Alberto Angelo Quagliata -->

<?php
	session_start();
	require 'function.php';
?>
<html>
	<head>
		<title>Cambia password</title>
	</head>

	<body>
		<h2>Imposta nuova password</h2>

	<?php
		//definizioni delle variabili per la connessione al DB
		  define('DB_SERVER', 'localhost');
		  define('DB_NAME', 'gestione_utenti');
		  define('DB_USER', 'root');
		  define('DB_PASSWORD', '');

		  if(!isset($_SESSION['login']))
		  {
	?>	
			<form name="frmLogin" action="PassReset.php" method="POST">
				<label>Username <input type="text" name="username" placeholder="username"></label><br/>
				<label>Nuova Password <input type="password" name="password" placeholder="password"></label><br/>
				<input type="submit" name="Login" />
			</form>
	<?php
	
		   echo "<a href='homepage.php'>Home page</a><br>";
		
		  }else 	
			{	
				reset_psw();
				echo " torna al login: <br>";
				echo "<a href='Login.php'>Login</a><br>";
			}
			
	?>
	
	</body>
	
</html>
