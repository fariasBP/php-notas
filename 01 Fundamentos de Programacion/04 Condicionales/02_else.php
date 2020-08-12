<?php 
/* ELSE
	instruccion que acompana a la instruccion if, y este se ejecuta se la condicion del if es falsa
	TEMAS:
		- if-else
	FORMA DE ESCRITURA:
		if ([condicion]) {
			#instruccion si la condicion es true
		} else {
			#instruccion si la condicion es false
		}
*/
$nota = 79;
$nota2 = 40;
if ($nota > 51) {
    echo "Has Aprobado";
} else {
    echo "Has Reprobado";
}


echo "<br>";

if ($nota2 > 51) {
    echo "Has Aprobado";
} else {
    echo "Has Reprobado";
}