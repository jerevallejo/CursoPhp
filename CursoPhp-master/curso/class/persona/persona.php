<?php 
class Persona
{
	private $nombre;
	private $apellido;

	public function __construct($nombre, $apellido)
	{
		$this->setNombre($nombre);
		$this->setApellido($apellido);
	}

	
	public function verDatos()
	{
		return 'Nombre: '.$this->getNombre().'<br>'. ' Apellido: '.$this->getApellido();
	}	

	public function setNombre($newNombre)
	{
		$this->nombre = $newNombre;
	}

	public function getNombre()
	{
		return $this->nombre;
	}

	public function setApellido($newNombre)
	{
		$this->apellido = $newNombre;
	}

	public function getApellido()
	{
		return $this->apellido;
	}

}
