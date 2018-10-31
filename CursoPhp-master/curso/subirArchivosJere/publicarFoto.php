<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php 
	$archivo = $_FILES['foto'];
	$imgDefecto='<img src="no-img.png">';
  ?>
 <pre><?php// print_r($archivo) ?></pre>
<?php 
    echo $_FILES['foto']['name'], ' ';
    echo $_FILES['foto']['type'];
    echo $_FILES['foto']['error'];
	echo $imgDefecto;

		//echo $imgDefecto='<img src="fotos/<?php echo $_FILES['foto']['name']
?>
<hr>
<?php
    $ruta = 'fotos/';
    $imagenTMP = $_FILES['foto']['tmp_name'];
    $imagen = $_FILES['foto']['name'];
    move_uploaded_file($imagenTMP, $ruta.$imagen)

	/*if ($_FILES['foto']['error'] == 4)
	{
		echo $imgDefecto;
	}*/

 ?>
 </body>
</html>