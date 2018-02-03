<?php
	//crea y abre el archivo
	$fill = fopen("archivo.txt", "a")
	or die ("Problema al crear archivo");

	//instruccione que permite escribir en un archivo
	fwrite($fill, "Datos: ");
	fwrite($fill, "\n");
	fwrite($fill, $_POST['nombre']);
	fwrite($fill, "\n");
	fwrite($fill, $_POST['comentario']);
	fwrite($fill, "\n");
	fwrite($fill, "------------------------ \n\n");

	//cierra el archivo
	fclose($fill);
	echo "Datos Guardados";
?>