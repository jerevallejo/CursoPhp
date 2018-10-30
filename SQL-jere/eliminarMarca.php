<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>
<?php 
	require 'requires/conexion.php';
	require 'requires/funcionesMarcas.php';
    $idMarca = $_POST['idMarca'];
	$chequeo = eliminarMarca($idMarca);
?>

<main class="container">
    <h1>Eliminar marca</h1>
<?php 
        if($chequeo==1)
        {?>
            <div class="alert alert-success" role="alert">
                Marca eliminada con exito 
                <br>
                <a href= "adminMarcas.php "class="btn btn-light mt-2"> Volver al menu marcas </a>

            </div>
                
    <?php }else{ 
    ?>
        <div class="alert alert-warning" role="alert">
            La marca no se puedo eliminar 
            <br>
            <a href= "adminMarcas.php "class="btn btn-light mt-2"> Volver al menu marcas </a>
            
        </div>
   <?php } ?>

</main>

<?php  include 'includes/footer.php';  ?>