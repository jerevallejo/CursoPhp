<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>
<?php 	
		require 'requires/conexion.php';
		require 'requires/funcionesMarcas.php';
		$idMarca = $_GET['idMarca'];
		$nombreMarca = verMarcaPorId($idMarca);
?>

<main class="container">
    <h1>Formulario de modificacion de una Marca</h1>

    <form action="editarMarca.php" method= "post">
    	Nombre de la marca:
    	<br>
    	<input type="text" name="mkNombre" value="<?php echo $nombreMarca['mkNombre'];?>" class="form-control">
    	<br>
    	<input type="submit" value="Modificar marca" class="btn btn-warning">


    </form>

</main>

<?php  include 'includes/footer.php';  ?>