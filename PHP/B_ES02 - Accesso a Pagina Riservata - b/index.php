<!-- Alberto Angelo Quagliata -->
<html>
<head>
	<title>Login pagina</title>
</head>

<body>
	
<?php

if(isset($_POST['username']) && ($_POST['password']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
		if($username!="admin" || $password!="password") 
		{
			echo "<h2>Credenziali sbagliate! :(</h2>";
		} 
		
		
		else 
		{
			echo "<h2>Benvenuto  :) " . $username . " nell'area riservata!</h2>";
		}

}else {
?>
	<form name="frmLogin" action="index.php" method="POST">
	Username: <input type="text" name="username"><br>
	Password: <input type="password" name="password"><br>
	<input type="submit" value="Submit">
</form>

<?php
}
?>

</body>
</html>
