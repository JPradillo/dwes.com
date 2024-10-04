<?php
    define("SALTO", "<br>");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Arrays: 06arrays.php</h1>
    <p>Un array es un conjunto de elementos que se referencian con el mismo nombre. A cada variable del array
        se le conoce como componente o elemento del array. Cada componente tiene asociado una clave que se emplea
        para acceder a ese elemento o componente.
    </p>
    <p>En PHP los arrys son muy flexibles. Hay de dos tipos: escalares y asociativos.
        Para acceder a un elemento se usa su clave con el operador []. Si la clave es un número entero mayor o igual que 0
        es un array escalar. Si la clave es una cadena de caracteres es un array asociativo.
    </p>

    <h2>Array escalar</h2>
<?php
    // Un array se define de dos formas
    // 1º con la función Array().
    $notas = Array(4, 9, 7.5, 8, 10);

    // 2º con un literal
    $numeros = [8, 4, 5, 6, 7.5, 10];

    // Si solo se indican los elementos del array, la clave comienza por 0 desde la izquierda.
    // El acceso a los elementos es mediante su clave o índice entre corchetes.
    echo "La primera nota es $notas[0]" . SALTO;
    echo "La tercera nota es $notas[2]" . SALTO;

    // Al definir el array podemos indicar los índices.
    $notas = Array(2 => 8.5, 4 => 4.75, 8 => 3.5);

    // Puede definir índice para algunos y no para otros
    $notas = Array( 3 => 5, 6.5, 8, 7 => 2, 9, 5 );
    echo "Posición 4: $notas[3]" . SALTO;
    echo "Posición 5: $notas[4]" . SALTO;
    echo "Posición 6: $notas[5]" . SALTO;
    echo "Posición 7: $notas[6]" . SALTO;
    echo "Posición 8: $notas[7]" . SALTO;
    echo "Posición 9: $notas[8]" . SALTO;
    echo "Posición 10: $notas[9]" . SALTO;
    
    // Borramos el elemento 4:
    unset($notas[4]);
    if( isset($notas[4]) ) {
        echo "El elemento 4 está definido y es $notas[4]" . SALTO;
    } else {
        echo "El elemento 4 no está definido." . SALTO;
    }

    // Modificar un elemento del array
    $notas[5] = rand(1,10);
    echo "Índice 5: $notas[5]" . SALTO;
    
    $notas[] = 7.5;
    echo "Elemento 11 de las notas: $notas[10]" . SALTO;
?>

    <h2>Arrays asociativos</h2>
    <p>Array que tiene una cadena de caracteres como clave.</p>
<?php
    $coche['1234ABC'] = "Seat León";
    $coche['4321CBA'] = "Ford Focus";

    echo "Mi coche es un {$coche['1234ABC']}" . SALTO;
    echo "El coche de Manolillo es un " . $coche['4321CBA'] . SALTO;
?>

    <h2>Array mixto</h2>
    <p>Cuando las claves son índices numéricos o cadenas indistintamente.</p>
<?php
    $alumno['nombre'] = "Juan Gómez";
    $alumno[0] = 4;
    $alumno[1] = 6;
    $alumno[2] = 5;
    $alumno['media'] = 5;

    echo "El alumno {$alumno['nombre']} tiene de notas $alumno[0], $alumno[1] y $alumno[2]." . SALTO;
    echo "Su media es {$alumno['media']}." . SALTO;

    $alumno = ['nombre' => 'Manuel Martínez', 3, 8, 5, 10, 'media' => 6.5];
    echo "El alumno {$alumno['nombre']} tiene de notas $alumno[0], $alumno[1], $alumno[2] y $alumno[3]." . SALTO;
    echo "Su media es {$alumno['media']}." . SALTO;
?>

    <h2>Arrays bidimensionales</h2>
    <p>Arrays con dos dimensiones y por tanto para acceder a un elemento hacen falta dos claves.</p>
<?php
    $notas = Array(



    );
?>
</body>
</html>