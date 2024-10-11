<?php
include_once 'components/atoms/input.php';
include_once 'components/atoms/button.php';

function misDirecciones() {
    echo "
    <h2 class='text-xl font-bold mb-4'>Mis Direcciones</h2>
    <form class='space-y-4'>
    <div class='grid grid-cols-1 md:grid-cols-2 gap-4'>
    <div class='col-span-2'>";
            inputField('Dirección', 'text', 'direccion');
            echo "</div>";
            inputField('Referencia', 'text', 'referencia');
            inputField('Número de casa', 'number', 'numero-casa');
            inputField('Ciudad', 'text', 'ciudad');
            inputField('Barrio', 'text', 'barrio');
            inputField('telefono', 'tel', 'telefono');
    echo "</div>
        <div class='text-end'>";
            button('Guardar cambios');
    echo "</div>
    </form>
    ";
}
?>
