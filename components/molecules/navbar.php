<?php require 'components/atoms/menu-item.php'; ?>

<nav class="bg-red-500 p-4">
  <ul class="flex space-x-4">
    <?php
      echo menuItem('Home', '/');
      echo menuItem('Menu', '/menu');
      echo menuItem('Sucursales', '/sucursales');
      echo menuItem('Franquicias', '/franquicias');
    ?>
  </ul>
</nav>