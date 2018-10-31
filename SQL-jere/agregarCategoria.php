<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>
<?php 
	require 'requires/conexion.php';
	require 'requires/funcionesCategorias.php';
	$agregarCategorias = agregarCategoria();
?>

<main class="container">
    <h1>Alta de una nueva categorias</h1>
    <?php 
    	if($agregarCategorias)
    	{?>
    		<div class="alert alert-success" role="alert">
    			Categoria agregada con exito 
    			<br>
                <a href= "adminCategorias.php "class="btn btn-light mt-2"> Volver al menu categorias </a>
            </div>
    			
    <?php }
     ?>

</main>

<?php  include 'includes/footer.php';  ?>