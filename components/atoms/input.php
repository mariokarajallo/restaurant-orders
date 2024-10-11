<?php
function inputField($placeholder, $type = 'text', $name = '', $extraClasses = '')
{
    echo "<input type='$type' name='$name' placeholder='$placeholder' class='w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-r300 bg-gray-50 $extraClasses'>";
}
?>
