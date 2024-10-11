<?php
include 'components/molecules/personal-data.php';
// include '../molecules/availability.php';
include 'components/molecules/work-experience.php';
include 'components/atoms/button.php';

function workForm()
{
    echo '
        <form class="mt-8">
    <div class="p-8 bg-white rounded-2xl shadow-md space-y-4">
    <h3 class="text-xl font-semibold">¿Listo para unirte?</h3>';
    personalData();
    workExperience();
    // availability();
    echo '<div class="text-center pt-8">';
    button("Enviar solicitud");
    echo '</div>';
    echo '</div>';

    echo '</form>
    
   ';
}
