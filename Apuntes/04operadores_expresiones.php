<?php
    define("SALTO", "<br>");
    define("PI", 3.14159);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores y expresiones</title>
</head>
<body>
    <h1>Operadores y expresiones: 04operadores_expresiones.php</h1>

    <h2>Expresiones, operadores y operandos</h2>
    <p>Una expresión es una combinación de operandos y operadores que arroja un resultado.
        Tiene tipo de datos, depende del tipo de datos de sus operandos y de la operación realizada.<br>
        Un operador es un símbolo formado por uno, dos o tres caracteres que denota una operación.<br>
        Los operadores pueden ser:<br>
        - Unarios. Solo necesitan un operando.<br>
        - Binario. Utilizan dos operandos.<br>
        - Ternarios. Utilizan tres operandos.<br>
        Un operando es una expresión en sí misma, siendo la mas simple un literal o una variable, pero también
        puede ser un valor devuelto por una función o el resultado de otra expresión.<br>
        Las operaciones de una expresión no se ejecutan a la vez, si no en orden según la preferencia y asociatividad
        de los operadores. Esta puede alterar a conveniencia.
    </p>

    <h2>Operadores</h2>
    <h3>Asignación</h3>
<?php
    // El operador de asignación es "="
    $numero = 45;
    $resultado = $numero + 5 - 29;
    $sin_valor = NULL;
?>

    <h3>Operadores aritméticos</h3>
<?php
    /* + Suma
       - Resta
       * Multiplicación
       / División
       % Módulo
       ** Exponenciación

       Unarios
       + Conversión a entero
       - El opuesto
    */
    $numero1 = 15;
    $numero2 = 18;
    $suma = $numero1 + 10;
    $resta = 25 - $numero2;
    $opuesto = -$numero1;
    $mulitplicacion = $numero1 * 2;
    $division = $numero1 / 3;
    $modulo = $numero1 % 4;
    $potencia = $numero1 ** 2;
    echo "$numero1 y $numero2" . SALTO;
    echo "$suma $resta $opuesto $mulitplicacion $division $modulo $potencia" . SALTO;

    $numero3 = "45";
    $numero4 = +$numero3;
    echo "El \$numero4 es $numero4 y su tipo es " . gettype($numero4) . SALTO;

    // No lo hace con float
    $numero5 = PI;
    $numero6  = +$numero5;
    echo "El \$numero6 es $numero6 y su tipo es " . gettype($numero6) . SALTO;

    // Para la división entera 
    $numero1 = 35;
    $numero2 = 15;
    $resultado_entero = (int)($numero1 / $numero2);
    echo "El resultado entero es $resultado_entero" . SALTO;
?>

    <h3>Operadores de asignación aumentada</h3>
<?php
    /* 
        ++ Incremento
        -- Decremento
        += 
        -=
        *=
        /=
        %=
    */
    $numero = 4;
    $numero++;  // Equivale a $numero = $numero + 1
    echo "El resultado de \$numero++ es $numero" . SALTO;
    ++$numero;  // Equivale a $numero = $numero + 1
    echo "El resultado de ++\$numero es $numero" . SALTO;

    // Ejemplo donde se ve la diferencia
    $numero = 10;
    $resultado = $numero++ * 2;  // Equivale a resultado = $numero * 2; $numero = $numero + 1.
    echo "El resultado es $resultado y el número es $numero" . SALTO;

    $numero = 10;
    $resultado = ++$numero * 2;
    echo "El resultado es $resultado y el número es $numero" . SALTO;  // Equivale a resultado = ($numero + 1) * 2.

    $numero += 5;  // Equivale a $numero = $numero + 5
    echo "El número es $numero" . SALTO;
    $numero -= 3;  // Equivale a $numero = $numero - 3
    echo "El número es $numero" . SALTO;

    $numero *= 3;  // Equivale a $numero = $numero * 3
    echo "El número es $numero" . SALTO;

    $numero %= 7;  // Equivale a $numero = $numero % 7
    echo "El número es $numero" . SALTO;
?>

    <h3>Operadores relacionales</h3>
