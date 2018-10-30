<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>
<?php 
	require 'requires/conexion.php';
	require 'requires/funcionesMarcas.php';
	$agregarMarca = agregarMarca();
?>

<main class="container">
    <h1>Edicion de una marca</h1>
    <?php 
    	if($agregarMarca)
    	{?>
    		<div class="alert alerta-success"role="alert">
    			Marca agregada con exito 
    			<br>
            </div>
    			
    <?php }
     ?>

</main>

<?php  include 'includes/footer.php';  ?>