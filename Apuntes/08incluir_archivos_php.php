<?php
    /*
    Para incluir archivos hay 4 funciones que funcionan casi igual:
      - include() -> Incluye el contenido del argumento en el lugar donde se invoque. Si
                     el archivo no existe, se emite un WARNING y el script continúa.

      - required() -> Incluye el contenido del argumento en el lugar donde se invoque. Si
                      el archivo no existe, se genera un ERROR fatal y termina la ejecución 
                      del script.

    ¿Que ocurre si incluyo el mismo archivo más de una vez?
    Error por duplicidad de definición de funciones. Para evitarlo:

      - include_once() -> Igual que invlude() pero si el archivo ya había sido previamente 
                          incluído pero no lo incluye.
      - include_once() -> Igual que require() pero si el archivo ya había sido previamente 
                          incluído pero no lo incluye.

    */
    $variable = 8;

    // Direcotorio raíz del servidor: /var/www/dwes.com
    $_SERVER['DOCUMENT_ROOT'];
    
    include("includes/funciones.php");

    inicio_html("Inclusión de archivos", ["estilos/general.css"]);

    echo "<h1>Inclusión de archivos php en scripts PHP</h1>";
    fin_html();
?>