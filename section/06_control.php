<?php
$contenido_control = '';

$codigo = '<?php
$edad = 18;
if ($edad >= 18){
    echo "Eres mayor de edad";
    }
else{
    echo "Eres menor de edad";
}
?>';

$resultado = "Eres mayor de edad";

$contenido_control .= mostrar_ejemplo($codigo, $resultado, 'Condicional if-else');

$codigo = '<?php
$dia = "lunes";
switch ($dia) {
    case"lunes":
        echo"Inicio de semana";
        break;
    case"viernes":
        echo"Casi fin de semana";
        break;
    default:
        echo "Día normal";
}
?>';

$resultado = "Inicio de semana";
$contenido_control .= mostrar_ejemplo($codigo, $resultado, 'Estructura switch.');

$codigo = '<?php
$colores = ["rojo","verde","azul"];
foreach ($colores as $color){
    echo "Color: $color<br>";
}
?>';

$resultado = "Color: rojo\nColor: verde\nColor: azul";
$contenido_control .= mostrar_ejemplo($codigo, $resultado, 'Bucle foreach para recorrer arrays.');

mostrar_seccion(
    '6. Estructuras de control',
    'Permiten tomar desiciones y repetir bloques de código: if, else, elseif, switch, while, do-while, for, foreach.',
    $contenido_control
);
?>