<?php
    define("SALTO", "<br>");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras de control</title>
</head>
<body>
    <h1>Estructuras de control: 05estructuras_control.php</h1>

    <h2>Sentencias</h2>
    <p>Las sentencias simples acaban en ;, pudiendo haber más de una en la misma línea.</p>
<?php
    $numero = 3; echo "El número es $numero" . SALTO; $numero += 3; print "Ahora es $numero" . SALTO; 
?>
    <p>Un bloque de sentencias es un conjunto de sentencias encerrados entre llaves. No suelen ir solas,
        sino formar parte de una estructura de control. Además se pueden anidar.
    </p>
<?php
    {
        $numero = 5;
        echo "El número es $numero" . SALTO;
        $numero -= 2;
        echo "El número es ahora $numero" . SALTO;
        {
            $numero = 8;
            $numero *= 2;
            echo "El número es $numero" . SALTO;
        }
        echo "El número es $numero" . SALTO;
    }
?>

    <h2>Estructuras condicional simple</h2>
<?php
    // if( expresión ) sentencia;
    $numero = 4;
    if( $numero >= 4 ) echo "El número es mayor o igual a 4" . SALTO;

    if( $numero === 4 and $numero % 2 == 0 )
        echo "El número es igual a 4 y su resto al dividir por 2 es 0" . SALTO;
?>

    <h2>Estructura condicional compuesta</h2>
<?php
    $n1 = 9;
    $n2 = 5;
    $n3 = 10;
    if ( ($n1 == 9 OR $n2 < $n1 ) AND $n3 > 10) {
        echo "El resultado global es True" . SALTO;
    } else {
        echo "El resultado global es False" . SALTO;
    }

    if( $n1 > 20 OR $n3 < 15 ) echo "La condición es True" . SALTO;
    else echo "La condición es Falsa" . SALTO;

    $edad = 21;
    if ( $edad > 18 ) 
        echo "Puedes ver la peli" . SALTO;
    else
        echo "No puedes ver la peli" . SALTO;

    $tipo_carnet = "C1";
    if ( $edad > 18 and $tipo_carnet == "C1" ) {
        echo "Obtención del carnet de camión." . SALTO;
        echo "Tienes $edad años y al superar los 21 puedes obtener el carnet $tipo_carnet." . SALTO;
    }
    else {
        echo "No cumples los requisitos para el carnet $tipo_carnet." . SALTO;
        echo "Comprueba que tienes más de 21 años." . SALTO;
    }

    // Uso de código HTML en las estructuras de control 
    if( $edad > 18 AND $edad < 65 ) {?>
        <h3>Servicios del gimnasio disponibles para la edad <?= $edad ?>:</h3>
        <ul>
            <li>Spinning</li>
            <li>Boxeo</li>
            <li>Zumba</li>
        </ul>
<?php
    } else {?>
        <h3>Servicios para jubilados o menores de 18</h3>
        <ul>
            <li>Taichi</li>
            <li>Pilates</li>
            <li>Yoga</li>
        </ul>
<?php
    }

    if( $tipo_carnet == "C1" ) 
        echo <<<CARNET_C1
    <h2>Documentación para obtener el carnet $tipo_carnet</h2>
    <ul>
        <li>Fotocopia del carnet</li>
        <li>Certificado de penales</li>
        <li>Carnet B2</li>
    </ul>
    CARNET_C1;
?>

    <h2>If else anidados</h2>
