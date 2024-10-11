<?php
// Array que contiene los títulos y contenidos de cada acordeón
$terms = [
    [
        'title' => 'Marca reconocida',
        'content' => 'Al adquirir una franquicia, se obtiene una marca reconocida, un modelo de negocio probado y un sistema de soporte continuo.',
    ],
    [
        'title' => 'Modelo de negocio probado',
        'content' => 'Al adquirir una franquicia, se obtiene una marca reconocida, un modelo de negocio probado y un sistema de soporte continuo.',
    ],
    [
        'title' => 'Sistema de soporte continuo',
        'content' => 'Al adquirir una franquicia, se obtiene una marca reconocida, un modelo de negocio probado y un sistema de soporte continuo.',
    ],
    [
        'title' => 'Capacitación y asistencia',
        'content' => 'Al adquirir una franquicia, se obtiene una marca reconocida, un modelo de negocio probado y un sistema de soporte continuo.',
    ],
    [
        'title' => 'Exclusividad territorial',
        'content' => 'Al adquirir una franquicia, se obtiene una marca reconocida, un modelo de negocio probado y un sistema de soporte continuo.',
    ],  
   
];

// Renderizar contenido usando la molécula 'term.php'
foreach ($terms as $term) {
    $title = $term['title'];
    $content = $term['content'];
    include 'components/molecules/term.php';
}
?>
