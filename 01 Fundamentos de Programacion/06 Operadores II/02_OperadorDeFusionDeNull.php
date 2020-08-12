<?php
/* OPERADOR DE FUSION
    Es aquel operador muy parecido a el operador ternario pero este trabaja a partir de null ya que verifica si hay informacion o no
    TEMAS:
        - (<any datos_a_verificar> ?? <any mensaje_null>) ---> verifica si hay datos o no
*/

$datos = null;

$verificarDatos = $datos ? $datos : "no hay datos";
echo($verificarDatos);
echo "<br>";

$verificarDatos = $datos ?? "no hay datos";
echo $verificarDatos;