<?php 
/* FOR EACH
	El constructor foreach proporciona un modo sencillo de iterar sobre arrays. foreach funciona sólo sobre arrays y objetos, y emitirá un error al intentar usarlo con una variable de un tipo diferente de datos o una variable no inicializada. Existen dos sintaxis:
	TEMAS:
		- foreach
	FORMA DE ESCRITURA: hay dos formas:
		foreach (expresión_array as $valor){
    		sentencias
		}
		foreach (expresión_array as $clave => $valor) {
    		sentencias
		}
*/
$objetos = ['coche', 'casa', 'moto'];
foreach($objetos as $key) {
	echo "{$key}\n";
}