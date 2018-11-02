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
		 		 WHERE p.idMarca = m.idMarca AND p.idCategoria =c.idCategoria"
		 		 ;
		$resultado = $link->query($sql);
		$listadoProductos = $resultado->fetchAll();
		return $listadoProductos;
	}

	
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