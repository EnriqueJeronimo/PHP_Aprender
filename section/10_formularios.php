<?php

$contenido_form = '';

$codigo = '<!-- Formulario HTML-->
<form method="post" action "">
    <input type="text" name="nombre" placeholder="Tu nombre">
    <input type="submit" value="Enviar">
</form>';

$resultado = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre'])){
    $nombre = htmlspecialchars($_POST['nombre']);
    $resultado = "Hola, $nombre! Has enviado el formulario por POST.";
}
else{
    $resultado = "Enviar el formulario para ver el resultado";
}

$contenido_form .= mostrar_ejemplo($codigo, $resultado, 'Ejemplo de formulario que se envía a si mismo y procesa datos con $POST.');

mostrar_seccion(
    '10. Manejo de formularios',
    'PHP se utiliza comúnmente para procesar datos de formularios HTML mediante $_GET, $_POST. Es importante sanitizar y validar la entrada del usuario.',
    $contenido_form
);
?>