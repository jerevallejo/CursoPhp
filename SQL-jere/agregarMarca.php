<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>
<?php 
	require 'requires/conexion.php';
	require 'requires/funcionesMarcas.php';
	$agregarMarca = agregarMarca();
	


?>

<main class="container">
    <h1>Alta de una nueva marca</h1>
    <?php 
    	if($agregarMarca)
    	{?>
    		<div class="alert alerta-success">
    			Marca agregada con exito 
    			<br>
    			
    	}
     ?>

</main>

<?php  include 'includes/footer.php';  ?>