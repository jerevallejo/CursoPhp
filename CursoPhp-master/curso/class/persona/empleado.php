<?php  
class Empleado extends Persona 
{
	private $sueldo;

	public function __construct($nombre, $apellido, $sueldo)
	{	
    $this-> sueldo = $sueldo;
    parent::__construct($nombre, $apellido, $sueldo );
	}
  
  	public function verDatos()
  	{
  		return Persona::verDatos();
  	}

    public function getSueldo()
    {
        return $this->sueldo;
    }

    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;
    }
    public function pagaGanancias($sueldo)
    {
      if($sueldo>60000)
        {
          return 'Sueldo: '.$sueldo.' paga ganancias';
        }
      return 'Sueldo: '.$sueldo;
    }
}
/*
class Dog extends Animal{
  public function __construct($name){
    parent::__construct("Dog", $name, "woof!");
  }

public function __construct($aType, $aName, $aSound)
  {
    $this->type = $aType;
    $this->name = $aName;
    $this->sound = $aSound;
  }*/
?>