<?php
    $nota = 6.5;
    if( $nota >= 0 AND $nota < 5 ) 
        echo "Suspenso";
    else
        if( $nota < 6 ) echo "Aprobado";
        else
            if( $nota < 7 ) echo "Bien";
            else 
                if( $nota < 9 ) echo "Notable";
                else
                    if( $nota <= 10 ) echo "Sobresaliente";
                    else echo "El valor de nota no es correcto";
    SALTO;

    if( $nota >= 0 and $nota < 5) {
        echo "Suspenso";
    }
    elseif( $nota < 6 ){
        echo "Aprobado";
    }
    elseif( $nota < 7 ){
        echo "Bien";
    }
    elseif( $nota < 9 ){
        echo "Notable";
    }
    elseif( $nota <= 10) {
        echo "Sobresaliente";
    }
    else {
        echo "La nota no s correcta";
    }
    echo "<br>";
    echo "<h2>Estuctura condicionasinterminar</h2>";

    // Estructura condicional múltiples switch
    $nota = 7;
    switch( $nota ) {
        case 1: {
            echo "Suspenso";
            // Si no pongo break pongo se ejecutan todas las de debajo
        }
        case 2:
        case 3:
        case 4:
             echo "Suspenso";
             break;
        case 5:
            echo "Aprobado";
            break;
        case 6:
            echo "Bien";
            break;
        case 7:
        case 8:
            echo "Notable";
            break;
        case 9:
        case 10:
            echo "Sobresaliente";
            break;
        default:
            echo "La nota no es correcta";

    }
    echo "<br>";

    // Expresion match
    $calificacion = match ($nota){  // la coincidencia tiene que ser en valor y tipo de dato
        0, 1, 2, 3, 4           => "Suspenso",
        "5"                     => "Suspenso con cadena", // no funcionaría porque no serían del mismo tipo. En el switch si funcionaria
        5                       => "Aprobado",
        6                       => "Bien",
        7, 8                    => "Notable",
        9, 10                   => "Sobresaliente",
        default                 => "Nota errónea"
    };

    echo "Con tu nota $nota tienes una calificacion de $calificacion<br>";

    echo "<h2>Operador ternario ?</h2>";

    // Sintaxis:
    // <condicion> ? <expresion_true> : <expresion_false>;

    $nota = 6;
    $resultado = $nota >= 5 ? "Con un $nota estás Aprobado" : "Con un $nota suspenso";
    echo "$resultado<br>";

    $con_beca = false;
    $nombre = "Juan coche";
?>

    <form action="" method="POST">
        <input type="text" name="nombre" size="30" value="<?= isset($nombre) ? $nombre : ""?>"><br>
        <input type="checkbox" name="con_beca" <?= $con_beca ? "checked" : "" ?>> Con beca<br>
        <button>Enviar</button>
    </form>

    <h2>Operador de fusión NULL</h2>
<?php
    $metodo = "POST";
    $segundo_metodo = "GET";
    $por_defecto = "main";

    $resultado = $metodo ?? $segundo_metodo;

    echo "El resultado es $resultado<br>";

    unset($metodo);
    $segundo_metodo = "GET";
    $por_defecto = "main";

    $resultado = $metodo ?? $segundo_metodo;

    echo "El resultado es $resultado<br>";


    unset($segundo_metodo);
    $por_defecto = "main";

    $resultado = $metodo ?? $segundo_metodo ?? $por_defecto;

    echo "El resultado es $resultado<br>";
?>

    <h2>Bucles</h2>
    <ul>
        <li>For con contador (estilo java y c++)</li>
        <li>FOr para colecciones de datos</li>
        <li>While</li>
        <il>Do ... while</il>
    </ul>

    <h3>Bucle con contador</h3>
<?php
    // Tabla de multiplicar 4
    $numero = 4;
    echo "La tabla de multiplicar del $numero<br>";
    for( $i = 1; $i <= 10; $i++){    // primero se ejecutan la definicion del contador, despues la condicion y por ultimo el incremento al finald e cada iteracion  
        echo "$numero x $i = " . strval($numero * $i) . "<br>";
    }

    // Diferencias entre: $i++, ++$i, no hay
    echo "Los 10 primeros números pares<br>";
    for( $i=2; $i <= 2 * 10; $i += 2 ){
        echo "Número par $i<br>";
    }

    echo "Cuenta atras para el lanzamiento<br>";
    for ( $i = 10; $i >= 0; $i--){
        echo "$i segundos<br>";
    }   
    echo "Ignicion";

    // Varias expresiones en el inicio del contador y en la parte del incremento.
    for( $i = 10, $j = 0; $i >= 5 and $j <8; $i--, $j+=2){
        echo "Valor de i es $i y valor de j es $j<br>";
    }

?>

    <h3>Bucle while</h3>
<?php
    // Sumar los números pares que se generan aleatoriamente hasta que salga el 0.
    // while(condicion) sentencia;

    $numero = rand(0,10);
    $total = 0;
    while( $numero != 0 ){
        echo "El numero generado es $numero<br>";
        if ( $numero % 2 == 0)
            $total += $numero;

        $numero = rand(0, 10);
    }

    echo "El total de los pares es $total<br>";
