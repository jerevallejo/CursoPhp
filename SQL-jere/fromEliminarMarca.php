<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>
<?php 
		require 'requires/conexion.php';
		require 'requires/funcionesMarcas.php';
		$idMarca = $_GET['idMarca'];
        $nombreMarca = verMarcaPorId($idMarca);
?>

<main class="container">
    <h1>Confirmación de baja de una marca</h1>

    <div class="card bg-light mb-3 col-md-6" >
        <div class="card-header alert alert-danger">Confirmación de baja de una marca</div>
        <div class="card-body">
            <form action="eliminarMarca.php" method="post">
                <h5 class="card-title"><?php echo $nombreMarca['mkNombre'] ?></h5>
                <input type="submit" class="btn btn-danger" value="confirmar baja">
                <input type="hidden" name="idMarca" value="<?php echo $idMarca?>">
                <a href="adminMarcas.php" class="btn btn-light">volver al panel de marcas</a>
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
        form = document.querySelector('form[action="eliminarMarca.php"]');
        form.onsubmit = function (evento)
        {
            console.log(evento);
            evento.preventDefault(); //evitamos enviar el form
            var mensaje = 'Si pulsa "Aceptar", se eliminará la marca';
            if(confirm(mensaje)){
                form.submit();
                return;
            }
            window.location = 'adminMarcas.php';
        }

    </script>
 
 

<?php  include 'includes/footer.php';  ?>