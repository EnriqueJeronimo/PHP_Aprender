<?php
require_once 'includes/functions.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aspectos Básicos de PHP</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Aspectos Básicos de PHP</h1>
        <p>Esta página muestra los fundamentos del lenguaje PHP mediante ejemplos ejecutados en el servidor.</p>
    
        <?php
            //Incluir todas las secciones en orden
            $secciones = glob('section/*.php');
            sort($secciones);
            foreach ($secciones as $archivo) {
                include $archivo;
            }
        ?>
    </div>
</body>
</html>