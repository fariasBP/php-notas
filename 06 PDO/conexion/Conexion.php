<?php
/* CONEXION PHP
    Realizaremos una conexion php en donde si se realizo correctamente dara mostrara 'ser realizo la conexion' pero de lo contrario dara un error
    TEMAS:
        - new PDO(dsn, user, password, [?options]) >>> Define una interfaz ligera para establecer un conexion
            - dsn >>> menciona al servidor a conectar
            - user >>> menciona el nombre de usuario, informacion necesaria para conectar
            - password >>> menciona la contrasena del usuario, informacion necesario para conectar
            - options >>> argumento no necesario, opciones extras
        - setAttribute(atribute, value) >>> establece atributos al manejador de base de datos
            - atribute >>>  atributo a establecer
            - value >>> valor del atributo, si no tiene valor se coloca false
        - exec(statement) >>> Ejecuta una sentencia SQL y devuelve el número de filas afectadas
            - statement >>> La sentencia Sql para preparar y ejecutar. los datos de la consulta debense ser debidamente escapados
    FORMA:
        - new PDO (<String $dsn>, <String $username>, <String $password>, <?[any $options]>):PDO
        - PDO::setAttribute(<String atribute>, <any value=false>):boolean
        - PDO::exec(<String $statement>):int
            - "SET CHARACTER SET utf8" >>> para que nuestra web detecte el utf8
*/          

$con = null;
try {
    $con = new PDO('mysql:host=localhost; dbname=example_db', 'username', '0000');
    $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $con->exec('SET CHARACTER SET utf8');
    echo ('Se realizo la conexion<br>');
} catch (Exception $e) {
    die("Error en la linea: {$e->GetLine()} || en el archivo: 
    {$e->GetFile()} || Por la razon: {$e->GetMessage()} || Con el codigo de error: 
    {$e->GetCode()}");
}