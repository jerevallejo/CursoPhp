<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>
<?php 
		require 'clases/Conexion.php';
        require 'clases/Producto.php';
        $objProducto = new Producto();
        //$chequeo = $objProducto->eliminarProducto();
?>

<main class="container">
    <h1>Confirmación de baja de una marca</h1>

    <div class="card bg-light mb-3 col-md-6" >
        <div class="card-header alert alert-danger">Confirmación de baja de un producto</div>
        <div class="card-body">
            <form action="eliminarProducto.php" method="post">
                <h5 class="card-title"><?php echo $objProducto-> getPrdNombre ?></h5>
                <input type="submit" class="btn btn-danger" value="confirmar baja">
                <input type="hidden" name="idProducto" value="<?php echo $objProducto-> getIdProducto?>">
                <a href="adminProductos.php" class="btn btn-light">volver al panel de Productos</a>
            </form>
        </div>
    </div>

</main>
<?php 
    //iniciamos javascript para crear una ventana de alerta para confirmar la eliminacion
    //pero el form se manda igual por lo tanto tenes que preventDefault (evitar que se envie)
    // y en base a la respuesta de la alerta confirmo el envio o no, para enviar from.submit();
    //para volver a window.location = 'adminMarcas.php'(la forma de redireccionar en javascript)
    //pasar una variable a script x= <? php echo $mkNombre..cierro php
 ?>
    <script>
        form = document.querySelector('form[action="eliminarProducto.php"]');
        form.onsubmit = function (evento)
        {
            console.log(evento);
            evento.preventDefault(); //evitamos enviar el form
            var mensaje = 'Si pulsa "Aceptar", se eliminará el producto';
            if(confirm(mensaje)){
                form.submit();
                return;
            }
            window.location = 'adminProductos.php';
        }

    </script>
 
 

<?php  include 'includes/footer.php';  ?>