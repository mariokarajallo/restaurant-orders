<?php function productCard($title, $description, $image, $detailLink) { ?>
  <?php include_once 'components/atoms/button.php'; ?>

  <a href="<?php echo $detailLink; ?>" class="max-w-sm rounded-2xl overflow-hidden shadow-lg w-48 flex justify-center flex-col items-center hover:shadow-2xl transition-shadow duration-300 bg-white py-4">
    <!-- Contenedor del círculo con color de fondo -->
    <div class="w-28 h-28 rounded-full overflow-hidden bg-y300 flex items-center justify-center">
      <!-- Asegúrate de que la imagen llene el círculo -->
      <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>" class="w-full h-full object-cover">
    </div>
    <div class="px-6 space-y-4 text-center">
      <h3 class="font-bold text-base"><?php echo $title; ?></h3>
      <p class="text-gray-700 text-xs"><?php echo $description; ?></p>

      <!-- Botón grande para añadir al carrito -->
      <!-- <?php button('Añadir al carrito', 'lg', 'primary'); ?> -->
    </div>
  </a>
<?php } ?>
