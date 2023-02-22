<!-- Alberto Angelo Quagliata -->

<html>
	<head>
		<title>ITCS Erasmo da Rotterdam</title>
	</head>
	
	<body>
		<?php
			session_start(); //inizio della sessione
			if(!isset($_SESSION['login']))
			{
				echo "<h2>Effettuare prima il login.</h2>";
		?>
				<a href="Login.php"><h3>Effettua il login</h3></a>
		<?php
			}
				else
				{
					echo "<h2>Benvenuto nella pagina riservata!</h2>";
		?>
				<a href="Logout.php"><h2>Esci</h2></a>
		<?php
				}
		?>
	</body>
	
</html>
