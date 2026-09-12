<?php
$contenido_constantes = '';

$codigo = '<?php
define("PI", 3.14159265);
const VERSION = "8.0";
echo "PI =".PI."<br>;
echo "Version =". VERSION;
?>';

$resultado = "PI = 3.14159265\nVersion = 8.0";
$contenido_constantes .= mostrar_ejemplo($codigo, $resultado, 'Definición de constantes con define() y const.');

mostrar_seccion(
    '4. Constantes',
    'Las constantes son valores que no cambian durantes la ejecución. Se define con define() o const y por convención se escriben en mayusculas.',
    $contenido_constantes
);
?>