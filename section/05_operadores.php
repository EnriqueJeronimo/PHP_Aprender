<?php
$contenido_operadores = '';

$codigo = '<?php
$a = 10;
$b = 3;
echo $a + $b . "<br>";  //Suma
echo $a - $b . "<br>";  //Resta
echo $a * $b . "<br>";  //Multiplicación
echo $a / $b . "<br>";  //División
echo $a % $b . "<br>";  //Módulo
echo $a ** $b . "<br>"; //Expotenciación (PHP 5.6+)
?>';

$resultado = '13\n7\n\30\n3.3333333333\n1\n1000';

$contenido_operadores .= mostrar_ejemplo($codigo, $resultado, 'Operadores aritméticos.');

$codigo = '<?php
$x = 5;
$y = "5";
var_dump($x == $y);  // true (igualdad)
var_dump($x === $y); // false (identico, tipo incluido)
var_dump($x != $y);  // false
var_dump($x !== $y); // true
var_dump($x > 2);    // true
?>';

$resultado = "bool(true)\nbool(false)\nbool(false)\nbool(true)\nbool(true)";

$contenido_operadores .= mostrar_ejemplo($codigo, $resultado, 'Operadores de comparación. === y !== comparan valor y tipo.');

$codigo = '<?php
$a = true;
$b = false;
var_dump($a && $b); //false
var_dump($a || $b); //true
var_dump(!$a); //false
$nombre = "Juan";
$apellido = "Pérez";
$nombre_completo = $nombre . " " . $apellido;
echo $nombre_completo;
?>';

$resultado = "bool(false)\nbool(true)\nbool(false)\nJuan Pérez";
$contenido_operadores .= mostrar_ejemplo($codigo, $resultado, 'Operadores Logicos y de concatenación(.).');

mostrar_seccion(
    '5. Operadores',
    'PHP incluye operadores aritméticos, de asignación, comparación, lógicos, de incremento/decremento, de concatenación, etc.',
    $contenido_operadores,
);
?>