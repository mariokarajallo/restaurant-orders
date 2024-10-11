<?php include 'components/molecules/product-card.php'; ?>

<section class="container text-center flex flex-col space-y-6">
  <div>
    <p class="font-bold text-r400 text-xl">favoritos que no puedes perderte</p>
    <h2 class="text-3xl font-bold">Selección Estelar</h2>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-4 justify-items-center">
    <div></div>
    <?php
      echo productCard('Pasta', 'Deliciosa pasta italiana', '/public/assets/images/fav-1.png', '#');
      echo productCard('Pizza 1', 'Pizza clásica', '/public/assets/images/fav-2.png', '#');
      echo productCard('Pizza 2', 'Pizza especial', '/public/assets/images/fav-3.png', '#');
      echo productCard('Bebidas', 'Variedad de bebidas', '/public/assets/images/fav-4.png', '#');
    ?>
  </div>
</section>