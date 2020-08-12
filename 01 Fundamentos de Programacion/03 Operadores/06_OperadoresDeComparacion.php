<?php 
/* OPERADORES DE COMPARACION
	son aquellos operadares que comparan la similitud entre datos
	TEMAS:
		- == ---> igualdad, muestra si un dato es igual a otro de ser asi dara uno de lo contrario cero sabiendo que uno es true y cero es falso
		- === ---> identico o igualdad estricta, muestra si dos datos son identicos (no iguales), de ser asi dara uno de lo contrario cero sabiendo que uno es true y cero es falso
		- != ---> diferente o desigualdad, muestra si un dato es diferente a otro, de ser asi dara uno de lo contrario cero sabiendo que uno es true y cero es falso
		- !== ---> desigualdad estricta, devuelve 1 (true) si son extremadamente diferentes de lo contrario dara 0 (false)
		- > ---> mayor que, devuelve 1 (true) si es que el primer dato es mayor que el segundo de lo contrario devuelve 0 (false)
		- < ---> menor que, devuelve 1 (true) si es que el primer dato es menor que el segundo de lo contrario devuelve 0 (false)
		- >= ---> mayor o igual que, devuelve 1 (true) si es que el primer dato es mayor o igual que el segunda dato de lo contrario devuelve 0 (false)
		- <= ---> menor o igual que, devuelve 1 (true) si es que el primer dato es menor o igual que el segundo dato de lo contrario devuelve 0 (false) 
*/
// Operador de Igualdad (==)
	echo "<h2>Operador de Igualdad (==)</h2>";
		echo 4==4;
		echo "<br>";
		var_dump(4==3);
		echo "<br>";
		echo 4=="4";
// Operador de Igualdad Estricta (===)
	echo "<h2>Operador de Igualdad Estricta (===)</h2>";
		var_dump(4===4);
		echo "<br>";
		var_dump(4===3);
		echo "<br>";
		var_dump(4==="4");
// Operadores de Desigualdad (!=)
	echo "<h2>Operador de Desigualdad (==)</h2>";
		var_dump(4!=4);
		echo "<br>";
		var_dump(4!=3);
		echo "<br>";
		var_dump(4!="4");
// Operadores de Desigualdad Estricta (!==)
	echo "<h2>Operador de Desigualdad (==)</h2>";
		var_dump(4!==4);
		echo "<br>";
		var_dump(4!==3);
		echo "<br>";
		var_dump(4!=="4");
// Operadores de Mayor que (>)
	echo "<h2>Operador de Mayor que (>)</h2>";
		var_dump(7>8);
		echo "<br>";
		var_dump(6>3);

// Operadores de Menor que (<)
	echo "<h2>Operador de Menor que (<)</h2>";
		var_dump(7<8);
		echo "<br>";
		var_dump(6<3);
// Operadores de Mayor o igual que (>=)
	echo "<h2>Operadr de Mayor o igual que (>=)</h2>";
		var_dump(7>=9);
		echo "<br>";
		var_dump(3>=3);
		echo "<br>";
		var_dump(4>=2);
// Operadores de Menor o igual que (>=)
	echo "<h2>Operadr de Mayor o igual que (<=)</h2>";
	var_dump(7<=9);
	echo "<br>";
	var_dump(3<=3);
	echo "<br>";
	var_dump(4<=2);