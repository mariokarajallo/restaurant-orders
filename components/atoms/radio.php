<?php
function radio($name, $label, $value, $attributes = '') {
    echo '<label class="inline-flex items-center space-x-2 py-3">
            <input type="radio" name="'.$name.'" value="'.$value.'" class="form-radio h-5 w-5" '.$attributes.'>
            <span class="pr-4">'.$label.'</span>
          </label>';
}
?>