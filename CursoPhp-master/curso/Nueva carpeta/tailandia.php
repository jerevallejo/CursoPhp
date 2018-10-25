<?php

	$locacion = array("chinatown",
					"floating-market", 
					"hat-laem",
					"wat-arun",
					"khao-san-road",
					"ko-khai-beach",
					"kwai-river",
					"limestone",
					"longtail-boat",
					"maya-bay",
					"pra-nang",
					"rai-leh-beach",
					"rawai",
					"sirocco",
					"tuk-tuk",
					"wat-saket"
					 );

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tailandia</title>
	<style type="text/css">
		body{font-family: "Myriad Pro"; color: #52BAE0}
		.contenedor{
			width:100px; 
			padding:5px; 
			margin:2px; 
			float:left; 
			border: 1px solid #ccc;
		}
		h1{padding-left:30px;font-size: 35px}
		h2{font-size: 11px; color: #555;}
	</style>
</head>
<body>

	<h1>Tailandia</h1>	
	
	
	<?php 
		$titulo=0;
		$imagen=0;
		$lengTitulo=count($locacion);
		
	?>
		<div class="contenedor">
				imagen aquí
			<br>	
		<?php 	while($titulo=$lengTitulo)
	 	{ ?>
			<h2><?php echo $locacion[$titulo];?></h2>
			$titulo++;
		<?php } ?>
			
		</div>

	 ?>

</body>
</html>

