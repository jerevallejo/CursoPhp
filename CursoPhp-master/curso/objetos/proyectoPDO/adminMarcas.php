<?php 
	require 'clases/Conexion.php';
	require 'clases/Marca.php';
	$objMarca = new Marca();
	$listadoMarcas = $objMarca-> listarMarcas();
 ?>
<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>

<main class="container">
    <h1>Panel de administracion de marcas</h1>
    <table class="table table-stripped table-hover table-border">
		<thead class="thead-dark">
			<tr>
				<th>Id</th>
				<th>Marca</th>
				<th colspan= "2">
					<a href="fromAgregarMarca.php" class="btn btn-dark">Agregar</a>
				</th>
				
			</tr>
		</thead>    	
	<tbody>
	<?php 
		foreach ($listadoMarcas as $marca)
		 {
	 ?>
		<tr>
			<td><?php echo $marca['idMarca'];?></td>
			<td><?php echo $marca['mkNombre'];?></td>
			<td>
				<a href="fromEditarMarca.php?idMarca=<?php echo $marca['idMarca'];?>" class="btn btn-light">Editar  </a>
			</td>	
			<td>
				<a href="fromEliminarMarca.php?idMarca=<?php echo $marca['idMarca'];?>" class="btn btn-light">Eliminar</a>
			</td>
		</tr>
	<?php 
		}
	 ?>
	</tbody>

    </table>

</main>

<?php  include 'includes/footer.php';  ?>