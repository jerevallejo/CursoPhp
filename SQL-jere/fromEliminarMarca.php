<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>
<?php 
		require 'requires/conexion.php';
		require 'requires/funcionesMarcas.php';
		$idMarca = $_GET['idMarca'];
		$nombreMarca = verMarcaPorId($idMarca);
?>

<main class="container">
    <h1>Eliminar marca</h1>


    <form action="eliminarMarca.php" method= "post">
    	Nombre de la marca:
    	<br>
    	<input type="text" name="mkNombre" value="<?php echo $nombreMarca['mkNombre'];?>" class="form-control">
    	<br>
    	<input type="submit" value="Eliminar marca" class="btn btn-danger">


    </form>

</main>

<?php  include 'includes/footer.php';  ?>