<?php
/* OPERADORES LOGICOS
    son aquellos operadores que trabajan con datos a travez de expresiones logicas
    TEMAS:
        - && ---> AND
        - || ---> OR
        - ! ---> NOT
*/
// Operador AND (&&)
    echo "<h2>Operador AND (&&)</h2>";
        var_dump(1<3 && 3>2); # true
        echo "<br>";
        var_dump(7<8 && 4>7); # false
        echo "<br>";
        var_dump(8==="8" && 3!=3); # false
// Operador OR (||)
    echo "<h2>Operador OR (||)</h2>";
        var_dump(1<3 || 3>2); # true
        echo "<br>";
        var_dump(7<8 || 4>7); # true
        echo "<br>";
        var_dump(8==="8" || 3!=3); # false
// Operador NOT (!)
    echo "<h2>Operador NOT (!)</h2>";
        var_dump(!(1<3)); # false
        echo "<br>";
        var_dump(!(7>8)); # true
        echo "<br>";
        var_dump(!(8==="8")); # true