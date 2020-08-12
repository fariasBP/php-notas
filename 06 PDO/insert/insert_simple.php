<?php
require('../conexion/Conexion.php');

$sql = "INSERT INTO mitabla(columna1, columna2, columna3, columna4, columna5) VALUES (45, 'varchar', 'text', '2018-12-16', 1)";

//$con->exec($sql);
$con->execute($sql);

$con = null;