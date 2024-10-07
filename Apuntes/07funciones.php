<?php
    /* Funciones en PHP

    Conjunto de sentencias con un nombre asociado
    que se ejecutan a discreción del desarrollador,
    cuando es necesario.

    Invocación o llamada de la función: Sentencia que solicita 
    la ejecución de la función, momento en el cual el flujo 
    del programa se desvía a la primera sentancia
    de la función

    Las funciones pueden necesitar datos. Estos datos se les
    pasa en forma de parámetros o argumentos de la función
    en el momento de la invocación.

    Pueden devolver uno o varios valores al punto de invocación
    que puede posteriormente utilizarse en cualquier expresión.

    Tipos:
        - Internas, integradas o predefinidas --> Las propias del lenguaje
        - Métodos --> Funciones de clases de objetos
        - De usuario --> Las que el desarrollador define

    3.1 Definición de la función
    --------------------------------
        - Se puede definir en cualquier parte del script
        - Tiene una cabecera y un cuerpo
        -Sintaxis:
            function nombre_funcion ( [arg1, arg2, arg3...] ) {
                sentencias    
            }
        - Nombre: cualquier identificador válido sin $
        - Lista de parámetros o argumento separados por coma
        - El cuerpo de la función es el conjunto de sentencias entre {}

    3.3 Paso de parámetros
    --------------------------------
        - Parámetro: Dato que la función necesita para su ejecución
        - Permite que las funciones se ejecuten múltiples veces
          con diferentes datos. El objetivo de las funciones es evitar código repetitivo.
        - Tipos de parámetros:
            - Parámetro formal -> El que se define en la cabecera de la función.
                                  Este parámetro es equivalente a una variable.
                                  Conocido simplemente como PARÁMETRO.
            - Parámetro real -> El que se emplea en la invocación. Puede ser una 
                                expresión cualquier que arroje un valor. Conocido
                                como ARGUMENTO.
        - Los argumentos y los parámetros tienen una correspondencia por su posición
          en la definición y en la invocación. El primer argumento corresponde al primer
          parámetro, el segundo argumento al segundo parámetro...

      3.3.1 Paso de parámetros por valor y por referencia

        - Paso por valor -> Consiste en copiar el valor del argumento en el parámetro. 
          Hay dos entidades: el parámetro de la función y el argumento de la llamada,
          que son independientes.
        - Paso por referencia -> Consiste en pasar al parámetro la referencia (dirección
          de memoria) del argumento. Por tanto, solo hay una entidad y si el parámetro
          dentro de la función se modifica, el nuevo valor es visible en el script
          princial.

      3.3.2 Paso de parámetros con nombre

        En la invocación de la función paso el argumento con el nombre del parámetro.
        Esto permite utilizar un orden diferente en los argumentos al de los parámetros
        definidos en la cabecera de la función.

      3.3.3 Parámetros con valor por defecto
        
        En la cabecera de la función los parámetros pueden tener un valor por defecto (solo
        literales)
        Pueden ser arrays y null.
        Permite invocar la función sin esos parámetros, los cuales adquieren como valor
        el valor por defecto definido en la cabecera de la función.
        
        Si la función combina parámetros obligatorios con parámetros con valor por defecto,
        los obligatorios se definen antes que los de por defecto, salvo que en la invocación
        usemos argumentos con nombre.
    */

    define('PI', 3.14159);
    
    function area_triangulo($base, $altura) {
        $area = $base * $altura / 2;

        return $area; 
    }

    function area_triangulo2(&$base, &$altura) {
        echo "1. Dentro de la función: $base y $altura" . SALTO;
        $area = $base * $altura / 2;
        
        $base = 10;
        $altura = 20;

        echo "2. Dentro de la función: $base y $altura" . SALTO;

        return $area;
    }

    // Parámetros con valor por defecto
    function volumen_cilindro($radio, $altura = 10) {
        $area_base = PI * $radio ** 2;
        $volumen = $area_base * $altura;

        return $volumen;
    }
    
?>

<?php
    define("SALTO", "<br>");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    <h1>Funciones: 07funciones.php</h1>
<?php
    $base = 8;
    $altura = 3;

    // 3.2 Invocación de la función
    $area = area_triangulo($base, $altura);
    echo "El triángulo con base $base y altura $altura tiene de área $area" . SALTO;$

    // Paso por valor
    $area = area_triangulo2($base, $altura);
    echo "El triángulo con base $base y altura $altura tiene de área $area" . SALTO;

    // En el paso por valor permite que el argumento sea una expresión cualquiera
    // Comentamos esto para que no afecte al paso por referencia
    // $area = area_triangulo2(9, $base / 2);  // Coge el valor de la variable base indicado antes. $base = 8;
    // echo "El triángulo con base $base y altura $altura tiene de área $area" . SALTO;

    // Paso por referencia
    // En la llamada a la función usamos & antes del argumento.
    // En este caso, el argumento es obligatorio que sea una variable.
    $base = 8;
    $altura = 3;

    $area = area_triangulo2($base, $altura);
    echo "El triángulo con base $base y altura $altura tiene de área $area" . SALTO;

    // Paso de parámetros con nombre
    $area = area_triangulo($altura = $base*2, $base = 10);
    echo "El triángulo con base $base y altura $altura tiene de área $area" . SALTO;

    // Parámetros por defecto
    $volumen = volumen_cilindro(8, 9);
    echo "El volumen del cilindro con radio 8 y altura 9 es $volumen" . SALTO;
    $volumen = volumen_cilindro(10);
    echo "El volumen del cilindro con radio 10 y altura por defecto es $volumen" . SALTO;
?>
</body>
</html>