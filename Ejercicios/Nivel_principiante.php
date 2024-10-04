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
                <li>La distancia de Plutón al Sol (5,9064x109km).</li>
                <li>El diámetro del Sol.</li>
            </ul>
<?php
    $distancia_tierra_sol = 149600000;
    $distancia_notacion_cientifica = sprintf("%.3e", $distancia_tierra_sol);
    echo "La distancia de la tierra al sol es " . $distancia_notacion_cientifica . SALTO;
?>
    </body>
</html>