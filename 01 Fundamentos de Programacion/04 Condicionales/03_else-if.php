<?php 
/* ELSE IF
	condicional que fusiona if y else. Asi extendiendo la funcionalidad if
	TEMAS:
		- else if
	FORMA DE ESCRITURA:
		if ([condicion1]) {
			#instruccion si la condicion1 es cierta
		} else if([condicion2]) {
			#instruccion si la condicion2 es cierta
		}else if([condicion3]) {
			#instruccion si la condicion3 es cierta
		}
*/

$edad_de_Mario = 43;
$edad_de_Luigi = 17;

if ($nota_de_Mario >= 15 && $nota_de_Mario < 27) {
	echo "Es Adolescente";
} else if ($edad_de_Mario >=27) {
	echo "Es Adulto";
} else if ($edad_de_Mario <=14) {
	echo "Es un nino";
}

if ($nota_de_Luigi >= 15 && $nota_de_Luigi < 27) {
	echo "Es Adolescente";
} else if ($edad_de_Luigi >=27) {
	echo "Es Adulto";
} else {
	echo "Es un nino";
}