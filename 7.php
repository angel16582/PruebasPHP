<?php

	$arr= array("elemento1", "elemento2");
	foreach ($arr as $elemntos) 
	{
		echo $elemntos."<br>";

	}

	$arr2 = array ("clave1" => "elemento1", "clave2" => "elemento2");
	foreach($arr2 as $claves => $element)
	{

		echo $claves." = ".$element."<br>";
	}

?>