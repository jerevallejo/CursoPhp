<?php 
	require 'persona.php';
	require 'empleado.php';
	$objEmpleado = new Empleado('juan', 'carlo', 59999);
	$objEmpleado2 = new Empleado('carlos','juano',60002);
	//$objPersona->setNombre('juan');
	//$objPersona->setApellido('Carlin');
	$detalleEmpleado = $objEmpleado-> verDatos();
	$detalleEmpleado2 = $objEmpleado2-> verDatos();
	$sueldoEmpleado = $objEmpleado-> pagaGanancias( $objEmpleado->getSueldo());
	$sueldoEmpleado2 = $objEmpleado2-> pagaGanancias( $objEmpleado2->getSueldo());
	//$detalleEmpleado = $objEmpleado-> pagaGanancias(getSueldo());
	//$detalleEmpleado2 = $objEmpleado2-> pagaGanancias(getSueldo());
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Vista empleado</title>
 </head>
 <body>	
 	<h1>vista empleado</h1>

	<?php echo $detalleEmpleado;?>
	<br>
	<?php echo $sueldoEmpleado;?>
	<br>
	<h4>otra persona (?</h4>
	<br>
	<?php echo $detalleEmpleado2;?>
	<br>
	<?php echo $sueldoEmpleado2;?>
	<br>

 </body>
 </html>