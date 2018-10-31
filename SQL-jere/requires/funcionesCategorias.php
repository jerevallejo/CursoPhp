<?php 
	function listarCategorias()
	{
		$link = conectar();
		$sql = "SELECT idCategoria, catNombre FROM categorias";
		$resultado = $link->query($sql);
		$listadoCategorias = $resultado->fetchAll(PDO::FETCH_ASSOC);
		return $listadoCategorias;
	}
function agregarCategoria()
	{
		$link = conectar();
		$catNombre = $_POST['catNombre'];
		$sql = "INSERT INTO categorias(catNombre) VALUES('".$catNombre."') ";
		$resultado = $link->query($sql);//ejecuta el agregar
		return $resultado;
	}






?>