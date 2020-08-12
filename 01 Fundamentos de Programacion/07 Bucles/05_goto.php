<?php
/* GOTO
    Utilizada para saltar de una linea del codigo a otra. Cabe resaltar que no se usa a menudo ya que fue remplazada por funciones
    TEMAS:
        - goto
    FORMA:
        goto [nombredelgoto]
        #codigo a saltarse
        [nombredelgoto]:
        #codigo a leer
*/

echo "Iniciando el programa \n";

goto saltar;
echo "Desarrollando el programa\n";

saltar:
echo "finalizando el programa\n";