<?php
    /*
        == Igual a
        === Idéntico a
        != Distinto
        !== Distinto valor o distinto tipo
        < Menor que
        > Mayor que
        >= Mayor o igual
        <= Menor o igual
        <=> Nave espacial
    */
    $n1 = 5;
    $cadena = "5";
    $n2 = 8;

    $resultado = $n1 == $n2;
    echo "El n1 igual que n2: " . (int)$resultado . SALTO;

    $resultado = $n1 == $cadena;
    echo "El n1 igual que cadena: " . (int)$resultado . SALTO;

    // Operador === es True si los valores de los operandos son iguales y del mismo tipo.
    $resultado = $n1 === $cadena;
    echo "El n1 idéntico a cadena: " . (int)$resultado . SALTO;

    $resultado = $n1 != $n2;
    echo "El n1 distinto de n2: " . (int)$resultado . SALTO;

    $resultado = $n1 != $cadena;
    echo "El n1 distinto de cadena: " . (int)$resultado . SALTO;

    // Operador !== es True si son distintos o de diferente tipo. False en caso contrario.
    $resultado = $n1 !== $cadena;
    echo "El n1 distinto de cadena: " . (int)$resultado . SALTO;

    // Nave espacial
    // Se emplea para evitar esto:
    // if( $n1 < $n2 ) {
    //
    // } elsif ($n1 == $n2) {
    //
    // } else {
    //
    // }

    $resultado = $n1 <=> $n2;
    // Si n1 es MAYOR que n2 -->  1
    // Si n1 es IGUAL que n2 -->  0
    // Si n1 es MENOR que n2 --> -1
    echo "El n1 menor, igual o mayor que n2: " . (int)$resultado . SALTO;

    $nombre1 = "Zacarías";
    $nombre2 = "adela";
    $resultado = $nombre1 > $nombre2;
    echo "El nombre1 es mayor que el nombre2: " . (int)$resultado . SALTO;  // Compara por el código ASCII

    $nombre1 = "Mario";
    $nombre2 = "María";
    $resultado = $nombre1 < $nombre2;
    echo "El nombre1 es menor que el nombre2: " . (int)$resultado . SALTO;
    
    $nombre1 = "maría";
    $nombre2 = "María";
    $resultado = $nombre1 === strtolower($nombre2);
    echo "El nombre1 es idéntico que el nombre2: " . (int)$resultado . SALTO;
?>

    <h3>Operadores lógicos</h3>
<?php
    // AND      And lógico o conjunción lógica
    // OR       Or lógico o disyunción lógica
    // XOR      OR exclusivo
    // !        Not
    // &&       And lógico  -->  A diferencia de AND tiene mayor precedencia
    // ||       Or lógico  -->  A diferencia de OR tiene mayor precedencia 
    $n1 = 9;
    $n2 = 5;
    $n3 = 10;
    $resultado = $n1 == $n2 OR $n2 > $n3;
    echo "El resultado 1 es " . (int)$resultado . SALTO;

    $resultado = $n1 == $n2 AND $n2 < $n3;
    echo "El resultado 2 es " . (int)$resultado . SALTO;

    $resultado = $n1 == 9 OR $n2 < $n1 AND $n3 > 10;
    echo "El resultado 3 es " . (int)$resultado . SALTO;

    $resultado = $n1 == 9 || $n2 < $n1 AND $n3 > 10;
    echo "El resultado 4 es " . (int)$resultado . SALTO;

    $resultado = ($n1 == 9 OR $n2 < $n1) AND $n3 > 10;  // El AND no se ejecuta porque el = se ejecuta hasta el ")".
    echo "El resultado 5 es " . (int)$resultado . SALTO;

    // Para evitar esto:
    $resultado = ($n1 == 9 OR $n2 < $n1) && $n3 > 10;  
    echo "El resultado 6 es " . (int)$resultado . SALTO;

    $resultado = $n1 + 5 / $n3 < $n1 ** 3 AND $n3 / 5 + $n2 * 2 >= $n1 * $n2 / $n3 OR 
                    $n1 - 3 % 2 == $n3 - 7;
    echo "El resultado 7 es " . (int)$resultado . SALTO;
?>
</body>
</html>