<!-- Alberto Angelo Quagliata -->

<?php
session_start(); // Avvia la sessione php.
require 'function.php';
?>

<html>
	
	<head>
		<title>Login</title>
	</head>
	
	<body> 
		<?php
			//definizione delle variabili per la connessione al DB
			define('DB_SERVER', 'localhost');
			define('DB_NAME', 'gestione_utenti');
			define('DB_USER', 'root');
			define('DB_PASSWORD', '');

			if(!isset($_SESSION['login']))
			{
				//il login non è ancora verificato
				if(!isset($_POST['Login']))
				{
					//Visualizzo il form
		?>
					<form name="frmLogin" action="Login.php" method="POST">
						<label>Username <input type="text" name="username" placeholder="username"></label><br />
						<label>Password <input type="password" name="password" placeholder="password"></label><br />
						<input type="submit" name="Login" />
					</form>
					<p>Non sei registrato? <a href="Registrazione.php"> Crea un account</a>.</p>
					<p>Password dimenticata? <a href="PasswordChange.php"> Cambia Password</a>.</p><br/>
		<?php
					
				}else
					{
						//verifico le credenziali inserite, utente già fatto il login
						login();
					}
			}
			else
			{
				//Se utente ha già fatto il login, compare link per alcune pagine
				echo "L'utente ha già effetuato il login <br>";
				echo "<a href='homepage.php'>Home</a><br>";
				echo "<a href='Logout.php'>Esci</a><br>";
			}
		
		?>
		
	</body> 
	
</html>
