<?php 
	class Producto
	{
		private $idProducto;
		private $prdNombre;
		private $prdPrecio;
		private $prdPresentacion;
		private $idMarca;
		private $idCategoria;
		private $prdStock;
		private $prdImagen;

	public function listarProducto()
	{
		$link = Conexion::conectar();
		$sql = "SELECT idProducto, prdNombre, prdPrecio, prdPresentacion,
						 mkNombre, catNombre, prdStock, prdImagen
		 		 FROM productos	p, marcas m, categorias c
		 		 WHERE p.idMarca = m.idMarca AND p.idCategoria = c.idCategoria";
		$resultado = $link->query($sql);
		$listadoProductos = $resultado->fetchAll();
		return $listadoProductos;
	}

    public function agregarProducto()
    {

    }
    private function cargarDatosDesdeForm()
    {
        if(isset($_POST['idProducto']))
        {
            $this->setIdProducto($_POST['idProducto']);
        }
        if(isset($_POST['prdNombre']))
        {
            $this->setPrdNombre($_POST['prdNombre']);
        }
         if(isset($_POST['idMarca']))
        {
            $this->setIdMarca($_POST['idMarca']);
        }
         if(isset($_POST['idCategoria']))
        {
            $this->setIdCategoria($_POST['idCategoria']);
        }
         if(isset($_POST['prdPresentacion']))
        {
            $this->setPrdPresentacion($_POST['prdPresentacion']);
        }
         if(isset($_POST['prdStock']))
        {
            $this->setPrdStock($_POST['prdStock']);
        }
        $this->setPrdImagen($this->subirImagen());
    }

    public function subirImagen()
    {
        $prdImagen = 'noDisponible.jpg';
        $rutaDestino = 'images/productos';
        if($_FILES['prdImagen']['error'] == 0)
        {
            $prdImagenTMP = $_FILES['prdImagen']['tmp_name'];
            $prdImagen = $_FILES['prdImagen']['name'];
            move_uploaded_file($prdImagenTMP, $rutaDestino.$prdImagen);
        }
        return $prdImagen;
    }

    public function agregarProducto()
    {


    }
   /* public function agregarProducto()
    {
        $link = Conexion::conectar();
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdPresentacion = $_POST['prdNombre'];
        $prdStock = $_POST['prdPrecio'];
        $prdImagen = $_POST['prdImagen'];
        $sql = "INSERT INTO productos(prdNombre, prdPrecio, idMarca, idCategoria, prdPresentacion, prdStock, prdImagen )
                 VALUES('".$prdNombre."".$prdPrecio."".$idMarca."".$idCategoria."".$prdPresentacion."".$prdStock."".$prdImagen."') ";
        $resultado = $link->query($sql);//ejecuta el agregar
        return $resultado;
    }*/
    
    public function getIdProducto()
    {
        return $this->idProducto;
    }

    public function setIdProducto($idProducto)
    {
        $this->idProducto = $idProducto;

        return $this;
    }

    public function getPrdNombre()
    {
        return $this->prdNombre;
    }

    public function setPrdNombre($prdNombre)
    {
        $this->prdNombre = $prdNombre;

        return $this;
    }

    public function getPrdPrecio()
    {
        return $this->prdPrecio;
    }

    public function setPrdPrecio($prdPrecio)
    {
        $this->prdPrecio = $prdPrecio;

        return $this;
    }

    public function getPrdPresentacion()
    {
        return $this->prdPresentacion;
    }

    public function setPrdPresentacion($prdPresentacion)
    {
        $this->prdPresentacion = $prdPresentacion;

        return $this;
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

    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    public function getPrdStock()
    {
        return $this->prdStock;
    }

    public function setPrdStock($prdStock)
    {
        $this->prdStock = $prdStock;

        return $this;
    }

    public function getPrdImagen()
    {
        return $this->prdImagen;
    }

    public function setPrdImagen($prdImagen)
    {
        $this->prdImagen = $prdImagen;

        return $this;
    }
}



 ?>