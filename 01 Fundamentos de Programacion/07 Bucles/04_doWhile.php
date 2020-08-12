<?php

$contador = 0;
echo "entrando al bucle while 1\n";
do {
    echo "Contador en: {$contador}\n";
    $contador++;
} while ($contador < 3); // El codigo se ejecuta mientras la condicion sea cierta
echo "saliendo del bucle while 1\n";

$contador = 5;
echo "entrando al bucle while 2\n";
do {
    echo "Contador en: {$contador}\n";
    $contador++;
} while ($contador < 3); // El codigo se ejecuta mientras la condicion sea cierta
echo "saliendo del bucle while 2\n";