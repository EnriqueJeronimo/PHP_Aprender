<?php

//Imprime una sección completa con titulo, descripción y contenido.

function mostrar_seccion($titulo, $descripcion, $contenido){
    echo '<section class="seccion">';
    echo '<h2>'.htmlspecialchars($titulo).'</h2>';
    echo '<p class="description">'.htmlspecialchars($descripcion).'</p>';
    echo '<div class="contenido">'.$contenido.'</div>';
    echo '</section>';

}

//Muestra un ejemplo con código, resultado y descripción opcional.

function mostrar_ejemplo($codigo, $resultado, $descripcion=''){
    $html = '<div class="ejemplo">';
    if($descripcion){
        $html .= '<p><strong>Descripcion:</strong>'.htmlspecialchars($descripcion).'</p>';
        }
    $html .= '<pre class="codigo">'.htmlspecialchars($codigo).'</pre>';
    $html .= '<p><strong>Resultado:</strong><p>';
    $html .= '<pre class="resultado">' .$resultado . '</pre>';
    $html .= '</div>';
    return $html;
}
?>