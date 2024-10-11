<?php

include 'components/atoms/button.php';

function promoCard($imageSrc, $altText)
{
    echo "
    <div class='relative rounded-3xl overflow-hidden shadow-lg h-full max-h-full'>
        <img src='$imageSrc' alt='$altText' class='w-full h-full object-cover min-h-0 max-h-full'>
        <div class='absolute bottom-4 left-4'>";
    button('Ordenar', 'md', "primary");
    echo " </div>
    </div>";
}
