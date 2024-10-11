<?php
function menuItem($text, $href, $isActive = false) {
    $activeClass = $isActive ? 'text-r300 font-bold' : 'text-gray-600 hover:text-r300';
    echo "<a href='$href' class='block py-2 $activeClass'>$text</a>";
}
?>
