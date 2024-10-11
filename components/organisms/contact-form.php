<?php
include 'components/molecules/contact.php';
include 'components/atoms/button.php';

function contactForm()
{
    echo '
        <form class="">
    <div class="p-8 rounded-2xl shadow-lg space-y-4">
    <h3 class="text-xl font-semibold">Formulario de contacto:</h3>';
    contactData();
    echo '<div class="text-center pt-8">';
    button("Enviar mensaje");
    echo '</div>';
    echo '</div>';

    echo '</form>
    
   ';
}
