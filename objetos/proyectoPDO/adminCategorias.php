<?php 
	require 'config/config.php';
	include 'includes/header.html';
	include 'includes/nav.php';
	$objCategoria = new Categoria();
	$listadoCategorias = $objCategoria-> listarCategorias();
?>

<main class="container">
    <h1>Panel de categorias de marcas</h1>
    <table class="table table-stripped table-hover table-border">
		<thead class="thead-dark">
			<tr>
				<th>Id</th>
				<th>Marca</th>
				<th colspan= "2">
					<a href="fromAgregarCategoria.php" class="btn btn-dark">Agregar</a>
				</th>
				
			</tr>
		</thead>    	
	<tbody>
	<?php 
		foreach ($listadoCategorias as $categoria)
		 {
	 ?>
		<tr>
			<td><?php echo $categoria['idCategoria'];?></td>
			<td><?php echo $categoria['catNombre'];?></td>
			<td>
				<a href="fromEditarCategoria.php?idMarca=<?php echo $categoria['idCategoria'];?>" class="btn btn-light">Editar  </a>
			</td>	
			<td>
				<a href="fromEliminarCategoria.php?idMarca=<?php echo $categoria['idCategoria'];?>" class="btn btn-light">Eliminar</a>
			</td>
		</tr>
	<?php 
		}
	 ?>
	</tbody>

    </table>

</main>

<?php  include 'includes/footer.php';  ?>