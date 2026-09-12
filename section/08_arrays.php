<?php
$contenido_arrays = '';

#Primer ejemplo

$codigo = '<?php
$frutas = ["Manzana", "Platano", "Cereza"];
echo $frutas[0]."<br>";
echo count($frutas);
?>';

$resultado = "Manzana\n3";

$contenido_arrays .= mostrar_ejemplo($codigo, $resultado, 'Array indexado y funcinoes count().');

#Segundo ejemplo.

$codigo = '<?php
$persona = [
    "nombre" => "Carlos",
    "edad" => 30,
    "ciudad" => "Madrid"
];
echo $persona["nombre"]. "tiene" . $persona["edad"]."años";
?>';

$resultado = "Carlos tiene 30 años";

$contenido_arrays .= mostrar_ejemplo($codigo, $resultado, 'Array asociativo (clave => valor).');

#Tercer ejemplo.

$codigo = '<?php
$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]    
];
echo $matriz[1][1]; //Fila 1, columna 1 (índices basados en 0)
?>';

$resultado = "5";

$contenido_arrays .= mostrar_ejemplo($codigo, $resultado, 'Array multidimensional (matriz).');

#Cuarto ejemplo.

$codigo = '<?php
$numeros = [3,1,2];
sort($numeros);
print_r($numeros);
?>';

$resultado = "Array\n(\n    [0] => 1\n    [1] => 2\n    [2] => 3\n";

$contenido_arrays .= mostrar_ejemplo($codigo, $resultado, 'Función sort() para ordenar arrays.');

mostrar_seccion(
    '8. Arrays',
    'Los arrays en PHP son flexibles: pueden ser indexados, asociativos o multidimensionales. Existen muchas funciones para manipularlos.',
    $contenido_arrays
);
?>