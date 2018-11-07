<nav class="site-header sticky-top py-2">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a href="admin.php" class="mt-1">
            <i class="fab fa-meetup fa-2x"></i>
        </a>

        <a class="py-2" href="adminMarcas.php">Marcas</a>
        <a class="py-2" href="adminCategorias.php">Categorías</a>
        <a class="py-2" href="adminProductos.php">Productos</a>
        <a class="py-2" href="adminUsuarios.php">Usuarios</a>
<?php
        if(!isset($_SESSION['login'])){
?>
       <?php //class="fas fa-sign-in-alt mr-2" carga el icono d eingresar que lo importa de fond awsome?>
            <a href="formLogin.php" class="btn btn-dark"><i class="fas fa-sign-in-alt mr-2"></i> Ingresar</a>
<?php
        }else{
?>
            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
            <a href="#"><i class="fas fa-sign-out-alt"></i> <?php echo $_SESSION['usuNombre'].' '.$_SESSION['usuApellido']; ?></a>
            </button>
           <?php//  class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton crea el menu desplegable para abajo ?>
            <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item bg-dark" href="logout.php">Salir de sistema</a>
                <a class="dropdown-item bg-dark" href="#">Action 2</a>
                <a class="dropdown-item bg-dark" href="#">Action 3</a>
            </div>
<?php
        }
?>
    </div>
</nav>
