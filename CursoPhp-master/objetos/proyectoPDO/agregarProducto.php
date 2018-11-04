<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>
<?php 
	require 'clases/Conexion.php';
    require 'clases/Producto.php';
    $objProducto = new Producto();
    $chequeo = $objProducto->agregarProducto();
?>

<main class="container">
    <h1>Alta de un nuevo Producto</h1>
    <?php 
        if($chequeo)
        {?>
            <div class="alert alert-success" role="alert">
                Producto: <b><?php echo $objProducto->getPrdNombre(); ?></b> agregado con exito 
                <br>
                <a href= "adminProductos.php "class="btn btn-light mt-2"> Volver al menu de productos </a>
                <a href= "formAgregarProducto.php "class="btn btn-light mt-2"> Cargar otro producto </a>
                <a href= "formEditarProducto.php?idProducto=<?php echo $objProducto->getIdProducto(); ?>" class="btn btn-light mt-2"> Editar producto </a>
                <a href= "admin.php "class="btn btn-light mt-2"> Volver al Home </a>
            </div>       
    <?php }else{
     ?>
        <div class="alert alert-warning" role="alert">
            El producto: <b><?php echo $objProducto->getPrdNombre(); ?></b> no se puedo agregar 
            <br>
            <a href= "adminProducto.php "class="btn btn-light mt-2"> Volver al menu productos </a>
            <a href= "formAgregarProducto.php "class="btn btn-light mt-2"> Cargar otro producto </a>
            <a href= "formEditarProducto.php?idProducto=<?php echo $objProducto->getIdProducto(); ?>" class="btn btn-light mt-2"> Editar producto </a>
            <a href= "admin.php "class="btn btn-light mt-2"> Volver al Home </a>
        </div>
    <?php } ?>

</main>

<?php  include 'includes/footer.php';  ?>