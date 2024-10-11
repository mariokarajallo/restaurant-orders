<?php

include_once 'components/atoms/icon.php'; 

function renderMenuItem($url, $icon, $label) {
    echo "
    <a href='$url' class='flex items-center justify-center text-white hover:text-black fill-current space-x-2'>
      " . renderIcon($icon, 'w-10 h-10') . "
      <span class=''>$label</span>
    </a>";
}
?>

<div class="overflow-x-auto whitespace-nowrap bg-r300 rounded-3xl lg:rounded-full py-4 px-8">
  <div class="flex justify-around items-center space-x-4">
    <?php
      renderMenuItem('/menu/pastas', 'pasta', 'Pastas');
      renderMenuItem('/menu/lasagnas', 'lasagna', 'Lasagnas');
      renderMenuItem('/menu/pizzas', 'pizza', 'Pizzas');
      renderMenuItem('/menu/ensaladas', 'ensalada', 'Ensaladas');
      renderMenuItem('/menu/bebidas', 'bebida', 'Bebidas');
      renderMenuItem('/menu/postres', 'postre', 'Postres');
    ?>
  </div>
</div>

