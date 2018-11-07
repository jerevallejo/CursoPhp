<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>
<?php 
	require 'clases/Conexion.php';
    require 'clases/Producto.php';
    $idProducto = $_POST['idProducto'];
    $objProducto = new Producto();
    $detalleProducto = $objProducto->verProductoPorId($idProducto);
	$chequeo = $objProducto -> eliminarProducto($idProducto);
?>
<main class="container">
    <h1>Eliminacion de un producto</h1>
    <?php 
    	if($chequeo == 1)
    {?>
            <div class="alert alert-danger" role="alert">
                Producto: <b><?php echo $detalleProducto['prdNombre']; ?></b> eliminado con exito 
                <br>
                <a href= "adminProductos.php "class="btn btn-light mt-2"> Volver al menu de productos </a>
                <a href= "formAgregarProducto.php "class="btn btn-light mt-2"> Cargar producto </a>
                <a href= "admin.php "class="btn btn-light mt-2"> Volver al Home </a>
            </div>
                
    <?php } elseif($chequeo == 0) {
     ?>
        <div class="alert alert-warning" role="alert">
            El producto: <b><?php echo $detalleProducto['prdNombre']; ?></b> no se puedo eliminar 
            <br>
            <a href= "adminProducto.php "class="btn btn-light mt-2"> Volver al menu de productos </a>
            <a href= "formAgregarProducto.php "class="btn btn-light mt-2"> Cargar producto</a>
            <a href= "admin.php "class="btn btn-light mt-2"> Volver al Home </a>
        </div>
    <?php }  ?>
</main>

<?php  include 'includes/footer.php';  ?>