<?php
include 'components/organisms/about-section.php';
include_once 'components/atoms/image.php';

echo '<section class="container mx-auto">

    <div class="h-64 md:h-96">';
image("/public/assets/images/banner-nosotros.png", "banner-trabajar-con-nosotros", "rounded-2xl");
echo '</div>

';
about_section();
echo "</section>";
