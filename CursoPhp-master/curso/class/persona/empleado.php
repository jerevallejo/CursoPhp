<?php  
class Empleado extends Persona 
{
	private $sueldo;

	public function __construct($sueldo)
	{	

		$this->sueldo = $sueldo;
	}
  
  	public function verDatos()
  	{
  		$salida = Persona::verDatos();
  		$salida .= '<br>';
  		$salida .= 'su sueldo es: '.$this->sueldo;
  		return $salida;
  	}

    public function getSueldo()
    {
        return $this->sueldo;
    }

    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;

        return $this;
    }
}



?>