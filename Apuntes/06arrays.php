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
        Array(3.5, 6, 8, 9.5, 3),
        Array(2, 5, 6, 5.5, 10),
        Array(4.5, 3, 2.5, 7, 8),
        Array(7, 1, 0, 1.5, 3.5)
    );

    echo "El elemento en la fila 2 columna 3 --> {$notas[1][2]}" . SALTO;

    $notas[][] = 9;
    echo "El úlitmo elemento de la última fila: {$notas[4][0]}" . SALTO;

    $notas[3][] = 7.5;
    echo "El último elemento de la fila 4: {$notas[3][5]}" . SALTO;

    $numeros = [1,2,3,4,5];
    // echo "El último elemento del array es {$numeros[-1]}";   --> Esto no se puede hacer (No muestra nada).
    // para arreglarlo podemos hacer $notas = [-1 => 1, 2, 3, 4, 5];  --> Al poner el echo de antes, muestra el 1 por pantalla.

    $coches = [
        '1234ABC' => ['marca' => 'Seat', 'modelo' => 'Ibiza', 'motor' => 'Diesel', 'pvp' => 18000],
        '4321CBA' => ['marca' => 'Ford', 'modelo' => 'Focus', 'motor' => 'Gasolina', 'pvp' => 21000]
    ];
    echo "El primer coche es {$coches['1234ABC']['marca']} modelo {$coches['1234ABC']['modelo']}" . SALTO;

    // Crea un array de un equipo de fútbol donde cada fila son las posiciones
    // donde juegan los jugadores con el conjunto de jugadores identificados por su 
    // dorsal.
?>

    <h2>Arrays multidimensionales</h2>
<?php
    $notas = [
        [
            [3,4,5,6],
            [8,2,9,3]
        ],
        [
            [1,9,8,5],
            [2,8,4,5]
        ],
        
            [2,8,4,6],
            [9,10,4,3]    
    ];

    echo "Accedo al elemento 1, 1, 2: {$notas[1][1][2]}" . SALTO;

    $notas = [
        'Juan' => [
            'T1' => ['dwes' => 6, 'dwec' => 5, 'daw' => 8, 'diw' => 7],
            'T2' => ['dwes' => 5.5, 'dwec' => 7.5, 'daw' => 6, 'diw' => 6],
            'T3' => ['dwes' => 5, 'dwec' => 7, 'daw' => 6.5, 'diw' => 4]
        ],
        'María' => [
            'T1' => ['dwes' => 9, 'dwec' => 6, 'daw' => 7.5, 'diw' => 7],
            'T2' => ['dwes' => 8, 'dwec' => 7, 'daw' => 6.5, 'diw' => 5.5],
            'T3' => ['dwes' => 7, 'dwec' => 7, 'daw' => 4.5, 'diw' => 5.5]
        ]
    ];

    echo "La nota de María en el segundo tirmestre en dwec es {$notas['María']['T2']['dwec']}" . SALTO;

    $alumno = "María";
    $trimestre = "T2";
    $modulo = "dwec";

    echo "La nota de María en el segundo tirmestre en dwec es {$notas['María']['T2']['dwec']}" . SALTO;
    echo "La nota de María en el segundo tirmestre en dwec es {$notas[$alumno][$trimestre][$modulo]}" . SALTO;
?>

    <h2>Recorrer un array</h2>
<?php
    // PARA ARRAY ESCALARES PUEDO USAR UN BUCLE FOR TRADICIONAL
    $numeros = [6,19,12,7,11,9,3];
    for( $i = 0; $i < count($numeros); $i++ ) {
        echo "Elemento $i es {$numeros[$i]}" . SALTO;
    }

    echo SALTO;

    // PARA CUALQUIER TIPO DE ARRAY TENEMOS EL BUCLE FOREACH
    // foreach ($array as [$clave] => $valor) {
    // 
    // };
    // o:
    // foreach ($array as [$clave =>] $valor) {
    // 
    // };
    foreach( $numeros as $numero ) {
        echo "El número es $numero" . SALTO;
    }

    echo SALTO;
    
    $alumno = [];
    $alumno['nombre'] = "Juan Gómez";
    $alumno[0] = 4;
    $alumno[1] = 6;
    $alumno[2] = 5;
    $alumno['media'] = 5;

    foreach( $alumno as $clave => $valor ) {
        echo "Elemento con clave $clave y valor $valor" . SALTO;
    };

    /*
    Si es un array bidimensional escalar podemos usar dos bucles for anidados

    echo "<h3>Recorrido de arrays multidimensionales</h3>";
    for( $i = 0; $i < count($notas); $i++ ) {
        echo "Recorrido de la fila $i" . SALTO;
        for( $j = 0; $i < count($notas[$i]); $j++ ) {
            echo "Fila $i Columna $j --> {$notas[$i][$j]}" . SALTO;
        }
    }
    
    */
    echo SALTO;

    foreach( $notas as $alumno => $trimestres ) {
        echo "Notas de $alumno: " . SALTO;
        foreach( $trimestres as $trimestre => $modulos ) {
            echo "Notas del trimestre: $trimestre: " . SALTO;
            foreach( $modulos as $modulo => $nota ) {
                echo "Módulo: $modulo Nota: $nota" . SALTO;
            }
            echo "----------------------------" . SALTO;
        }
        echo "=============================" . SALTO;
    }
?>
</body>
</html>