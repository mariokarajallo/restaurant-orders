<?php
include 'components/molecules/franchise-data.php';
include 'components/atoms/button.php';

function franchiseForm()
{
    echo '
        <form class="">
    <div class="p-8 bg-white rounded-2xl shadow-md space-y-4">
    <h3 class="text-xl font-semibold">Proforma de carta para solicitar franquicia</h3>';
    franchiseData();
    echo '<div class="text-center pt-8">';
    button("Enviar solicitud");
    echo '</div>';
    echo '</div>';

    echo '</form>
    
   ';
}
