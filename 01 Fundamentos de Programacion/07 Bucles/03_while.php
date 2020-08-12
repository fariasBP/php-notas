<?php
/* WHILE
    crea un bucle en donde repite el codige hasta que la condicion se falsa
    TEMAS:
        - while
    FORMA:
        while([condicion]) {
            #codigo a ejecutar si la condicion es true
        }
*/
$contador = 0;
echo "entrando al bucle while\n";
while ($contador < 3) { // El codigo se ejecuta mientras la condicion sea cierta
    echo "Contador en: {$contador}\n";
    $contador++;
}
echo "saliendo del bucle while\n";