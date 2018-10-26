<?php
/* Conectar a una base de datos de MySQL invocando al controlador */
$dsn = 'mysql:dbname=catalogo;host=127.0.0.1';
$usuario = 'root';
$contraseña = '';

try {
    $link = new PDO($dsn, $usuario, $contraseña);
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}
//busco que me traiga las categorias de la base de datos
$sql = "SELECT idCategoria, catNombre
		 FROM categorias";


$resultado=$link->query($sql);
$listadoCategorias=$resultado->fetchAll(PDO::FETCH_ASSOC);
//print_r($listadoCategorias);
foreach ($listadoCategorias as $categorias)
 {
	echo $categorias['idCategoria'],' ',$categorias['catNombre'],'<br>';
}

?>