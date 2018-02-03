<?php

	$filename = $_POST['archivo'];
	//elimina ela rchivo
	unlink($filename);
	echo "El archivo ha sido eliminado";

?>