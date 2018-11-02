<?php

class Categoria
{
	private $idCategoria;
	private $catNombre;

	public function listarCategorias()
	{
		$link = Conexion::conectar();
		$sql = "SELECT idCategoria, catNombre FROM categorias";
		$resultado = $link->query($sql);
		$listadoMarcas = $resultado->fetchAll();
		return $listadoMarcas;
	}
	public function verCategoriaPorId($id)
	{
		$link = Conexion::conectar();
		$sql = "SELECT idCategoria, catNombre FROM categorias WHERE idCategoria=".$id; // realiza la consulta SQL
		$resultado = $link->query($sql); //ejecuta la consulta SQL
		$detalleMarca = $resultado->fetch();
		return $detalleMarca;
	}

	public function agregarCategoria()
	{
		$link = Conexion::conectar();
		$mkNombre = $_POST['catNombre'];
		$sql = "INSERT INTO categorias(catNombre) VALUES('".$catNombre."') ";
		$resultado = $link->query($sql);//ejecuta el agregar
		return $resultado;
	}
	 function editarCategoria()
		{
			$link = Conexion::conectar();
			$mkNombre = $_POST['catNombre'];
			$idMarca=$_POST['idCategoria'];
			$sql = "UPDATE categorias SET catNombre='".$catNombre."'  WHERE idCategoria=".$idCategoria;
			$resultado = $link->query($sql);//ejecuta la modificacion
			return $chequeo = $resultado->rowCount();
		}

    public function getIdCatgoria()
    {
        return $this->idCategoria;
    }

    public function setIdCatgoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    public function getCatNombre()
    {
        return $this->catNombre;
    }

    public function setCatNombre($catNombre)
    {
        $this->catNombre = $catNombre;

        return $this;
    }
}


?>