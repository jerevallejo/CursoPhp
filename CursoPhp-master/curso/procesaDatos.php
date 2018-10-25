<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php 
	$nombre= $_POST["nombre"];
	$mail= $_POST["email"];

	echo "tu nombre es: ", $nombre,"<br>" ,"tu mail es: ", $mail;

 ?>

</body>
</html>