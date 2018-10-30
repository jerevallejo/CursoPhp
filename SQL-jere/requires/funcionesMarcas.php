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
		$sql = "INSERT INTO marcas(mkNombre) VALUES('".$mkNombre."') ";
		$resultado = $link->query($sql);//ejecuta el agregar
		return $resultado;
	}
	/*function eliminarMarca()
	{
		$link = conectar();
		$mkNombre = $_POST['mkNombre'];
		$idMarca=$_POST['idMarca'];
		$sql = "DELETE FROM marcas WHERE idMarca=".$idMarca;
		$resultado = $link->query($sql);//ejecuta el delete
		return $resultado;
	}*/
	 function editarMarca()
		{
			$link = conectar();
			$mkNombre = $_POST['mkNombre'];
			$idMarca=$_POST['idMarca'];
			$sql = "UPDATE marcas SET mkNombre='".$mkNombre."'  WHERE idMarca=".$idMarca;
			$resultado = $link->query($sql);//ejecuta la modificacion
			return $chequeo = $resultado->rowCount();
		}
		function eliminarMarca($idMarca)
	{
		$link = conectar();
		$sql = "DELETE FROM marcas WHERE idMarca=".$idMarca;
		$resultado = $link->query($sql);//ejecuta el delete
		return $chequeo = $resultado->rowCount();
	}
?>