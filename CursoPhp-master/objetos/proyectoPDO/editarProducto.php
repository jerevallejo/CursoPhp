<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>
<?php 
	require 'clases/Conexion.php';
    require 'clases/Producto.php';
    $objProducto = new Producto();
	$chequeo = $objProducto -> editarProducto();
?>
<main class="container">
    <h1>Edicion de un producto</h1>
    <?php 
    	if($chequeo == 1)
    {?>
            <div class="alert alert-success" role="alert">
                Producto: <b><?php echo $objProducto->getPrdNombre(); ?></b> editado con exito 
                <br>
                <a href= "adminProductos.php "class="btn btn-light mt-2"> Volver al menu de productos </a>
                <a href= "formAgregarProducto.php "class="btn btn-light mt-2"> Cargar otro producto </a>
                <a href= "formEditarProducto.php?idProducto=<?php echo $objProducto->getIdProducto(); ?>" class="btn btn-light mt-2"> Editar producto </a>
                <a href= "admin.php "class="btn btn-light mt-2"> Volver al Home </a>
            </div>
                
    <?php } elseif($chequeo == 0) {
     ?>
        <div class="alert alert-warning" role="alert">
            El producto: <b><?php echo $objProducto->getPrdNombre(); ?></b> no se puedo editar 
            <br>
            <a href= "adminProducto.php "class="btn btn-light mt-2"> Volver al menu de productos </a>
            <a href= "formAgregarProducto.php "class="btn btn-light mt-2"> Cargar otro productos </a>
            <a href= "formEditarProducto.php?idProducto=<?php echo $objProducto->getIdProducto(); ?>" class="btn btn-light mt-2"> Editar producto </a>
            <a href= "admin.php "class="btn btn-light mt-2"> Volver al Home </a>
        </div>
    <?php }  ?>
</main>

<?php  include 'includes/footer.php';  ?>