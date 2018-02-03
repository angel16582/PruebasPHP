<?php
	// a escribe r lee
	$archivo = fopen("archivo.txt", "r")
	or die("Problemas el abrir el archivo");

	//final del archivo txt
	while (!feof($archivo)) {
		//obtiene el archivo
		$traer = fgets($archivo);
		//nl2br leer los saltos de linea
		$saltodelinea = nl2br($traer);
		echo "$saltodelinea";

		
	}

?>