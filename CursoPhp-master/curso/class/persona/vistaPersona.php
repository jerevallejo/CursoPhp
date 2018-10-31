<?php 
	require 'persona.php';
	$objPersona = new Persona('juan', 'carlo');
	$objPersona2 = new Persona('carlos','juano');
	//$objPersona->setNombre('juan');
	//$objPersona->setApellido('Carlin');
	$detallePersona = $objPersona-> verDatos();
	$detallePersona2 = $objPersona-> verDatos();
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Vista persona</title>
 </head>
 <body>
 	<h1>vista persona</h1>

	<?php echo $detallePersona;?>
	<br>
	<h4>otra persona (?</h4>
	<br>
	<?php echo $detallePersona2;?>

 </body>
 </html>