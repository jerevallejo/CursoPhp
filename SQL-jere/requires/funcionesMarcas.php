<?php 
	function listarMarcas()
	{
		$link = conectar();
		$sql = "SELECT idMarca, mkNombre FROM marcas";
		$resultado = $link->query($sql);
		$listadoMarcas = $resultado->fetchAll(PDO::FETCH_ASSOC);
		return $listadoMarcas;
	}

	function verMarcaPorId($id)
	{
		$link = conectar();
		$sql = "SELECT idMarca, mkNombre FROM marcas WHERE idMarca=".$id;
		$resultado = $link->query($sql);
		$detalleMarca = $resultado->fetch(PDO::FETCH_ASSOC);
		return $detalleMarca;
	}
	function agregarMarca()
	{
		$link = conectar();
		$mkNombre = $_POST['mkNombre'];
		$sql = "INSERT INTO marcas(mkNombre) VALUES('".$nombre."') ";
		$resultado = $link->query($sql);
		return $resultados;
	}
	function eliminarMarca()
	{
		$link = conectar();
		$mkNombre = $_POST['mkNombre'];
		$sql = "DELETE FROM marcas WHERE idMarca=".$id;
		$resultado = $link->query($sql);
		return $resultados;
	}
	 function modificarMarca($nombre)
		{
			$link = conectar();
			$mkNombre = $_POST['mkNombre'];
			$sql = "UPDATE marcas SET mkNombre= '$nombre' WHERE idMarca=".$id;
			$resultado = $link->query($sql);
			return $resultados;
		}
?>