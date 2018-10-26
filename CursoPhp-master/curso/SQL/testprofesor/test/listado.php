<?php
    $dsn = 'mysql:dbname=catalogo;host=localhost';
    $usuario = 'root';
    $contraseña = '';

    try {
        $link = new PDO($dsn, $usuario, $contraseña);
    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }

    $sql = "SELECT idCategoria, catNombre
                FROM categorias";
    $resultado = $link->query($sql);

    $listadoCategorias = $resultado->fetchAll(PDO::FETCH_ASSOC);

    foreach ( $listadoCategorias as $categoria ){
        echo $categoria['idCategoria'], ' ', $categoria['catNombre'], '<br>';
    }
?>