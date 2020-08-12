<?php

//abrimos el archivo "datos.json" y lo almacenamos en la variable $datos como string
	$archivo = "datos.json";
	$fp = fopen($archivo, "r");
	$datos = fread($fp, filesize($archivo));
	echo $datos;
	echo "<br><br>";
	fclose($fp);

// Decodificamos el string $datos en objeto $data
	$data = json_decode($datos);

	var_dump($data);
	echo "<br><br>";
	var_dump($data->name);
	echo "<br><br>";
	var_dump($data->options->option1);