<?php
	// metodo post
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$pw = $_POST['pw'];

	//metodo get usa la url con info
	//$nombre = $_GET['nombre'];
	//$apellido = $_GET['apellido'];
	//$pw = $_GET['pw'];

	echo $nombre."<br>";
	echo $apellido."<br>";
	echo $pw;

?>