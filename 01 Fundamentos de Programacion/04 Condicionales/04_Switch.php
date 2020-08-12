<?php 
/* SWITCH
	condicional que cumple la misma funcion eque el else-if pero con menos codigo
	TEMAS:
		- switch
	FORMA DE ESCRITURA:
		switch ([variable a estudiar]) {
			case ([comparacion2]):
				#instruccion de una sola linea a ejecutar si la comparacion1 se cumple;
				break;
			case ([comparacion 2]):
				#instruccion de una sola linea a ejecutar si la comparacion2 se cumple;
				break;
			default:
				#instruccion de una sola linea a ejecutar si todos los casos no se cumplen, defult no es necesario escribirlo;
				break;
		}
*/
$numero = 3;
switch ($numero) {
	case 1:
		echo "es 1";
		break;
	case 2:
		echo "es 2";
		break;
	case 3:
		echo "es 3";
		break;
	default:
		echo "no es ni 1 ni 2 ni 3";
		break;
}