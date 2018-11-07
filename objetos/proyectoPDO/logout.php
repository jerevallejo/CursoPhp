<?php
    require 'config/config.php';
	include 'includes/header.html';
	include 'includes/nav.php';
	$nombre = $_SESSION['usuNombre'];
	$apellido = $_SESSION['usuApellido'];
	$objUsuario = new Usuario;
    $objUsuario->logout();
?>

<main class="container">
    <h1>Salir de sistema</h1>

    <div class="alert alert-success">
        Gracias <?php echo 	$nombre ?> por su visita.
    </div>

</main>

<?php  include 'includes/footer.php';  ?>