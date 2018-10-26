<?php
	include "header.php";
	require "conexion.php";
	$sqlCategoria = "SELECT idCategoria, catNombre FROM categorias";
	$resultadoCategoria = mysqli_query($link, $sqlCategoria)
                                        or die( mysqli_errno($link) );
	mysqli_close( $link );
?>
<section id="page">
	
		<h1>Panel de administración de Categorías</h1>

        <a href="admin.php" class="btn btn-default">Volver a principal</a>

		<table class="table table-striped table-hover table-bordered">
			<tr class="success">
				<th>id</th>
				<th>Categoría</th>
				<th colspan="2">
					<a href="formAgregarCategoria.php" title="Agregar Categoría"><img src="images/add.png"></a>
				</th>
			</tr>
<?php
                    while ( $filaCategoria = mysqli_fetch_assoc($resultadoCategoria) ) {
?>
                        <tr>
                            <td><?php echo $filaCategoria['idCategoria']; ?></td>
                            <td><?php echo $filaCategoria['catNombre']; ?></td>
                            <td><a href="formEditarCategoria.php?idCategoria=<?php echo $filaCategoria['idCategoria']; ?>">
                                        <img src="images/editar.png">
                                </a>
                            </td>
                            <td><a href="formEliminarCategoria.php?idCategoria=<?php echo $filaCategoria['idCategoria']; ?>">
                                    <img src="images/eliminar.png">
                                </a>
                            </td>
                        </tr>
 <?php
                    }
?>
		</table>

        <a href="admin.php" class="btn btn-default">Volver a principal</a>

</section>
<?php include "footer.php"; ?>