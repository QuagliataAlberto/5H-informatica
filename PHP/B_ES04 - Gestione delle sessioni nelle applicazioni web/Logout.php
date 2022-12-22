<!-- Alberto Angelo Quagliata -->

<html>
<head>
	<title>Uscita - ITCS Erasmo da Rotterdam</title>
</head>

<body>

<?php

	session_start();
	session_destroy();
	echo"<h3>Logout avvenuto</h3>";


?>

	<a href="Login.php"><h2>Accedi di nuovo</h2></a>
	<a href="index_session.php"><h2>Torna alla Home</h2></a>

</body>
</html>
