<?php

$archivo = "archivo.txt";

$fp = fopen($archivo, "r");
$datos = fread($fp, filesize($archivo));
echo $datos;
fclose($fp);