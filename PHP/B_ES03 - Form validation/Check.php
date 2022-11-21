<!-- Alberto Angelo Quagliata -->
<?php

$nome=trim($_POST["nome"]);  /*assegno al campo nome il valore nome*/
$cognome=trim($_POST["cognome"]);
$data=trim($_POST["data"]);
$nickname=trim($_POST["nickname"]);
$email=trim($_POST["email"]);
$cellulare=trim($_POST["cellulare"]);
$password=trim($_POST["password"]);


if(preg_match('/^[a-zA-Z]*$/',$nome))
	{
		echo "Nome inserito: ";
		echo $nome;
	}

else
	{
		echo "<br>Caratteri non ammessi, inserire caratteri diversi. <br>";
	}
	
	
	
	
	
if(preg_match('/^[a-zA-Z]*$/',$cognome))
	{
		echo "<br>Cognome inserito: ";
		echo $cognome;
	}	
	
else
	{
		echo "<br>Caratteri non ammessi, inserire caratteri diversi. <br>";
	}
	



if(preg_match('/^[a-zA-Z0-9]*$/',$nickname))
	{
		echo "<br>Nickname inserito: ";
		echo $nickname;
	}	
	
else
	{	
		echo "<br>Caratteri non ammessi, inserire caratteri diversi. <br>";
	}
	
	
	
	
	
if(preg_match('/^[a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/',$email))
	{
		echo "<br>Email inserita: ";
		echo $email;
	}
	
else
	{
		echo "<br>Caratteri non ammessi, inserire caratteri diversi. <br>";
	}
	
if(preg_match('/^[0-9]/', $cellulare))
	{
		echo "<br>Numero di cellulare inserito: ";
		echo $cellulare;
	}
	
else
	{
		echo "<br>Caratteri non ammessi, inserire caratteri diversi. <br>";
	}
	
if(preg_match('/^[a-zA-Z_0-9]/', $password))
	{
		echo "<br>password inserita: ";
		echo $password;
	}
	
?>
	


