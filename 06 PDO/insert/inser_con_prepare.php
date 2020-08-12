<?php
require('../conexion/Conexion.php');



$sql = "INSERT INTO mitabla(columna1, columna2, columna3, columna4, columna5) VALUES (:numero_m, :varchar_m, :text_m, :fecha_m, :booleano_m)";

// preparando sql 
$stmt = $con->prepare($sql);

// viculando los marcadores con variables
$stmt->bindValue(':numero_m', $numero);
$stmt->bindValue(':varchar_m', $varchar);
$stmt->bindValue(':text_m', $text);
$stmt->bindValue(':fecha_m', $fecha);
$stmt->bindValue(':booleano_m', $booleano);

// ejecutamos el sql preparado
$stmt->execute();

// cerramos la consulta
$stmt = null;
$con = null;