<?php 
/* CONSTANTES
	En programación, una constante es un valor que no puede ser alterado/modificado durante la ejecución de un programa, únicamente puede ser leído
	TEMAS
		- define(<String nombre>, <any valor>) ---> para crear una constante
*/

define("mi_constante", "soy una constante");
define("mi_numero", 34);

echo mi_constante;
echo "<br>";
echo mi_numero;