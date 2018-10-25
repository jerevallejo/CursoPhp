<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<center>

<?php
	$pasword="admin";
	$user="admin"; 
	$img='<img src="img/gandalf.jpg">';
	$contraseña=$_POST["contraseña"];
	$usuario=$_POST["usuario"];

	if ($user==$usuario & $pasword==$contraseña)
 		{
			$img= '<img src="img/yisus.jpg">';
		}
	echo $img;


 ?>
</center>	
</body>
</html>
	