<?php

	$operacion = $_POST['lista'];
	

	if (isset($_POST['c1']) && !empty($_POST['c1']) &&
		isset($_POST['c2']) && !empty($_POST['c2']) &&
		isset($_POST['c3']) && !empty($_POST['c3'])) 
	{
	echo "El Resultado es: ";
		switch ($operacion) {
			case sumar:
			echo $_POST['c1'] + $_POST['c2'] + $_POST['c3'];
				break;
			
			case restar:
			echo $_POST['c1'] - $_POST['c2'] - $_POST['c3'];
				break;

			case mul:
			echo $_POST['c1'] * $_POST['c2'] * $_POST['c3'];
				break;	

			case div:
			echo $_POST['c1'] / $_POST['c2'] / $_POST['c3'];
				break;		

			default : "No se ha podido realizar la operacion";
		} 
	}
	else
	{

		echo "Favor de llenar todos los campos";

	}

?>