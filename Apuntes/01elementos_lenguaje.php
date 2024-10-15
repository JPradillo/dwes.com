<!DOCTYPE html>
<html lant="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Elementos del lenguaje</title>
    </head>
    <body>
        <h1>Elementos del lenguaje</h1>
        
<?php
# Script: 01Elementos_lenguaje.php

?>

        <h2>Entrada y salida</h2>
        <p>La entrada de datos en PHP es con un formulario o con un enlace.
            La salida de datos se produce con la función echo, y su forma abreviada, y la funcion print.
            Además, para la salida de datos con formato tenemos printf.
        </p>

        <h3>Función echo</h3>

<?php
    echo "<p>La función echo emite el resultado de una expresión a la salida. Se puede usar como función o como contrucción del lenguaje (sin paréntesis).</p>";
    echo "<p>Esto es un párrafo HTML enviado por echo.</p>";

    $nombre = "Jorge";
    $apellido = "Pradillo";

    echo "Hola ", $nombre, " ¿cómo estas?";

    // echo ("Hola",$nombre," ¿cómo estas?);

    // Quiero un salto de línea al final de la línea
    echo "Hola, esta línea acaba en un salto. \n";
    echo "Supuestamente esta línea es la siguiente a la anterior\n y esta va después.";

    echo "<br>Mi nombre es $nombre y mi apellido es $apellido.";

    echo "<br>Mi nombre es " . $nombre . " y mi apellido es " . $apellido . ".<br>";

    echo "<br>Uno más dos son ", 1 + 2, " y tiene que haber salido 3.";

    // El operador . no tiene preferencia sobre el operador +, pero es más habitual usar el operador .
    echo "<br>Uno más dos son " . 1 + 2 . " y tiene que haber salido 3.<br>";

    echo "<h4>Forma abreviada de echo</h4>";

    echo "<p>Cuando hay que eviar a la salida el resultado de una expresión
     pequeña disponemos de la forma abreviada de echo que permite intercalarse en el código HTML con menos esfuerzo.</p>";

     $tiene_portatil = True;
?>

        <!-- La forma abreviada de echo va dentro de HTML -->
        <!-- &lt;?= expresión &gt; equivale a &lt;?php echo expresión ?&gt; -->
        <p>Mi nombre es <?= $nombre . " " . $apellido ?> y estoy programando en PHP.</p>

        <!-- Uso muy habitual. Valores por defecto en controles de formulario -->
        <input type="text" name="nombre" size="15" value="<?=$nombre?>">    
        <input type="checkbox" name="portátil" <?=$tiene_portatil ? "checked" : ""?>>¿Tienes portátil?</input>

        <!-- Consejo: Las cadenas en PHP con " y en HTML con '. -->
<?php
    echo "<br><input type='text' name='apellido' size='50'>";
?>
        
        <h3>Función print</h3>
        <p>La función print funciona igual que echo.</p>
<?php
    print "<p>Esto es una cadena\nque tiene más de una línea\ny se envían a la salida.</p>";
    print "<p>Mi nombre es $nombre y $apellido<p>"
?>

        <h3>Función printf</h3>
<?php
    $pi = 3.14159;
    $radio = 3;
    $circunferencia = 2 * $pi * $radio;
    printf("La circunferencia de radio %d es %010.2f", $radio, $circunferencia);
?>
    </body>
</html>