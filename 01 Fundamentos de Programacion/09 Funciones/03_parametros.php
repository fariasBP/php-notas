<?php
/* PARAMETROS
    Tambien llamado argumentos son variables utilizadas para dar valores de entrada a la funcion, y que utilizara como un recurso para lograr un objetivo.
    TEMAS:
        - return >>> retorna un valor
*/

// FUNCIONES CON ARGUMENTO
    function sumar($numero1, $numero2) {
        $res = $numero1 + $numero2;
        echo "{$res}\n";
    }
    sumar(4, 7);

    function restar($numero1, $numero2) {
        $resultado = $numero1 - $numero2;
        return $resultado;
    }
    $x = 45;
    $y = 15;
    $res = restar($x, $y);
    echo ("{$res}\n");
// FUNCIONES Y ARRAYS COMO ARGUMENTO
    $lista_amigos = ['franco', 'Fernando', 'Sara'];
    function lista($arrayParam) {
        var_dump($arrayParam);
    } 
    lista($lista_amigos);
    
    function contarLista($arrayLista) {
        $cant = count($arrayLista);
        echo "tienes {$cant} amigos\n";
    }
    contarLista($lista_amigos);

    function listarLista($Lista) {
        for ($i=0; $i < count($Lista); $i++) {
            $e = $i + 1;
            echo "amigo {$e} es {$Lista[$i]}\n";
        }
    }
    listarLista($lista_amigos);