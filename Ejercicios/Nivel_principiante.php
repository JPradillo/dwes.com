<?php
    define("SALTO", '<br>')
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nivel principiante</title>
    </head>
    <body>
        <h1>Nivel: Principiante</h1>
        
        <h3>Ejercicio 1</h3>
        <p>Crea un script PHP que visualiza las siguientes magnitudes 
            (utiliza un número en notación científica y elige una precisión diferente para cada dato):</p>
            <ul>
                <li>La distancia de la tierra al sol.</li>
                <li>La distancia de Plutón al Sol (5,9064x10e9km).</li>
                <li>El diámetro del Sol.</li>
            </ul>
<?php
    $distancia_tierra_sol = 149600000;
    $distancia_notacion_cientifica = sprintf("%.3e", $distancia_tierra_sol);
    echo "La distancia de la tierra al sol es " . $distancia_notacion_cientifica . "km." . SALTO;

    $distancia_sol_pluton = 5906400000;
    $distancia_notacion_cientifica = sprintf("%.4e", $distancia_sol_pluton);
    echo "La distancia de la tierra al sol es " . $distancia_notacion_cientifica . "km." . SALTO;

    $diametro_sol = 1400000;
    $diametro_notacion_cientifica = sprintf("%.1e", $diametro_sol);
    echo "El diámetro del sol es " . $diametro_notacion_cientifica . "km." . SALTO;
?>

        <h2>Ejercicio 2</h2>
        <p>Crea un script PHP que declara tres variables de tipo entero y les asigna a cada una
        el número 989 en decimal, octal, hexadecimal y binaria.</p>
<?php
    $cambiar_a_binario = 989;
    $cambiar_a_octal = 989;
    $decimal = 989;
    $cambiar_a_hexadecimal = 989;

    echo "El número {$decimal} cambiado a binario, octal y hexadecimal es: " . SALTO;
    echo "- Binario = 0b" . decbin($cambiar_a_binario) . SALTO;
    echo "- Octal = 0" . decoct($cambiar_a_octal) . SALTO;
    echo "- Hexadecimal = 0x" . dechex($cambiar_a_hexadecimal) . SALTO;
?>

        <h2>Ejercicio 3</h2>
        <p>Crea un script PHP que muestre en pantalla (utiliza un número float en notación
            científica y elige una precisión diferente para ambos datos):</p>
        <ul>
            <li>La cantidad de bits en una memoria RAM de 16GB</li>
            <li>La población de la Tierra</li>
            <li>El tamaño de algún virus (20 nm)</li>
        </ul>
<?php 
    $memoria_RAM = 16;
    $gb_bites = 1024**3*8;
    echo "La cantidad de bits de una memoria RAM de $memoria_RAM GB es de: " . sprintf("%.3e", $memoria_RAM * $gb_bites) . " bits" . SALTO;

    $poblacion = 7951000000;
    echo "La cantidad de habitantes en la Tierra son: " . sprintf("%.1e", $poblacion) . " personas." . SALTO;

    $virus = 0.00000002;  
    echo "El tamaño del virus de la Rubeola es de aproximadamente: " . sprintf("%.1e", $virus) . "nm" . SALTO;
?>

        <h2>Ejercicio 4</h2>
        <p>Crea un script PHP que muestre la cadena “Mi primer, y no único, ejercicio”,
            incluyendo las comillas dobles. Inicialmente la cadena se muestra directamente, luego
            utiliza una variable.</p>
<?php
    echo '"Mi primer, y no único, ejercicio"' . SALTO;
    $cadena = '"Mi primer, y no único, ejercicio"' . SALTO;
    echo $cadena;
?>

        <h2>Ejercicio 5</h2>
        <p>Crea un script PHP que asigna un nombre de usuario a una variable y luego muestra 
            la cadena ¡Hola &lt;nombre&gt;! El &lt;nombre&gt; es el nombre de usuario asignado a la 
            variable.</p>
<?php
    $nombre = "Jorge";
    echo "¡Hola $nombre!" . SALTO;
?>

        <h2>Ejercicio 6</h2>
        <p>Crea un script PHP que asigna el nombre de tu padre/madre y luego, muestre en
            pantalla la cadena ¡El nombre de mi padre/madre es &lt;nombre&gt;!.</p>
<?php
    $madre = "Silvia";
    echo "¡El nombre de mi madre es $madre!" . SALTO;
?>

        <h2>Ejercicio 7</h2>
        <p>Crea un script PHP que calcule y muestre la siguiente operación aritmética:
            ((3+2)/(2*5))**2</p>
<?php
    $operacion = ((3+2)/(2*5))**2;
    echo "El resultado de la operación es: " . $operacion . SALTO;
?>

        <h2>Ejercicio 8</h2>
        <p>Crea un script PHP que declare las variables a, b y c con valores 3.5, 6 y 4.25 
            respectivamente. Luego calcule y muestre en pantalla la siguiente operación 
            aritmética: ((a+2)/(2*b))*((c-4)/(a-c))**2</p>
<?php
    $a = 3.5;
    $b = 6;
    $c = 4.25;
    $resultado = (($a+2)/(2*$b))*(($c-4)/($a-$c))**2;
    echo "El resultado de la operación es: " . sprintf("%.3e", $resultado) . SALTO;
?>

        <h2>Ejercicio 9</h2>
        <p>Crea un script PHP asigna a dos variables un número de horas extra trabajadas y el 
            salario por cada una. Luego, calcula y muestre en pantalla el salario con el símbolo
            monetario.</p>
<?php
    $salario_hora_extra = 8;
    $horas_extra_j = 6;
    $horas_extra_m = 12;
    echo "Marta ha trabajado $horas_extra_m horas extra a $salario_hora_extra € (total = " . $horas_extra_m * $salario_hora_extra . "€) y 
    Jorge ha hecho $horas_extra_j a $salario_hora_extra € (total = " . $horas_extra_j * $salario_hora_extra . "€)" . SALTO;
?>

        <h2>Ejercicio 10</h2>
        <p> Crea un script PHP que asigna a una variable un número entero positivo y luego
            muestre la suma de números enteros desde 1 al número ingresado. Esta suma se
            puede calcular con la siguiente expresión: (n*(n+1))/2</p>
<?php
    $numero = 10;
    $total = ($numero*($numero+1) / 2);
    echo "El resultado al hacer esta suma con el número 10 es: $total" . SALTO;
?>

        <h2>Ejercicio 11</h2>
        <p>Crea un script PHP que asigna a una variable tu peso en Kg y luego calcule el peso
        equivalente en onzas. Una onza son 28,3495 gramos.</p>
<?php
    $peso_en_kg = 70;
    $peso_en_onzas = $peso_en_kg * 28.3495;
    echo "Mi peso en onzas es " . round($peso_en_onzas, 2) . " onzas y en kg es $peso_en_kg kg" . SALTO;
?>

        <h2>Ejercicio 12</h2>
        <p>Crea un script PHP que calcule y muestre cuántos bytes hay en un SSD de 64GB</p>
        
    </body>
</html>