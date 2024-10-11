<?php
include_once 'components/atoms/image.php';
include_once 'components/organisms/franchise-form.php';

?>
<div class="container mx-auto space-y-4  text-gray-900">

    <h1 class="text-2xl md:text-4xl font-bold">Únete a la Familia Bellini</h1>
    <p class="text-base">¿Estás interesado en ser parte de una marca reconocida con una rica historia en la gastronomía italiana? Bellini ofrece oportunidades de franquicia en diversas ubicaciones. Descubre cómo puedes comenzar tu propio Bellini y llevar nuestra tradición culinaria a tu comunidad.</p>
    <div class="h-64 md:h-96">
        <?php image("/public/assets/images/banner-franquicia.png", "banner-franquicia", "rounded-2xl"); ?>
    </div>
    <!-- VENTAJAS FRANQUICIAS -->
    <div class="md:p-8">
        <h2 class="text-xl md:text-2xl font-bold">Ventajas de franquiciar con Bellini</h2>
        <?php include 'components/organisms/benefits-section.php'; ?>

    </div>


    <!-- PROCESO FRANQUICIAS -->
    <div class="md:p-8">
        <h2 class="text-xl md:text-2xl font-bold">Proceso de solicitud:</h2>

        <?php include 'components/organisms/franchise-application-section.php'; ?>
    </div>

    <!-- FORMULARIO DE SOLICITUD FRANQUICI -->
    <section class="md:p-8">
        <?php franchiseForm(); ?>
     </section>




</div>