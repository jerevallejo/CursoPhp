<?php

class Marca
{
	private $idMarca;
	private $mkNombre;

	public function listarMarcas()
	{
		$link = Conexion::conectar();
		$sql = "SELECT idMarca, mkNombre FROM marcas";
		$resultado = $link->query($sql);
		$listadoMarcas = $resultado->fetchAll();
		return $listadoMarcas;
	}
	public function verMarcaPorId($id)
	{
		$link = Conexion::conectar();
		$sql = "SELECT idMarca, mkNombre FROM marcas WHERE idMarca=".$id;
		$resultado = $link->query($sql);
		$detalleMarca = $resultado->fetch();
		return $detalleMarca;
	}

	public function agregarMarca()
	{
		$link = Conexion::conectar();
		$mkNombre = $_POST['mkNombre'];
		$sql = "INSERT INTO marcas(mkNombre) VALUES('".$mkNombre."') ";
		$resultado = $link->query($sql);//ejecuta el agregar
		return $resultado;
	}
	 function editarMarca()
		{
			$link = Conexion::conectar();
			$mkNombre = $_POST['mkNombre'];
			$idMarca=$_POST['idMarca'];
			$sql = "UPDATE marcas SET mkNombre='".$mkNombre."'  WHERE idMarca=".$idMarca;
			$resultado = $link->query($sql);//ejecuta la modificacion
			return $chequeo = $resultado->rowCount();
		}


	public function getIdMarca()
	    {
	        return $this->idMarca;
	    }

	public function setIdMarca($idMarca)
	    {
	        $this->idMarca = $idMarca;
	        return $this;
	    }

	public function getMkNombre()
	    {
	        return $this->mkNombre;
	    }

	public function setMkNombre($mkNombre)
	    {
	        $this->mkNombre = $mkNombre;
	        return $this;
	    }
}


?>