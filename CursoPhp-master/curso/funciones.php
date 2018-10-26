
<?php 
	

	function suma($i1, $i2)
	{
		//$resultado = $i1 + $i2;
		//return($resultado);
		return($i1+$i2);
	}
	echo suma(5, 2);
	echo "<br>";		

	function mul($i1, $i2)
	{
		//$resultado = $i1 + $i2;
		//return($resultado);
		if (is_numeric($i1) && is_numeric($i2))
		{
			return($i1*$i2);
		}
		return("ingrese numeros");	
	}
	echo "El resultado de la multiplicacion es: ";
	echo mul(5, 2);
	
	
 ?>