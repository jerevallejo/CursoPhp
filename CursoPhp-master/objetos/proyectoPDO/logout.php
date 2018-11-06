<?php
    require 'config/config.php';
    require 'clases/Conexion.php';
    require 'clases/Usuario.php';
    $objUsuario = new Usuario;
    $objUsuario->logout();
?>
<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>

<main class="container">
    <h1>Salir de sistema</h1>

    <div class="alert alert-success">
        Gracias por su visita.
    </div>

</main>

<?php  include 'includes/footer.php';  ?>