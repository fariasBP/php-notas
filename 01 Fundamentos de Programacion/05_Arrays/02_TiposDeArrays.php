<?php
/* ARRAYS
    se denomina tambien 'matriz', vector (de una sola dimensión) o formación (en inglés array)​ a una zona de almacenamiento contiguo que contiene una serie de elementos del mismo o diferentes tipos, los elementos de la matriz
    TEMAS:
        - Arrays simple
        - Arrays Asocitivos
        - Arrays multidimensionales
*/
// Arrays Simples 
echo '<h2>Arrays Simples</h2>';
    // 1er forma - ya no se usa
        $mis_frutas = array('manzana', 'pera', 'naranja', 43, true);
        var_dump($mis_frutas); echo "<br>";
    // 2da forma
        $mis_objetos = ['Celular', 'Lapiz', 4, false, 'Audifonos'];
        var_dump($mis_objetos); echo "<br>";
    // 3ra forma
        $mis_amigos = [];
        $mis_amigos[] = 'Joel';
        $mis_amigos[] = 'Scoot';
        $mis_amigos[] = 'Pedro';
        var_dump($mis_amigos); echo "<br>";
// Arrays Asociativos
echo '<h2>Arrays Asociativos</h2>';
    // 1er forma 
        $mis_elementos = array("Elemento1"=>13, "Elemento2"=>'Kael', "Elemento3"=>true);
        var_dump($mis_elementos); echo "<br>";
    // 2da forma
        $mis_elementos2 = [
            "Elemento1" => 15,
            "Elemento2" => 'Mario',
            "Elemento3" => false
        ];
        var_dump($mis_elementos2); echo "<br>";
    // 3ra forma
        $mis_elementos3 = []; // esto se puede omitir
        $mis_elementos3["Elemento1"] = 15;
        $mis_elementos3["Elemento2"] = 'Raul';
        $mis_elementos3["Elemento3"] = null;
        var_dump($mis_elementos3); echo "<br>";
// Arrays Multidimencionales
echo '<h2>Arrays Multidimensionales</h2>';
    // 1er forma
        $usuarios = array(
            array(
                'nombre' => 'Jorge',
                'edad' => 23,
                'conectado' => true
            ),
            array(
                'nombre' => 'Marco',
                'edad' => 35,
                'conectado' => true
            )
        );
        var_dump($usuarios); echo '<br>';
    // 2da forma
        $usuarios2[] = [
            'nombre' => 'Steve',
            'edad' => 34,
            'conectado' => false
        ];
        $usuarios2[] = [
            'nombre' => 'bill',
            'edad' => 46,
            'conectado' => true
        ];
        var_dump($usuarios2); echo '<br>';
    // 3ra forma
        $usuarios3 = [];
        $usuarios3[0] = [];
        $usuarios3[0]['nombre'] = 'Calvin';
        $usuarios3[0]['edad'] = 19;
        $usuarios3[0]['conectado'] = false;
        $usuarios3[1] = [];
        $usuarios3[1]['nombre'] = 'Steve';
        $usuarios3[1]['edad'] = 21;
        $usuarios3[1]['conectado'] = true;
        var_dump($usuarios3);