?>

    <h3>Do... While</h3>
<?php
    // contar cuantos numeros impares se generan aleatoriamente hasta que se genera uno negativo
    $total = 0;
    do{
        $numero = rand(-5, 50);
        if( abs($numero) % 2 == 1 ) $total++;
        echo "se ha generado el $numero<br>";

    }
    while ( $numero >= 0);
    echo "Se han generado $total números impares<br>";
?>

    <h3>Sentencias break y continue</h3>
<?php
    // Bucle repetir .. hasta con break
    $total = 0;
    do {
        $numero = rand(0, 20);
        if ($numero % 3 == 0 ) $total++;
        echo "El numero generado es $numero<br>";
        if( $numero == 0 ) break;
    }
    while(true);

    echo "Se ha generado $total numeros multiplos de 3<br>";

    // Generar números aleatorios entre 1 y 10 y sumar los pares
    // hasta que suma sea superior a 50 o se hayan generado
    // como máximo 20 números.
    $contador = 0;
    $suma_pares = 0;
    while( True ) {
        $numero = rand(1, 10);

        if( $numero % 2 == 0 ) 
            $suma_pares += $numero;
        if( $suma_pares > 50 ) break;

        $contador++;
        if( $contador == 20 ) break;
    }

    echo "Se han generado $contador números y la suma de los pares es igual a $suma_pares" . SALTO;

    // Break admite un argumento numérico entero para indicar
    // de que bucle se sale.
    // Solo sirve si hay bucles anidados.

    // Generar 200 números aleatorios entre 1 y 1000.
    // Por cada número se comprueba cuántos números primos
    // desde 1 hasta ese número.
    // Si hay más de 10 números primos que termine.
    // Al final visualizar cada número generado y los primos hasta ese número.

    /*
        Ej: Se genera aleatoriamente el 25:
            El número es 25 y los primos hasta el 25 son: 1, 2, 3, 5, 7, 11, 13, 17, ...
    */
    for( $i = 0; $i < 200; $i++ ) {
        $numero = rand(1,1000);
        echo "El número generado es $numero. Primos: ";
        $cuantos_primos = 0;

        for( $j = 1; $j <= $numero; $j++ ) {
            // Averiguar si $j es primo.
            $es_primo = True;
            $raiz_cuadrada = $j ** 0.5;    // $raiz_cuadradra == sqrt($j);
            $k = 2;

            while( $es_primo && $k <= $raiz_cuadrada ) {
                if( $j % $k == 0 ) {
                    $es_primo = False;
                }
                $k++;
            }            

            // ¿Cómo podemos saber si el número $j es primo?
            if( $es_primo ) {
                echo "$j ";
                $cuantos_primos++;
            }
            if( $cuantos_primos >= 10 ) {
                break 2;
            }
        }
        echo SALTO;
    }

    // Genera 10 números aleatorios.
    // Por cada uno genera tantos caracteres en minúscula aleatorios como ese número.
    // Si alguno de los caracterers generados es z, se acaba y no se generan.

    // Si el número generado es impar, que vuelva a generar otro.

    for( $i = 0; $i < 10; $i++ ) {
        $numero = rand(1, 20);
        echo SALTO . " $numero ";
        if( $numero % 2 == 1 ) continue;

        for( $j = 1; $j <= $numero; $j++ ) {
            // Genero un carácter aleatorio
            $codigo_ascii_letra = rand(97,122);
            $caracter = chr($codigo_ascii_letra);
            echo "$caracter";

            if( $caracter == "z" ) break 2;
        }
        echo SALTO;
    }
?>

    <h3>Sintaxis alternativa a las estructuras de control.</h3>
<?php
    $numero = rand(1, 100);
    if( $numero % 2 == 0 ):
        echo "El número $numero es par" . SALTO;
    else:
        echo "El número $numero es impar." . SALTO;
    endif;

    for( $i = 1; $i <= 10; $i++ ):
        echo "$i x $numero = " . $i * $numero . SALTO;
    endfor;

    $i = 10;
    while( $i > 0 ):
        echo SALTO . "El valor de i es $i" . SALTO;
        $i--;
    endwhile;
?>
</body>
</html>