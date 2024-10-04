<?php
define("SALTO", "<br>");
?>
<!DOCTYPE html>
<html lant="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>

<body>
    <h1>Variables: 03variables.php</h1>
    <h2>Definición de una variable</h2>
<?php
    // Las variables se definen con $identificador
    $nombre_variable = "Valor de la variable";

    // Variables que no se han definido
    $resultado = $numero + 25;
    echo "El valor de número es $numero y el resultado es $resultado<br>";  // Esto mostrará un Warning.

    $resultado = $sin_definir + 5.5;
    echo "El valor sin definir es $sin_definir y el resultado es $resultado<br>";

    // Si la variable está en un contexto lógico su valor lógico asume por defecto False.
?>

    <h2>Análisis de variables</h2>
    <h3>Análisis simple</h3>
<?php
    // Consiste introducir una variable en una cadena con " o heredoc para incrustar su valor dentro de la cadena
    echo "El resultado es $resultado<br>";
?>

    <h3>Análisis complejo</h3>
<?php
    // En algunas situaciones nos encontramos ambigüedad en una variable interpolada. Para ello usamos las llaves
    // y se elimina la ambigüedad.
    $calle = "Trafalgar Sq";
    $numero = "5";
    $poblacion = "London";
    $distrito = "50000";

    echo "Mi dirección en Londres es {$numero}th, $calle<br>$poblacion<br>$distrito<br>";
?>

    <h2>Funciones para variables</h2>
<?php
    //  Función gettype()
    $numero = 10;
    echo "El tipo de datos de $resultado es " . gettype($resultado) . "<br>";        // Float
    echo "El tipo de datos de una expresión es " . gettype($numero) . "<br>";        // Integer
    echo "El tipo de datos de una expresión es " . gettype($numero + 5.5) . "<br>";  // Float

    // Función empty()
    /* Comprueba si una variable tiene un valor 
        - Si es entero devuelve True si es 0, False en caso contrario
        - Si es float devuelve True si es 0.0, False en caso contrario 
        - Si es cadena devuelve True si es "", False en caso contrario
        - Devuelve True si es NULL o False
    */
    if (empty($numero)) echo "\$numero tiene el valor $numero<br>";
    else echo "\$numero tiene un valor no vacío<br>";

    $numero = NULL;
    if (empty($numero)) $numero = 18;
    else echo "\$numero ya tiene un valor asignado y es $numero<br>";

    // Función isset()
    // Devuelve True si la variable está definida y no es NULL
    if (isset($nueva_variable)) echo "La variable está definida y su valor es $nueva_variable<br>";
    else echo "La variable $nueva_variable no está definida<br>";

    $variable_null = NULL;
    if (isset($variable_null)) echo "La variable está definida<br>";
    else echo "La variable $variable_null no está definida o tiene valor NULL<br>";

    /* Funciones que comprueban los tipos de datos
        - is_bool() --> True si la expresión es booleana
        - is_int() --> True si la expresión es integer
        - is_float() --> True si la expresión es float
        - is_string() --> True si la expresión es una cadena
        - is_array() --> True si la expresión es un array
    
        En cualquier otro caso, devuelve False
    */
    $edad = 25;
    $mayor_edad = $edad > 18;
    $numero_e = 2.71;
    $mensaje = "El número e es " . $numero_e . "<br>";

    if (is_int($edad)) echo "\$edad es un número entero<br>";

    if (is_bool($mayor_edad)) echo "\$mayor_edad es booleano<br>";

    if (is_float($numero_e)) echo "\$numero_e es float<br>";

    if (is_string($mensaje)) echo "\$mensaje es una cadena<br>";
?>

    <h2>Constantes</h2>
    <p>Una constante es un valor con nombre que no puede cambiar de valor en el programa. Se le asigna un valor en la declaración y permanece invariable.
        Se definen de dos formas:<br>
        - Mediante la función define()<br>
        - Mediante la palabra clave const
    </p>
<?php
    define("PI", 3.14159);
    define("PRECIO_BASE", 1500);
    define('DIRECTORIO_SUBIDAS', '/uploads/archivos');

    echo "El número PI es " . PI . "<br>";
    $area_circulo = PI * PI * 5;
    echo "El área del cíirculo de radio 5 es $area_circulo<br>";

    $path_archivo = DIRECTORIO_SUBIDAS . "/archivo.pdf";
    echo "El archivo subido es $path_archivo<br>";

    $precio_rebajado = PRECIO_BASE * PRECIO_BASE * 0.25;
    echo "El precio rebajado es $precio_rebajado<br>";

    const SESION_USUARIO = 600;
    echo "La sesión de usuario finaliza en " . SESION_USUARIO . " segundos<br>";

    // Constantes predefinidas por PHP
    echo "El script es " . __FILE__ . " y la línea es " . __LINE__ . "<br>";
?>
</body>

</html>