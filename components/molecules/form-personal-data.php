<?php
include_once 'components/atoms/input.php';
include_once 'components/atoms/button.php';

function formPersonalData() {
    echo "
    <h2 class='text-xl font-bold mb-4'>Datos Personales</h2>
    <form class='space-y-4'>
    <div class='grid grid-cols-1 md:grid-cols-2 gap-4'>";
            inputField('Nombre', 'text', 'nombre');
            inputField('Apellido', 'text', 'apellido');
            inputField('Correo electrónico', 'email' , 'email');
            inputField('Número de celular','tel');
            inputField('CI o RUC', 'text', 'ci');
            inputField('Fecha nacimiento', 'date');
            inputField('Contraseña', 'password');
            inputField('Confirmar contraseña', 'password');
    echo "</div>
        <div class='text-end'>";
            button('Guardar cambios');
    echo "</div>
    </form>
    ";
}
?>
