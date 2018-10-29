<?php 
		function conectar()
		{
			$dsn = 'mysql:dbname=catalogo;host=127.0.0.1';
			$usuario = 'root';
			$contraseña = '';

			try {
			    $link = new PDO($dsn, $usuario, $contraseña);
			    return $link;
			} catch (PDOException $e) {
			    echo 'Falló la conexión: ' . $e->getMessage();
			}
		}

?>