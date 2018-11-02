<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>
<?php 
	require 'clases/Conexion.php';
    require 'clases/Marca.php';
    $objMarca = new Marca();
    $agregarMarca = $objMarca->agregarMarca();
?>

<main class="container">
    <h1>Alta de una nueva marca</h1>
    <?php 
    	if($agregarMarca)
    	{?>
    		<div class="alert alert-success" role="alert">
    			Marca agregada con exito 
    			<br>
                <a href= "adminMarcas.php "class="btn btn-light mt-2"> Volver al menu marcas </a>
            </div>
    			
    <?php }
     ?>

</main>

<?php  include 'includes/footer.php';  ?>