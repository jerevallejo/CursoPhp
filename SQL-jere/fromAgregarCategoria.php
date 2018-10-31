<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>

<main class="container">
    <h1>Formulario de alta de una nueva categoria</h1>

    <form action="agregarCategoria.php" method= "post">
    	Nombre de la categoria:
    	<br>
    	<input type="text" name="catNombre" class="form-control">
    	<br>
    	<input type="submit" value="Agregar categoria" class="btn btn-success">
    </form>

</main>

<?php  include 'includes/footer.php';  ?>