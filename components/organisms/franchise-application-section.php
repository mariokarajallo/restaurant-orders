<?php
// Array que contiene los títulos y contenidos de cada acordeón
$terms = [
    [
        'title' => 'Solicitud de Información',
        'content' => 'El primer paso es solicitar información sobre la franquicia. Esto incluye detalles sobre el modelo de negocio, los requisitos financieros y el soporte proporcionado.',
    ],
    [
        'title' => 'Evaluación del Candidato',
        'content' => 'El equipo de franquicias evaluará su solicitud y determinará si cumple con los criterios necesarios para ser un franquiciado exitoso.',
    ],
    [
        'title' => 'Revisión del Acuerdo de Franquicia',
        'content' => 'Si es aprobado, se le proporcionará un acuerdo de franquicia para su revisión. Este documento detalla los términos y condiciones de la franquicia.',
    ],
    [
        'title' => 'Capacitación Inicial',
        'content' => 'Una vez firmado el acuerdo, participará en un programa de capacitación inicial que cubre todos los aspectos operativos y de gestión del negocio.',
    ],
    [
        'title' => 'Apertura del Local',
        'content' => 'Después de completar la capacitación, recibirá apoyo para la apertura de su local, incluyendo marketing, suministro de productos y asistencia operativa.',
    ],
   
];

// Renderizar contenido usando la molécula 'term.php'
foreach ($terms as $term) {
    $title = $term['title'];
    $content = $term['content'];
    include 'components/molecules/term.php';
}
?>
