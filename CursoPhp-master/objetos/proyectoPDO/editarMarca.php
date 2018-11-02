<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>
<?php 
	require 'clases/Conexion.php';
    require 'clases/Marca.php';
    $objMarca = new Marca();
	$editarMarca = $objMarca->editarMarca();
?>
<main class="container">
    <h1>Edicion de una marca</h1>
    <?php 
    	if($editarMarca==1)
    	{?>
    		<div class="alert alert-success" role="alert">
                Marca editada con exito 
                <br>
                <a href= "adminMarcas.php "class="btn btn-light mt-2"> Volver al menu marcas </a>

            </div>
    			
    <?php }else{ 
    ?>
        <div class="alert alert-warning" role="alert">
            La marca no se puedo editar 
            <br>
            <a href= "adminMarcas.php "class="btn btn-light mt-2"> Volver al menu marcas </a>
            
        </div>
   <?php } ?>

</main>

<?php  include 'includes/footer.php';  ?>