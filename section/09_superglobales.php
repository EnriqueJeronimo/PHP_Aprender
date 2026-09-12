<?php

$contenido_super = '';

$codigo = '<?php
//Ejemplos de superglobales comunes
echo $_SERVER["HTTPS_HOST"]."<br>";
echo $_SERVER["REQUEST_METHOD"]."<br>";
// $_GET, $_POST, $_SESSION, $_COOKIE, $_FILES, etc.
?>';

$resultado = $_SERVER['HTTP_HOST'] . "\n" . $_SERVER['REQUEST_METHOD'];

$contenido_super .= mostrar_ejemplo($codigo, $resultado, 'Superglobales: variables predefinidas accesibles en cualquier ámbito.');

mostrar_seccion(
    '9. Varibales Superblobales',
    'PHP proporciona variables predefinidas como $_GET, $_POST, $_SERVER, $_SESSION, $_COOKIE, $_FILES, $_ENV, $_REQUEST. Son arrays asociativos con información del entorno, solicitud, etc.',
    $contenido_super
);
?>