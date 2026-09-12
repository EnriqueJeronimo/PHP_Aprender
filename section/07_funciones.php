<?php
$contenido_funciones = '';

$codigo = '<?php
function saludar ($nombre){
    return "Hola, $nombre!";
}
echo saludar("Ana");
?>';

$resultado = "Hola, Ana!";
$contenido_funciones .= mostrar_ejemplo($codigo, $resultado, 'Definición y llamada a función con parámetro y retorno.');

$codigo = '<?php
function multiplicar($a, $b = 2){
    return $a * $b;
}
echo multiplicar(5) . "<br>";
echo multiplicar(5,3);
?>';

$resultado = "10\n15";

$contenido_funciones .= mostrar_ejemplo($codigo, $resultado, 'Parámetros con valores por defecto.');

mostrar_seccion(
    '7.Funciones',
    'Las funciones agrupan código reutilizable. Pueden aceptar parámetros y devolver valores. También existen funciones anónimas y flecha (arrow functions).',
    $contenido_funciones
);
?>