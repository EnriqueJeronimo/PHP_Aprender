<?php
$contenido_tipos = '';

$codigo = '<?php
$entero = 42;
$flotante = 3.1416;
$cadena = "Hola PHP";
$booleano = true;
$nulo = null;

var_dump($entero);
var_dump($flotante);
var_dump($cadena);
var_dump($booleno);
var_dump($nulo);
?>';

$resultado = "int(42)\nfloat(3.1416)\nstring(8) \"Hola PHP\"\nbool(true)\nNULL";

$contenido_tipos .= mostrar_ejemplo($codigo, $resultado, 'Tipos de datos escalares en PHP: integer, float, string, boolean, null');

$codigo = '<?php
$numero = 10;
$suma = $numero + 5; //PHP convierte automáticamente
echo "Suma: $suma<br>";
$cadena = (string)$numero;
echo "Cadena: $cadena<br>";
?>';

$resultado = "Suma: 15\nCadena: 10";

$contenido_tipos .= mostrar_ejemplo($codigo, $resultado, 'Conversión automática y explícita de tipos.');

mostrar_seccion(
    '3. Varibles y Tipos de datos.',
    'PHP es débilmente tipado: no necesitas declarar el tipo de una variable. Los principales tipos son: int, float, string, bool, array, object, null.',
    $contenido_tipos
);
?>