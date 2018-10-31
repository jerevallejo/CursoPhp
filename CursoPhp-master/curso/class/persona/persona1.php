<?php 
	class Persona
	{
		//primero los atributos
		private $nombre;
		private $apellido;
	
	public function verDatos()
		{
			echo 'nombre: ',$this->nombre, ' Apellido: ',$this->apellido;
		}	
	public function setNombre($newNombre)
		{
		$this->nombre = $newNombre;
		}
	public function setApellido($newNombre)
		{
		$this->apellido = $newNombre;
		}
	}

//instanciacion 
	$objPersona = new Persona;
	$objPersona->setNombre('Pepe');
	$objPersona->setApellido('Garcia');
	$objPersona->verDatos();
	//	print_r($objPersona);
?>