<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>
<?php 
	require 'requires/conexion.php';
	require 'requires/funcionesMarcas.php';
	$listadoMarcas=listarMarcas();
?>


<main class="container">
    <h1>Formulario de alta de una nueva Marca</h1>

    <form action="agregarMarca.php" method= "post">
    	Nombre de la marca:
    	<br>
    	<div class="form-group">
	    	<label type= "text" name="mkNombre" for="mkNombre"></label>
	    	<select class="form-control" id="mkNombre">
	    <?php 
		foreach ($listadoMarcas as $marca)
		 { ?>
	      		<option><?php echo $marca['mkNombre']; ?></option>

	    <?php } ?>
	    	</select>
  		</div>
    	<input type="submit" value="Agregar marca" class="btn btn-success">
    </form>

</main>

<?php  include 'includes/footer.php';  ?>