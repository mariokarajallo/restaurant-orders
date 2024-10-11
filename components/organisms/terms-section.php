<?php
// Array que contiene los títulos y contenidos de cada acordeón
$terms = [
    [
        'title' => 'Uso del sitio web',
        'content' => 'Licencia: "Se concede permiso para descargar temporalmente una copia de los materiales..."',
    ],
    [
        'title' => 'Reservas',
        'content' => 'Las reservas realizadas en nuestro sitio están sujetas a la disponibilidad...',
    ],
    [
        'title' => 'Política de cancelación',
        'content' => 'Para cancelar su reserva debe notificarnos con al menos 24 horas...',
    ],
    [
        'title' => 'Privacidad',
        'content' => 'Nos comprometemos a proteger su privacidad. Recopilamos información...',
    ],
    [
        'title' => 'Cambios en los términos',
        'content' => 'Nos reservamos el derecho de modificar estos términos en cualquier momento...',
    ],
    [
        'title' => 'Ley aplicable',
        'content' => 'Estos términos y condiciones están regidos por las leyes del país...',
    ],
    [
        'title' => 'Contacto',
        'content' => 'Puede contactarnos en: info@bellini.com o llamarnos al +123456789...',
    ]
];

// Renderizar cada término usando la molécula 'term.php'
foreach ($terms as $term) {
    $title = $term['title'];
    $content = $term['content'];
    include 'components/molecules/term.php';
}
?>
