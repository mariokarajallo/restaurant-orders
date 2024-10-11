<?php
include_once 'components/atoms/input.php';
include_once 'components/atoms/button.php';

function formFacturacion()
{
    echo "
    <h2 class='text-xl font-bold mb-4'>Datos de Facturación</h2>
    <form class='space-y-4'>
    <div class='grid grid-cols-1 md:grid-cols-2 gap-4'>";
    inputField('RUC', 'text', 'ruc');
    inputField('Razón Social', 'text', 'razon-social');
    echo"
    </div>
    <div class='text-end'>";
    button('Guardar cambios', 'md', 'primary');

    echo "
    </div>
    </form>";
}
?>
