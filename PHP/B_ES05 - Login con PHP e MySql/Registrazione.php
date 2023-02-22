<!-- Alberto Angelo Quagliata -->

<?php
	session_start();
	require 'function.php';
?>

<html>
	<head>
		<title>ITCS Erasmo da Rotterdam</title>
	</head>

	<body>
		<?php
		  //definizioni del db
		  define('DB_SERVER', 'localhost');
		  define('DB_NAME', 'gestione_utenti');
		  define('DB_USER', 'root');
		  define('DB_PASSWORD', '');

		  if(!isset($_SESSION['login']))
			{
			  
			  if(!isset($_POST['Submit']))
				{		  
		?>
					<h2>Creazione account</h2>
					<form name="frmLogin" action="<?=$_SERVER['PHP_SELF']?>" method="post">
					   <label>Nome: <input type="text" name="nome" /></label><br />
					   <label>Cognome: <input type="text" name="cognome" /></label><br />
					   <label>Email: <input type="text" name="email" /></label><br />
					   <label>Data di nascita: <input type="date" name="nascita" /></label><br />
					   <label>Username: <input type="text" name="username" /></label><br />
					   <label>Password: <input type="password" name="password"/></label><br />
					   <input type="submit" name="Submit" value="Invio" />
					</form><?php 
					 
					echo "<a href='homepage.php'>Home Page</a><br>";
		   
				}else 
				 {
					signup();
					echo "Accedi alla pagina riservata <br>";
					echo "<a href='PaginaRis.php'>Pagina Riservata</a><br>";
				 }
				 
			}
		?>
		
	</body>
	
</html>
