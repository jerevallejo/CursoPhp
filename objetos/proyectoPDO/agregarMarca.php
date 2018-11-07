<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>
<?php 
	require 'clases/Conexion.php';
    require 'clases/Marca.php';
    $objMarca = new Marca();
    $chequeo = $objMarca->agregarMarca();
?>

<main class="container">
    <h1>Alta de una nueva marca</h1>
    <?php 
    	if($chequeo)
    	{?>
    		<div class="alert alert-success" role="alert">
    			Marca: <b><?php echo $objMarca->getMkNombre(); ?></b> agregada con exito 
                <br>
                <a href= "adminMarcas.php "class="btn btn-light mt-2"> Volver al menu marcas </a>
                <a href= "formAgregarMarca.php "class="btn btn-light mt-2"> Cargar otra marca </a>
                <a href= "formEditarMarca.php?idMarca=<?php echo $objMarca->getIdMarca(); ?>" class="btn btn-light mt-2"> Editar marcas </a>
                <a href= "admin.php "class="btn btn-light mt-2"> Volver al Home </a>
            </div>
    			
    <?php }
     ?>

</main>

<?php  include 'includes/footer.php';  ?>