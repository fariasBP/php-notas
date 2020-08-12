<?php 
/* OPERADORES DE INCREMENTO PRO-POST, DECREMENTO PRE-POST
	Son aquellos operadores que aumentan o disminuye el valor
	TEMAS:
		- ++ ---> incremento
		- -- ---> decremento
*/
// Incremento
	// Pre incremento - incrementa en una unidad (el efecto se vera inmediato)
		$mi_numero = 14;
		echo ++$mi_numero;
		echo "<br>";
	// Post incremento - incrementa en una unidad (el efecto se vera a la accion siguiente)
		$mi_numero = 14;
		echo $mi_numero++;
		echo '->'.$mi_numero;
		echo "<br>";
// Decremento
	// Pre Decremento - decrementa en una unidad (el efecto es inmediato)
		$mi_numero = 18;
		echo --$mi_numero;
		echo "<br>";
	// Post Decremento - decrementa una una unidad (el efecto se vera a la accion siguiente)
		$mi_numero = 18;
		echo $mi_numero--;
		echo '->'.$mi_numero;
		echo "<br>";