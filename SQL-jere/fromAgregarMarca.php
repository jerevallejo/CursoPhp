<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>

<main class="container">
    <h1>Formulario de alta de una nueva Marca</h1>

    <form action="agregarMarca.php" method= "post">
    	Nombre de la marca:
    	<br>
    	<input type="text" name="mkNombre" class="form-control">
    	<br>
    	<input type="submit" value="Agregar marca" class="btn btn-succes">


    </form>

</main>

<?php  include 'includes/footer.php';  ?>