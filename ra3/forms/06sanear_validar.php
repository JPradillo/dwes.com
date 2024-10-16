<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/funciones.php");

inicio_html("Saneamiento y Validación de datos",
            ["/estilos/general.css", "/estilos/formulario.css"]);

echo "<header>Saneamiento y validación de datos</header>";

if ( $_SERVER['REQUEST_METHOD'] == "POST" ) {
    /*
    SANEAMIENTO DE DATOS
    ======================
    1ª OPCION -> Uso de htmlspecialchars();
    */
    $dni = htmlspecialchars($_POST['dni']);
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);

    $clave = htmlspecialchars($_POST['clave']);  // Tener cuidado porque podría cargarselo si alguien pone <loquesea>
    $suscripcion = isset($_POST['suscripcion']);
    $sitio = htmlspecialchars($_POST['sitio']);
    
    $peso = htmlspecialchars($_POST['peso']);
    $edad = htmlspecialchars($_POST['edad']);

    foreach( $_POST['patologias_previas'] as $patologia ) {
        $patologias[] = htmlspecialchars($patologia);
    }

    $comentarios = htmlspecialchars($_POST['comentarios']);
    $operacion = htmlspecialchars($_POST['operacion']);

    echo "<h3>Datos filtrados con hrmlspecialchars()</h3>";
    echo "<p>Dni: $dni <br>";
    echo "Nombre: $nombre <br>";
    echo "Email: $email <br>";
    echo "Clave: $clave <br>";
    echo "Suscripción: $suscripcion <br>";
    echo "Sitio: $sitio <br>";
    echo "Peso: $peso <br>";
    echo "Edad: $edad <br>";
    echo "Patologías: " . implode(", ", $patologias) . "<br>";
    echo "Comentarios: $comentarios <br>";
    echo "Operación: $operacion </p>";

    /*
    2ª OPCIÓN -> Uso de filter_input()
    */
    $dni2 = filter_input(INPUT_POST, 'dni', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $nombre2 = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS);
    $email2 = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    $clave2 = filter_input(INPUT_POST, 'clave', FILTER_SANITIZE_SPECIAL_CHARS);
    $suscripcion2 = isset($_POST['suscripcion']);
    $sitio2 = filter_input(INPUT_POST, 'sitio', FILTER_SANITIZE_URL);
    $peso2 = filter_input(INPUT_POST, 'peso', 
                        FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $edad2 = filter_input(INPUT_POST, 'edad', FILTER_SANITIZE_NUMBER_INT);
    $patologias2 = filter_input(INPUT_POST, 'patologias_previas', 
                        FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
    $comentarios2 = filter_input(INPUT_POST, 'comentarios', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $operacion2 = filter_input(INPUT_POST, 'operacion', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    echo "<h3>Datos filtrados con filter_input()</h3>";
    echo "<p>Dni: $dni2 <br>";
    echo "Nombre: $nombre2 <br>";
    echo "Email: $email2 <br>";
    echo "Clave: $clave2 <br>";
    echo "Suscripción: $suscripcion2 <br>";
    echo "Sitio: $sitio2 <br>";
    echo "Peso: $peso2 <br>";
    echo "Edad: $edad2 <br>";
    echo "Patologías: " . implode(", ", $patologias2) . "<br>";
    echo "Comentarios: $comentarios2 <br>";
    echo "Operación: $operacion2 </p>";

    /*
    3ª OPCIÓN -> Uso de la funcion filter_input_array()
    */
    $opciones_filtrado = [
        'dni'                   => FILTER_SANITIZE_SPECIAL_CHARS,
        'nombre'                => FILTER_SANITIZE_SPECIAL_CHARS,
        'email'                 => FILTER_SANITIZE_EMAIL,
        'clave'                 => FILTER_DEFAULT,
        'suscripcion'           => FILTER_DEFAULT,
        'sitio'                 => FILTER_SANITIZE_URL,
        'peso'                  => [
                                    'filter'    => FILTER_SANITIZE_NUMBER_FLOAT,
                                    'flags'     => FILTER_FLAG_ALLOW_FRACTION
                                   ],
        'edad'                  => FILTER_SANITIZE_NUMBER_INT,
        'patologias_previas'    => [
                                    'filter'    => FILTER_SANITIZE_SPECIAL_CHARS,
                                    'flags'     => FILTER_REQUIRE_ARRAY
                                   ],
        'comentarios'           => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'operacion'             => FILTER_SANITIZE_FULL_SPECIAL_CHARS
    ];

    $datos_saneados = filter_input_array(INPUT_POST, $opciones_filtrado);
    echo "<h3>Resultados del saneamiento con filter_input_array()</h3>";
    echo "<p>";

    foreach ( $datos_saneados as $clave => $valor ) {
        if( is_array($valor) ){
            echo "$clave: " . implode(", ", $valor) . "<br>";
        } else {
           echo "$clave: $valor";
        }
    }
    echo "</p>";

    /*
    VALIDACIÓN DE FORMATO DE DATOS
    ================================
    Uso de las funciones filter_input() y filter_input_array()
    */

    $dni3 = filter_input(INPUT_POST, 'dni', );

    $email3 = filter_input(INPUT_POST, 'email', 
                    FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE);
    $suscripcion3 = filter_input(INPUT_POST, 'suscripcion', FILTER_VALIDATE_BOOL);


    echo "<p><a href='" . $_SERVER['PHP_SELF'] . "'>Introducir otros datos</a></p>";
}
else {
?>
<form method="POST" action="<?=$_SERVER['PHP_SELF']?>">
    <fieldset>
        <legend>Introducir sus datos</legend>
        <label for="dni">DNI</label>
        <input type="text" name="dni" id="dni" size="10">

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" size="40">
        
        <label for="email">Email</label>
        <input type="text" name="email" id="email" size="30">
        
        <label for="clave">Clave</label>
        <input type="password" name="clave" id="clave" size="10">
        
        <label for="suscripcion">Suscripción</label>
        <input type="checkbox" name="suscripcion" id="suscripcion">

        <label for="sitio">Web personal</label>
        <input type="text" name="sitio" id="sitio" size="30">

        <label for="peso">Peso</label>
        <input type="text" name="peso" id="peso" size="3">

        <label for="edad">Edad (entre 18 y 65)</label>
        <input type="text" name="edad" id="edad" size="3">

        <label for="patologias_previas">Patologías previas</label>
        <select name="patologias_previas[]" id="patologias_previas" multiple size="5">
            <option value="osteoporosis">Osteoporosis</option>
            <option value="diabetes">Diabetes</option>
            <option value="colesterol">Hipecolesteroleima</option>
            <option value="anemia">Anemia</option>
            <option value="arterioesclerosis">Arterioesclerosis</option>
        </select>

        <label for="comentarios">Comentarios</label>
        <textarea name="comentarios" id="comentarios" rows="4" cols="30" placeholder="Escribe sobre ti..."></textarea>
    </fieldset>
    <input type="submit" name="operacion" id="operacion" value="Enviar">
</form>
<?php
}

fin_html();

?>