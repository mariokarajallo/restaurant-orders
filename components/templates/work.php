<?php
include 'components/organisms/work-form.php';
include 'components/atoms/title.php';
include 'components/atoms/image.php';
?>

<div class="container mx-auto space-y-8">
    <div class="space-y-4">
        <?php
            title(1, "Únete a Nuestro Equipo", "text-center text-black");
        echo ' <div class="h-64 md:h-96">';
            image("/public/assets/images/banner-trabajar-con-nosotros.jpg", "trabaja con nosotros", "rounded-2xl");
        echo '</div>';
        ?>
    </div>
        
            <?php workForm(); ?>
        
</div>
