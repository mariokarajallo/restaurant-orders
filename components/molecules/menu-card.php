<a href="<?php echo $categoryLink; ?>" class="block transform hover:scale-105 transition-transform duration-300">
    <!-- Contenedor principal con posición relativa -->
    <div class="relative bg-white shadow-lg rounded-2xl overflow-hidden w-60 h-60">
        
        <!-- Imagen de fondo, colocada absolutamente detrás del contenido -->
        <img src="/public/assets/images/categoria-base.png" alt="Background image" class="absolute inset-0 w-full h-full object-cover z-0" />

        <!-- Contenido de la tarjeta, con z-index para estar encima del fondo -->
        <div class="relative z-10 p-4 space-y-4">
            
            <!-- Título de la categoría -->
            <h2 class="text-center text-lg font-semibold text-white"><?php echo $title; ?></h2>

            <!-- Imagen de la categoría -->
            <img src="<?php echo $imageSrc; ?>" alt="<?php echo $altText; ?>" class="w-full h-auto rounded-lg">
        </div>

    </div>
</a>
