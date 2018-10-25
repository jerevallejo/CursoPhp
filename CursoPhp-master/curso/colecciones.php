
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<?php 

	$ingleses=[ 'Aston Martin','Mini','Vaulxhall', 'Bently','Lotus', 'shalby', 'Rolls Royce','Jaguar'];
	$semana=['Domingo','Lunes','Martes','Miercoles','Jueves', 'Vierenes', 'sabado'];
	$meses = [1 =>'enero','febrero','marzo','abril','mayo','junio','julio',
               'agosto','septiembre','octubre','noviembre','diciembre'];

	echo 'Hoy es: ', $semana[date('w')], ' ', date('d') ,' de ', $meses[date('n')];
	$i=0;
	$cant=count($ingleses);
	while ($i<$cant ) {
		echo $ingleses[$i],'<br>';
		$i++;
		
	}
	//echo($ingleses[1]);


?>
<script>

 	ingleses=[ 'Aston Martin','Mini','Vaulxhall', 'Bently','Lotus', 'shalby', 'Rolls Royce','Jaguar'];



</script>

<!-- <pre><?php var_dump($ingleses); ?></pre> -->
 
<!-- <pre><?php print_r($ingleses); ?></pre> -->
	

</body>
</html>