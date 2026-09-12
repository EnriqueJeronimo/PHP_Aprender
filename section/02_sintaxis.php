<?php

$contenido_sintaxis='';

$codigo = '<?php
// Esto es un comentario de una linea.
# Tambien se puede usar almohadilla.
/*Comentario
  multilinea*/
echo "Hola, Mundo!";
?>';

$resultado = "Hola, Mundo!";

$contenido_sintaxis .= mostrar_ejemplo($codigo, $resultado, 'Etiquetas PHP y Comentarios. echo imprime texto.');

$codigo = '<?php
$nombre = "Juan";
$edad = 25;
$precio = 19.99;
$es_activo = true;

echo "Nombre: $nombre, Edad: $edad, Precio: $precio, Activo: ".($es_activo ? "Sí" : "No");
?>';

$resultado = "Nombre: Juan, Edad: 25, Precio: 19.99, Activo: Sí";

$contenido_sintaxis .= mostrar_ejemplo($codigo, $resultado, 'Variables en PHP: empiezan con $, no requieren declaración de tipo explicita.');

mostrar_seccion(
    '2. Sintaxis Básica',
    'PHP se incrusta en HTML mediante etiquetas especiales. El código se ejecuta en el servidor y solo se envía el resultado al navegador.',
    $contenido_sintaxis
);
?>