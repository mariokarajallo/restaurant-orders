<?php
include_once 'components/atoms/icon.php'; 

function renderMenuItem($url, $icon, $label, $activeCategory) {
    $isActive = ($activeCategory === $label) ? 'text-r300' : 'text-gray-400 hover:text-gray-700';
    echo "
    <a href='$url' class='flex items-center justify-center fill-current $isActive space-x-2'>
      " . renderIcon($icon, 'w-10 h-10') . "
      <span>$label</span>
    </a>";
}
?>

<div class="rounded-full py-4 px-8 flex justify-around items-center">
  <?php
    $activeCategory = isset($_GET['category']) ? $_GET['category'] : 'Pizzas'; // Categoría activa por defecto
    renderMenuItem('/index.php?page=productos&category=Pastas', 'pasta', 'Pastas', $activeCategory);
    renderMenuItem('/index.php?page=productos&category=Lasagnas', 'lasagna', 'Lasagnas', $activeCategory);
    renderMenuItem('/index.php?page=productos&category=Pizzas', 'pizza', 'Pizzas', $activeCategory);
    renderMenuItem('/index.php?page=productos&category=Ensaladas', 'ensalada', 'Ensaladas', $activeCategory);
    renderMenuItem('/index.php?page=productos&category=Bebidas', 'bebida', 'Bebidas', $activeCategory);
    renderMenuItem('/index.php?page=productos&category=Postres', 'postre', 'Postres', $activeCategory);
  ?>
</div>
