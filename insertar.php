<?php
	//trae los datos de otro archivo
	include("conexion.php");
	if (isset($_POST['nombre']) && !empty($_POST['nombre']) &&
		isset($_POST['pw']) && !empty($_POST['pw'])) 
	{
		//hace la conexion con el servidor
		$con = mysql_connect($host, $user, $pw) or die ("Problemas al conectar");
		//selecciona la bd
		mysql_select_db($db, $con) or die ("Problemas al conectar la base de datos");

		mysql_query("INSERT INTO codigof (nombre,PW) VALUES ('$_POST[nombre]', '$_POST[pw]')",$con);
		echo "Datos Insertados";

		mysql_close($con);
	}
	else
	{

		echo "Problemas al incertar datos";

	}

?>