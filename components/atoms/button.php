<?php
function button($text, $size = 'md', $type = 'primary', $disabled = false, $icon = '', $extraClasses = '', $href = '') {
    // Definir diferentes colores según el tipo de botón
    $types = [
        'primary' => 'bg-r300 hover:bg-r400 text-white',
        'secondary' => 'bg-gray-500 hover:bg-gray-600 text-white',
        'danger' => 'bg-red-500 hover:bg-red-600',
    ];

    // Tamaños de botones
    $sizes = [
        'sm' => 'py-2 px-3 text-sm',
        'md' => 'py-3 px-4 text-base',
        'lg' => 'py-4 px-6 text-lg',
    ];

    // Estado deshabilitado
    $disabledClass = $disabled ? 'opacity-50 cursor-not-allowed' : '';

    // Clase base para el botón
    $baseClasses = "inline-block rounded-lg focus:outline-none {$types[$type]} {$sizes[$size]} $disabledClass $extraClasses";

    // Si el botón tiene un ícono
    $iconHtml = $icon ? "<span class='mr-2'>$icon</span>" : '';

    // Si hay un enlace, lo mostramos como <a>, de lo contrario como <button>
    if ($href && !$disabled) {
        echo "<a href='$href' class='$baseClasses'>$iconHtml $text</a>";
    } else {
        echo "<button class='$baseClasses' " . ($disabled ? 'disabled' : '') . ">$iconHtml $text</button>";
    }
}
?>
