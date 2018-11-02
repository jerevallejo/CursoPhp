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
	    $this->cargarDatosDesdeForm();
        $link = Conexion::conectar();
        $sql = "INSERT INTO marcas 
                       ( mkNombre )
                       VALUES
                       ( :mkNombre )";
        $stmt = $link->prepare($sql);
        //dataDinding
        $mkNombre = $this->getMkNombre();
        //despues del $mkNombre puedo hacer PDO:: y aca tengo muchas validaciones para ver que los datos sean correctos 
        $stmt->bindParam(':mkNombre', $mkNombre, PDO::PARAM_STR);
        if( $stmt->execute())
        {
            $this->setIdMarca($link->lastInsertId());
            return true;
        }
    	return false;
    }

	private function cargarDatosDesdeForm()
	{
		if( isset($_POST['idMarca']))//pregunta si un dato existe y no es null
		{
			$this->setIdMarca($_POST['idMarca']);
		}
		if( isset($_POST['mkNombre']))//pregunta si un dato existe y no es null
		{
			$this->setMkNombre($_POST['mkNombre']);
		}
	}

	 public function editarMarca()
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