<?php
/* OPERADOR TERNARIO
    es aquel operador que nos permite hacer una condicion rapidamente
    TEMAS:
        - (<any condicion>) ? <any resultado_true> : <any resultado_false> ---> Operador ternario
*/

$personas = ["Alex"=>16, "Steve"=>21];

echo ($personas["Alex"] > 18) ? "Es mayor edad" : "No es menor de edad";
echo "<br>";
echo ($personas["Steve"] > 18) ? "Es mayor edad" : "No es menor de edad";