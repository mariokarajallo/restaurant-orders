<?php
include 'components/molecules/promo-card.php';
?>

<!-- PROMOCION DESKTOP -->

<div class="grid-cols-12 gap-4 hidden md:grid ">
    <!-- Card grande (Promoción 1 - col-span-2, centrado) -->
    <div class="col-start-3 col-span-3 h-full max-h-full">
        <?php promoCard('/public/assets/images/promo-1.png', 'Promoción 1'); ?>
    </div>

    <!-- Subgrid para las promociones 2, 3 y 4 -->
    <div class="grid grid-cols-2 gap-4 col-span-5 h-full max-h-[500px]">
        <!-- Promoción 2 -->
        <div class="h-full">
            <?php promoCard('/public/assets/images/promo-2.png', 'Promoción 2'); ?>
        </div>

        <!-- Promoción 3 -->
        <div class="h-full">
            <?php promoCard('/public/assets/images/promo-3.png', 'Promoción 3'); ?>
        </div>

        <!-- Promoción 4 (col-span-2 para ocupar todo el ancho de 2 + 3) -->
        <div class="col-span-2 h-full max-h-[250px] ">
            <?php promoCard('/public/assets/images/promo-4.png', 'Promoción 4'); ?>
        </div>
    </div>
</div>

<!-- PROMOCIONE MOBILE -->
<div class="grid grid-cols-2 gap-4 md:hidden">
    <!-- Card grande (Promoción 1) -->
    <div class="col-span-2 h-full max-h-[150px]">
        <?php promoCard('/public/assets/images/promo-1.png', 'Promoción 1'); ?>
    </div>
    <!-- Promoción 2 -->
    <div class="col-span-1 md:col-span-1 h-full max-h-[150px]">
        <?php promoCard('/public/assets/images/promo-2.png', 'Promoción 2'); ?>
    </div>

    <!-- Promoción 3 -->
    <div class="col-span-1 md:col-span-1 h-full max-h-[150px]">
        <?php promoCard('/public/assets/images/promo-3.png', 'Promoción 3'); ?>
    </div>

    <!-- Promoción 4 (grande) -->
    <div class="col-span-2 h-full max-h-[150px]">
        <?php promoCard('/public/assets/images/promo-4.png', 'Promoción 4'); ?>
    </div>

</div>