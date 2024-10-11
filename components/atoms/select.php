<?php
function select($name, $options) {
    echo '
    <div class="relative">
        <select name="'.$name.'" class="w-full border border-gray-300 rounded-lg focus:outline-none focus:border-r300 px-4 py-3 bg-gray-50 appearance-none focus:ring-r300">';
    foreach ($options as $value => $label) {
        echo '<option value="'.$value.'">'.$label.'</option>';
    }
    echo '
        </select>
        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </div>
    </div>';
}
?>