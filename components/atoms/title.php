<?php
function title($level, $text, $extraClasses = '') {
    // Definir los tamaños según el nivel de título
    $sizeClasses = [
        1 => 'text-4xl',  // Tamaño para <h1>
        2 => 'text-3xl',  // Tamaño para <h2>
        3 => 'text-2xl',  // Tamaño para <h3>
        4 => 'text-xl',   // Tamaño para <h4>
        5 => 'text-lg',   // Tamaño para <h5>
        6 => 'text-base', // Tamaño para <h6>
    ];

    // Obtener la clase de tamaño correspondiente o un valor por defecto sin isset
    $sizeClass = $sizeClasses[$level] ?? 'text-base'; // Por defecto h6 si el nivel no existe

    // Renderizar el componente con las clases
    echo "<h{$level} class='font-bold {$sizeClass} {$extraClasses}'>{$text}</h{$level}>";
}
?>
